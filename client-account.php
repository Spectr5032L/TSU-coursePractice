<?php
require_once 'back/connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUBIT • База специалистов</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.css">
    <script src="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <header id="header">
        <div class="header-conteiner">
            <div class="container-logo">
                <div>
                    <a href="tel:+79008003535">+7 (900) 800-35 35</a>
                    <br>
                    hubit.info@main.ru
                </div>
                <div class="header-logo">
                    <strong>HUB</strong><strong style="color: #3CA0E7;">IT</strong>
                </div>
            </div>
            <nav role="navigation" class="primary-navigation">
                <ul>
                    <li><a href="back/user/logout.php">Выход</a></li>
                    <li><a href="index.php">Компаниям &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="index.php#specialization">Специализации</a></li>
                            <li><a href="index.php#stack">Стек технологий</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Кандидатам &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="vacancy.php">Вакансии</a></li>
                            <!-- <li><a href="#">Обучение</a></li> -->
                        </ul>
                    </li>
                    <li><a href="index.php#about-company">Компания</a></li>
                    <li style="border-right: 2px solid #3ca0e7;"><a href="index.php#form-cons">Консультация</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main-container">

            <div class="applications-cards">
                <h3>Открытые заявки || <a href="request.php" style="text-decoration: none;">&#10133;</a></h3>
                <div class="applications-items">

                    <?php
                    $userid = $_SESSION['user']['id'];
                    $queryRequests = "SELECT * FROM Requests WHERE client_id = '$userid'";
                    $resultReq = mysqli_query($connect, $queryRequests);
                    $countReqRow =  mysqli_num_rows($resultReq);
                    if (mysqli_num_rows($resultReq) > 0):
                    ?>
                        <?php while ($row = mysqli_fetch_assoc($resultReq)):

                            // Декодируем JSON-массив
                            $skillsArray = json_decode($row['skills'], true);

                            // Проверка на валидность массива
                            if (!is_array($skillsArray)) {
                                $skillsArray = [];
                            }

                            // Получаем только первые 3 навыка
                            $skills = array_slice($skillsArray, 0, 3);


                        ?>
                            <div class="applications-item">


                                <div class="applications-description">
                                    <h2 style="width: 300px;"><?php echo $row['position']; ?></h2>
                                    <div>
                                        <div class="item-info">
                                            <span>Дата создания: <?php echo $row['createdAt']; ?></span>
                                        </div>
                                        <ul class='list-style-one mdl-tabs__panel-text'>
                                            <?php foreach ($skills as $skill): ?>
                                                <li><?= htmlspecialchars(trim($skill)) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>Нет активных заявкок</p>
                    <?php endif; ?>



                </div>
                        

                <div class="selected-specialists">
                    <h3>Подобранные специалисты</h3>
                    <?php if($countReqRow > 0): ?>
                    <div class="formCons-in-touch specialization">
                        <div class="contact-form col">
                            <div class="form-field col" style="width: 100%;">
                                <input id="skills" name="skills" class="input-text js-input" type="text" required>
                                <label class="label" for="skills">Навыки работника</label>
                            </div>
                            <div class="form-field col" style="width: 100%;">
                                <input id="category" name="category" class="input-text js-input" type="text" required>
                                <label class="label" for="category">Категория работника</label>
                            </div>
                        </div>
                    </div>

                    <?php
                    $query = "SELECT id, nameSername, skills, position, salary, photo_path FROM ContactForm WHERE status = 'job'";
                    $result = mysqli_query($connect, $query);

                    // Проверка результата
                    if (mysqli_num_rows($result) > 0): ?>
                        <div class="specialists-items">
                            <?php while ($row = mysqli_fetch_assoc($result)):

                                // Декодируем JSON-массив
                                $skillsArray = json_decode($row['skills'], true);

                                // Проверка на валидность массива
                                if (!is_array($skillsArray)) {
                                    $skillsArray = [];
                                }

                                // Получаем только первые 3 навыка
                                $skills = array_slice($skillsArray, 0, 3);

                                // Фото
                                $photo = !empty($row['photo_path']) ? htmlspecialchars($row['photo_path']) : 'assets/img/avatar/default.jpg';
                            ?>
                                <div class="specialization-item" data-position="<?= htmlspecialchars(strtolower($row['position'])) ?>"
                                    data-skills="<?= htmlspecialchars(strtolower(implode(',', $skills))) ?>">
                                    <div class="item-img">
                                        <img src="<?= $photo ?>" alt="Фото <?= htmlspecialchars($row['nameSername']) ?>">
                                    </div>
                                    <div class="item-description">
                                        <h2 style="width: 300px;"> <a href='specialist-vacancy.php?id=<?php echo $row['id']; ?>'><?= htmlspecialchars($row['nameSername']) ?></a></h2>
                                        <div>
                                            <div class="item-info">
                                                <span><?= htmlspecialchars($row['position']) ?></span>
                                                <span><?= number_format($row['salary'], 0, ',', ' ') ?> ₽ (руб/мес)</span>
                                            </div>
                                            <ul class="list-style-one mdl-tabs__panel-text">
                                                <?php foreach ($skills as $skill): ?>
                                                    <li><?= htmlspecialchars(trim($skill)) ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php
                                            $specId = $row['id'];
                                            $queryState = "SELECT * FROM inviteClientSpec WHERE client_id = '$userid' AND spec_id = '$specId' ";
                                            $res = mysqli_query($connect, $queryState);
                                            $res1 = mysqli_fetch_assoc($res);

                                            if (mysqli_num_rows($res) == 0):
                                            ?>
                                                <form method="POST" action="back/request/inviteSpec.php">
                                                    <div class="button-container">
                                                        <button class="submit-btn accept-btn" type="submit">Пригласить</button>
                                                        <input hidden name='id_spec' value="<?php echo $row['id'] ?>">
                                                        <input hidden name='id_client' value="<?php echo $_SESSION['user']['id'] ?>">

                                                        <select name='idPosition'>
                                                            <?php
                                                            $queryRequests = "SELECT * FROM Requests WHERE client_id = '$userid'";
                                                            $resultReq = mysqli_query($connect, $queryRequests);

                                                            while ($row = mysqli_fetch_assoc($resultReq)): ?>
                                                                <option value="<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['position']) ?></option>
                                                            <?php endwhile; ?>

                                                        </select>
                                                    </div>
                                                </form>
                                            <?php elseif ($res1['status'] == "invited"): ?>
                                                <div class="button-container">
                                                    <button style="background-color:darkslategray;" class="submit-btn accept-btn" type="submit" disabled>Приглашен</button>
                                                </div>
                                            <?php else: ?>
                                                <div class="button-container">
                                                    <button style="background-color: green;" class="submit-btn accept-btn" type="submit" disabled>Принят</button>
                                                </div>
                                            <?php endif; ?>
                                            <?php
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>Нет доступных специалистов.</p>
                    <?php endif; ?>

                    <!-- <div class="specialists-items">
                    <div class="specialization-item">
                        <div class="item-img">
                            <img src='assets/img/avatar/candidates/75464be07ac80dff176eef75361f2685.jpg' alt='Фото $nameSername'>
                        </div>
                        <div class="item-description">
                            <h2 style="width: 300px;">Ростокин Владислав</h2>
                            <div>
                                <div class="item-info">
                                    <span>Frontend-разработчик</span>
                                    <span>80 000 ₽ (руб/мес)</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <li>Adobe Photoshop</li>
                                    <li>Angular</li>
                                    <li>Bootstrap</li>
                                </ul>
                                <div class="button-container">
                                    <button class="submit-btn accept-btn">Принять</button>
                                    <button class="submit-btn reject-btn">Отклонить</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php else: ?>
                        <p>Создайте заявку чтобы просмотреть специалистов</p>
                    <?php endif; ?>

                </div>
            </div>



        </div>
    </main>

    <footer>
        <div class="header-logo">
            <strong>HUB</strong><strong style="color: #3CA0E7;">IT</strong>
        </div>
        <div class="footer-container">
            <div class="footer-contact">
                <a href="tel:+79008003535">+7 (900) 800-35 35</a><br>
                hubit.info@main.ru <br>
                Москва, проспект Программистов 25, <br> <span style="padding-left: 20px;">корпус А, офис 102</span>
            </div>
            <div class="footer-links">
                <div>
                    <a href="index.php#specialization">Специализации</a>
                    <a href="index.php#stack">Стек технологий</a>
                </div>
                <div>
                    <a href="vacancy.php">Вакансии</a>
                    <a href="index.php#about-company">Компания</a>
                </div>
                <div>
                    <a href="index.php#form-cons">Консультация</a>
                </div>
            </div>
            <a class="footer-up" href="#header">Наверх <span>↑</span></a>
        </div>
    </footer>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const skillsInput = document.getElementById("skills");
        const categoryInput = document.getElementById("category");
        const cards = document.querySelectorAll(".specialization-item");

        function filterCards() {
            const skillsValue = skillsInput.value.trim().toLowerCase();
            const categoryValue = categoryInput.value.trim().toLowerCase();

            const skillTerms = skillsValue.split(/\s+/); // разбиваем по пробелам

            cards.forEach(card => {
                const cardSkills = card.getAttribute("data-skills");
                const cardPosition = card.getAttribute("data-position");

                // Проверка: все введённые навыки есть в карточке
                const matchesSkills = skillTerms.every(term => cardSkills.includes(term));
                const matchesPosition = categoryValue === "" || cardPosition.includes(categoryValue);

                if ((skillsValue === "" || matchesSkills) && matchesPosition) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        }

        // Когда пользователь вводит что-то — фильтруем
        skillsInput.addEventListener("input", filterCards);
        categoryInput.addEventListener("input", filterCards);
    });
</script>
<script src="JS/FAQ.js"></script>
<script src="JS/FormCons.js"></script>

</html>
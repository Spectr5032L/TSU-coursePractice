<?php 
    require_once 'back/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUBIT • Вакансии</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.css">
    <script src="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
       $(document).ready(function () {
            $('#add-skill').click(function (e) {
                e.preventDefault();
                $('#skills-container').append(
                    '<div class="form-field col x-100 skill-entry">' +
                    '<input name="skills[]" class="input-text js-input" type="text" required>' +
                    '<label style="bottom: 30px;" class="label">Ваш навык</label>' +
                    '<button style="text-transform: none; font-size: 12px; padding: 2.5px 5px;"  class="remove-skill-btn submit-btn" onclick="removeSkill(this)">Удалить</button>' +
                    '</div>'
                );
            });
        });

        function removeSkill(button) {
            var skillEntries = $('#skills-container .skill-entry');
            if (skillEntries.length > 1) {
                $(button).parent().remove();
            } else {
                alert('Нельзя удалить последний навык.');
            }
        }

        function showAlert(status) {
            if (status === 'duplicate') {
                alert('Запись с такими данными уже существует!');
            } else if (status === 'success') {
                alert('Запрос успешно отправлен, скоро мы с вами свяжемся!');
            } else if (status === 'invalid_phone') {
                alert('Некорректный номер телефона. Пожалуйста, введите правильный номер в формате: +7(905)470-35-99 или +79054703599 или 9054703599 или +7 (905) 470-3599.');
            } else if (status === 'skills_too_long') {
                alert('Поле "Ваши навыки вкратце" не должно превышать 200 символов.');
            } else if (status === 'reason_too_long') {
                alert('Поле "Почему вы хотите работать у нас" не должно превышать 200 символов.');
            } else if (status === 'position_too_long') {
                alert('Поле "Должность" не должно превышать 30 символов.');
            } else if (status === 'invalid_file_type') {
                alert('Недопустимый тип файла. Пожалуйста, загрузите изображение в формате JPG, JPEG или PNG.');
            } else if (status === 'upload_error') {
                alert('Ошибка загрузки файла. Пожалуйста, попробуйте еще раз.');
            } else if (status === 'invalid_photo_size') {
                alert('Некорректный размер фотографии. Пожалуйста, загрузите изображение шириной 230 пикселей.');
            } else {
                alert('Возникли непредвиденные проблемы');
            }
        }
    </script>

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
                    <li><a href="index.php">Компаниям &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="index.php#specialization">Специализации</a></li>
                            <li><a href="db-spec.php">База специалистов</a></li>
                            <li><a href="index.php#stack">Стек технологий</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Кандидатам &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="#">Обучение</a></li>
                        </ul>
                    </li> -->
                    <li><a href="index.php#about-company">Компания</a></li>
                    <li style="border-right: 2px solid #3ca0e7;"><a href="index.php#form-cons">Консультация</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="vacancy-container">
                <div class="vacancy-description">
                    <h1 class="title">Добро пожаловать</h1>
                    <div>
                        Если ты увлечен технологиями, стремишься к совершенству и готов работать над интересными
                        задачами,
                        мы будем рады видеть тебя в нашей команде. Твоя карьера в IT заслуживает лучшего – и HUBIT
                        готова это предоставить!
                    </div>
                </div>
            </div>
            <div class="main-faq">
                <div class="container-faq">
                    <h1 class="title">Вакансии</h1>
                    <div class="accordion">
                        <?php
                        require_once 'back/connect.php';

                        // Определяем функцию вне цикла
                        if (!function_exists('formatToListItems')) {
                            function formatToListItems($text) {
                                $items = explode("\n", $text);
                                $listItems = "";
                                foreach ($items as $item) {
                                    $listItems .= "<li>" . htmlspecialchars($item) . "</li>";
                                }
                                return $listItems;
                            }
                        }

                        $query = "SELECT * FROM Vacancies";
                        $result = mysqli_query($connect, $query);

                        if ($result) {
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $title = htmlspecialchars($row['title']);
                                $location = htmlspecialchars($row['location']);
                                
                                $offer = formatToListItems($row['offer']);
                                $requirements = formatToListItems($row['requirements']);
                                $conditions = formatToListItems($row['conditions']);
                                
                                echo "
                                <div class='accordion-item'>
                                    <button style='font-size: 2rem;' id='accordion-button-$counter' aria-expanded='false'>
                                        <span class='accordion-title'>$title</span><span class='icon' aria-hidden='true'></span>
                                    </button>
                                    <div class='accordion-content'>
                                        <p style='font-size: 18px;'>Что мы тебе предлагаем?</p>
                                        <ul class='list-style-one mdl-tabs__panel-text'>$offer</ul>
                                        <p style='font-size: 18px;'>Требования:</p>
                                        <ul class='list-style-one mdl-tabs__panel-text'>$requirements</ul>
                                        <p style='font-size: 18px;'>Условия:</p>
                                        <ul class='list-style-one mdl-tabs__panel-text'>$conditions</ul>
                                    </div>
                                </div>";
                                $counter++;
                            }
                        } else {
                            echo "<p>Ошибка загрузки вакансий: " . mysqli_error($connect) . "</p>";
                        }

                        mysqli_close($connect);
                        ?>
                    </div>
                </div>
            </div>
            <div class="vacancy-form">
                <section class="formCons-in-touch">
                    <h1 class="title">Откликнуться</h1>
                    <form class="contact-form row" action="back/crud/createContact.php" method="POST" enctype="multipart/form-data">
                        <div class="form-field col x-100">
                            <input id="email" name="email" class="input-text js-input" type="email" required>
                            <label class="label" for="email">E-mail</label>
                        </div>
                        <div class="form-field col x-50">
                            <input id="name" name="name" class="input-text js-input" type="text" required>
                            <label class="label" for="name">Ваше имя</label>
                        </div>
                        <div class="form-field col x-50">
                            <input id="phone" name="phone" class="input-text js-input" type="text" required>
                            <label class="label" for="phone">Телефон</label>
                        </div>
                        <div class="form-field col x-50">
                            <input id="position" name="position" class="input-text js-input" type="text" required>
                            <label class="label" for="position">Должность</label>
                        </div>
                        <div class="form-field col x-50">
                            <input id="city" name="city" class="input-text js-input" type="text" required>
                            <label class="label" for="city">Город трудоустройства</label>
                        </div>
                        <div id="skills-container">
                            <div class="form-field col x-100 skill-entry">
                                <input name="skills[]" class="input-text js-input" type="text" required>
                                <label style="bottom: 30px;" class="label">Ваш навык</label>
                                <button style="text-transform: none; font-size: 12px; padding: 2.5px 5px;" class="remove-skill-btn submit-btn" onclick="removeSkill(this)">Удалить</button>
                            </div>
                        </div>
                        <button style="text-transform: none; font-size: 12px; padding: 5px 10px;" id="add-skill" class="add-skill-btn submit-btn">Добавить навык</button>
                        <div class="form-field col x-100">
                            <input id="reason" name="reason" class="input-text js-input" type="text" required>
                            <label class="label" for="reason">Почему вы хотите работать у нас</label>
                        </div>
                        <div class="form-field col x-100">
                            <input id="photo" name="photo" class="input-file js-input" type="file" accept="image/*" required>
                            <label style="line-height: 50px;" class="label" for="photo">Загрузите вашу фотографию (120x170)</label>
                        </div>

                        <div class="form-field col x-100 align-center">
                            <input class="submit-btn" type="submit" value="Отправить">
                        </div>
                    </form>
                </section>
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
                    <a href="db-spec.php">База специалистов</a>
                    <a href="index.php#stack">Стек технологий</a>
                </div>
                <div>
                    <a href="vacancy.php">Вакансии</a>
                    <!-- <a href="#">Обучение</a> -->
                    <a href="index.php#about-company">Компания</a>
                </div>
                <div>
                    <a href="index.php#form-cons">Консультация</a>
                </div>
            </div>
            <a class="footer-up" href="#header">Наверх <span>↑</span></a>
        </div>
    </footer>

    <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        echo "<script>showAlert('$status');</script>";
    }
    ?>

</body>

<script src="JS/FAQ.js"></script>
<script src="JS/FormCons.js"></script>

</html>
<?php
require_once 'back/connect.php';
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
            <div class="specialization-description">
                <div class="vacancy-description">
                    <h1 class="title">Витрина кандидатов</h1>
                    <div style="line-height: 25px;">
                        Добро пожаловать на витрину кандидатов нашего сайта! Здесь вы найдете информацию о выдающихся профессионалах,
                        готовых присоединиться к вашей команде. Мы тщательно отбираем кандидатов, чтобы предложить вам самых квалифицированных и
                        опытных специалистов в своей области.
                    </div>
                </div>
            </div>

            <form id="filter-form" class="formCons-in-touch specialization">
                <div class="contact-form col">
                    <div class="form-field col x-100">
                        <input id="skills" name="skills" class="input-text js-input" type="text">
                        <label class="label" for="skills">Навыки работника</label>
                    </div>
                    <div class="form-field col x-100">
                        <input id="position" name="position" class="input-text js-input" type="text">
                        <label class="label" for="position">Категория работника</label>
                    </div>
                    <div class="form-field col x-100">
                        <input id="experience" name="experience" class="input-text js-input" type="number">
                        <label class="label" for="experience">Лет опыта</label>
                    </div>
                    <div class="form-field col x-100 align-center">
                        <button type="submit" class="filter-btn">Фильтровать</button>
                    </div>
                </div>
            </form>

            <div class="specialization-cards" id="results-container">
                <?php
                // Выполняем запрос к базе данных для получения кандидатов со статусом "job"
                $query = "SELECT nameSername, skills, position, salary, photo_path FROM ContactForm WHERE status = 'job'";
                $result = mysqli_query($connect, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nameSername = htmlspecialchars($row['nameSername']);
                        $skillsJson = $row['skills'];
                        $position = htmlspecialchars($row['position']);
                        $salary = htmlspecialchars($row['salary']);
                        $photo_path = htmlspecialchars($row['photo_path']);

                        // Декодируем JSON строку с навыками
                        $skillsArray = json_decode($skillsJson, true);
                        $skillsList = '';
                        if (is_array($skillsArray)) {
                            foreach ($skillsArray as $skill) {
                                $skillsList .= "<li>" . htmlspecialchars($skill) . "</li>";
                            }
                        }

                        // Создаем HTML-блок для каждого кандидата
                        // <p>Навыки:</p>
                        echo "
                        <div class='specialization-item'>
                            <div class='item-img'>
                                <img src='$photo_path' alt='Фото $nameSername'>
                            </div>
                            <div class='item-description'>
                                <h2 style='width: 300px;'>$nameSername</h2>
                                <div>
                                    <div class='item-info'>
                                        <span>$position</span>
                                        <span>" . number_format($salary, 0, '', ' ') . " (руб/мес)</span>
                                    </div>
                                    <ul class='list-style-one mdl-tabs__panel-text'>
                                        $skillsList
                                    </ul>
                                </div>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<p>Ошибка загрузки данных: " . mysqli_error($connect) . "</p>";
                }

                mysqli_close($connect);
                ?>
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
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('filter-form');
    const resultsContainer = document.getElementById('results-container');

    function sendFilter() {
        const formData = new FormData(form);

        let empty = true;
        for (let [key, value] of formData.entries()) {
            if (value.trim() !== '') {
                empty = false;
                break;
            }
        }

        fetch('back/filters.php', {
            method: 'POST',
            body: empty ? null : formData
        })
        .then(response => response.text())
        .then(html => {
            resultsContainer.innerHTML = html;
        })
        .catch(error => {
            console.error('Ошибка при фильтрации:', error);
        });
    }

    
    form.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', () => {
            sendFilter();
        });
    });

    
    sendFilter();
});
</script>


</html>
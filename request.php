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
                    '<label style="bottom: 30px;" class="label">Необходимый навык</label>' +
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
                    <li><a href="redirect.php">Личный кабинет</a></li>
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
            
            
            <div class="vacancy-form">
                <section class="formCons-in-touch">
                    <h1 class="title">Создание заявки</h1>
                    <form class="contact-form row" action="back/request/makeRequest.php" method="POST" enctype="multipart/form-data">
                        <div class="form-field col x-100">
                            <input id="position" name="pos" class="input-text js-input" type="text" required>
                            <label class="label" for="position">Категория работника</label>
                        </div>
                        
                        <div id="skills-container">
                            <div class="form-field col x-100 skill-entry">
                                <input name="skills[]" class="input-text js-input" type="text" required>
                                <label style="bottom: 30px;" class="label">Необходимый навык</label>
                                <button style="text-transform: none; font-size: 12px; padding: 2.5px 5px;" class="remove-skill-btn submit-btn" onclick="removeSkill(this)">Удалить</button>
                            </div>
                        </div>
                        <div>
                            <button style="text-transform: none; font-size: 12px; padding: 5px 10px;" id="add-skill" class="add-skill-btn submit-btn">Добавить навык</button>
                        </div>
                        

                        <div class="form-field col x-100 align-center">
                            <input class="submit-btn" type="submit" value="Отправить">
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>

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
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

            <div class="applications-cards">
                <h3>Открытые заявки</h3>
                <div class="applications-items">
                    <div class="applications-item">
                        <div class="applications-description">
                            <h2 style="width: 300px;">Product Lead</h2>
                            <div>
                                <div class="item-info">
                                    <span>Дата создания: 06.12.2024</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <li>Adobe Photoshop</li>
                                    <li>Angular</li>
                                    <li>Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="applications-item">
                        <div class="applications-description">
                            <h2 style="width: 300px;">Product Lead</h2>
                            <div>
                                <div class="item-info">
                                    <span>Дата создания: 06.12.2024</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <li>Adobe Photoshop</li>
                                    <li>Angular</li>
                                    <li>Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="applications-item">
                        <div class="applications-description">
                            <h2 style="width: 300px;">Product Lead</h2>
                            <div>
                                <div class="item-info">
                                    <span>Дата создания: 06.12.2024</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <li>Adobe Photoshop</li>
                                    <li>Angular</li>
                                    <li>Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="applications-item">
                        <div class="applications-description">
                            <h2 style="width: 300px;">Product Lead</h2>
                            <div>
                                <div class="item-info">
                                    <span>Дата создания: 06.12.2024</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <li>Adobe Photoshop</li>
                                    <li>Angular</li>
                                    <li>Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="applications-item">
                        <div class="applications-description">
                            <h2 style="width: 300px;">Product Lead</h2>
                            <div>
                                <div class="item-info">
                                    <span>Дата создания: 06.12.2024</span>
                                </div>
                                <ul class='list-style-one mdl-tabs__panel-text'>
                                    <li>Adobe Photoshop</li>
                                    <li>Angular</li>
                                    <li>Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="selected-specialists">
                <h3>Подобранные специалисты</h3>
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
                <div class="specialists-items">
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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

</html>
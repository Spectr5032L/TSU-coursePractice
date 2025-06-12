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
                            <li><a href="db-spec.php">База специалистов</a></li>
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

           <div class="specialization-container">
                <div class="specialization-description-container">
                    <div class="specialization-description-skills">
                        <h2>Навыки</h2>
                        <span>Dokcer, ELK, etc, GitLab, Go, Grafana, k8s, Kubernetes, PostgreSQL, SIEM, terraform</span>
                    </div>
                    <div class="specialization-description-experience">
                        <h2>Опыт работы: 14 лет</h2>
                        <div class="experience-item">
                            <ul>Southbridge</ul>
                            <span>Стажер - Апрель 2021 — Июнь 2021</span><br>
                            <span>Стажировка по направлению DevOps.</span>
                            <span>Во время стажировки были работы по установке и поддержке кластеров Kubernetes и Ceph, cистем мониторинга и логирования.</span>
                            <span>Реализован процесс CI / CD на основе Gitlab.</span>
                            <span>Реализован мониторинг (Grafana + Prometheus), для логирования использовался EFK.</span>
                        </div>
                        <div class="experience-item" style="padding: 0;"> <!-- На последний div нужно добавить стиль который будет убирать отступы, чтобы отступы от div и ul не усиливали друг-друга -->
                            <ul>QZhub</ul>
                            <span>DevOps - Октябрь 2020 — Июль 2021</span><br>
                            <span>Установка и поддержка Kubernetes</span>
                            <span>Миграция в Kubernetes</span>
                            <span>Реализация и поддержка CI / CD в Gitlab</span>
                            <span>Написание helm chart'ов</span>
                            <span>Поддержка линукс</span>
                            <span>Реализаци систем мониторинга и логирования</span>
                            <span>Git · PostgreSQL · Docker · Nginx · Kubernetes · Gitlab · Методологии CI / CD · Bash</span>
                        </div>
                    </div>
                    <div class="specialization-description-education">
                        <h2>Образование</h2>
                        <span>Институт физики высоких технологий, Техника высоких направлений / Физика и астрономия</span>
                    </div>
                    <div class="specialization-description-about">
                        <h2>Обо мне</h2>
                        <span>Внедряю передовые практики для оптимизации процессов разработки и повышения надежности инфраструктуры.</span>
                        <span>Активно изучаю технологии искусственного интеллекта и машинного обучения.</span>
                        <span>Участвую в развитии сообществ DevOps и облачной инженерии.</span>
                    </div>
                </div>

                <div class="specialization-card">
                    <div class="item-img">
                        <img style="margin-bottom: 20px;" src='assets/img/avatar/candidates/75464be07ac80dff176eef75361f2685.jpg' alt='Фото $nameSername'>
                    </div>
                    <div class="item-description">
                        <h2>Ростокин Владислав</h2>
                        <div>
                            <div class="item-info">
                                <span>Frontend-разработчик</span>
                                <span>80 000 ₽ (руб/мес)</span>
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
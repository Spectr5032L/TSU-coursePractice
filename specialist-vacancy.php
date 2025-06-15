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
    <?php
        $spec_id = htmlspecialchars($_GET['id']); 
        $query = "SELECT * FROM CharacteristicsSpecialist WHERE IdSpec = '$spec_id'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
        $exp = $row['ExperienceInt'];
        $skillsJson = $row['Skils'];
        $skillsArray = json_decode($skillsJson, true);
        $about = $row['About'];
        $edu = $row['Education'];

        $query = "SELECT * FROM ContactForm WHERE id = '$spec_id'";
        $result1 = mysqli_query($connect, $query);
        $row1 = mysqli_fetch_assoc($result1);
        $name = $row1['nameSername'];
        $pos = $row1['position'];
        $sal = $row1['salary'];
        $imgpath = $row1['photo_path'];

    ?>
    <main>
        <div class="main-container">

           <div class="specialization-container">
                <div class="specialization-description-container">
                    <div class="specialization-description-skills">
                        <h2>Навыки</h2>
                        <?php echo "<span style='text-align: justify; line-height: 25px; color:black'>" . implode(', ', $skillsArray) . "</span>";  ?>
                        <!-- <span>Dokcer, ELK, etc, GitLab, Go, Grafana, k8s, Kubernetes, PostgreSQL, SIEM, terraform</span> -->
                    </div>
                    <div class="specialization-description-experience">
                        <h2>Опыт работы:  <?php echo "<span>$exp лет</span>";  ?></h2>
                        <div class="experience-item">
                            <h2>Образование: <span style="text-align: justify; color:black"><?php echo $edu ?></span></h2>
                        </div>
                        <div class="experience-item" style="padding: 0; margin-top:-40px"> <!-- На последний div нужно добавить стиль который будет убирать отступы, чтобы отступы от div и ul не усиливали друг-друга -->
                            <h2>Информация о специалисте: </h2>
                            <span style="text-align: justify; line-height: 25px; color:black; text-indent: 20px;"><?php echo $about ?></span>
                        </div>
                    </div>
                    <!-- <div class="specialization-description-education">
                        <h2>Образование</h2>
                        <span>Институт физики высоких технологий, Техника высоких направлений / Физика и астрономия</span>
                    </div>
                    <div class="specialization-description-about">
                        <h2>Обо мне</h2>
                        <span>Внедряю передовые практики для оптимизации процессов разработки и повышения надежности инфраструктуры.</span>
                        <span>Активно изучаю технологии искусственного интеллекта и машинного обучения.</span>
                        <span>Участвую в развитии сообществ DevOps и облачной инженерии.</span>
                    </div> -->
                </div>

                <div class="specialization-card">
                    <div class="item-img">
                        <img style="margin-bottom: 20px;" src='<?php echo $imgpath ?>' alt='Фото $nameSername'>
                    </div>
                    <div class="item-description">
                        <h2><?php echo $name ?></h2>
                        <div>
                            <div class="item-info">
                                <span><?php echo $pos ?></span>
                                <span><?php echo $sal ?> (руб/мес)</span>
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
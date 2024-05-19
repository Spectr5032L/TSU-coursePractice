<?php 
    require_once 'back/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUBIT • Главная</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.css">
    <script src="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function showAlert(status) {
            if (status === 'duplicate') {
                alert('Запись с такими данными уже существует!');
            } else if (status === 'success') {
                alert('Запрос успешно отправлен, скоро мы с вами свяжемся!');
            } else if (status === 'invalid_phone') {
                alert('Некорректный номер телефона. Пожалуйста, введите правильный номер в формате: +7(905)470-35-99 или +79054703599 или 9054703599 или +7 (905) 470-3599.');
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
                    <li><a href="#">Компаниям &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="#specialization">Специализации</a></li>
                            <!-- <li><a href="#">База специалистов</a></li> -->
                            <li><a href="#stack">Стек технологий</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Кандидатам &dtrif;</a>
                        <ul class="dropdown">
                            <li><a href="vacancy.php">Вакансии</a></li>
                            <!-- <li><a href="#">Обучение</a></li> -->
                        </ul>
                    </li>
                    <li><a href="#about-company">Компания</a></li>
                    <li style="border-right: 2px solid #3ca0e7;"><a href="#form-cons">Консультация</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="main-description">
                <!-- <img class="description-img" src="assets/img/main-description-black.jpg" alt=""> -->
                <div class="container-description">
                    <div class="description-text">
                        <h3 class="text">HUBIT - подберем любых IT-специалистов быстро и качественно, чтобы помочь вашей
                            компании расти.</h3>
                    </div>
                    <div class="description-item">
                        <div class="item-table table-one">
                            <div class="table-title"><span>36</span> <strong>лет</strong></div>
                            <div class="table-text">общее кол-во лет на рынке</div>
                        </div>
                        <div class="item-table table-two">
                            <div class="table-title"><span>560</span> <strong>клиентов</strong></div>
                            <div class="table-text">постоянных компаний-партнеров</div>
                        </div>
                        <div class="item-table table-three">
                            <div class="table-title"><span>743 000</span> <strong>заказов</strong></div>
                            <div class="table-text">закрыли успешно</div>
                        </div>
                        <div class="item-table table-four">
                            <div class="table-title"><span>119</span> <strong>человека</strong></div>
                            <div class="table-text">состав нашей команды</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about-company" class="main-about">
                <section class="about-section">
                    <div class="container">
                        <div class="container-row">
                            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                                <div class="inner-column">
                                    <div class="sec-title">
                                        <span class="title">О компании</span>
                                        <h2>Соединяем опыт и надежность<br> с 1988 года! </h2>
                                    </div>
                                    <div class="text-company">Наша цель - не просто удовлетворить ожидания клиентов, а
                                        превзойти их.
                                        Мы гордимся тем, что наша компания олицетворяет стабильность, надежность и
                                        инновационный дух.
                                        Присоединяйтесь к нам, и давайте вместе создадим будущее, которое превзойдет все
                                        ожидания.</div>
                                    <ul class="list-style-one">
                                        <li>Инновационные решения</li>
                                        <li>Качество без компромиссов</li>
                                        <li>Долгосрочные отношения</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- img -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column wow fadeInLeft">
                                    <figure class="image-1"><img src="assets/img/people-meeting.jpg" alt=""></figure>
                                    <!-- assets/img/meeting-inside.jpg -->
                                    <figure class="image-2"><img src="assets/img/office-place.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="specialization" class="main-specialization">
                <h5 class="text-center">Специализация нашего IT-персонала</h5>
                <div class="mdl-tabs vertical-mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="mdl-cell mdl-cell--2-col">
                            <div class="mdl-tabs__tab-bar">
                                <a href="#tab1-panel" class="mdl-tabs__tab is-active">
                                    <span class="hollow-circle">Администрирование</span>
                                </a>
                                <a href="#tab2-panel" class="mdl-tabs__tab">
                                    <span class="hollow-circle">Разработка</span>
                                </a>
                                <a href="#tab3-panel" class="mdl-tabs__tab">
                                    <span class="hollow-circle">Дизайн</span>
                                </a>
                                <a href="#tab4-panel" class="mdl-tabs__tab">
                                    <span class="hollow-circle">Анализ данных</span>
                                </a>
                                <a href="#tab5-panel" class="mdl-tabs__tab">
                                    <span class="hollow-circle">Безопасность</span>
                                </a>
                                <a href="#tab6-panel" class="mdl-tabs__tab">
                                    <span class="hollow-circle">Управление</span>
                                </a>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--10-col">
                            <div class="mdl-tabs__panel is-active" id="tab1-panel">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Администрирование операционных систем (Windows, Linux, macOS)</li>
                                    <li>Администрирование сетей (Network Administration)</li>
                                    <li>Администрирование баз данных (Database Administration)</li>
                                    <li>Виртуализация и облачные технологии (Virtualization and Cloud Technologies)</li>
                                    <li>Администрирование безопасности информационных систем (Security Administration)
                                    </li>
                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="tab2-panel">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Веб-разработка (Web Development)</li>
                                    <li>Мобильная разработка (Mobile Development)</li>
                                    <li>Разработка приложений (Application Development)</li>
                                    <li>Фронтенд-разработка (Frontend Development)</li>
                                    <li>Бэкенд-разработка (Backend Development)</li>
                                    <li>Full-stack разработка (Full-stack Development)</li>
                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="tab3-panel">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>UI дизайн (User Interface Design)</li>
                                    <li>Графический дизайн (Graphic Design)</li>
                                    <li>Интерактивный дизайн (Interactive Design)</li>
                                    <li>Анимационный дизайн (Motion Design)</li>
                                    <li>Визуализация данных (Data Visualization)</li>
                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="tab4-panel">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Бизнес-анализ данных (Business Data Analysis)</li>
                                    <li>Анализ данных в реальном времени (Real-time Data Analysis)</li>
                                    <li>Прогнозирование и моделирование данных (Data Forecasting and Modeling)</li>
                                    <li>Аналитика больших данных (Big Data Analytics)</li>
                                    <li>Визуализация данных и дашборды (Data Visualization and Dashboards)</li>
                                    <li>Анализ текстовых данных (Text Data Analysis)</li>
                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="tab5-panel">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Этичное взломчество (Ethical Hacking)</li>
                                    <li>Киберзащита (Cyber Defense)</li>
                                    <li>Управление угрозами и рисками (Threat and Risk Management)</li>
                                    <li>Пентестинг (Penetration Testing)</li>
                                    <li>Криптография (Cryptography)</li>
                                    <li>Безопасность приложений и кода (Application and Code Security)</li>
                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="tab6-panel">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Управление проектами (Project Management)</li>
                                    <li>Продуктовый менеджмент (Product Management)</li>
                                    <li>Управление программами (Program Management)</li>
                                    <li>Лидерство и управление командами (Leadership and Team Management)</li>
                                    <li>Стратегическое планирование (Strategic Planning)</li>
                                    <li>Управление рисками и качеством (Risk and Quality Management)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="stack" class="main-stack">
                <!-- <h5 class="text-center">Стэки технологий</h5> -->
                <div class="stack-container">
                    <div class="stack-text">
                        <h3>Наши специалисты освоили <span style="color: rgb(152, 152, 152);">огромный стек
                                технологий.</span></h3>
                        <div>
                            Все изученные технологии соответствуют современным стандартам разработки.
                            <br><br>
                            Каждые 6 месяцев наши специалисты проходят дополнительные курсы для повышения квалификации.
                        </div>
                    </div>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q1" type="checkbox" class="panel">
                            <label for="q1" class="panel-title"><span class="arrow" style="font-size: 25px;">↑</span> Backend Development</label>
                            <div class="panel-content">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Express.js (Node.js)</li>
                                    <li>Ruby on Rails (Ruby)</li>
                                    <li>Django (Python)</li>
                                    <li>Spring (Java)</li>
                                    <li>Elasticsearch</li>
                                    <li>JWT (JSON Web Tokens)</li>
                                    <li>OAuth</li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq-question">
                            <input id="q2" type="checkbox" class="panel">
                            <label for="q2" class="panel-title"><span class="arrow" style="font-size: 25px;">↑</span> Frontend development & Design</label>
                            <div class="panel-content">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>HTML, CSS, JavaScript</li>
                                    <li>Sass (Syntactically Awesome Style Sheets) и LESS</li>
                                    <li>React.js</li>
                                    <li>Vue.js</li>
                                    <li>Jest, Mocha, Chai</li>
                                    <li>Adobe XD, Figma, Sketch</li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq-question">
                            <input id="q3" type="checkbox" class="panel">
                            <label for="q3" class="panel-title"><span class="arrow" style="font-size: 25px;">↑</span> Big Data</label>
                            <div class="panel-content">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>MySQL и PostgreSQL</li>
                                    <li>MongoDB</li>
                                    <li>Redis</li>
                                    <li>Apache Hadoop</li>
                                    <li>Tableau и Power BI</li>
                                    <li>Apache Zeppelin и Jupyter Notebook</li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq-question">
                            <input id="q4" type="checkbox" class="panel">
                            <label for="q4" class="panel-title"><span class="arrow" style="font-size: 25px;">↑</span> Information Security</label>
                            <div class="panel-content">
                                <ul class="list-style-one mdl-tabs__panel-text">
                                    <li>Hardware и Software Firewalls</li>
                                    <li>SSL/TLS</li>
                                    <li>Системы обнаружения (IDS) и Системы предотвращения (IPS) вторжений</li>
                                    <li>SIEM-платформы</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="main-tabsInfo">
                <div id="container">
                    <header class="tabs-nav">
                        <ul>
                            <li class="active"><a href="#tab1">Этапы работы</a></li>
                            <li><a href="#tab2">Источники кандидатов</a></li>
                            <li><a href="#tab3">Наши преимущества</a></li>
                        </ul>
                    </header>

                    <section class="tabs-content">
                        <div id="tab1">
                            <h3>Этапы работы с нами</h3>
                            <ol class="list-style-one">
                                <li>
                                    <span>Консультация и Анализ: </span>В начале нашего сотрудничества мы осуществляем
                                    глубокий
                                    анализ ваших потребностей и требований к кандидатам.
                                    Наши эксперты внимательно изучают ваш бизнес, его цели, корпоративную культуру и
                                    специфические требования к персоналу.
                                </li>
                                <li>
                                    <span>Поиск и Отбор Кандидатов: </span>Наша команда специалистов по подбору
                                    тщательно исследует
                                    рынок труда и использует передовые методы поиска, чтобы найти наиболее подходящих
                                    кандидатов.
                                    Мы проводим многократный отбор, оценивая каждого потенциального сотрудника с точки
                                    зрения их профессиональных и личностных качеств.
                                </li>
                                <li>
                                    <span>Представление Кандидатов: </span>Мы представляем вам наиболее подходящих
                                    кандидатов, чьи
                                    профили соответствуют вашим требованиям.
                                    Вы получаете доступ к полной информации о каждом кандидате, включая их резюме,
                                    результаты тестирования и наши рекомендации.
                                </li>
                                <li>
                                    <span>Сопровождение Процесса Отбора: </span>Наша поддержка не заканчивается
                                    представлением
                                    кандидатов.
                                    Мы оказываем содействие в организации собеседований, тестировании и проведении
                                    оценочных центров, а также предоставляем консультации по вопросам отбора и принятия
                                    решений.
                                </li>
                                <li>
                                    <span>Итоговое Решение и Интеграция: </span>После проведения всех этапов отбора и
                                    согласования
                                    кандидатов мы поддерживаем вас в процессе окончательного выбора кандидата и его
                                    интеграции в вашу команду.
                                    Мы гарантируем, что каждый выбранный сотрудник будет идеально вписываться в вашу
                                    компанию и вносить свой вклад в ее успех.
                                </li>
                            </ol>
                        </div>
                        <div id="tab2">
                            <h3>Источники Поиска Кандидатов</h3>
                            <p>Мы активно привлекаем кандидатов из различных источников, чтобы обеспечить максимальную
                                гибкость и широкий выбор профессионалов для наших клиентов.
                                Наша стратегия включает в себя поиск специалистов через профессиональные социальные сети
                                и онлайн-платформы, активное использование баз данных и рекомендаций от наших партнеров
                                и клиентов, а также организацию специализированных мероприятий,
                                таких как карьерные ярмарки и конференции. Мы также поддерживаем постоянные контакты с
                                учебными заведениями и профессиональными сообществами, чтобы быть в курсе последних
                                тенденций и выявлять потенциальных кандидатов на ранних этапах их карьерного развития.
                                Наша цель - найти не просто кандидата, но наилучшего кандидата, который подходит именно
                                для вашей компании.</p>
                        </div>
                        <div id="tab3">
                            <h3>Обращение к нам обеспечивает ряд преимуществ</h3>
                            <ul class="list-style-one">
                                <li>
                                    <span>Экспертное Знание: </span>Мы обладаем глубокими знаниями рынка труда и опытом
                                    в области
                                    подбора персонала,
                                    что позволяет нам эффективно выявлять наиболее подходящих кандидатов для вашей
                                    компании.
                                </li>
                                <li>
                                    <span>Индивидуальный Подход: </span>Мы ценим уникальность каждого бизнеса и
                                    разрабатываем
                                    персонализированные стратегии подбора персонала,
                                    учитывая специфику вашей отрасли, корпоративную культуру и потребности.
                                </li>
                                <li>
                                    <span>Широкий Доступ к Кандидатам: </span>Мы имеем доступ к обширной базе данных
                                    специалистов и
                                    используем передовые методы поиска,
                                    чтобы обеспечить вам доступ к наилучшим кандидатам на рынке труда.
                                </li>
                                <li>
                                    <span>Эффективность и Экономия Времени: </span>Наш профессиональный подход к подбору
                                    персонала
                                    позволяет сократить время на поиск и отбор кандидатов,
                                    освобождая ваши ресурсы для других стратегически важных задач.
                                </li>
                                <li>
                                    <span>Гарантированные Результаты: </span>Мы стремимся к достижению идеального
                                    соответствия между
                                    вашими потребностями и навыками кандидатов,
                                    что обеспечивает успешную интеграцию новых сотрудников и увеличивает эффективность
                                    вашей команды.
                                </li>
                                <li>
                                    <span>Партнерство на Долгосрочной Основе: </span>Мы ценим долгосрочные отношения с
                                    нашими
                                    клиентами и стремимся быть надежным партнером в развитии вашего бизнеса,
                                    предлагая поддержку и консультации на всех этапах работы с персоналом.
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="main-reviews">
                <!-- <h5 class="text-center">Отзывы</h5> -->
                <section class="t-bq-section" id="emma">
                    <button id="prevButton" style="font-size: 60px;">ᐸ</button>
                    
                    <?php
                    // require_once 'back/connect.php';

                    $query = "SELECT commentText, authorComment FROM Reviews";
                    $result = mysqli_query($connect, $query);

                    if ($result) {
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $commentText = htmlspecialchars($row['commentText']);
                            $authorComment = htmlspecialchars($row['authorComment']);
                            $hiddenClass = $counter > 1 ? 'hidden' : '';
                            echo "
                            <div class='t-bq-wrapper t-bq-wrapper-boxed $hiddenClass' id='testimonial$counter'>
                                <div class='t-bq-quote t-bq-quote-emma'>
                                    <div class='t-bq-quote-emma-qmark'><span>&#10077;</span></div>
                                    <div class='t-bq-quote-emma-base'>
                                        <blockquote class='t-bq-quote-emma-text' cite='$authorComment'>
                                            $commentText
                                        </blockquote>
                                    </div>
                                </div>
                            </div>";
                            $counter++;
                        }
                    } else {
                        echo "<p>Ошибка загрузки отзывов: " . mysqli_error($connect) . "</p>";
                    }

                    mysqli_close($connect);
                    ?>

                    <button id="nextButton" style="font-size: 60px;">ᐳ</button>
                </section>
            </div>
            <div class="main-faq">
                <div class="container-faq">
                    <h5 class="text-center">Часто задаваемые вопросы</h5>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Как
                                    долго занимает процесс подбора персонала?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Время подбора персонала зависит от конкретных требований и особенностей вакансии,
                                    однако мы
                                    стремимся проводить процесс подбора как можно быстрее, обычно от нескольких недель
                                    до нескольких месяцев.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Как вы
                                    гарантируете качество подбора кандидатов?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Мы используем передовые методы подбора персонала, включая тщательный отбор
                                    кандидатов, тестирование и оценку их профессиональных навыков,
                                    а также проверку рекомендаций. Мы также гарантируем полную конфиденциальность и
                                    профессиональный подход к каждому клиенту.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Каковы
                                    ставки за ваши услуги?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Стоимость наших услуг зависит от объема работы и конкретных требований клиента,
                                    которые обговариваются во время созвона.
                                    Мы предлагаем гибкую ценовую политику и индивидуальный подход к каждому клиенту.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Можете
                                    ли вы помочь с оформлением визы для иностранных кандидатов?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Да, мы предоставляем помощь в оформлении всех необходимых документов для иностранных
                                    кандидатов, включая визы и рабочие разрешения.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Какой
                                    процесс сотрудничества с вашей компанией?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Процесс сотрудничества начинается с консультации, где мы выясняем ваши потребности и
                                    требования.
                                    Затем мы разрабатываем стратегию подбора персонала и приступаем к выполнению задач.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">Какие
                                    регионы вы обслуживаете?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Мы обслуживаем клиентов по всей стране и готовы рассмотреть проекты в любых
                                    регионах.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-7" aria-expanded="false"><span class="accordion-title">Как
                                    связаться с вашей компанией для начала сотрудничества?
                                </span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>
                                    Вы можете связаться с нами заполнив форму обратной связи на нашем сайте.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="form-cons" class="main-formCons">
                <section class="formCons-in-touch">
                    <h1 class="title">Форма для связи</h1>
                    <form class="contact-form row" action="back/crud/createCommunication.php" method="POST">
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
                            <input id="company" name="company" class="input-text js-input" type="text" required>
                            <label class="label" for="company">Название вашей компании</label>
                        </div>
                        <div class="form-field col x-50">
                            <input id="message" name="message" class="input-text js-input" type="text" required>
                            <label class="label" for="message">Какой специалист требуется</label>
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
                    <a href="index.php#form-cons">Консультация</a>
                    <a href="index.php#stack">Стек технологий</a>
                </div>
                <div>
                    <a href="vacancy.php">Вакансии</a>
                    <!-- <a href="#">Обучение</a> -->
                    <a href="index.php#about-company">Компания</a>
                </div>
                <!-- <div>
                    <a href="index.php#form-cons">Консультация</a>
                </div> -->
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

<script src="JS/TabsInfo.js"></script>
<script src="JS/Reviews.js"></script>
<script src="JS/FAQ.js"></script>
<script src="JS/FormCons.js"></script>

</html>
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2025 г., 15:46
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tsu-curse-itog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `CharacteristicsSpecialist`
--

CREATE TABLE `CharacteristicsSpecialist` (
  `id` int NOT NULL,
  `IdSpec` int NOT NULL COMMENT 'ссылка на специалиста в таблице ContactForm',
  `Skils` varchar(400) NOT NULL COMMENT 'навыки специалиста в формате json',
  `ExperienceInt` int NOT NULL COMMENT 'Опыт работы специалиста в годах',
  `Education` text NOT NULL COMMENT 'Образование специалиста',
  `About` text NOT NULL COMMENT 'Информация о специалисте которую он решил предоставить.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Таблица которая хранит информацию о специалисте';

--
-- Дамп данных таблицы `CharacteristicsSpecialist`
--

INSERT INTO `CharacteristicsSpecialist` (`id`, `IdSpec`, `Skils`, `ExperienceInt`, `Education`, `About`) VALUES
(1, 1, '[\"Dokcer\", \"ELK\", \"GitLab\", \"Go\", \"Grafana\", \"k8s\", \"Kubernetes\", \"PostgreSQL\", \"SIEM\", \"terraform\"]', 12, 'Институт физики высоких технологий, Техника высоких направлений / Физика и астрономия.', 'Внедряю передовые практики для оптимизации процессов разработки и повышения надежности инфраструктуры.\r\nАктивно изучаю технологии искусственного интеллекта и машинного обучения.\r\nУчаствую в развитии сообществ DevOps и облачной инженерии.\r\n'),
(3, 16, '[\"Vue js, React, angular\"]', 5, 'Фронтенд разработчик', 'Я специалист в области IT, большой опыт работы в сфере информационных технологий. Отличные коммуникативные навыки. Высокая организованность и ответственность. Умение работать в команде. Желание дальше развиваться, участвовать в новых проектах и получать навыки, необходимые для достижения поставленной цели.'),
(4, 17, '[\"Vue js\",\"Angular\",\"Html\"]', 5, 'Фронтенд разработчик', 'Резюме для устройства на работу - это краткое изложение информации о соискателе, которое включает в себя его образование, опыт работы, навыки, личные качества и другие релевантные данные, предназначенное для представления потенциальному работодателю. Цель резюме - произвести благоприятное впечатление и заинтересовать работодателя, чтобы получить приглашение на собеседование. '),
(5, 18, '[\"FastApi\",\"RestApi\",\"Laravel\"]', 5, 'Фронтенд разработчик', 'Резюме для устройства на работу - это краткое изложение информации о соискателе, которое включает в себя его образование, опыт работы, навыки, личные качества и другие релевантные данные, предназначенное для представления потенциальному работодателю. Цель резюме - произвести благоприятное впечатление и заинтересовать работодателя, чтобы получить приглашение на собеседование. '),
(6, 19, '[\"Vue js\",\"FastApi\",\"Laravel\"]', 10, 'Фронтенд разработчик, Бэкенд Разработчик', 'Приветствую. Я Fullstack-разработчик с опытом создания веб-приложений. Работаю с фронтендом и бэкендом. Пишу на JavaScript/TypeScript. Использую React и Vue для фронтенда. Для бэкенда предпочитаю Node.js с Express/Nest или Python с Django/FastAPI. Имею опыт работы с базами данных SQL и NoSQL. Настраиваю авторизацию и API. Работал с Docker и облачными сервисами. Умею настраивать CI/CD. Участвовал в разработке интернет-магазинов, CRM-систем и чат-приложений. Пишу чистый и поддерживаемый код. Готов к работе в команде. Ищу интересные проекты для роста.');

-- --------------------------------------------------------

--
-- Структура таблицы `CommunicationForm`
--

CREATE TABLE `CommunicationForm` (
  `id` int NOT NULL,
  `nameSername` char(35) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` char(100) NOT NULL,
  `nameCompany` char(100) NOT NULL,
  `nameSpecialist` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Форма с главной страницы';

--
-- Дамп данных таблицы `CommunicationForm`
--

INSERT INTO `CommunicationForm` (`id`, `nameSername`, `phone`, `email`, `nameCompany`, `nameSpecialist`) VALUES
(5, 'фывф', 'ыфвфы', 'test@mail.ru', 'фывфыв', 'фывфыв'),
(6, 'фывф', 'ыфвфы', 'test@mail.ru', 'фывфыв', 'фывфыв'),
(7, 'Иван', '83143243424', 'test@mail.ru', 'СуперИнвинтро', 'Просто не тупой'),
(8, 'Boris Britva', '83143243424', 'test@mail.ru', 'СуперИнвинтро', 'Ну Коля - норм'),
(9, 'Boris Britva', '+79044703599', 'test@mail.ru', 'СуперИнвинтро', 'Ну Коля - норм'),
(10, 'Boris Britva', '89044703599', 'test@mail.ru', 'СуперИнвинтро', 'ывыфв'),
(11, 'Boris Britva', '+7(904)470-35-99', 'test@mail.ru', 'СуперИнвинтро', 'ывыфв'),
(12, 'Michail', '83143243424', 'test@mail.ru', 'SuperInv', 'Back dev'),
(14, 'Варанцов Дмитрий О.', '880055353', 'bratchenko-00@mail.ru', 'ООО \"Назавод\"', 'Frontend-developer'),
(15, 'Щеглов олег Н.', '+7(982)547-52-59', 'snuser@mail.ru', 'ItForum', 'Backend-developer');

-- --------------------------------------------------------

--
-- Структура таблицы `ContactForm`
--

CREATE TABLE `ContactForm` (
  `id` int NOT NULL,
  `nameSername` char(35) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` char(100) NOT NULL,
  `skills` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cityFor` char(30) NOT NULL,
  `reason` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `position` char(30) NOT NULL,
  `salary` float NOT NULL,
  `photo_path` varchar(64) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Форма с страницы вакансий';

--
-- Дамп данных таблицы `ContactForm`
--

INSERT INTO `ContactForm` (`id`, `nameSername`, `phone`, `email`, `skills`, `cityFor`, `reason`, `position`, `salary`, `photo_path`, `status`) VALUES
(17, 'Братченко Александр', '88005553535', 'sbtop00@mail.ru', '[\"Vue js\",\"Angular\",\"Html\"]', 'Ханты-Мансийск', 'sas', 'Frontend', 75555, 'assets/img/avatar/candidates/684d9482a4413.jpg', 'accept'),
(18, 'Братченко Александр', '88005553535', 'sbtop1@mail.ru', '[\"FastApi\",\"RestApi\",\"Laravel\"]', 'Ханты-Мансийск', 'sas', 'Backend', 75555, 'assets/img/avatar/candidates/684d9a05654c6.jpg', 'accept'),
(19, 'Дунайцев Валентин', '88005553535', 'brat1@mail.ru', '[\"Vue js\",\"FastApi\",\"Laravel\"]', 'Ханты-Мансийск', 'Ай нид мани', 'FullStack', 100000, 'assets/img/avatar/candidates/684eb8cd5b90e.png', 'job');

-- --------------------------------------------------------

--
-- Структура таблицы `inviteClientSpec`
--

CREATE TABLE `inviteClientSpec` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `spec_id` int NOT NULL,
  `id_request` int NOT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `inviteClientSpec`
--

INSERT INTO `inviteClientSpec` (`id`, `client_id`, `spec_id`, `id_request`, `status`) VALUES
(4, 15, 17, 11, 'approved'),
(5, 18, 18, 13, 'approved');

-- --------------------------------------------------------

--
-- Структура таблицы `Requests`
--

CREATE TABLE `Requests` (
  `id` int NOT NULL,
  `position` varchar(256) NOT NULL,
  `skills` varchar(400) NOT NULL,
  `createdAt` date NOT NULL,
  `client_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Requests`
--

INSERT INTO `Requests` (`id`, `position`, `skills`, `createdAt`, `client_id`) VALUES
(11, 'Frontend-Developer', '[\"Vue js\",\"React\",\"Fastapi\"]', '2025-06-14', 15),
(12, 'Backend-Developer', '[\"FastApi\",\"PHP\",\"RestApi\"]', '2025-06-14', 15),
(13, 'Backend-Developer', '[\"FastApi\",\"Vue js\",\"React\"]', '2025-06-15', 18),
(14, 'Backend', '\"FastApi, RestApi, Laravel\"', '2025-06-15', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int NOT NULL,
  `commentText` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `authorComment` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Отзывы о компании на главной странице';

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`id`, `commentText`, `authorComment`) VALUES
(1, 'Сотрудничество с вашей компанией принесло нам отличные результаты! Профессиональный подход, внимательное отношение к нашим требованиям и оперативность в поиске кандидатов сделали наше сотрудничество приятным и продуктивным.', 'Екатерина Петрова'),
(2, 'Благодаря вашей помощи мы быстро нашли кандидата, который идеально подходит для нашей компании. Ваши специалисты проявили высокий уровень профессионализма и внимательно выслушали наши требования. Рекомендую вашу компанию всем, кто ищет качественный подбор персонала.', 'Алексей Иванов'),
(3, 'Очень довольна результатами сотрудничества с вашей компанией. Благодаря вашему эффективному подходу к поиску кандидатов, мы быстро заполнили вакансию и получили высококвалифицированного специалиста. Спасибо за ваш профессионализм и внимательное отношение к нашим потребностям.', 'Ольга Смирнова'),
(4, 'Работа с вашей компанией превзошла все мои ожидания. Вы нашли для нас идеального кандидата, который не только отлично вписался в нашу команду, но и превзошел наши ожидания своими навыками и профессионализмом. Огромное спасибо за ваше внимание к деталям и быструю реакцию на наши запросы', 'Иван Сергеев'),
(5, 'Сотрудничество с вашей компанией стало для нас настоящим открытием! Ваша команда проявила высокий уровень профессионализма и глубокое понимание наших потребностей. Благодаря вам, мы смогли найти идеального кандидата для нашей вакансии. Спасибо за ваше отличное обслуживание и качественную работу.', 'Мария Козлова');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  `role` varchar(32) NOT NULL,
  `spec_id` int DEFAULT NULL,
  `client_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `spec_id`, `client_id`) VALUES
(15, 'bratchenko-00@mail.ru', '$2y$10$7J1u7PAqm92OGO3APpKtAeo2t7Gtlj58pyhftVVG.L9aSc9OAQwo6', 'client', NULL, 14),
(16, 'sbtop00@mail.ru', '$2y$10$kWAubH/t3ZW/Q7fQQBaegexzw1SYveYH7xCVbVWfO3r/YCKP9sfd6', 'spec', 17, NULL),
(17, 'sbtop1@mail.ru', '$2y$10$AUGvsJrGY5TWMb4oXXrfiuAFDpbYt6jX2VUrJDElovwNeq1JQydgS', 'spec', 18, NULL),
(18, 'snuser@mail.ru', '$2y$10$c7NRVi5LnbgZw4UCFTUBG.1pC1Gj0ypz3W3Nga7wIz5kNrafzmPCi', 'client', NULL, 15),
(19, 'brat1@mail.ru', '$2y$10$kD/jwY1EXjo/nzdx9JV9TOCJWhVEJAsTNu/UrJwawR5sZXliFd8Za', 'spec', 19, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Vacancies`
--

CREATE TABLE `Vacancies` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `offer` text NOT NULL,
  `requirements` text NOT NULL,
  `conditions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Vacancies`
--

INSERT INTO `Vacancies` (`id`, `title`, `location`, `offer`, `requirements`, `conditions`) VALUES
(2, 'QA-инженер (Тестировщик), Новосибирск', 'Новосибирск', 'Интересные и инновационные проекты: У нас ты будешь работать над современными и захватывающими проектами, использующими передовые технологии.\r\n  Профессиональный рост: Мы поддерживаем постоянное развитие и предлагаем возможности для обучения, курсы и участие в конференциях.\r\n  Гибкий график: Возможность удаленной работы и гибкий рабочий график, чтобы ты мог совмещать работу с личной жизнью.\r\n  Комфортный офис: Современные офисы в центре города с уютной атмосферой и всеми необходимыми удобствами.\r\n  Социальный пакет: Медицинская страховка, оплачиваемые отпуска и больничные, корпоративные мероприятия и другие бонусы.', 'Опыт работы в качестве QA-инженера от 2 лет.\n  Знание основ тестирования ПО и различных видов тестирования (функциональное, регрессионное, нагрузочное и т.д.).\n  Понимание жизненного цикла разработки ПО и роли тестирования на каждом этапе.\n  Навыки написания тест-кейсов, создания тестовых планов и отчетов о тестировании.\n  Знание SQL и умение работать с базами данных.\n  Желательно знание скриптовых языков (Python, JavaScript) для автоматизации тестирования.', 'График работы: Полная занятость, гибкий график с возможностью удаленной работы.\n  Местоположение: Новосибирск.\n  Оформление: Официальное трудоустройство по ТК РФ.\n  Отпуск: Оплачиваемый ежегодный отпуск 28 календарных дней.\n  Дополнительные бонусы: Медицинская страховка, корпоративные мероприятия, курсы повышения квалификации и многое другое.'),
(3, 'Frontend разработчик, Москва', 'Москва', 'Интересные и инновационные проекты: У нас ты будешь работать над современными и захватывающими проектами, использующими передовые технологии.\nПрофессиональный рост: Мы поддерживаем постоянное развитие и предлагаем возможности для обучения, курсы и участие в конференциях.\nГибкий график: Возможность удаленной работы и гибкий рабочий график, чтобы ты мог совмещать работу с личной жизнью.\nКомфортный офис: Современные офисы в центре города с уютной атмосферой и всеми необходимыми удобствами.\nСоциальный пакет: Медицинская страховка, оплачиваемые отпуска и больничные, корпоративные мероприятия и другие бонусы.', 'Опыт работы с HTML, CSS и JavaScript (ES6+).\nЗнание фреймворков, таких как React, Angular или Vue.js.\nОпыт работы с системами контроля версий (Git).\nПонимание принципов адаптивного дизайна и кроссбраузерной совместимости.\nУмение работать с RESTful API.\nНавыки тестирования кода (Jest, Mocha, Cypress и т.д.).\nЖелательно знание инструментов сборки (Webpack, Gulp, Parcel).', 'График работы: Полная занятость, гибкий график с возможностью удаленной работы.\nМестоположение: Москва.\nОформление: Официальное трудоустройство по ТК РФ.\nОтпуск: Оплачиваемый ежегодный отпуск 28 календарных дней.\nДополнительные бонусы: Медицинская страховка, корпоративные мероприятия, курсы повышения квалификации и многое другое.');

-- --------------------------------------------------------

--
-- Структура таблицы `WorkExperience`
--

CREATE TABLE `WorkExperience` (
  `id` int NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Experience` varchar(400) NOT NULL,
  `IdSpec` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `WorkExperience`
--

INSERT INTO `WorkExperience` (`id`, `Company`, `Experience`, `IdSpec`) VALUES
(1, 'Southbridge', '[\"Стажер - Апрель 2021 — Июнь 2021\", \"Стажировка по направлению DevOps.\", \"Во время стажировки были работы по установке и поддержке кластеров Kubernetes и Ceph, cистем мониторинга и логирования.\", \"Реализован процесс CI / CD на основе Gitlab.\", \"Реализован мониторинг (Grafana + Prometheus), для логирования использовался EFK.\"]', 1),
(2, 'QZhub', '[\"DevOps - Октябрь 2020 — Июль 2021\", \"Установка и поддержка Kubernetes.\", \"Миграция в Kubernetes.\", \"Реализация и поддержка CI / CD в Gitlab.\", \"Написание helm chart\'ов.\", \"Поддержка линукс.\", \"Реализаци систем мониторинга и логирования.\", \"Git · PostgreSQL · Docker · Nginx · Kubernetes · Gitlab · Методологии CI / CD · Bash\"]', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `CharacteristicsSpecialist`
--
ALTER TABLE `CharacteristicsSpecialist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `CommunicationForm`
--
ALTER TABLE `CommunicationForm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ContactForm`
--
ALTER TABLE `ContactForm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inviteClientSpec`
--
ALTER TABLE `inviteClientSpec`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Requests`
--
ALTER TABLE `Requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authorComment` (`authorComment`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Vacancies`
--
ALTER TABLE `Vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `WorkExperience`
--
ALTER TABLE `WorkExperience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `CharacteristicsSpecialist`
--
ALTER TABLE `CharacteristicsSpecialist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `CommunicationForm`
--
ALTER TABLE `CommunicationForm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `ContactForm`
--
ALTER TABLE `ContactForm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `inviteClientSpec`
--
ALTER TABLE `inviteClientSpec`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Requests`
--
ALTER TABLE `Requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `Vacancies`
--
ALTER TABLE `Vacancies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `WorkExperience`
--
ALTER TABLE `WorkExperience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

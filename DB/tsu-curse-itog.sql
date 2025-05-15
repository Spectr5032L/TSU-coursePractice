-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2025 г., 18:27
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
(12, 'Michail', '83143243424', 'test@mail.ru', 'SuperInv', 'Back dev');

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
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Форма с страницы вакансий';

--
-- Дамп данных таблицы `ContactForm`
--

INSERT INTO `ContactForm` (`id`, `nameSername`, `phone`, `email`, `skills`, `cityFor`, `reason`, `position`, `salary`, `photo_path`, `status`) VALUES
(1, 'Boris Britva', '83143243424', 'test@mail.ru', 'Я могу в фронт', 'Москва', 'Нужны деньги(', 'Frontend', 0, 'assets/img/avatar/candidates/682600d98338c.jpg', 'job'),
(2, 'Boris Britva', '83143243424', 'test@mail.ru', 'Я могу в фрон', 'Москва', 'Нужны деньги(', 'Frontend', 0, 'assets/img/avatar/candidates/682600d98338c.jpg', 'vac'),
(3, 'Boris Britva', '83143243424', 'test@mail.ru', 'Я могу в фронs', 'Москва', 'Нужны деньги(', 'Frontend', 0, 'assets/img/avatar/candidates/682600d98338c.jpg', 'job'),
(4, 'Boris Britva', '83143243424', 'test@mail.ru', 'dsfsdfs', 'Москва', 'sdfsdfsdasdas', 'Frontend', 0, 'assets/img/avatar/candidates/682600d98338c.jpg', 'job'),
(5, 'Гость', '+7 (904) 470-35-99', 'mihail.plotnikov.08@mail.ru', '[\"sdf\"]', 'ds', 'hgggdf', 'sdfs', 0, 'assets/img/avatar/candidates/682600d98338c.jpg', 'job');

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
(2, 'QA-инженер (Тестировщик), Новосибирск', 'Новосибирск', 'Интересные и инновационные проекты: У нас ты будешь работать над современными и захватывающими проектами, использующими передовые технологии.\r\n  Профессиональный рост: Мы поддерживаем постоянное развитие и предлагаем возможности для обучения, курсы и участие в конференциях.\r\n  Гибкий график: Возможность удаленной работы и гибкий рабочий график, чтобы ты мог совмещать работу с личной жизнью.\r\n  Комфортный офис: Современные офисы в центре города с уютной атмосферой и всеми необходимыми удобствами.\r\n  Социальный пакет: Медицинская страховка, оплачиваемые отпуска и больничные, корпоративные мероприятия и другие бонусы.', 'Опыт работы в качестве QA-инженера от 2 лет.\r\n  Знание основ тестирования ПО и различных видов тестирования (функциональное, регрессионное, нагрузочное и т.д.).\r\n  Понимание жизненного цикла разработки ПО и роли тестирования на каждом этапе.\r\n  Навыки написания тест-кейсов, создания тестовых планов и отчетов о тестировании.\r\n  Знание SQL и умение работать с базами данных.\r\n  Желательно знание скриптовых языков (Python, JavaScript) для автоматизации тестирования.', 'График работы: Полная занятость, гибкий график с возможностью удаленной работы.\n  Местоположение: Новосибирск.\n  Оформление: Официальное трудоустройство по ТК РФ.\n  Отпуск: Оплачиваемый ежегодный отпуск 28 календарных дней.\n  Дополнительные бонусы: Медицинская страховка, корпоративные мероприятия, курсы повышения квалификации и многое другое.'),
(3, 'Frontend разработчик, Москва', 'Москва', 'Интересные и инновационные проекты: У нас ты будешь работать над современными и захватывающими проектами, использующими передовые технологии.\nПрофессиональный рост: Мы поддерживаем постоянное развитие и предлагаем возможности для обучения, курсы и участие в конференциях.\nГибкий график: Возможность удаленной работы и гибкий рабочий график, чтобы ты мог совмещать работу с личной жизнью.\nКомфортный офис: Современные офисы в центре города с уютной атмосферой и всеми необходимыми удобствами.\nСоциальный пакет: Медицинская страховка, оплачиваемые отпуска и больничные, корпоративные мероприятия и другие бонусы.', 'Опыт работы с HTML, CSS и JavaScript (ES6+).\nЗнание фреймворков, таких как React, Angular или Vue.js.\nОпыт работы с системами контроля версий (Git).\nПонимание принципов адаптивного дизайна и кроссбраузерной совместимости.\nУмение работать с RESTful API.\nНавыки тестирования кода (Jest, Mocha, Cypress и т.д.).\nЖелательно знание инструментов сборки (Webpack, Gulp, Parcel).', 'График работы: Полная занятость, гибкий график с возможностью удаленной работы.\nМестоположение: Москва.\nОформление: Официальное трудоустройство по ТК РФ.\nОтпуск: Оплачиваемый ежегодный отпуск 28 календарных дней.\nДополнительные бонусы: Медицинская страховка, корпоративные мероприятия, курсы повышения квалификации и многое другое.');

--
-- Индексы сохранённых таблиц
--

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
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authorComment` (`authorComment`);

--
-- Индексы таблицы `Vacancies`
--
ALTER TABLE `Vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `CommunicationForm`
--
ALTER TABLE `CommunicationForm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `ContactForm`
--
ALTER TABLE `ContactForm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Vacancies`
--
ALTER TABLE `Vacancies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

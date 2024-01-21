-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2023 г., 11:53
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Cleaning`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Description of the problem`
--

CREATE TABLE `Description of the problem` (
  `id` int NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `secondname` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `photo` text COLLATE utf8mb4_general_ci NOT NULL,
  `pricelist` int DEFAULT NULL,
  `executor` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Description of the problem`
--

INSERT INTO `Description of the problem` (`id`, `name`, `secondname`, `telephone`, `email`, `description`, `photo`, `pricelist`, `executor`) VALUES
(1, 'Danila', 'Tsydilin', '79376599341', 'Kuraminioa@mail.ru', 'We will help you solve the problem of cleaning your apartment at an affordable price. Our employee will come to you and handle it in a short time', 'https://expert-cleaning.com/wp-content/uploads/2021/07/kliner.png', 1, 3),
(3, 'Roman', 'Sobolev', '79272002199', 'SobolevRoma@gmail.com', 'We will help you solve the problem of cleaning your car at an affordable price. Our employee will come to you and handle it in a short time', 'https://static.tildacdn.com/tild3139-6165-4362-b761-306337353036/Car-interior-steam-c.jpg', 4, 4),
(4, 'Evgeniy', 'Rozhkov', '79376230021', 'Rozhkov@yandex.ru', ' Cleaning Car!!!!', 'https://cdn.carcare.net.au/wp-content/uploads/AdobeStock_243325385-scaled.jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `executors`
--

CREATE TABLE `executors` (
  `id` int NOT NULL,
  `names` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `executors`
--

INSERT INTO `executors` (`id`, `names`) VALUES
(1, 'John'),
(2, 'Arthur'),
(3, 'Kenny'),
(4, 'Adam');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int NOT NULL,
  `price` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `price`) VALUES
(1, '5000'),
(2, '7500'),
(3, '10000'),
(4, '12500');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Description of the problem`
--
ALTER TABLE `Description of the problem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `pricelist` (`pricelist`),
  ADD KEY `executor` (`executor`);

--
-- Индексы таблицы `executors`
--
ALTER TABLE `executors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Description of the problem`
--
ALTER TABLE `Description of the problem`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `executors`
--
ALTER TABLE `executors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Description of the problem`
--
ALTER TABLE `Description of the problem`
  ADD CONSTRAINT `description of the problem_ibfk_1` FOREIGN KEY (`pricelist`) REFERENCES `prices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `description of the problem_ibfk_2` FOREIGN KEY (`executor`) REFERENCES `executors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

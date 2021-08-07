-- phpMyAdmin SQL Dump
-- version 5.1.1-1.fc34
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.122.177
-- Время создания: Авг 07 2021 г., 10:23
-- Версия сервера: 8.0.21
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `brand` enum('Lexus','Tayota') NOT NULL,
  `model` enum('ES','GX','Camry','Corolla') NOT NULL,
  `engine` enum('Бензин','Дизель','Гибрид') NOT NULL,
  `transmission` enum('Полный','Передний') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `engine`, `transmission`) VALUES
(1, 'Lexus', 'GX', 'Бензин', 'Полный'),
(4, 'Lexus', 'ES', 'Гибрид', 'Передний'),
(6, 'Lexus', 'ES', 'Бензин', 'Передний'),
(7, 'Lexus', 'GX', 'Дизель', 'Полный'),
(8, 'Tayota', 'Camry', 'Бензин', 'Передний'),
(9, 'Tayota', 'Corolla', 'Дизель', 'Полный'),
(10, 'Lexus', 'ES', 'Бензин', 'Передний'),
(11, 'Lexus', 'GX', 'Дизель', 'Полный'),
(12, 'Tayota', 'Camry', 'Бензин', 'Передний'),
(13, 'Tayota', 'Corolla', 'Дизель', 'Полный'),
(14, 'Lexus', 'ES', 'Бензин', 'Передний'),
(15, 'Lexus', 'GX', 'Дизель', 'Полный'),
(16, 'Tayota', 'Camry', 'Бензин', 'Передний'),
(17, 'Tayota', 'Corolla', 'Дизель', 'Полный'),
(18, 'Lexus', 'ES', 'Бензин', 'Передний'),
(19, 'Lexus', 'GX', 'Дизель', 'Полный'),
(20, 'Tayota', 'Camry', 'Бензин', 'Передний'),
(21, 'Tayota', 'Corolla', 'Дизель', 'Полный'),
(22, 'Lexus', 'ES', 'Бензин', 'Передний'),
(23, 'Lexus', 'GX', 'Дизель', 'Полный'),
(24, 'Tayota', 'Camry', 'Бензин', 'Передний'),
(25, 'Tayota', 'Corolla', 'Дизель', 'Полный');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand` (`brand`),
  ADD KEY `model` (`model`),
  ADD KEY `engine` (`engine`) USING BTREE,
  ADD KEY `transmission` (`transmission`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

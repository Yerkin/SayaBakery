-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 18 2016 г., 07:10
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `saya`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baker`
--

CREATE TABLE `baker` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `baker`
--

INSERT INTO `baker` (`id`, `name`, `surname`, `email`, `pass`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'anuar', 'anuar', 'anuar', 'anuar'),
(3, 'bauka', 'bauka', 'bauka', 'bauka'),
(5, 'zhora', 'zhora', 'zhora', 'zhora'),
(6, 'yerkin', 'yerkin', 'yerkin', 'yerkin'),
(8, 'tim', 'tim', 'tim', 'tim'),
(9, 'timka', 'timka', 'timka', 'timka'),
(14, '', '', '', ''),
(15, 'test', 'test', 'test', 'test'),
(16, 'who', 'who', 'who@mail.ru', '123'),
(17, 'tim', 'tim', 'tim', 'tim');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(155) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `def` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `url`, `des`, `def`, `cost`) VALUES
(1, 'img/1.jpg', 'Dream', 'The best cake ever you have tasted', 5000),
(2, 'img/2.jpg', 'SC', 'The best cake ever you have tasted', 4000),
(3, 'img/3.jpg', 'Chocolate', 'The best cake ever you have tasted', 3000);

-- --------------------------------------------------------

--
-- Структура таблицы `Recipe`
--

CREATE TABLE `Recipe` (
  `id` int(11) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `Recipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Recipe`
--

INSERT INTO `Recipe` (`id`, `CName`, `Recipe`) VALUES
(1, 'Dream', 'The cake reminds me of my grandmother, because it was one of her specialties. I bake it often for family parties, and it always brings back fond memories. The cake is light and airy with a delicious chocolate taste. This recipe is a keeper! —Patricia Kreitz, Richland, Pennsylvania'),
(2, 'SC', 'Years ago, I drove 4-1/2 hours to a cake contest, holding my entry on my lap the whole way. But it paid off. One bite and you''ll see why this velvety beauty won first prize. —Sandra Johnson, Tioga, Pennsylvania'),
(3, 'Chocolate', 'This recipe is my family and friends very favorite dessert. I love making it because it is so simple.—Ms. Jeanette Hoffman, Oshkosh, Wisconsin\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(255) UNSIGNED NOT NULL,
  `count` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `count`, `weight`, `name`, `delivery`, `phone`) VALUES
(8, '2', '2', 'SC', 'with', '87013238789'),
(9, '3', '4', 'Dream', 'without', '1234556');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baker`
--
ALTER TABLE `baker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baker`
--
ALTER TABLE `baker`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(155) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

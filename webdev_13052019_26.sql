-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 26 2019 г., 00:29
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `webdev_13052019_26`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `full_text` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `name`, `full_text`, `img_src`, `priority`) VALUES
(1, 'ПУТЕШЕСТВИЯ ПО РОССИИ', 'самые красивые уголки страны', 'icon/moscow.png', 10),
(2, 'ПУТЕШЕСТВИЯ ПО БРИТАНИИ', 'самые красивые уголки страны', 'icon/big-ben.png', 20),
(3, 'ПУТЕШЕСТВИЯ ПО АВСТРАЛИИ', 'самые красивые уголки материка', '/icon/kangaroo.png', 40),
(4, 'ПУТЕШЕСТВИЯ ПО АФРИКЕ', 'самые красивые уголки материка', '/icon/pyramids.png', 60),
(5, 'ПУТЕШЕСТВИЯ ПО СЕВЕРНОЙ АМЕРИКЕ', 'самые красивые уголки материка', '/icon/south-america.png', 30),
(6, 'ПУТЕШЕСТВИЯ ПО ЮЖНОЙ АМЕРИКЕ', 'самые красивые уголки материка', '/icon/south-america.png', 50);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `fio`, `email`, `comment`, `phone`) VALUES
(1, 'Есенин', 'esenin@mail.ru', 'бла бла бла', '2019-07-20 16:00:27'),
(2, 'tyty', 'regular@mail.ru', 'бла бла бла', '2019-07-20 16:14:11'),
(3, 'tyty', 'regular@mail.ru', 'бла бла бла', '2019-07-20 16:16:13');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `class`, `href`) VALUES
(1, 'Главная', 'top', '/'),
(2, 'О нас', 'about-us', ''),
(3, 'Пресса о нас', '', ''),
(4, 'Оставить заявку', 'make-request', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 10 2016 г., 23:08
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `realestateagency`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rentapartment`
--

CREATE TABLE `rentapartment` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` int(10) UNSIGNED NOT NULL,
  `Address` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subscription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` float UNSIGNED NOT NULL,
  `Square` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `rentapartment`
--

INSERT INTO `rentapartment` (`ID`, `Name`, `Type`, `Address`, `Subscription`, `Price`, `Square`) VALUES
(2, 'Вторая квартира', 5, 'ул. Вишневая, д. 13, кв. 5', 'Роскошная квартира', 55000, 70),
(3, 'Комната на Вишневой', 3, 'ул. Вишневая, д. 5, кв. 5', 'Роскошная комната', 21000, 18),
(4, 'Коттедж', 3, 'Вишневая, 3', 'Много вина', 1000000, 160),
(5, 'Коттедж на виноградной', 5, 'Виноградная, 2', 'Много-много вина', 2000000, 200),
(7, '2', 7, '2', '2', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`ID`, `Name`) VALUES
(3, 'Квартира'),
(4, 'Комната'),
(5, 'Коттедж'),
(7, 'Нечто');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Role` int(10) UNSIGNED NOT NULL,
  `Username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salt` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Role`, `Username`, `Password`, `Salt`) VALUES
(8, 1, 'Вова', 'a778a1df55a042d10c78dcfc7538712a', '9cAPNBwP8zhkKPaNLC3bJChZM5GauIBb'),
(10, 10, 'Макс', 'b573431f9df7aca72e7458cebe26c20a', '88y480BhjWWuhFVb7qpirUJjkkIdoqJr'),
(11, 10, 'Стас', '2ce5d587256cfdd529422751d6d4b75a', 't2nxBNLv659pAASI8yLnkGbUicYeCPtQ'),
(12, 1, 'Вася', 'cc17aaae9327681cae702ac2b0138841', 'SKroR3pfwnHn5zjlfXHgepPIKgbN3mJ6'),
(13, 1, 'Катя', '6814d895cd4143996adb588ded378f71', 'HqBZR1HjXrPoBpnGR89ammviagi2TBRT'),
(14, 1, 'Ваня', '829e0b8d0bfd5e23debe6f20b913844e', 'OULeRmEs9QABasNtRNYqIWmiGwFsfA6J'),
(15, 1, 'Алина', '381362a5906b8eb910178e7daaaa6610', 'nLpsw8MuGhXaik8kmP3kjUV099sIjETh');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rentapartment`
--
ALTER TABLE `rentapartment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Type` (`Type`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rentapartment`
--
ALTER TABLE `rentapartment`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2022 г., 22:20
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `simtech`
--

-- --------------------------------------------------------

--
-- Структура таблицы `administrators`
--

CREATE TABLE `administrators` (
  `id` int NOT NULL,
  `fio` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `administrators`
--

INSERT INTO `administrators` (`id`, `fio`, `login`, `pass`) VALUES
(1, 'Иванов Иван', 'ivan2006', '123123');

-- --------------------------------------------------------

--
-- Структура таблицы `cooks`
--

CREATE TABLE `cooks` (
  `id` int NOT NULL,
  `fio` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `cooks`
--

INSERT INTO `cooks` (`id`, `fio`, `login`, `pass`) VALUES
(1, 'Васильев Вася', 'vasiliy2007', '121212');

-- --------------------------------------------------------

--
-- Структура таблицы `for_a_cook`
--

CREATE TABLE `for_a_cook` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `worker` varchar(100) NOT NULL,
  `dish_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int NOT NULL,
  `dish_amount` int NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `for_a_cook`
--

INSERT INTO `for_a_cook` (`id`, `date`, `worker`, `dish_name`, `price`, `dish_amount`, `note`) VALUES
(50, '2022-05-23', 'Петров Петр', 'Суп с мясными фрикадельками', 50, 1, ''),
(51, '2022-05-24', 'Петров Петр', 'Гуляш из свинины', 60, 1, ''),
(52, '2022-05-25', 'Петров Петр', 'Горбуша запеченная', 85, 1, ''),
(53, '2022-05-26', 'Петров Петр', 'Картофель отварной с зеленью', 20, 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price_rub` int NOT NULL,
  `img` varchar(100) NOT NULL,
  `sostav` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `price_rub`, `img`, `sostav`) VALUES
(1, 'Суп с мясными фрикадельками', 50, '/img/img1.jpg', ''),
(2, 'Гуляш из свинины', 60, '/img/img2.jpg', ''),
(3, 'Горбуша запеченная', 85, '/img/img3.jpg\r\n', ''),
(4, 'Картофель отварной с зеленью', 20, '/img/img4.jpg', ''),
(5, 'Перловка с овощами', 25, '/img/img5.jpg', 'перловка, лук, морковь, перец болгарский, масло, соль, приправа'),
(6, 'Салат «Цезарь»', 65, '/img/img6.jpg', 'салат айсберг, сухарики, сыр, помидор, филе куриное, яйцо перепелиное, чеснок, соус Цезарь'),
(7, 'Салат из квашенной капусты с грибами\r\n', 40, '/img/img7.jpg', ''),
(8, 'Компот из сухофруктов', 7, '/img/img8.jpg\r\n', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fio` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `pass`) VALUES
(1, 'Петров Петр', 'qwerty', '12341234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administrators`
--
ALTER TABLE `administrators`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `cooks`
--
ALTER TABLE `cooks`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `for_a_cook`
--
ALTER TABLE `for_a_cook`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`fio`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cooks`
--
ALTER TABLE `cooks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `for_a_cook`
--
ALTER TABLE `for_a_cook`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

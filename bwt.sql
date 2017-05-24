-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2017 г., 00:21
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bwt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Feeds`
--

CREATE TABLE `Feeds` (
  `id` int(255) UNSIGNED NOT NULL,
  `Body` varchar(4096) NOT NULL,
  `PublishDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Creator` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Feeds`
--

INSERT INTO `Feeds` (`id`, `Body`, `PublishDate`, `Creator`, `email`) VALUES
(1, 'Lorem ipsum dolor sit amet. Eum iure reprehenderit, qui sapiente delectus. Porro quisquam est, qui dolorem ipsum, quia voluptas. Optio, cumque nihil impedit. Nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis. Fugit, sed ut perspiciatis, unde omnis voluptas nulla vero. Non provident, similique sunt in culpa, qui blanditiis. Nobis est eligendi optio, cumque nihil molestiae consequatur, vel illum. Officia deserunt mollitia animi.\r\n\r\nIure reprehenderit, qui in culpa, qui blanditiis praesentium voluptatum deleniti atque. Deleniti atque corrupti, quos dolores eos, qui ratione voluptatem accusantium doloremque laudantium. Corporis suscipit laboriosam, nisi ut et iusto. Magni dolores eos, qui ratione voluptatem accusantium. Maxime placeat, facere possimus, omnis iste natus. Atque corrupti, quos dolores et dolorum fuga assumenda est, qui blanditiis. Sed ut enim ad minima veniam, quis nostrum.\r\n\r\nSint et molestiae non recusandae minima veniam quis. Alias consequatur aut officiis debitis. Hic tenetur a sapiente delectus. Tempore, cum soluta nobis est laborum et quas molestias excepturi. Praesentium voluptatum deleniti atque corrupti, quos dolores et dolore magnam. Incidunt, ut aut perferendis doloribus asperiores. Unde omnis voluptas assumenda est, qui blanditiis. Necessitatibus saepe eveniet, ut perspiciatis, unde omnis. Eum iure reprehenderit, qui blanditiis praesentium voluptatum deleniti.', '2017-05-20 01:21:30', 'asdas sdas\r\n', ''),
(2, 'Lorem ipsum dolor sit amet. Eum iure reprehenderit...', '2017-05-17 07:20:23', 'asdasd asdasd', ''),
(10, 'this is my text notus inis ignis ', '2017-05-24 19:26:05', 'Vlad', 'garkusha2580@gmail.com'),
(11, 'asdasdasdasdasdasdasdasdasdasdasd', '2017-05-24 20:20:04', 'asdasdasasasdasdas', 'asdasdasdas@gamil.com'),
(12, 'asdasdasdasdasdasdasdasdasdasdasd', '2017-05-24 20:22:01', 'asdasdasasasdasdas', 'asdasdasdas@gamil.com'),
(13, 'asdasdasdasdasdasasdasasdasdasdas', '2017-05-24 20:22:57', 'asdasdasdasd', 'asdasdasdasdas@gmail.com'),
(14, 'asdasdasdasdasdasasdasasdasdasdas', '2017-05-24 20:23:44', 'asdasdasdasd', 'asdasdasdasdas@gmail.com'),
(15, 'asdasdasdasdasdasdasdasdasdasdasdasd', '2017-05-24 20:25:05', 'asdasdas', 'asdasdasdasdasdas@asdasda.com');

-- --------------------------------------------------------

--
-- Структура таблицы `Main`
--

CREATE TABLE `Main` (
  `id` int(255) UNSIGNED NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Pass` varchar(255) NOT NULL,
  `Male` text,
  `Birth` date DEFAULT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Main`
--

INSERT INTO `Main` (`id`, `Login`, `Email`, `Pass`, `Male`, `Birth`, `Created`) VALUES
(9, 'admin', 'ggg@gmail.com', 'CRP0W3oTu3Z4s', NULL, NULL, '2017-05-23 15:56:59'),
(10, 'person', 'garksuah259@gmail.com', 'CR5PgLHBj6uYM', 'Man', NULL, '2017-05-24 20:28:27'),
(11, 'adm1', 'garksuah259@gmail.com', 'CRP0W3oTu3Z4s', 'Man', '0000-00-00', '2017-05-24 20:29:51'),
(12, 'some', 'garkusha2580@gmail.com', 'CRP0W3oTu3Z4s', 'Man', '0000-00-00', '2017-05-24 22:27:46'),
(13, 'garkusha2580', 'garkusha2580@gmail.com', 'CRP0W3oTu3Z4s', 'Man', '2017-05-01', '2017-05-24 22:30:52');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `sess_hash` varchar(1024) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `sess_hash`, `status`) VALUES
(1, 'CRSI98tMaD6DM', 0),
(2, 'CRY1GZUscQFKk', 0),
(3, 'CRQktITiIvIg2', 0),
(4, 'CR5dZmg.DqthA', 0),
(5, 'CR4OmyQuZuSro', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Feeds`
--
ALTER TABLE `Feeds`
  ADD PRIMARY KEY (`id`,`Creator`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `Main`
--
ALTER TABLE `Main`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Feeds`
--
ALTER TABLE `Feeds`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `Main`
--
ALTER TABLE `Main`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

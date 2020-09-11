-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 11 2020 г., 10:43
-- Версия сервера: 5.7.25
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `photo_cage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(16) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(32) NOT NULL,
  `image` varchar(255) NOT NULL,
  `moderated` int(1) UNSIGNED ZEROFILL NOT NULL DEFAULT '0',
  `url` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `date`, `image`, `moderated`, `url`) VALUES
(95, 'Photo-mail-small3_photos_v2_x4', '09/09/2020', '5f5892ad004ea.png', 1, '#'),
(96, 'Photo-mail-small1_photos_v2_x4', '09/09/2020', '5f58931fb55a5.png', 1, '#'),
(98, 'Photo-mail-small2_photos_v2_x4', '09/09/2020', '5f589fa9e4222.png', 1, '#'),
(112, 'article_preview', '09/09/2020', '5f58addc3f4e9.png', 1, '#'),
(113, 'article-main', '09/09/2020', '5f58b37569cbc.png', 1, '#'),
(114, 'popular_now', '09/09/2020', '5f58b52b9c97c.png', 1, '#'),
(115, 'img-item-1', '09/09/2020', '5f58b548d5274.png', 1, '#'),
(116, 'img-item-2', '09/09/2020', '5f58b54f3880f.png', 1, '#'),
(117, 'img-item-3', '09/09/2020', '5f58b55272a78.png', 1, '#'),
(118, 'img-item-4', '09/09/2020', '5f58b55ae19cc.png', 1, '#'),
(119, 'img-item-5', '09/09/2020', '5f58b56ae2147.png', 1, '#'),
(120, 'img-item-6', '09/09/2020', '5f58b56e43adf.png', 1, '#'),
(121, 'img-item-7', '09/09/2020', '5f58b571358f7.png', 1, '#'),
(122, 'img-item-8', '09/09/2020', '5f58b5742676f.png', 1, '#'),
(123, 'img-item-9', '09/09/2020', '5f58b57744c82.png', 1, '#'),
(124, 'img-item-10', '09/09/2020', '5f58b57a581ca.png', 1, '#'),
(125, 'img-item-11', '09/09/2020', '5f58b57f68c8c.png', 1, '#'),
(126, 'img-item-12', '09/09/2020', '5f58b58266a0f.png', 1, '#'),
(127, 'header_background', '10/09/2020', '5f59d5f3bf4e0.png', 1, '#'),
(128, 'header_background2', '10/09/2020', '5f59d605c1056.png', 1, '#'),
(129, 'img-item-4', '09/09/2020', '5f58b55ae19cc.png', 1, '#'),
(130, 'img-item-9', '09/09/2020', '5f58b57744c82.png', 1, '#'),
(131, 'img-item-10', '09/09/2020', '5f58b57a581ca.png', 1, '#'),
(132, 'img-item-11', '09/09/2020', '5f58b57f68c8c.png', 1, '#'),
(133, 'img-item-12', '09/09/2020', '5f58b58266a0f.png', 1, '#'),
(134, 'header_background', '10/09/2020', '5f59d5f3bf4e0.png', 1, '#'),
(135, 'header_background2', '10/09/2020', '5f59d605c1056.png', 1, '#'),
(136, 'img-item-6', '09/09/2020', '5f58b56e43adf.png', 1, '#'),
(137, 'img-item-7', '09/09/2020', '5f58b571358f7.png', 1, '#'),
(138, 'img-item-8', '09/09/2020', '5f58b5742676f.png', 1, '#'),
(139, 'img-item-9', '09/09/2020', '5f58b57744c82.png', 1, '#'),
(140, 'img-item-10', '09/09/2020', '5f58b57a581ca.png', 1, '#'),
(141, 'img-item-11', '09/09/2020', '5f58b57f68c8c.png', 1, '#'),
(142, 'img-item-12', '09/09/2020', '5f58b58266a0f.png', 1, '#'),
(143, 'header_background', '10/09/2020', '5f59d5f3bf4e0.png', 1, '#'),
(144, 'header_background2', '10/09/2020', '5f59d605c1056.png', 1, '#'),
(145, 'img-item-4', '09/09/2020', '5f58b55ae19cc.png', 1, '#'),
(146, 'img-item-9', '09/09/2020', '5f58b57744c82.png', 1, '#'),
(147, 'img-item-10', '09/09/2020', '5f58b57a581ca.png', 1, '#'),
(148, 'img-item-11', '09/09/2020', '5f58b57f68c8c.png', 1, '#'),
(149, 'img-item-12', '09/09/2020', '5f58b58266a0f.png', 1, '#'),
(150, 'header_background', '10/09/2020', '5f59d5f3bf4e0.png', 1, '#'),
(151, 'Безымянный2', '10/09/2020', '5f59f34c2991c.png', 1, '#');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(16) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `name`, `password`, `admin`) VALUES
(1, 'admin@photo-cage.com', 'admin', 'Админ', '$2y$10$LFrNAeaStL/cQpK9Lnv5aO87emzX4qmMKVWPA1JRzdGHKiCYqOwjO', 1),
(39, 'nikitas44782@gmail.com', 'BloodEnemy2', 'Никита', '$2y$10$6s8zOiQzlAfajlCxP/THXO9BO1nAPdAT3sPuUEMixDkFzpAkTqhb6', 0),
(38, 'nikitas4478@gmail.com', 'BloodEnemy', 'Никита', '$2y$10$O3VQDbnJ7G/wPwLbVqq6FeYtXIBw9RGaYzE93eKBAUlZe5Ewv80ii', 0),
(40, '123123@gmail.com', '123123', 'Киррил', '$2y$10$6H/x1QrzdhOAvJ.bO4Fsd.5yq4iTklewxcQg2I5969u1FSdPAxrZS', 0),
(41, '18@gmail.com', '321312', 'Nikita', '$2y$10$SgU.V/OoU.FSIfJUSkQijelPiNjDnoDbLKDi/utW9nElFva3Gv60q', 0),
(43, 'nikitas447833@gmail.com', '123123123123', 'Никита', '$2y$10$ZaOmKx/5CaSFJomd9MqlHujhzZy1zDvuvvZWAVi8lcD0amkzqg48K', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

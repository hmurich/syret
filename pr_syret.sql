-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 01 2018 г., 21:12
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pr_syret`
--

-- --------------------------------------------------------

--
-- Структура таблицы `konkurs`
--

CREATE TABLE `konkurs` (
  `id` int(11) NOT NULL,
  `date_b` date DEFAULT NULL,
  `date_e` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `note` text,
  `priz` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `note` text,
  `img_path` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `note` text,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `order_comment`
--

CREATE TABLE `order_comment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `painter_id` int(11) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `painters`
--

CREATE TABLE `painters` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '0',
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phones` varchar(255) DEFAULT NULL,
  `social_insta` varchar(255) DEFAULT NULL,
  `social_vk` varchar(255) DEFAULT NULL,
  `social_db` varchar(255) DEFAULT NULL,
  `social_skype` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `note` text,
  `is_fill` tinyint(4) DEFAULT '0',
  `avg_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `painters`
--

INSERT INTO `painters` (`id`, `city_id`, `user_id`, `is_active`, `logo`, `name`, `phones`, `social_insta`, `social_vk`, `social_db`, `social_skype`, `created_at`, `updated_at`, `note`, `is_fill`, `avg_price`) VALUES
(2, 4, 3, 0, 'store/2018/03/24/15219171133.jpg', 'Murat Berzhikeev', 'Контакты', 'instagram', 'vk', 'facebook', 'skype', '2018-03-09 20:10:18', '2018-03-24 19:43:00', 'првиет я токой то', 0, 333333);

-- --------------------------------------------------------

--
-- Структура таблицы `painter_cat`
--

CREATE TABLE `painter_cat` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `val_id` int(11) DEFAULT NULL,
  `painter_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `painter_cat`
--

INSERT INTO `painter_cat` (`id`, `cat_id`, `val_id`, `painter_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 2, '2018-03-24 19:22:52', '2018-03-24 19:22:52'),
(3, 3, 3, 2, '2018-03-24 19:22:59', '2018-03-24 19:22:59'),
(4, 4, 4, 2, '2018-03-24 19:23:19', '2018-03-24 19:23:19');

-- --------------------------------------------------------

--
-- Структура таблицы `painter_note`
--

CREATE TABLE `painter_note` (
  `id` int(11) NOT NULL,
  `painter_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `painter_review`
--

CREATE TABLE `painter_review` (
  `id` int(11) NOT NULL,
  `painter_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `painter_works`
--

CREATE TABLE `painter_works` (
  `id` int(11) NOT NULL,
  `painter_id` int(11) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `painter_works`
--

INSERT INTO `painter_works` (`id`, `painter_id`, `img_path`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 'store/2018/03/24/15219246792.jpg', 'asdasd', '2018-03-24 20:51:20', '2018-03-24 20:51:20'),
(2, 2, 'store/2018/03/24/15219246882.jpg', 'asd', '2018-03-24 20:51:28', '2018-03-24 20:51:28');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `site_settings`
--

INSERT INTO `site_settings` (`id`, `key`, `name`) VALUES
(1, 'social_insta', NULL),
(2, 'social_youtube', NULL),
(3, 'social_vk', NULL),
(4, 'phone', NULL),
(5, 'mobile_phone', NULL),
(6, 'skype', NULL),
(7, 'email', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sys_city`
--

CREATE TABLE `sys_city` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sys_city`
--

INSERT INTO `sys_city` (`id`, `name`) VALUES
(1, 'Астана'),
(2, 'Алматы'),
(3, 'Караганда'),
(4, 'Костанай'),
(5, 'Атырау');

-- --------------------------------------------------------

--
-- Структура таблицы `sys_painter_cat`
--

CREATE TABLE `sys_painter_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sys_painter_cat`
--

INSERT INTO `sys_painter_cat` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Чем рисовать', '2018-03-09 18:59:20', '2018-03-09 18:59:20'),
(2, 'На чем', '2018-03-09 18:59:30', '2018-03-09 18:59:30'),
(3, 'Стиль', '2018-03-09 19:00:16', '2018-03-09 19:00:16'),
(4, 'Что рисовать', '2018-03-09 19:00:56', '2018-03-09 19:00:56');

-- --------------------------------------------------------

--
-- Структура таблицы `sys_painter_val`
--

CREATE TABLE `sys_painter_val` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sys_painter_val`
--

INSERT INTO `sys_painter_val` (`id`, `type_id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 'Красками', NULL, '2018-03-09 19:31:57', '2018-03-24 19:03:22'),
(2, 2, 'Бумага', NULL, '2018-03-23 09:16:07', '2018-03-23 09:16:07'),
(3, 3, 'Аниме', NULL, '2018-03-23 09:16:16', '2018-03-23 09:16:16'),
(4, 4, 'Людей', NULL, '2018-03-23 09:16:32', '2018-03-23 09:16:32');

-- --------------------------------------------------------

--
-- Структура таблицы `sys_user_type`
--

CREATE TABLE `sys_user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sys_user_type`
--

INSERT INTO `sys_user_type` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'painter'),
(3, 'visitor');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type_id`, `is_active`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin@mail.ru', '$2y$10$irittQzEsQjawvTk7uDfFOva/ZWdiO4nyLce1/3AomCKK7yIYzIxy', 1, 1, '2018-03-04 19:17:43', '2018-03-04 19:17:43', 'P4hKVDOynjVhGuHPkQ70Pj3ILUKwnqZlVSN7NKqxl3NOEvQqUZTf0yOL3a4y'),
(3, 'hmurich@mail.ru', '$2y$10$R2hFpR.XLZ3sMReCmktbcufw2BYQrFgKMnm1OR0Nf2K/OmHVQL4Ei', 2, 1, '2018-03-09 20:10:18', '2018-03-24 19:43:05', 'X8myddFjMLshin55IIDgicNuSeb8kPCSJMCt3MIzfUwUOEeF5c7sKt0cphjX');

-- --------------------------------------------------------

--
-- Структура таблицы `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `konkurs`
--
ALTER TABLE `konkurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_market_user_id` (`user_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_orders_user_id` (`user_id`);

--
-- Индексы таблицы `order_comment`
--
ALTER TABLE `order_comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_order_comment_order_id` (`order_id`),
  ADD KEY `FK_order_comment_painter_id` (`painter_id`);

--
-- Индексы таблицы `painters`
--
ALTER TABLE `painters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_painters_city_id` (`city_id`),
  ADD KEY `FK_painters_user_id` (`user_id`);

--
-- Индексы таблицы `painter_cat`
--
ALTER TABLE `painter_cat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_painter_cat_cat_id` (`cat_id`),
  ADD KEY `FK_painter_cat_val_id` (`val_id`),
  ADD KEY `FK_painter_cat_painter_id` (`painter_id`);

--
-- Индексы таблицы `painter_note`
--
ALTER TABLE `painter_note`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_painter_note_painter_id` (`painter_id`);

--
-- Индексы таблицы `painter_review`
--
ALTER TABLE `painter_review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_painter_review_painter_id` (`painter_id`),
  ADD KEY `FK_painter_review_user_id` (`user_id`);

--
-- Индексы таблицы `painter_works`
--
ALTER TABLE `painter_works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_painter_works_painter_id` (`painter_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_reviews_user_id` (`user_id`);

--
-- Индексы таблицы `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_site_settings_setting_id` (`key`);

--
-- Индексы таблицы `sys_city`
--
ALTER TABLE `sys_city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `sys_painter_cat`
--
ALTER TABLE `sys_painter_cat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `sys_painter_val`
--
ALTER TABLE `sys_painter_val`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_sys_painter_val_type_id` (`type_id`);

--
-- Индексы таблицы `sys_user_type`
--
ALTER TABLE `sys_user_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_users_type_id` (`type_id`);

--
-- Индексы таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_visitors_user_id` (`user_id`),
  ADD KEY `FK_visitors_city_id` (`city_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `konkurs`
--
ALTER TABLE `konkurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `order_comment`
--
ALTER TABLE `order_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `painters`
--
ALTER TABLE `painters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `painter_cat`
--
ALTER TABLE `painter_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `painter_note`
--
ALTER TABLE `painter_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `painter_review`
--
ALTER TABLE `painter_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `painter_works`
--
ALTER TABLE `painter_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `sys_city`
--
ALTER TABLE `sys_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `sys_painter_cat`
--
ALTER TABLE `sys_painter_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `sys_painter_val`
--
ALTER TABLE `sys_painter_val`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `sys_user_type`
--
ALTER TABLE `sys_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `FK_market_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_comment`
--
ALTER TABLE `order_comment`
  ADD CONSTRAINT `FK_order_comment_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_order_comment_painter_id` FOREIGN KEY (`painter_id`) REFERENCES `painters` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `painters`
--
ALTER TABLE `painters`
  ADD CONSTRAINT `FK_painters_city_id` FOREIGN KEY (`city_id`) REFERENCES `sys_city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_painters_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `painter_cat`
--
ALTER TABLE `painter_cat`
  ADD CONSTRAINT `FK_painter_cat_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `sys_painter_cat` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_painter_cat_painter_id` FOREIGN KEY (`painter_id`) REFERENCES `painters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_painter_cat_val_id` FOREIGN KEY (`val_id`) REFERENCES `sys_painter_val` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `painter_note`
--
ALTER TABLE `painter_note`
  ADD CONSTRAINT `FK_painter_note_painter_id` FOREIGN KEY (`painter_id`) REFERENCES `painters` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `painter_review`
--
ALTER TABLE `painter_review`
  ADD CONSTRAINT `FK_painter_review_painter_id` FOREIGN KEY (`painter_id`) REFERENCES `painters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_painter_review_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `painter_works`
--
ALTER TABLE `painter_works`
  ADD CONSTRAINT `FK_painter_works_painter_id` FOREIGN KEY (`painter_id`) REFERENCES `painters` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `FK_reviews_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sys_painter_val`
--
ALTER TABLE `sys_painter_val`
  ADD CONSTRAINT `FK_sys_painter_val_type_id` FOREIGN KEY (`type_id`) REFERENCES `sys_painter_cat` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_type_id2` FOREIGN KEY (`type_id`) REFERENCES `sys_user_type` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `FK_visitors_city_id` FOREIGN KEY (`city_id`) REFERENCES `sys_city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_visitors_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

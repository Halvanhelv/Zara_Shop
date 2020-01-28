-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 28 2020 г., 19:46
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ishop2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_group`
--

CREATE TABLE `attribute_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_group`
--

INSERT INTO `attribute_group` (`id`, `title`) VALUES
(7, 'Производитель'),
(8, 'Память'),
(9, 'Оперативная память'),
(10, 'Диагональ экрана'),
(11, 'Емкость аккумулятора'),
(12, 'Год анонсирования'),
(13, 'Платформа'),
(14, 'Разрешение экрана'),
(15, 'Тип'),
(16, 'Количество основных камер'),
(17, 'Степень защиты');

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_product`
--

CREATE TABLE `attribute_product` (
  `attr_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_product`
--

INSERT INTO `attribute_product` (`attr_id`, `product_id`) VALUES
(0, 268),
(1, 1),
(1, 51),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 242),
(1, 243),
(1, 244),
(1, 245),
(1, 246),
(1, 247),
(1, 249),
(1, 250),
(1, 269),
(2, 4),
(2, 5),
(2, 11),
(2, 15),
(2, 16),
(2, 17),
(2, 20),
(2, 21),
(2, 22),
(2, 35),
(2, 36),
(2, 44),
(2, 46),
(2, 52),
(3, 12),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 45),
(4, 2),
(4, 3),
(4, 27),
(4, 28),
(5, 1),
(5, 4),
(5, 5),
(5, 12),
(5, 13),
(5, 35),
(5, 62),
(5, 266),
(5, 269),
(6, 2),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 52),
(6, 249),
(6, 250),
(7, 3),
(7, 6),
(8, 1),
(9, 2),
(9, 14),
(10, 4),
(10, 5),
(10, 13),
(10, 35),
(10, 62),
(10, 249),
(10, 250),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(12, 1),
(13, 52),
(14, 3),
(14, 269),
(15, 249),
(15, 250),
(16, 1),
(16, 4),
(16, 5),
(16, 2661),
(17, 268),
(18, 269),
(19, 52),
(19, 249),
(19, 266),
(20, 267),
(20, 269),
(21, 270),
(21, 271),
(21, 274),
(21, 281),
(24, 270),
(24, 274),
(24, 281),
(26, 270),
(28, 274),
(32, 270),
(34, 270),
(39, 270),
(40, 270),
(41, 270),
(42, 270),
(43, 270),
(44, 270);

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `attr_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `value`, `attr_group_id`) VALUES
(21, 'Apple', 7),
(22, '16 Гб', 8),
(23, '32 Гб', 8),
(24, '64 Гб', 8),
(25, '1 Гб', 9),
(26, '2 Гб', 9),
(27, '3 Гб', 9),
(28, '4 Гб', 9),
(29, 'до 2\"', 10),
(30, '2.1\"-2.9\"', 10),
(31, '3\"-4\"', 10),
(32, '4.1\"-4.9\"', 10),
(33, '5\"-5.4\"', 10),
(34, '2000-2499 мА⋅ч', 11),
(35, '2500-2999 мА⋅ч', 11),
(37, '3500-4499 мА⋅ч', 11),
(38, '4500 мА⋅ч и выше', 11),
(39, '2018', 12),
(40, 'IOS', 13),
(41, '1280×720 (HD)', 14),
(42, 'Смартфон', 15),
(43, '1', 16),
(44, 'IP68', 17),
(46, '1920×1080 (Full HD)', 14),
(47, '800×480', 14),
(48, '960×540', 14),
(49, '2', 16),
(50, '3', 16),
(51, '4', 16),
(52, '5', 16),
(53, 'защита от брызг', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'brand_no_image.jpg',
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `alias`, `img`, `description`) VALUES
(1, 'Casio', 'casio', 'abt-1.jpg', 'In sit amet sapien eros Integer dolore magna aliqua'),
(2, 'Citizen', 'citizen', 'abt-2.jpg', 'In sit amet sapien eros Integer dolore magna aliqua'),
(3, 'Royal London', 'royal-london', 'abt-3.jpg', 'In sit amet sapien eros Integer dolore magna aliqua'),
(4, 'Seiko', 'seiko', 'seiko.png', NULL),
(5, 'Diesel', 'diesel', 'diesel.png', NULL),
(6, 'Apple', 'apple', 'brand_no_image.jpg', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(24, 'Смартфоны', 'smartfony', 0, 'Смартфоны', 'Смартфоны'),
(25, 'Apple', 'apple', 24, 'Apple', 'Apple'),
(26, 'Apple iPhone', 'apple-iphone', 25, 'Apple iPhone', 'Apple iPhone');

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(10) NOT NULL,
  `symbol_right` varchar(10) NOT NULL,
  `value` float(15,2) NOT NULL,
  `base` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `value`, `base`) VALUES
(2, 'Рубль', 'RUB', '₽', 'руб', 1.00, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `detail`
--

CREATE TABLE `detail` (
  `id` int(255) NOT NULL,
  `detail_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `detail`
--

INSERT INTO `detail` (`id`, `detail_name`) VALUES
(4, 'Тип'),
(5, 'Операционная система'),
(6, 'Версия ОС на начало продаж'),
(7, 'Тип корпуса'),
(8, 'Конструкция'),
(9, 'Управление'),
(10, 'Количество SIM-карт'),
(11, 'Тип SIM-карты'),
(12, 'Бесконтактная оплата'),
(13, 'Вес'),
(14, 'Размеры (ШxВxТ)'),
(15, 'Тип экрана'),
(16, 'Тип сенсорного экрана'),
(17, 'Диагональ'),
(18, 'Сила нажатия на экран'),
(19, 'Размер изображения'),
(20, 'Число пикселей на дюйм (PPI)'),
(21, 'Соотношение сторон'),
(22, 'Автоматический поворот экрана'),
(23, 'Количество основных (тыловых) камер'),
(24, 'Разрешение основной (тыловой) камеры'),
(25, 'Диафрагма основной (тыловой) камеры'),
(26, 'Фотовспышка'),
(27, 'Функции основной (тыловой) фотокамеры'),
(28, 'Запись видеороликов'),
(29, 'Макс. разрешение видео'),
(30, 'Макс. частота кадров видео'),
(31, 'Geo Tagging'),
(32, 'Фронтальная камера'),
(33, 'Аудио'),
(34, 'Стандарт связи'),
(35, 'Поддержка диапазонов LTE'),
(36, 'Интерфейсы'),
(37, 'Спутниковая навигация'),
(38, 'Cистема A-GPS'),
(39, 'Процессор'),
(40, 'Количество ядер процессора'),
(41, 'Объем встроенной памяти'),
(42, 'Тип аккумулятора'),
(43, 'Аккумулятор'),
(44, 'Время работы в режиме разговора'),
(45, 'Время работы в режиме прослушивания музыки'),
(46, 'Тип разъема для зарядки'),
(47, 'Функция беспроводной зарядки'),
(48, 'Функция быстрой зарядки'),
(49, 'Громкая связь (встроенный динамик)'),
(50, 'Режим полета'),
(51, 'Датчики'),
(52, 'Фонарик'),
(53, 'Оценка Роскачества'),
(54, 'Комплектация'),
(55, 'Особенности'),
(56, 'Дата анонсирования'),
(57, 'Дата начала продаж');

-- --------------------------------------------------------

--
-- Структура таблицы `forgot`
--

CREATE TABLE `forgot` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash` varchar(32) NOT NULL,
  `expire` int(10) UNSIGNED NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `forgot`
--

INSERT INTO `forgot` (`id`, `hash`, `expire`, `email`) VALUES
(22, 'ea554bc312983d15e10f58b86a40ee1f', 1, 'islamgagiev69@gmail.com'),
(23, '470c47c353124c992a9fde7ec3beb171', 1, 'islamgagiev69@gmail.com'),
(29, '7893333093da9a01506e61429f49f6ba', 1574776870, 'islamgagiev69@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(212, 270, '91ba24536023a3233d197aa40a261eaa.webp'),
(213, 270, '0fecf7d63773d9466d145eaf45ee6408.webp'),
(214, 270, '52d0bd845f3b57d64279ae36ee3c35c0.webp'),
(215, 270, '24eea1a743a10d992959e45e731579d8.webp'),
(216, 270, 'ffeaf1d595afa9592b83e1d3f7aa0887.webp'),
(217, 270, '1611584cd74ec70cbc543c1746560ddc.webp'),
(218, 270, '325628c871c5b90ff9a262cee7702c2d.webp'),
(219, 270, '341606aaf14534158cde4bfd6ebd4376.webp'),
(220, 270, 'f427623749dfa882c55a7ca66ccffd0d.webp'),
(221, 274, 'eaba92b66c9a4f5f5204b17698ca898e.webp'),
(222, 274, 'f1fa9fd4c5722460759aedf352d2e7cc.webp'),
(223, 274, '05f5db943624110e25591f254ed5d231.webp'),
(224, 274, 'da1196f632b35bbb59959e9372d86c9f.webp'),
(225, 274, '08877f9313adf40c1a1b5a3b0f2cad4f.webp'),
(226, 274, '1e87f10fc0a53ec699400966482865eb.webp'),
(227, 274, '6d1efe184516a8df4660b0ac8da54f98.webp'),
(228, 274, '085db2d553379407db5c7c27bcfa5ee8.webp'),
(229, 281, ''),
(230, 281, '2342bf30c9bee8bba92886f5f2328f91.webp'),
(231, 281, '130ea9a4574383a6a07c9853b8b12676.webp'),
(232, 281, '31b7a5c93d89ca3fd8c0d9f28ce37f4e.webp'),
(233, 281, 'e0d7cfaefa2341d6ca187cefceb6233e.webp'),
(234, 281, '7c85823e20eeda20841f73e3656138b7.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `modification`
--

CREATE TABLE `modification` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modification`
--

INSERT INTO `modification` (`id`, `product_id`, `title`, `price`) VALUES
(1, 1, 'Silver', 300),
(2, 1, 'Black', 300),
(3, 1, 'Dark Black', 305),
(4, 1, 'Red', 310),
(5, 2, 'Silver', 80),
(6, 2, 'Red', 70);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('new','completion','paid') NOT NULL DEFAULT 'new',
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) NOT NULL,
  `note` text DEFAULT NULL,
  `sum` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `currency`, `note`, `sum`) VALUES
(55, 1, 'new', '2019-11-29 15:25:54', NULL, 'RUB', '', 470),
(56, 1, 'new', '2019-11-29 15:29:16', NULL, 'RUB', '', 400),
(57, 1, 'paid', '2019-11-29 15:30:22', NULL, 'RUB', '', 70),
(58, 1, 'new', '2019-11-29 15:50:14', NULL, 'RUB', '', 70),
(59, 1, 'new', '2019-11-29 15:52:56', NULL, 'RUB', '', 300),
(60, 1, 'new', '2019-11-29 15:54:43', NULL, 'RUB', '', 300),
(61, 1, 'paid', '2019-11-29 15:55:26', NULL, 'RUB', '', 70),
(62, 1, 'paid', '2019-11-29 15:57:10', NULL, 'RUB', '', 300),
(63, 1, 'paid', '2019-11-29 15:59:46', NULL, 'RUB', '', 300),
(64, 1, 'paid', '2019-11-29 16:02:12', NULL, 'RUB', '', 300),
(65, 1, 'new', '2019-11-29 16:06:45', NULL, 'RUB', '', 70),
(66, 1, 'paid', '2019-11-29 16:07:43', NULL, 'RUB', '', 70),
(67, 1, 'new', '2019-11-29 16:08:11', NULL, 'RUB', '', 400),
(68, 18, 'new', '2019-12-02 16:18:15', NULL, 'RUB', '', 400),
(69, 18, 'new', '2019-12-02 16:19:39', NULL, 'RUB', '', 770),
(70, 19, 'new', '2019-12-02 20:06:23', NULL, 'RUB', '', 370),
(71, 21, 'new', '2019-12-02 20:17:47', NULL, 'RUB', '', 770),
(72, 19, 'new', '2019-12-14 16:15:06', NULL, 'RUB', '', 39490);

-- --------------------------------------------------------

--
-- Структура таблицы `order_mod`
--

CREATE TABLE `order_mod` (
  `id` int(255) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_mod`
--

INSERT INTO `order_mod` (`id`, `title`) VALUES
(1, 'Путиин 123'),
(2, 'Хуйло'),
(3, 'Хуйло');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(60, 55, 3, 1, 'Casio GA-1000-1AER хуй', 400),
(61, 55, 2, 1, 'Casio MQ-24-7BUL', 70),
(62, 56, 3, 1, 'Casio GA-1000-1AER хуй', 400),
(63, 57, 2, 1, 'Casio MQ-24-7BUL', 70),
(64, 58, 2, 1, 'Casio MQ-24-7BUL', 70),
(65, 59, 1, 1, 'Casio MRP-700-1AVEF', 300),
(66, 60, 1, 1, 'Casio MRP-700-1AVEF', 300),
(67, 61, 2, 1, 'Casio MQ-24-7BUL', 70),
(68, 62, 1, 1, 'Casio MRP-700-1AVEF', 300),
(69, 63, 1, 1, 'Casio MRP-700-1AVEF', 300),
(70, 64, 1, 1, 'Casio MRP-700-1AVEF', 300),
(71, 65, 2, 1, 'Casio MQ-24-7BUL', 70),
(72, 66, 2, 1, 'Casio MQ-24-7BUL', 70),
(73, 67, 4, 1, 'Citizen JP1010-00E', 400),
(74, 68, 3, 1, 'Casio GA-1000-1AER хуй', 400),
(75, 69, 3, 1, 'Casio GA-1000-1AER хуй', 400),
(76, 69, 2, 1, 'Casio MQ-24-7BUL', 70),
(77, 69, 1, 1, 'Casio MRP-700-1AVEF', 300),
(78, 70, 1, 1, 'Casio MRP-700-1AVEF', 300),
(79, 70, 2, 1, 'Casio MQ-24-7BUL', 70),
(80, 71, 1, 1, 'Casio MRP-700-1AVEF', 300),
(81, 71, 2, 1, 'Casio MQ-24-7BUL', 70),
(82, 71, 3, 1, 'Casio GA-1000-1AER хуй', 400),
(83, 72, 270, 1, 'Смартфон Apple iPhone 8 64GB', 39490);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `old_price` float NOT NULL DEFAULT 0,
  `status` enum('off','on') NOT NULL DEFAULT 'on',
  `keywords` varchar(255) DEFAULT NULL,
  `slider_text` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` enum('off','on') NOT NULL DEFAULT 'off',
  `slider` enum('on','off') NOT NULL DEFAULT 'off',
  `slider_img` varchar(255) DEFAULT NULL,
  `best_seller` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `slider_text`, `description`, `img`, `hit`, `slider`, `slider_img`, `best_seller`) VALUES
(270, 26, 6, 'Смартфон Apple iPhone 8 64GB', 'smartfon-apple-iphone-8-64gb', '', 39490, 0, 'on', 'Смартфон Apple iPhone 8 64GB', '<h2>Купите сегодня <span style=\"color:#c0392b\">30%</span></h2>\r\n\r\n<p>Завтра будет дороже и хуже</p>\r\n', '', '2fe89098034858a2dd08355fba52b563.webp', 'on', 'on', 'f1006435bb2daff94f68293c003326b6.jpg', 'on'),
(274, 24, 6, 'Смартфон Apple iPhone X 64GB', 'smartfon-apple-iphone-x-64gb', '<pre>\r\nСтильный и надёжный смартфон Apple iPhone X оснащён ультра-производительным процессором А11 Bionic и стабильным программным обеспечением. Полноэкранный дисплей Super Retina с диагональю 5.8 дюйма демонстрирует невероятно яркую, контрастную и живую картинку. Корпус аппарата защищён от воды и пыли.</pre>\r\n\r\n<p>Камера с матрицей 12 Мп, широкоугольным объективом и чувствительной диафрагмой снимает идеально чёткие фотографии и видео, а двойная система оптической стабилизации ещё больше повышает качество изображений. Фронтальная камера на 7 Мп с прогрессивной функцией портретного освещения не только делает красивые селфи, но и помогает обеспечивать безупречный уровень безопасности. Функция Face ID разблокирует устройство после сканирования лица.</p>\r\n\r\n<p>Корпус полностью выполнен из особенно прочного стекла, усиливающее покрытие которого на 50% толще по сравнению с предыдущими моделями. Благодаря специальному слою с поверхности легко удаляются все загрязнения.</p>\r\n\r\n<pre>\r\n<!--?php isset($_SESSION[\'form_data\'][\'old_price\']) ? $_SESSION[\'form_data\'][\'old_price\'] : null; ?--></pre>\r\n', 55555, 0, 'on', 'Смартфон Apple iPhone X 64GB', '<pre>\r\n<!--?php isset($_SESSION[\'form_data\'][\'old_price\']) ? $_SESSION[\'form_data\'][\'old_price\'] : null; ?--></pre>\r\n', 'Смартфон Apple iPhone X 64GB', 'dc9c518cc1eadb81bee8ed7e8eee8347.webp', 'on', 'off', '40633918c77e7c47218e81b812c2b961.jpg', 'on'),
(281, 26, 6, 'Смартфон Apple iPhone Xs Max 64GB', 'smartfon-apple-iphone-xs-max-64gb', '<h3>Коротко о товаре</h3>\r\n\r\n<ul>\r\n	<li>смартфон с iOS 12</li>\r\n	<li>поддержка двух SIM-карт (nano SIM+eSIM)</li>\r\n	<li>экран 6.5&quot;, разрешение 2688x1242</li>\r\n	<li>двойная камера 12&nbsp;МП/12&nbsp;МП, автофокус</li>\r\n	<li>память 64&nbsp;Гб, без слота для карт памяти</li>\r\n	<li>3G, 4G LTE, LTE-A, Wi-Fi, Bluetooth, NFC</li>\r\n	<li>объем оперативной памяти 4&nbsp;Гб</li>\r\n	<li>вес 208&nbsp;г, ШxВxТ 77.40x157.50x7.70&nbsp;мм</li>\r\n</ul>\r\n', 74990, 0, 'on', 'Смартфон Apple iPhone Xs Max 64GB', '', 'Смартфон Apple iPhone Xs Max 64GB', '5d755abe6e271622b920871ea3dc20aa.webp', 'on', 'off', NULL, 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `attribute_id` int(255) NOT NULL,
  `attr_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `attribute_id`, `attr_value`) VALUES
(300, 271, 4, 'ацацу'),
(301, 270, 4, 'Смартфон'),
(302, 270, 6, 'IOS 11'),
(303, 270, 7, 'Классический '),
(304, 270, 8, 'водозащита'),
(305, 270, 9, 'сенсорные кнопки'),
(306, 270, 10, '1'),
(307, 270, 12, 'есть'),
(308, 270, 13, '202 г'),
(309, 272, 5, '123123');

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, 2),
(1, 5),
(2, 5),
(2, 10),
(5, 1),
(5, 7),
(5, 8),
(53, 2),
(53, 3),
(58, 1),
(59, 1),
(59, 2),
(59, 3),
(60, 1),
(60, 3),
(60, 5),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 2),
(74, 2),
(75, 2),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(106, 3),
(107, 3),
(108, 3),
(109, 3),
(110, 3),
(111, 3),
(112, 3),
(113, 3),
(114, 3),
(114, 4),
(115, 3),
(115, 4),
(116, 3),
(116, 4),
(117, 3),
(117, 4),
(118, 3),
(118, 4),
(119, 3),
(119, 4),
(120, 3),
(120, 4),
(121, 3),
(121, 4),
(122, 3),
(122, 4),
(123, 3),
(123, 4),
(124, 3),
(124, 4),
(125, 3),
(125, 4),
(126, 3),
(126, 4),
(127, 3),
(127, 4),
(128, 3),
(128, 4),
(129, 3),
(129, 4),
(130, 3),
(130, 4),
(131, 3),
(131, 4),
(132, 3),
(132, 4),
(133, 3),
(133, 4),
(134, 3),
(134, 4),
(135, 3),
(135, 4),
(136, 2),
(136, 3),
(137, 2),
(137, 3),
(138, 2),
(138, 3),
(139, 2),
(139, 3),
(140, 2),
(140, 3),
(141, 2),
(141, 3),
(142, 2),
(142, 3),
(143, 2),
(143, 3),
(144, 2),
(144, 3),
(145, 2),
(145, 3),
(146, 2),
(146, 3),
(147, 2),
(147, 3),
(148, 2),
(148, 3),
(149, 2),
(149, 3),
(150, 2),
(150, 3),
(151, 2),
(151, 3),
(152, 2),
(152, 3),
(153, 2),
(153, 3),
(154, 2),
(154, 3),
(155, 2),
(155, 3),
(156, 2),
(156, 3),
(157, 2),
(157, 3),
(158, 2),
(158, 3),
(159, 2),
(159, 3),
(160, 2),
(160, 3),
(161, 2),
(161, 3),
(162, 2),
(162, 3),
(163, 2),
(163, 3),
(164, 2),
(164, 3),
(165, 2),
(165, 3),
(166, 2),
(166, 3),
(167, 2),
(167, 3),
(168, 2),
(168, 3),
(169, 3),
(169, 4),
(170, 2),
(170, 5),
(171, 2),
(171, 5),
(172, 2),
(172, 5),
(173, 2),
(173, 5),
(242, 1),
(243, 1),
(244, 1),
(250, 61),
(269, 1),
(269, 2),
(274, 270),
(281, 274);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `address`, `role`) VALUES
(1, 'GAGIEV', '$2y$10$iSZtTKajDNmuUh3bCDZ31uFbOOwRLjAYYxw8mqlrk35pNy8T4erZm', 'GAGIEV@gmail.com', 'GAGIEV', 'GAGIEV', 'admin'),
(2, 'GAGIEV1', '$2y$10$JMgjQJXjTTDlGg/tzYmK1.7tnx6IlTBAhAJBuP6ExZiTYSg6ET4u2', 'GAGIEV1@gmail.com', 'GAGIEV1', 'GAGIEV1', 'user'),
(3, 'GAGIEV2', '$2y$10$QunpI6JccltPhB7WsA5TaOvUIX0zZJLjWf0p/Glw8L2o1V8F.Oz9S', 'GAGIEV2@gmail.com', 'GAGIEV2', 'GAGIEV2', 'user'),
(4, 'GAGIEV3', '$2y$10$cF4HvxAA7Ymb0ySSC1eNb.pvSrIwYfGx89jgWpfFTE6.Q/u9ROuP2', 'GAGIEV3@gmail.com', 'GAGIEV3', 'GAGIEV3', 'admin'),
(5, 'GAGIEV4', '$2y$10$Y3xAi0C10XnsdUDQi5BZZOQckmevT/dIf1mio0TNswZPFucQl86n6', 'GAGIEV4@gmail.com', 'GAGIEV4', 'GAGIEV4', 'user'),
(6, 'GAGIEV5', '$2y$10$MV7XAPZ1JJ7pR/iunAJR3eOD6lTdzCoru2Y8g3Q01nRPKCGNm4NYa', 'GAGIEV5@gmail.com', 'GAGIEV5', 'GAGIEV5', 'admin'),
(7, 'GAGIEV7', '$2y$10$ptt15gwPohuy1KQEfCiivO0Nb5xFeYcC.qVapDC9Xq0LSTLCbFqXC', 'GAGIEV7@gmail.com', 'GAGIEV7', 'GAGIEV7', 'admin'),
(8, 'GAGIEV11', '$2y$10$sy60ZvAkEc6ln6GDBp9gBu2wz5eHXKf8bAZ.LMePriyu9J0dpTjWO', 'GAGIEV11@gmail.com', 'GAGIEV11', 'GAGIEV11', 'user'),
(9, 'GAGIEV12', '$2y$10$eJ08tSSt9YQumjTlZCgOEOdpmud.QTmu7MGVDJWvNsHl1Em3G.iy.', 'GAGIEV12@gmail.com', 'GAGIEV12', 'GAGIEV12', 'user'),
(10, 'GAGIEV13', '$2y$10$eTbZ5r3E/2z6ndWHb7h4dOimN.kGZjxlmrddklgK95wIAUjWZoyJy', 'GAGIEV13@gmail.com', 'GAGIEV13', 'GAGIEV13', 'admin'),
(11, 'GAGIEV14', '$2y$10$6boWoNy185jFdrk7MxR4rOcMO1oVhzleIKIBVp6KrTlV1.HTeknyW', 'GAGIEV14@gmail.com', 'GAGIEV14', 'GAGIEV14', 'admin'),
(12, 'GAGIEV15', '$2y$10$vSsEZImzPRC58I/e/4XVMOHl9Yx8Mk3vwvag61sCtIsJfaHYyP0B.', 'GAGIEV15@gmail.com', 'GAGIEV15', 'GAGIEV15', 'user'),
(13, 'GAGIEV123', '$2y$10$shacIN7e47M2ABJlwwbZxOjXICiiTIlnaLrZA13t.1RQ21r1OlJru', 'GAGIEV123@gmail.com', 'GAGIEV123', 'GAGIEV123', 'user'),
(14, 'GAGIEV124', '$2y$10$O4Nf/I2KroFatIs3NU8j1ua.9hldEnAl6hVP4Pq1B2EGSj0yzC2w6', 'GAGIEV124@gmail.com', 'GAGIEV124', 'GAGIEV124', 'admin'),
(15, 'GAGIEV111', '$2y$10$HHTyOsTSBQIKbAgmDBnvU.s9fWL5c9y/h5S1T.Hq/jBMaRJoiLIYq', 'GAGIEV111@gmail.com', 'GAGIEV111', 'GAGIEV111', 'user'),
(16, 'GAGIEV228', '$2y$10$PibjsRXoqMXKZuZy2GI87e7687yMHeQOQg7VrVhCKvERHUPDm8BHu', 'GAGIEV228@gmail.com', 'GAGIEV228', 'GAGIEV228', 'user'),
(17, 'GAGIEV22', '$2y$10$uDMpyUg5Nj2m47lUx2GL2.sLsE4IP75aVNBe7CrPocuCvQRiO7IZW', 'GAGIEV22@gmail.com', 'GAGIEV22', 'GAGIEV22', 'user'),
(18, 'Ислам', '$2y$10$9Exsk9Hb5CLx81DnNA/9Luwildjzja49ipuYrotnZT0u.s9mNZ5Ue', 'islamgagiev69@gmail.com', 'Ислам', 'GAGIEV', 'user'),
(19, 'Ислам1576340106', NULL, 'islamgagiev623123123@gmail.com', 'Ислам', '79969509993', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`attr_id`,`product_id`);

--
-- Индексы таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `attr_group_id` (`attr_group_id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_mod`
--
ALTER TABLE `order_mod`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `hit` (`hit`);

--
-- Индексы таблицы `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `forgot`
--
ALTER TABLE `forgot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT для таблицы `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `order_mod`
--
ALTER TABLE `order_mod`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT для таблицы `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

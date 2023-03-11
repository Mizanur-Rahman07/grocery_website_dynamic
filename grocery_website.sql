-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 06:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Potato Chips', 1, '2022-11-15 09:13:43', '2022-12-04 23:18:22'),
(3, 'Cofee', 1, '2022-11-15 09:15:12', '2022-11-17 02:35:05'),
(4, 'Fruto Drinks', 1, '2022-11-15 09:15:49', '2022-11-17 02:25:31'),
(5, 'Baby Items', 1, '2022-11-21 04:41:06', '2022-11-21 04:41:06'),
(6, 'Fish', 1, '2022-11-21 04:41:15', '2022-11-21 04:41:15'),
(7, 'Grocery', 1, '2022-11-21 04:41:37', '2022-11-21 04:41:37'),
(8, 'Organic Food', 1, '2022-11-21 04:41:54', '2022-11-21 04:41:54'),
(9, 'Vegetable', 1, '2022-11-21 04:42:01', '2022-11-21 04:42:01'),
(10, 'First Food', 1, '2022-11-21 04:42:16', '2022-11-21 04:42:16'),
(11, 'Beef', 1, '2022-11-21 04:46:11', '2022-11-21 04:46:11'),
(12, 'Potato Chips', 1, '2023-02-07 10:39:47', '2023-02-07 10:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_11_12_144150_create_sessions_table', 1),
(7, '2022_11_14_094612_create_products_table', 2),
(8, '2022_11_15_150842_create_categories_table', 3),
(9, '2022_11_15_160229_create_product_types_table', 4),
(10, '2022_11_20_063529_create_product_offers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `type_id`, `image`, `sub_image`, `slug`, `old_price`, `product_price`, `category_id`, `brand`, `description`, `available_size`, `product_sku`, `product_tags`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Best Bread', 1, 'adminAsset/product_image/1062532074.jpg', 'adminAsset/product_sub_image/1212123050.jpg', 'Best-Bread', '420', 360, 3, 'Pran Food Ltd', '<p>Best Bread Food In BD</p>', '250gm', 'bestbrade1', 'brade', 1, '2022-11-14 04:56:50', '2022-11-21 06:56:48'),
(2, 'Exclusive Beef', 2, 'adminAsset/product_image/2016918853.jpg', 'adminAsset/product_sub_image/182906889.jpg', '', '750', 850, 3, 'Prince Bazar', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi est eos totam vitae, obcaecati sed eius. Tempora id assumenda repellendus?</p>', 'min  500gm', 'skmizan345', 'Beef 123', 1, '2022-11-14 10:41:54', '2022-11-17 04:26:51'),
(4, 'Feature Food', 1, 'adminAsset/product_image/103845128.png', 'adminAsset/product_sub_image/179921897.jpg', '', '320', 250, 4, 'Agroo Food Ltd', '<p>Best Product In this world</p>', '215gm', 'bestMizan03', 'frutsaks', 1, '2022-11-16 00:40:52', '2022-11-17 03:45:43'),
(5, 'Best Vegetable', 2, 'adminAsset/product_image/669242202.jpg', 'adminAsset/product_sub_image/866565918.jpg', '', '350', 250, 1, 'Fresh Vegetable ltd', '<p>Best Vegetable</p>', '1kg', 'vegbest', 'vegatebla', 1, '2022-11-16 06:36:26', '2022-11-17 03:45:54'),
(6, 'Daily Organic Sell', 3, 'adminAsset/product_image/427129901.jpg', 'adminAsset/product_sub_image/2038311349.jpg', 'Daily-Organic-Sell', '80', 100, 9, 'winter vegetable', '<p>Best Badhacopi</p>', '1.5kg', 'badhakopi12', 'vegetable', 1, '2022-11-17 00:22:42', '2023-02-28 12:11:43'),
(7, 'Recent Best Food', 4, 'adminAsset/product_image/2058156830.jpg', 'adminAsset/product_sub_image/2734957.png', '', '650', 850, 3, 'Podma River Fish ltd', '<p>Podma River Fish best food in BD</p>', 'min  500gm', 'golda chingri', 'Fish', 1, '2022-11-17 00:29:18', '2022-11-17 03:46:19'),
(8, 'Recent Potato Chips', 4, 'adminAsset/product_image/1084803894.jpg', 'adminAsset/product_sub_image/391001233.jpg', '', '20', 25, 1, 'Pran Food ltd', '<p>Best Chips</p>', '150gm', 'chips1', 'frutsaks', 1, '2022-11-17 00:31:13', '2022-11-17 03:46:28'),
(9, 'Ring Chips', 4, 'adminAsset/product_image/1903981789.jpg', 'adminAsset/product_sub_image/1657079633.jpg', '', '30', 35, 1, 'Akij Food Limited', '<p>Best Chips in Akij Food ltd</p>', '25gm', 'bestchips1', 'Chips', 1, '2022-11-17 00:33:28', '2022-11-17 03:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_offers`
--

CREATE TABLE `product_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_offers`
--

INSERT INTO `product_offers` (`id`, `product_name`, `type_id`, `image`, `sub_image`, `slug`, `discount`, `product_price`, `category_id`, `brand`, `description`, `available_size`, `product_sku`, `product_tags`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Test 1111', 'Head Offer1', 'adminAsset/product_image/1171141424.jpg', 'adminAsset/product_sub_image/2013055753.jpg', '', '50', 580, 3, 'Food', '<p>trets</p>', '1.5kg', 'best1', 'frutsaks', 1, '2022-11-20 02:41:28', '2022-11-20 06:12:59'),
(3, 'Test 333333', 'Head Offer1', 'adminAsset/product_image/17068323.jpg', 'adminAsset/product_sub_image/700777022.jpg', '', '50%', 580, 4, 'Food', '<p>zxvcx</p>', '1.5kg', 'best1111', 'frutsaks', 1, '2022-11-20 03:47:27', '2022-11-20 06:53:20'),
(4, 'Summer Deal', 'Head Offer1', 'adminAsset/product_image/1605353294.jpg', 'adminAsset/product_sub_image/84920122.png', '', 'SAVE UPTO 40% OFF THIS DAY', 580, 4, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</span></p>', '1.5kg', 'best1', 'Chips', 1, '2022-11-20 05:17:20', '2022-11-20 08:15:44'),
(5, 'Organic Grocerry', 'Head Offer2', 'adminAsset/product_image/2101475115.jpg', 'adminAsset/product_sub_image/973621886.jpg', '', 'SAVE UPTO 40% OFF THIS DAY', 500, 4, 'Fresh Vegetable ltd', '<p>best vegetable market</p>', 'min : 500gm', 'bestbrade1', 'vegetable', 1, '2022-11-20 06:56:33', '2022-11-20 08:08:57'),
(6, 'Organic Grocerry', 'Head Offer2', 'adminAsset/product_image/841431557.jpg', 'adminAsset/product_sub_image/473487750.jpg', '', 'SAVE UPTO 40% OFF THIS DAY', 1200, 1, 'Best Deals', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but</span></p>', 'min : 500gm', 'best1', 'Chips', 1, '2022-11-20 08:24:19', '2022-11-20 08:36:39'),
(7, 'Organic Lemon', 'Head Offer3', 'adminAsset/product_image/1645539222.jpg', 'adminAsset/product_sub_image/638822156.jpg', '', 'SAVE UPTO 40% OFF', 600, 4, 'FRESH FRUTS', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span></p>', 'min : 500gm', 'badhakopi12', 'frutsaks', 1, '2022-11-20 08:41:21', '2022-11-21 04:20:35'),
(8, 'Fresh Bakery', 'Head Offer4', 'adminAsset/product_image/1004636277.jpg', 'adminAsset/product_sub_image/531090167.jpg', '', 'SAVE UPTO 40% OFF', 1450, 1, 'Bakery Biscute', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span></p>', '1.5kg', 'bestchips1', 'brade', 1, '2022-11-20 08:43:32', '2022-11-20 09:09:54'),
(9, 'Delicious Flour Bakery Items', 'Feature Offer', 'adminAsset/product_image/1346041267.jpg', 'adminAsset/product_sub_image/1316637493.jpg', '', 'SAVE UPTO 20% OFF THIS WEEK', 250, 4, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span></p>', 'min  500gm', 'bestbrade1', 'brade', 1, '2022-11-20 09:43:10', '2022-11-20 09:50:00'),
(10, 'Processing Ready See Prawn', 'Feature Offer', 'adminAsset/product_image/4362335.jpg', 'adminAsset/product_sub_image/1631697433.jpg', '', 'SAVE UPTO 20% OFF THIS WEEK', 100, 4, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span></p>', '1.5kg', 'badhakopi12', 'vegetable', 1, '2022-11-20 09:45:04', '2022-11-20 09:45:04'),
(11, 'Fresh Organic Vegetable', 'Feature Offer', 'adminAsset/product_image/2144118234.jpg', 'adminAsset/product_sub_image/241090358.jpg', '', 'SAVE UPTO 20% OFF THIS WEEK', 250, 4, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span></p>', 'min : 500gm', 'badhakopi12', 'vegetable', 1, '2022-11-20 09:46:02', '2022-11-20 09:46:02'),
(12, 'Organic Honey Nut', 'Exclusive Offer1', 'adminAsset/product_image/755433075.jpg', 'adminAsset/product_sub_image/277628125.jpg', '', 'SAVE UPTO 40% OFF', 850, 3, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', 'min : 500gm', 'honeynut11', 'honey nut', 1, '2022-11-20 23:04:40', '2022-11-20 23:05:43'),
(13, 'Organic Honey Nut', 'Exclusive Offer1', 'adminAsset/product_image/251027577.jpg', 'adminAsset/product_sub_image/938464221.jpg', '', 'SAVE UPTO 40% OFF', 580, 3, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', 'min : 500gm', 'honeynut11', 'honey nut', 1, '2022-11-20 23:07:57', '2022-11-20 23:07:57'),
(14, 'Organic Honey Nut', 'Exclusive Offer1', 'adminAsset/product_image/1729152024.jpg', 'adminAsset/product_sub_image/924964472.jpg', '', 'SAVE UPTO 40% OFF', 850, 3, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', 'min : 500gm', 'honeynut11', 'honey nut', 1, '2022-11-20 23:11:27', '2022-11-20 23:11:27'),
(15, 'Best Vegetable Market', 'Exclusive Offer2', 'adminAsset/product_image/122645181.jpg', 'adminAsset/product_sub_image/1050487752.jpg', '', 'SAVE UPTO 40% OFF', 250, 1, 'NATURAL FOOD', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', '1.5kg', 'vegbest', 'vegetable', 1, '2022-11-20 23:45:34', '2022-11-20 23:50:01'),
(16, 'Organic Hair Care', 'Head Add', 'adminAsset/product_image/1070896202.png', 'adminAsset/product_sub_image/557449139.jpg', '', 'SAVE UPTO 20% OFF THIS WEEK', 1080, 4, 'Best Quality Hair Care', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', '24 Items', 'hair12e', 'Hare Care', 1, '2022-11-21 02:44:00', '2022-11-21 04:38:03'),
(17, 'sfsdf', 'Head Offer3', 'adminAsset/product_image/1948689250.jpg', 'adminAsset/product_sub_image/1015723795.jpg', '', 'SAVE UPTO 40% OFF', 4565, 1, 'NATURAL FOOD', '<p>xcgdx</p>', 'sfd', 'dsf', 'sdfd', 0, '2022-11-21 04:21:39', '2022-11-21 04:23:16'),
(18, 'Baby product', 'Head Add', 'adminAsset/product_image/2134397291.jpg', 'adminAsset/product_sub_image/1100013341.png', '', 'SAVE UPTO 40% OFF', 580, 4, 'Arong Baby Item', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', '20 items', 'babyitem3w', 'Baby Item', 1, '2022-11-21 04:40:34', '2022-11-21 04:40:34'),
(19, 'Best Cake', 'Head Add', 'adminAsset/product_image/12011536.jpg', 'adminAsset/product_sub_image/1116688833.jpg', '', 'SAVE UPTO 20% OFF THIS DAY', 280, 10, 'The CafeTeriya', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', 'min : 500gm', 'cake2e', 'Cake', 1, '2022-11-21 04:44:07', '2022-11-21 04:44:07'),
(20, 'Exclusive Beef', 'Head Add', 'adminAsset/product_image/971721749.jpg', 'adminAsset/product_sub_image/1162389248.jpg', '', 'No Discount This Day', 850, 11, 'Dashi Beef', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', 'min : 500gm', 'beef2w', 'Beef 123', 1, '2022-11-21 04:47:25', '2022-11-21 04:47:25'),
(21, 'Batter Tost', 'Head Add', 'adminAsset/product_image/1046369635.jpg', 'adminAsset/product_sub_image/1202963048.jpg', '', 'SAVE UPTO 10% OFF', 250, 10, 'Prince Bazar', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', '15 Items', 'bestbrade1', 'brade', 1, '2022-11-21 04:49:54', '2023-02-17 11:14:56'),
(22, 'Best Bread', 'Head Add', 'adminAsset/product_image/1258817515.jpg', 'adminAsset/product_sub_image/256993751.jpg', '', 'SAVE UPTO 5% OFF', 150, 10, 'Arong', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', '18 items', 'bestbrade1', 'brade', 1, '2022-11-21 04:51:35', '2022-11-21 04:51:35'),
(23, 'Golda Chingri', 'Head Add', 'adminAsset/product_image/256861994.jpg', 'adminAsset/product_sub_image/1392135709.jpg', '', 'SAVE UPTO 30% OFF', 580, 6, 'Fresh Fish', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', 'min : 500gm', 'fish12ew', 'Fish', 1, '2022-11-21 04:53:03', '2022-11-21 04:53:03'),
(24, 'Strawbery', 'Head Add', 'adminAsset/product_image/1140315757.jpg', 'adminAsset/product_sub_image/903992406.jpg', 'Strawbery', 'SAVE UPTO 20% OFF THIS WEEK', 350, 4, 'FRESH FRUTS', '<p><strong>Lorem Ipsum</strong><span style=\"background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, b</span></p>', '3 items', 'fruts23er', 'frutsaks', 1, '2022-11-21 04:54:43', '2022-11-23 23:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `product_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Featured Product', 1, '2022-11-15 11:50:58', '2023-02-28 12:20:49'),
(2, 'Exclusive Product', 1, '2022-11-15 11:51:21', '2023-02-17 10:45:04'),
(3, 'Daily Flash Sell', 1, '2022-11-15 11:30:16', '2022-11-16 03:32:27'),
(4, 'Recently Landed', 1, '2022-11-15 10:30:24', '2022-11-16 03:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7GCpHDGZgi1gzCrsGz7QbuZA381fMtdZaWOE9a5G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieURGOFVQWUdITW1nYk9ZOE5zYWxaV3Q5QWlodFo0cGJzVG8yOTRSVSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo2NToiaHR0cDovL2xvY2FsaG9zdC9ncm9jZXJ5X3dlYnNpdGVfZHluYW1pYy9wdWJsaWMvYWRkLXByb2R1Y3QtbGFiZWwiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2NToiaHR0cDovL2xvY2FsaG9zdC9ncm9jZXJ5X3dlYnNpdGVfZHluYW1pYy9wdWJsaWMvYWRkLXByb2R1Y3QtbGFiZWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1677869034),
('9uz2FxS2J4TtnA2aG7ZLGv42YDEBXLsxXVJAmLa7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibEhSbFFFRHAwaXRTdXMzbEtwY0tzR3g2bmpDcWtBUWFvYW1hS240cSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2NToiaHR0cDovL2xvY2FsaG9zdC9ncm9jZXJ5X3dlYnNpdGVfZHluYW1pYy9wdWJsaWMvYWRkLXByb2R1Y3QtbGFiZWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEVuZXE4bS42bE1MNHJXa2RiTDNnSk9McHRRc2FIQmpUVUdQMHNvNkdrQko0eDcwdzRTSTlpIjt9', 1677870169),
('J1MIg4jvDTaMh17Q0gCGnjkVVB1LId2vWbnDE9lV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ00zOTBTbDkyTEF4bk5LbkpESGhVSXFjamQyRU5Wd3hyeDkxTThudiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NzoiaHR0cDovL2xvY2FsaG9zdC9ncm9jZXJ5X3dlYnNpdGVfZHluYW1pYy9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1677867167);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Grocery', 'grocery@gmail.com', NULL, '$2y$10$Eneq8m.6lML4rWkdbL3gJOLptQsaHBjTUGP0so6GkBJ4x70w4SI9i', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 09:49:57', '2022-11-12 09:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_offers`
--
ALTER TABLE `product_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_offers`
--
ALTER TABLE `product_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 08:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(50) DEFAULT NULL,
  `quantity` int(30) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `price`, `quantity`, `picture`, `created_at`, `updated_at`) VALUES
('107', 'iPhone 14', 1011, 1, 'upload_iphones/iPhone-14-thumb-do-600x600.jpg', '2023-06-05 23:03:50', '2023-06-05 23:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `content`, `created_at`, `updated_at`) VALUES
(6, 'nhom1@gmail.com', 'message this here', '2023-06-05 19:44:18', '2023-06-05 19:44:18'),
(7, 'customer@gmail.com', 'message this here', '2023-06-05 19:44:37', '2023-06-05 19:44:37'),
(8, 'client@gmail.com', 'message this here', '2023-06-05 19:45:03', '2023-06-05 19:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipads`
--

CREATE TABLE `ipads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ipads`
--

INSERT INTO `ipads` (`id`, `name`, `price`, `picture`, `description`, `type`, `created_at`, `updated_at`) VALUES
(200, 'iPad Mini', '501', '0000593_ipad-mini-6_240.png', 'iPad Mini', 'ipad', '2023-05-31 22:15:06', '2023-05-31 22:15:06'),
(201, 'iPad Air', '502', '0000594_ipad-air-4_240.png', 'iPad Air', 'ipad', '2023-05-31 22:15:24', '2023-05-31 22:15:24'),
(202, 'iPad Air 5', '503', '0000595_ipad-air-5_240.png', 'iPad Air 5', 'ipad', '2023-05-31 22:15:43', '2023-05-31 22:15:43'),
(203, 'iPad Gen 9', '504', '0006205_ipad-gen-9-102-inch-wifi-64gb_240.png', 'iPad Gen 9', 'ipad', '2023-05-31 22:16:02', '2023-05-31 22:16:02'),
(204, 'iPad Pro m2', '505', '0007071_ipad-pro-m2-11-inch-wifi-128gb_240.png', 'iPad Pro m2', 'ipad', '2023-05-31 22:16:28', '2023-05-31 22:16:28'),
(205, 'iPad Pro M2', '507', '0007186_ipad-pro-m2-11-inch-wifi-cellular-128gb_240.png', 'iPad Pro M2', 'ipad', '2023-05-31 22:17:19', '2023-05-31 22:17:19'),
(206, 'iPad Pro', '508', '0007301_ipad-pro-m2-129-inch-wifi-128gb_240.png', 'iPad Pro', 'ipad', '2023-05-31 22:18:10', '2023-05-31 22:18:10'),
(207, 'iPad Gen 10', '510', '0009725_ipad-gen-10th-109-inch-wifi-64gb_240.png', 'iPad Gen 10', 'ipad', '2023-05-31 22:18:40', '2023-05-31 22:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `iphones`
--

CREATE TABLE `iphones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iphones`
--

INSERT INTO `iphones` (`id`, `name`, `price`, `picture`, `description`, `type`, `created_at`, `updated_at`) VALUES
(100, 'iPhone 13', '1001', '0000596_iphone-13_240.png', 'iPhone 13', 'iphone', '2023-05-31 22:19:46', '2023-05-31 22:19:46'),
(101, 'iPhone 12 64GB', '1003', '0006794_iphone-12-64gb_240.png', 'iPhone 12 64GB', 'iphone', '2023-05-31 22:20:43', '2023-05-31 22:20:43'),
(102, 'iPhone 14 Pro Max', '1004', '0007808_iphone-14-pro-max-128gb_240.png', 'iPhone 14 Pro Max', 'iphone', '2023-05-31 22:21:05', '2023-05-31 22:21:05'),
(103, 'iPhone 14 Pro', '1005', '0008734_iphone-14-pro-128gb_240.png', 'iPhone 14 Pro', 'iphone', '2023-05-31 22:21:26', '2023-05-31 22:21:26'),
(105, 'iPhone 12', '1009', 'iphone-12-tim-1-600x600.jpg', 'iPhone 12', 'iphone', '2023-05-31 22:22:57', '2023-05-31 22:22:57'),
(106, 'iPhone 13 Blue', '1010', 'iphone-13-blue-1-600x600.jpg', 'iPhone 13 Blue', 'iphone', '2023-05-31 22:23:18', '2023-05-31 22:23:18'),
(107, 'iPhone 14', '1011', 'iPhone-14-thumb-do-600x600.jpg', 'iPhone 14', 'iphone', '2023-05-31 22:23:37', '2023-05-31 22:23:37'),
(108, 'iPhone X', '1012', 'iphone-xi-den-600x600.jpg', 'iPhone X', 'iphone', '2023-05-31 22:23:52', '2023-05-31 22:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `macs`
--

CREATE TABLE `macs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `macs`
--

INSERT INTO `macs` (`id`, `name`, `price`, `picture`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Macbook Pro 14', '1111', '0000616_macbook-pro-14-m1-max-32-core-gpu-1tb-ssd_240.png', 'Macbook', 'mac', NULL, NULL),
(2, 'Macbook Pro 14', '1116', '0011267_macbook-pro-14-inch-m2-pro-16-core-16gb-512gb_240.jpeg', 'Macbook Pro 14', 'mac', NULL, NULL),
(3, 'Macbook Pro 16', '1117', '0011408_macbook-pro-16-inch-m2-pro-19-core-16gb-512gb_240.jpeg', 'Macbook Pro 16', 'mac', NULL, NULL),
(4, 'Macbook Pro 14 M1', '1112', '0000616_macbook-pro-14-m1-max-32-core-gpu-1tb-ssd_240.png', 'Macbook Pro', 'mac', NULL, NULL),
(5, 'Macbook Pro 14 M2', '1115', '0011267_macbook-pro-14-inch-m2-pro-16-core-16gb-512gb_240.jpeg', 'Macbook Pro 14 M2', 'mac', NULL, NULL),
(6, 'Macbook Pro 14', '1114', '0000616_macbook-pro-14-m1-max-32-core-gpu-1tb-ssd_240.png', 'Macbook Pro 14 M2', 'mac', NULL, NULL),
(7, 'Macbook Air M2', '1116', '0008502_macbook-air-m2-2022-8gb-ram-256gb-ssd_240.png', 'Macbook Pro 14 M2', 'mac', NULL, NULL),
(8, 'Macbook Pro 16 M2', '1117', '0011408_macbook-pro-16-inch-m2-pro-19-core-16gb-512gb_240.jpeg', 'Macbook Pro 16 M2', 'mac', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_15_072702_create_categories_table', 1),
(6, '2023_05_15_155001_create_blogs_table', 1),
(7, '2023_05_15_155121_create_onlines_table', 1),
(8, '2023_05_16_053707_create_contacts_table', 1),
(9, '2023_05_20_140618_add_column_to_table_users', 2),
(10, '2023_05_20_141105_add_column_address_to_table_users', 3),
(11, '2023_05_20_152040_add_column_to_table_contacts', 4),
(12, '2023_05_20_163734_visit', 5),
(13, '2023_05_25_021136_create_macs_table', 6),
(14, '2023_05_25_050635_create_macs_table', 7),
(15, '2023_05_30_060641_create_ipads_table', 8),
(16, '2023_05_30_060731_create_iphones_table', 8),
(17, '2023_05_30_060742_create_watchs_table', 8),
(18, '2023_05_30_060752_create_airpods_table', 8),
(19, '2023_05_30_062525_create_ipads_table', 9),
(20, '2023_05_30_062532_create_iphones_table', 9),
(21, '2023_05_30_062541_create_watchs_table', 9),
(22, '2023_05_30_062547_create_airpods_table', 9),
(23, '2023_05_31_055818_create_cart_table', 10),
(24, '2023_06_02_041657_create_contact_table', 11),
(25, '2023_06_05_063151_create_order_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(40, 'nhom 1', 'nhom1@gmail.com', 'ID: 1 - Macbook Pro 14 - Price 1111 - Quantity: 1\r\n													ID: 101 - iPhone 12 64GB - Price 1003 - Quantity: 1\r\n													ID: 201 - iPad Air - Price 502 - Quantity: 1', '2023-06-05 19:41:46', '2023-06-05 19:41:46'),
(41, 'customer', 'customer@gmail.com', 'ID: 1 - Macbook Pro 14 - Price 1111 - Quantity: 1\r\n													ID: 102 - iPhone 14 Pro Max - Price 1004 - Quantity: 1\r\n													ID: 201 - iPad Air - Price 502 - Quantity: 1', '2023-06-05 19:42:19', '2023-06-05 19:42:19'),
(42, NULL, NULL, 'ID: 103 - iPhone 14 Pro - Price 1005 - Quantity: 1\r\n													ID: 206 - iPad Pro - Price 508 - Quantity: 1\r\n													ID: 3 - Macbook Pro 16 - Price 1117 - Quantity: 1', '2023-06-05 21:38:19', '2023-06-05 21:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `avatar`, `firstname`, `lastname`, `phonenumber`, `address`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'info.dongocquang@gmail.com', 'info.dongocquang', '$2y$10$zO9h7BvlE2OMiYXRj/i8qu46iCPOgmXB.VCgRFllUq0f7.bY4Apl2', '0008734_iphone-14-pro-128gb_240.png', 'Do Ngoc cccc', 'Quang', '0397396864', 'Thanh Thai Street, 14 Ward, 10 District, Ho Chi Minh City', NULL, NULL, '2023-05-21 18:11:59', '2023-06-05 10:18:22'),
(4, 'nhom1@gmail.com', 'nhom1', '$2y$10$DgTX1AZZd0w5DW5bfp0TP.YUei4TXhLyrCuAjoWnmtvP92wpyvYUK', '0008734_iphone-14-pro-128gb_240.png', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 10:19:43', '2023-06-05 10:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `created_at`, `updated_at`) VALUES
(166, '2023-06-05 00:46:45', '2023-06-05 00:46:45'),
(167, '2023-06-05 00:46:45', '2023-06-05 00:46:45'),
(168, '2023-06-05 00:46:46', '2023-06-05 00:46:46'),
(169, '2023-06-05 00:46:50', '2023-06-05 00:46:50'),
(170, '2023-06-05 00:54:42', '2023-06-05 00:54:42'),
(171, '2023-06-05 00:56:07', '2023-06-05 00:56:07'),
(172, '2023-06-05 01:40:40', '2023-06-05 01:40:40'),
(173, '2023-06-05 01:43:09', '2023-06-05 01:43:09'),
(174, '2023-06-05 01:43:27', '2023-06-05 01:43:27'),
(175, '2023-06-05 08:47:09', '2023-06-05 08:47:09'),
(176, '2023-06-05 09:47:55', '2023-06-05 09:47:55'),
(177, '2023-06-05 09:50:16', '2023-06-05 09:50:16'),
(178, '2023-06-05 09:55:37', '2023-06-05 09:55:37'),
(179, '2023-06-05 10:10:27', '2023-06-05 10:10:27'),
(180, '2023-06-05 19:42:23', '2023-06-05 19:42:23'),
(181, '2023-06-05 20:06:11', '2023-06-05 20:06:11'),
(182, '2023-06-05 20:14:06', '2023-06-05 20:14:06'),
(183, '2023-06-05 20:14:21', '2023-06-05 20:14:21'),
(184, '2023-06-05 20:15:56', '2023-06-05 20:15:56'),
(185, '2023-06-05 20:18:34', '2023-06-05 20:18:34'),
(186, '2023-06-05 20:18:54', '2023-06-05 20:18:54'),
(187, '2023-06-05 21:49:47', '2023-06-05 21:49:47'),
(188, '2023-06-05 23:03:04', '2023-06-05 23:03:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ipads`
--
ALTER TABLE `ipads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iphones`
--
ALTER TABLE `iphones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macs`
--
ALTER TABLE `macs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipads`
--
ALTER TABLE `ipads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `iphones`
--
ALTER TABLE `iphones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `macs`
--
ALTER TABLE `macs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

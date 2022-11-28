-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 12:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makgamingshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'maksud rony', 'Maksudrony44@gmail.com', '01521331239', 'cdcsdcd dscdcdsa dscfdcc', '2022-10-30 00:56:27', '2022-10-30 00:56:27'),
(2, 'eqddddddddd', 'vfdgfdgd@gmail.com', 'eqwefef', 'effffffq', '2022-11-01 05:36:45', '2022-11-01 05:36:45'),
(3, 'maksud rony', 'Maksudrony44@gmail.com', '01521331239', 'hgnjmjh', '2022-11-01 05:46:42', '2022-11-01 05:46:42');

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
-- Table structure for table `gpus`
--

CREATE TABLE `gpus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gpus`
--

INSERT INTO `gpus` (`id`, `title`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'EVGA GEFORCE RTX 3080 10GB FTW3 ULTRA GAMING GDDR6X GRAPHICS CARD', '105,000', '1667207898.png', 'Engine Clock	1800 MHz Boost Clock\r\n489.6GT/S Texture Fill Rate\r\nMemory Type	GDDR6X\r\nCUDA Cores (Nvidia)	8704 CUDA Cores\r\nMemory Bandwidth (GB/Sec)	760 GB/S Memory Bandwidth\r\nMemory Clock	19000 MHz (Effective)', '2022-10-29 23:17:47', '2022-10-31 03:18:18'),
(6, 'SAPPHIRE TOXIC AMD RADEON RX 6950 XT 16GB OC LE GDDR6 GRAPHICS CARD', '173,900', '1667107430.png', 'Memory Size	16GB\r\nEngine Clock	Boost Clock: Up To 2365 MHz\r\nGame Clock: Up To 2135 MHz\r\nMemory Type	GDDR6', '2022-10-29 23:23:50', '2022-10-29 23:23:50'),
(7, 'MSI RADEON RX 6750 XT MECH 2X 12G OC GDDR6 GRAPHICS CARD', '76,900৳', '1667107562.png', 'Graphics Chipset	Radeon RX 6750 XT MECH 2X 12G OC\r\nMemory Size	12GB\r\nMemory Type	GDDR6\r\nCUDA Cores (Nvidia)	2560 Units', '2022-10-29 23:26:02', '2022-10-29 23:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `keyboards`
--

CREATE TABLE `keyboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ktitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keyboards`
--

INSERT INTO `keyboards` (`id`, `ktitle`, `kprice`, `kimage`, `kdescription`, `created_at`, `updated_at`) VALUES
(6, 'Asus ROG Claymore II Modular TKL Mechanical Gaming Keyboard (Red Switch)', '18,900৳', '1667208552.png', 'Key Switch: ROG RX RED Optical Mechanical Switch\r\nConnectivity: USB 2.0, RF 2.4GHz\r\nSize (Full/TKL) 100%\r\nLighting Per-Key RGB LEDs\r\nAURA Sync Yes', '2022-10-31 03:29:12', '2022-10-31 03:29:12'),
(7, 'Asus ROG Claymore II Modular TKL Mechanical Gaming Keyboard (Red Switch)', '18,900৳', '1667208584.png', 'Key Switch: ROG RX RED Optical Mechanical Switch\r\nConnectivity: USB 2.0, RF 2.4GHz\r\nSize (Full/TKL) 100%\r\nLighting Per-Key RGB LEDs\r\nAURA Sync Yes', '2022-10-31 03:29:44', '2022-10-31 03:29:44'),
(8, 'Asus ROG Claymore II Modular TKL Mechanical Gaming Keyboard (Red Switch)', '19,883৳', '1667208614.png', 'Key Switch: ROG RX RED Optical Mechanical Switch\r\nConnectivity: USB 2.0, RF 2.4GHz\r\nSize (Full/TKL) 100%\r\nLighting Per-Key RGB LEDs\r\nAURA Sync Yes\r\nAnti-Ghosting 100% Anti-Ghosting', '2022-10-31 03:30:14', '2022-10-31 03:30:14');

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
(6, '2022_10_29_044720_create_sessions_table', 1),
(7, '2022_10_29_102153_create_gpus_table', 2),
(8, '2022_10_29_104910_create_gpus_table', 3),
(9, '2022_10_29_120527_create_gpus_table', 4),
(10, '2022_10_30_064038_create_contacts_table', 5),
(11, '2022_10_30_100912_create_rams_table', 6),
(12, '2022_10_30_113856_create_keyboards_table', 7),
(13, '2022_10_31_035127_create_rams_table', 8),
(14, '2022_10_31_053904_create_keyboards_table', 9),
(15, '2022_10_31_083106_create_monitors_table', 10),
(16, '2022_11_20_999999_add_active_status_to_users', 11),
(17, '2022_11_20_999999_add_avatar_to_users', 11),
(18, '2022_11_20_999999_add_dark_mode_to_users', 11),
(19, '2022_11_20_999999_add_messenger_color_to_users', 11),
(20, '2022_11_20_999999_create_favorites_table', 11),
(21, '2022_11_20_999999_create_messages_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `monitors`
--

CREATE TABLE `monitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitors`
--

INSERT INTO `monitors` (`id`, `mtitle`, `mprice`, `mimage`, `mdescription`, `created_at`, `updated_at`) VALUES
(3, 'GIGABYTE G32QC-EK 32inch 165Hz Curved Gaming Monitor', '44,500৳', '1667208737.png', 'Size: 31.5\"\r\nScreen Area: 27.45 X 15.44\" / 697.34 X 392.26 Mm\r\nPanel Type: VA LCD\r\nCurvature: 1500R\r\nTouchscreen: No\r\nResolution: 2560 X 1440\r\nAspect Ratio: 16:9\r\nPixels Per Inch (Ppi): 93 Ppi\r\nFinish: Matte', '2022-10-31 03:32:17', '2022-10-31 03:32:17'),
(4, 'GIGABYTE G32QC-EK 32inch 165Hz Curved Gaming Monitor', '46,814৳', '1667208762.png', 'Size: 31.5\"\r\nScreen Area: 27.45 X 15.44\" / 697.34 X 392.26 Mm\r\nPanel Type: VA LCD\r\nCurvature: 1500R\r\nTouchscreen: No\r\nResolution: 2560 X 1440\r\nAspect Ratio: 16:9\r\nPixels Per Inch (Ppi): 93 Ppi\r\nFinish: Matte', '2022-10-31 03:32:42', '2022-10-31 03:32:42'),
(5, 'GIGABYTE G32QC-EK 32inch 165Hz Curved Gaming Monitor', '50,814৳', '1667208813.png', 'Size: 31.5\"\r\nScreen Area: 27.45 X 15.44\" / 697.34 X 392.26 Mm\r\nPanel Type: VA LCD\r\nCurvature: 1500R\r\nTouchscreen: No\r\nResolution: 2560 X 1440\r\nAspect Ratio: 16:9\r\nPixels Per Inch (Ppi): 93 Ppi', '2022-10-31 03:33:33', '2022-10-31 03:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(1, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365e8b17195b', 'BDT'),
(2, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365e8c48e078', 'BDT'),
(3, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365e95092b52', 'BDT'),
(4, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365e9e625f24', 'BDT'),
(5, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365eb8cd1492', 'BDT'),
(6, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365eb9c8deeb', 'BDT'),
(7, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ebbc91208', 'BDT'),
(8, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ebd1cb883', 'BDT'),
(9, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ecc784eec', 'BDT'),
(10, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ed10193b0', 'BDT'),
(11, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365edf4e877b', 'BDT'),
(12, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ee105d3dc', 'BDT'),
(13, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365eed991ff6', 'BDT'),
(14, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365eef5ad1e9', 'BDT'),
(15, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ef1f4a4b3', 'BDT'),
(16, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ef94bdcd6', 'BDT'),
(17, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365ef9e3741a', 'BDT'),
(18, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f065e5696', 'BDT'),
(19, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f0b555d7d', 'BDT'),
(20, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f0c1ab5a7', 'BDT'),
(21, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f0e7b0621', 'BDT'),
(22, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f28fe3652', 'BDT'),
(23, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f29a8117a', 'BDT'),
(24, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f30426da9', 'BDT'),
(25, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f32048de9', 'BDT'),
(26, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f387c788c', 'BDT'),
(27, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f3f2af761', 'BDT'),
(28, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f3fd3f53b', 'BDT'),
(29, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f45822c8c', 'BDT'),
(30, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f4c853357', 'BDT'),
(31, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f5502d7bd', 'BDT'),
(32, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f5b757bc0', 'BDT'),
(33, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f6234d530', 'BDT'),
(34, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f731ab2a1', 'BDT'),
(35, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f73f470db', 'BDT'),
(36, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f78790176', 'BDT'),
(37, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f8111613f', 'BDT'),
(38, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f8185413a', 'BDT'),
(39, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f85446436', 'BDT'),
(40, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f865b4d6f', 'BDT'),
(41, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f9b125b2f', 'BDT'),
(42, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365f9f80580b', 'BDT'),
(43, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365fa0103aa3', 'BDT'),
(44, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365fa3764b4d', 'BDT'),
(45, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365fa5d19143', 'BDT'),
(46, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365faa207895', 'BDT'),
(47, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365fab2840b1', 'BDT'),
(48, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365faf720078', 'BDT'),
(49, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6365fb007140f', 'BDT'),
(50, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6366056f97387', 'BDT'),
(51, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '636623972d1ad', 'BDT'),
(52, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '636627b88fc5e', 'BDT'),
(53, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '636637493afef', 'BDT'),
(54, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6366391aca1f9', 'BDT'),
(55, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '636b5cfa83326', 'BDT'),
(56, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '637f4ee3f08c2', 'BDT'),
(57, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '63832aab04551', 'BDT');

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
-- Table structure for table `rams`
--

CREATE TABLE `rams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rams`
--

INSERT INTO `rams` (`id`, `rtitle`, `rprice`, `rimage`, `rdescription`, `created_at`, `updated_at`) VALUES
(5, 'G.SKILL Trident Z Neo 64GB (2 X 32GB) 3600MHz RGB DDR4 RAM', '28,999৳', '1667208032.png', 'Capacity:  64GB (32GBx2)\r\nMemory Type: DDR4\r\nTested Speed: 3600MHz\r\nTested Latency: 18-22-22-42', '2022-10-31 03:20:32', '2022-10-31 03:20:32'),
(6, 'G.SKILL Trident Z Neo 64GB (2 X 32GB) 3600MHz RGB DDR4 RAM', '30,507৳', '1667208070.png', 'Capacity:  64GB (32GBx2)\r\nMemory Type: DDR4\r\nTested Speed: 3600MHz\r\nTested Latency: 18-22-22-42', '2022-10-31 03:21:10', '2022-10-31 03:21:10'),
(7, 'G.SKILL Trident Z Neo 64GB (2 X 32GB) 3600MHz RGB DDR4 RAM', '30,507৳', '1667208381.png', 'Capacity:  64GB (32GBx2)\r\nMemory Type: DDR4\r\nTested Speed: 3600MHz\r\nTested Latency: 18-22-22-42', '2022-10-31 03:21:46', '2022-10-31 03:26:21');

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
('wmu3rOqkFLRNCkQmSE8uhQBC0ZJsFqSBT8GWnN5L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNExLUWlXNWk5ckg2VmRONGZXNWtDNnJuRmtKY2RXckFWb0pzMkpCRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1669543683);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(1, 'user', 'user@gmail.com', '0', NULL, '$2y$10$M5uVgou1RnpqLnD7AvITEuIpIO81TvDS.QfLv0GB7YlxUYHolp0Qu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-28 23:01:10', '2022-10-28 23:01:10', 0, 'avatar.png', 0, '#2180f3'),
(3, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$2OuMwTUc6Ai9pT7T4dRhOOS.OOjDzEywb5VV2eIJORXIFQmWfOgZi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-29 02:14:07', '2022-10-29 02:14:07', 0, 'avatar.png', 0, '#2180f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
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
-- Indexes for table `gpus`
--
ALTER TABLE `gpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitors`
--
ALTER TABLE `monitors`
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
-- Indexes for table `rams`
--
ALTER TABLE `rams`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpus`
--
ALTER TABLE `gpus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `monitors`
--
ALTER TABLE `monitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rams`
--
ALTER TABLE `rams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

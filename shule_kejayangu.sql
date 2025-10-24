-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2025 at 05:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shule_kejayangu`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `toptext` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `descp` text DEFAULT NULL,
  `descp1` text DEFAULT NULL,
  `descp2` text DEFAULT NULL,
  `tprof` varchar(255) DEFAULT NULL COMMENT 'totalprofessionals',
  `tpsell` varchar(255) DEFAULT NULL COMMENT 'totalpropertysell',
  `tprent` varchar(255) DEFAULT NULL COMMENT 'totalpropertyrent',
  `tcust` varchar(255) DEFAULT NULL COMMENT 'totalcustomers',
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `toptext`, `photo`, `year`, `descp`, `descp1`, `descp2`, `tprof`, `tpsell`, `tprent`, `tcust`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Karibu to Keja Yangu', 'uploads/images/1781668743336652.jpg', '25', 'At Keja Yangu, we empower you with detailed property descriptions, high-quality images, and virtual tours, ensuring you make informed decisions. Explore neighborhoods, amenities, and floor plans at your convenience, narrowing down your choices to the perfect match for your needs.', 'Our advanced search algorithm ensures that users receive accurate and tailored results, saving them time and effort in their property search.', 'Each property listing is comprehensive, providing detailed information about the property.', '837', '523', '232', '324', 'r', '2023-08-10 05:13:44', '2025-07-17 14:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenities_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenities_name`, `created_at`, `updated_at`) VALUES
(1, 'parking', NULL, NULL),
(2, 'Bathrooms', NULL, NULL),
(3, 'Swimming Pool', NULL, NULL),
(4, 'Bedrooms', NULL, NULL),
(5, 'CCTV Security', NULL, NULL),
(6, 'Intercom', NULL, NULL),
(7, 'Balcony Terrace', NULL, NULL),
(8, 'Cleaning Services', NULL, NULL),
(9, 'Backup Generator', NULL, NULL),
(10, '24 Hours Concierge', NULL, NULL),
(11, 'Maintainance Staff', NULL, NULL),
(12, 'Flooring', NULL, NULL),
(13, 'Gated Communtiy', NULL, NULL),
(14, 'Lobby in Building', NULL, NULL),
(15, 'First Aid Medical Center', NULL, NULL),
(16, 'Lifts', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `short_title`, `banner_image`, `created_at`, `updated_at`) VALUES
(2, 'Karibu to Keja Yangu', 'Your Gateway to Real Estate Excellence', 'uploads/banner/1793775093478582.jpg', NULL, '2024-03-17 09:07:16'),
(3, 'Explore Our Diverse Property Portfolio', 'Find Your Perfect Home', 'uploads/banner/1793775079307640.jpg', NULL, '2024-03-17 09:07:02'),
(4, 'Stay Informed with Market Insights', 'Trust Keja Yangu\'s Experienced Advisors to Navigate Your Real Estate Journey', 'uploads/banner/1793775228341161.jpg', NULL, '2024-03-18 02:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'newone', 'newone', NULL, '2023-10-20 07:39:50'),
(2, 'latest news', 'latest-news', NULL, NULL),
(3, 'National Housing Policy', 'national-housing-policy', NULL, NULL),
(5, 'Westy', 'westy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcat_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `short_descp` varchar(255) DEFAULT NULL,
  `long_descp` varchar(255) DEFAULT NULL,
  `post_tags` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `blogcat_id`, `user_id`, `post_title`, `post_slug`, `post_image`, `short_descp`, `long_descp`, `post_tags`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 'News Today', 'news today', 'uploads/post/1780280832852131.jpg', 'Keja Yangu helped me find the perfect rental property for my family. Their team took the time to understand our requirements and showed us several options that matched our criteria.', NULL, 'Realestate,house,office', '2023-10-20 10:21:47', NULL),
(3, 2, '1', 'Keja Yangu', 'keja yangu', 'uploads/post/1780282112114577.jpg', 'Keja Yangu', NULL, 'Realestate,keja yangu', '2023-10-20 10:42:06', NULL),
(4, 2, '1', 'Mombasa News', 'mombasa news', 'uploads/post/1780282166557760.webp', 'Mombasa News', NULL, 'Realestate,news', '2023-10-20 10:42:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'user_id',
  `receiver_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'agent_id',
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender_id`, `receiver_id`, `msg`, `created_at`, `updated_at`) VALUES
(11, 4, 11, 'i miss you', '2023-10-30 10:42:31', '2023-10-30 10:42:31'),
(13, 4, NULL, 'hello admin', '2023-10-31 03:34:48', '2023-10-31 03:34:48'),
(15, 4, 12, 'Hey, Agent', '2023-10-31 03:36:12', '2023-10-31 03:36:12'),
(17, 4, 5, 'hey agent 101', '2023-10-31 03:37:45', '2023-10-31 03:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, 'complain', 'i have a complaint aboutthe system', '2023-10-23 08:26:53', NULL),
(2, 4, 1, NULL, 'Thanks', 'I have recieved the message and i say great thanks for the response', '2023-10-23 08:27:40', NULL),
(3, 1, 1, 2, 'Hello, User', 'Thanks for the feedback', '2023-10-23 09:51:43', NULL),
(4, 4, 4, NULL, 'test', 'checking', '2023-10-23 11:09:38', NULL),
(5, 4, 4, 4, 'yes', 'test confirmed', '2023-10-23 11:11:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE `compares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compares`
--

INSERT INTO `compares` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 1, 25, '2023-10-13 06:43:52', NULL),
(2, 1, 35, '2023-10-13 06:43:56', NULL),
(4, 4, 25, '2023-10-14 06:38:48', NULL),
(5, 4, 15, '2023-10-14 06:38:50', NULL),
(6, 22, 60, '2025-07-16 19:23:28', NULL),
(7, 23, 57, '2025-09-26 22:31:00', NULL),
(8, 25, 57, '2025-10-23 22:10:58', NULL),
(9, 25, 56, '2025-10-23 22:11:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email1`, `email2`, `phone1`, `phone2`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(1, 'paulmulwa101@gmail.com', 'kejayangu@info.com', '0705069145', '0705069145', 'Athi rIver Nairobi', '7757-001000', '2023-11-29 11:09:46', '2023-11-03 08:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `courasels`
--

CREATE TABLE `courasels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `textone` varchar(255) DEFAULT NULL,
  `textwo` varchar(255) DEFAULT NULL,
  `texthree` varchar(255) DEFAULT NULL,
  `imageone` varchar(255) DEFAULT NULL,
  `imagetwo` varchar(255) DEFAULT NULL,
  `imagethree` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `facility_name` varchar(255) DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `property_id`, `facility_name`, `distance`, `created_at`, `updated_at`) VALUES
(35, 20, 'Airport', '5', '2023-09-28 04:19:24', '2023-09-28 04:19:24'),
(36, 20, NULL, NULL, '2023-09-28 04:19:24', '2023-09-28 04:19:24'),
(37, 21, 'Bus Stop', '768', '2023-09-29 05:48:38', '2023-09-29 05:48:38'),
(38, 21, NULL, NULL, '2023-09-29 05:48:38', '2023-09-29 05:48:38'),
(45, 23, 'Hospital', '45', '2023-09-29 11:25:56', '2023-09-29 11:25:56'),
(46, 23, 'Bus Stop', '9', '2023-09-29 11:25:57', '2023-09-29 11:25:57'),
(47, 23, 'School', '8', '2023-09-29 11:25:57', '2023-09-29 11:25:57'),
(48, 23, 'Bank', '7', '2023-09-29 11:25:57', '2023-09-29 11:25:57'),
(49, 23, 'Super Market', '6', '2023-09-29 11:25:57', '2023-09-29 11:25:57'),
(50, 22, 'Hospital', '78', '2023-09-29 11:26:43', '2023-09-29 11:26:43'),
(51, 22, 'Pharmacy', '5', '2023-09-29 11:26:43', '2023-09-29 11:26:43'),
(52, 24, 'School', '2', '2023-09-30 06:34:04', '2023-09-30 06:34:04'),
(53, 24, NULL, NULL, '2023-09-30 06:34:04', '2023-09-30 06:34:04'),
(99, 36, 'School', '67', '2023-10-05 08:40:38', '2023-10-05 08:40:38'),
(100, 36, 'Entertainment', '768', '2023-10-05 08:40:38', '2023-10-05 08:40:38'),
(101, 36, NULL, NULL, '2023-10-05 08:40:38', '2023-10-05 08:40:38'),
(106, 37, 'Pharmacy', '5', '2023-10-10 02:16:16', '2023-10-10 02:16:16'),
(107, 37, 'Super Market', '23', '2023-10-10 02:16:17', '2023-10-10 02:16:17'),
(123, 40, 'Railways', '23', '2023-10-17 04:38:41', '2023-10-17 04:38:41'),
(124, 40, NULL, NULL, '2023-10-17 04:38:41', '2023-10-17 04:38:41'),
(125, 41, 'Railways', '23', '2023-10-17 04:38:49', '2023-10-17 04:38:49'),
(126, 41, NULL, NULL, '2023-10-17 04:38:50', '2023-10-17 04:38:50'),
(127, 42, 'Railways', '23', '2023-10-17 04:38:58', '2023-10-17 04:38:58'),
(128, 42, NULL, NULL, '2023-10-17 04:38:58', '2023-10-17 04:38:58'),
(131, 44, 'Airport', '78', '2023-10-17 04:43:51', '2023-10-17 04:43:51'),
(132, 44, NULL, NULL, '2023-10-17 04:43:51', '2023-10-17 04:43:51'),
(133, 45, 'Beach', '231', '2023-10-17 04:47:02', '2023-10-17 04:47:02'),
(134, 45, NULL, NULL, '2023-10-17 04:47:02', '2023-10-17 04:47:02'),
(139, 48, 'Pharmacy', '768', '2023-10-19 05:00:04', '2023-10-19 05:00:04'),
(140, 48, NULL, NULL, '2023-10-19 05:00:04', '2023-10-19 05:00:04'),
(141, 49, 'Railways', '67', '2023-10-19 05:01:39', '2023-10-19 05:01:39'),
(142, 49, NULL, NULL, '2023-10-19 05:01:39', '2023-10-19 05:01:39'),
(143, 50, 'School', '2', '2023-10-19 05:28:22', '2023-10-19 05:28:22'),
(144, 50, NULL, NULL, '2023-10-19 05:28:22', '2023-10-19 05:28:22'),
(145, 51, 'SuperMarket', '523', '2023-10-19 05:30:27', '2023-10-19 05:30:27'),
(146, 51, NULL, NULL, '2023-10-19 05:30:28', '2023-10-19 05:30:28'),
(163, 57, 'Hospital', '34', '2025-07-12 23:26:10', '2025-07-12 23:26:10'),
(164, 57, NULL, NULL, '2025-07-12 23:26:10', '2025-07-12 23:26:10'),
(165, 56, 'School', '523', '2025-07-12 23:27:38', '2025-07-12 23:27:38'),
(166, 56, NULL, NULL, '2025-07-12 23:27:38', '2025-07-12 23:27:38'),
(167, 55, 'Airport', '23', '2025-07-12 23:29:14', '2025-07-12 23:29:14'),
(168, 55, NULL, NULL, '2025-07-12 23:29:14', '2025-07-12 23:29:14'),
(169, 54, 'Airport', NULL, '2025-07-12 23:30:21', '2025-07-12 23:30:21'),
(170, 54, NULL, NULL, '2025-07-12 23:30:21', '2025-07-12 23:30:21'),
(171, 53, 'Pharmacy', '34', '2025-07-12 23:32:20', '2025-07-12 23:32:20'),
(172, 53, NULL, NULL, '2025-07-12 23:32:20', '2025-07-12 23:32:20'),
(173, 52, NULL, '523', '2025-07-12 23:33:14', '2025-07-12 23:33:14'),
(174, 52, NULL, NULL, '2025-07-12 23:33:14', '2025-07-12 23:33:14'),
(177, 46, 'Hospital', '2', '2025-07-12 23:35:13', '2025-07-12 23:35:13'),
(178, 46, NULL, NULL, '2025-07-12 23:35:13', '2025-07-12 23:35:13'),
(186, 43, 'Bank', NULL, '2025-07-12 23:39:33', '2025-07-12 23:39:33'),
(187, 43, NULL, NULL, '2025-07-12 23:39:33', '2025-07-12 23:39:33'),
(188, 15, 'Super Market', '5', '2025-07-12 23:42:16', '2025-07-12 23:42:16'),
(189, 15, 'Entertainment', '34', '2025-07-12 23:42:16', '2025-07-12 23:42:16'),
(190, 17, NULL, NULL, '2025-07-12 23:42:53', '2025-07-12 23:42:53'),
(191, 17, NULL, NULL, '2025-07-12 23:42:53', '2025-07-12 23:42:53'),
(192, 25, 'Airport', '45', '2025-07-12 23:43:44', '2025-07-12 23:43:44'),
(193, 25, 'Entertainment', '78', '2025-07-12 23:43:44', '2025-07-12 23:43:44'),
(194, 25, 'Railways', '12', '2025-07-12 23:43:44', '2025-07-12 23:43:44'),
(195, 27, 'Entertainment', '67', '2025-07-12 23:44:37', '2025-07-12 23:44:37'),
(196, 27, 'Railways', '5', '2025-07-12 23:44:37', '2025-07-12 23:44:37'),
(197, 27, 'School', '2', '2025-07-12 23:44:37', '2025-07-12 23:44:37'),
(198, 27, 'Mall', '3', '2025-07-12 23:44:37', '2025-07-12 23:44:37'),
(199, 35, 'Beach', '78', '2025-07-12 23:45:49', '2025-07-12 23:45:49'),
(200, 35, 'Railways', '523', '2025-07-12 23:45:49', '2025-07-12 23:45:49'),
(201, 35, 'Super Market', '12', '2025-07-12 23:45:49', '2025-07-12 23:45:49'),
(202, 38, 'Railways', '23', '2025-07-12 23:46:37', '2025-07-12 23:46:37'),
(203, 38, NULL, NULL, '2025-07-12 23:46:37', '2025-07-12 23:46:37'),
(204, 39, 'Railways', '23', '2025-07-12 23:47:11', '2025-07-12 23:47:11'),
(205, 39, NULL, NULL, '2025-07-12 23:47:11', '2025-07-12 23:47:11'),
(206, 47, 'Entertainment', '21', '2025-07-12 23:56:18', '2025-07-12 23:56:18'),
(207, 47, NULL, NULL, '2025-07-12 23:56:18', '2025-07-12 23:56:18'),
(208, 58, 'Airport', '15', '2025-07-16 18:53:37', '2025-07-16 18:53:37'),
(209, 58, NULL, NULL, '2025-07-16 18:53:37', '2025-07-16 18:53:37'),
(210, 59, 'Airport', '3', '2025-07-16 18:59:03', '2025-07-16 18:59:03'),
(211, 59, NULL, NULL, '2025-07-16 18:59:03', '2025-07-16 18:59:03'),
(212, 60, 'Railways', '10', '2025-07-16 19:09:54', '2025-07-16 19:09:54'),
(213, 60, NULL, NULL, '2025-07-16 19:09:54', '2025-07-16 19:09:54'),
(214, 61, 'Beach', '12', '2025-07-16 19:15:56', '2025-07-16 19:15:56'),
(215, 61, NULL, NULL, '2025-07-16 19:15:56', '2025-07-16 19:15:56'),
(216, 62, 'Hospital', '9', '2025-07-16 19:21:11', '2025-07-16 19:21:11'),
(217, 62, NULL, NULL, '2025-07-16 19:21:11', '2025-07-16 19:21:11'),
(218, 63, 'SuperMarket', '5', '2025-07-16 19:50:40', '2025-07-16 19:50:40'),
(219, 63, NULL, NULL, '2025-07-16 19:50:40', '2025-07-16 19:50:40'),
(220, 64, 'Entertainment', '4', '2025-07-16 19:54:45', '2025-07-16 19:54:45'),
(221, 64, NULL, NULL, '2025-07-16 19:54:45', '2025-07-16 19:54:45'),
(222, 65, 'Entertainment', '2', '2025-10-23 22:21:26', '2025-10-23 22:21:26'),
(223, 65, NULL, NULL, '2025-10-23 22:21:26', '2025-10-23 22:21:26'),
(224, 67, 'Bus Stop', '1km', '2025-10-23 22:40:12', '2025-10-23 22:40:12'),
(225, 67, NULL, NULL, '2025-10-23 22:40:12', '2025-10-23 22:40:12'),
(226, 68, 'Bank', '1km', '2025-10-23 22:55:51', '2025-10-23 22:55:51'),
(227, 68, NULL, NULL, '2025-10-23 22:55:51', '2025-10-23 22:55:51'),
(228, 69, 'Bank', '1km', '2025-10-23 22:55:54', '2025-10-23 22:55:54'),
(229, 69, NULL, NULL, '2025-10-23 22:55:54', '2025-10-23 22:55:54'),
(230, 70, 'Entertainment', '1km', '2025-10-23 23:37:03', '2025-10-23 23:37:03'),
(231, 70, NULL, NULL, '2025-10-23 23:37:03', '2025-10-23 23:37:03'),
(232, 71, 'Bus Stop', '2', '2025-10-23 23:42:00', '2025-10-23 23:42:00'),
(233, 71, NULL, NULL, '2025-10-23 23:42:00', '2025-10-23 23:42:00'),
(234, 72, 'SuperMarket', '3', '2025-10-23 23:44:04', '2025-10-23 23:44:04'),
(235, 72, NULL, NULL, '2025-10-23 23:44:04', '2025-10-23 23:44:04'),
(236, 73, 'School', '3', '2025-10-23 23:48:24', '2025-10-23 23:48:24'),
(237, 73, NULL, NULL, '2025-10-23 23:48:24', '2025-10-23 23:48:24'),
(238, 74, 'Mall', '3', '2025-10-23 23:51:28', '2025-10-23 23:51:28'),
(239, 74, NULL, NULL, '2025-10-23 23:51:28', '2025-10-23 23:51:28'),
(240, 75, 'SuperMarket', '4', '2025-10-23 23:54:20', '2025-10-23 23:54:20'),
(241, 75, NULL, NULL, '2025-10-23 23:54:20', '2025-10-23 23:54:20'),
(242, 76, 'Bus Stop', '3', '2025-10-23 23:56:49', '2025-10-23 23:56:49'),
(243, 76, NULL, NULL, '2025-10-23 23:56:49', '2025-10-23 23:56:49'),
(244, 77, 'SuperMarket', '2', '2025-10-23 23:59:32', '2025-10-23 23:59:32'),
(245, 77, NULL, NULL, '2025-10-23 23:59:32', '2025-10-23 23:59:32'),
(246, 78, 'Mall', '4', '2025-10-24 00:01:52', '2025-10-24 00:01:52'),
(247, 78, NULL, NULL, '2025-10-24 00:01:52', '2025-10-24 00:01:52');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_09_06_115605_create_property_types_table', 1),
(13, '2023_09_07_091018_create_amenities_table', 1),
(14, '2023_09_07_115130_create_permission_tables', 1),
(15, '2023_09_16_122844_create_properties_table', 2),
(16, '2023_09_16_124316_create_multi_images_table', 2),
(17, '2023_09_16_124604_create_facilities_table', 2),
(18, '2023_10_05_052307_create_package_plans_table', 3),
(19, '2023_10_11_042334_create_wishlists_table', 4),
(20, '2023_10_12_083422_create_compares_table', 5),
(21, '2023_10_14_101309_create_property_messages_table', 6),
(22, '2023_10_17_085120_create_states_table', 7),
(23, '2023_10_19_121046_create_testimonials_table', 8),
(24, '2023_10_20_065041_create_blog_categories_table', 9),
(25, '2023_10_20_104656_create_blog_posts_table', 10),
(26, '2023_10_23_104543_create_comments_table', 11),
(27, '2023_10_23_141848_create_schedules_table', 12),
(28, '2023_10_24_091033_create_smtp_settings_table', 13),
(29, '2023_10_24_142159_create_site_settings_table', 14),
(30, '2023_10_30_105852_create_chat_messages_table', 15),
(32, '2023_11_03_094252_create_contact_us_table', 16),
(33, '2023_11_03_132953_create_user_contacts_table', 17),
(34, '2023_11_04_074031_create_about_us_table', 18),
(35, '2023_11_05_065521_create_services_table', 19),
(36, '2023_09_07_000001_create_personal_access_tokens_table', 20),
(37, '2023_09_12_100000_create_password_reset_tokens_table', 21),
(38, '2024_03_15_202700_create_courasels_table', 21),
(39, '2024_03_16_213358_create_banners_table', 22),
(40, '2025_07_17_210251_create_subscribers_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\Models\\User', 15);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `property_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(36, 15, 'uploads/property/multi-image/1778191651541905.jpg', '2023-09-27 08:55:07', NULL),
(37, 15, 'uploads/property/multi-image/1778191651685040.jpg', '2023-09-27 08:55:08', NULL),
(39, 17, 'uploads/property/multi-image/1778350634531473.jpg', '2023-09-27 10:51:38', '2023-09-29 03:02:05'),
(46, 20, 'uploads/property/multi-image/1778264901224273.jpg', '2023-09-28 04:19:24', NULL),
(47, 20, 'uploads/property/multi-image/1778264901417400.jpg', '2023-09-28 04:19:24', NULL),
(48, 20, 'uploads/property/multi-image/1778264901599367.jpg', '2023-09-28 04:19:24', NULL),
(52, 15, 'uploads/property/multi-image/1778358190037282.webp', '2023-09-29 05:02:15', NULL),
(59, 24, 'uploads/property/multi-image/1837899387250825.jpg', '2023-09-30 06:34:03', '2025-07-17 10:04:02'),
(60, 24, 'uploads/property/multi-image/1837899443336216.jpeg', '2023-09-30 06:34:03', '2025-07-17 10:04:55'),
(61, 25, 'uploads/property/multi-image/1837849042601490.jpg', '2023-10-04 12:33:08', '2025-07-16 20:43:49'),
(62, 25, 'uploads/property/multi-image/1837849059569054.jpg', '2023-10-04 12:33:08', '2025-07-16 20:44:05'),
(63, 25, 'uploads/property/multi-image/1837849101578746.jpg', '2023-10-04 12:33:09', '2025-07-16 20:44:45'),
(68, 27, 'uploads/property/multi-image/1778842871719040.png', '2023-10-04 12:46:46', '2023-10-04 13:26:00'),
(69, 27, 'uploads/property/multi-image/1778840405021779.jpg', '2023-10-04 12:46:47', NULL),
(71, 27, 'uploads/property/multi-image/1778843159596451.jpg', '2023-10-04 13:30:34', NULL),
(95, 35, 'uploads/property/multi-image/1778915367631387.jpg', '2023-10-05 08:38:17', NULL),
(96, 35, 'uploads/property/multi-image/1778915367961167.jpg', '2023-10-05 08:38:17', NULL),
(97, 35, 'uploads/property/multi-image/1778915368535929.jpg', '2023-10-05 08:38:18', NULL),
(98, 36, 'uploads/property/multi-image/1778915514758838.jpg', '2023-10-05 08:40:37', NULL),
(99, 36, 'uploads/property/multi-image/1778915515135388.jpg', '2023-10-05 08:40:37', NULL),
(100, 36, 'uploads/property/multi-image/1778915515474078.jpg', '2023-10-05 08:40:38', NULL),
(101, 37, 'uploads/property/multi-image/1778915729765193.jpg', '2023-10-05 08:44:02', NULL),
(102, 37, 'uploads/property/multi-image/1778915730040174.jpg', '2023-10-05 08:44:03', NULL),
(103, 37, 'uploads/property/multi-image/1778915730582964.jpg', '2023-10-05 08:44:03', NULL),
(104, 37, 'uploads/property/multi-image/1778915730806624.jpg', '2023-10-05 08:44:03', NULL),
(105, 37, 'uploads/property/multi-image/1778915731132408.jpg', '2023-10-05 08:44:03', NULL),
(106, 38, 'uploads/property/multi-image/1779987436941186.jpg', '2023-10-17 04:38:22', NULL),
(107, 38, 'uploads/property/multi-image/1779987438431618.jpg', '2023-10-17 04:38:23', NULL),
(108, 38, 'uploads/property/multi-image/1779987438965532.jpg', '2023-10-17 04:38:24', NULL),
(109, 39, 'uploads/property/multi-image/1779987444672735.jpg', '2023-10-17 04:38:29', NULL),
(110, 39, 'uploads/property/multi-image/1779987445304431.jpg', '2023-10-17 04:38:30', NULL),
(111, 39, 'uploads/property/multi-image/1779987446895429.jpg', '2023-10-17 04:38:31', NULL),
(112, 40, 'uploads/property/multi-image/1779987451006976.jpg', '2023-10-17 04:38:36', NULL),
(113, 40, 'uploads/property/multi-image/1779987453380458.jpg', '2023-10-17 04:38:38', NULL),
(114, 40, 'uploads/property/multi-image/1779987454647529.jpg', '2023-10-17 04:38:40', NULL),
(115, 41, 'uploads/property/multi-image/1779987460699117.jpg', '2023-10-17 04:38:45', NULL),
(116, 41, 'uploads/property/multi-image/1779987462953657.jpg', '2023-10-17 04:38:47', NULL),
(117, 41, 'uploads/property/multi-image/1779987463559801.jpg', '2023-10-17 04:38:49', NULL),
(118, 42, 'uploads/property/multi-image/1779987471211977.jpg', '2023-10-17 04:38:55', NULL),
(119, 42, 'uploads/property/multi-image/1779987471918156.jpg', '2023-10-17 04:38:55', NULL),
(120, 42, 'uploads/property/multi-image/1779987473061868.jpg', '2023-10-17 04:38:56', NULL),
(121, 43, 'uploads/property/multi-image/1779987626876580.jpg', '2023-10-17 04:41:23', NULL),
(122, 43, 'uploads/property/multi-image/1779987627531874.jpg', '2023-10-17 04:41:24', NULL),
(123, 43, 'uploads/property/multi-image/1779987628204113.jpg', '2023-10-17 04:41:24', NULL),
(124, 44, 'uploads/property/multi-image/1779987778921797.jpg', '2023-10-17 04:43:48', NULL),
(125, 44, 'uploads/property/multi-image/1779987779696248.jpg', '2023-10-17 04:43:49', NULL),
(126, 44, 'uploads/property/multi-image/1779987780594642.jpg', '2023-10-17 04:43:50', NULL),
(127, 44, 'uploads/property/multi-image/1779987781289136.jpg', '2023-10-17 04:43:51', NULL),
(128, 45, 'uploads/property/multi-image/1779987980299113.jpg', '2023-10-17 04:47:00', NULL),
(129, 45, 'uploads/property/multi-image/1779987980860841.jpg', '2023-10-17 04:47:01', NULL),
(130, 45, 'uploads/property/multi-image/1779987981624313.jpg', '2023-10-17 04:47:02', NULL),
(131, 46, 'uploads/property/multi-image/1779988406297196.jpg', '2023-10-17 04:53:46', NULL),
(132, 46, 'uploads/property/multi-image/1779988406847762.jpg', '2023-10-17 04:53:47', NULL),
(133, 46, 'uploads/property/multi-image/1779988407420383.jpg', '2023-10-17 04:53:48', NULL),
(134, 46, 'uploads/property/multi-image/1779988407828590.jpg', '2023-10-17 04:53:48', NULL),
(135, 47, 'uploads/property/multi-image/1837847005693094.jpg', '2023-10-17 12:34:27', '2025-07-16 20:11:27'),
(136, 47, 'uploads/property/multi-image/1837847066468233.jpg', '2023-10-17 12:34:27', '2025-07-16 20:12:25'),
(138, 48, 'uploads/property/multi-image/1837847361448305.jpeg', '2023-10-19 05:00:02', '2025-07-16 20:17:06'),
(139, 48, 'uploads/property/multi-image/1837847381013852.jpg', '2023-10-19 05:00:02', '2025-07-16 20:17:25'),
(140, 48, 'uploads/property/multi-image/1837847430464606.jpg', '2023-10-19 05:00:03', '2025-07-16 20:18:12'),
(141, 49, 'uploads/property/multi-image/1837847498563182.jpeg', '2023-10-19 05:01:38', '2025-07-16 20:19:17'),
(142, 49, 'uploads/property/multi-image/1837847529537772.jpeg', '2023-10-19 05:01:38', '2025-07-16 20:19:46'),
(143, 50, 'uploads/property/multi-image/1837847616804819.jpg', '2023-10-19 05:28:20', '2025-07-16 20:21:10'),
(144, 50, 'uploads/property/multi-image/1837847703886172.jpg', '2023-10-19 05:28:21', '2025-07-16 20:22:33'),
(146, 51, 'uploads/property/multi-image/1837847801145455.jpg', '2023-10-19 05:30:26', '2025-07-16 20:24:05'),
(147, 51, 'uploads/property/multi-image/1837847825692219.jpg', '2023-10-19 05:30:27', '2025-07-16 20:24:29'),
(148, 51, 'uploads/property/multi-image/1780171908014595.jpg', '2023-10-19 05:30:27', NULL),
(149, 52, 'uploads/property/multi-image/1837847127844294.jpg', '2023-10-19 05:30:30', '2025-07-16 20:13:23'),
(150, 52, 'uploads/property/multi-image/1780171911569809.jpg', '2023-10-19 05:30:31', NULL),
(151, 52, 'uploads/property/multi-image/1780171911914550.jpg', '2023-10-19 05:30:31', NULL),
(152, 53, 'uploads/property/multi-image/1837846127656456.jpg', '2023-10-19 05:32:31', '2025-07-16 19:57:29'),
(153, 53, 'uploads/property/multi-image/1837846145313892.jpg', '2023-10-19 05:32:31', '2025-07-16 19:57:46'),
(154, 53, 'uploads/property/multi-image/1837846163292818.jpg', '2023-10-19 05:32:32', '2025-07-16 19:58:03'),
(155, 54, 'uploads/property/multi-image/1837844421354070.jpg', '2023-10-19 05:34:12', '2025-07-16 19:30:22'),
(156, 54, 'uploads/property/multi-image/1837844436197501.jpg', '2023-10-19 05:34:13', '2025-07-16 19:30:36'),
(157, 55, 'uploads/property/multi-image/1780172268302278.jpg', '2023-10-19 05:36:11', NULL),
(158, 55, 'uploads/property/multi-image/1780172268740400.jpg', '2023-10-19 05:36:11', NULL),
(159, 55, 'uploads/property/multi-image/1780172269137566.jpg', '2023-10-19 05:36:12', NULL),
(160, 56, 'uploads/property/multi-image/1837846036460698.jpg', '2023-10-19 05:38:03', '2025-07-16 19:56:02'),
(161, 56, 'uploads/property/multi-image/1837846017974166.jpg', '2023-10-19 05:38:05', '2025-07-16 19:55:45'),
(162, 56, 'uploads/property/multi-image/1837846000688170.jpg', '2023-10-19 05:38:05', '2025-07-16 19:55:28'),
(163, 57, 'uploads/property/multi-image/1837844608871795.jpg', '2023-10-19 05:42:19', '2025-07-16 19:33:21'),
(164, 57, 'uploads/property/multi-image/1837844646793932.jpg', '2023-10-19 05:42:19', '2025-07-16 19:33:57'),
(165, 58, 'uploads/property/multi-image/1837842108494315.jpg', '2025-07-16 18:53:36', NULL),
(166, 58, 'uploads/property/multi-image/1837842108744484.jpg', '2025-07-16 18:53:36', NULL),
(167, 58, 'uploads/property/multi-image/1837842109039589.jpg', '2025-07-16 18:53:37', NULL),
(168, 59, 'uploads/property/multi-image/1837842451126574.jpg', '2025-07-16 18:59:03', NULL),
(169, 59, 'uploads/property/multi-image/1837842451366854.jpg', '2025-07-16 18:59:03', NULL),
(170, 59, 'uploads/property/multi-image/1837842451578848.jpg', '2025-07-16 18:59:03', NULL),
(171, 60, 'uploads/property/multi-image/1837843131027450.webp', '2025-07-16 19:09:52', NULL),
(172, 60, 'uploads/property/multi-image/1837843131731734.webp', '2025-07-16 19:09:52', NULL),
(173, 60, 'uploads/property/multi-image/1837843132337071.webp', '2025-07-16 19:09:53', NULL),
(174, 60, 'uploads/property/multi-image/1837843132975326.webp', '2025-07-16 19:09:54', NULL),
(175, 61, 'uploads/property/multi-image/1837843512545461.jpg', '2025-07-16 19:15:55', NULL),
(176, 61, 'uploads/property/multi-image/1837843512809081.jpg', '2025-07-16 19:15:56', NULL),
(177, 61, 'uploads/property/multi-image/1837843513114028.jpg', '2025-07-16 19:15:56', NULL),
(178, 61, 'uploads/property/multi-image/1837843513365046.jpg', '2025-07-16 19:15:56', NULL),
(179, 62, 'uploads/property/multi-image/1837843841968980.jpg', '2025-07-16 19:21:09', NULL),
(180, 62, 'uploads/property/multi-image/1837843842229259.jpg', '2025-07-16 19:21:10', NULL),
(181, 62, 'uploads/property/multi-image/1837843842552312.jpg', '2025-07-16 19:21:10', NULL),
(182, 62, 'uploads/property/multi-image/1837843842832540.jpg', '2025-07-16 19:21:10', NULL),
(183, 62, 'uploads/property/multi-image/1837843843078389.jpg', '2025-07-16 19:21:11', NULL),
(184, 62, 'uploads/property/multi-image/1837843843412516.jpg', '2025-07-16 19:21:11', NULL),
(185, 63, 'uploads/property/multi-image/1837845697808821.jpg', '2025-07-16 19:50:39', NULL),
(186, 63, 'uploads/property/multi-image/1837845698113732.jpg', '2025-07-16 19:50:40', NULL),
(187, 63, 'uploads/property/multi-image/1837845698490658.jpg', '2025-07-16 19:50:40', NULL),
(188, 63, 'uploads/property/multi-image/1837845698665965.jpg', '2025-07-16 19:50:40', NULL),
(189, 64, 'uploads/property/multi-image/1837845953042498.jpg', '2025-07-16 19:54:43', NULL),
(190, 64, 'uploads/property/multi-image/1837845953388986.jpg', '2025-07-16 19:54:43', NULL),
(191, 64, 'uploads/property/multi-image/1837845953693731.jpg', '2025-07-16 19:54:43', NULL),
(192, 64, 'uploads/property/multi-image/1837845953947497.jpg', '2025-07-16 19:54:44', NULL),
(193, 64, 'uploads/property/multi-image/1837845954297002.jpg', '2025-07-16 19:54:44', NULL),
(194, 64, 'uploads/property/multi-image/1837845954611919.jpg', '2025-07-16 19:54:44', NULL),
(195, 64, 'uploads/property/multi-image/1837845954926168.jpg', '2025-07-16 19:54:45', NULL),
(196, 17, 'uploads/property/multi-image/1837896418231618.webp', '2025-07-17 09:16:51', NULL),
(197, 65, 'uploads/property/multi-image/1846824283040141.jpg', '2025-10-23 22:21:25', NULL),
(198, 65, 'uploads/property/multi-image/1846824283285385.jpg', '2025-10-23 22:21:26', NULL),
(199, 67, 'uploads/property/multi-image/1846825463805867.jpg', '2025-10-23 22:40:12', NULL),
(200, 68, 'uploads/property/multi-image/1846826448445331.jpg', '2025-10-23 22:55:51', NULL),
(201, 69, 'uploads/property/multi-image/1846826451454732.jpg', '2025-10-23 22:55:54', NULL),
(202, 70, 'uploads/property/multi-image/1846829041198956.jpg', '2025-10-23 23:37:03', NULL),
(203, 70, 'uploads/property/multi-image/1846829041511299.jpg', '2025-10-23 23:37:03', NULL),
(204, 71, 'uploads/property/multi-image/1846829351992957.jpeg', '2025-10-23 23:42:00', NULL),
(205, 71, 'uploads/property/multi-image/1846829352292850.jpeg', '2025-10-23 23:42:00', NULL),
(206, 71, 'uploads/property/multi-image/1846829352465876.jpeg', '2025-10-23 23:42:00', NULL),
(207, 72, 'uploads/property/multi-image/1846829482484314.jpeg', '2025-10-23 23:44:04', NULL),
(208, 72, 'uploads/property/multi-image/1846829482770789.jpeg', '2025-10-23 23:44:04', NULL),
(209, 72, 'uploads/property/multi-image/1846829482950024.jpeg', '2025-10-23 23:44:04', NULL),
(210, 73, 'uploads/property/multi-image/1846829754461730.webp', '2025-10-23 23:48:23', NULL),
(211, 73, 'uploads/property/multi-image/1846829754818584.webp', '2025-10-23 23:48:24', NULL),
(212, 73, 'uploads/property/multi-image/1846829755532271.webp', '2025-10-23 23:48:24', NULL),
(213, 74, 'uploads/property/multi-image/1846829947587675.webp', '2025-10-23 23:51:28', NULL),
(214, 74, 'uploads/property/multi-image/1846829947965260.webp', '2025-10-23 23:51:28', NULL),
(215, 75, 'uploads/property/multi-image/1846830128236843.webp', '2025-10-23 23:54:20', NULL),
(216, 75, 'uploads/property/multi-image/1846830128428734.webp', '2025-10-23 23:54:20', NULL),
(217, 75, 'uploads/property/multi-image/1846830128753693.webp', '2025-10-23 23:54:20', NULL),
(218, 76, 'uploads/property/multi-image/1846830284028509.webp', '2025-10-23 23:56:49', NULL),
(219, 76, 'uploads/property/multi-image/1846830284464324.webp', '2025-10-23 23:56:49', NULL),
(220, 76, 'uploads/property/multi-image/1846830284829564.webp', '2025-10-23 23:56:49', NULL),
(221, 77, 'uploads/property/multi-image/1846830454417614.webp', '2025-10-23 23:59:31', NULL),
(222, 77, 'uploads/property/multi-image/1846830454737518.webp', '2025-10-23 23:59:31', NULL),
(223, 77, 'uploads/property/multi-image/1846830455054063.webp', '2025-10-23 23:59:32', NULL),
(224, 77, 'uploads/property/multi-image/1846830455440798.webp', '2025-10-23 23:59:32', NULL),
(225, 78, 'uploads/property/multi-image/1846830602499789.jpg', '2025-10-24 00:01:52', NULL),
(226, 78, 'uploads/property/multi-image/1846830602666998.jpg', '2025-10-24 00:01:52', NULL),
(227, 78, 'uploads/property/multi-image/1846830602949740.jpg', '2025-10-24 00:01:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_plans`
--

CREATE TABLE `package_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `package_credits` varchar(255) DEFAULT NULL,
  `package_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_plans`
--

INSERT INTO `package_plans` (`id`, `user_id`, `package_name`, `invoice`, `package_credits`, `package_amount`, `created_at`, `updated_at`) VALUES
(1, 11, 'Business', 'ERS80753058', '3', '20', '2023-10-05 06:20:01', NULL),
(2, 11, 'Business', 'ERS39493966', '3', '20', '2023-10-05 08:07:20', NULL),
(3, 11, 'Business', 'ERS43888533', '3', '20', '2023-10-05 08:35:50', NULL),
(4, 11, 'professional', 'ERS85984698', '3', '50', '2023-10-05 09:30:24', NULL),
(5, 11, 'Business', 'ERS20248215', '3', '20', '2023-10-05 09:31:14', NULL),
(6, 11, 'professional', 'ERS74365662', '10', '50', '2023-10-05 09:33:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(3, 'type.menu', 'web', 'type', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(4, 'all.type', 'web', 'type', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(5, 'add.type', 'web', 'type', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(6, 'edit.type', 'web', 'type', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(7, 'delete.type', 'web', 'type', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(8, 'state.menu', 'web', 'state', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(9, 'all.state', 'web', 'state', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(10, 'add.state', 'web', 'state', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(11, 'edit.state', 'web', 'state', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(12, 'delete.state', 'web', 'state', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(13, 'agent.menu', 'web', 'agent', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(14, 'agent.all', 'web', 'agent', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(15, 'agent.add', 'web', 'agent', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(16, 'agent.edit', 'web', 'agent', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(17, 'agent.delete', 'web', 'agent', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(18, 'amenities.menu', 'web', 'amenities', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(19, 'amenities.all', 'web', 'amenities', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(20, 'amenities.add', 'web', 'amenities', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(21, 'amenities.edit', 'web', 'amenities', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(22, 'amenities.delete', 'web', 'amenities', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(23, 'category.menu', 'web', 'category', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(24, 'comment.menu', 'web', 'comment', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(25, 'package.menu', 'web', 'history', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(26, 'post.menu', 'web', 'post', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(27, 'property.menu', 'web', 'property', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(28, 'property.all', 'web', 'property', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(29, 'property.add', 'web', 'property', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(30, 'property.edit', 'web', 'property', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(31, 'property.delete', 'web', 'property', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(32, 'role.menu', 'web', 'role', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(33, 'site.menu', 'web', 'site', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(34, 'smtp.menu', 'web', 'smtp', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(35, 'testimonials.menu', 'web', 'testimonials', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(36, 'testimonials.all', 'web', 'testimonials', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(37, 'testimonials.add', 'web', 'testimonials', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(38, 'testimonials.edit', 'web', 'testimonials', '2023-09-12 07:32:57', '2023-09-12 07:32:57'),
(39, 'testimonials.delete', 'web', 'testimonials', '2023-09-12 07:32:57', '2023-09-12 07:32:57');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptype_id` varchar(255) NOT NULL,
  `amenities_id` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_slug` varchar(255) NOT NULL,
  `property_code` varchar(255) NOT NULL,
  `property_status` varchar(255) NOT NULL,
  `lowest_price` varchar(255) DEFAULT NULL,
  `max_price` varchar(255) DEFAULT NULL,
  `property_thumbmail` varchar(255) DEFAULT NULL,
  `short_descp` text DEFAULT NULL,
  `long_descp` text DEFAULT NULL,
  `bedrooms` varchar(255) DEFAULT NULL,
  `bathrooms` varchar(255) DEFAULT NULL,
  `garage` varchar(255) DEFAULT NULL,
  `garage_size` varchar(255) DEFAULT NULL,
  `amenities_name` varchar(255) DEFAULT NULL,
  `property_size` varchar(255) DEFAULT NULL,
  `property_video` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `neighborhood` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `hot` varchar(255) DEFAULT NULL,
  `agent_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `ptype_id`, `amenities_id`, `property_name`, `property_slug`, `property_code`, `property_status`, `lowest_price`, `max_price`, `property_thumbmail`, `short_descp`, `long_descp`, `bedrooms`, `bathrooms`, `garage`, `garage_size`, `amenities_name`, `property_size`, `property_video`, `address`, `city`, `state`, `postal_code`, `neighborhood`, `latitude`, `longitude`, `featured`, `hot`, `agent_id`, `status`, `created_at`, `updated_at`) VALUES
(17, '9', 'Bathrooms,Bedrooms,CCTV Security', 'Kisumu Towers', 'kisumu towers', 'PC004', 'rent', '4000', '5000', 'uploads/property/thumbmail/1837896365706450.jpg', 'Full 3BR house with large compound, ideal for families or small office setup.', '<p>This modern apartment features an open kitchen and dining area, three generous bedrooms, a separate study/office space, and plenty of storage. The high-floor location offers panoramic views and plenty of natural light throughout.</p>', '2', '2', '2', '2', NULL, '456ft', NULL, 'kisumu ndogo', 'Kisumu', 'Kisumu', '029303', 'kisumu', '-0.091702', '34.767956', NULL, NULL, '11', '1', '2023-09-27 10:51:37', '2025-07-17 09:16:01'),
(24, '8', 'Swimming Pool,CCTV Security', 'Blue Ink Valleys', 'blue ink valleys', 'PC005', 'buy', '80', '120', 'uploads/property/thumbmail/1837899180716636.jpg', 'This upscale apartment features three bedrooms, two full bathrooms, a balcony with city views, and a modern open-concept kitchen', '<p><span style=\"color: rgb(0, 0, 0); font-size: 12pt;\">This modern apartment features an open kitchen and dining area, three generous bedrooms, a separate study/office space, and plenty of storage. The high-floor location offers panoramic views and plenty of natural light throughout.</span></p>', '4', '3', '8', '2', NULL, '346', 'https://www.youtube.com/watch?v=5HnLhqvJO6Y&list=PLoBGtBK7uqyUIUVGD_cOAmVCprfn5LMJ2&index=2', '29010_00625', 'Nairobi', '0', '29010', 'Westlands', '-1.289100', '31.289100', '1', NULL, '5', '1', '2023-09-30 06:34:03', '2025-07-17 10:03:36'),
(25, '6', 'Bathrooms,Bedrooms', 'Lavington Heights', 'lavington heights', 'PC006', 'rent', '1000', '20', 'uploads/property/thumbmail/1837849026803737.jpg', 'Every villa in our collection is thoughtfully chosen to ensure the highest standards of quality, privacy, and beauty.', '<p data-start=\"1680\" data-end=\"1936\">Choose from a wide array of stunning properties&mdash;perfect for family holidays, romantic retreats, or special events. Whether you seek beachfront bliss or a quiet hilltop escape, our villas offer the space and luxury to make your trip exceptional.</p>', '3', '3', '8', '2', NULL, '89', 'https://www.youtube.com/embed/rwx8t1qC0oE?si=Fb7Jxl1MuZIfmuW1', '5678', 'Nairobi', 'Nairobi', '890', 'Westlands', '1.4577', '36.9785', '1', NULL, '11', '1', '2023-10-04 12:33:08', '2025-07-16 20:43:34'),
(27, '6', 'Bathrooms,Bedrooms,CCTV Security', 'Olive Towers', 'olive towers', 'PC008', 'rent', '4000', '12000', 'uploads/property/thumbmail/1837896459925108.jpg', 'Find the perfect balance of barefoot relaxation and refined sophistication in your dream villa.', '<p>Where timeless charm meets modern luxury&mdash;discover a private villa experience like no other. Artisan finishes, breezy verandas, and contemporary amenities come together to create a setting that is both elegant and inviting. Escape ordinary travel and live beautifully, even if only for a while.</p>', '3', '3', '8', '2', NULL, '89', 'https://www.youtube.com/watch?v=5HnLhqvJO6Y&list=PLoBGtBK7uqyUIUVGD_cOAmVCprfn5LMJ2&index=2', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '-1.289100', '31.289100', '1', NULL, '11', '1', '2023-10-04 12:46:46', '2025-07-17 09:17:30'),
(35, '6', 'Bathrooms,Swimming Pool,Bedrooms,CCTV Security', 'Pine Creek Villas', 'pine creek villas', 'PC011', 'rent', '4000', '67000', 'uploads/property/thumbmail/1778915367222341.jpg', 'Soak up the sun in a luxurious setting where every detail speaks of comfort, style, and exclusivity.', '<p>Where timeless charm meets modern luxury&mdash;discover a private villa experience like no other. Artisan finishes, breezy verandas, and contemporary amenities come together to create a setting that is both elegant and inviting. Escape ordinary travel and live beautifully, even if only for a whi</p>', '2', '2', '2', '2', NULL, '89', 'https://www.youtube.com/embed/LVcNFQsn2tE?si=0vcwWs_eQ6-eJPtw', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '1.4577', '36.9785', '1', NULL, '11', '1', '2023-10-05 08:38:17', '2025-07-16 20:11:00'),
(38, '7', 'Bathrooms,Bedrooms', 'houseone', 'houseone', 'PC014', 'rent', '4000', '30000', 'uploads/property/thumbmail/1837846841479262.jpg', 'Neat 2BR apartment ideal for professionals or students, close to CBD.', '<p>This affordable 2-bedroom unit offers a spacious living area, updated kitchen, tiled bathroom, and large windows for natural light. Perfectly located within walking distance to universities, supermarkets, and public transport hubs.</p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', 'Mama Ngina', 'Laikipia', 'Laikipia', '90200', 'Nyali', '-1.289100', '-1.289100', '1', NULL, '5', '1', '2023-10-17 04:38:21', '2025-07-16 20:08:50'),
(39, '16', 'Swimming Pool,Bedrooms,CCTV Security', 'olivepark', 'olivepark', 'PC015', 'rent', '4000', '30000', 'uploads/property/thumbmail/1837899547484425.jpg', 'Full office floor with partitioned suites, boardroom, and reception desk.', '<p>This full-floor office space spans over 2,000 sq ft and includes individual offices, a central reception, a conference room, and private restrooms. Suitable for established firms looking to grow, with access to elevator, backup power, and secure parking.</p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', 'Mama Ngina', 'Kitui', 'Mama Ngina', '90200', 'Muranga South', '-1.289100', '-1.289100', NULL, '1', '5', '1', '2023-10-17 04:38:28', '2025-07-17 10:06:34'),
(40, '9', 'Bathrooms,Bedrooms', 'Malibu Towers', 'malibu towers', 'PC016', 'rent', '4000', '30000', 'uploads/property/thumbmail/1837848788067411.jpg', 'Three-level 3BR townhouse with garage, balcony, and play area.', '<p>Designed for modern families, this townhouse features three well-sized bedrooms, a fitted kitchen, garage parking, and private balconies. Located in a family-oriented neighborhood with a communal garden, kids&rsquo; play area, and shops within walking distance.</p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '3', 'Nyeri', 'Kutus', '3', 'Kisumu', '-1.289100', '-1.289100', NULL, NULL, '5', '1', '2023-10-17 04:38:34', '2025-07-16 20:45:48'),
(41, '7', 'Bathrooms,Bedrooms', 'Purple Arcade', 'purple arcade', 'PC017', 'rent', '4000', '30000', 'uploads/property/thumbmail/1837846795869272.jpg', 'Fully furnished 1BR unit with cleaning, Wi-Fi, and utilities included.', '<p>Enjoy hassle-free living in this serviced apartment with weekly housekeeping, unlimited Wi-Fi, and a fully equipped kitchen. Ideal for professionals on short-term assignments, with flexible leases and a central location close to the business district.</p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '3', 'Mombasa', 'South Coast', '3', 'Nyali', '-1.289100', '-1.289100', NULL, NULL, '5', '1', '2023-10-17 04:38:44', '2025-07-16 20:38:14'),
(42, '9', 'Bathrooms,Bedrooms', 'Valley Arcade', 'valley arcade', 'PC018', 'rent', '4000', '30000', 'uploads/property/thumbmail/1837846755131110.jpeg', 'Modern 2BR unit in gated complex with parking and pool access.', '<p>Perfect for small families or professionals, this 2-bedroom apartment includes built-in wardrobes, a spacious lounge, modern kitchen, and access to a shared pool. Located in a secure compound with on-site security and landscaped grounds.</p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Serene', '-1.289100', '-1.289100', NULL, '1', '5', '1', '2023-10-17 04:38:54', '2025-07-16 20:07:28'),
(43, '8', 'Bathrooms,Swimming Pool,Bedrooms', 'Marquis VIllas', 'marquis villas', 'PC019', 'rent', '200', '500', 'uploads/property/thumbmail/1837846739762665.jpg', 'Spacious 3BR apartment with ensuite master and city skyline views.', '<p>This upscale apartment features three bedrooms, two full bathrooms, a balcony with city views, and a modern open-concept kitchen. Located on the fringe of the city center, with easy access to offices, restaurants, and public transpor</p>', '2', '2', '2', '2', NULL, '32', 'https://www.youtube.coCentralm/embed/LVcNFQsn2tE?si=0vcwWs_eQ6-eJPtw', '29010_00625', 'Kirinyaga', 'Kutus', '29010', 'central', '1.289100', '31.289100', NULL, NULL, '7', '1', '2023-10-17 04:41:22', '2025-07-16 20:37:52'),
(44, '8', 'Swimming Pool,Bedrooms,CCTV Security', 'Serene Heights', 'serene heights', 'PC020', 'buy', '4000', '5000', 'uploads/property/thumbmail/1837848594173592.jpg', 'Bright 2BR bungalow with private garden and driveway in a serene estate.', '<p>This delightful 2-bedroom standalone home offers tiled floors, a spacious lounge, updated kitchen, and a front porch ideal for relaxing evenings. The enclosed garden is great for children or pets, and the location ensures quiet, suburban charm.</p>', '3', '3', '3', '3', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Site', '1.289100', '31.289100', NULL, NULL, '7', '1', '2023-10-17 04:43:48', '2025-07-16 20:37:11'),
(45, '9', 'parking,Swimming Pool', 'Orange Residency', 'orange residency', 'PC021', 'rent', '4000', '34000', 'uploads/property/thumbmail/1837846226411384.png', 'Elegant 3BR duplex with two balconies, backyard, and 24/7 security.', '<p>Located in a secure gated estate, this duplex offers three bedrooms (master ensuite), a modern kitchen, large living and dining areas, and both front and rear balconies. Enjoy peace of mind with round-the-clock security and the comfort of a family-friendly neighborhood.</p>', '3', '3', '3', '3', NULL, '112', 'https://www.youtube.com/embed/LVcNFQsn2tE?si=0vcwWs_eQ6-eJPtw', '29010_00625', 'Machakos', 'Machakos', '29010', 'Karen', '-1.289100', '31.289100', '1', NULL, '7', '1', '2023-10-17 04:47:00', '2025-07-16 19:59:24'),
(46, '8', 'Swimming Pool,Bedrooms', 'Lily Green Ends', 'lily green ends', 'PC022', 'rent', '4000', '5000', 'uploads/property/thumbmail/1837847237159376.jpg', 'Fully furnished private office with reception, Wi-Fi, and utilities included.', '<p>A secure and stylish private office ideal for 1&ndash;3 people, featuring desks, filing cabinets, shared reception services, and complimentary utilities. Located in a secure commercial block with ample parking and easy access to banks, cafes, and government offices.</p>', '3', '3', '3', '3', NULL, '323', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Karen', '1.289100', '31.289100', '1', NULL, '7', '1', '2023-10-17 04:53:46', '2025-07-16 20:15:08'),
(47, '6', 'Bathrooms,Swimming Pool', 'Green Garden', 'green garden', 'PC023', 'buy', '4000', '2400', 'uploads/property/thumbmail/1837846272993783.jpg', 'Fully furnished private office with reception, Wi-Fi, and utilities included.', '<p>This open-plan shared workspace includes hot desks, high-speed internet, a boardroom, and a shared kitchenette. Ideal for freelancers, remote teams, or small businesses needing a flexible and professional working environment in a convenient location.</p>', '3', '3', '3', '3', NULL, '346', 'https://www.youtube.com/watch?v=5HnLhqvJO6Y&list=PLoBGtBK7uqyUIUVGD_cOAmVCprfn5LMJ2&index=2', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '-1.289100', '3-1.289100', '1', NULL, '12', '1', '2023-10-17 12:34:26', '2025-07-16 19:59:48'),
(48, '7', 'Swimming Pool', 'Ober Close Apartments', 'ober close apartments', 'PC024', 'rent', '4000', '5000', 'uploads/property/thumbmail/1837847257326278.jpg', 'Spacious 3BR bungalow with garden, carport, and all-ensuite layout in a quiet suburb.', '<p data-start=\"917\" data-end=\"1213\">This modern, ground-floor bungalow offers a comfortable and secure family home with three large ensuite bedrooms, a sleek open-plan kitchen, dining area, and a private yard. Located in a quiet residential neighborhood with easy access to schools, shopping centers, and transport routes.</p>\r\n<p><span style=\"color: rgb(255, 255, 255);\">o &nbsp; &nbsp; &nbsp;&nbsp;</span></p>', '2', '2', '2', '6', NULL, '32', 'https://www.youtube.com/watch?v=hxZU1QslmsI&ab_channel=AfricanRealEstate', '29010_00625', 'Nairobi', '6', '29010', 'Mombasa', NULL, NULL, '1', NULL, '12', '1', '2023-10-19 05:00:01', '2025-07-16 20:16:15'),
(49, '6', 'Swimming Pool,CCTV Security', 'Giraffe Apartments', 'giraffe apartments', 'PC025', 'rent', '4000', '5000', 'uploads/property/thumbmail/1837847477077730.jpeg', 'High-rise office with 4 private rooms, reception area, and panoramic city views.', '<p>&nbsp;Located in the heart of the Central Business District, this fully serviced office suite offers four private rooms, a reception lounge, meeting area, and floor-to-ceiling windows with stunning skyline views. Ideal for law firms, startups, or consultants seeking prestige and convenience in a prime location.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '29010_00625', 'Nairobi', '6', '29010', NULL, NULL, NULL, '1', NULL, '5', '1', '2023-10-19 05:01:38', '2025-07-16 20:18:56'),
(50, '6', 'Bedrooms,CCTV Security', 'Leopards Villas', 'leopards villas', 'PC026', 'rent', '230000', '250000', 'uploads/property/thumbmail/1837847578473809.jpg', 'High-rise office with 4 private rooms, reception area, and panoramic city views.', '<p>&nbsp;Located in the heart of the Central Business District, this fully serviced office suite offers four private rooms, a reception lounge, meeting area, and floor-to-ceiling windows with stunning skyline views. Ideal for law firms, startups, or consultants seeking prestige and convenience in a prime location.</p>', '2', '2', '8', NULL, NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Westlands', '-1.289100', '31.289100', NULL, '1', '11', '1', '2023-10-19 05:28:20', '2025-07-16 20:22:08'),
(51, '6', 'parking,Swimming Pool,CCTV Security', 'Olive Green Villas', 'olive green villas', 'PC027', 'rent', '45688', '3457869', 'uploads/property/thumbmail/1837847778924229.jpg', 'Quaint country-style cottage with private garden and scenic views, ideal for peaceful getaways.', '<p>Escape to the countryside in this beautifully restored 1-bedroom farmhouse cottage. Enjoy a full kitchen, cozy living room, private patio, and garden surrounded by fields and rolling hills. Great for couples or writers looking for inspiration and solitude, yet still within driving distance to town.</p>', '2', '2', '2', '2', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Westlands', '1.289100', '31.289100', '1', NULL, '10', '1', '2023-10-19 05:30:26', '2025-07-16 20:23:44'),
(52, '6', 'parking,Swimming Pool,CCTV Security', 'Pride Flame Residency', 'pride flame residency', 'PC028', 'rent', '45688', '3457869', 'uploads/property/thumbmail/1837847102716771.jpg', 'Bright and modern 2-bedroom condo overlooking a scenic marina with luxury amenities.', '<p>This waterfront condo boasts two stylish bedrooms, two bathrooms, a modern kitchen, and a private balcony with serene views of the marina. Guests have access to a shared pool, fitness center, and boardwalk trails. Walk to waterfront dining and local boutiques, or simply relax and enjoy the view.</p>', '2', '2', '2', '2', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Westlands', '1.289100', '31.289100', '1', NULL, '10', '1', '2023-10-19 05:30:30', '2025-07-16 20:12:59'),
(53, '6', 'Bathrooms,Swimming Pool,Bedrooms,CCTV Security', 'Marina Bay', 'marina bay', 'PC029', 'rent', '4000', '67000', 'uploads/property/thumbmail/1837846105746615.jpg', 'Sleek industrial loft in a vibrant arts district, ideal for creatives and digital nomads.', '<p data-start=\"2976\" data-end=\"3278\">Experience contemporary living in this open-concept loft featuring exposed brick walls, polished concrete floors, tall ceilings, and eclectic decor. Located in a cultural hotspot surrounded by cafes, galleries, and street art, this loft is ideal for those who crave inspiration and city buzz.</p>', '3', '3', '3', '3', NULL, '112', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Bamburi', '-1.289100', NULL, '1', NULL, '11', '1', '2023-10-19 05:32:30', '2025-07-16 19:57:08'),
(54, '6', 'Bathrooms', 'Green Apartments', 'green apartments', 'PC030', 'buy', '4000', '5000', 'uploads/property/thumbmail/1837844559118281.jpg', 'Spacious 4BR house with a fenced yard in a quiet, family-oriented neighborhood.', '<p>This welcoming family home features four comfortable bedrooms, two bathrooms, a full kitchen, and a secure backyard with a patio for play or entertaining. Located in a safe and quiet suburb with easy access to schools, parks, grocery stores, and highways, it&rsquo;s perfect for long-term stays or relocation needs.</p>', '2', '2', '2', '2', NULL, '346', 'https://www.youtube.com/watch?v=hxZU1QslmsI&ab_channel=AfricanRealEstate', '29010_00625', 'Nairobi', '6', '29010', 'Karen', '1.4577', '31.289100', '1', NULL, '7', '1', '2023-10-19 05:34:11', '2025-07-16 19:32:33'),
(55, '8', 'Bathrooms,Swimming Pool,Bedrooms', 'Purple Apartments', 'purple apartments', 'PC031', 'rent', '4000', '100000', 'uploads/property/thumbmail/1837844397635290.jpg', 'High-end 3-bedroom penthouse with rooftop terrace and panoramic views of the city skyline', '<p data-start=\"1983\" data-end=\"2340\">Indulge in luxury in this sophisticated 3-bedroom penthouse, offering expansive living space, a gourmet kitchen, spa-style bathrooms, and sweeping city views from a private rooftop terrace. Ideal for business travelers or upscale getaways, this space combines modern design with top-tier amenities, including concierge services and secure parking.</p>', '4', '4', '4', '4', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '8', '29010', 'Westlands', '1.4577° S', '31.289100', '1', NULL, '11', '1', '2023-10-19 05:36:10', '2025-07-16 19:29:59'),
(56, '6', 'parking,Bathrooms,Swimming Pool,Intercom', 'Red Apartments', 'red apartments', 'PC032', 'buy', '4000', '56665', 'uploads/property/thumbmail/1837845974510066.jpg', 'Stylish and compact studio in the heart of downtown with skyline views, perfect for solo travelers or couples.', '<p>This modern, light-filled studio apartment is located in the bustling city center, offering sweeping skyline views from a private balcony. The unit includes a fully equipped kitchenette, smart TV, fast Wi-Fi, and secure access. Ideal for travelers looking for comfort, convenience, and walkability to cafes, offices, and nightlife.</p>', '3', '3', '3', '3', NULL, '235', NULL, '29010_00625', 'Nairobi', '6', '29010', NULL, '-1.289100', '31.289100', '1', NULL, '5', '1', '2023-10-19 05:38:02', '2025-07-16 19:55:03'),
(57, '6', 'parking,Bedrooms,CCTV Security', 'Red Flats', 'red flats', 'PC033', 'rent', '4000', '3455', 'uploads/property/thumbmail/1837844579049919.jpg', 'Modern studio in city center with skyline views', '<p>Enjoy the perfect urban lifestyle in this stylish studio apartment located in the heart of downtown. Features include a fully equipped kitchenette, high-speed Wi-Fi, and panoramic city views from your private balcony. Walk to cafes, shops, and public transport.</p>', '3', '4', '4', '4', NULL, '346', 'https://www.youtube.com/watch?v=hxZU1QslmsI&ab_channel=AfricanRealEstate', '29010_00625', 'Nairobi', '6', '29010', 'Karen', '-1.289100', '31.289100', '1', NULL, '5', '1', '2023-10-19 05:42:19', '2025-07-16 19:32:52'),
(58, '2', 'Bathrooms', 'Dala city', 'dala city', 'PC034', 'rent', '100000', '200000', 'uploads/property/thumbmail/1837842108279043.jpg', 'Welcome to Modern House, a beautiful 9-bedroom villa located on the magnificent islands of the Bahamas.', NULL, '9', '4', '4', '4', NULL, '346ft', 'https://www.youtube.com/watch?v=3ikByOd4pl4&t=661s&pp=ygUKbWFuc2EgcGx1cw%3D%3D', '22-90422', 'Kisumu', '9', '903400', 'Kisumu Villas', '−0.091702', '34.767956', NULL, '1', '11', '1', '2025-07-16 18:53:36', NULL),
(59, '3', 'Bathrooms,Swimming Pool,CCTV Security', 'Purple city', 'purple city', 'PC035', 'buy', '15000000', '18000000', 'uploads/property/thumbmail/1837842450557193.jpg', 'Mombasa’s Nyali area is one of the most sought-after coastal destinations in Kenya. Best known for its pristine white sandy beaches, warm turquoise waters of the Indian Ocean, and a blend of modern luxury and Swahili charm, what’s not to love?', NULL, '4', '5', '5', '5', NULL, '679 ft', 'https://www.youtube.com/watch?v=3ikByOd4pl4&t=661s&ab_channel=MansaPlus', '90190', 'Mombasa', '7', '456', 'Nyali', '–4.04653', '39.70352', NULL, '1', '11', '1', '2025-07-16 18:59:03', NULL),
(60, '2', 'Bathrooms,Swimming Pool,CCTV Security', 'Lucky Summer villas', 'lucky summer villas', 'PC036', 'buy', '23000000', '25000000', 'uploads/property/thumbmail/1837843130535270.webp', 'Discover a world where ocean views and refined comfort come together in perfect harmony. Our exclusive villas are designed for travelers who value privacy, luxury, and personalized experiences. From sun-kissed mornings to star-lit evenings, every moment is unforgettable.', NULL, '5', '5', '5', '5', NULL, '567ft', 'https://www.youtube.com/watch?v=GRsYCX7YLO4&ab_channel=MansaPlus', '9033', 'nyali', '7', '45', 'nyali', '4.0507', '39.6968', '1', NULL, '10', '1', '2025-07-16 19:09:51', NULL),
(61, '7', 'Bathrooms', 'Nyali Villas', 'nyali villas', 'PC037', 'buy', '150000000', '20000000', 'uploads/property/thumbmail/1837843512463003.jpg', 'From romantic getaways to family reunions, we offer beautifully appointed villas with premium amenities and bespoke services. Our experienced team works closely with you to ensure every detail from arrival to departure is flawless.', NULL, '5', '4', '4', '4', NULL, '786ft', 'https://www.youtube.com/watch?v=4n4LNkcewQs&pp=ygUKbWFuc2EgcGx1cw%3D%3D', '2003', 'Nyali', '7', '020-02', 'Nyali', '-4.054280', '39.690430', '1', NULL, '10', '1', '2025-07-16 19:15:55', '2025-07-17 09:59:35'),
(62, '2', 'Swimming Pool,Bedrooms,CCTV Security', 'Blue Apartments', 'blue apartments', 'PC038', 'rent', '30000', '350000', 'uploads/property/thumbmail/1837843841902477.jpg', 'Our handpicked villas offer more than luxury—they offer experiences. From curated excursions to in-house chefs and spa treatments, we tailor your stay to your needs. Whether for a honeymoon or a milestone celebration, we ensure everything is taken care of.', NULL, '4', '4', '4', '4', NULL, '34', 'https://www.youtube.com/watch?v=4n4LNkcewQs&ab_channel=MansaPlus', '902002', 'Kitui', '8', '6', 'Site', '-1.365010', '38.011570', '1', NULL, '10', '1', '2025-07-16 19:21:09', NULL),
(63, '6', 'Bathrooms,Swimming Pool,Bedrooms', 'Escada Studio', 'escada studio', 'PC039', 'rent', '50000', '60000', 'uploads/property/thumbmail/1837845697732639.jpg', 'Elegant Accommodations: Escada Studio & 2-bedroom offers a stylish apartment in Nairobi. Guests enjoy a rooftop swimming pool, fitness center, sun terrace, and free WiFi.', NULL, '3', '2', '2', '2', NULL, '345ft', 'https://www.youtube.com/watch?v=4n4LNkcewQs&pp=ygUKbWFuc2EgcGx1cw%3D%3D', '02003', 'Westlands', '6', '789', 'Westland\'s', '18.270470', '-78.364113', NULL, NULL, '11', '1', '2025-07-16 19:50:39', '2025-07-16 19:51:01'),
(64, '3', 'Swimming Pool,Bedrooms,CCTV Security', 'Riara One Residency,', 'riara one residency,', 'PC040', 'rent', '60000', '70000', 'uploads/property/thumbmail/1837845952813931.jpg', 'Spacious Accommodations: Riara One Residency in Nairobi offers a spacious apartment with one bedroom and one bathroom. The property features a terrace, balcony, and a fully equipped kitchen.', NULL, '2', '3', '3', '3', NULL, '2455', 'https://www.youtube.com/watch?v=4n4LNkcewQs&pp=ygUKbWFuc2EgcGx1cw%3D%3D', '902002', 'Kitui', '8', '66', 'Kwa Ngindu', '-4.054280', '39.690430', NULL, '1', '12', '1', '2025-07-16 19:54:42', NULL),
(65, '2', 'Bathrooms,Bedrooms', 'Comrade Towers', 'comrade towers', 'PC041', 'rent', '2500', '3500', 'uploads/property/thumbmail/1846824282888476.jpg', 'Spacious and modern 1-bedroom flat in Comrade Flats One bedroom thoughtfully designed open-plan living, quality finishes, secure access. Ideal for young professionals or investors in a convenient location.', NULL, '1', '1', '0', '0', NULL, '233', NULL, NULL, 'Narobi', '6', NULL, 'Nairobi', '1.2921° S,', '36.8219° E', '1', NULL, '12', '1', '2025-10-23 22:21:25', NULL),
(66, '17', 'parking,Bedrooms,CCTV Security', 'Mutanu Apartments', 'mutanu apartments', 'PC042', 'rent', '3500', '6500', 'uploads/property/thumbmail/1846825623995035.jpg', 'Stylish 1-bedroom apartments at Comrade Flats One Nedroo — modern finishes, open-plan design, and unbeatable city access.', NULL, '1', '1', '0', '0', NULL, '256', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'kut234', 'Machakos', NULL, '123456', 'Machakos', '-1.518430', '37.266899', '1', NULL, '5', '1', '2025-10-23 22:35:56', '2025-10-23 22:43:57'),
(67, '3', 'parking,Bedrooms,CCTV Security', 'Scott Apartments', 'scott apartments', 'PC043', 'rent', '3500', '6500', 'uploads/property/thumbmail/1846825463597746.jpg', 'Stylish 1-bedroom apartments at Comrade Flats One Nedroo — modern finishes, open-plan design, and unbeatable city access.', NULL, '1', '1', '0', '0', NULL, '256', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'kut234', 'Machakos', '17', '123456', 'Machakos', '-1.518430', '37.266899', '1', NULL, '5', '1', '2025-10-23 22:40:11', NULL),
(68, '5', 'Bathrooms,Intercom', 'Baraka Flats', 'baraka flats', 'PC044', 'rent', '4000', '10000', 'uploads/property/thumbmail/1846826447129085.jpg', 'Comrade Flats One Nedroo offers calm, comfortable living within easy reach of the city — perfect for those who value peace and accessibility.', NULL, '1', '1', '0', '0', NULL, '234', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Machakos', 'Machakos', '17', '90100', 'Machakos', '-1.518430', '37.266899', '1', NULL, '12', '1', '2025-10-23 22:55:50', NULL),
(69, '17', 'Bathrooms,Intercom', 'Henry', 'henry', 'PC045', 'rent', '4000', '10000', 'uploads/property/thumbmail/1846826499749703.jpg', 'Comrade Flats One Nedroo offers calm, comfortable living within easy reach of the city — perfect for those who value peace and accessibility.', NULL, '1', '1', '0', '0', NULL, '234', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Machakos', 'Machakos', NULL, '90100', 'Machakos', '-1.518430', '37.266899', '1', NULL, '12', '1', '2025-10-23 22:55:53', '2025-10-23 22:57:06'),
(70, '2', 'parking,Swimming Pool,CCTV Security', 'Red blue', 'red blue', 'PC046', 'rent', '5000', '6500', 'uploads/property/thumbmail/1846829040295367.jpg', 'Secure your next smart investment at Comrade Flats One Nedroo — quality units with strong rental appeal and long-term value.', NULL, '2', '1', '1', '1', NULL, '256', 'https://www.youtube.com/shorts/rKNQMWiMEM4', NULL, NULL, NULL, NULL, 'Machakos', '-1.518430', '37.266899', '1', NULL, '10', '1', '2025-10-23 23:37:03', NULL),
(72, '4', 'Bathrooms,Bedrooms,CCTV Security', 'Blue Valley', 'blue valley', 'PC048', 'buy', '6500', '7500', 'uploads/property/thumbmail/1846829482356543.jpeg', 'This cozy studio flat blends modern design with functionality, offering an ideal space for singles or young professionals. With an open layout, natural light, and a private balcony, it delivers comfort and convenience in one compact package.', NULL, '2', '2', '2', '2', NULL, '2562345', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Kisumu', 'Kisumu', '9', '90100', 'Machakos', '-1.518430', '37.266899', NULL, '1', '5', '1', '2025-10-23 23:44:04', NULL),
(73, '5', 'parking,Bathrooms', 'Blue Green Apartments', 'blue green apartments', 'PC049', 'buy', '5500', '5800', 'uploads/property/thumbmail/1846829754203518.webp', 'An elegant 3BHK apartment with mesmerizing sea views, premium finishes, and world-class facilities. Experience coastal luxury with modern design, open spaces, and a lifestyle defined by serenity and sophistication.', NULL, '2', '1', '1', '1', NULL, '233', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Mombasa', 'Mombasa', '7', '90100', 'Mombasa', '-1.518430', '37.266899', NULL, '1', '10', '1', '2025-10-23 23:48:23', NULL),
(74, '3', 'Bathrooms,Swimming Pool', 'Red Purple', 'red purple', 'PC050', 'buy', '4800', '5500', 'uploads/property/thumbmail/1846829947344882.webp', 'A spacious, bright 2BHK apartment designed for families who value comfort and community. Located near top schools and parks, it offers a secure, family-friendly environment with all essential amenities.', NULL, '2', '1', '1', '1', NULL, '23456', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Thika', 'Thika', '15', '90100', 'Thika', NULL, '36.8219° E', NULL, '1', NULL, '1', '2025-10-23 23:51:27', NULL),
(75, '3', 'parking,Swimming Pool,Bedrooms', 'Red and Blue Apartments', 'red and blue apartments', 'PC051', 'buy', '5000', '5500', 'uploads/property/thumbmail/1846830128068552.webp', 'A modern 1BHK apartment offering style, comfort, and affordability. Ideal for first-time buyers or professionals seeking a well-connected home with all essential conveniences nearby.', NULL, '1', '`1', '0', '0', NULL, '233', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Machakos', 'Machakos', '17', '90100', 'Machakos', '-1.518430', '37.266899', NULL, '1', '7', '1', '2025-10-23 23:54:20', NULL),
(76, '5', 'parking,Swimming Pool,Bedrooms', 'Pink and Red Apartments', 'pink and red apartments', 'PC052', 'buy', '5600', '8900', 'uploads/property/thumbmail/1846830283757444.webp', 'A charming 2BHK apartment with tranquil garden views and abundant natural light. Perfect for those who appreciate peaceful surroundings and modern comforts.', NULL, '1', '1', '1', '1', NULL, '23456', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Muranga', 'Muranga', '16', '90100', 'Muranga', '-1.518430', '37.266899', NULL, '1', '12', '1', '2025-10-23 23:56:48', NULL),
(77, '2', 'Bathrooms,Swimming Pool,Bedrooms', 'Divine Properties', 'divine properties', 'PC053', 'buy', '7800', '8500', 'uploads/property/thumbmail/1846830454112441.webp', 'A stunning 3BHK penthouse with a private rooftop terrace and breathtaking skyline views. Designed for luxury, it offers spacious interiors, elegant finishes, and exclusive amenities.', NULL, '2', '1', '1', '1', NULL, '23434', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Machakos', 'Machakos', '17', '90100', 'Machakos', '-1.518430', '37.266899', NULL, '1', '11', '1', '2025-10-23 23:59:31', NULL),
(78, '3', 'parking,Swimming Pool', 'Zed Apartments', 'zed apartments', 'PC054', 'buy', '8600', '10000', 'uploads/property/thumbmail/1846830602436246.jpg', 'A well-designed 1BHK flat located just steps from metro stations and office hubs. Perfect for professionals seeking a convenient and modern city home.', NULL, '2', '1', '1', '1', NULL, '256', 'https://www.youtube.com/shorts/rKNQMWiMEM4', 'Machakos', 'Machakos', '17', '90100', 'Machakos', '-1.518430', '37.266899', NULL, '1', '10', '1', '2025-10-24 00:01:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_messages`
--

CREATE TABLE `property_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `agent_id` varchar(255) DEFAULT NULL,
  `property_id` varchar(255) DEFAULT NULL,
  `msg_name` varchar(255) DEFAULT NULL,
  `msg_email` varchar(255) DEFAULT NULL,
  `msg_phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_messages`
--

INSERT INTO `property_messages` (`id`, `user_id`, `agent_id`, `property_id`, `msg_name`, `msg_email`, `msg_phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 'property_id', 'paul mulwa', 'user@gmail.com', '0705069145', 'hey', '2023-10-14 09:00:15', NULL),
(2, 11, NULL, NULL, 'agent10', 'agent10@gmail.com', '0705069145', 'Hey Daddy', '2023-10-16 08:32:48', NULL),
(3, 11, NULL, NULL, 'agent10', 'agent10@gmail.com', '0705069145', 'okay', '2023-11-01 12:31:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `type_name`, `type_icon`, `created_at`, `updated_at`) VALUES
(1, 'Office', 'icon-2', NULL, '2023-09-22 02:14:26'),
(2, 'Apartment', 'icon-1', NULL, '2023-09-22 02:14:54'),
(3, 'Flats', 'icon-4', NULL, '2023-10-17 05:47:42'),
(4, 'Towers', 'icon-3', NULL, '2023-10-17 05:47:47'),
(5, 'Highrise', 'icon-6', NULL, '2023-09-22 02:15:40'),
(6, 'Bungalow', 'icon-7', NULL, '2023-09-22 02:15:40'),
(7, 'Factory', 'Factory', NULL, NULL),
(8, 'Warehouse', 'Warehouse', NULL, NULL),
(9, 'icon-8', 'icon-8', NULL, NULL),
(10, 'Land', 'Land', NULL, NULL),
(11, 'Supermarkert', 'Supermarkert', NULL, NULL),
(12, 'Industry', 'Industry', NULL, NULL),
(13, 'jhbjkbk', 'jhbjkbk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'web', '2023-09-12 07:20:48', '2023-09-12 07:20:48'),
(4, 'Superuser', 'web', '2023-09-12 07:21:00', '2023-09-12 07:21:00'),
(5, 'Agent', 'web', '2023-09-12 07:21:21', '2023-09-12 07:21:21'),
(15, 'test', 'web', '2023-10-29 04:57:18', '2023-10-29 04:57:18'),
(16, 'user', 'web', '2023-10-29 08:56:45', '2023-10-29 08:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(3, 3),
(3, 4),
(3, 5),
(4, 3),
(4, 4),
(4, 5),
(5, 3),
(5, 4),
(5, 5),
(6, 3),
(6, 4),
(6, 5),
(7, 3),
(7, 4),
(7, 5),
(8, 3),
(8, 4),
(8, 5),
(9, 3),
(9, 4),
(9, 5),
(10, 3),
(10, 4),
(10, 5),
(11, 3),
(11, 4),
(11, 5),
(12, 3),
(12, 4),
(12, 5),
(13, 3),
(13, 4),
(13, 5),
(14, 3),
(14, 4),
(14, 5),
(15, 3),
(15, 4),
(15, 5),
(16, 3),
(16, 4),
(16, 5),
(17, 3),
(17, 4),
(17, 5),
(18, 3),
(18, 4),
(18, 5),
(19, 3),
(19, 4),
(19, 5),
(20, 3),
(20, 4),
(20, 5),
(21, 3),
(21, 4),
(21, 5),
(22, 3),
(22, 4),
(22, 5),
(23, 3),
(23, 4),
(23, 5),
(24, 3),
(24, 4),
(24, 5),
(25, 3),
(25, 4),
(25, 5),
(26, 3),
(26, 4),
(26, 5),
(27, 3),
(27, 4),
(27, 5),
(28, 3),
(28, 4),
(28, 5),
(29, 3),
(29, 4),
(29, 5),
(30, 3),
(30, 4),
(30, 5),
(31, 3),
(31, 4),
(31, 5),
(32, 3),
(32, 4),
(32, 5),
(33, 3),
(33, 4),
(33, 5),
(34, 3),
(34, 4),
(34, 5),
(35, 3),
(35, 4),
(35, 5),
(36, 3),
(36, 4),
(36, 5),
(37, 3),
(37, 4),
(37, 5),
(38, 3),
(38, 4),
(38, 5),
(39, 3),
(39, 4),
(39, 5);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `agent_id` varchar(255) DEFAULT NULL,
  `tour_date` varchar(255) DEFAULT NULL,
  `tour_time` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `user_id`, `property_id`, `agent_id`, `tour_date`, `tour_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 39, '5', '10/11/2023', '9:00', 'i want to visit', '0', '2023-10-23 13:06:45', NULL),
(2, 4, 39, '5', '10/28/2023', NULL, 'jjjtt', '0', '2023-10-23 13:08:44', NULL),
(3, 4, 38, '5', '10/31/2023', '9:00', 'yours', '0', '2023-10-23 13:13:00', NULL),
(4, 4, 38, '5', '10/11/2023', '9:00', '555', '0', '2023-10-23 13:25:56', NULL),
(5, 4, 38, '5', '10/11/2023', '9:00', 'jttj', '0', '2023-10-23 13:27:24', NULL),
(6, 4, 38, '5', '10/11/2023', '9:00', 'hey', '0', '2023-10-23 13:29:56', NULL),
(7, 4, 35, '11', '10/31/2023', 'kk', 'yu', '1', '2023-10-23 13:34:05', '2023-10-25 01:46:34'),
(8, 4, 25, '11', '10/25/2023', '11:00Am', 'I want to visit', '0', '2023-10-24 05:05:34', '2023-10-24 10:03:54'),
(9, 4, 27, '11', '10/27/2023', '9:00', 'Twende tukawake', '0', '2023-10-24 05:15:56', '2023-10-25 00:43:31'),
(10, 11, 25, '11', '10/20/2023', '8:00am', 'hey', '1', '2023-10-24 11:15:58', '2023-10-25 01:14:42'),
(11, 11, 57, '5', '10/31/2023', NULL, 'Appointment', '0', '2023-10-24 11:17:31', NULL),
(12, 1, 61, '10', '07/18/2025', '12:00pm', 'ert', '0', '2025-07-17 14:55:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `header`, `text`, `created_at`, `updated_at`) VALUES
(2, 'icon-21', 'Personalised Services', 'Offer property management software or services for landlords and property managers to streamline rental property management.', NULL, NULL),
(3, 'icon-26', 'Property Valuation', 'Provide tools or services for property owners to estimate the current market value of their properties.', NULL, NULL),
(4, 'icon-1', 'Excellent Reputation', 'Allow property sellers to create detailed listings for their properties, including descriptions, photos, videos, and virtual tours', NULL, NULL),
(5, 'icon-26', 'Best Local Agents', 'Offer advanced search filters, such as location, property type, price range, and amenities, to help buyers find properties that match their criteria.', NULL, NULL),
(7, 'icon-21', 'Property Analytics:', 'Provide data and insights on real estate market trends, including price trends, rental yields, and neighborhood statistics.', NULL, NULL),
(8, 'icon-1', 'Property Management Tools:', 'Offer property management software or services for landlords and property managers to streamline rental property management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `support_phone` text DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `support_phone`, `company_address`, `email`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'uploads/logo/1780718953217085.png', '0705069145', 'Nairobi, Kenya', 'paulmulwa102@gmail.com', 'www.facebook.com', 'www.twitter.com', 'Keja Yangu.  2025 All rights Reserved', '2023-08-10 05:13:44', '2025-07-12 23:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailer` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `encryption` varchar(255) DEFAULT NULL,
  `from_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `mailer`, `host`, `post`, `username`, `password`, `encryption`, `from_address`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'sandbox.smtp.mailtrap.io', '2525', '7dc97525d08e5d', 'ce3fc51ae9c3f9', 'tls', 'paulmulwa101@gmail.com', '2023-08-10 05:13:44', '2023-10-24 08:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `state_image`, `created_at`, `updated_at`) VALUES
(6, 'Nairobi', 'uploads/state/1780006431392297.jpg', NULL, NULL),
(7, 'Mombasa', 'uploads/state/1780006464664554.jpg', NULL, NULL),
(8, 'Kitui', 'uploads/state/1780006487239624.jpg', NULL, NULL),
(9, 'Kisumu', 'uploads/state/1780006510017619.jpg', NULL, NULL),
(15, 'Thika', 'uploads/state/1780068483464324.jpg', NULL, NULL),
(16, 'Muranga', 'uploads/state/1780068504235860.webp', NULL, NULL),
(17, 'Machakos', 'uploads/state/1846824414625499.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `image`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Peeter Kamau', 'CEO, TINTECH', 'uploads/testimonials/1780255497077704.jpg', 'Keja Yangu helped me find the perfect rental property for my family. Their team took the time to understand our requirements and showed us several options that matched our criteria. They were patient, professional, and incredibly efficient', NULL, '2023-10-20 03:39:06'),
(2, 'paulmulwa', 'Admin', 'uploads/testimonials/1780255766769914.jpg', 'We were first-time homebuyers and were quite apprehensive about the whole process. Keja Yangu\'s team patiently guided us through every step, answering all our questions and concerns. They truly went above and beyond to ensure we found a home that met all our criteria', NULL, '2023-10-20 03:43:21'),
(5, 'Suusan Mwende Muli', 'CEO, fairlady', 'uploads/testimonials/1780255983694237.jpg', 'I have bought and sold several properties over the years, and working with Keja Yangu was by far the best experience I\'ve had with a real estate company. Their attention to detail, market knowledge, and negotiation skills are exceptional', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','agent','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `credit` varchar(255) DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `credit`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'paul mulwa', 'paulmulwa101@gmail.com', NULL, '$2y$10$/lrfhE5DSi5lKGO46frdaO1t/hDF/OH5M421vThCL9jYkNMweTUde', '202310231406images (1).jpg', '0705069145', '0', 'admin', 'active', '0', NULL, '2023-09-12 06:47:41', '2023-10-28 10:34:59'),
(3, 'paulmulwa102', 'paulmulwa102@gmail.com', NULL, '$2y$10$2IqDyEQbH5Y/Hnnu59Ynd.chqL1LXhwjPgq2lC6x/D65PPL4wIByW', NULL, NULL, NULL, 'user', 'active', '0', NULL, '2023-09-12 06:51:16', '2023-09-12 06:51:16'),
(4, 'user', 'user@gmail.com', NULL, '$2y$10$QT.0xMnKP8oFOP9Dcrg.j.Sxj0dyXBdwjq8Rjo8H11262qwykF/sO', '202310231408download.jpg', '+254705069145', '29010_00625', 'user', 'active', '0', NULL, '2023-09-12 06:52:15', '2023-10-23 11:08:05'),
(5, 'agent101', 'agent@gmail.com', NULL, '$2y$10$NDmTkYpFKHUXlGneO4Gepuhwlnfi7vT0X4AphJOtJSStlKKOHl5zW', '202312090713images (6).jpg', '0705069145', 'kisumu', 'agent', 'active', '0', NULL, '2023-09-12 06:54:05', '2025-10-23 16:54:06'),
(6, 'lambistic', 'lambistic@gmail.com', NULL, '$2y$10$unAlMCivjJtnJ8WCPMwJG.S3Avk.zxHYtlRFOV4GAsQm400Ir7SVa', NULL, NULL, NULL, 'user', 'active', '0', NULL, '2023-09-15 05:16:43', '2023-09-15 05:16:43'),
(7, 'Agent1', 'agent1@gmail.com', NULL, '$2y$10$VeEgSf3OMmF0MJ9Q8G3ojupNPkcXKnv1TUR/ebTCp3B3m/Q.LPcV6', '202310171145optimized_large_thumb_stage (1).jpg', '0705069145', 'Mama Ngina', 'agent', 'active', '0', NULL, NULL, '2025-10-23 16:54:03'),
(8, 'agent2', 'agent2@gmail.com', NULL, '$2y$10$xccf0cGSdQWH3XfQOrVY3eigfVvH4guW7eiwuR.hAz0UFCZi6/15q', '2023100404421778180057820424.png', '0705069145', 'Mama Ngina', 'agent', '', '0', NULL, NULL, '2023-11-28 07:10:48'),
(10, 'agentzero', 'agentzero@gmail.com', NULL, '$2y$10$24VfMgs9o9e3v.UgKzDLyeUsgQh1pxtgX0K.220jlbqCBSgHhuxK.', '202310171037preview.jpg', '0705069145', NULL, 'agent', 'active', '0', NULL, '2023-10-04 06:53:35', '2025-10-23 16:53:57'),
(11, 'agent10', 'agent10@gmail.com', NULL, '$2y$10$srnvrFxgtJMgzb01vUKSSOHih6YJ7.Hv9UZysgogT39Cl0sP/AT2W', '202312090710images (11).jpg', '0705069145', 'Nairobi', 'agent', 'active', '30', NULL, '2023-10-04 06:56:07', '2025-10-23 16:54:00'),
(12, 'Pride Inn Agency', 'newagent@gmail.com', NULL, '$2y$10$viemkCZxcZxfd.o5cI/Do.DZdgHqsxyzS8I/7WidydviF1tfQ2UBO', '202310171142demolitions_art.webp', '+254705069145', 'prideinn@admin.co.ke', 'agent', 'active', '0', NULL, '2023-10-06 02:33:53', '2025-10-23 16:54:01'),
(13, 'agent3', 'agent3@gmail.com', NULL, '$2y$10$5TF0etGWZwyTs3OPqx68tODbxTOspiSci9GCoFp59CkPj6PjJdY1.', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, NULL),
(15, 'newadmin', 'newadmin@gmail.com', NULL, '$2y$10$MzpmhAByLb/kovT1eSFUG.fZqojMNV8BzP6YbsjRYP5/xw906Y1gW', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, NULL),
(16, 'superuser', 'superuser@gmail.com', NULL, '$2y$10$L8iFd0T1J1cjdpp42Qtz3uTaNAAnrUe69S3SkXddfzikBgNds7oAS', '202310291148dove-clip-art-69.jpg', '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, '2023-10-29 08:48:33'),
(17, 'newsuperuser', 'newsuperuser@gmail.com', NULL, '$2y$10$URi3GvL3oxYPCgW3ivNBtuR5WGxq9rezx2/UA1PKjs4GHWdVIgBxC', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, NULL),
(18, 'agent40', 'agent40@gmail.com', NULL, '$2y$10$PT5lXJ5hhuvFKyskZDOUZORBQX.BsD1t5ZDbWpy325Ab.jHTTjyGi', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, '2023-10-29 02:36:00', '2023-10-29 02:36:00'),
(19, 'Clinton mbathi', 'tecshua@gmail.com', NULL, '$2y$10$VglnnoqqoM6XZSnYnx3kPu0VNiNUsm7zwuPM7xJr9v/XjphAnAlnO', NULL, '0714325899', 'kitui', 'admin', 'active', '0', NULL, '2023-11-02 11:35:35', '2023-11-02 11:35:35'),
(20, 'rafael', 'slimfitraf@gmail.com', NULL, '$2y$10$.B6PPQWtMYqUcoA.9mpHZ.51wSsFvh4x7H6vgxNSLUUFB9ymYIfaq', NULL, '+254797969099', 'kitui', 'admin', 'active', '0', NULL, '2023-11-28 12:21:15', '2023-11-28 12:21:15'),
(21, 'Sam Musyoka', 'msam98474@gmail.com', NULL, '$2y$10$eX49N7ha6qil0RaNczYvduzgaX/GfGX.SwGWeJv9Iaar0zr3ptWli', '20240529210320240508_025149.jpg', '0703474770', 'I&I.', 'user', 'active', '0', NULL, '2024-05-29 21:00:22', '2024-05-29 21:03:36'),
(22, 'admin', 'admin@gmail.com', NULL, '$2y$10$AWCXhps1dRlxL16SErr6uOKk7AtSzfKW2SrYU/z/NyqA5AkaWmEYG', NULL, NULL, NULL, 'user', 'active', '0', NULL, '2025-07-16 17:16:22', '2025-07-16 17:16:22'),
(23, 'chris', 'christophermaina001@gmail.com', NULL, '$2y$10$kpsYrQTt/wtEvi2OIXJ1wOxVq5lex.94nB8jtEHqoVUoZeN4EaikO', NULL, NULL, NULL, 'user', 'active', '0', NULL, '2025-09-26 20:23:39', '2025-09-26 20:23:39'),
(24, 'malume', 'malume@gmail.com', NULL, '$2y$10$WyhVloIUYR7ITqWEAfvBgOtFe16cDuSl1Qvm2cSLPhkK6tfq7rW3O', NULL, NULL, NULL, 'admin', 'active', '0', NULL, '2025-10-23 16:33:53', '2025-10-23 16:33:53'),
(25, 'henry', 'henrybaraka738@gmail.com', NULL, '$2y$10$VeJF0p6f9vLOTuoyjwQ5F.u7Ws9.M54VvdMrtmOZSpCo1oR3tqy8C', NULL, NULL, NULL, 'admin', 'active', '0', NULL, '2025-10-23 22:10:09', '2025-10-23 22:10:09'),
(26, 'happy', 'happy@gmail.com', NULL, '$2y$10$PvfF9yErvU.UDVy/O/31TO5KeXIWcWJpAQ8jsWfIqhjB05TwulldK', NULL, NULL, NULL, 'admin', 'active', '0', NULL, '2025-10-24 00:07:54', '2025-10-24 00:07:54'),
(27, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$10$ExlOdpP6Ja0yQpvW1eF9xejHVTBTmT02R3burl5B9ozvXawm/LDWu', NULL, NULL, NULL, 'admin', 'active', '0', NULL, '2025-10-24 00:09:04', '2025-10-24 00:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'user', 'user@gmail.com', '+254705069145', 'suhd', 'hello', '2023-11-03 13:32:21', NULL),
(7, 'user', 'user@gmail.com', '+254705069145', NULL, 'kitui kwanyesha', '2023-11-03 13:35:19', NULL),
(8, 'user', 'user@gmail.com', '+254705069145', NULL, 'shingapi wewe', '2023-11-03 13:35:38', NULL),
(9, 'user', 'user@gmail.com', '+254705069145', NULL, 'heysand', '2023-11-28 03:18:32', NULL),
(10, 'user', 'user@gmail.com', '+254705069145', NULL, 'noma', '2023-11-28 03:19:49', NULL),
(11, 'user', 'user@gmail.com', '+254705069145', NULL, 'kali sana', '2023-11-28 03:20:04', NULL),
(12, 'user', 'user@gmail.com', '+254705069145', NULL, 'niaje mzito', '2023-11-28 03:20:20', NULL),
(13, 'user', 'user@gmail.com', '+254705069145', NULL, 'test', '2023-11-28 03:20:30', NULL),
(14, 'admin', 'admin@gmail.com', NULL, 'dd', 'hey', '2025-07-16 17:17:55', NULL),
(15, 'admin', 'admin@gmail.com', NULL, NULL, 'ghet', '2025-07-18 00:29:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 4, 25, '2023-10-12 01:51:11', NULL),
(2, 4, 15, '2023-10-12 01:51:19', NULL),
(3, 4, 35, '2023-10-12 01:51:24', NULL),
(4, 1, 25, '2023-10-13 04:38:39', NULL),
(5, 1, 15, '2023-10-13 04:38:48', NULL),
(6, 1, 45, '2023-10-17 05:10:12', NULL),
(7, 22, 60, '2025-07-16 19:23:32', NULL),
(8, 22, 17, '2025-07-18 00:56:33', NULL),
(9, 23, 56, '2025-09-26 22:31:57', NULL),
(10, 23, 55, '2025-09-26 22:31:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compares`
--
ALTER TABLE `compares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courasels`
--
ALTER TABLE `courasels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_plans`
--
ALTER TABLE `package_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_messages`
--
ALTER TABLE `property_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `compares`
--
ALTER TABLE `compares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courasels`
--
ALTER TABLE `courasels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `package_plans`
--
ALTER TABLE `package_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `property_messages`
--
ALTER TABLE `property_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

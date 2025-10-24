-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2024 at 08:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
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
(1, 'Hi, I’m Paul Mulwa from Keja Yangu', 'uploads/images/1781668743336652.jpg', '2023', 'At Keja Yangu, we empower you with detailed property descriptions, high-quality images, and virtual tours, ensuring you make informed decisions. Explore neighborhoods, amenities, and floor plans at your convenience, narrowing down your choices to the perfect match for your needs.', 'Our advanced search algorithm ensures that users receive accurate and tailored results, saving them time and effort in their property search.', 'Each property listing is comprehensive, providing detailed information about the property.', '837', '523', '232', '324', 'r', '2023-08-10 05:13:44', '2023-11-04 18:02:01');

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
(5, 4, 15, '2023-10-14 06:38:50', NULL);

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
(29, 17, NULL, NULL, '2023-09-27 10:51:38', '2023-09-27 10:51:38'),
(30, 17, NULL, NULL, '2023-09-27 10:51:38', '2023-09-27 10:51:38'),
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
(111, 25, 'Airport', '45', '2023-10-10 02:17:30', '2023-10-10 02:17:30'),
(112, 25, 'Entertainment', '78', '2023-10-10 02:17:30', '2023-10-10 02:17:30'),
(113, 25, 'Railways', '12', '2023-10-10 02:17:32', '2023-10-10 02:17:32'),
(114, 35, 'Beach', '78', '2023-10-10 02:18:34', '2023-10-10 02:18:34'),
(115, 35, 'Railways', '523', '2023-10-10 02:18:37', '2023-10-10 02:18:37'),
(116, 35, 'Super Market', '12', '2023-10-10 02:18:37', '2023-10-10 02:18:37'),
(117, 15, 'Super Market', '5', '2023-10-10 02:19:17', '2023-10-10 02:19:17'),
(118, 15, 'Entertainment', '34', '2023-10-10 02:19:17', '2023-10-10 02:19:17'),
(119, 38, 'Railways', '23', '2023-10-17 04:38:24', '2023-10-17 04:38:24'),
(120, 38, NULL, NULL, '2023-10-17 04:38:25', '2023-10-17 04:38:25'),
(121, 39, 'Railways', '23', '2023-10-17 04:38:32', '2023-10-17 04:38:32'),
(122, 39, NULL, NULL, '2023-10-17 04:38:33', '2023-10-17 04:38:33'),
(123, 40, 'Railways', '23', '2023-10-17 04:38:41', '2023-10-17 04:38:41'),
(124, 40, NULL, NULL, '2023-10-17 04:38:41', '2023-10-17 04:38:41'),
(125, 41, 'Railways', '23', '2023-10-17 04:38:49', '2023-10-17 04:38:49'),
(126, 41, NULL, NULL, '2023-10-17 04:38:50', '2023-10-17 04:38:50'),
(127, 42, 'Railways', '23', '2023-10-17 04:38:58', '2023-10-17 04:38:58'),
(128, 42, NULL, NULL, '2023-10-17 04:38:58', '2023-10-17 04:38:58'),
(129, 43, 'Bank', NULL, '2023-10-17 04:41:25', '2023-10-17 04:41:25'),
(130, 43, NULL, NULL, '2023-10-17 04:41:25', '2023-10-17 04:41:25'),
(131, 44, 'Airport', '78', '2023-10-17 04:43:51', '2023-10-17 04:43:51'),
(132, 44, NULL, NULL, '2023-10-17 04:43:51', '2023-10-17 04:43:51'),
(133, 45, 'Beach', '231', '2023-10-17 04:47:02', '2023-10-17 04:47:02'),
(134, 45, NULL, NULL, '2023-10-17 04:47:02', '2023-10-17 04:47:02'),
(135, 46, 'Hospital', '2', '2023-10-17 04:53:48', '2023-10-17 04:53:48'),
(136, 46, NULL, NULL, '2023-10-17 04:53:48', '2023-10-17 04:53:48'),
(137, 47, 'Entertainment', '21', '2023-10-17 12:34:28', '2023-10-17 12:34:28'),
(138, 47, NULL, NULL, '2023-10-17 12:34:28', '2023-10-17 12:34:28'),
(139, 48, 'Pharmacy', '768', '2023-10-19 05:00:04', '2023-10-19 05:00:04'),
(140, 48, NULL, NULL, '2023-10-19 05:00:04', '2023-10-19 05:00:04'),
(141, 49, 'Railways', '67', '2023-10-19 05:01:39', '2023-10-19 05:01:39'),
(142, 49, NULL, NULL, '2023-10-19 05:01:39', '2023-10-19 05:01:39'),
(143, 50, 'School', '2', '2023-10-19 05:28:22', '2023-10-19 05:28:22'),
(144, 50, NULL, NULL, '2023-10-19 05:28:22', '2023-10-19 05:28:22'),
(145, 51, 'SuperMarket', '523', '2023-10-19 05:30:27', '2023-10-19 05:30:27'),
(146, 51, NULL, NULL, '2023-10-19 05:30:28', '2023-10-19 05:30:28'),
(147, 52, 'SuperMarket', '523', '2023-10-19 05:30:31', '2023-10-19 05:30:31'),
(148, 52, NULL, NULL, '2023-10-19 05:30:31', '2023-10-19 05:30:31'),
(149, 53, 'Pharmacy', '34', '2023-10-19 05:32:32', '2023-10-19 05:32:32'),
(150, 53, NULL, NULL, '2023-10-19 05:32:32', '2023-10-19 05:32:32'),
(151, 54, 'Airport', NULL, '2023-10-19 05:34:13', '2023-10-19 05:34:13'),
(152, 54, NULL, NULL, '2023-10-19 05:34:13', '2023-10-19 05:34:13'),
(153, 55, 'Airport', '23', '2023-10-19 05:36:12', '2023-10-19 05:36:12'),
(154, 55, NULL, NULL, '2023-10-19 05:36:12', '2023-10-19 05:36:12'),
(155, 56, 'School', '523', '2023-10-19 05:38:06', '2023-10-19 05:38:06'),
(156, 56, NULL, NULL, '2023-10-19 05:38:06', '2023-10-19 05:38:06'),
(157, 57, 'Hospital', '34', '2023-10-19 05:42:20', '2023-10-19 05:42:20'),
(158, 57, NULL, NULL, '2023-10-19 05:42:20', '2023-10-19 05:42:20'),
(159, 27, 'Entertainment', '67', '2023-10-30 06:06:35', '2023-10-30 06:06:35'),
(160, 27, 'Railways', '5', '2023-10-30 06:06:35', '2023-10-30 06:06:35'),
(161, 27, 'School', '2', '2023-10-30 06:06:35', '2023-10-30 06:06:35'),
(162, 27, 'Mall', '3', '2023-10-30 06:06:35', '2023-10-30 06:06:35');

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
(35, '2023_11_05_065521_create_services_table', 19);

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
(59, 24, 'uploads/property/multi-image/1778454566956302.jpg', '2023-09-30 06:34:03', NULL),
(60, 24, 'uploads/property/multi-image/1778454567090658.jpg', '2023-09-30 06:34:03', NULL),
(61, 25, 'uploads/property/multi-image/1778839546340330.jpg', '2023-10-04 12:33:08', NULL),
(62, 25, 'uploads/property/multi-image/1778839546612107.jpg', '2023-10-04 12:33:08', NULL),
(63, 25, 'uploads/property/multi-image/1778839547027601.jpg', '2023-10-04 12:33:09', NULL),
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
(135, 47, 'uploads/property/multi-image/1780017389270436.jpg', '2023-10-17 12:34:27', NULL),
(136, 47, 'uploads/property/multi-image/1780017389733626.jpg', '2023-10-17 12:34:27', NULL),
(137, 47, 'uploads/property/multi-image/1780017390034308.jpg', '2023-10-17 12:34:27', NULL),
(138, 48, 'uploads/property/multi-image/1780169993989593.jpg', '2023-10-19 05:00:02', NULL),
(139, 48, 'uploads/property/multi-image/1780169994398779.jpg', '2023-10-19 05:00:02', NULL),
(140, 48, 'uploads/property/multi-image/1780169995174944.jpg', '2023-10-19 05:00:03', NULL),
(141, 49, 'uploads/property/multi-image/1780170094955103.jpg', '2023-10-19 05:01:38', NULL),
(142, 49, 'uploads/property/multi-image/1780170095227226.jpg', '2023-10-19 05:01:38', NULL),
(143, 50, 'uploads/property/multi-image/1780171775048690.jpg', '2023-10-19 05:28:20', NULL),
(144, 50, 'uploads/property/multi-image/1780171775416456.jpg', '2023-10-19 05:28:21', NULL),
(145, 50, 'uploads/property/multi-image/1780171775911749.jpg', '2023-10-19 05:28:21', NULL),
(146, 51, 'uploads/property/multi-image/1780171907061820.jpg', '2023-10-19 05:30:26', NULL),
(147, 51, 'uploads/property/multi-image/1780171907544338.jpg', '2023-10-19 05:30:27', NULL),
(148, 51, 'uploads/property/multi-image/1780171908014595.jpg', '2023-10-19 05:30:27', NULL),
(149, 52, 'uploads/property/multi-image/1780171911137104.jpg', '2023-10-19 05:30:30', NULL),
(150, 52, 'uploads/property/multi-image/1780171911569809.jpg', '2023-10-19 05:30:31', NULL),
(151, 52, 'uploads/property/multi-image/1780171911914550.jpg', '2023-10-19 05:30:31', NULL),
(152, 53, 'uploads/property/multi-image/1780172037453664.jpg', '2023-10-19 05:32:31', NULL),
(153, 53, 'uploads/property/multi-image/1780172037801701.jpg', '2023-10-19 05:32:31', NULL),
(154, 53, 'uploads/property/multi-image/1780172038308022.jpg', '2023-10-19 05:32:32', NULL),
(155, 54, 'uploads/property/multi-image/1780172143629628.jpg', '2023-10-19 05:34:12', NULL),
(156, 54, 'uploads/property/multi-image/1780172144237734.jpg', '2023-10-19 05:34:13', NULL),
(157, 55, 'uploads/property/multi-image/1780172268302278.jpg', '2023-10-19 05:36:11', NULL),
(158, 55, 'uploads/property/multi-image/1780172268740400.jpg', '2023-10-19 05:36:11', NULL),
(159, 55, 'uploads/property/multi-image/1780172269137566.jpg', '2023-10-19 05:36:12', NULL),
(160, 56, 'uploads/property/multi-image/1780172386091600.jpg', '2023-10-19 05:38:03', NULL),
(161, 56, 'uploads/property/multi-image/1780172386799972.jpg', '2023-10-19 05:38:05', NULL),
(162, 56, 'uploads/property/multi-image/1780172388224552.jpg', '2023-10-19 05:38:05', NULL),
(163, 57, 'uploads/property/multi-image/1780172654426304.jpg', '2023-10-19 05:42:19', NULL),
(164, 57, 'uploads/property/multi-image/1780172654851178.jpg', '2023-10-19 05:42:19', NULL);

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
(15, '6', 'Bathrooms,Swimming Pool', 'Kasabuni', 'kasabuni', 'PC002', 'buy', '2000', '67000', 'uploads/property/thumbmail/1778191650941246.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed ipsum vitae risus condimentum fermentum. Phasellus hendrerit auctor sagittis. Sed venenatis bibendum risus, a euismod nulla hendrerit in. Suspendisse potenti. Praesent eu lectus eget nulla consequat auctor.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>', '4', '3', '8', '6', NULL, '89', 'https://www.youtube.com/embed/VOkto8R_cjY?si=2bbyJCAZ8iyqh3uy', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '1.4577', '36.9785', '1', '1', '11', '1', '2023-09-27 08:55:07', '2023-10-19 05:25:13'),
(17, '5', '3', 'Kigoshi Towers', 'kigoshi towers', 'PC004', 'rent', '4000', '5000', 'uploads/property/thumbmail/1778198980497213.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-09-27 10:51:37', NULL),
(24, '1', '1,2,3,4', 'Agrippa', 'agrippa', 'PC005', 'buy', '80', '120', 'uploads/property/thumbmail/1778454565055235.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '<h2><span style=\"color: rgb(255, 255, 255);\">What is Lorem Ipsum?</span></h2>\r\n<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '4', '3', '8', '2', NULL, '346', 'https://www.youtube.com/watch?v=5HnLhqvJO6Y&list=PLoBGtBK7uqyUIUVGD_cOAmVCprfn5LMJ2&index=2', '29010_00625', 'Nairobi', '0', '29010', 'Westlands', '-1.289100', '31.289100', '1', '1', '5', '0', '2023-09-30 06:34:03', '2023-09-30 10:38:54'),
(25, '3', '1,2,3,4,5,8', 'Nyumba Kumi', 'nyumba kumi', 'PC006', 'rent', '1000', '20', 'uploads/property/thumbmail/1778839541127981.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '3', '3', '8', '2', NULL, '89', 'https://www.youtube.com/embed/rwx8t1qC0oE?si=Fb7Jxl1MuZIfmuW1', NULL, NULL, NULL, NULL, 'Westlands', '1.4577', '36.9785', '1', NULL, '11', '1', '2023-10-04 12:33:08', '2023-10-10 05:08:16'),
(27, '6', 'Bathrooms,Bedrooms,CCTV Security', 'Olive Towers', 'olive towers', 'PC008', 'rent', '4000', '12000', 'uploads/property/thumbmail/1778842479529108.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>\r\n<p><span style=\"color: rgb(255, 255, 255);\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English</span></p>', '3', '3', '8', '2', NULL, '89', 'https://www.youtube.com/watch?v=5HnLhqvJO6Y&list=PLoBGtBK7uqyUIUVGD_cOAmVCprfn5LMJ2&index=2', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '-1.289100', '31.289100', '1', '1', '11', '1', '2023-10-04 12:46:46', '2023-10-19 05:15:51'),
(35, '5', '1,2,3,4', 'one', 'one', 'PC011', 'rent', '4000', '67000', 'uploads/property/thumbmail/1778915367222341.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '2', '2', '2', '2', NULL, '89', 'https://www.youtube.com/embed/LVcNFQsn2tE?si=0vcwWs_eQ6-eJPtw', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '1.4577', '36.9785', '1', NULL, '11', '1', '2023-10-05 08:38:17', '2023-10-10 05:07:51'),
(38, '5', '1,3,5,10', 'houseone', 'houseone', 'PC014', 'rent', '4000', '30000', 'uploads/property/thumbmail/1779988913863287.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', 'Mama Ngina', 'Laikipia', 'Laikipia', '90200', 'Westlands', '-1.289100', '-1.289100', '1', NULL, '5', '1', '2023-10-17 04:38:21', '2023-10-17 05:06:54'),
(39, '5', '1,3,5,10', 'olivepark', 'olivepark', 'PC015', 'rent', '4000', '30000', 'uploads/property/thumbmail/1779988874725613.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', 'Mama Ngina', 'Kitui', 'Mama Ngina', '90200', 'Westlands', '-1.289100', '-1.289100', '1', NULL, '5', '1', '2023-10-17 04:38:28', '2023-10-17 05:06:16'),
(40, '5', '1,3,5,10', 'houseone', 'houseone', 'PC016', 'rent', '4000', '30000', 'uploads/property/thumbmail/1779988787136644.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '3', 'Nyeri', 'Kutus', '3', 'Westlands', '-1.289100', '-1.289100', '1', NULL, '5', '1', '2023-10-17 04:38:34', '2023-10-17 05:08:55'),
(41, '5', '1,3,5,10', 'Purple', 'purple', 'PC017', 'rent', '4000', '30000', 'uploads/property/thumbmail/1779987458756587.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '3', 'Mombasa', 'South Coast', '3', 'Westlands', '-1.289100', '-1.289100', '1', NULL, '5', '1', '2023-10-17 04:38:44', '2023-10-17 05:05:50'),
(42, '15', ',,,', 'Valley Arcade', 'valley arcade', 'PC018', 'rent', '4000', '30000', 'uploads/property/thumbmail/1779988856504653.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '89', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '-1.289100', '-1.289100', '1', NULL, '5', '1', '2023-10-17 04:38:54', '2023-10-18 06:37:21'),
(43, '8', ',,,,', 'housetwo', 'housetwo', 'PC019', 'rent', '200', '500', 'uploads/property/thumbmail/1779987626143783.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">&nbsp;Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>', '2', '2', '2', '2', NULL, '32', 'https://www.youtube.com/embed/LVcNFQsn2tE?si=0vcwWs_eQ6-eJPtw', '29010_00625', 'Kirinyaga', 'Kutus', '29010', 'Parklands', '1.289100', '31.289100', '1', NULL, '7', '1', '2023-10-17 04:41:22', '2023-10-18 06:36:43'),
(44, '6', ',,,', 'three', 'three', 'PC020', 'buy', '4000', '5000', 'uploads/property/thumbmail/1779987778096375.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Kileleshwa', '1.289100', '31.289100', '1', NULL, '7', '1', '2023-10-17 04:43:48', '2023-10-18 06:36:57'),
(45, '8', ',,,', 'next', 'next', 'PC021', 'rent', '4000', '34000', 'uploads/property/thumbmail/1779987979712103.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '112', 'https://www.youtube.com/embed/LVcNFQsn2tE?si=0vcwWs_eQ6-eJPtw', '29010_00625', 'Machakos', 'Machakos', '29010', 'Karen', '-1.289100', '31.289100', '1', NULL, '7', '1', '2023-10-17 04:47:00', '2023-10-18 06:36:14'),
(46, '7', ',,,', 'wendo', 'wendo', 'PC022', 'rent', '4000', '5000', 'uploads/property/thumbmail/1779988405988081.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '323', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Karen', '1.289100', '31.289100', '1', NULL, '7', '1', '2023-10-17 04:53:46', '2023-10-18 06:36:01'),
(47, '6', ',,,', 'Green Garden', 'green garden', 'PC023', 'buy', '4000', '2400', 'uploads/property/thumbmail/1780017386852735.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3', '3', '3', '3', NULL, '346', 'https://www.youtube.com/watch?v=5HnLhqvJO6Y&list=PLoBGtBK7uqyUIUVGD_cOAmVCprfn5LMJ2&index=2', '29010_00625', 'Nairobi', 'Nairobi', '29010', 'Westlands', '-1.289100', '3-1.289100', '1', NULL, '12', '1', '2023-10-17 12:34:26', '2023-10-18 06:35:40'),
(48, '6', 'Swimming Pool', 'fjj', 'fjj', 'PC024', 'rent', '4000', '5000', 'uploads/property/thumbmail/1780169991682280.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">&nbsp; fttutfj4;o;5go &nbsp; &nbsp; &nbsp;&nbsp;</span></p>', '2', '2', '2', '6', NULL, '32', 'https://www.youtube.com/watch?v=hxZU1QslmsI&ab_channel=AfricanRealEstate', '29010_00625', 'Nairobi', '6', '29010', NULL, NULL, NULL, '1', '1', '12', '1', '2023-10-19 05:00:01', '2023-10-19 05:15:33'),
(49, '4', 'Swimming Pool,CCTV Security', 'kafengo', 'kafengo', 'PC025', 'rent', '4000', '5000', 'uploads/property/thumbmail/1780170094689757.jpg', 'rnjjjj', '<p><span style=\"color: rgb(255, 255, 255);\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; rnjjjj</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '29010_00625', 'Nairobi', '6', '29010', NULL, NULL, NULL, '1', '1', '5', '1', '2023-10-19 05:01:38', NULL),
(50, '1', 'Bedrooms,CCTV Security', 'Westend Ofiices', 'westend ofiices', 'PC026', 'rent', '230000', '250000', 'uploads/property/thumbmail/1780171773915033.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '2', '2', '8', NULL, NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Westlands', '-1.289100', '31.289100', NULL, '1', '11', '1', '2023-10-19 05:28:20', NULL),
(51, '1', 'parking,Swimming Pool,CCTV Security', 'office two', 'office two', 'PC027', 'rent', '45688', '3457869', 'uploads/property/thumbmail/1780171906535592.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '2', '2', '2', '2', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Westlands', '1.289100', '31.289100', '1', '1', '10', '1', '2023-10-19 05:30:26', NULL),
(52, '1', 'parking,Swimming Pool,CCTV Security', 'office two', 'office two', 'PC028', 'rent', '45688', '3457869', 'uploads/property/thumbmail/1780171910844556.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '2', '2', '2', '2', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Westlands', '1.289100', '31.289100', '1', '1', '10', '1', '2023-10-19 05:30:30', NULL),
(53, '2', 'Bathrooms,Swimming Pool,Bedrooms,CCTV Security', 'Kilo Apartments', 'kilo apartments', 'PC029', 'rent', '4000', '67000', 'uploads/property/thumbmail/1780172037153157.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '3', '3', '3', '3', NULL, '112', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '6', '29010', 'Bamburi', '-1.289100', NULL, '1', '1', '11', '1', '2023-10-19 05:32:30', NULL),
(54, '2', 'Bathrooms', 'Green Apartments', 'green apartments', 'PC030', 'buy', '4000', '5000', 'uploads/property/thumbmail/1780172143219023.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '2', '2', '2', '2', NULL, '346', 'https://www.youtube.com/watch?v=hxZU1QslmsI&ab_channel=AfricanRealEstate', '29010_00625', 'Nairobi', '6', '29010', 'Karen', '1.4577', '31.289100', '1', '1', '7', '1', '2023-10-19 05:34:11', NULL),
(55, '2', 'Bathrooms,Swimming Pool,Bedrooms', 'Purple Apartments', 'purple apartments', 'PC031', 'rent', '4000', '100000', 'uploads/property/thumbmail/1780172267754090.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.vLorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '4', '4', '4', '4', NULL, '346', 'https://www.youtube.com/embed/PzTE-nxqRw8?si=MK8A92cy9YMWyYKO', '29010_00625', 'Nairobi', '8', '29010', 'Westlands', '1.4577° S', '31.289100', '1', '1', '11', '1', '2023-10-19 05:36:10', '2023-10-19 07:24:33'),
(56, '2', 'parking,Bathrooms,Swimming Pool,Intercom', 'Red Apartments', 'red apartments', 'PC032', 'buy', '4000', '56665', 'uploads/property/thumbmail/1780172385515443.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '3', '3', '3', '3', NULL, '235', NULL, '29010_00625', 'Nairobi', '6', '29010', NULL, '-1.289100', '31.289100', '1', '1', '5', '1', '2023-10-19 05:38:02', NULL),
(57, '3', 'parking,Bedrooms,CCTV Security', 'Red Flats', 'red flats', 'PC033', 'rent', '4000', '3455', 'uploads/property/thumbmail/1780172653855543.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><span style=\"color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '3', '4', '4', '4', NULL, '346', 'https://www.youtube.com/watch?v=hxZU1QslmsI&ab_channel=AfricanRealEstate', '29010_00625', 'Nairobi', '6', '29010', 'Karen', '-1.289100', '31.289100', '1', '1', '5', '1', '2023-10-19 05:42:19', NULL);

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
(12, 'Industry', 'Industry', NULL, NULL);

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
(11, 11, 57, '5', '10/31/2023', NULL, 'Appointment', '0', '2023-10-24 11:17:31', NULL);

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
(1, 'uploads/logo/1780718953217085.png', '0705069145', 'Nairobi, Kenya', 'paulmulwa102@gmail.com', 'www.facebook.com', 'www.twitter.com', 'Keja Yangu 2023 All rights Reserved', '2023-08-10 05:13:44', '2023-10-25 06:29:23');

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
(16, 'Muranga', 'uploads/state/1780068504235860.webp', NULL, NULL);

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
(5, 'agent101', 'agent@gmail.com', NULL, '$2y$10$NDmTkYpFKHUXlGneO4Gepuhwlnfi7vT0X4AphJOtJSStlKKOHl5zW', '202312090713images (6).jpg', '0705069145', 'kisumu', 'agent', 'active', '0', NULL, '2023-09-12 06:54:05', '2023-12-09 04:13:12'),
(6, 'lambistic', 'lambistic@gmail.com', NULL, '$2y$10$unAlMCivjJtnJ8WCPMwJG.S3Avk.zxHYtlRFOV4GAsQm400Ir7SVa', NULL, NULL, NULL, 'user', 'active', '0', NULL, '2023-09-15 05:16:43', '2023-09-15 05:16:43'),
(7, 'Agent1', 'agent1@gmail.com', NULL, '$2y$10$VeEgSf3OMmF0MJ9Q8G3ojupNPkcXKnv1TUR/ebTCp3B3m/Q.LPcV6', '202310171145optimized_large_thumb_stage (1).jpg', '0705069145', 'Mama Ngina', 'agent', 'active', '0', NULL, NULL, '2023-10-17 08:45:06'),
(8, 'agent2', 'agent2@gmail.com', NULL, '$2y$10$xccf0cGSdQWH3XfQOrVY3eigfVvH4guW7eiwuR.hAz0UFCZi6/15q', '2023100404421778180057820424.png', '0705069145', 'Mama Ngina', 'agent', '', '0', NULL, NULL, '2023-11-28 07:10:48'),
(10, 'agentzero', 'agentzero@gmail.com', NULL, '$2y$10$24VfMgs9o9e3v.UgKzDLyeUsgQh1pxtgX0K.220jlbqCBSgHhuxK.', '202310171037preview.jpg', '0705069145', NULL, 'agent', 'active', '0', NULL, '2023-10-04 06:53:35', '2023-11-28 07:10:35'),
(11, 'agent10', 'agent10@gmail.com', NULL, '$2y$10$srnvrFxgtJMgzb01vUKSSOHih6YJ7.Hv9UZysgogT39Cl0sP/AT2W', '202312090710images (11).jpg', '0705069145', 'Nairobi', 'agent', 'active', '30', NULL, '2023-10-04 06:56:07', '2023-12-09 04:10:40'),
(12, 'newagent', 'newagent@gmail.com', NULL, '$2y$10$viemkCZxcZxfd.o5cI/Do.DZdgHqsxyzS8I/7WidydviF1tfQ2UBO', '202310171142demolitions_art.webp', '+254705069145', NULL, 'agent', 'active', '0', NULL, '2023-10-06 02:33:53', '2023-10-17 08:42:29'),
(13, 'agent3', 'agent3@gmail.com', NULL, '$2y$10$5TF0etGWZwyTs3OPqx68tODbxTOspiSci9GCoFp59CkPj6PjJdY1.', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, NULL),
(15, 'newadmin', 'newadmin@gmail.com', NULL, '$2y$10$MzpmhAByLb/kovT1eSFUG.fZqojMNV8BzP6YbsjRYP5/xw906Y1gW', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, NULL),
(16, 'superuser', 'superuser@gmail.com', NULL, '$2y$10$L8iFd0T1J1cjdpp42Qtz3uTaNAAnrUe69S3SkXddfzikBgNds7oAS', '202310291148dove-clip-art-69.jpg', '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, '2023-10-29 08:48:33'),
(17, 'newsuperuser', 'newsuperuser@gmail.com', NULL, '$2y$10$URi3GvL3oxYPCgW3ivNBtuR5WGxq9rezx2/UA1PKjs4GHWdVIgBxC', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, NULL, NULL),
(18, 'agent40', 'agent40@gmail.com', NULL, '$2y$10$PT5lXJ5hhuvFKyskZDOUZORBQX.BsD1t5ZDbWpy325Ab.jHTTjyGi', NULL, '0705069145', 'Mama Ngina', 'admin', 'active', '0', NULL, '2023-10-29 02:36:00', '2023-10-29 02:36:00'),
(19, 'Clinton mbathi', 'tecshua@gmail.com', NULL, '$2y$10$VglnnoqqoM6XZSnYnx3kPu0VNiNUsm7zwuPM7xJr9v/XjphAnAlnO', NULL, '0714325899', 'kitui', 'admin', 'active', '0', NULL, '2023-11-02 11:35:35', '2023-11-02 11:35:35'),
(20, 'rafael', 'slimfitraf@gmail.com', NULL, '$2y$10$.B6PPQWtMYqUcoA.9mpHZ.51wSsFvh4x7H6vgxNSLUUFB9ymYIfaq', NULL, '+254797969099', 'kitui', 'admin', 'active', '0', NULL, '2023-11-28 12:21:15', '2023-11-28 12:21:15');

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
(13, 'user', 'user@gmail.com', '+254705069145', NULL, 'test', '2023-11-28 03:20:30', NULL);

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
(6, 1, 45, '2023-10-17 05:10:12', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `property_messages`
--
ALTER TABLE `property_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

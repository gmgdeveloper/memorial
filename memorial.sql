-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2024 at 02:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'John', 'admin@admin.com', NULL, '$2a$04$ypqIYzypPK5hbmk9xHj3puvcdEznNr13/E.nGOx.Mi.bNRvOIdMG2', NULL, '2021-08-31 15:36:44', '2021-08-31 15:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `full_path` text,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `memorial_id`, `full_path`, `type`, `created_at`, `updated_at`) VALUES
(1, 39, 'Media/videos/663b5da90b310.mp4', 'video', '2024-05-08 18:02:29', '2024-05-08 18:10:33'),
(2, 40, 'Media/videos/663c8ccc110db.mp4', 'video', '2024-05-08 19:13:29', '2024-05-09 15:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `media_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `over_view` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `user_id`, `media_id`, `name`, `over_view`, `created_at`, `updated_at`) VALUES
(1, 38, 1, 'Khadim hussain Khoso1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus volutpat venenatis. Nunc pretium lectus ac augue tincidunt, et elementum nisi suscipit. Sed eu mollis libero. Sed faucibus risus ex, dignissim porttitor nisl malesuada non. Donec elit arcu, vehicula et justo at, accumsan finibus libero. Maecenas molestie gravida dui ac aliquet. Nunc ornare, nunc quis luctus cursus, justo eros elementum sapien, quis malesuada sapien dolor sit amet augue. Vivamus rhoncus lectus sit amet viverra gravida. Nunc id turpis in enim malesuada varius ut at arcu.1231', '2024-05-29 12:05:02', '2024-05-07 20:42:25'),
(3, 39, 3, 'Azan Testingfdsf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus volutpat venenatis. Nunc pretium lectus ac augue tincidunt, et elementum nisi suscipit. Sed eu mollis libero. Sed faucibus risus ex, dignissim porttitor nisl malesuada non. Donec elit arcu, vehicula et justo at, accumsan finibus libero. Maecenas molestie gravida dui ac aliquet. Nunc ornare, nunc quis luctus cursus, justo eros elementum sapien, quis malesuada sapien dolor sit amet augue. Vivamus rhoncus lectus sit amet viverra gravida. Nunc id turpis in enim malesuada varius ut at arcu', '2024-05-07 22:04:31', '2024-05-10 06:01:21'),
(4, 40, 4, 'Breannon Kimberley khadim', 'Lorem isdgfdsdggfdgfdsgfdfgd', '2024-05-08 19:11:36', '2024-05-09 15:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(3, 'Test', '2024-05-06 18:41:13', '2024-05-06 18:41:13'),
(4, 'Test1dfsf', '2024-05-06 21:06:55', '2024-05-06 21:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `media_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `media_type` enum('photo','video') DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `uploaded_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `memorial_id`, `media_type`, `file_path`, `uploaded_at`, `created_at`, `updated_at`) VALUES
(1, 38, 'photo', '/Media/BannerImge/663a2e7868c6b.jpeg', '2024-05-07 11:58:34', '2024-05-07 18:58:34', '2024-05-07 20:36:56'),
(2, 39, 'photo', '/Media/BannerImge/663b568bc14fd.jpg', '2024-05-07 15:03:53', '2024-05-07 22:03:53', '2024-05-08 17:40:11'),
(3, 39, 'photo', '/Media/BannerImge/663b568bc14fd.jpg', '2024-05-07 15:04:31', '2024-05-07 22:04:31', '2024-05-08 17:40:11'),
(4, 40, NULL, NULL, '2024-05-08 12:11:36', '2024-05-08 19:11:36', '2024-05-08 19:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `memorials`
--

CREATE TABLE `memorials` (
  `memorial_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Middel_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `honouree_relation` varchar(255) DEFAULT NULL,
  `description` text,
  `gender` enum('male','female','other') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `Date_of_passing` date DEFAULT NULL,
  `memorial_page_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Is_private` tinyint(1) DEFAULT NULL,
  `Is_active` tinyint(1) DEFAULT NULL,
  `subscriptionID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_20_195623_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `features` text,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `duration`, `end_date`, `price`, `features`, `description`, `created_at`, `updated_at`) VALUES
(4, 'monthly', '2024-05-29 07:00:00', '22.22', 'All Features', 'Full access to current website features for the duration of your subscription\r\n\r\nRenews monthly.', '2024-05-01 19:37:13', '2024-05-01 19:38:46'),
(5, 'lifetime', '2024-05-23 07:00:00', '333.33', 'All features. Best value', 'Full access to website features and future updates for 100 years.\r\n\r\nThis plan ensures that your legacy page will remain online and accessible for future generations.', '2024-05-01 19:43:28', '2024-05-01 19:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `memorial_id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 39, 'First Quotes123', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quos voluptatem aliquid, error reprehenderit vero officia ratione quidem corrupti assumenda magni voluptatibus id! Molestias commodi laborum asperiores vero sint', '2024-05-16 08:46:54', '2024-05-10 05:57:33'),
(2, 40, 'Second Quotes kHADIM', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quos voluptatem aliquid, error reprehenderit vero officia ratione quidem corrupti assumenda magni voluptatibus id! Molestias commodi laborum asperiores vero sint quaerat.AFSAF', '2024-05-02 08:47:01', '2024-05-08 19:10:59'),
(5, 39, 'second slider testing', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quos voluptatem aliquid, error reprehenderit vero officia ratione quidem corrupti assumenda magni voluptatibus id! Molestias commodi laborum asperiores vero sint', '2024-05-10 05:29:50', '2024-05-10 05:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE `relationships` (
  `id` int NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `sub_heading_first` varchar(255) DEFAULT NULL,
  `sub_heading_second` varchar(255) DEFAULT NULL,
  `sub_heading_third` varchar(255) DEFAULT NULL,
  `sub_heading_fourth` varchar(255) DEFAULT NULL,
  `sub_heading_fifth` varchar(255) DEFAULT NULL,
  `sub_heading_sixth` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relationships`
--

INSERT INTO `relationships` (`id`, `user_id`, `heading`, `sub_heading_first`, `sub_heading_second`, `sub_heading_third`, `sub_heading_fourth`, `sub_heading_fifth`, `sub_heading_sixth`, `created_at`, `updated_at`) VALUES
(2, '39', 'CHILD OF', 'Geoff Schuback', 'Diane Schuback', 'Poppy Schuback (Marriage)', 'Ron Daniel', 'Jan Horgan', 'Lex Horgan (Marriage)', '2024-05-10 11:56:43', '2024-05-10 08:48:16'),
(3, '39', 'GRANDCHILD OF', 'Geoff Schuback', 'Diane Schuback', 'Poppy Schuback (Marriage)', 'Ron Daniel', 'Jan Horgan', 'Lex Horgan (Marriage)', '2024-05-10 11:56:43', '2024-05-10 11:56:43'),
(4, '39', 'SIBLING OF', 'Geoff Schuback', 'Diane Schuback', 'Poppy Schuback (Marriage)', 'Ron Daniel', 'Jan Horgan', 'Lex Horgan (Marriage)', '2024-05-10 11:56:43', '2024-05-10 11:56:43'),
(5, '39', 'NIBLING OF', 'Geoff Schuback', 'Diane Schuback', 'Poppy Schuback (Marriage)', 'Ron Daniel', 'Jan Horgan', 'Lex Horgan (Marriage)', '2024-05-10 11:56:43', '2024-05-10 11:56:43'),
(6, '39', 'Testing', 'Testing1', 'Testing2', 'Testing3', 'Testing4', 'Testing5', 'Testing6', '2024-05-10 06:51:34', '2024-05-10 06:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `no_of_memorial_pages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0,1',
  `relationship` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobilephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buildingname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `access_code`, `last_login`, `no_of_memorial_pages`, `is_active`, `relationship`, `role`, `remember_token`, `created_at`, `updated_at`, `mobilephone`, `buildingname`, `street`, `suburb`, `postcode`, `state`, `country`) VALUES
(27, 'Khadim', 'khadim6m4', 'khadimgmgsolutions@gmail.com', NULL, NULL, '$2a$04$ypqIYzypPK5hbmk9xHj3puvcdEznNr13/E.nGOx.Mi.bNRvOIdMG2', NULL, '1', '1', NULL, 1, NULL, '2024-05-02 20:10:29', '2024-05-02 20:10:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Khadim667', 'khadim6674Ba', 'valerichdfsekalina17@gmail.com', NULL, NULL, 'EVqHJbWyqDaG3USt', NULL, '1', '1', NULL, 1, NULL, '2024-05-03 14:39:19', '2024-05-03 14:39:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'fdsasfdsafdaffd', NULL, 'itwondasdaferfulminds@gmail.com', NULL, NULL, '$2y$10$1EJfnwI5tADc4IytEg3wm.v6ZaZXvle6mptx5HdltBo7I3XyuZhAu', NULL, '1', '1', 'Nibling', 1, NULL, '2024-05-03 18:42:15', '2024-05-03 18:42:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'azantest009', NULL, 'azantese123@gmail.com', NULL, NULL, '$2y$10$gaYyLWN0fXASeNJpHF9gKO1/vfEXhWYeqAnUa9XJO5TBnSPrcb43q', NULL, '1', '1', 'Child', 1, NULL, '2024-05-03 20:58:29', '2024-05-03 20:58:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Khadimtr', NULL, 'valerichekalina1fg7@gmail.com', NULL, NULL, '$2y$10$2LgTmy01ZixnaBC0OXhkvup4VuriH0v0Ld5fqfJJWDuVlYCxNAzI2', NULL, '1', '1', 'Sibling', 1, NULL, '2024-05-06 16:09:56', '2024-05-06 16:09:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Khadimddfd', NULL, 'itwonderggggfulminds@gmail.com', NULL, NULL, '$2y$10$diio4RyxTAjYMH4/dHna9OIm3FvHgUJiaVQWdHWs75VGla8YHGTy6', NULL, '1', '1', 'Foster Child', 1, NULL, '2024-05-06 16:14:10', '2024-05-06 16:14:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'KhadimITsupport', NULL, 'KhadimITsupport@gmail.com', NULL, NULL, '$2y$10$7bUl/SM95fIOj1PfI7/Ol.cXblfosstAcaJ0S3Mm/X/u31Q49oThe', NULL, '1', '1', 'Partner', 1, NULL, '2024-05-06 16:20:02', '2024-05-06 16:20:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, 'valerichekalina17@gmail.com', NULL, 'password', '$2y$10$Wjs4qz1BKzBHgQlb7UBCMea7CruXEc9T7g1NLKdX7C.i0Qp2LLgWW', NULL, '1', '1', 'Sibling', 1, NULL, '2024-05-06 20:17:01', '2024-05-06 20:17:01', '34', '2342', '23424', '24332', '4234', NULL, 'wertew'),
(37, NULL, NULL, 'itwonderfulmnnnninds@gmail.com', NULL, '$2y$10$Wr7vA/GEt94Xr0pqwZj2wuE0hasIM9rZbyjx21yNwmdb72ujEJOTy', '$2y$10$60VNH9O.qtCRaAtdifuyv.zDDZch44zsHZ42El86Ic3T0qhx4CZ2u', NULL, '1', '1', NULL, 1, NULL, '2024-05-06 20:25:31', '2024-05-06 20:25:31', '7577', '777777', '67', '24332jjk,,,', '7688', 'rferwwerr', 'wertew'),
(38, 'Developer', NULL, 'test1234@happ.com', NULL, '$2y$10$e/0LZWZmYGM5y6BZ/JaCTOwJv0.Czukes4I.vxtZINIP1DOrBDAWS', '$2y$10$uHj6nXVVOQc3Sj0kLkVhdeasYdZ2jxfkq89RiBcLBM3KDqhBLVt.W', NULL, '1', '1', 'Sibling', 1, NULL, '2024-05-07 14:37:44', '2024-05-07 15:31:59', '123132', '13123', '123', '1231', '131', 'Sindhi', 'Pakistan'),
(39, NULL, NULL, 'admin@admin.com', NULL, '$2y$10$m424SLaobAv1ZyzfhGvDge2LNIY5Gr3MY1anRG2Ow3I9WRXm2.D6K', '$2y$10$Flv6.t7cpG5XdMsQQfTncesgtlgtBbLQJSeYCb1Sz3hGGQjeciAn.', NULL, '1', '1', 'Godchild', 1, NULL, '2024-05-07 21:39:57', '2024-05-07 21:39:57', '2342', '234243', '234', '23424', '23432', 'fsasa', 'Pakistan'),
(40, NULL, NULL, 'KhadimITsupporvdt@gmail.com', NULL, '$2y$10$DZON6wXeoD7W6iNrK7MZH.VPpr51YKekRUOt9dQVLK15ccYYb5pH.', '$2y$10$XdxeWkSeDauyGMQM51sYYuffDSrdKt7ZtZ/l.DzIr8Bi9mGETg.Dm', NULL, '1', '1', 'Sibling', 1, NULL, '2024-05-08 16:51:13', '2024-05-08 16:51:13', '2131', '3123', '23', 'sdsddf', '1231', 'dasf', 'Pakistan'),
(41, NULL, NULL, 'ggddg@gmail.com', NULL, '$2y$10$7TqKMwEKZWAVU5ZOXDycM.4XTHMJnR89jES.40mS4tEyob88ny4Oa', '$2y$10$aUEpFRxaDN37V7wxnYAik.Hwam9rf6UXkaDyP6rCeImd2bCJBPOQO', NULL, '1', '1', 'Nibling', 1, NULL, '2024-05-09 15:56:23', '2024-05-09 15:56:23', '242', '2344', '2342423', 'sdfsf', '33324', 'fsafds', 'Pakistan'),
(42, NULL, NULL, 'itwogsfdgggfsdderfulminds@gmail.com', NULL, '$2y$10$K2RUBNWI1Zn7fTsA3qzv6ePt00wBT/FeChWy375qa96tffvADilTO', '$2y$10$CeT9FjXhJNr.ekkNWOmnTuSrka7zWNZuoYwtxEow652lIHlNYfm1K', NULL, '1', '1', 'Foster Child', 1, NULL, '2024-05-09 16:00:43', '2024-05-09 16:00:43', '234324', '345353534434', '45533', 'gdsgg', '345353', 'gdsfgdg', 'Pakistan gsdgfd');

-- --------------------------------------------------------

--
-- Table structure for table `user_pages`
--

CREATE TABLE `user_pages` (
  `id` int NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_death` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `memorial_web_address` varchar(255) DEFAULT NULL,
  `page_type` varchar(255) DEFAULT NULL,
  `plan_id` int DEFAULT NULL,
  `privacy_policy` varchar(255) DEFAULT NULL,
  `name_of_card` varchar(255) DEFAULT NULL,
  `credit_card` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_pages`
--

INSERT INTO `user_pages` (`id`, `first_name`, `last_name`, `date_of_death`, `middle_name`, `date_of_birth`, `memorial_web_address`, `page_type`, `plan_id`, `privacy_policy`, `name_of_card`, `credit_card`, `total_amount`, `name`, `email`, `created_at`, `updated_at`) VALUES
(16, 'Khadim', 'last name', '2024-05-23', 'khoso', '2024-05-28', 'https://khadim-khoso.memorial.com', 'Biography', 5, '1', 'card', '43', '333.33', 'Khadimasdfsa', 'meris75587@lewenbo.com', '2024-05-02 18:18:54', '2024-05-02 18:18:54'),
(17, 'Khadim', 'asdfsa', '2024-06-06', 'hussain', '2024-06-05', 'https://khadim-hussain.memorial.com', 'Biography', 5, '1', 'card', 'credt', '333.33', 'Khadim', 'khadimgmgsolutions@gmail.com', '2024-05-02 20:10:29', '2024-05-02 20:10:29'),
(18, 'azan', 'last name', '2024-05-24', 'ahmed', '2024-06-05', 'https://azan-ahmed.memorial.com', 'Memorial', 5, '1', NULL, NULL, '333.33', 'azantest32', 'azantese5@gmail.com', '2024-05-03 14:33:14', '2024-05-03 14:33:14'),
(19, 'Khadim', 'last name', '2024-05-31', 'khoso', '2024-05-28', 'https://khadim-khoso.memorial.com', 'Memorial', 4, '1', NULL, NULL, '22.22', 'Khadim667', 'valerichdfsekalina17@gmail.com', '2024-05-03 14:39:19', '2024-05-03 14:39:19'),
(22, 'Khadim', 'last name', '2024-05-16', 'khoso', '2024-05-28', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', NULL, NULL, '333.33', 'azantest009', 'azantese123@gmail.com', '2024-05-03 20:58:29', '2024-05-03 20:58:29'),
(23, 'Khadim', 'last name', '2024-05-21', 'khoso', '2024-05-23', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 4, '1', NULL, NULL, '22.22', 'Khadimtr', 'valerichekalina1fg7@gmail.com', '2024-05-06 16:09:56', '2024-05-06 16:09:56'),
(24, 'Khadim', 'test', '2024-05-30', 'khoso', '2024-06-05', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', NULL, NULL, '333.33', 'Khadimddfd', 'itwonderggggfulminds@gmail.com', '2024-05-06 16:14:10', '2024-05-06 16:14:10'),
(25, 'asdfsa', 'asdfs', '2024-02-06', 'khoso', '2024-05-21', 'https://asdfsa-khoso.memorial.com', 'bio_graphy_page_type', 4, '1', NULL, NULL, '22.22', 'KhadimITsupport', 'KhadimITsupport@gmail.com', '2024-05-06 16:20:02', '2024-05-06 16:20:02'),
(26, 'Khadimyyt', 'last name', '2024-05-14', 'test', '2024-05-14', 'https://khadim-test.memorial.com', 'bio_graphy_page_type', 5, '1', NULL, NULL, '333.33', NULL, 'valerichekalina17@gmail.com', '2024-05-06 20:17:01', '2024-05-06 20:17:01'),
(27, 'Khadim', 'last name', NULL, 'khoso', NULL, 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 4, '1', NULL, NULL, '22.22', NULL, 'itwonderfulmnnnninds@gmail.com', '2024-05-06 20:25:31', '2024-05-06 20:25:31'),
(28, 'Khadim', 'last name', '2024-06-05', 'khoso', '2024-05-01', 'https://asdfsa-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', 'card', '43', '333.33', NULL, 'test1234@happ.com', '2024-05-07 14:37:44', '2024-05-07 14:37:44'),
(29, 'Khadim', 'last name', '2050-01-11', 'khoso', '2024-05-08', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', 'card', '43', '333.33', NULL, 'admin@admin.com', '2024-05-07 21:39:57', '2024-05-10 05:00:12'),
(30, 'Khadim', 'last name', '2024-05-27', 'khoso', '2024-05-17', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', NULL, NULL, '333.33', NULL, 'KhadimITsupporvdt@gmail.com', '2024-05-08 16:51:13', '2024-05-09 15:19:53'),
(31, 'Khadim', NULL, '2024-06-07', 'khoso', '2024-06-06', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', NULL, NULL, '333.33', NULL, 'ggddg@gmail.com', '2024-05-09 15:56:23', '2024-05-09 15:56:23'),
(32, 'dsfgsg', 'sdgfdg', '2024-05-29', 'sdgfdg', '2024-05-15', 'https://sdgsdg-sdgfdg.memorial.com', 'bio_graphy_page_type', 5, '0', 'card', '43', '333.33', NULL, 'itwogsfdgggfsdderfulminds@gmail.com', '2024-05-09 16:00:43', '2024-05-09 16:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `plan_id` int DEFAULT NULL,
  `page_id` int DEFAULT NULL,
  `total_amount` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `user_id`, `plan_id`, `page_id`, `total_amount`, `created_at`, `updated_at`) VALUES
(16, 27, 5, 17, 333, '2024-05-02 20:10:29', '2024-05-02 14:08:26'),
(17, 28, 5, 18, 333, '2024-05-03 14:33:14', '2024-05-03 07:39:31'),
(18, 29, 4, 19, 22, '2024-05-03 14:39:19', '2024-05-03 14:39:19'),
(19, 30, 5, 20, 333, '2024-05-03 17:21:57', '2024-05-03 17:21:57'),
(20, 31, 5, 21, 333, '2024-05-03 18:42:15', '2024-05-03 18:42:15'),
(21, 32, 5, 22, 333, '2024-05-03 20:58:29', '2024-05-03 20:58:29'),
(22, 33, 4, 23, 22, '2024-05-06 16:09:56', '2024-05-06 16:09:56'),
(23, 34, 5, 24, 333, '2024-05-06 16:14:10', '2024-05-06 16:14:10'),
(24, 35, 4, 25, 22, '2024-05-06 16:20:02', '2024-05-06 16:20:02'),
(25, 36, 5, 26, 333, '2024-05-06 20:17:01', '2024-05-06 20:17:01'),
(26, 37, 4, 27, 22, '2024-05-06 20:25:31', '2024-05-06 20:25:31'),
(27, 38, 5, 28, 333, '2024-05-07 14:37:44', '2024-05-07 14:37:44'),
(28, 39, 5, 29, 333, '2024-05-07 21:39:57', '2024-05-07 21:39:57'),
(29, 40, 5, 30, 333, '2024-05-08 16:51:13', '2024-05-08 16:51:13'),
(30, 41, 5, 31, 333, '2024-05-09 15:56:23', '2024-05-09 15:56:23'),
(31, 42, 5, 32, 333, '2024-05-09 16:00:43', '2024-05-09 16:00:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `memorials`
--
ALTER TABLE `memorials`
  ADD PRIMARY KEY (`memorial_id`);

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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationships`
--
ALTER TABLE `relationships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_pages`
--
ALTER TABLE `user_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `relationships`
--
ALTER TABLE `relationships`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_pages`
--
ALTER TABLE `user_pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

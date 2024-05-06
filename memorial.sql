-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2024 at 08:52 AM
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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
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
  `audio_id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `media_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int NOT NULL,
  `memorial_id` int DEFAULT NULL,
  `media_type` enum('photo','video') DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `uploaded_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `duration`, `end_date`, `price`, `features`, `description`, `created_at`, `updated_at`) VALUES
(4, 'monthly', '2024-05-29 07:00:00', 22.22, 'All Features', 'Full access to current website features for the duration of your subscription\r\n\r\nRenews monthly.', '2024-05-01 19:37:13', '2024-05-01 19:38:46'),
(5, 'lifetime', '2024-05-23 07:00:00', 333.33, 'All features. Best value', 'Full access to website features and future updates for 100 years.\r\n\r\nThis plan ensures that your legacy page will remain online and accessible for future generations.', '2024-05-01 19:43:28', '2024-05-01 19:43:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `no_of_memorial_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0,1',
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `access_code`, `last_login`, `no_of_memorial_pages`, `is_active`, `relationship`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(27, 'Khadim', 'khadim6m4', 'khadimgmgsolutions@gmail.com', NULL, NULL, '$2a$04$ypqIYzypPK5hbmk9xHj3puvcdEznNr13/E.nGOx.Mi.bNRvOIdMG2', NULL, '1', '1', NULL, 1, NULL, '2024-05-02 20:10:29', '2024-05-02 20:10:29'),
(29, 'Khadim667', 'khadim6674Ba', 'valerichdfsekalina17@gmail.com', NULL, NULL, 'EVqHJbWyqDaG3USt', NULL, '1', '1', NULL, 1, NULL, '2024-05-03 14:39:19', '2024-05-03 14:39:19'),
(31, 'fdsasfdsafdaffd', NULL, 'itwondasdaferfulminds@gmail.com', NULL, NULL, '$2y$10$1EJfnwI5tADc4IytEg3wm.v6ZaZXvle6mptx5HdltBo7I3XyuZhAu', NULL, '1', '1', 'Nibling', 1, NULL, '2024-05-03 18:42:15', '2024-05-03 18:42:15'),
(32, 'azantest009', NULL, 'azantese123@gmail.com', NULL, NULL, '$2y$10$gaYyLWN0fXASeNJpHF9gKO1/vfEXhWYeqAnUa9XJO5TBnSPrcb43q', NULL, '1', '1', 'Child', 1, NULL, '2024-05-03 20:58:29', '2024-05-03 20:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_pages`
--

CREATE TABLE `user_pages` (
  `id` int NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_death` date DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_pages`
--

INSERT INTO `user_pages` (`id`, `first_name`, `last_name`, `date_of_death`, `middle_name`, `date_of_birth`, `memorial_web_address`, `page_type`, `plan_id`, `privacy_policy`, `name_of_card`, `credit_card`, `total_amount`, `name`, `email`, `created_at`, `updated_at`) VALUES
(16, 'Khadim', 'last name', '2024-05-23', 'khoso', '2024-05-28', 'https://khadim-khoso.memorial.com', 'Biography', 5, '1', 'card', '43', 333.33, 'Khadimasdfsa', 'meris75587@lewenbo.com', '2024-05-02 18:18:54', '2024-05-02 18:18:54'),
(17, 'Khadim', 'asdfsa', '2024-06-06', 'hussain', '2024-06-05', 'https://khadim-hussain.memorial.com', 'Biography', 5, '1', 'card', 'credt', 333.33, 'Khadim', 'khadimgmgsolutions@gmail.com', '2024-05-02 20:10:29', '2024-05-02 20:10:29'),
(18, 'azan', 'last name', '2024-05-24', 'ahmed', '2024-06-05', 'https://azan-ahmed.memorial.com', 'Memorial', 5, '1', NULL, NULL, 333.33, 'azantest32', 'azantese5@gmail.com', '2024-05-03 14:33:14', '2024-05-03 14:33:14'),
(19, 'Khadim', 'last name', '2024-05-31', 'khoso', '2024-05-28', 'https://khadim-khoso.memorial.com', 'Memorial', 4, '1', NULL, NULL, 22.22, 'Khadim667', 'valerichdfsekalina17@gmail.com', '2024-05-03 14:39:19', '2024-05-03 14:39:19'),
(22, 'Khadim', 'last name', '2024-05-16', 'khoso', '2024-05-28', 'https://khadim-khoso.memorial.com', 'bio_graphy_page_type', 5, '1', NULL, NULL, 333.33, 'azantest009', 'azantese123@gmail.com', '2024-05-03 20:58:29', '2024-05-03 20:58:29');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `user_id`, `plan_id`, `page_id`, `total_amount`, `created_at`, `updated_at`) VALUES
(16, 27, 5, 17, 333, '2024-05-02 20:10:29', '2024-05-02 14:08:26'),
(17, 28, 5, 18, 333, '2024-05-03 14:33:14', '2024-05-03 07:39:31'),
(18, 29, 4, 19, 22, '2024-05-03 14:39:19', '2024-05-03 14:39:19'),
(19, 30, 5, 20, 333, '2024-05-03 17:21:57', '2024-05-03 17:21:57'),
(20, 31, 5, 21, 333, '2024-05-03 18:42:15', '2024-05-03 18:42:15'),
(21, 32, 5, 22, 333, '2024-05-03 20:58:29', '2024-05-03 20:58:29');

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
  ADD PRIMARY KEY (`audio_id`),
  ADD KEY `memorial_id` (`memorial_id`),
  ADD KEY `media_id` (`media_id`);

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
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `memorial_id` (`memorial_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `memorial_id` (`memorial_id`);

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
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `memorial_id` (`memorial_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_pages`
--
ALTER TABLE `user_pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`memorial_id`) REFERENCES `memorials` (`memorial_id`),
  ADD CONSTRAINT `audio_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`media_id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`memorial_id`) REFERENCES `memorials` (`memorial_id`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`media_id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`memorial_id`) REFERENCES `memorials` (`memorial_id`);

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_ibfk_1` FOREIGN KEY (`memorial_id`) REFERENCES `memorials` (`memorial_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

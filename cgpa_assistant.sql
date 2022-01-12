-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 10:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgpa_assistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_subject_id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL,
  `feedback` enum('Better','Good','Average','Below Avg','Disaster') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disaster',
  `exam_date` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_29_160143_create_subject_tbl', 1),
(6, '2021_12_29_164748_create_products_table', 1),
(7, '2022_01_04_162708_create_exams_table', 1),
(8, '2022_01_05_180134_create_routine_table', 1),
(9, '2022_01_05_180433_create_routines_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) DEFAULT NULL,
  `top` int(11) DEFAULT NULL,
  `expected` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `inactive` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `subject_name`, `credit`, `top`, `expected`, `semester_id`, `user_id`, `inactive`, `created_at`, `updated_at`) VALUES
(1, 'CS60092  INFORMATION RETRIEVAL', 3, 10, 8, 2, 1, 0, '2022-01-10 15:45:10', '2022-01-10 15:48:42'),
(2, 'RX60011  INTRODUCTION TO GROSS NATIONAL HAPPINESS (GNH)', 3, 10, 9, 2, 1, 0, '2022-01-10 15:45:33', '2022-01-10 15:48:56'),
(3, 'CS60078  COMPLEX NETWORK', 3, 10, 9, 2, 1, 0, '2022-01-10 15:45:50', '2022-01-10 15:49:08'),
(4, 'CS60050  MACHINE LEARNING', 3, 10, 8, 2, 1, 0, '2022-01-10 15:46:10', '2022-01-10 15:49:22'),
(5, 'CS60003   HIGH PERFORMANCE COMPUTER ARCHITECTURE', 4, 10, 8, 2, 1, 0, '2022-01-10 15:46:29', '2022-01-10 15:49:57'),
(6, 'CS6810  COMPREHENSIVE VIVA-VOCE', 3, 10, 8, 2, 1, 0, '2022-01-10 15:46:54', '2022-01-10 15:49:42'),
(7, 'CS69002 	SEMINAR-II', 2, 10, 10, 2, 1, 0, '2022-01-10 15:47:21', '2022-01-10 15:47:21'),
(8, 'CS69012 	COMPUTING LAB II', 4, 10, 9, 2, 1, 0, '2022-01-10 15:47:47', '2022-01-10 15:47:47'),
(9, 'CS60005 	FOUNDATIONS OF COMPUTING SCIENCE', 4, 10, 8, 1, 1, 0, '2022-01-10 16:02:23', '2022-01-10 16:02:23'),
(10, 'CS60007 	ALGORITHM DESIGN AND ANALYSIS', 4, 10, 6, 1, 1, 0, '2022-01-10 16:02:44', '2022-01-10 16:02:44'),
(11, 'CS69011 	COMPUTING LAB I', 4, 10, 7, 1, 1, 0, '2022-01-10 16:03:05', '2022-01-10 16:03:05'),
(12, 'CS69101 	SEMINAR-I', 2, 10, 10, 1, 1, 0, '2022-01-10 16:03:27', '2022-01-10 16:03:27'),
(13, 'CS60021 	SCALABLE DATA MINING', 3, 10, 6, 1, 1, 0, '2022-01-10 16:03:47', '2022-01-10 16:03:47'),
(14, 'CS60045 	ARTIFICIAL INTELLIGENCE', 3, 10, 7, 1, 1, 0, '2022-01-10 16:04:09', '2022-01-10 16:04:09'),
(15, 'CS61061 	DATA ANALYTICS', 4, 10, 8, 1, 1, 0, '2022-01-10 16:04:38', '2022-01-10 16:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_subject_id` bigint(20) UNSIGNED NOT NULL,
  `slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture` int(11) NOT NULL DEFAULT 1,
  `weekday` enum('Monday','Tuesday','Wednesday','Thursday','Friday') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Monday',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_subject_id` bigint(20) UNSIGNED NOT NULL,
  `slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture` int(11) NOT NULL DEFAULT 1,
  `weekday` enum('Monday','Tuesday','Wednesday','Thursday','Friday') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Monday',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `f_subject_id`, `slot`, `lecture`, `weekday`, `created_at`, `updated_at`) VALUES
(1, 1, '08:00', 2, 'Monday', '2022-01-10 15:50:54', '2022-01-10 15:50:54'),
(3, 1, '12:00', 1, 'Tuesday', '2022-01-10 15:52:06', '2022-01-10 15:52:06'),
(4, 3, '11:00', 1, 'Monday', '2022-01-10 15:52:57', '2022-01-10 15:52:57'),
(5, 3, '08:00', 2, 'Tuesday', '2022-01-10 15:53:09', '2022-01-10 15:53:09'),
(6, 4, '12:00', 1, 'Wednesday', '2022-01-10 15:53:59', '2022-01-10 15:53:59'),
(7, 4, '11:00', 1, 'Thursday', '2022-01-10 15:54:17', '2022-01-10 15:54:17'),
(8, 4, '09:00', 1, 'Friday', '2022-01-10 15:54:30', '2022-01-10 15:54:30'),
(9, 2, '11:00', 1, 'Wednesday', '2022-01-10 15:55:02', '2022-01-10 15:55:02'),
(10, 2, '12:00', 1, 'Thursday', '2022-01-10 15:55:15', '2022-01-10 15:55:15'),
(11, 2, '08:00', 1, 'Friday', '2022-01-10 15:55:26', '2022-01-10 15:55:26'),
(12, 5, '10:00', 1, 'Monday', '2022-01-10 15:56:04', '2022-01-10 15:56:04'),
(13, 5, '08:00', 2, 'Wednesday', '2022-01-10 15:56:25', '2022-01-10 15:56:25'),
(14, 5, '10:00', 1, 'Thursday', '2022-01-10 15:56:52', '2022-01-10 15:56:52'),
(15, 8, '14:00', 3, 'Wednesday', '2022-01-10 15:59:03', '2022-01-10 15:59:03'),
(16, 8, '14:00', 3, 'Friday', '2022-01-10 15:59:17', '2022-01-10 15:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `top` int(11) DEFAULT NULL,
  `expected` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ashik Khan', 'aasshhik98@gmail.com', NULL, '$2y$10$d1hDYZPrAl/HMJjfXUjl9uldw2lUCUgwy7NE2JIIK7MldS1xGY2X6', NULL, '2022-01-10 15:42:55', '2022-01-10 15:42:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
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
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

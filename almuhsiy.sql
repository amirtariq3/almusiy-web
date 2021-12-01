-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 09:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almuhsiy`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(13, 'slide one', '1609579295.png', '2021-01-02 17:21:35', '2021-01-02 17:21:35'),
(14, 'slide second', '1609579312.png', '2021-01-02 17:21:52', '2021-01-02 17:21:52'),
(15, 'slide third', '1609579328.png', '2021-01-02 17:22:08', '2021-01-02 17:22:08'),
(17, 'lohore', '1609581867.png', '2021-01-02 18:04:27', '2021-01-02 18:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `country`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'wazir', 'khan', 'wazir@gmail.com', 'Antigua & Barbuda', 'as', 'this is the last one', '2021-01-02 22:09:23', '2021-01-02 22:09:23'),
(2, 'wazir', 'khan', 'wazirk27@gmail.com', 'Anguilla', 'subj', 'this is for the last', '2021-01-02 23:01:43', '2021-01-02 23:01:43'),
(3, 'wazir', 'khan', 'wazirk27@gmail.com', 'Anguilla', 'subj', 'this is for the last', '2021-01-02 23:02:22', '2021-01-02 23:02:22'),
(4, 'wazir', 'khan', 'wazirk27@gmail.com', 'Anguilla', 'subj', 'this is for the last', '2021-01-02 23:08:11', '2021-01-02 23:08:11'),
(5, 'wazir', 'khan', 'wazir@gmail.com', 'Algeria', 'as', 'sdf', '2021-01-02 23:08:37', '2021-01-02 23:08:37'),
(6, 'as', 'khan', 'wazir@gmail.com', 'Algeria', 'as', 'this is just for testing', '2021-01-02 23:09:47', '2021-01-02 23:09:47'),
(7, 'wazir', 'khan', 'wazir@gmail.com', 'Aruba', 'sd', 'adasd', '2021-01-02 23:12:26', '2021-01-02 23:12:26'),
(8, 'wazir', 'khan', 'wazirk217@gmail.com', 'Albania', 'as', 'asdasd', '2021-01-02 23:22:42', '2021-01-02 23:22:42'),
(9, 'wazir', 'khan', 'wazirk217@gmail.com', 'Albania', 'as', 'asdasd', '2021-01-02 23:23:02', '2021-01-02 23:23:02'),
(10, 'wazir', 'khan', 'wazirk217@gmail.com', 'Albania', 'as', 'asdasd', '2021-01-02 23:23:11', '2021-01-02 23:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2021_01_01_194242_create_contacts_table', 1),
(5, '2021_01_02_052400_create_banners_table', 2),
(6, '2021_01_02_100919_create_teams_table', 3),
(7, '2021_01_02_173619_create_qout_webs_table', 4);

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
-- Table structure for table `qout_webs`
--

CREATE TABLE `qout_webs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_do` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hosting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_search` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_uniqueness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_solution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_include` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Project_features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hosting_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssl_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_competitor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_pick` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `something_missing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `require_update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_training` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qout_webs`
--

INSERT INTO `qout_webs` (`id`, `name`, `company_name`, `email`, `mobile`, `company_do`, `website_url`, `hosting`, `domain`, `project_deadline`, `project_budget`, `project_type`, `project_target`, `client_target`, `project_offer`, `project_search`, `project_uniqueness`, `project_solution`, `project_include`, `address`, `Project_features`, `images`, `logo`, `hosting_domain`, `ssl_certificate`, `company_logo`, `project_competitor`, `project_pick`, `website_update`, `something_missing`, `require_update`, `project_training`, `created_at`, `updated_at`) VALUES
(1, 'bC0DBoBKG3', 'FhZUlrZiQf', 'a9jh9@g6m8.com', '5529024116', 'SQqw8NE5hK', 'Tdli4rK5h2', 'No', 'Yes', '2021-01-14', '751335', 'I need my company to have a better image online', 'Consumer', 'In their 20s', 'I have the best products on the market', 'asas', 'D0BPPmCb6Z', 'QKRa30nbB9', 'A WordPress-based CMS', 'btzu7OyQrD', 'Search panel', 'My Company', 'My Company', 'Al-Muhsiy Group', 'Al-Muhsiy Group', 'VhniSNl8tx', 'K3JeaLEj8X', '3UrQcuR2tp', 'No', 'IZMWjNI4p9', 'Daily', 'No', '2021-01-03 03:42:01', '2021-01-03 03:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `file`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Aithsam', 'CEO', '1609594066.jpg', 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', '2021-01-02 21:27:46', '2021-01-02 21:27:46'),
(4, 'wazir', 'Software Engineer', '1609594091.jpg', 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', '2021-01-02 21:28:11', '2021-01-02 21:28:11'),
(5, 'Rizwan', 'Software Engineer', '1609594116.png', 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', '2021-01-02 21:28:36', '2021-01-02 21:28:36'),
(6, 'wazir', 'Software Engineer', '1609594140.jpg', 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', '2021-01-02 21:29:00', '2021-01-02 21:29:00'),
(7, 'Rizwan', 'Software Engineer', '1609594186.png', 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', '2021-01-02 21:29:46', '2021-01-02 21:29:46');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$f8HfFxcSZisUNQFCl92uMuuAhZUJ7jKd0KB.XmIVtEXBB/31QzuoK', '3i0wPeTHsckFD1KzlB1qiblrqZwCmoHPuoeUAjomBWR0eOqbsNTPeRvAn9xW', '2021-01-02 04:12:45', '2021-01-02 04:12:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `qout_webs`
--
ALTER TABLE `qout_webs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qout_webs`
--
ALTER TABLE `qout_webs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

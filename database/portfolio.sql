-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 04:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`title`)),
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"tesst\",\"ar\":\"\\u0645\\u0648\\u0633\\u064a\\u0642\\u064a \\u0641\\u0644\\u0648\\u0631\\u064a\\u062f\\u0627\"}', '{\"en\":\"Mission :\\r\\nThe whole world sings.\\r\\n\\r\\nVision :\\r\\nA world where everyone can connect with each other through music and media.\\r\\n\\r\\nDetails :\\r\\nWe believe that music is a universal language that can bring people together.\\r\\n\\r\\nWe provide comprehensive media production and marketing services to help businesses and individuals connect with their audiences.\",\"ar\":\"\\u0645\\u0647\\u0645\\u0647 :\\r\\n\\u0627\\u0644\\u0639\\u0627\\u0644\\u0645 \\u0643\\u0644\\u0647 \\u064a\\u063a\\u0646\\u064a.\\r\\n\\r\\n\\u0631\\u0624\\u064a\\u0629 :\\r\\n\\u0639\\u0627\\u0644\\u0645 \\u062d\\u064a\\u062b \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0644\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639 \\u0628\\u0639\\u0636\\u0647\\u0645 \\u0627\\u0644\\u0628\\u0639\\u0636 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0645\\u0648\\u0633\\u064a\\u0642\\u0649 \\u0648\\u0627\\u0644\\u0648\\u0633\\u0627\\u0626\\u0637.\\r\\n\\r\\n\\u062a\\u0641\\u0627\\u0635\\u064a\\u0644 :\\r\\n\\u0646\\u062d\\u0646 \\u0646\\u0624\\u0645\\u0646 \\u0628\\u0623\\u0646 \\u0627\\u0644\\u0645\\u0648\\u0633\\u064a\\u0642\\u0649 \\u0647\\u064a \\u0644\\u063a\\u0629 \\u0639\\u0627\\u0644\\u0645\\u064a\\u0629 \\u064a\\u0645\\u0643\\u0646\\u0647\\u0627 \\u0623\\u0646 \\u062a\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0646\\u0627\\u0633 \\u0645\\u0639\\u064b\\u0627.\\r\\n\\r\\n\\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u0646\\u062a\\u0627\\u062c \\u0648\\u062a\\u0633\\u0648\\u064a\\u0642 \\u0625\\u0639\\u0644\\u0627\\u0645\\u064a \\u0634\\u0627\\u0645\\u0644\\u0629 \\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0648\\u0627\\u0644\\u0623\\u0641\\u0631\\u0627\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639 \\u062c\\u0645\\u0627\\u0647\\u064a\\u0631\\u0647\\u0645.\"}', '1700920772_hero-bg.jpg', '2023-11-30 09:32:58', '2023-12-09 13:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `behance` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instegram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `location`, `behance`, `facebook`, `instegram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '+02 0109 956 0588', 'TypeYourEmail@gmail.com', '{\"en\":\"Type your location here\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0647\\u0646\\u0627\"}', 'https://www.behance.net/floridamusic1', 'https://www.facebook.com/floridamusic1?mibextid=ZbWKwL', 'https://instagram.com/floridamusic1?igshid=MzRlODBiNWFlZA==', 'https://x.com/Florida_Music1?t=PHeeSx39m0UCP2bjr7ywVg&s=09', NULL, '2023-12-03 03:28:29');

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1701052109_cover.jpg', NULL, '2023-12-05 14:31:33');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_09_210209_create_services_table', 1),
(6, '2023_11_13_031453_create_teams_table', 1),
(7, '2023_11_13_031605_create_portfolios_table', 1),
(8, '2023_11_13_031638_create_contacts_table', 1),
(9, '2023_11_13_031810_create_homes_table', 1),
(10, '2023_11_13_031827_create_abouts_table', 1);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`description`)),
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Type Name Here\",\"ar\":\"\\u0627\\u062f\\u062e\\u0644 \\u0627\\u0633\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0643 \\u0647\\u0646\\u0627\"}', '{\"en\":\"Enter your description here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0647\\u0646\\u0627\"}', '1701443158_portfolio-7.jpg', '2023-12-01 13:05:58', '2023-12-01 13:23:46'),
(2, '{\"en\":\"Type Name\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0633\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0643\"}', '{\"en\":\"Description\",\"ar\":\"\\u0627\\u0644\\u0648\\u0635\\u0641\"}', '1701501324_portfolio-9.jpg', '2023-12-02 05:15:24', '2023-12-02 05:16:25'),
(3, '{\"en\":\"Type Name Here\",\"ar\":\"\\u0627\\u062f\\u062e\\u0644 \\u0627\\u0633\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0643\"}', '{\"en\":\"Enter your description here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0647\\u0646\\u0627\"}', '1701508953_portfolio-3.jpg', '2023-12-02 07:22:33', '2023-12-02 07:22:33'),
(4, '{\"en\":\"Type Name Here\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0633\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0643\"}', '{\"en\":\"Enter your description here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0647\\u0646\\u0627\"}', '1701509020_portfolio-2.jpg', '2023-12-02 07:23:40', '2023-12-02 07:23:40'),
(5, '{\"en\":\"Enter name Here\",\"ar\":\"\\u0627\\u062f\\u062e\\u0644 \\u0627\\u0633\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0643\"}', '{\"en\":\"Enter your description here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0647\\u0646\\u0627\"}', '1701509115_portfolio-8.jpg', '2023-12-02 07:25:15', '2023-12-02 07:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `icon` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`description`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Music production and distribution\",\"ar\":\"\\u0625\\u0646\\u062a\\u0627\\u062c \\u0648\\u062a\\u0648\\u0632\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0648\\u0633\\u064a\\u0642\\u0649\"}', 'bx bx-music', '{\"en\":\"Enter Your Description Here\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u0647\\u0646\\u0627\"}', '2023-12-02 06:02:58', '2023-12-30 21:44:30'),
(2, '{\"en\":\"Event planning and execution\",\"ar\":\"\\u062a\\u062e\\u0637\\u064a\\u0637 \\u0648\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0641\\u0639\\u0627\\u0644\\u064a\\u0627\\u062a\"}', 'bx bx-edit', '{\"en\":\"Enter Your Description Here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u0647\\u0646\\u0627\"}', '2023-12-02 06:50:13', '2023-12-02 07:04:24'),
(3, '{\"en\":\"Advertising and marketing campaigns\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0644\\u0627\\u062a \\u0627\\u0644\\u0625\\u0639\\u0644\\u0627\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642\\u064a\\u0629\"}', 'bx bx-world', '{\"en\":\"Enter Your Description Here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u0647\\u0646\\u0627\"}', '2023-12-02 06:51:36', '2023-12-02 06:51:36'),
(4, '{\"en\":\"Social media management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0648\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a\"}', 'bx bx-calendar', '{\"en\":\"Enter Your Description Here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u0647\\u0646\\u0627\"}', '2023-12-02 06:57:56', '2023-12-02 06:57:56'),
(5, '{\"en\":\"Public relations\",\"ar\":\"\\u0627\\u0644\\u0639\\u0644\\u0627\\u0642\\u0627\\u062a \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', 'bx bx-file', '{\"en\":\"Enter Your Description Here..\",\"ar\":\"\\u0627\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0648\\u0635\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u0647\\u0646\\u0627\"}', '2023-12-02 07:03:27', '2023-12-02 07:03:27'),
(8, '{\"en\":\"Music production and distribution\",\"ar\":\"64564654\"}', '46456464', '{\"en\":\"646544654\",\"ar\":\"6464546\"}', '2023-12-30 21:48:50', '2023-12-30 21:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`first_name`)),
  `last_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`last_name`)),
  `job_title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`job_title`)),
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `first_name`, `last_name`, `job_title`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"taha\",\"ar\":\"\\u0627\\u062f\\u062e\\u0644\"}', '{\"en\":\"karam\",\"ar\":\"\\u0627\\u0633\\u0645\"}', '{\"en\":\"Job Title\",\"ar\":\"\\u0627\\u0644\\u0645\\u0633\\u0645\\u064a \\u0627\\u0644\\u0648\\u0638\\u064a\\u0641\\u064a\"}', '1701510095_team-3.jpg', '2023-12-01 12:16:08', '2023-12-09 13:16:39'),
(2, '{\"en\":\"Type\",\"ar\":\"\\u0623\\u062f\\u062e\\u0644\"}', '{\"en\":\"Name\",\"ar\":\"\\u0627\\u0633\\u0645\"}', '{\"en\":\"Job Title\",\"ar\":\"\\u0627\\u0644\\u0645\\u0633\\u0645\\u064a \\u0627\\u0644\\u0648\\u0638\\u064a\\u0641\\u064a\"}', '1701509346_testimonials-4.jpg', '2023-12-02 07:29:06', '2023-12-02 07:29:06'),
(3, '{\"en\":\"Type\",\"ar\":\"\\u0627\\u062f\\u062e\\u0644\"}', '{\"en\":\"Name\",\"ar\":\"\\u0627\\u0633\\u0645\"}', '{\"en\":\"Job Title\",\"ar\":\"\\u0627\\u0644\\u0645\\u0633\\u0645\\u064a \\u0627\\u0644\\u0648\\u0638\\u064a\\u0641\\u064a\"}', '1701509405_team-1.jpg', '2023-12-02 07:30:05', '2023-12-02 07:30:05'),
(4, '{\"en\":\"Type\",\"ar\":\"\\u0627\\u062f\\u062e\\u0644\"}', '{\"en\":\"Name\",\"ar\":\"\\u0627\\u0633\\u0645\"}', '{\"en\":\"Job Title\",\"ar\":\"\\u0627\\u0644\\u0645\\u0633\\u0645\\u064a \\u0627\\u0644\\u0648\\u0638\\u064a\\u0641\\u064a\"}', '1701509469_team-2.jpg', '2023-12-02 07:31:09', '2023-12-02 07:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdelrahman Karam', 'admin_email@gmail.com', NULL, '$2y$12$3YdQ7GV1Mdac/Qm/Qdgms.4Ww3ENxH/zibsdqsOBAnNdTrq5DJhE6', NULL, '2023-11-30 08:27:09', '2023-11-30 08:27:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
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
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

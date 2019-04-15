-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 10:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'Sylhet', 3100, '2019-03-22 22:16:33', '2019-03-22 22:16:33'),
(2, 'Dhaka', 1205, '2019-03-22 22:16:43', '2019-03-22 22:16:43'),
(3, 'Sylhet Rsdgsdhghsd', 31052, '2019-04-07 16:06:07', '2019-04-07 16:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', '2019-03-23 12:43:13', '2019-03-23 12:43:13'),
(2, 'Canada', '2019-03-23 12:43:17', '2019-03-23 12:43:17'),
(3, 'United Kingdom', '2019-03-23 12:43:28', '2019-03-23 12:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name`, `created_at`, `updated_at`) VALUES
(1, 'Planning', '2019-03-20 11:38:15', '2019-03-20 11:38:15'),
(2, 'Development', '2019-03-20 11:38:28', '2019-03-20 11:38:28'),
(3, 'Technology', '2019-03-20 11:38:43', '2019-03-20 11:38:43'),
(4, 'Others', '2019-03-20 11:38:55', '2019-03-30 02:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `div_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `div_name`, `created_at`, `updated_at`) VALUES
(2, 'Project Planning', '2019-03-20 11:39:30', '2019-03-20 11:39:30'),
(3, 'Market Analysis', '2019-03-20 11:39:52', '2019-03-20 11:39:52'),
(4, 'UX & UI Design', '2019-03-20 11:40:19', '2019-03-20 11:40:19'),
(5, 'Mobile Apps & Web', '2019-03-20 11:40:43', '2019-03-20 11:40:43'),
(6, 'Web Design & Dev', '2019-03-20 11:41:07', '2019-03-20 11:41:07'),
(7, 'Enterprise Applications', '2019-03-20 11:41:41', '2019-03-20 11:41:41'),
(8, 'Mobile Games', '2019-03-20 11:41:56', '2019-03-20 11:41:56'),
(9, 'Legacy Migration', '2019-03-20 11:42:19', '2019-03-20 11:42:19'),
(10, 'Wearable Applications', '2019-03-20 11:43:01', '2019-03-20 11:43:01'),
(11, 'Web Marketing', '2019-03-20 11:43:37', '2019-03-20 11:43:37'),
(12, 'Localization', '2019-03-20 11:45:01', '2019-03-20 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `div_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `father_name`, `email`, `number`, `address`, `blood`, `nid`, `gender`, `salary_id`, `dep_id`, `div_id`, `city_id`, `country_id`, `join_date`, `birth_date`, `picture`, `created_at`, `updated_at`) VALUES
(5, 'Mr Abdul Mannan', 'Hridoy', 'Md Rafiqul', 'admin4@gmail.com', '01772434208', 'Bondor Bazar', 'A-', '7824872433', 'Male', 5, 4, 12, 2, 3, '2019-03-19', '2019-03-30', '2019-04-07-b0Xtk65VVY.png', '2019-03-29 12:27:41', '2019-04-07 16:05:47'),
(9, 'Mr Md', 'Hridoy Khan', 'h', 'admin54@gmail.com', '55555555555', 'Bondor Bazar dfgd', 'A-', '5555555555', 'Male', 5, 4, 12, 2, 3, '2019-04-18', '2019-04-25', NULL, '2019-04-07 12:43:21', '2019-04-07 12:43:56');

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
(3, '2019_03_07_092700_create_city_table', 2),
(4, '2019_03_07_173904_create_table_cities', 3),
(5, '2019_03_12_161857_create_table_countries', 4),
(6, '2019_03_12_164640_create_table_countries', 5),
(7, '2019_03_12_165916_create_table_countries', 6),
(8, '2019_03_12_170306__create_table_countries', 7),
(9, '2019_03_13_181522__create_table_salaries', 8),
(10, '2019_03_14_175554__create_table_departments', 9),
(11, '2019_03_14_192027__create_table_divisions', 10),
(12, '2019_03_17_194813__create_table_employees', 11),
(13, '2019_03_23_173512_create_employees_table', 12),
(14, '2019_03_23_182412_create_employees_table', 13),
(15, '2019_03_23_190757_create_employees_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `salary_amount`, `created_at`, `updated_at`) VALUES
(1, 35000, '2019-03-23 12:42:25', '2019-03-23 12:42:25'),
(2, 28000, '2019-03-23 12:42:34', '2019-03-23 12:42:34'),
(3, 69000, '2019-03-23 12:42:41', '2019-03-23 12:42:41'),
(4, 32000, '2019-03-23 12:42:49', '2019-03-23 12:42:49'),
(5, 45000, '2019-03-23 12:42:55', '2019-03-23 12:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, 'Mr Hridoy', 'admin@gmail.com', NULL, '$2y$10$gxUE8qjSIxniHci9JJiaEefD0I5O0RdByD30.gfj2gK2XRyr/hHLC', 'nKWStz9ubwq4V9QeW0uYwrqzW1WMwRkJXTXEYeERBhzjHFmi3DZNPoc4NnQo', '2019-04-07 12:06:18', '2019-04-07 12:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

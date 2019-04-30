-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 07:17 PM
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
-- Database: `new`
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
(1, 'Sylhet', 3100, '2019-04-16 03:58:55', '2019-04-16 03:58:55'),
(2, 'Dhaka', 1205, '2019-04-16 03:59:02', '2019-04-16 03:59:02');

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
(1, 'Bangladesh', '2019-04-16 03:59:10', '2019-04-16 03:59:10');

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
(4, 'Planning', '2019-04-16 04:10:05', '2019-04-16 04:10:05'),
(5, 'Development', '2019-04-16 04:10:13', '2019-04-16 04:10:13'),
(6, 'Technology', '2019-04-16 04:10:22', '2019-04-16 04:10:22'),
(7, 'Others', '2019-04-16 04:10:31', '2019-04-16 04:10:31');

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
(3, 'Project Planning', '2019-04-16 04:07:45', '2019-04-16 04:07:45'),
(4, 'Market Analysis', '2019-04-16 04:08:11', '2019-04-16 04:08:11'),
(5, 'UX & UI Design', '2019-04-16 04:08:20', '2019-04-16 04:08:20'),
(6, 'Mobile Apps & Web', '2019-04-16 04:08:30', '2019-04-16 04:08:30'),
(7, 'Web Design & Dev', '2019-04-16 04:08:39', '2019-04-16 04:08:39'),
(8, 'Enterprise Applications', '2019-04-16 04:08:49', '2019-04-16 04:08:49'),
(9, 'Mobile Games', '2019-04-16 04:08:57', '2019-04-16 04:08:57'),
(10, 'Legacy Migration', '2019-04-16 04:09:05', '2019-04-16 04:09:05'),
(11, 'Wearable Applications', '2019-04-16 04:09:19', '2019-04-16 04:09:19'),
(12, 'Web Marketing', '2019-04-16 04:09:28', '2019-04-16 04:09:28'),
(13, 'Localization', '2019-04-16 04:09:37', '2019-04-16 04:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `employees` (`id`, `emp_id`, `first_name`, `last_name`, `father_name`, `email`, `number`, `address`, `blood`, `nid`, `gender`, `salary_id`, `dep_id`, `div_id`, `city_id`, `country_id`, `join_date`, `birth_date`, `picture`, `created_at`, `updated_at`) VALUES
(2, '161-115-126', 'Mr Md Abdul Mannan', 'Hrid', 'Md Rafiqul', 'hridoyking5464@gmail.com', '01772434208', 'Bondor Bazar', 'A-', '5146488469565', 'Male', 6, 5, 6, 1, 1, '2019-04-01', '1995-06-17', '2019-04-16-7zTp5pNt50.jpg', '2019-04-16 11:23:44', '2019-04-27 01:11:03'),
(4, '161-115-128', 'Ali', 'Ahmed', 'Md', 'alicse128@gmail.com', '01546558135', 'Biyanibazar', 'O+', '46488469565', 'Male', 6, 6, 11, 2, 1, '2019-04-02', '1996-01-06', '2019-04-27-vfR8lS6O8K.jpg', '2019-04-26 23:56:04', '2019-04-26 23:56:04'),
(5, '161-115-150', 'Yeamin', 'Ahmed', 'Mr Khan', 'yeamin@gmail.com', '01745659541', 'Modina Market', 'AB+', '52345678922222', 'Male', 7, 7, 13, 2, 1, '2019-04-04', '1995-02-06', '2019-04-27-DGwD5O0f16.JPG', '2019-04-26 23:59:30', '2019-04-26 23:59:30'),
(6, '161-115-151', 'Mr Alim', 'Uddin', 'Mr Josim', 'alim@gmail.com', '01755698742', 'Modina Market', 'O+', '1545465262888', 'Male', 5, 4, 3, 2, 1, '2019-04-08', '1998-04-01', '2019-04-27-Y1PV6uelv3.png', '2019-04-27 00:06:44', '2019-04-27 00:06:44'),
(7, '161-115-138', 'Mr Md Hasan', 'Ahmed', 'Md Korim', 'hasan@yahoo.com', '01756548562', 'Uposhor Sylhet', 'O+', '589567892222222', 'Male', 5, 5, 9, 1, 1, '2019-04-03', '1997-02-04', '2019-04-27-EMbtmDoCi9.jpg', '2019-04-27 00:12:39', '2019-04-27 00:12:39');

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
(3, '2019_03_07_173904_create_table_cities', 1),
(4, '2019_03_12_170306__create_table_countries', 1),
(5, '2019_03_13_181522__create_table_salaries', 1),
(6, '2019_03_14_175554__create_table_departments', 1),
(7, '2019_03_14_192027__create_table_divisions', 1),
(8, '2019_03_23_190757_create_employees_table', 1);

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
(3, 35000, '2019-04-16 04:10:45', '2019-04-16 04:10:45'),
(4, 50000, '2019-04-16 04:10:56', '2019-04-16 04:10:56'),
(5, 25500, '2019-04-16 04:11:02', '2019-04-16 04:11:02'),
(6, 65000, '2019-04-16 04:11:09', '2019-04-16 04:11:09'),
(7, 42500, '2019-04-16 04:11:15', '2019-04-16 04:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Mr Hridoy', 'admin@gmail.com', NULL, '$2y$10$AexrpQ9QrL9Yh4Uomo/6AeYF4yXzAUS7crThRDTSRnoeHovpod2/y', 'O9VYf99HUwaDxp5ybycCMuAxWr73ZTqKhf85JaRJy0yk9HMP7NMJYkQqajBI', '2019-04-16 03:57:53', '2019-04-16 03:57:53');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 09:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

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
-- Table structure for table `about_mes`
--

CREATE TABLE `about_mes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_mes`
--

INSERT INTO `about_mes` (`id`, `name`, `address`, `study`, `degree`, `mail`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Rahad Amin', 'House#27, Road#09, Sector#11, Uttara', 'Yangzhou University', 'Engineering', 'rahadamin00@gmail.com', '+8801682320494', '<p><br></p><p><font color=\"#7d7789\" face=\"Open Sans\"><span style=\"font-size: 15px;\">Hello there! My name is <b>Md Rahad Amin</b>. I am an entrepreneur, and I\'m very passionate and dedicated to my work. With five years’ experience as a professional a graphic designer &amp; importer I have acquired the skills and knowledge necessary to make your order a success.</span></font><br></p>', '2022-02-01 01:01:28', '2022-02-16 02:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `name`, `email`, `phone`, `address`, `image`, `role`, `status`, `created_by`, `edited_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Rahad Amin', 'superadmin@gmail.com', NULL, NULL, 'Rahad Amin_1.png', 'SuperAdmin', 'Active', 'Ibrahim', NULL, NULL, '2022-01-31 13:25:25', '2022-02-16 01:57:18'),
(2, 'Admin', 'admin@gmail.com', NULL, NULL, 'default.png', 'Admin', 'Active', 'Ibrahim', NULL, NULL, '2022-01-31 13:25:25', '2022-01-31 13:25:25'),
(3, 'Moderator', 'moderator@gmail.com', NULL, NULL, 'default.png', 'Moderator', 'Active', 'Ibrahim', NULL, NULL, '2022-01-31 13:25:26', '2022-01-31 13:25:26'),
(4, 'Baraka Clinton', 'abc@gmail.com', NULL, NULL, 'default.png', 'Moderator', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-02-16 02:37:23', '2022-02-16 02:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Inventore.', 'superadmin@gmail.com', 'Deleniti et facilis et. Eos expedita nihil soluta et illo.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(2, 'Nihil.', 'superadmin@gmail.com', 'Aliquam in qui aut qui doloremque et earum. Aperiam ut eaque corrupti itaque.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(3, 'Rerum ut.', 'superadmin@gmail.com', 'Possimus voluptas voluptatem quos. Consequuntur amet quaerat suscipit rerum ea impedit eligendi.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(4, 'Ut.', 'superadmin@gmail.com', 'Neque nemo error atque. Sed sit unde consectetur voluptatem. Natus ipsa inventore ut dolorum velit.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(5, 'Saepe.', 'superadmin@gmail.com', 'Cum quisquam ut natus enim. Consequuntur praesentium consequatur quia nemo sint dolores vero.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(6, 'Pariatur.', 'superadmin@gmail.com', 'Est qui similique esse possimus. Eveniet eum quia nobis et et. Ut facilis tempore sit deleniti.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(7, 'Delectus.', 'superadmin@gmail.com', 'Molestiae magni impedit vitae eos. Perspiciatis quia et qui quisquam.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(8, 'Assumenda.', 'superadmin@gmail.com', 'Est earum sit harum at atque. Velit molestiae est officia et nihil qui. Et enim et voluptatem.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(9, 'Dolorum.', 'superadmin@gmail.com', 'Ratione ut odit quod. Delectus aliquid error vel nihil sed.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(10, 'Ipsum.', 'superadmin@gmail.com', 'Ea quia et rerum velit. Ab nihil sequi voluptatem sed nobis ut dignissimos illum.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(11, 'Sed est.', 'superadmin@gmail.com', 'Rerum harum quia qui possimus. Aut sequi vero consequatur voluptatem aut est ipsam.', '1', '2022-02-08 17:55:35', '2022-02-08 17:55:35'),
(12, 'Non rerum.', 'superadmin@gmail.com', 'Fugit nam quod voluptate iusto inventore molestiae. Fugiat consequatur quisquam omnis magnam.', '3', '2022-02-08 17:55:35', '2022-02-14 09:31:36'),
(14, 'Sunt.', 'superadmin@gmail.com', 'Nobis et molestiae rem cum non qui eum. Ea quisquam provident nobis provident voluptas.', '3', '2022-02-08 17:55:35', '2022-02-14 04:56:17'),
(17, 'Sed ad ea.', 'superadmin@gmail.com', 'Vel voluptas fugiat incidunt eius excepturi. Error aperiam perferendis incidunt est quis.', '2', '2022-02-08 17:55:36', '2022-02-14 04:55:55'),
(18, 'Aut.', 'superadmin@gmail.com', 'Quia ratione iure autem quia earum perferendis voluptatem. Velit asperiores error voluptas ea.', '3', '2022-02-08 17:55:36', '2022-02-09 08:14:42'),
(20, 'Eligendi.', 'superadmin@gmail.com', 'Debitis corporis molestias ea minus et architecto. Nemo error quia quisquam.', '2', '2022-02-08 17:55:36', '2022-02-14 04:43:30'),
(23, 'fg', 'ffgf@gmail.com', 'fggfg', '3', '2022-02-08 18:06:04', '2022-02-09 17:44:39'),
(24, 'fg', 'ffgf@gmail.com', 'fggfg', '3', '2022-02-08 18:13:46', '2022-02-09 07:34:00'),
(25, 'fgbfh', 'fggf@gmail.com', 'sddd', '3', '2022-02-08 18:14:29', '2022-02-09 07:31:50'),
(26, 'ghfg', 'fgf@gmail.com', 'sdd', '2', '2022-02-08 18:22:56', '2022-02-14 09:31:55'),
(34, 'Nayem Howlader', 'nayem@gmail.com', 'dsfsdfdfg', '1', '2022-02-14 09:33:30', '2022-02-14 09:33:30'),
(35, 'gvhfgh', 'vdfg@gmail.com', 'dsfgedrtre', '2', '2022-02-14 09:34:47', '2022-02-15 01:55:35'),
(36, 'nayem howlader', 'nayem@gmail.com', 'dsfdfrd', '1', '2022-02-15 05:24:03', '2022-02-15 05:24:03'),
(37, 'redtgertg', 'dffd@gmail.com', 'sdfdf', '2', '2022-02-15 05:25:44', '2022-02-16 03:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institute`, `degree`, `year`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'Al Sabah academy', 'PSC', '2009 – PSC', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:10:58', '2022-02-15 06:46:57'),
(2, 'Milestone Scholl & College', 'JSC, SSC, HSC', '2012 – 2017', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:11:28', '2022-02-15 06:48:17'),
(3, 'Yangzhou University', 'Bachelor of Science & Engineering', '2018 – 2022', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:11:54', '2022-02-15 06:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `institute`, `position`, `year`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'Graphics Design', 'CEO', '2012 - Running', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:23:08', '2022-02-15 06:55:30'),
(2, 'Website & Software Development', 'CEO', '2021 - Running', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:24:00', '2022-02-15 06:54:40'),
(3, 'Import Business', 'Owner', '2018 - running', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:24:24', '2022-02-15 06:52:40');

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
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `title`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(6, 'Design', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:36:14', '2022-02-15 06:36:14'),
(7, 'Development', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:36:25', '2022-02-15 06:36:25'),
(8, 'Printing', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:36:34', '2022-02-15 06:36:34'),
(9, 'Traveling', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:36:43', '2022-02-15 06:36:43'),
(10, 'Folk Music', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:36:55', '2022-02-15 06:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `level`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'Chinese', 0.20, 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 05:25:36', '2022-02-15 06:45:28'),
(2, 'English', 0.70, 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 05:26:12', '2022-02-15 06:45:08'),
(3, 'Bangla', 0.90, 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 05:26:50', '2022-02-15 06:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `main_contents`
--

CREATE TABLE `main_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_contents`
--

INSERT INTO `main_contents` (`id`, `title`, `sub_title1`, `sub_title2`, `sub_title3`, `created_at`, `updated_at`) VALUES
(1, 'MD RAHAD AMIN', 'Entrepreneur', 'Importer', 'Graphics Designer', '2022-01-31 13:25:26', '2022-02-15 06:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `message_replays`
--

CREATE TABLE `message_replays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `replay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_replays`
--

INSERT INTO `message_replays` (`id`, `message_id`, `email`, `replay`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '20', 'superadmin@gmail.com', 'gtfyh', 'superadmin@gmail.com', '2022-02-10 19:16:03', '2022-02-10 19:16:03'),
(2, '15', 'superadmin@gmail.com', 'dfxdgtdrfg', 'superadmin@gmail.com', '2022-02-10 19:18:53', '2022-02-10 19:18:53'),
(3, '15', 'superadmin@gmail.com', 'dfghfg', 'superadmin@gmail.com', '2022-02-10 19:20:56', '2022-02-10 19:20:56'),
(4, '33', '16101193@uap-bd.edu', 'yghjtyuhtyjutyj', 'superadmin@gmail.com', '2022-02-10 19:23:00', '2022-02-10 19:23:00'),
(5, '33', '16101193@uap-bd.edu', 'fdrgr', 'superadmin@gmail.com', '2022-02-10 19:26:08', '2022-02-10 19:26:08'),
(6, '20', 'superadmin@gmail.com', 'sdfdsfd', 'superadmin@gmail.com', '2022-02-14 03:43:14', '2022-02-14 03:43:14'),
(7, '20', 'superadmin@gmail.com', 'sdfffd', 'superadmin@gmail.com', '2022-02-14 04:47:17', '2022-02-14 04:47:17'),
(8, '20', 'superadmin@gmail.com', 'sdfffd', 'superadmin@gmail.com', '2022-02-14 04:49:41', '2022-02-14 04:49:41'),
(9, '20', 'superadmin@gmail.com', 'sdfffd', 'superadmin@gmail.com', '2022-02-14 04:51:08', '2022-02-14 04:51:08'),
(10, '20', 'superadmin@gmail.com', 'sdfffd', 'superadmin@gmail.com', '2022-02-14 04:51:31', '2022-02-14 04:51:31'),
(11, '19', 'superadmin@gmail.com', 'dfxdgtdrfg', 'superadmin@gmail.com', '2022-02-14 04:53:23', '2022-02-14 04:53:23'),
(12, '14', 'superadmin@gmail.com', 'yghjtyuhtyjutyj', 'superadmin@gmail.com', '2022-02-14 04:56:11', '2022-02-14 04:56:11'),
(13, '12', 'superadmin@gmail.com', 'yghjtyuhtyjutyj', 'superadmin@gmail.com', '2022-02-14 09:31:31', '2022-02-14 09:31:31'),
(14, '37', 'dffd@gmail.com', 'dsfdfg', 'superadmin@gmail.com', '2022-02-15 05:31:23', '2022-02-15 05:31:23'),
(15, '37', 'dffd@gmail.com', 'fgfhfgh', 'superadmin@gmail.com', '2022-02-15 06:20:17', '2022-02-15 06:20:17');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_12_29_195319_create_admin_profiles_table', 1),
(11, '2021_12_30_005638_create_verify_users_table', 1),
(12, '2022_01_31_044345_create_main_contents_table', 1),
(13, '2022_02_01_061655_create_about_mes_table', 2),
(14, '2022_02_02_045108_create_portfolio_categories_table', 3),
(16, '2022_02_02_054024_create_portfolio_categories_table', 5),
(18, '2022_02_02_052843_create_portfolios_table', 6),
(20, '2022_02_08_084510_create_services_table', 7),
(21, '2022_02_08_095219_create_contacts_table', 8),
(31, '2022_02_08_184558_create_message_replays_table', 9),
(32, '2022_02_08_191545_create_interests_table', 9),
(33, '2022_02_08_195813_create_programmings_table', 9),
(34, '2022_02_08_205109_create_languages_table', 9),
(35, '2022_02_08_212512_create_education_table', 9),
(36, '2022_02_08_230253_create_experiences_table', 9),
(37, '2022_02_08_235856_create_partners_table', 9),
(38, '2022_02_09_092926_create_testimonials_table', 9),
(39, '2022_02_13_195107_create_news_categories_table', 10),
(40, '2022_02_13_195336_create_news_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_name`, `title`, `details`, `image`, `created_by`, `edited_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Audio', 'abcd', 'We live in a<u> world where we need to move</u> quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification. Mockups are useful both for the creative phase of the project - for instance when you\'re trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.', '2.jpg', 'SuperAdmin', 'SuperAdmin', 'Active', '2022-02-14 04:40:36', '2022-02-15 07:23:41'),
(3, 'Video', 'Abdbcsd', 'We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification. Mockups are useful both for the creative phase of the project - for instance when you\'re trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.', '_3.png', 'SuperAdmin', 'SuperAdmin', 'Active', '2022-02-14 07:22:27', '2022-02-14 08:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `category`, `status`, `created_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(2, 'Video', 'Active', 'Nayem', NULL, '2022-02-14 04:02:40', '2022-02-14 04:02:40'),
(4, 'Audio', 'Active', 'SuperAdmin', NULL, '2022-02-14 04:40:16', '2022-02-14 04:40:16'),
(5, 'Youtube', 'Active', 'SuperAdmin', 'SuperAdmin', '2022-02-14 07:21:15', '2022-02-16 03:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(2, '2.png', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 03:31:36', '2022-02-14 06:28:24'),
(3, '1644791315.png', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 06:28:35', '2022-02-14 06:28:35'),
(4, '1644791322.png', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 06:28:42', '2022-02-14 06:28:42'),
(5, '1644791330.png', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 06:28:50', '2022-02-14 06:28:50'),
(6, '1644791343.png', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 06:29:03', '2022-02-14 06:29:03');

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category_name`, `title`, `details`, `image`, `created_by`, `edited_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'web', 'Graphics Design', 'We live in a<b> world where we </b>need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification. Mockups are useful both for the creative phase of the project - for instance when you\'re trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.', '2.jpg', 'SuperAdmin', 'SuperAdmin', 'Active', '2022-02-02 05:41:50', '2022-02-15 07:16:20'),
(7, 'Video', 'Web Design', 'We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification. Mockups are useful both for the creative phase of the project - for instance when you\'re trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.', '7.jpg', 'SuperAdmin', 'SuperAdmin', 'Active', '2022-02-14 02:05:59', '2022-02-14 08:41:41'),
(9, 'Audio', 'Web Development', 'We live in a world <b>where we need to move qui</b>ckly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification. Mockups are useful both for the creative phase of the project - for instance when you\'re trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.', '9.JPG', 'superadmin@gmail.com', 'SuperAdmin', 'Active', '2022-02-14 03:15:59', '2022-02-15 07:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `category`, `status`, `created_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(9, 'Video', 'Deactive', 'SuperAdmin', 'SuperAdmin', '2022-02-03 03:01:12', '2022-02-14 04:33:43'),
(10, 'Audio', 'Active', 'SuperAdmin', NULL, '2022-02-14 04:33:58', '2022-02-14 04:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `programmings`
--

CREATE TABLE `programmings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmings`
--

INSERT INTO `programmings` (`id`, `title`, `level`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'Source & Shipping', 90, 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 05:18:24', '2022-02-15 06:43:38'),
(2, 'Graphics Design', 80, 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 05:18:39', '2022-02-15 06:43:13'),
(3, 'UI/UX', 40, 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 05:18:59', '2022-02-15 06:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(27, 'Graphics Design', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:38:50', '2022-02-15 06:38:50'),
(28, 'Import', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:39:02', '2022-02-15 06:39:02'),
(29, 'Sourcing', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:39:09', '2022-02-15 06:39:09'),
(30, 'Shipping', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:39:17', '2022-02-15 06:39:17'),
(31, 'Trading', 'Active', 'superadmin@gmail.com', NULL, '2022-02-15 06:39:26', '2022-02-15 06:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `desination`, `details`, `status`, `added_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(11, 'Baraka Clinton', 'English Teacher', 'I had a little problem and the support was just awesome to quickly solve the situation. And keep going on.', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 06:40:31', '2022-02-14 06:40:31'),
(12, 'Armin Van Buuren', 'Content Manager', 'I had a little problem and the support was just awesome to quickly solve the situation. And keep going on.', 'Active', 'superadmin@gmail.com', NULL, '2022-02-14 06:41:25', '2022-02-14 06:41:25'),
(13, 'Alexander Walker', 'Graphics Designer', 'I had a little problem and the support was just awesome to quickly solve the situation. And keep going on.', 'Active', 'superadmin@gmail.com', 'superadmin@gmail.com', '2022-02-14 06:41:57', '2022-02-14 06:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SuperAdmin',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin@gmail.com', '2022-01-31 13:25:25', '$2y$10$7G7izfPgYBlLjxjFHS1DEeJ1k4niwn94ZHGrVNzxa3RzJ215utIGW', 'SuperAdmin', 'Active', NULL, NULL, '2022-01-31 13:25:25', '2022-01-31 13:25:25'),
(2, 'admin@gmail.com', '2022-01-31 13:25:25', '$2y$10$tcCDr3UPOBetLAU/cQRO/OzTplCDUo43bwV5EsfK7DGC1oy.3.4rG', 'Admin', 'Active', NULL, NULL, '2022-01-31 13:25:25', '2022-01-31 13:25:25'),
(3, 'moderator@gmail.com', '2022-01-31 13:25:26', '$2y$10$E8BjXChKyBNZWKfV1JbUXePabZSPcHe23T6kRQwteB8CldTNbQvFC', 'Moderator', 'Active', NULL, NULL, '2022-01-31 13:25:26', '2022-01-31 13:25:26'),
(4, 'abc@gmail.com', NULL, '$2y$10$F4TrY0qXYJbZQeAeKpc8qerSXLeB6P1FZuv8sy1BEGhq4GjxUTdK6', 'Moderator', 'Active', NULL, NULL, '2022-02-16 02:37:23', '2022-02-16 02:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5XamVGQ71X9s3hlbC8WQHIkOK98hrrS5bafDmUjoLsxAI9DQzFayum6fTWJB', 4, '2022-02-16 02:37:23', '2022-02-16 02:37:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_mes`
--
ALTER TABLE `about_mes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_profiles_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_contents`
--
ALTER TABLE `main_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_replays`
--
ALTER TABLE `message_replays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmings`
--
ALTER TABLE `programmings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_mes`
--
ALTER TABLE `about_mes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_contents`
--
ALTER TABLE `main_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message_replays`
--
ALTER TABLE `message_replays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `programmings`
--
ALTER TABLE `programmings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

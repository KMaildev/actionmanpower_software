-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2022 at 08:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `actionmanpower_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-06T04:25:14.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-05T02:04:58.000000Z\"}}', '2022-07-05 21:55:14', '2022-07-05 21:55:14'),
(2, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-10T17:49:27.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-06T04:25:14.000000Z\"}}', '2022-07-10 11:19:27', '2022-07-10 11:19:27'),
(3, 'passports_log', 'created', 'App\\Models\\Passport', 14, 'App\\User', 1, '{\"attributes\":{\"name\":\"asf\",\"father_name\":\"asfd\",\"nrc\":\"asdf\",\"date_of_birth\":\"asdf\",\"passport\":\"asdf\",\"passport_date\":\"asdf\",\"local_agent_name\":\"asdf\",\"phone\":\"asdf\",\"address\":\"fds\",\"gender\":\"male\",\"remark\":\"asdf\",\"join_date\":\"2022-07-10\",\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"asdf\",\"created_at\":\"2022-07-10T17:58:30.000000Z\",\"updated_at\":\"2022-07-10T17:58:30.000000Z\"}}', '2022-07-10 11:28:30', '2022-07-10 11:28:30'),
(4, 'passports_log', 'updated', 'App\\Models\\Passport', 14, 'App\\User', 1, '{\"attributes\":{\"name\":\"asf\",\"father_name\":\"asfd\",\"nrc\":\"asdf\",\"date_of_birth\":\"asdf\",\"passport\":\"asdf\",\"passport_date\":\"asdf\",\"local_agent_name\":\"asdf\",\"phone\":\"asdf\",\"address\":\"fds\",\"gender\":\"male\",\"remark\":\"asdf\",\"join_date\":\"2022-07-10\",\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"asdf\",\"created_at\":\"2022-07-10T17:58:30.000000Z\",\"updated_at\":\"2022-07-10T18:03:41.000000Z\"},\"old\":{\"name\":\"asf\",\"father_name\":\"asfd\",\"nrc\":\"asdf\",\"date_of_birth\":\"asdf\",\"passport\":\"asdf\",\"passport_date\":\"asdf\",\"local_agent_name\":\"asdf\",\"phone\":\"asdf\",\"address\":\"fds\",\"gender\":\"male\",\"remark\":\"asdf\",\"join_date\":\"2022-07-10\",\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"asdf\",\"created_at\":\"2022-07-10T17:58:30.000000Z\",\"updated_at\":\"2022-07-10T17:58:30.000000Z\"}}', '2022-07-10 11:33:41', '2022-07-10 11:33:41'),
(5, 'passports_log', 'updated', 'App\\Models\\Passport', 14, 'App\\User', 1, '{\"attributes\":{\"name\":\"asf\",\"father_name\":\"asfd\",\"nrc\":\"asdf\",\"date_of_birth\":\"asdf\",\"passport\":\"asdf\",\"passport_date\":\"asdf\",\"local_agent_name\":\"asdf\",\"phone\":\"asdf\",\"address\":\"fds\",\"gender\":\"male\",\"remark\":\"asdf\",\"join_date\":\"2022-07-10\",\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"asdf\",\"created_at\":\"2022-07-10T17:58:30.000000Z\",\"updated_at\":\"2022-07-10T18:03:48.000000Z\"},\"old\":{\"name\":\"asf\",\"father_name\":\"asfd\",\"nrc\":\"asdf\",\"date_of_birth\":\"asdf\",\"passport\":\"asdf\",\"passport_date\":\"asdf\",\"local_agent_name\":\"asdf\",\"phone\":\"asdf\",\"address\":\"fds\",\"gender\":\"male\",\"remark\":\"asdf\",\"join_date\":\"2022-07-10\",\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"asdf\",\"created_at\":\"2022-07-10T17:58:30.000000Z\",\"updated_at\":\"2022-07-10T18:03:41.000000Z\"}}', '2022-07-10 11:33:48', '2022-07-10 11:33:48'),
(6, 'passports_log', 'updated', 'App\\Models\\Passport', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Eh Do War\",\"father_name\":\"U Saw Htaw Nay Mue\",\"nrc\":\"12\\/Hta Ta Pa (N) 131010\",\"date_of_birth\":\"28 Jan 1996\",\"passport\":\"ME884110\",\"passport_date\":\"27 Dec 2019\",\"local_agent_name\":null,\"phone\":\"09-895516706\",\"address\":\"\\u1018\\u102d\\u102f\\u101b\\u102c\\u1000\\u102f\\u1014\\u103a\\u1038\\u1000\\u103b\\u1031\\u1038\\u101b\\u103d\\u102c\\u104a \\u1011\\u1014\\u103a\\u1038\\u1010\\u1015\\u1004\\u103a\",\"gender\":\"male\",\"remark\":null,\"join_date\":\"2022-06-22\",\"owic\":\"YGN0287021\",\"owic_date\":\"17 May 2022\",\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"Yangon\",\"created_at\":\"2022-06-22T20:28:29.000000Z\",\"updated_at\":\"2022-07-10T18:05:29.000000Z\"},\"old\":{\"name\":\"Eh Do War\",\"father_name\":\"U Saw Htaw Nay Mue\",\"nrc\":\"12\\/Hta Ta Pa (N) 131010\",\"date_of_birth\":\"28 Jan 1996\",\"passport\":\"ME884110\",\"passport_date\":\"27 Dec 2019\",\"local_agent_name\":null,\"phone\":\"09-895516706\",\"address\":\"\\u1018\\u102d\\u102f\\u101b\\u102c\\u1000\\u102f\\u1014\\u103a\\u1038\\u1000\\u103b\\u1031\\u1038\\u101b\\u103d\\u102c\\u104a \\u1011\\u1014\\u103a\\u1038\\u1010\\u1015\\u1004\\u103a\",\"gender\":\"male\",\"remark\":null,\"join_date\":\"2022-06-22\",\"owic\":\"YGN0287021\",\"owic_date\":\"17 May 2022\",\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"Yangon\",\"created_at\":\"2022-06-22T20:28:29.000000Z\",\"updated_at\":\"2022-06-22T22:17:59.000000Z\"}}', '2022-07-10 11:35:29', '2022-07-10 11:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_male` int(11) DEFAULT NULL,
  `contract_female` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract_date`, `contract_male`, `contract_female`, `remark`, `demand_id`, `created_at`, `updated_at`) VALUES
(1, '17 May 2022', 1, 0, NULL, 1, '2022-06-22 15:11:18', '2022-06-22 15:11:18'),
(2, '10 May 2022', 1, 0, NULL, 2, '2022-06-22 16:45:05', '2022-06-22 16:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Thailand', '2022-05-16 19:33:33', '2022-05-16 19:33:33'),
(2, 'Malaysia', '2022-05-16 19:33:39', '2022-05-16 19:33:39'),
(3, 'Singapore', '2022-06-22 08:54:13', '2022-06-22 08:54:13'),
(4, 'Japan', '2022-06-22 10:52:06', '2022-06-22 10:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overseas_agencie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demand_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coe_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coe_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`id`, `company_name`, `countrie_id`, `overseas_agencie_id`, `male`, `female`, `demand_date`, `cabinet_date`, `issue_date`, `issue_number`, `created_at`, `updated_at`, `demand_status`, `coe_date`, `coe_number`, `pin_date`, `pin_number`) VALUES
(1, NULL, '3', '1', '1', '0', '28 March 2022', NULL, NULL, NULL, '2022-06-22 13:50:31', '2022-06-22 13:50:31', 'new_demand', NULL, NULL, NULL, NULL),
(2, NULL, '3', '2', '1', '0', '5 May 2022', '20 May 2022', NULL, NULL, '2022-06-22 16:29:09', '2022-06-22 16:29:09', 'new_demand', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-06-21 06:24:46', '2022-06-21 06:28:03');

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
-- Table structure for table `labour_management`
--

CREATE TABLE `labour_management` (
  `id` int(10) UNSIGNED NOT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `overseas_agencies_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labour_management`
--

INSERT INTO `labour_management` (`id`, `passport_id`, `demand_id`, `contract_id`, `created_at`, `updated_at`, `overseas_agencies_id`) VALUES
(1, 1, 1, 1, '2022-06-22 16:41:32', '2022-06-22 16:41:32', 1),
(3, 2, 2, 2, '2022-06-22 16:47:11', '2022-06-22 16:47:11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_05_29_034813_add_place_of_passport_to_passports_table', 10),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_03_16_153211_create_passports_table', 2),
(6, '2022_03_22_171510_add_join_date_to_passports_table', 3),
(7, '2022_05_16_055009_create_countries_table', 4),
(8, '2022_05_16_061642_create_overseas_agencies_table', 5),
(9, '2022_05_16_083838_add_passport_fields_to_passports_table', 6),
(10, '2022_05_16_095400_add_contact_to_overseas_agencies_table', 7),
(11, '2022_05_16_160805_create_demands_table', 8),
(12, '2022_05_16_175440_add_demand_status_to_demands_table', 9),
(13, '2022_05_29_043426_create_contracts_table', 11),
(14, '2022_05_29_081917_create_sendings_table', 12),
(15, '2022_05_30_155222_create_labour_management_table', 13),
(16, '2022_05_30_170817_add_overseas_agencies_id_to_labour_management_table', 14),
(17, '2022_06_21_124503_create_departments_table', 15),
(18, '2014_10_12_000000_create_users_table', 16),
(19, '2022_06_22_033420_add_coe_fields_to_demands_table', 17),
(20, '2022_06_22_055446_add_pin_fields_to_demands_table', 18),
(21, '2022_07_05_014629_create_activity_log_table', 19),
(22, '2022_07_05_020013_add_login_info_to_users_table', 20),
(23, '2022_07_10_175536_add_covid_status_to_passports_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `overseas_agencies`
--

CREATE TABLE `overseas_agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_agencies`
--

INSERT INTO `overseas_agencies` (`id`, `company_name`, `type_of_company`, `company_phone`, `company_email`, `company_address`, `countrie_id`, `created_at`, `updated_at`, `contact`) VALUES
(1, 'AAE MANUFACTURING PTE LTD', 'Construction', NULL, NULL, '19 Tuas Link 1, Singapore 63858', '3', '2022-06-22 13:41:15', '2022-06-28 00:29:48', NULL),
(2, 'ABC ELECTRICAL PTE LTD', 'Construction', NULL, NULL, '90 Chua Chu Kang North 6, #11-08, Singapore 689574', '3', '2022-06-22 16:15:11', '2022-06-28 00:30:31', NULL),
(3, 'GSM WORKS PTE LTD', 'Construction', NULL, NULL, '61 Woodlands Industrial Park E9, #05-03, Singapore 757047', '3', '2022-06-22 17:05:39', '2022-06-28 00:30:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_agent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `join_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_passport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `covid_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `local_agent_name`, `phone`, `address`, `gender`, `remark`, `created_at`, `updated_at`, `join_date`, `owic`, `owic_date`, `reject_status`, `reject_date`, `reject_reason`, `place_of_passport`, `covid_status`, `photo`) VALUES
(1, 'Eh Do War', 'U Saw Htaw Nay Mue', '12/Hta Ta Pa (N) 131010', '28 Jan 1996', 'ME884110', '27 Dec 2019', NULL, '09-895516706', 'ဘိုရာကုန်းကျေးရွာ၊ ထန်းတပင်', 'male', NULL, '2022-06-22 13:58:29', '2022-07-10 11:35:29', '2022-06-22', 'YGN0287021', '17 May 2022', NULL, NULL, NULL, 'Yangon', NULL, 'public/photo/4CGVW1KFcn9Rfr1dfcjJQp4bsuw83XxMTLuL8CY8.png'),
(2, 'Than Htait Oo', 'U Maung Htay', '12/Ah la Na (N) 041690', '10 May 1985', 'MF850720', '23 April 2022', NULL, '09754109881', 'အမှတ် ၉၂, ၆ လွှာ၊ စက်တွင်းလမ်း၊ အလုံမြို့နယ်', 'male', NULL, '2022-06-22 16:21:17', '2022-06-22 16:49:23', '2022-06-22', 'YGN0288931', '24 May 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(3, 'Si Thu Lwin', 'U Maung Htay', NULL, '30 Dec 1987', 'MF727730', '16 MAR 2022', NULL, '09-793171742', 'အမှတ် (၈၂)၊ ၁ ရပ်ကွက် ၊ ဒေါနလမ်း၊ မုဒုံမြို့။', 'male', NULL, '2022-06-22 17:10:24', '2022-06-24 15:35:59', '2022-06-22', 'YGN0290731', '30 MAY 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(4, 'Tin Phyo Aung', 'U Tin Ngwe', '9/MaHtaLa(N)309040', '4.1.1992', 'MF744540', '23 MAR 2022', NULL, '09-899949481', 'အမှတ် ၁၈၈, မတူပီလမ်း, ၇ ရပ်ကွက်, မိတ္ထီလာမြို့', 'male', NULL, '2022-06-22 17:17:48', '2022-06-24 15:40:12', '2022-06-22', 'YGN0300423', '22 JUN 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(5, 'Saw Sar Paw Htoo', 'U Saw Htee Phaw', '7/KaTaKha(N)133440', '31.12.1987', 'MF771350', '02 APR 2022', NULL, '09-961442996', 'နံ့သာရပ်ကွက်, အင်းစိန်, ရန်ကုန်မြို့', 'male', NULL, '2022-06-24 13:59:24', '2022-06-24 16:04:51', '2022-06-24', 'YGN0300543', '22 JUN 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(6, 'Saw Free Mai', 'Saw Htoo De', '14/KaTaHta(N)149910', '12.3.1988', 'MF742960', '22 MAR 2022', NULL, '09-2505837', 'အစုကြီးရွာ, လျော်ကုန်း, ကန်ကြီးထောင့်မြို့နယ်, ပုသိမ်မြို့', 'male', NULL, '2022-06-24 14:05:56', '2022-06-24 16:05:20', '2022-06-24', 'YGN0300553', '22 JIN 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(7, 'Aung Ko Ko Phyo', 'U Min Aung', '14/WaKhaMa(N)287390', '10.6.1998', 'MF782370', '08 APR 2022', NULL, '09-672623', 'ကြိုကုန်းရွာ, ဝါးခယ်မမြို့နယ်, ဧရာဝတီတိုင်း', 'male', NULL, '2022-06-24 14:23:07', '2022-06-24 16:06:44', '2022-06-24', 'YGN0300553', '22 JUN 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(8, 'Shein Maung Maung', 'U Myo Win', '10/ThaPhaYa(N)170921', '18.6.1996', 'MF725280', '14 MAR 2022', NULL, '09-4252629', 'ကြာညိုလမ်း, ကြာကန်ရပ်ကွက်, မွန်ပြည်နယ်', 'male', NULL, '2022-06-24 14:36:18', '2022-06-24 15:45:52', '2022-06-24', 'YGN03004945', '22 JUN 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(9, 'Htun Htun Oo', 'U Thein Htun', '12/KaMaYa(N)074421', '6.1.1990', 'MF773790', '04 APR 2022', NULL, '09-9647033', 'သီးသန့်လိုင်ခန်း, စည်ပင်ရဲဝန်း, ကမာရွတ်မြို့', 'male', NULL, '2022-06-24 14:59:26', '2022-06-24 15:54:08', '2022-06-24', 'YGN0300446', '22 JUN2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(10, 'Sa Min Zin Thein', 'Man Mya Ohn', '14/KaPaNa(N)220012', '4.9.1997', 'MF146721', '13 MAR 2022', NULL, '09-6949930', 'ကုန်းမဲဇလီကျေးရွာ, ကျုံပျော်မြို့', 'male', NULL, '2022-06-24 15:13:50', '2022-06-24 15:59:25', '2022-06-24', 'YGN0300464', '22 JUN 2022', NULL, NULL, NULL, 'Yangon', NULL, NULL),
(11, 'Kyaw Thu Lwin', 'U Myint Lwin', '5/KaBaLa(N)228521', '9.2.1998', 'MF701211', '03 MAR 2022', NULL, '09-8990943', 'ပြေကွင်းရွာ, ကန့်ဘလူမြို့နယ်', 'male', NULL, '2022-06-24 15:23:16', '2022-06-24 16:08:28', '2022-06-24', NULL, NULL, NULL, NULL, NULL, 'Yangon', NULL, NULL),
(12, 'Win Htet Thu', 'U Tun Win', '5/KaBaLa(N)284532', NULL, 'MF710623', '05 MAR 2022', NULL, '09-7855078', 'ပြေကွင်းရွာ, ကန့်ဘလူမြို့နယ်', 'male', NULL, '2022-06-24 15:30:19', '2022-06-24 16:09:16', '2022-06-24', NULL, NULL, NULL, NULL, NULL, 'Yangon', NULL, NULL),
(14, 'asf', 'asfd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'fds', 'male', 'asdf', '2022-07-10 11:28:30', '2022-07-10 11:33:48', '2022-07-10', NULL, NULL, NULL, NULL, NULL, 'asdf', 'No', 'public/photo/3oRlSCWUwZhMiezETvDdo8usfUmHgqX8QRKT7A8u.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$wgTMGdasOx2BBo6/.Zdq7.AzAmXqWZeagYf7Tdo82eKm3fOquVej6', '2022-05-30 11:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `sendings`
--

CREATE TABLE `sendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sending_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sending_male` int(11) DEFAULT NULL,
  `sending_female` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sendings`
--

INSERT INTO `sendings` (`id`, `sending_date`, `sending_male`, `sending_female`, `remark`, `demand_id`, `contract_id`, `created_at`, `updated_at`) VALUES
(1, '21 May 2022', 1, 0, NULL, 1, 1, '2022-06-22 15:52:23', '2022-06-22 15:52:23'),
(2, '4 June 2022', 1, 0, 'Soil Build', 2, 2, '2022-06-22 16:46:46', '2022-06-22 16:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `last_login_at` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `devices` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `phone`, `nrc_number`, `gender`, `address`, `department_id`, `last_login_at`, `last_login_ip`, `devices`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$2aCI42UcxRgLFUkKR3epa.cVHDGurUh810kBFqHRNp9BIwAm6meMK', 'IgTWwQGofRMrRVuBFkMc13WgphOwuTvDWQu5RxUVKI6FzcacYJ0iM7UPO4xP', '2022-06-22 08:51:44', '2022-07-10 11:19:27', 'ID-00001', '09444161997', '5/ABC(N)009112', 'male', 'YGN', 1, '2022-07-10 17:49:27', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_management`
--
ALTER TABLE `labour_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `sendings`
--
ALTER TABLE `sendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labour_management`
--
ALTER TABLE `labour_management`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sendings`
--
ALTER TABLE `sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

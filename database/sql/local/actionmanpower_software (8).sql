-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2022 at 10:37 AM
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
(6, 'passports_log', 'updated', 'App\\Models\\Passport', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Eh Do War\",\"father_name\":\"U Saw Htaw Nay Mue\",\"nrc\":\"12\\/Hta Ta Pa (N) 131010\",\"date_of_birth\":\"28 Jan 1996\",\"passport\":\"ME884110\",\"passport_date\":\"27 Dec 2019\",\"local_agent_name\":null,\"phone\":\"09-895516706\",\"address\":\"\\u1018\\u102d\\u102f\\u101b\\u102c\\u1000\\u102f\\u1014\\u103a\\u1038\\u1000\\u103b\\u1031\\u1038\\u101b\\u103d\\u102c\\u104a \\u1011\\u1014\\u103a\\u1038\\u1010\\u1015\\u1004\\u103a\",\"gender\":\"male\",\"remark\":null,\"join_date\":\"2022-06-22\",\"owic\":\"YGN0287021\",\"owic_date\":\"17 May 2022\",\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"Yangon\",\"created_at\":\"2022-06-22T20:28:29.000000Z\",\"updated_at\":\"2022-07-10T18:05:29.000000Z\"},\"old\":{\"name\":\"Eh Do War\",\"father_name\":\"U Saw Htaw Nay Mue\",\"nrc\":\"12\\/Hta Ta Pa (N) 131010\",\"date_of_birth\":\"28 Jan 1996\",\"passport\":\"ME884110\",\"passport_date\":\"27 Dec 2019\",\"local_agent_name\":null,\"phone\":\"09-895516706\",\"address\":\"\\u1018\\u102d\\u102f\\u101b\\u102c\\u1000\\u102f\\u1014\\u103a\\u1038\\u1000\\u103b\\u1031\\u1038\\u101b\\u103d\\u102c\\u104a \\u1011\\u1014\\u103a\\u1038\\u1010\\u1015\\u1004\\u103a\",\"gender\":\"male\",\"remark\":null,\"join_date\":\"2022-06-22\",\"owic\":\"YGN0287021\",\"owic_date\":\"17 May 2022\",\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"Yangon\",\"created_at\":\"2022-06-22T20:28:29.000000Z\",\"updated_at\":\"2022-06-22T22:17:59.000000Z\"}}', '2022-07-10 11:35:29', '2022-07-10 11:35:29'),
(7, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-15T15:56:45.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-10T17:49:27.000000Z\"}}', '2022-07-15 09:26:45', '2022-07-15 09:26:45'),
(8, 'overseas_agencies_log', 'created', 'App\\Models\\OverseasAgency', 4, 'App\\User', 1, '{\"attributes\":{\"company_name\":\"KMail\",\"type_of_company\":\"Saftware Compant\",\"company_phone\":\"09444161997\",\"company_email\":\"info@kmail.com\",\"company_address\":\"www.kmail.com\",\"countrie_id\":\"1\",\"contact\":\"U Zin\",\"created_at\":\"2022-07-15T16:50:47.000000Z\",\"updated_at\":\"2022-07-15T16:50:47.000000Z\"}}', '2022-07-15 10:20:47', '2022-07-15 10:20:47'),
(9, 'overseas_agencies_log', 'created', 'App\\Models\\OverseasAgency', 5, 'App\\User', 1, '{\"attributes\":{\"company_name\":\"KMail\",\"type_of_company\":\"Software\",\"company_phone\":\"09444161997\",\"company_email\":\"info@kmail.com\",\"company_address\":\"yangon\",\"countrie_id\":\"1\",\"contact\":\"U Zin\",\"created_at\":\"2022-07-15T17:11:48.000000Z\",\"updated_at\":\"2022-07-15T17:11:48.000000Z\"}}', '2022-07-15 10:41:48', '2022-07-15 10:41:48'),
(10, 'overseas_agencies_log', 'updated', 'App\\Models\\OverseasAgency', 5, 'App\\User', 1, '{\"attributes\":{\"company_name\":\"KMail Software\",\"type_of_company\":\"Software\",\"company_phone\":\"09444161997\",\"company_email\":\"info@kmail.com\",\"company_address\":\"yangon\",\"countrie_id\":\"1\",\"contact\":\"U Zin\",\"created_at\":\"2022-07-15T17:11:48.000000Z\",\"updated_at\":\"2022-07-15T17:19:13.000000Z\"},\"old\":{\"company_name\":\"KMail\",\"type_of_company\":\"Software\",\"company_phone\":\"09444161997\",\"company_email\":\"info@kmail.com\",\"company_address\":\"yangon\",\"countrie_id\":\"1\",\"contact\":\"U Zin\",\"created_at\":\"2022-07-15T17:11:48.000000Z\",\"updated_at\":\"2022-07-15T17:11:48.000000Z\"}}', '2022-07-15 10:49:13', '2022-07-15 10:49:13'),
(11, 'overseas_agencies_log', 'updated', 'App\\Models\\OverseasAgency', 5, 'App\\User', 1, '{\"attributes\":{\"company_name\":\"KMail Software\",\"type_of_company\":\"Software\",\"company_phone\":\"09444161997\",\"company_email\":\"info@kmail.com\",\"company_address\":\"yangon\",\"countrie_id\":\"1\",\"contact\":\"U Zin\",\"created_at\":\"2022-07-15T17:11:48.000000Z\",\"updated_at\":\"2022-07-15T17:19:27.000000Z\"},\"old\":{\"company_name\":\"KMail Software\",\"type_of_company\":\"Software\",\"company_phone\":\"09444161997\",\"company_email\":\"info@kmail.com\",\"company_address\":\"yangon\",\"countrie_id\":\"1\",\"contact\":\"U Zin\",\"created_at\":\"2022-07-15T17:11:48.000000Z\",\"updated_at\":\"2022-07-15T17:19:13.000000Z\"}}', '2022-07-15 10:49:27', '2022-07-15 10:49:27'),
(12, 'passports_log', 'created', 'App\\Models\\Passport', 15, 'App\\User', 1, '{\"attributes\":{\"name\":\"U Zin\",\"father_name\":\"U Mg\",\"nrc\":\"5\\/abc(N)009221\",\"date_of_birth\":\"1.1.1995\",\"passport\":\"ME0002\",\"passport_date\":\"1.1.2022\",\"local_agent_name\":\"U Mg\",\"phone\":\"094442282998\",\"address\":\"Yangon\",\"gender\":\"male\",\"remark\":\"NO\",\"join_date\":\"2022-07-15\",\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":\"YGN\",\"created_at\":\"2022-07-15T19:11:54.000000Z\",\"updated_at\":\"2022-07-15T19:11:54.000000Z\"}}', '2022-07-15 12:41:54', '2022-07-15 12:41:54'),
(13, 'passports_log', 'created', 'App\\Models\\Passport', 16, 'App\\User', 1, '{\"attributes\":{\"name\":\"Mg Mg\",\"father_name\":\"U Soe Kyaw\",\"nrc\":\"5\\/(abc)009887\",\"date_of_birth\":\"1.1.1995\",\"passport\":\"EM 00001\",\"passport_date\":\"01\\/01\\/2022\",\"local_agent_name\":\"no\",\"phone\":\"9123123123\",\"address\":\"Yangon\",\"gender\":\"male\",\"remark\":\"no\",\"join_date\":null,\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":null,\"created_at\":\"2022-07-15T19:30:00.000000Z\",\"updated_at\":\"2022-07-15T19:30:00.000000Z\"}}', '2022-07-15 13:00:00', '2022-07-15 13:00:00'),
(14, 'passports_log', 'created', 'App\\Models\\Passport', 17, 'App\\User', 1, '{\"attributes\":{\"name\":\"Mg Mg\",\"father_name\":\"U Soe Kyaw\",\"nrc\":\"5\\/(abc)009887\",\"date_of_birth\":\"1.1.1995\",\"passport\":\"EM 00001\",\"passport_date\":\"01\\/01\\/2022\",\"local_agent_name\":\"no\",\"phone\":\"9123123123\",\"address\":\"Yangon\",\"gender\":\"male\",\"remark\":\"no\",\"join_date\":null,\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":null,\"created_at\":\"2022-07-15T19:30:55.000000Z\",\"updated_at\":\"2022-07-15T19:30:55.000000Z\"}}', '2022-07-15 13:00:55', '2022-07-15 13:00:55'),
(15, 'passports_log', 'created', 'App\\Models\\Passport', 18, 'App\\User', 1, '{\"attributes\":{\"name\":\"Mg Mg\",\"father_name\":\"U Soe Kyaw\",\"nrc\":\"5\\/(abc)009887\",\"date_of_birth\":\"1.1.1995\",\"passport\":\"EM 00001\",\"passport_date\":\"01\\/01\\/2022\",\"local_agent_name\":\"no\",\"phone\":\"9123123123\",\"address\":\"Yangon\",\"gender\":\"male\",\"remark\":\"no\",\"join_date\":null,\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":null,\"created_at\":\"2022-07-15T19:32:49.000000Z\",\"updated_at\":\"2022-07-15T19:32:49.000000Z\"}}', '2022-07-15 13:02:49', '2022-07-15 13:02:49'),
(16, 'passports_log', 'created', 'App\\Models\\Passport', 19, 'App\\User', 1, '{\"attributes\":{\"name\":\"Mg Mg\",\"father_name\":\"U Soe Kyaw\",\"nrc\":\"5\\/(abc)009887\",\"date_of_birth\":\"1.1.1995\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"local_agent_name\":\"no\",\"phone\":\"9123123123\",\"address\":\"Yangon\",\"gender\":\"male\",\"remark\":\"no\",\"join_date\":null,\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":null,\"created_at\":\"2022-07-15T19:37:05.000000Z\",\"updated_at\":\"2022-07-15T19:37:05.000000Z\"}}', '2022-07-15 13:07:05', '2022-07-15 13:07:05'),
(17, 'passports_log', 'created', 'App\\Models\\Passport', 20, 'App\\User', 1, '{\"attributes\":{\"name\":\"Mg Mg\",\"father_name\":\"U Soe Kyaw\",\"nrc\":\"5\\/(abc)009887\",\"date_of_birth\":\"1.1.1995\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"local_agent_name\":\"no\",\"phone\":\"9123123123\",\"address\":\"Yangon\",\"gender\":\"male\",\"remark\":\"no\",\"join_date\":null,\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"place_of_passport\":null,\"created_at\":\"2022-07-15T19:38:45.000000Z\",\"updated_at\":\"2022-07-15T19:38:45.000000Z\"}}', '2022-07-15 13:08:45', '2022-07-15 13:08:45'),
(18, 'passports_log', 'created', 'App\\Models\\Passport', 21, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"lab\",\"issue_labour_date\":\"no\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no\",\"join_date\":\"2022-07-15\",\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-15T19:44:18.000000Z\"}}', '2022-07-15 13:14:18', '2022-07-15 13:14:18'),
(19, 'passports_log', 'created', 'App\\Models\\Passport', 22, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"asfd\",\"issue_labour_date\":null,\"name\":\"asdf\",\"gender\":\"male\",\"nrc\":null,\"father_name\":null,\"qualification\":null,\"date_of_birth\":null,\"address\":\"asdf\",\"phone\":\"asdf\",\"job\":null,\"passport\":null,\"passport_date\":null,\"identification_card\":null,\"issue_date_id_card\":null,\"place_of_passport\":null,\"salary\":null,\"covid_status\":\"Yes\",\"vaccine_name\":null,\"covid_number\":null,\"contact_person\":null,\"phone_number\":null,\"relative\":null,\"local_agent_name\":null,\"local_agent_phone\":null,\"local_agent_email\":null,\"remark\":null,\"join_date\":\"2022-07-15\",\"created_at\":\"2022-07-15T19:48:55.000000Z\",\"updated_at\":\"2022-07-15T19:48:55.000000Z\"}}', '2022-07-15 13:18:55', '2022-07-15 13:18:55'),
(20, 'passports_log', 'updated', 'App\\Models\\Passport', 21, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"lab\",\"issue_labour_date\":\"no\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no\",\"join_date\":\"2022-07-15\",\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-15T19:55:26.000000Z\"},\"old\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"lab\",\"issue_labour_date\":\"no\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no\",\"join_date\":\"2022-07-15\",\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-15T19:44:18.000000Z\"}}', '2022-07-15 13:25:26', '2022-07-15 13:25:26'),
(21, 'passports_log', 'updated', 'App\\Models\\Passport', 21, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"Mg Mg\",\"issue_labour_date\":\"asf\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no Ok\",\"join_date\":\"2022-07-15\",\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-15T19:55:34.000000Z\"},\"old\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"lab\",\"issue_labour_date\":\"no\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no\",\"join_date\":\"2022-07-15\",\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-15T19:55:26.000000Z\"}}', '2022-07-15 13:25:34', '2022-07-15 13:25:34'),
(22, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-16T00:39:49.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"ID-00001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/ABC(N)009112\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-06-22T15:21:44.000000Z\",\"updated_at\":\"2022-07-15T15:56:45.000000Z\"}}', '2022-07-15 18:09:49', '2022-07-15 18:09:49'),
(23, 'passports_log', 'updated', 'App\\Models\\Passport', 21, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"Mg Mg\",\"issue_labour_date\":\"asf\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no Ok\",\"join_date\":\"2022-07-15\",\"leave_status\":\"leaved\",\"leave_date\":\"1.1.2022\",\"leave_remark\":\"Unknow\",\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-16T01:52:07.000000Z\"},\"old\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"Mg Mg\",\"issue_labour_date\":\"asf\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"no\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"general\",\"passport\":\"EM 00001\",\"passport_date\":\"44562\",\"identification_card\":\"no\",\"issue_date_id_card\":\"no\",\"place_of_passport\":\"ygn\",\"salary\":\"1000\",\"covid_status\":\"Yes\",\"vaccine_name\":\"no\",\"covid_number\":\"2\",\"contact_person\":\"Mg Mg\",\"phone_number\":\"933320399\",\"relative\":\"no\",\"local_agent_name\":\"no\",\"local_agent_phone\":\"no\",\"local_agent_email\":\"no\",\"remark\":\"no Ok\",\"join_date\":\"2022-07-15\",\"leave_status\":null,\"leave_date\":null,\"leave_remark\":null,\"created_at\":\"2022-07-15T19:44:18.000000Z\",\"updated_at\":\"2022-07-15T19:55:34.000000Z\"}}', '2022-07-15 19:22:07', '2022-07-15 19:22:07'),
(24, 'contracts_log', 'created', 'App\\Models\\Contract', 3, 'App\\User', 1, '{\"attributes\":{\"contract_date\":\"1.1.2022\",\"contract_male\":1,\"contract_female\":0,\"remark\":null,\"demand_id\":1,\"created_at\":\"2022-07-16T02:05:28.000000Z\",\"updated_at\":\"2022-07-16T02:05:28.000000Z\"}}', '2022-07-15 19:35:28', '2022-07-15 19:35:28'),
(25, 'sendings_log', 'created', 'App\\Models\\Sending', 3, 'App\\User', 1, '{\"attributes\":{\"sending_date\":\"1.1.2022\",\"sending_male\":1,\"sending_female\":0,\"remark\":null,\"demand_id\":1,\"contract_id\":3,\"created_at\":\"2022-07-16T02:05:40.000000Z\",\"updated_at\":\"2022-07-16T02:05:40.000000Z\"}}', '2022-07-15 19:35:40', '2022-07-15 19:35:40'),
(26, 'labour_management_log', 'created', 'App\\Models\\LabourManagement', 4, 'App\\User', 1, '{\"attributes\":{\"passport_id\":22,\"demand_id\":1,\"contract_id\":3,\"overseas_agencies_id\":1,\"created_at\":\"2022-07-16T02:05:52.000000Z\",\"updated_at\":\"2022-07-16T02:05:52.000000Z\"}}', '2022-07-15 19:35:52', '2022-07-15 19:35:52'),
(27, 'labour_management_log', 'deleted', 'App\\Models\\LabourManagement', 4, 'App\\User', 1, '{\"attributes\":{\"passport_id\":22,\"demand_id\":1,\"contract_id\":3,\"overseas_agencies_id\":1,\"created_at\":\"2022-07-16T02:05:52.000000Z\",\"updated_at\":\"2022-07-16T02:05:52.000000Z\"}}', '2022-07-15 19:35:56', '2022-07-15 19:35:56'),
(28, 'labour_management_log', 'created', 'App\\Models\\LabourManagement', 5, 'App\\User', 1, '{\"attributes\":{\"passport_id\":22,\"demand_id\":1,\"contract_id\":3,\"overseas_agencies_id\":1,\"created_at\":\"2022-07-16T02:05:59.000000Z\",\"updated_at\":\"2022-07-16T02:05:59.000000Z\"}}', '2022-07-15 19:35:59', '2022-07-15 19:35:59'),
(29, 'passports_log', 'created', 'App\\Models\\Passport', 23, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"asd\",\"issue_labour_date\":\"asda\",\"name\":\"sdf\",\"gender\":\"male\",\"nrc\":null,\"father_name\":null,\"qualification\":null,\"date_of_birth\":null,\"address\":\"asd\",\"phone\":\"asdf\",\"job\":null,\"passport\":null,\"passport_date\":null,\"identification_card\":null,\"issue_date_id_card\":null,\"place_of_passport\":null,\"salary\":null,\"covid_status\":\"Yes\",\"vaccine_name\":null,\"covid_number\":null,\"contact_person\":null,\"phone_number\":null,\"relative\":null,\"local_agent_name\":null,\"local_agent_phone\":null,\"local_agent_email\":null,\"remark\":null,\"join_date\":\"2022-07-16\",\"leave_status\":null,\"leave_date\":null,\"leave_remark\":null,\"created_at\":\"2022-07-16T02:16:08.000000Z\",\"updated_at\":\"2022-07-16T02:16:08.000000Z\"}}', '2022-07-15 19:46:08', '2022-07-15 19:46:08'),
(30, 'passports_log', 'created', 'App\\Models\\Passport', 24, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"\",\"issue_labour_date\":\"\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"\",\"passport\":\"EM 00001\",\"passport_date\":\"01\\/01\\/2022\",\"identification_card\":\"\",\"issue_date_id_card\":\"\",\"place_of_passport\":\"\",\"salary\":\"\",\"covid_status\":\"Yes\",\"vaccine_name\":\"\",\"covid_number\":\"\",\"contact_person\":\"\",\"phone_number\":\"\",\"relative\":\"\",\"local_agent_name\":\"\",\"local_agent_phone\":\"\",\"local_agent_email\":\"\",\"remark\":\"\",\"join_date\":\"2022-07-16\",\"leave_status\":null,\"leave_date\":null,\"leave_remark\":null,\"created_at\":\"2022-07-16T02:20:24.000000Z\",\"updated_at\":\"2022-07-16T02:20:24.000000Z\"}}', '2022-07-15 19:50:24', '2022-07-15 19:50:24'),
(31, 'passports_log', 'created', 'App\\Models\\Passport', 25, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":null,\"issue_labour_date\":null,\"name\":\"asdf\",\"gender\":\"male\",\"nrc\":null,\"father_name\":null,\"qualification\":null,\"date_of_birth\":null,\"address\":\"asdf\",\"phone\":\"asdf\",\"job\":null,\"passport\":null,\"passport_date\":null,\"identification_card\":null,\"issue_date_id_card\":null,\"place_of_passport\":null,\"salary\":null,\"covid_status\":\"Yes\",\"vaccine_name\":null,\"covid_number\":null,\"contact_person\":null,\"phone_number\":null,\"relative\":null,\"local_agent_name\":null,\"local_agent_phone\":null,\"local_agent_email\":null,\"remark\":null,\"join_date\":\"2022-07-16\",\"leave_status\":null,\"leave_date\":null,\"leave_remark\":null,\"created_at\":\"2022-07-16T02:28:53.000000Z\",\"updated_at\":\"2022-07-16T02:28:53.000000Z\"}}', '2022-07-15 19:58:53', '2022-07-15 19:58:53'),
(32, 'passports_log', 'created', 'App\\Models\\Passport', 26, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":null,\"issue_labour_date\":null,\"name\":\"asdf\",\"gender\":\"male\",\"nrc\":null,\"father_name\":null,\"qualification\":null,\"date_of_birth\":null,\"address\":\"asdf\",\"phone\":\"asdf\",\"job\":null,\"passport\":null,\"passport_date\":null,\"identification_card\":null,\"issue_date_id_card\":null,\"place_of_passport\":null,\"salary\":null,\"covid_status\":\"Yes\",\"vaccine_name\":null,\"covid_number\":null,\"contact_person\":null,\"phone_number\":null,\"relative\":null,\"local_agent_name\":null,\"local_agent_phone\":null,\"local_agent_email\":null,\"remark\":null,\"join_date\":\"2022-07-16\",\"leave_status\":null,\"leave_date\":null,\"leave_remark\":null,\"created_at\":\"2022-07-16T02:29:40.000000Z\",\"updated_at\":\"2022-07-16T02:29:40.000000Z\"}}', '2022-07-15 19:59:40', '2022-07-15 19:59:40'),
(33, 'passports_log', 'created', 'App\\Models\\Passport', 27, 'App\\User', 1, '{\"attributes\":{\"owic\":null,\"owic_date\":null,\"reject_status\":null,\"reject_date\":null,\"reject_reason\":null,\"labour_card_no\":\"\",\"issue_labour_date\":\"\",\"name\":\"Mg Mg\",\"gender\":\"male\",\"nrc\":\"5\\/(abc)009887\",\"father_name\":\"U Soe Kyaw\",\"qualification\":\"\",\"date_of_birth\":\"1.1.1995\",\"address\":\"Yangon\",\"phone\":\"9123123123\",\"job\":\"\",\"passport\":\"EM 00001\",\"passport_date\":\"01\\/01\\/2022\",\"identification_card\":\"\",\"issue_date_id_card\":\"\",\"place_of_passport\":\"\",\"salary\":\"\",\"covid_status\":\"Yes\",\"vaccine_name\":\"\",\"covid_number\":\"\",\"contact_person\":\"\",\"phone_number\":\"\",\"relative\":\"\",\"local_agent_name\":\"\",\"local_agent_phone\":\"\",\"local_agent_email\":\"\",\"remark\":\"\",\"join_date\":\"2022-07-16\",\"leave_status\":null,\"leave_date\":null,\"leave_remark\":null,\"created_at\":\"2022-07-16T02:36:43.000000Z\",\"updated_at\":\"2022-07-16T02:36:43.000000Z\"}}', '2022-07-15 20:06:43', '2022-07-15 20:06:43'),
(34, 'users_log', 'created', 'App\\User', 2, 'App\\User', 1, '{\"attributes\":{\"name\":\"User\",\"email\":\"user@gmail.com\",\"employee_id\":\"00002\",\"phone\":\"09123123123\",\"nrc_number\":\"4\\/agc(n)009221\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-07-16T03:01:57.000000Z\",\"updated_at\":\"2022-07-16T03:01:57.000000Z\"}}', '2022-07-15 20:31:57', '2022-07-15 20:31:57'),
(35, 'users_log', 'created', 'App\\User', 3, 'App\\User', 1, '{\"attributes\":{\"name\":\"User\",\"email\":\"user1@gmail.com\",\"employee_id\":\"00003\",\"phone\":\"09123123122\",\"nrc_number\":\"4\\/agc(n)009221\",\"gender\":\"male\",\"address\":\"YGN\",\"department_id\":1,\"created_at\":\"2022-07-16T03:02:51.000000Z\",\"updated_at\":\"2022-07-16T03:02:51.000000Z\"}}', '2022-07-15 20:32:51', '2022-07-15 20:32:51');

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
(23, '2022_07_10_175536_add_covid_status_to_passports_table', 21),
(25, '2022_07_15_164651_add_person_fields_to_overseas_agencies_table', 22),
(26, '2022_07_15_185850_add_person_info_to_passports_table', 23),
(27, '2022_07_16_012959_add_leave_fields_to_passports_table', 24),
(28, '2022_07_16_021239_add_enquiry_fields_to_passports_table', 25),
(29, '2022_07_16_024441_create_permission_tables', 26);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_labour_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_card` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date_id_card` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccine_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `covid_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relative` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_agent_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_agent_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$2aCI42UcxRgLFUkKR3epa.cVHDGurUh810kBFqHRNp9BIwAm6meMK', 'IgTWwQGofRMrRVuBFkMc13WgphOwuTvDWQu5RxUVKI6FzcacYJ0iM7UPO4xP', '2022-06-22 08:51:44', '2022-07-15 18:09:49', 'ID-00001', '09444161997', '5/ABC(N)009112', 'male', 'YGN', 1, '2022-07-16 00:39:49', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$3KjnE7z0IypujPw79fuOHOckFclevtLo116XCabi8RUbnbXTaA7TO', NULL, '2022-07-15 20:31:57', '2022-07-15 20:31:57', '00002', '09123123123', '4/agc(n)009221', 'male', 'YGN', 1, NULL, NULL, NULL),
(3, 'User', 'user1@gmail.com', NULL, '$2y$10$OZIGwoq1Ashh3F8XG.YkVOWmgOKCw8oKjaZ8GPxENjz/4bfiaX43q', NULL, '2022-07-15 20:32:51', '2022-07-15 20:32:51', '00003', '09123123122', '4/agc(n)009221', 'male', 'YGN', 1, NULL, NULL, NULL);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sendings`
--
ALTER TABLE `sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

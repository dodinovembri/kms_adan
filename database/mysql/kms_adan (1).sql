-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 11:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms_adan`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_code`, `category_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'OM', 'Oli Mesin', 1, '2020-12-01 07:21:29', '2020-12-01 07:21:29', NULL, NULL),
(2, 'BM', 'Ban Mobil', 1, '2020-12-01 07:21:43', '2020-12-01 07:21:43', NULL, NULL),
(3, 'KM', 'Kap Mobil', 1, '2020-12-01 07:21:54', '2020-12-01 07:21:54', NULL, NULL),
(4, 'D', 'Dashboard', 1, '2020-12-01 07:22:04', '2020-12-01 07:22:04', NULL, NULL),
(5, 'STP', 'Setir, Tuas Persnelling', 1, '2020-12-01 07:22:31', '2020-12-01 07:22:31', NULL, NULL),
(6, 'KJ', 'Kursi/ Jok', 1, '2020-12-01 07:22:48', '2020-12-01 07:22:48', NULL, NULL),
(7, 'A', 'Aki', 1, '2020-12-01 07:22:56', '2020-12-01 07:23:03', NULL, NULL),
(8, 'R', 'Radiator', 1, '2020-12-01 07:23:15', '2020-12-01 07:23:15', NULL, NULL),
(10, 'RE', 'Rem', 1, '2020-12-02 14:34:42', '2020-12-02 14:34:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver_type`
--

CREATE TABLE `driver_type` (
  `id` bigint(20) NOT NULL,
  `driver_type_code` varchar(255) NOT NULL,
  `driver_type_name` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_type`
--

INSERT INTO `driver_type` (`id`, `driver_type_code`, `driver_type_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '4W', 'four-wheel-drive', 1, '2020-12-02 14:52:44', '2020-12-02 14:52:56', NULL, NULL);

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
-- Table structure for table `fuel_type`
--

CREATE TABLE `fuel_type` (
  `id` bigint(20) NOT NULL,
  `fuel_type_code` varchar(255) NOT NULL,
  `fuel_type_name` varchar(255) NOT NULL,
  `fuel_type_description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`id`, `fuel_type_code`, `fuel_type_name`, `fuel_type_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'BN', 'Bensin', 'Bahan Bakar bensin', 1, '2020-12-02 15:07:35', '2020-12-02 15:08:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_post`
--

CREATE TABLE `knowledge_post` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `knowledge_post_title` varchar(255) NOT NULL,
  `knowledge_post_image` char(50) NOT NULL,
  `knowledge_post_date` date NOT NULL,
  `knowledge_post_short_description` varchar(255) NOT NULL,
  `knowledge_post_full_description` text NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledge_post`
--

INSERT INTO `knowledge_post` (`id`, `category_id`, `knowledge_post_title`, `knowledge_post_image`, `knowledge_post_date`, `knowledge_post_short_description`, `knowledge_post_full_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 1, 'Tutorial Pengecekan Oli Mesin', '5fc8807d5c1a5.jpg', '2020-12-03', 'Tutorial Pengecekan Oli Mesin', 'Tutorial Pengecekan Oli Mesin Tutorial Pengecekan Oli Mesin Tutorial Pengecekan Oli Mesin', 1, '2020-12-02 23:04:58', '2020-12-02 23:06:53', NULL, NULL),
(3, 1, 'Tutorial Pengecekan Oli Mesin', '5fc888ff40fc6.jpg', '2020-12-03', 'Tutorial Pengecekan Oli Mesin', 'Tutorial Pengecekan Oli MesinTutorial Pengecekan Oli MesinTutorial Pengecekan Oli MesinTutorial Pengecekan Oli MesinTutorial Pengecekan Oli MesinTutorial Pengecekan Oli MesinTutorial Pengecekan Oli MesinTutorial Pengecekan Oli Mesin', 1, '2020-12-02 23:43:11', '2020-12-02 23:43:11', NULL, NULL),
(4, 3, 'Tutorial Pengecekan Oli Mesin', '5fc8894231b00.jpg', '2020-12-03', 'Tutorial Pengecekan Oli Mesin', 'sddfsdf sdf sfs dsdf sdf', 1, '2020-12-02 23:44:18', '2020-12-02 23:44:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_post_detail`
--

CREATE TABLE `knowledge_post_detail` (
  `id` bigint(20) NOT NULL,
  `knowledge_post_id` varchar(255) NOT NULL,
  `step_title` varchar(255) NOT NULL,
  `step_image` char(50) DEFAULT NULL,
  `step_description` text NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meassure`
--

CREATE TABLE `meassure` (
  `id` bigint(20) NOT NULL,
  `meassure_code` varchar(255) NOT NULL,
  `meassure_name` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meassure`
--

INSERT INTO `meassure` (`id`, `meassure_code`, `meassure_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'CM', 'Centi Meter', 1, '2020-12-02 19:59:40', '2020-12-02 19:59:40', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) NOT NULL,
  `social_media_name` varchar(255) NOT NULL,
  `social_media_link` varchar(255) NOT NULL,
  `social_media_icon` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_media_name`, `social_media_link`, `social_media_icon`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Facebook', 'http://www.facebook.com', 'fab fa-facebook-f', 1, '2020-12-01 07:11:40', '2020-12-01 07:12:49', NULL, NULL),
(2, 'Twitter', 'http://www.twitter.com', 'fab fa-twitter', 1, '2020-12-01 07:11:55', '2020-12-01 07:13:03', NULL, NULL),
(3, 'linkedin', 'http://www.linkedin.com', 'fab fa-linkedin-in', 1, '2020-12-01 07:12:35', '2020-12-01 07:12:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Dodi Novembri 2', 'dodinovembri32@gmail.com', 2, NULL, '$2y$10$0Y6NB/N3U3PKDuRnpzJV8.y1vRryU8XfcKzOYi6eJb7EUJZSfvbYa', NULL, '2020-05-22 08:01:23', '2020-07-01 16:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` bigint(20) NOT NULL,
  `vehicle_type_id` bigint(20) NOT NULL,
  `vehicle_code` varchar(255) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vehicle_image` char(50) NOT NULL,
  `vehicle_description` text NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicle_type_id`, `vehicle_code`, `vehicle_name`, `vehicle_image`, `vehicle_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'VH2', 'Honda Jazz', '5fc8a3fa14730.jpg', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus', 1, '2020-12-03 01:38:18', '2020-12-03 01:38:18', NULL, NULL),
(2, 1, 'VH2', 'Honda Jazz', '5fc8a4c85b8b6.jpg', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus', 1, '2020-12-03 01:41:44', '2020-12-03 01:41:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_active_safety`
--

CREATE TABLE `vehicle_active_safety` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `anti_lock_braking_system` tinyint(4) NOT NULL,
  `brake_assist` tinyint(4) NOT NULL,
  `electronic_brake_distribution` tinyint(4) NOT NULL,
  `parking_sensor` tinyint(4) NOT NULL,
  `rearview_camera` tinyint(4) NOT NULL,
  `uphil_downhill_assist_control` tinyint(4) NOT NULL,
  `vehicle_stability_control_system` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_active_safety`
--

INSERT INTO `vehicle_active_safety` (`id`, `vehicle_id`, `anti_lock_braking_system`, `brake_assist`, `electronic_brake_distribution`, `parking_sensor`, `rearview_camera`, `uphil_downhill_assist_control`, `vehicle_stability_control_system`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 1, 0, 0, 1, 0, 0, 0, 1, '2020-12-02 23:54:28', '2020-12-02 23:54:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_comfort`
--

CREATE TABLE `vehicle_comfort` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `air_conditioner` varchar(255) NOT NULL,
  `steering_position` varchar(255) NOT NULL,
  `ambient_light` tinyint(4) NOT NULL,
  `steer_lingkar` tinyint(4) NOT NULL,
  `engine_start_stop_button` tinyint(4) NOT NULL,
  `front_rea_defogger` tinyint(4) NOT NULL,
  `front_power_window` tinyint(4) NOT NULL,
  `gear_shift_paddle` tinyint(4) NOT NULL,
  `headup_display` tinyint(4) NOT NULL,
  `keyless_entry` tinyint(4) NOT NULL,
  `power_outlet` tinyint(4) NOT NULL,
  `power_steering` tinyint(4) NOT NULL,
  `lamp` tinyint(4) NOT NULL,
  `place_chair_capacity` tinyint(4) NOT NULL,
  `place_chair_material` varchar(255) NOT NULL,
  `vanity_mirror` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_comfort`
--

INSERT INTO `vehicle_comfort` (`id`, `vehicle_id`, `air_conditioner`, `steering_position`, `ambient_light`, `steer_lingkar`, `engine_start_stop_button`, `front_rea_defogger`, `front_power_window`, `gear_shift_paddle`, `headup_display`, `keyless_entry`, `power_outlet`, `power_steering`, `lamp`, `place_chair_capacity`, `place_chair_material`, `vanity_mirror`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'sdf', 'sdf', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 'sdf', 0, 0, '2020-12-03 00:08:10', '2020-12-03 00:08:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_communication`
--

CREATE TABLE `vehicle_communication` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_communication`
--

INSERT INTO `vehicle_communication` (`id`, `vehicle_id`, `audio`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'ert', 1, '2020-12-03 00:19:26', '2020-12-03 00:19:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_dimension`
--

CREATE TABLE `vehicle_dimension` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `dimension_high` varchar(50) NOT NULL,
  `dimension_long` varchar(50) NOT NULL,
  `dimension_width` varchar(50) NOT NULL,
  `meassure_id` bigint(20) NOT NULL,
  `wheelbase` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_dimension`
--

INSERT INTO `vehicle_dimension` (`id`, `vehicle_id`, `dimension_high`, `dimension_long`, `dimension_width`, `meassure_id`, `wheelbase`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, '1815', '5330', '855', 1, '3085', 1, '2020-12-02 20:01:28', '2020-12-02 20:03:51', NULL, NULL),
(2, 2, '10', '10', '10', 1, '100', 1, '2020-12-02 20:04:56', '2020-12-02 20:05:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_engine`
--

CREATE TABLE `vehicle_engine` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `vehicle_engine_cilinder` varchar(255) NOT NULL,
  `driver_type_id` bigint(20) NOT NULL,
  `engine_configuration` varchar(255) NOT NULL,
  `fuel_tank_maxium` varchar(255) NOT NULL,
  `fuel_type_id` bigint(20) NOT NULL,
  `total_cilinder` varchar(255) NOT NULL,
  `transmisi_configuration` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_engine`
--

INSERT INTO `vehicle_engine` (`id`, `vehicle_id`, `vehicle_engine_cilinder`, `driver_type_id`, `engine_configuration`, `fuel_tank_maxium`, `fuel_type_id`, `total_cilinder`, `transmisi_configuration`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, '2393', 1, 'asdsadasd', '260q', 1, '1100', 'sdf', 1, '2020-12-02 20:49:26', '2020-12-02 20:50:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_exterior`
--

CREATE TABLE `vehicle_exterior` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `front_lamp` tinyint(4) NOT NULL,
  `front_lamp_type` varchar(255) NOT NULL,
  `rearview_mirror` tinyint(4) NOT NULL,
  `roof_rock_rail` tinyint(4) NOT NULL,
  `side_step` tinyint(4) NOT NULL,
  `spoiler` tinyint(4) NOT NULL,
  `sunroof` tinyint(4) NOT NULL,
  `rear_lamp_type` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_exterior`
--

INSERT INTO `vehicle_exterior` (`id`, `vehicle_id`, `front_lamp`, `front_lamp_type`, `rearview_mirror`, `roof_rock_rail`, `side_step`, `spoiler`, `sunroof`, `rear_lamp_type`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 0, 'sdf', 0, 0, 0, 0, 0, 'sf', 0, '2020-12-03 00:12:09', '2020-12-03 00:12:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_passive_safety`
--

CREATE TABLE `vehicle_passive_safety` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `airbag_system` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_passive_safety`
--

INSERT INTO `vehicle_passive_safety` (`id`, `vehicle_id`, `airbag_system`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'sdfsdf', 1, '2020-12-02 23:57:43', '2020-12-02 23:57:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_performance`
--

CREATE TABLE `vehicle_performance` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `vehicle_power` varchar(255) NOT NULL,
  `vehicle_torsion` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_performance`
--

INSERT INTO `vehicle_performance` (`id`, `vehicle_id`, `vehicle_power`, `vehicle_torsion`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, '90', '90', 1, '2020-12-02 22:13:01', '2020-12-02 22:13:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_security`
--

CREATE TABLE `vehicle_security` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `engine_immobilizer` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_security`
--

INSERT INTO `vehicle_security` (`id`, `vehicle_id`, `engine_immobilizer`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 0, 1, '2020-12-03 00:04:36', '2020-12-03 00:04:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_suspention`
--

CREATE TABLE `vehicle_suspention` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `front_brake` varchar(255) NOT NULL,
  `front_suspention` varchar(255) NOT NULL,
  `rear_brake` varchar(255) NOT NULL,
  `rear_suspention` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_suspention`
--

INSERT INTO `vehicle_suspention` (`id`, `vehicle_id`, `front_brake`, `front_suspention`, `rear_brake`, `rear_suspention`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, '20', '2', '0', '2', 1, '2020-12-02 22:17:09', '2020-12-02 22:17:09', NULL, NULL),
(2, 1, '1', '1', '1', '1', 1, '2020-12-02 23:47:09', '2020-12-02 23:47:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` bigint(20) NOT NULL,
  `vehicle_type_code` varchar(255) NOT NULL,
  `vehicle_type_name` varchar(255) NOT NULL,
  `vehicle_type_description` text NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `vehicle_type_code`, `vehicle_type_name`, `vehicle_type_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'MO', 'Mobil', 'Vehicle type mobil', 1, '2020-12-02 15:14:47', '2020-12-02 15:14:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_velg_tire`
--

CREATE TABLE `vehicle_velg_tire` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` bigint(20) NOT NULL,
  `tire_size` varchar(255) NOT NULL,
  `velg_material` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_velg_tire`
--

INSERT INTO `vehicle_velg_tire` (`id`, `vehicle_id`, `tire_size`, `velg_material`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'sd', 'sd', 1, '2020-12-02 22:19:53', '2020-12-02 22:19:53', NULL, NULL),
(2, 1, '1', '1', 1, '2020-12-02 23:47:20', '2020-12-02 23:47:20', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_type`
--
ALTER TABLE `driver_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_post`
--
ALTER TABLE `knowledge_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_post_detail`
--
ALTER TABLE `knowledge_post_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meassure`
--
ALTER TABLE `meassure`
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
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_active_safety`
--
ALTER TABLE `vehicle_active_safety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_comfort`
--
ALTER TABLE `vehicle_comfort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_communication`
--
ALTER TABLE `vehicle_communication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_dimension`
--
ALTER TABLE `vehicle_dimension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_engine`
--
ALTER TABLE `vehicle_engine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_exterior`
--
ALTER TABLE `vehicle_exterior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_passive_safety`
--
ALTER TABLE `vehicle_passive_safety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_performance`
--
ALTER TABLE `vehicle_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_security`
--
ALTER TABLE `vehicle_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_suspention`
--
ALTER TABLE `vehicle_suspention`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_velg_tire`
--
ALTER TABLE `vehicle_velg_tire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driver_type`
--
ALTER TABLE `driver_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel_type`
--
ALTER TABLE `fuel_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `knowledge_post`
--
ALTER TABLE `knowledge_post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `knowledge_post_detail`
--
ALTER TABLE `knowledge_post_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meassure`
--
ALTER TABLE `meassure`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_active_safety`
--
ALTER TABLE `vehicle_active_safety`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_comfort`
--
ALTER TABLE `vehicle_comfort`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_communication`
--
ALTER TABLE `vehicle_communication`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_dimension`
--
ALTER TABLE `vehicle_dimension`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_engine`
--
ALTER TABLE `vehicle_engine`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_exterior`
--
ALTER TABLE `vehicle_exterior`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_passive_safety`
--
ALTER TABLE `vehicle_passive_safety`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_performance`
--
ALTER TABLE `vehicle_performance`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_security`
--
ALTER TABLE `vehicle_security`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_suspention`
--
ALTER TABLE `vehicle_suspention`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_velg_tire`
--
ALTER TABLE `vehicle_velg_tire`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

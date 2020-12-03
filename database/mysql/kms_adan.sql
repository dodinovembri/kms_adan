-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 01:07 AM
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
-- Table structure for table `dimension`
--

CREATE TABLE `dimension` (
  `id` bigint(20) NOT NULL,
  `dimension_code` varchar(255) NOT NULL,
  `dimension_name` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dimension`
--

INSERT INTO `dimension` (`id`, `dimension_code`, `dimension_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'CM', 'CM', 1, '2020-12-02 14:46:34', '2020-12-02 14:47:29', NULL, NULL);

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
(1, 2, 'Mengganti Ban Mobil', '5fc7bd964a622.jpg', '2020-12-02', 'Ban adalah salah satu komponen utama pada kaki-kaki mobil', 'Ban adalah salah satu komponen utama pada kaki-kaki mobil. Fungsinya adalah untuk memudahkan mobil melaju sekaligus penopang beban. Setiap ban memiliki ukuran yang berbeda-beda. Untuk itu berikut adalah cara untuk membaca ukuran ban mobil.', 1, '2020-12-02 09:15:18', '2020-12-02 09:15:18', NULL, NULL);

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

--
-- Dumping data for table `knowledge_post_detail`
--

INSERT INTO `knowledge_post_detail` (`id`, `knowledge_post_id`, `step_title`, `step_image`, `step_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '1', 'Cek Sisi Terluar Ban Mobils', '5fc7bdc369a3d.jpg', 'Cara melihat ukuran ban mobil yang paling mudah adalah mengecek sisi terluarnya, pihak produsen pada umumnya sudah mencantumkan ukuran serta detail lain mengenai produk mereka pada sisi terluar ban mobil.', 1, '2020-12-02 09:16:03', '2020-12-02 09:19:11', NULL, NULL);

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
(1, 'Ahmad Kurniawan', 'wawan@gmail.com', 1, NULL, '$2y$10$voAzRI4WyQS52n0cPwiD7uo14iRD9SpqkluMlhcMWYG0auhIf0qli', NULL, '2020-05-07 10:49:23', '2020-05-07 10:49:23'),
(2, 'Dodi Novembri 2', 'dodinovembri32@gmail.com', 2, NULL, '$2y$10$0Y6NB/N3U3PKDuRnpzJV8.y1vRryU8XfcKzOYi6eJb7EUJZSfvbYa', NULL, '2020-05-22 08:01:23', '2020-07-01 16:18:24'),
(11, 'Sampah Plastik', 'dodilagi@gmail.com', 2, NULL, '$2y$10$AvwELZy0IheAUC7JRrrpauS1AVrXI54yDIbrMzrwxExQzb8GiuMMi', NULL, '2020-07-12 05:40:47', '2020-07-12 05:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` bigint(20) NOT NULL,
  `vehicle_type_id` bigint(20) NOT NULL,
  `vehicle_code` varchar(255) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
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

INSERT INTO `vehicle` (`id`, `vehicle_type_id`, `vehicle_code`, `vehicle_name`, `vehicle_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'M1', 'Mobil dinas', 'mobil dinas', 1, '2020-12-02 15:20:11', '2020-12-02 15:20:11', NULL, NULL);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimension`
--
ALTER TABLE `dimension`
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
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
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
-- AUTO_INCREMENT for table `dimension`
--
ALTER TABLE `dimension`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `knowledge_post_detail`
--
ALTER TABLE `knowledge_post_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

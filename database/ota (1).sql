-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 10:07 AM
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
-- Database: `ota`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplanes`
--

CREATE TABLE `airplanes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airplanes`
--

INSERT INTO `airplanes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Fly Dubai', 'lorem', '2023-11-27 21:24:05', '2023-11-27 21:24:05'),
(2, 'Zazira', 'lorem', '2023-11-27 21:24:19', '2023-11-27 21:24:19'),
(3, 'Quatarfly', 'thyj', '2023-11-27 21:24:30', '2023-11-27 21:24:30'),
(4, 'Indigo', 'fgh', '2023-11-27 21:24:40', '2023-11-27 21:24:40'),
(7, 'Fly Dubai', 'dgf', '2023-11-28 00:35:55', '2023-11-28 00:35:55'),
(8, 'Quatarfly', 'dgfhj', '2023-11-28 00:37:41', '2023-11-28 00:37:41'),
(9, 'Indigo', 'dgfh', '2023-11-28 00:37:53', '2023-11-28 00:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `ariports`
--

CREATE TABLE `ariports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authentications`
--

CREATE TABLE `authentications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `flight_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `flight_id`, `seat_id`, `payment_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 102, 102, 2, 'two', 0, '2023-11-26 23:40:03', '2023-11-26 23:40:03', NULL),
(3, 18, 102, 1, 'two', 1, '2023-11-26 23:40:20', '2023-11-26 23:40:20', NULL),
(4, 18, 102, 3, 'two', 1, '2023-11-28 00:47:47', '2023-11-28 22:04:19', NULL),
(5, 101, 110, 1, 'two', 0, '2023-11-28 00:47:56', '2023-11-28 00:47:56', NULL),
(6, 101, 102, 2, 'two', 0, '2023-11-28 00:48:04', '2023-11-28 00:48:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh Biman', '2023-11-27 21:19:12', '2023-11-27 21:19:12'),
(2, 'Dubai', '2023-11-27 21:19:40', '2023-11-27 21:23:27'),
(4, 'Quatar', '2023-11-27 21:20:22', '2023-11-27 21:23:17'),
(5, 'India', '2023-11-27 21:20:34', '2023-11-27 21:23:07'),
(6, 'Iran', '2023-11-27 21:20:45', '2023-11-27 21:23:43'),
(7, 'Bangladesh', '2023-11-27 21:21:12', '2023-11-27 21:22:52'),
(8, 'three', '2023-11-28 00:52:40', '2023-11-28 20:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `status`, `action`, `created_at`, `updated_at`) VALUES
(1, 'gfjkh', 'ghgj', 's.kgjfk@gmail.com', '1', NULL, NULL, NULL),
(2, 'Sharmin', 'Akter', 'sharmin@gmail.com', NULL, NULL, '2023-11-28 01:48:37', '2023-11-28 01:48:37'),
(3, 'Sharmin', 'Akter', 'kamal@yahoo', NULL, NULL, '2023-11-28 01:48:58', '2023-11-28 01:48:58'),
(4, 'Sharmin', 'Akter', 'kamal@yahoo', NULL, NULL, '2023-11-28 20:42:22', '2023-11-28 20:42:22');

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
-- Table structure for table `flight_categories`
--

CREATE TABLE `flight_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(50) NOT NULL DEFAULT 'default_value',
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `baggage_allowance` varchar(100) DEFAULT NULL,
  `refundable` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_categories`
--

INSERT INTO `flight_categories` (`id`, `category_name`, `description`, `price`, `baggage_allowance`, `refundable`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'three', 'fhgj', '7000.00', '20k', 0, NULL, '2023-11-26 23:29:32', '2023-11-26 23:29:32'),
(3, 'four', 'fh', '50000.00', '10', 1, NULL, '2023-11-26 23:29:46', '2023-11-26 23:29:46'),
(4, 'two', 'kiylk', '50000.00', '30k', 0, NULL, '2023-11-28 20:43:59', '2023-11-28 20:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `flight_classes`
--

CREATE TABLE `flight_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_classes`
--

INSERT INTO `flight_classes` (`id`, `flight_id`, `seat_id`, `class_name`, `price`, `status`, `created_at`, `updated_at`) VALUES
(2, 110, 2, 'four', '10000.00', 0, '2023-11-26 23:30:12', '2023-11-26 23:30:12'),
(3, 110, 2, 'two', '2000.00', 1, '2023-11-26 23:30:22', '2023-11-26 23:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `flight_segments`
--

CREATE TABLE `flight_segments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airplane_id` bigint(20) NOT NULL,
  `flight_number` varchar(10) DEFAULT NULL,
  `departure_city` varchar(255) DEFAULT NULL,
  `arrival_city` varchar(255) DEFAULT NULL,
  `departure_airport` varchar(255) DEFAULT NULL,
  `arrival_airport` varchar(255) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `is_direct_flight` tinyint(1) NOT NULL,
  `connection_airport` varchar(255) DEFAULT NULL,
  `connection_duration` bigint(20) DEFAULT NULL,
  `airline` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_segments`
--

INSERT INTO `flight_segments` (`id`, `airplane_id`, `flight_number`, `departure_city`, `arrival_city`, `departure_airport`, `arrival_airport`, `departure_date`, `arrival_date`, `is_direct_flight`, `connection_airport`, `connection_duration`, `airline`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, '01', 'Dubai', 'bangladesh', NULL, NULL, NULL, NULL, 1, 'Zajira', 2, NULL, '2000.00', '2023-11-28 23:19:56', '2023-11-28 23:19:56'),
(2, 1, '01', 'Dubai', 'bangladesh', NULL, NULL, '2023-11-02', '2023-11-03', 1, 'Zajira', 2, NULL, '50000.00', '2023-11-28 23:20:53', '2023-11-28 23:20:53'),
(3, 1, '101', 'Dubai', 'India', NULL, NULL, '2023-11-08', '2023-11-09', 1, 'Fly Dubai', 3, NULL, '5000.00', '2023-11-28 23:21:48', '2023-11-28 23:21:48');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_11_12_032404_create_roles_table', 1),
(5, '2023_11_12_043129_create_permissions_table', 1),
(6, '2023_11_14_071833_create_users_table', 1),
(7, '2023_11_18_123011_create_customers_table', 1),
(8, '2023_11_25_040319_create_flight_category', 1),
(9, '2023_11_25_043010_create_flight_classes', 1),
(10, '2023_11_25_174303_create_bookings_table', 1),
(11, '2023_11_26_055232_create_seats_table', 1),
(13, '2023_11_27_040724_create_payments_table', 1),
(14, '2023_11_24_061451_create_cities_table', 2),
(15, '2023_11_24_061508_create_ariports_table', 2),
(16, '2023_11_24_061637_create_airplanes_table', 2),
(17, '2023_11_27_061426_create_booking_details_table', 2),
(18, '2023_11_27_123011_create_customers_table', 3),
(19, '2023_11_26_150114_create_flight_segments_table', 4),
(21, '2023_11_30_044049_create_authentications_table', 5);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customer_id`, `amount`, `payment_method`, `transaction_id`, `payment_status`, `payment_date`, `notes`, `created_at`, `updated_at`) VALUES
(5, 17, '8000.00', 'two', '4', 'two', '2023-11-09 00:00:00', 'anything', '2023-11-27 21:28:34', '2023-11-27 21:28:34'),
(6, 18, '4.00', 'two', '4', 'two', '2023-11-09 00:00:00', 'anything', '2023-11-27 22:08:57', '2023-11-27 22:08:57'),
(7, 101, '80000.00', 'three', '40', 'one', '2023-11-08 00:00:00', 'anything', '2023-11-27 22:09:29', '2023-11-27 22:09:29'),
(8, 18, '54655.00', 'one', '01', 'one', NULL, 'anything', '2023-11-27 22:55:02', '2023-11-27 22:55:02'),
(9, 101, '8000.00', 'three', '01', 'two', '2023-11-02 00:00:00', 'anything', '2023-11-28 00:14:25', '2023-11-28 00:14:25'),
(10, 18, '80000.00', 'two', '01', 'two', '2023-11-02 00:00:00', 'anything', '2023-11-28 00:14:45', '2023-11-28 00:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-11-26 23:24:16', NULL),
(2, 'Admin', 'admin', '2023-11-26 23:24:16', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-11-26 23:24:16', NULL),
(6, 'sharmin', 'suparadmin', '2023-11-28 22:29:30', '2023-11-28 22:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `flight_id`, `category_id`, `class_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 102, 1, 3, '0', '2023-11-26 23:30:45', '2023-11-26 23:30:45', NULL),
(2, 110, 12, 21, '1', '2023-11-26 23:31:02', '2023-11-26 23:31:02', NULL),
(3, 102, 4, 4, '0', '2023-11-26 23:31:15', '2023-11-26 23:31:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) DEFAULT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `role_id`, `password`, `language`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'Maksuda', 'মাকসুদা', 'maksuda@gmail.com', '0185456', '০১৮৮৮', 1, '$2y$12$QUzee5QFYcUQanwa1sryN.Iv8QKU.LoPHU4DK.BDA0dMzxg/xdjV.', 'en', '4741701231278.jpg', 1, 1, NULL, '2023-11-28 22:14:38', '2023-11-28 22:14:38', NULL),
(29, 'saba', 'সাবা', 'sara@gmail.com', '4545456', '৪৫৪৫৪৫৬', 1, '$2y$12$Uc85FMFxUgnrTMxy0dpQ0.UkOcB4ixDOhG/IGHuSqTAJxJ/cXIkja', 'en', '9051701231414.jpg', 1, 1, NULL, '2023-11-28 22:16:54', '2023-11-28 22:16:54', NULL),
(35, 'eiti', 'ইতি', 'eiti@gmail.com', '0185', '০১৮৫', 1, '$2y$12$CsvdPu.mxKlMrSlDXyco9.tCSgJ4cfuj.wfzJb742tzdxg2korF8C', 'en', '1141701232933.jpg', 1, 1, NULL, '2023-11-28 22:42:13', '2023-11-28 22:42:13', NULL),
(41, 'sharmin', 'শারমিন  আক্তার', 'saba@gmail.com', '455428', '০১', 1, '$2y$12$FCvz65cpgrMKZ1hN3F6V3OvJpXA4iY9Jt/6gh36EItZj2evUqbvCu', 'en', NULL, 1, 1, NULL, '2023-11-28 23:03:07', '2023-11-28 23:03:07', NULL),
(43, 'eiti', 'ইতি', 'sharmin@gmail.com', '586', NULL, 2, '$2y$12$72HoY2g4wvHpg02fU/3nv.3s2DWBynv/WjbZp6D.7tlnaeC3wlR0W', 'en', NULL, 1, 1, NULL, '2023-11-28 23:03:50', '2023-11-28 23:03:50', NULL),
(44, 'sharmin', NULL, 'sharmin@yahoo.com', '0185528', NULL, 2, '$2y$12$ZU8g/n0GEQK8XE7g/Ximt.rI0h1neHxk6lFs4laQzxZOb4h1eC5rO', 'en', '3151701234260.jpg', 1, 0, NULL, '2023-11-28 23:04:20', '2023-11-28 23:04:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplanes`
--
ALTER TABLE `airplanes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ariports`
--
ALTER TABLE `ariports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentications`
--
ALTER TABLE `authentications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authentications_contact_unique` (`contact`),
  ADD UNIQUE KEY `authentications_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flight_categories`
--
ALTER TABLE `flight_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_classes`
--
ALTER TABLE `flight_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_segments`
--
ALTER TABLE `flight_segments`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airplanes`
--
ALTER TABLE `airplanes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ariports`
--
ALTER TABLE `ariports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flight_categories`
--
ALTER TABLE `flight_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flight_classes`
--
ALTER TABLE `flight_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight_segments`
--
ALTER TABLE `flight_segments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 08:16 AM
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
(3, 'Quatarfly', 'Check in online 48 hours', '2023-11-27 21:24:30', '2023-12-05 21:02:56'),
(10, 'Zazira', 'lorem', '2023-12-03 00:28:09', '2023-12-03 00:28:09'),
(11, 'Indigo', 'lorem', '2023-12-05 21:01:23', '2023-12-05 21:01:23'),
(12, 'Fly Dubai', 'Search & book your flights online', '2023-12-05 21:02:20', '2023-12-05 21:02:20'),
(13, 'Fly Dubai', 'jdhfjd', '2023-12-05 23:01:23', '2023-12-05 23:01:23'),
(14, 'Indigo', 'g', '2023-12-09 22:01:04', '2023-12-09 22:01:04'),
(15, 'Zazira', 'fh', '2023-12-11 00:42:00', '2023-12-11 00:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `airplane_seats`
--

CREATE TABLE `airplane_seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airplane_id` bigint(20) NOT NULL,
  `flight_class_id` bigint(20) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airplane_seats`
--

INSERT INTO `airplane_seats` (`id`, `airplane_id`, `flight_class_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '10.00', '2023-12-04 22:07:06', '2023-12-04 22:07:06'),
(2, 10, 3, '1.00', '2023-12-09 00:00:28', '2023-12-09 00:00:37'),
(3, 12, 1, '1.00', '2023-12-09 21:32:38', '2023-12-09 21:32:38'),
(6, 2, 1, '1.00', '2023-12-11 00:32:18', '2023-12-11 00:32:18'),
(7, 2, 1, '1.00', '2023-12-11 00:56:14', '2023-12-11 00:56:14'),
(8, 3, 1, '1.00', '2023-12-11 00:58:47', '2023-12-11 00:58:47'),
(9, 11, 3, '1.00', '2023-12-11 01:11:46', '2023-12-11 01:11:46'),
(10, 11, 1, '2.00', '2023-12-11 23:06:05', '2023-12-11 23:06:05'),
(11, 1, 3, '1.00', '2023-12-20 21:29:23', '2023-12-20 21:29:23'),
(12, 2, 3, '1.00', '2023-12-20 21:49:26', '2023-12-20 21:49:26'),
(13, 2, 3, '2.00', '2023-12-20 22:24:20', '2023-12-20 23:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `ariports`
--

CREATE TABLE `ariports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ariports`
--

INSERT INTO `ariports` (`id`, `city_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shah Amanat International Airport', NULL, NULL),
(2, 2, 'Hazrat Shahjalal International Airport', NULL, NULL),
(3, 4, 'Hamad International Airport', NULL, NULL),
(4, NULL, 'Osmani International Airport', '2023-12-05 21:18:45', '2023-12-05 21:19:41'),
(5, NULL, 'Denver International Airport', '2023-12-05 21:20:41', '2023-12-05 21:20:57'),
(11, NULL, 'Zazira', '2023-12-11 00:17:38', '2023-12-11 00:17:57');

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

--
-- Dumping data for table `authentications`
--

INSERT INTO `authentications` (`id`, `name`, `contact`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sharmin', '018', 's@gamil.com', '123', '2023-10-11 18:00:00', '2023-10-19 05:48:55'),
(9, 'Afrida', '01', 'sharmin@gmail.com', '$2y$12$Su63lhRjKh7PJGvr1ytrw.G5fUHuVcFodFk0wXxa9FLYUE.UKxpQ6', '2023-12-03 01:22:48', '2023-12-03 01:22:48'),
(10, 'kamal', '016', 'kamal@yahoo.com', '$2y$12$ZaBoLg5bAGmv4Imb0VwhQe9rFPUqBvlf61CXL3w5d577Wp7f.CFne', '2023-12-04 23:17:21', '2023-12-04 23:17:21'),
(11, 'Afrida', '01888', 'sharmmin@gmail.com', '$2y$12$EIsGCehJJat5Y1wr0othduYRIW7IWN.kjzB3dwdYH/U0oDRGE9x56', '2023-12-11 23:51:04', '2023-12-11 23:51:04'),
(12, 'Sharmin  Akter', '0152', 's.akter.2043@gmail.com', '$2y$12$0jLLToSoLbVXHQuvqzKB9.hPFTnyMDPN0kL6VYfuVun0.xYsCo6Y.', '2023-12-12 00:13:07', '2023-12-12 00:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `flight_id` int(11) DEFAULT NULL,
  `flight_class_id` int(11) DEFAULT NULL,
  `flight_category_id` int(11) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `flight_id`, `flight_class_id`, `flight_category_id`, `booking_date`, `qty`, `amount`, `vat`, `total_amount`, `payment_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 17, 3, 26, '2023-12-21', 1, '0.80', '0.15', '80000.00', NULL, 0, '2023-12-21 01:08:54', '2023-12-21 01:08:54', NULL);

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
(1, 'Chattogram', '2023-11-27 21:19:12', '2023-11-27 21:19:12'),
(2, 'Dhaka', '2023-11-27 21:19:40', '2023-11-27 21:23:27'),
(4, 'Doha', '2023-11-27 21:20:22', '2023-11-27 21:23:17'),
(5, 'Kalkata', '2023-11-27 21:20:34', '2023-11-27 21:23:07'),
(6, 'Barisal', '2023-11-27 21:20:45', '2023-11-27 21:23:43'),
(7, 'Cox-bazar', '2023-11-27 21:21:12', '2023-11-27 21:22:52'),
(8, 'Sylet', '2023-11-28 00:52:40', '2023-12-03 00:27:20'),
(9, 'Berlin', '2023-12-05 21:03:18', '2023-12-05 21:03:18'),
(10, 'Tokyo', '2023-12-05 21:03:25', '2023-12-05 21:03:25');

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
(3, 'Maksuda', 'Akter', 'kamal@yahoo', 'accept', NULL, '2023-11-28 01:48:58', '2023-12-08 22:55:32'),
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
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `baggage_allowance` varchar(100) DEFAULT NULL,
  `refundable` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_categories`
--

INSERT INTO `flight_categories` (`id`, `name`, `description`, `baggage_allowance`, `refundable`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Multicity', 'number of bags', '10', 0, NULL, '2023-12-05 21:06:52', '2023-12-05 21:08:39'),
(3, 'Multicity', 'Check-in online', '20', 1, NULL, '2023-12-05 21:07:16', '2023-12-05 21:07:52'),
(5, 'One Way', 'lorem', '30', 1, NULL, '2023-12-05 21:08:15', '2023-12-05 21:08:31'),
(16, 'Multicity', 'try', '4', 1, NULL, '2023-12-11 00:33:28', '2023-12-11 00:33:28'),
(17, 'Round trip', 'kalkatagjfgnjfg', '5', 1, NULL, '2023-12-11 00:54:10', '2023-12-11 00:54:10'),
(18, 'One Way', 'tryyyy', '100', 2, NULL, '2023-12-11 01:13:34', '2023-12-11 01:13:34'),
(19, 'Multicity', 'today', '5', 0, NULL, '2023-12-11 21:58:34', '2023-12-11 21:58:45'),
(20, 'One Way', 'ghh', '10', 2, NULL, '2023-12-11 22:02:36', '2023-12-11 22:02:36'),
(21, 'Round trip', 'ttr', '20', 2, NULL, '2023-12-11 22:11:08', '2023-12-11 22:11:08'),
(22, 'One Way', '2nd try', '50', 1, NULL, '2023-12-11 23:06:53', '2023-12-11 23:08:25'),
(23, 'Multicity', 'fjfjg', '10', 1, NULL, '2023-12-11 23:10:19', '2023-12-11 23:10:19'),
(24, 'Round trip', 'gggg', '100', 1, NULL, '2023-12-20 21:31:19', '2023-12-20 21:31:19'),
(25, 'Round trip', 'lorem', '20', 2, NULL, '2023-12-20 21:45:58', '2023-12-20 21:45:58'),
(26, 'Multicity', 'tyty', '111', 1, NULL, '2023-12-20 22:23:00', '2023-12-20 22:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `flight_classes`
--

CREATE TABLE `flight_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_classes`
--

INSERT INTO `flight_classes` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Business Class', NULL, '2023-12-04 21:55:03', '2023-12-04 21:59:18'),
(2, 'Economic', NULL, '2023-12-05 21:09:00', '2023-12-05 21:09:00'),
(3, 'First class', NULL, '2023-12-05 21:09:11', '2023-12-05 21:09:11'),
(4, 'premium', NULL, '2023-12-05 21:09:21', '2023-12-05 21:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `flight_prices`
--

CREATE TABLE `flight_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight_category_id` bigint(20) DEFAULT NULL,
  `flight_class_id` int(11) NOT NULL,
  `flight_route_id` bigint(20) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_prices`
--

INSERT INTO `flight_prices` (`id`, `flight_category_id`, `flight_class_id`, `flight_route_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 3, '80000.00', NULL, '2023-12-04 22:40:32', '2023-12-05 21:23:47'),
(2, 2, 2, 3, '2000.00', NULL, '2023-12-05 21:22:47', '2023-12-05 21:22:47'),
(3, 4, 3, 3, '50000.00', NULL, '2023-12-05 21:23:28', '2023-12-05 21:23:28'),
(4, 3, 4, 1, '80000.00', NULL, '2023-12-05 21:24:19', '2023-12-05 21:24:19'),
(5, 3, 3, 3, '50000.00', NULL, '2023-12-05 21:24:36', '2023-12-05 21:24:36'),
(6, 2, 1, 3, '50000.00', NULL, '2023-12-11 00:39:07', '2023-12-11 00:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `flight_routes`
--

CREATE TABLE `flight_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `departure_city` bigint(20) NOT NULL,
  `arrival_city` bigint(20) NOT NULL,
  `departure_airport` bigint(20) NOT NULL,
  `arrival_airport` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_routes`
--

INSERT INTO `flight_routes` (`id`, `name`, `departure_city`, `arrival_city`, `departure_airport`, `arrival_airport`, `created_at`, `updated_at`) VALUES
(3, 'Dhaka-Berlin', 7, 6, 3, 4, '2023-12-05 21:06:02', '2023-12-06 01:34:31'),
(8, 'Dhaka-Berlin', 2, 9, 2, 1, '2023-12-06 22:33:02', '2023-12-06 22:33:02'),
(9, 'Kalkata-Barisal', 5, 6, 2, 1, '2023-12-08 23:14:30', '2023-12-08 23:14:30'),
(10, 'Chattogram-doha', 1, 4, 1, 3, '2023-12-09 21:42:45', '2023-12-09 21:42:45'),
(12, 'Dhaka-Berlin', 9, 2, 4, 2, '2023-12-11 00:25:06', '2023-12-11 00:25:06'),
(13, 'Dhaka-Chattogram', 2, 1, 2, 1, '2023-12-11 01:10:19', '2023-12-11 01:10:19'),
(14, 'Dhaka-Berlin', 2, 9, 2, 1, '2023-12-20 21:30:46', '2023-12-20 21:30:46'),
(15, 'Dhaka-Berlin', 1, 9, 1, 1, '2023-12-20 21:43:26', '2023-12-20 21:43:26'),
(16, 'Dhaka-Berlin', 2, 9, 2, 1, '2023-12-20 21:44:21', '2023-12-20 21:44:21'),
(17, 'Dhaka-Doha', 2, 4, 2, 3, '2023-12-20 22:22:25', '2023-12-20 22:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `flight_segments`
--

CREATE TABLE `flight_segments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airplane_id` bigint(20) NOT NULL,
  `flight_route_id` bigint(20) NOT NULL,
  `flight_number` varchar(10) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `is_direct_flight` tinyint(1) NOT NULL,
  `connection_airport` varchar(255) DEFAULT NULL,
  `connection_duration` bigint(20) DEFAULT NULL,
  `airline` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_segments`
--

INSERT INTO `flight_segments` (`id`, `airplane_id`, `flight_route_id`, `flight_number`, `departure_date`, `arrival_date`, `is_direct_flight`, `connection_airport`, `connection_duration`, `airline`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '01', '2023-12-06', '2023-12-08', 1, '3', 2, 'United Airlines', '2023-12-06 22:31:35', '2023-12-06 22:31:35'),
(2, 3, 9, '01', '2023-12-11', '2023-12-06', 1, '1', 2, 'American Airlines', '2023-12-08 23:15:53', '2023-12-08 23:15:53'),
(4, 11, 1, NULL, '2023-12-06', '2023-12-07', 0, '5', 3, 'United Airlines', '2023-12-09 21:20:58', '2023-12-09 21:20:58'),
(7, 11, 1, '01', '2023-12-03', '2023-12-04', 1, '1', 1, 'United Airlines', '2023-12-09 22:04:28', '2023-12-09 22:04:28'),
(8, 2, 3, '01', '2023-12-02', '2023-12-03', 1, '5', 1, 'American Airlines', '2023-12-11 00:22:20', '2023-12-11 00:22:20'),
(9, 10, 3, '01', '2023-12-05', '2023-12-06', 1, '1', 1, 'United Airlines', '2023-12-11 00:26:05', '2023-12-11 00:26:05'),
(10, 2, 3, '01', '2023-12-04', '2023-12-05', 1, '1', 2, 'United Airlines', '2023-12-11 00:35:50', '2023-12-11 00:35:50'),
(13, 3, 9, '101', '2023-12-11', '2023-12-12', 1, '1', 1, 'Delta Air Lines', '2023-12-11 00:51:46', '2023-12-11 00:51:46'),
(14, 11, 13, '01', '2023-12-06', '2023-12-07', 1, '1', 2, 'United Airlines', '2023-12-11 01:12:32', '2023-12-11 01:12:32'),
(16, 2, 3, '01', '2023-12-07', '2023-12-08', 1, '4', 2, 'United Airlines', '2023-12-20 21:47:19', '2023-12-20 21:47:19'),
(17, 2, 17, '101', '2023-12-07', '2023-12-08', 1, '3', 2, 'Delta Air Lines', '2023-12-20 22:23:58', '2023-12-20 22:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `front_payments`
--

CREATE TABLE `front_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2023_11_26_055232_create_seats_table', 1),
(13, '2023_11_27_040724_create_payments_table', 1),
(14, '2023_11_24_061451_create_cities_table', 2),
(15, '2023_11_24_061508_create_ariports_table', 2),
(16, '2023_11_24_061637_create_airplanes_table', 2),
(17, '2023_11_27_061426_create_booking_details_table', 2),
(18, '2023_11_27_123011_create_customers_table', 3),
(21, '2023_11_30_044049_create_authentications_table', 5),
(22, '2023_11_24_063544_create_flight_routes_table', 6),
(24, '2023_11_25_043010_create_flight_prices', 6),
(26, '2023_12_04_063926_create_airplane_seats_table', 6),
(29, '2023_11_25_040319_create_flight_category', 7),
(30, '2023_11_25_040319_create_flight_classes', 7),
(32, '2023_11_25_174303_create_bookings_table', 8),
(33, '2023_11_26_150114_create_flight_segments_table', 9),
(34, '2023_12_10_041118_create_front_payments_table', 10);

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
(6, 18, '4.00', 'two', '4', 'two', '2023-11-09 00:00:00', 'anything', '2023-11-27 22:08:57', '2023-11-27 22:08:57'),
(7, 101, '80000.00', 'three', '40', 'one', '2023-11-08 00:00:00', 'anything', '2023-11-27 22:09:29', '2023-11-27 22:09:29'),
(9, 101, '8000.00', 'three', '01', 'two', '2023-11-02 00:00:00', 'anything', '2023-11-28 00:14:25', '2023-11-28 00:14:25'),
(10, 18, '80000.00', 'two', '01', 'two', '2023-11-02 00:00:00', 'anything', '2023-11-28 00:14:45', '2023-11-28 00:14:45'),
(11, 1, '80000.00', 'Online Payment', 'f01', '1', '2023-12-10 00:00:00', '', '2023-12-09 21:36:39', '2023-12-09 21:36:39'),
(12, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-10 00:00:00', '', '2023-12-09 21:55:22', '2023-12-09 21:55:22'),
(13, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-11 00:00:00', '', '2023-12-10 23:37:54', '2023-12-10 23:37:54'),
(14, 1, '80000.00', 'Online Payment', '011', '1', '2023-12-11 00:00:00', '', '2023-12-11 01:06:29', '2023-12-11 01:06:29'),
(15, 1, '70000.00', 'Online Payment', 'F001', '1', '2023-12-11 00:00:00', '', '2023-12-11 01:17:18', '2023-12-11 01:17:18'),
(16, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-12 00:00:00', '', '2023-12-11 21:01:41', '2023-12-11 21:01:41'),
(17, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-12 00:00:00', '', '2023-12-11 23:16:20', '2023-12-11 23:16:20'),
(18, 1, NULL, 'Online Payment', NULL, '1', '2023-12-12 00:00:00', '', '2023-12-11 23:27:14', '2023-12-11 23:27:14'),
(19, 10, '80000.00', 'Online Payment', '01', '1', '2023-12-12 00:00:00', '', '2023-12-11 23:53:01', '2023-12-11 23:53:01'),
(20, 12, '70000.00', 'Online Payment', '01', '1', '2023-12-12 00:00:00', '', '2023-12-12 00:17:21', '2023-12-12 00:17:21'),
(21, 12, '40000.00', 'Online Payment', '01', '1', '2023-12-12 00:00:00', '', '2023-12-12 00:23:36', '2023-12-12 00:23:36'),
(22, 10, '80000.00', 'Online Payment', '01', '1', '2023-12-20 00:00:00', '', '2023-12-19 20:45:45', '2023-12-19 20:45:45'),
(23, 10, '80000.00', 'Online Payment', '01', '1', '2023-12-20 00:00:00', '', '2023-12-20 00:52:04', '2023-12-20 00:52:04'),
(24, 10, '80000.00', 'Online Payment', '01', '1', '2023-12-21 00:00:00', '', '2023-12-20 21:07:38', '2023-12-20 21:07:38'),
(25, 1, '40000.00', 'Online Payment', 'f01', '1', '2023-12-21 00:00:00', '', '2023-12-20 21:39:35', '2023-12-20 21:39:35'),
(26, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-21 00:00:00', '', '2023-12-20 22:10:35', '2023-12-20 22:10:35'),
(27, 1, '80000.00', 'Online Payment', 'f01', '1', '2023-12-21 00:00:00', '', '2023-12-20 22:25:19', '2023-12-20 22:25:19'),
(28, 1, '70000.00', 'Online Payment', 'f01', '1', '2023-12-21 00:00:00', '', '2023-12-20 22:47:47', '2023-12-20 22:47:47'),
(29, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-21 00:00:00', '', '2023-12-21 00:46:03', '2023-12-21 00:46:03'),
(30, 1, '80000.00', 'Online Payment', '01', '1', '2023-12-21 00:00:00', '', '2023-12-21 01:08:54', '2023-12-21 01:08:54');

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
(6, 'sharmin', 'suparadmin', '2023-11-28 22:29:30', '2023-11-28 22:29:30'),
(7, 'superadminn', 'kamal', '2023-12-03 00:25:44', '2023-12-03 00:26:03');

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
(3, 102, 4, 4, '0', '2023-11-26 23:31:15', '2023-11-26 23:31:15', NULL),
(4, 113, 1, 10, '0', '2023-12-05 21:09:58', '2023-12-05 21:09:58', NULL),
(5, 113, 1, 10, '1', '2023-12-05 21:11:10', '2023-12-05 21:11:10', NULL),
(6, 110, 12, NULL, '1', '2023-12-05 21:11:20', '2023-12-05 21:11:20', NULL),
(7, 110, 12, NULL, '1', '2023-12-05 21:11:29', '2023-12-05 21:11:29', NULL),
(8, 110, 12, NULL, '1', '2023-12-05 21:11:45', '2023-12-05 21:11:45', NULL),
(9, 102, 4, NULL, '1', '2023-12-05 21:11:59', '2023-12-05 21:11:59', NULL),
(10, 102, 1, 11, '1', '2023-12-05 21:13:38', '2023-12-05 21:13:38', NULL),
(11, 102, 1, 10, '1', '2023-12-05 21:13:53', '2023-12-05 21:13:53', NULL);

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
(1, 'sharmin', NULL, 'sharmin@yahoo.com', '01', NULL, 1, '$2y$12$YuDGVkbZSwOz3YOYoSinCORAFP/SWOIzybzyAYPt.8Bw88Q8a/RjO', 'en', '1851701489536.jpg', 1, 1, NULL, '2023-12-01 21:58:57', '2023-12-01 21:58:57', NULL),
(49, 'sharmin', NULL, 'sharminn@yahoo.com', '015454', NULL, 1, '$2y$12$CmSH7OOuOnp4sUlNbHm8r.UsSLbkq7oIBwdTyX0bWwwwAZTdner8K', 'en', '8641701585073.jpg', 1, 0, NULL, '2023-12-03 00:31:13', '2023-12-03 00:31:13', NULL),
(50, 'eiti', NULL, 'sharmiin@yahoo.com', '01888', NULL, 2, '$2y$12$ay5IfqQfP8HAWmfbrGWMCu9RsOdp9wN5kPBqmpJdoJ3WIPONfCADq', 'en', NULL, 1, 1, NULL, '2023-12-20 21:35:15', '2023-12-20 21:35:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplanes`
--
ALTER TABLE `airplanes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airplane_seats`
--
ALTER TABLE `airplane_seats`
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
-- Indexes for table `flight_prices`
--
ALTER TABLE `flight_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_routes`
--
ALTER TABLE `flight_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_segments`
--
ALTER TABLE `flight_segments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_payments`
--
ALTER TABLE `front_payments`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `airplane_seats`
--
ALTER TABLE `airplane_seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ariports`
--
ALTER TABLE `ariports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `flight_classes`
--
ALTER TABLE `flight_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flight_prices`
--
ALTER TABLE `flight_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flight_routes`
--
ALTER TABLE `flight_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `flight_segments`
--
ALTER TABLE `flight_segments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `front_payments`
--
ALTER TABLE `front_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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

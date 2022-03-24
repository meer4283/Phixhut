-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 04:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `service_cost` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `service_id`, `device_id`, `service_cost`, `order_id`) VALUES
(1, '1', '1', '25', '3'),
(2, '2', '1', '50', '2');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `device_id` int(11) UNSIGNED NOT NULL,
  `device_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `device_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `device_name`, `slug`, `device_img`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Note 10', 'samsung-note-10', 'https://www.gizmochina.com/wp-content/uploads/2019/08/Samsung-Galaxy-Note-10-500x500.jpg', '2021-07-08 14:22:21', '2021-11-07 19:46:52'),
(2, 'Iphone 11 ', 'iphone-11', 'https://www.gizmochina.com/wp-content/uploads/2019/09/Apple-iPhone-11-Pro-Max-1-500x500.jpg', '2021-07-08 14:22:35', '2021-11-07 19:47:13'),
(3, 'Samsung Galaxy Z Fold 3', '', '', '2021-08-18 01:17:51', NULL),
(4, 'Samsung Galaxy Z Fold 2', '', '', '2021-08-18 01:18:02', NULL),
(5, 'Samsung Galaxy S20 Ultra', '', '', '2021-08-18 01:18:24', NULL),
(6, 'Samsung Galaxy Note 20', '', '', '2021-08-18 01:18:36', NULL),
(7, 'Samsung Galaxy Note 10', '', '', '2021-08-18 01:18:48', NULL),
(8, 'Samsung Galaxy S21', '', '', '2021-08-18 01:18:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_services`
--

CREATE TABLE `device_services` (
  `service_id` int(255) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device_services`
--

INSERT INTO `device_services` (`service_id`, `device_id`, `service_name`, `service_cost`) VALUES
(1, '1', 'Screen Change', '25'),
(2, '1', 'Mother \'Board', '50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `fname`, `lname`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`) VALUES
(2, 'qwewqe', 'wqewqe', 'wqeqwe', 'adeelhussain0035@gmail.com', 'H# R-255 sector 15/B buffer Zone', 'North Karachi', 'United States', 'California', '75850');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20210708141901, 'Devices', '2021-07-08 11:21:38', '2021-07-08 11:21:38', 0),
(20210709125300, 'Zipcodes', '2021-07-11 07:39:31', '2021-07-11 07:39:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zipcodes`
--

CREATE TABLE `zipcodes` (
  `zip_id` int(11) UNSIGNED NOT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `eligible_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zipcodes`
--

INSERT INTO `zipcodes` (`zip_id`, `zipcode`, `eligible_type`, `created_at`, `updated_at`) VALUES
(1, 'ub12ez', '1', '2021-07-11 10:40:30', NULL),
(2, 'WC2N 5HS', '2', '2021-07-11 10:40:41', NULL),
(3, 'E10 5DR', '3', '2021-07-11 10:40:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `device_services`
--
ALTER TABLE `device_services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `zipcodes`
--
ALTER TABLE `zipcodes`
  ADD PRIMARY KEY (`zip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `device_services`
--
ALTER TABLE `device_services`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zipcodes`
--
ALTER TABLE `zipcodes`
  MODIFY `zip_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

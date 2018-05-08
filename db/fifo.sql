-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 11:45 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.29-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifo`
--

-- --------------------------------------------------------

--
-- Table structure for table `fifo_amenties`
--

CREATE TABLE `fifo_amenties` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_amenties`
--

INSERT INTO `fifo_amenties` (`id`, `name`, `status`) VALUES
(1, 'Wifi', 1),
(2, 'Car Parking', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_countries`
--

CREATE TABLE `fifo_countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_countries`
--

INSERT INTO `fifo_countries` (`id`, `name`, `status`) VALUES
(1, 'india', 1),
(2, 'Australia', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotels`
--

CREATE TABLE `fifo_hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotels`
--

INSERT INTO `fifo_hotels` (`id`, `name`, `description`, `contact_no`, `status`, `user_id`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(1, 'Hotel Taj International', 'Hotel Taj International', 987655544334, 0, 2, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Hotel Taj ', 'Hotel Taj ', 987655544334, 0, 2, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Hotel Taj ', 'Hotel Taj ', 987655544334, 0, 3, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Hotel Taj  kar', 'Hotel Taj ', 987655544334, 0, 3, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Hotel Taj  kar wadi', 'Hotel Taj ', 987655544334, 0, 2, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Hotel Vivanda', 'Hotel Taj ', 987655544334, 0, 3, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Hotel Surya', 'Hotel Taj ', 987655544334, 0, 2, '10:20:00', '11:30:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Hotel SeaShell', 'Hotel SeaShell', 23143523, 0, 2, '11:10:00', '12:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Hotel DAM', 'Hotel DAM', 9887666559, 0, 4, '11:32:00', '11:32:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'asfasf', 'asfas', 12412, 0, 2, '10:20:00', '12:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'test', 'test', 9887666559, 0, 2, '11:30:00', '24:12:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_amenties`
--

CREATE TABLE `fifo_hotel_amenties` (
  `hotel_id` int(11) NOT NULL,
  `amenty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_details`
--

CREATE TABLE `fifo_hotel_details` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `policies` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `near_by_location` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_details`
--

INSERT INTO `fifo_hotel_details` (`id`, `hotel_id`, `address1`, `address2`, `city`, `state`, `country`, `latitude`, `longitude`, `image_path`, `policies`, `website`, `near_by_location`, `created_at`, `updated_at`) VALUES
(1, 1, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 1, 0, 0, '/var/www/html/fifo//uploads/Hotel-Taj-International/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(2, 2, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 0, 0, 0, '/var/www/html/fifo//uploads/Hotel-Taj-/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(3, 3, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 0, 0, 0, '/var/www/html/fifo//uploads/Hotel-Taj-/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(4, 4, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 1, 0, 0, '/var/www/html/fifo//uploads/Hotel-Taj--kar/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(5, 5, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 1, 0, 0, '/var/www/html/fifo//uploads/Hotel-Taj--kar-wadi/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(6, 6, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 1, 1, 0, 0, '/var/www/html/fifo//uploads/Hotel-Vivanda/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(7, 7, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 1, 0, 0, '/var/www/html/fifo//uploads/Hotel-Surya/', 'test', 'http://www.google.com', 'test', NULL, NULL),
(8, 8, 'test', 'test', 'test', 2, 1, 0, 0, NULL, '343235', 'http://www.google.com', '', NULL, NULL),
(9, 9, 'zxvzxv', '', 'zxbzxb', 1, 1, 0, 0, NULL, '423', 'http://www.google.com', '', NULL, NULL),
(10, 10, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 2, 1, 0, 0, NULL, 'afasf', 'http://www.google.com', '', NULL, NULL),
(11, 11, 'kjkjk', '', 'sadfsdgsd', 1, 1, 0, 0, NULL, 'xcbxcbcx', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_rooms`
--

CREATE TABLE `fifo_hotel_rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `description` text,
  `no_of_people` int(11) NOT NULL,
  `images` varchar(50) DEFAULT NULL,
  `additional_details` text,
  `cancellation_policies` text,
  `actual_price` double NOT NULL,
  `discount_price` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_rooms`
--

INSERT INTO `fifo_hotel_rooms` (`id`, `hotel_id`, `room_name`, `description`, `no_of_people`, `images`, `additional_details`, `cancellation_policies`, `actual_price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 1, 'ABC', 'ABC', 2, NULL, 'nvmzxmn', 'test', 10, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'XXX', 'super room', 2, NULL, 'kcxkxjckj', 'kjxkcjbkjx', 20, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'XXX', 'super room', 2, NULL, 'kcxkxjckj', 'kjxkcjbkjx', 20, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'ABCCCC', 'vxlcv', 8, NULL, 'nvn', 'cvxbxc', 80, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'ABCCCC', 'vxlcv', 8, NULL, 'nvn', 'cvxbxc', 80, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'ABCCCC', 'vxlcv', 8, NULL, 'nvn', 'cvxbxc', 80, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'texas', 'asuydayus', 8, NULL, 'jhjj', 'zzxvzx', 89, 990, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'tesdt', 'vdvx', 9, '/var/www/html/fifo//uploads/Hotel-Taj-Internationa', 'vxcjkvkj', 'vxvx', 90, 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fifo_roles`
--

CREATE TABLE `fifo_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_roles`
--

INSERT INTO `fifo_roles` (`id`, `name`, `status`) VALUES
(3, 'admin', 1),
(4, 'hotel admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_states`
--

CREATE TABLE `fifo_states` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_states`
--

INSERT INTO `fifo_states` (`id`, `country_id`, `name`, `status`) VALUES
(1, 1, 'Tamil Nadu', 1),
(2, 1, 'Karnataka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_users`
--

CREATE TABLE `fifo_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_users`
--

INSERT INTO `fifo_users` (`id`, `user_name`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Active'),
(2, 'elango', 'elango', '1'),
(3, 'moorthi', 'moorthi', '1'),
(4, 'john', '527bd5b5d689e2c32ae974c6229ff785', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fifo_user_details`
--

CREATE TABLE `fifo_user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_user_details`
--

INSERT INTO `fifo_user_details` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone_no`, `pan_no`) VALUES
(1, 4, 'John', 'j', 'john@gmail.com', 9988877, 'ABV33445');

-- --------------------------------------------------------

--
-- Table structure for table `fifo_user_roles`
--

CREATE TABLE `fifo_user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_user_roles`
--

INSERT INTO `fifo_user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fifo_amenties`
--
ALTER TABLE `fifo_amenties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_countries`
--
ALTER TABLE `fifo_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotels`
--
ALTER TABLE `fifo_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotel_details`
--
ALTER TABLE `fifo_hotel_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotel_rooms`
--
ALTER TABLE `fifo_hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_roles`
--
ALTER TABLE `fifo_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_states`
--
ALTER TABLE `fifo_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_users`
--
ALTER TABLE `fifo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_user_details`
--
ALTER TABLE `fifo_user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fifo_amenties`
--
ALTER TABLE `fifo_amenties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fifo_countries`
--
ALTER TABLE `fifo_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fifo_hotels`
--
ALTER TABLE `fifo_hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fifo_hotel_details`
--
ALTER TABLE `fifo_hotel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fifo_hotel_rooms`
--
ALTER TABLE `fifo_hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fifo_roles`
--
ALTER TABLE `fifo_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fifo_states`
--
ALTER TABLE `fifo_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fifo_users`
--
ALTER TABLE `fifo_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fifo_user_details`
--
ALTER TABLE `fifo_user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

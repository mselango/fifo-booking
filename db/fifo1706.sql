-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2018 at 11:25 PM
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
(2, 'Car Parking', 1),
(3, 'jeep', 1),
(4, 'bus', 1);

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
-- Table structure for table `fifo_currencies`
--

CREATE TABLE `fifo_currencies` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_currencies`
--

INSERT INTO `fifo_currencies` (`id`, `code`, `status`) VALUES
(1, 'USD', 1),
(2, 'INR', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotels`
--

CREATE TABLE `fifo_hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `currency` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotels`
--

INSERT INTO `fifo_hotels` (`id`, `name`, `display_name`, `description`, `status`, `user_id`, `check_in`, `check_out`, `currency`, `type`, `created_at`, `updated_at`) VALUES
(1, 'abcd', 'hotel india', 'test', 0, 2, '10:20:00', '11:32:00', 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Hotel Merceeds', 'abcd', '', 0, 2, '12:00:00', '13:00:00', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Hotel ABCD', '', 'Very clean, nice, stylish. From the metro 10 min walk Similar hotels usually cost many times more expensive. Huge bed, towels, everything you need. Cleaning once a day. The breakfast is excellent, the coffee is prepared by the barista - the first time I meet this at the hotel', 0, 3, '00:00:00', '00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_amenties`
--

CREATE TABLE `fifo_hotel_amenties` (
  `hotel_id` int(11) NOT NULL,
  `amenty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_amenties`
--

INSERT INTO `fifo_hotel_amenties` (`hotel_id`, `amenty_id`) VALUES
(1, 2),
(1, 4),
(1, 3),
(1, 1),
(3, 2),
(3, 1),
(3, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_categories`
--

CREATE TABLE `fifo_hotel_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_categories`
--

INSERT INTO `fifo_hotel_categories` (`id`, `name`, `status`) VALUES
(1, 'Resort', 1),
(2, 'Villa', 1),
(3, 'Hotel', 1),
(4, 'Lodge', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_contacts`
--

CREATE TABLE `fifo_hotel_contacts` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_list` varchar(100) NOT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  `contact_list` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_contacts`
--

INSERT INTO `fifo_hotel_contacts` (`id`, `hotel_id`, `email_id`, `email_list`, `mobile_no`, `contact_no`, `contact_list`) VALUES
(1, 1, 'mselango@gmail.com', '', 9986856846, 9986856846, '102/12, 3rd Floor, 2nd Main,5th Cross\r\nSHARADAMBA RESIDENCY Ramaiah Garden'),
(2, 2, '', '', NULL, 2323523236, ''),
(3, 3, 'mbcd123@gmail.com', 'test@gmail.com,test@skfkds.com', 9986856846, 988878878, '9986856846,9986856846');

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
  `state` int(10) NOT NULL,
  `country` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `no_of_floors` int(11) DEFAULT NULL,
  `no_of_hotels` int(11) DEFAULT NULL,
  `no_of_rooms` smallint(6) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `policies` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `near_by_location` varchar(100) NOT NULL,
  `built_year` smallint(6) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_details`
--

INSERT INTO `fifo_hotel_details` (`id`, `hotel_id`, `address1`, `address2`, `city`, `state`, `country`, `postal_code`, `rating`, `no_of_floors`, `no_of_hotels`, `no_of_rooms`, `latitude`, `longitude`, `image_path`, `policies`, `website`, `near_by_location`, `built_year`, `created_at`, `updated_at`) VALUES
(1, 1, '102/12, 3rd Floor, 2nd Main,5th Cross\r\nSHARADAMBA RESIDENCY Ramaiah Garden', '', 'BENGALURU', 1, 1, 560029, 5, 8, 4, 6, NULL, NULL, '/var/www/html/fifo//uploads/abcd/', '', '', 'Abcd Location', 1992, NULL, NULL),
(2, 2, '102/12, 3rd Floor, 2nd Main,5th Cross', 'SHARADAMBA RESIDENCY Ramaiah Garden', 'BENGALURU', 1, 1, 0, NULL, 1, 5, 5, NULL, NULL, '/var/www/html/fifo//uploads/Hotel-Merceeds/', 'zvzxvzxv', 'http://www.google.com', 'test', 1981, NULL, NULL),
(3, 3, '102/12, 3rd Floor, 2nd Main,5th Cross\r\nSHARADAMBA RESIDENCY Ramaiah Garden', '', 'BENGALURU', 2, 1, 560029, NULL, NULL, NULL, 0, NULL, NULL, '/var/www/html/fifo//uploads/Hotel-ABCD/', '', '', 'xcvxcvxcbxc', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fifo_hotel_policies`
--

CREATE TABLE `fifo_hotel_policies` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `cancellation_policy` text NOT NULL,
  `general_policy` text NOT NULL,
  `services` varchar(50) NOT NULL,
  `name_change` tinyint(1) NOT NULL,
  `date_change` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_policies`
--

INSERT INTO `fifo_hotel_policies` (`id`, `hotel_id`, `cancellation_policy`, `general_policy`, `services`, `name_change`, `date_change`) VALUES
(1, 2, '', 'zvzxvzxv', '', 0, 0);

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
  `room_type` int(11) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `bed_type` int(11) NOT NULL,
  `extra_bed_type` int(11) NOT NULL,
  `room_view` int(11) NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `room_size` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_hotel_rooms`
--

INSERT INTO `fifo_hotel_rooms` (`id`, `hotel_id`, `room_name`, `description`, `no_of_people`, `images`, `additional_details`, `cancellation_policies`, `actual_price`, `discount_price`, `room_type`, `display_name`, `bed_type`, `extra_bed_type`, `room_view`, `default`, `room_size`, `created_at`, `updated_at`) VALUES
(1, 2, 'Deluxe Room', 'asfasf', 2, NULL, 'xxzcvzxvzxv', 'zxvzxvzvxzvx', 60, 60, 0, '', 0, 0, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 'test room', 'test', 4, NULL, 'jhxdjvhjkgskjdg', 'xklbxkjbkjcxkj', 200, 100, 0, '', 0, 0, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'luxury rooms', 'test', 3, NULL, '10', 'xxcbx', 100, 80, 0, '', 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifo_users`
--

INSERT INTO `fifo_users` (`id`, `user_name`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'elango', 'elango', 1),
(3, 'moorthi', 'fab676c9682e107bb41899d2571e0757', 1),
(4, 'john', '527bd5b5d689e2c32ae974c6229ff785', 1);

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
-- Indexes for table `fifo_currencies`
--
ALTER TABLE `fifo_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotels`
--
ALTER TABLE `fifo_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotel_categories`
--
ALTER TABLE `fifo_hotel_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotel_contacts`
--
ALTER TABLE `fifo_hotel_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotel_details`
--
ALTER TABLE `fifo_hotel_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_hotel_policies`
--
ALTER TABLE `fifo_hotel_policies`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fifo_countries`
--
ALTER TABLE `fifo_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fifo_currencies`
--
ALTER TABLE `fifo_currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fifo_hotels`
--
ALTER TABLE `fifo_hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fifo_hotel_categories`
--
ALTER TABLE `fifo_hotel_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fifo_hotel_contacts`
--
ALTER TABLE `fifo_hotel_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fifo_hotel_details`
--
ALTER TABLE `fifo_hotel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fifo_hotel_policies`
--
ALTER TABLE `fifo_hotel_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fifo_hotel_rooms`
--
ALTER TABLE `fifo_hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

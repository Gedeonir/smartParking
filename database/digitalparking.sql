-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 08:46 PM
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
-- Database: `digitalparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_role` varchar(150) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `email`, `phone_no`, `password`, `admin_role`, `date_created`) VALUES
(1, 'Valery', 'Muneza', 'Valery', 'valery2000@gmail.com', '0784056999', '$2a$12$mSw8F8N/gsOB5kM4UJ7yROR9FQZtWE8pn7qL30LeV1BZFwAsGvO0C', 'Admin', '0000-00-00'),
(2, 'Sandra', 'Marie', 'Sandra', 'sandra2000@gmail.com', '0785666754', '$2y$12$QdDbwDRg1UYW1xVDTYWdoevVO1JZD5qjBeZWrhDV3Nm1hj3WPuG76', 'Receptionist', '2021-09-04'),
(3, 'Muhire', 'Kevin', 'Kevin', 'kevin@gmail.com', '0785000400', '$2y$12$QdDbwDRg1UYW1xVDTYWdoevVO1JZD5qjBeZWrhDV3Nm1hj3WPuG76', 'Admin', '2021-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bk_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `veh_id` int(10) NOT NULL,
  `space_id` int(10) NOT NULL,
  `bk_status` varchar(25) NOT NULL,
  `bk_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `lv_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bk_id`, `owner_id`, `veh_id`, `space_id`, `bk_status`, `bk_date`, `lv_date`) VALUES
(1, 1, 1, 1, 'Unpaid', '2021-09-03 05:22:48', '0000-00-00 00:00:00'),
(2, 3, 3, 2, 'Unpaid', '2021-09-03 11:02:53', '0000-00-00 00:00:00'),
(3, 3, 5, 7, 'Unpaid', '2021-09-04 05:21:38', '0000-00-00 00:00:00'),
(4, 3, 5, 1, 'Unpaid', '2021-09-04 05:24:42', '0000-00-00 00:00:00'),
(5, 3, 5, 5, 'Unpaid', '2021-09-04 05:25:45', '0000-00-00 00:00:00'),
(6, 6, 4, 7, 'Unpaid', '2021-09-04 05:28:04', '0000-00-00 00:00:00'),
(7, 6, 4, 2, 'Unpaid', '2021-09-04 05:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `company` varchar(150) NOT NULL DEFAULT 'None',
  `status` int(5) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `firstname`, `lastname`, `username`, `phone_no`, `email`, `password`, `address`, `company`, `status`, `date_created`) VALUES
(1, 'Ghandi', 'Wacu', 'Ghandi', '123456789', 'ghandi@gmail.com', '12345', 'Huye, Tumba', 'None', 0, '2021-08-10 16:51:03'),
(2, 'Gahima', 'Philbert', 'Gahima', '0785050800', 'gahima@gmail.com', '12345', 'Huye, Ngoma', 'None', 0, '2021-08-10 17:40:45'),
(3, 'Omar', 'Sugira', 'Omar', '0784557599', 'omarsugira@gmail.com', '12321', 'Kigali, Kacyiru', 'None', 1, '2021-09-03 08:03:50'),
(4, 'Emmanuel', 'Tuyisenge', 'Emmy', '0785050479', 'emmytuyisenge@gmail.com', '12345', 'Kigali, Arena', 'None', 0, '2021-09-03 08:24:41'),
(5, 'Hamza', 'Singh', 'Singh', '1234567890', 'hamzasingh@gmail.com', '12345', 'Huye, Rango', 'None', 1, '2021-09-03 08:27:29'),
(6, 'Honore', 'Cyubahiro', 'Honole', '07899956544', 'honore10@gmail.com', '11111', 'Nyamagabe, Gasaka', 'None', 1, '2021-09-03 13:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(10) NOT NULL,
  `msg_text` text NOT NULL,
  `sender` int(10) NOT NULL,
  `recipient` int(10) NOT NULL,
  `msg_type` varchar(35) NOT NULL,
  `msg_status` varchar(25) NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking_spaces`
--

CREATE TABLE `parking_spaces` (
  `space_id` int(10) NOT NULL,
  `space_code` varchar(10) NOT NULL,
  `space_size` varchar(25) NOT NULL,
  `space_level` varchar(25) NOT NULL COMMENT 'Price depends on this field',
  `availability` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_spaces`
--

INSERT INTO `parking_spaces` (`space_id`, `space_code`, `space_size`, `space_level`, `availability`) VALUES
(1, 'PK-99999', 'Large', 'Normal', 0),
(2, 'PK-33333', 'Medium', 'Normal', 0),
(5, 'PK-31417', 'Medium', 'VIP', 0),
(7, 'PK-54887', 'Large', 'Normal', 1),
(8, 'PK-84607', 'Large', 'Normal', 1),
(9, 'PK-56512', 'Medium', 'Normal', 1),
(10, 'PK-91730', 'Medium', 'VIP', 1),
(11, 'PK-29356', 'Medium', 'Normal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `py_id` int(10) NOT NULL,
  `py_amount` double NOT NULL,
  `duration` varchar(30) NOT NULL,
  `client_id` int(10) NOT NULL,
  `veh_id` int(10) NOT NULL,
  `discount` double NOT NULL,
  `py_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `veh_id` int(10) NOT NULL,
  `veh_name` varchar(100) NOT NULL,
  `veh_model` varchar(100) NOT NULL,
  `veh_size` varchar(100) NOT NULL,
  `veh_plateno` varchar(10) NOT NULL,
  `veh_owner` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`veh_id`, `veh_name`, `veh_model`, `veh_size`, `veh_plateno`, `veh_owner`) VALUES
(1, 'Daihatsu', 'Toyota', 'None', 'RAD409', 3),
(2, 'Moto TVS', 'Yamaha', 'None', 'RAB500', 4),
(3, 'Colora One', 'Benz', 'None', 'RAC678', 3),
(4, 'Bugatti', 'Landlover', 'None', 'RAB500', 6),
(5, 'Moto 500', 'YAMAHA', 'None', 'RAA400', 3),
(6, 'Motobike X', 'Yamaha', 'None', 'RAD122', 5),
(7, 'Mercedes Benz 4', 'Benz', 'None', 'RAA233', 3),
(8, 'Bugatti 2021', 'Bugatti', 'None', 'RAD300', 5),
(9, 'Purple Lambhogini', 'Lambo', 'None', 'RAB400', 5),
(10, 'Daihatsu Red', 'Daihatsu', 'None', 'RAB300', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  ADD PRIMARY KEY (`space_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`py_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  MODIFY `space_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `py_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `veh_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

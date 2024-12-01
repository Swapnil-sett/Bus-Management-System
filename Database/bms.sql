-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 08:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_type` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `hire_rate` decimal(10,2) NOT NULL,
  `availability_status` enum('Available','Hired','Maintenance') DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus_id`, `bus_name`, `bus_type`, `capacity`, `hire_rate`, `availability_status`) VALUES
(1, 'Bus 1', 'AC', 38, 18000.00, 'Available'),
(2, 'Bus 2', 'Non-AC', 45, 12000.00, 'Available'),
(3, 'Bus 3', 'Non-AC', 45, 12000.00, 'Hired');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `details_sl` int(11) NOT NULL,
  `details_sub` varchar(15) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`details_sl`, `details_sub`, `details`) VALUES
(1, '', ''),
(2, '', ''),
(4, '', ''),
(4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `counter` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`username`, `password`, `counter`, `status`) VALUES
('Dhaka', 'Dhaka', 'counter', 0),
('Bandarban', 'Bandarban', 'counter', 0),
('Barguna', 'Barguna', 'counter', 0),
('Barisal', 'Barisal', 'counter', 0),
('Admin', 'admin123', 'admin', 0),
('Bogra', 'Bogra', 'Bogra', 0);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `route_id` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `fare` decimal(10,2) NOT NULL,
  `TIME` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`route_id`, `source`, `destination`, `fare`, `TIME`) VALUES
(1, 'Dhaka', 'Dinajpur', 1000.00, '10:34:00'),
(2, 'Dinajpur', 'Dhaka', 1000.00, '21:18:00'),
(3, 'Dhaka', 'Rangpur', 1200.00, '12:10:00'),
(4, 'Rangpur', 'Dhaka', 1200.00, '23:11:00'),
(5, 'Dhaka', 'Saidpur', 1100.00, '13:15:00'),
(6, 'Saidppur', 'Dhaka', 1100.00, '01:15:00'),
(7, 'Chottogram', 'Dhaka', 1500.00, '20:18:00'),
(8, 'Dhaka', 'Chottogram', 1500.00, '08:50:00'),
(13, 'Dhaka', 'Shylet', 800.00, '16:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

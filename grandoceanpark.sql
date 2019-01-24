-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 08:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grandoceanpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phoneNo` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` time NOT NULL,
  `people` int(11) NOT NULL,
  `dateOfBooking` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phoneNo`, `email`, `date`, `time`, `people`, `dateOfBooking`) VALUES
(1, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '08:40:00', 6, '0000-00-00'),
(2, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '09:45:00', 3, '0000-00-00'),
(3, 'sdssasasa', 566565, '54454@fdfd.com', '2016-01-19', '07:12:00', 1, '0000-00-00'),
(4, 'sdssasasa', 566565, '54454@fdfd.com', '2008-01-19', '08:13:00', 5, '0000-00-00'),
(5, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '07:35:00', 4, '0000-00-00'),
(6, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(7, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(8, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(9, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(10, 'sdssasasa', 566565, '54454@fdfd.com', '2022-01-19', '08:40:00', 3, '0000-00-00'),
(11, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:20:00', 3, '0000-00-00'),
(12, 'sdssasasa', 566565, '54454@fdfd.com', '2014-01-19', '08:40:00', 4, '0000-00-00'),
(13, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:39:00', 2, '0000-00-00'),
(14, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:39:00', 2, '0000-00-00'),
(15, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(16, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(17, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(18, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(19, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(20, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:40:00', 3, '0000-00-00'),
(21, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:40:00', 3, '0000-00-00'),
(22, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:40:00', 3, '0000-00-00'),
(23, 'd', 566565, '54454@fdfd.com', '2015-01-19', '07:36:00', 5, '0000-00-00'),
(24, 'd', 566565, '54454@fdfd.com', '2015-01-19', '07:36:00', 5, '0000-00-00'),
(25, 'sdssasasa', 1212121, '54454@fdfd.com', '2015-01-19', '04:20:00', 5, '0000-00-00'),
(26, 'sdssasasa', 566565, '54454@fdfd.com', '2016-01-19', '07:35:00', 5, '0000-00-00'),
(27, 'sdssasasa', 4154154, '54454@fdfd.com', '2015-01-19', '07:35:00', 1, '0000-00-00'),
(28, 'sdssasasa', 4154154, '54454@fdfd.com', '2015-01-19', '07:35:00', 1, '0000-00-00'),
(29, 'sdssasasa', 1212, '54454@fdfd.com', '2014-01-19', '08:40:00', 4, '0000-00-00'),
(30, 'sdssasasa', 1212, '54454@fdfd.com', '2014-01-19', '08:40:00', 4, '0000-00-00'),
(31, 'fdfdf', 1212, 'dfdfd@sdsd.com', '2015-01-19', '04:20:00', 2, '0000-00-00'),
(32, 'dfdf', 1111, 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(33, 'dfdf', 1111, 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(34, 'dfdf', 1111, 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(35, 'dfdf', 1111, 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(36, 'ds', 566565, '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(37, 'ds', 566565, '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(38, 'ds', 566565, '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(39, 'ds', 566565, '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(40, 'sdssasasa', 11454545, 'dfd@dfd.com', '2015-01-19', '06:52:00', 5, '0000-00-00'),
(41, 'sdssasasa', 1145454, 'dfd@dfd.com', '2015-01-19', '06:52:00', 5, '0000-00-00'),
(42, 'sdssasasa', 1212, 'dfd@dfd.com', '2015-01-19', '05:56:00', 7, '0000-00-00'),
(43, 'sdssasasa', 12121, 'dfd@dfd.com', '2015-01-19', '05:56:00', 7, '0000-00-00'),
(44, 'Kevin', 1212121, 'dfdfd@sdsd.com', '2020-01-19', '07:35:00', 6, '0000-00-00'),
(45, 'sdssasasa', 566565, '54454@fdfd.com', '2031-01-19', '07:34:00', 5, '0000-00-00'),
(46, 'sdssasasa', 566565, '54454@fdfd.com', '2028-02-19', '07:34:00', 5, '0000-00-00'),
(47, 'sdssasasa', 566565, '54454@fdfd.com', '2023-01-19', '04:46:00', 4, '0000-00-00'),
(48, 'sdssasasa', 566565, '54454@fdfd.com', '2024-01-19', '04:46:00', 4, '0000-00-00'),
(49, 'sdssasasa', 1212, '54454@fdfd.com', '2030-01-19', '08:47:00', 4, '0000-00-00'),
(50, 'sdssasasa', 566565, '54454@fdfd.com', '2030-01-19', '05:26:00', 5, '0000-00-00'),
(51, 'sdssasasa', 566565, 'dfdfd@sdsd.com', '2031-01-19', '08:50:00', 6, '0000-00-00'),
(52, 'sdssasasa', 566565, 'dfdfd@sdsd.com', '2015-01-19', '08:40:00', 6, '2015-01-19'),
(53, 'sdssasasa', 566565, 'dfdfd@sdsd.com', '2016-01-19', '08:40:00', 6, '2015-01-19'),
(54, 'sdssasasa', 566565, '54454@fdfd.com', '2015-01-19', '08:40:00', 6, '2015-01-19'),
(55, 'sdssasassa', 566565, '54454@fdfd.com', '15-01-19', '08:40:00', 6, '15-01-19'),
(56, 'sdssasasa', 566565, 'dfd@dfd.com', '15-01-19', '08:40:00', 6, '15-01-19'),
(57, 'sdssasasa', 566565, 'dfd@dfd.com', '31-01-19', '08:40:00', 6, '15-01-19'),
(58, 'sdssasasa', 566565, '54454@fdfd.com', '16-01-19', '09:45:00', 4, '15-01-19'),
(59, 'Test', 11123456, '54454@fdfd.com', '23-01-19', '05:25:00', 5, '22-01-19'),
(60, 'Test', 11123456, '54454@fdfd.com', '24-01-19', '05:25:00', 5, '22-01-19'),
(61, 'ds', 1212121, 'dfd@dfd.com', '23-01-19', '08:24:00', 5, '22-01-19'),
(62, 'ds', 1212121, 'dfdfd@sdsd.com', '24-01-19', '08:25:00', 6, '22-01-19'),
(63, 'ds', 566565, 'dfd@dfd.com', '23-01-19', '08:40:00', 6, '22-01-19'),
(64, 'sdssasasa', 1212, 'dfdfd@sdsd.com', '23-01-19', '03:15:00', 5, '22-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 06:03 AM
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
-- Table structure for table `book_halls`
--

CREATE TABLE `book_halls` (
  `book_halls_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hall_type` varchar(20) NOT NULL,
  `dateOfBooking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_halls`
--

INSERT INTO `book_halls` (`book_halls_id`, `name`, `phoneNo`, `email`, `date`, `time`, `hall_type`, `dateOfBooking`) VALUES
(1, 'ds', '+94117788945', 'dfd@dfd.com', '2024-02-19', '03:15:00', 'wedding holls', '2019-02-23'),
(2, 'dsds', '+94117788945', 'dfd@dfd.com', '2024-02-19', '03:15:00', 'wedding holls', '2019-02-23'),
(3, 'Kevin 3', '+94117788945', 'dfd@dfd.com', '2025-02-19', '08:15:00', 'wedding holls', '2019-02-23'),
(4, 'Kevin 5', '+94117788945', 'dfd@dfd.com', '2026-02-19', '03:15:00', 'banquet holl', '2019-02-23'),
(5, 'Kevin 6', '+94112255756', 'dfd@dfd.com', '2026-02-19', '03:20:00', 'banquet holl', '2019-02-23'),
(6, 'Kevin 6', '0112253456', 'dfd@dfd.com', '2027-02-19', '08:15:00', 'wedding holl', '2019-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `email_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `name`, `email`, `date`, `message`) VALUES
(1, 'Book now →', 'dfd@dfd.com', '0000-00-00', 'fdsafdasfdsafdsafdsa'),
(2, 'Kevin', 'dfd@dfd.com', '0000-00-00', 'test message'),
(3, 'Kevin', 'dfd@dfd.com', '2019-02-22', 'fdsfdsafdsaf'),
(4, 'Kevin', 'dfd@dfd.com', '2019-02-22', 'fdsfdsafdsaf'),
(5, 'sdssasasa', 'dfdfd@sdsd.com', '2019-02-22', 'fdsafdsa');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phoneNo` varchar(13) NOT NULL,
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
(1, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '08:40:00', 6, '0000-00-00'),
(2, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '09:45:00', 3, '0000-00-00'),
(3, 'sdssasasa', '566565', '54454@fdfd.com', '2016-01-19', '07:12:00', 1, '0000-00-00'),
(4, 'sdssasasa', '566565', '54454@fdfd.com', '2008-01-19', '08:13:00', 5, '0000-00-00'),
(5, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '07:35:00', 4, '0000-00-00'),
(6, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(7, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(8, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(9, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '08:41:00', 2, '0000-00-00'),
(10, 'sdssasasa', '566565', '54454@fdfd.com', '2022-01-19', '08:40:00', 3, '0000-00-00'),
(11, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:20:00', 3, '0000-00-00'),
(12, 'sdssasasa', '566565', '54454@fdfd.com', '2014-01-19', '08:40:00', 4, '0000-00-00'),
(13, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:39:00', 2, '0000-00-00'),
(14, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:39:00', 2, '0000-00-00'),
(15, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(16, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(17, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(18, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(19, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '04:20:00', 4, '0000-00-00'),
(20, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:40:00', 3, '0000-00-00'),
(21, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:40:00', 3, '0000-00-00'),
(22, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:40:00', 3, '0000-00-00'),
(23, 'd', '566565', '54454@fdfd.com', '2015-01-19', '07:36:00', 5, '0000-00-00'),
(24, 'd', '566565', '54454@fdfd.com', '2015-01-19', '07:36:00', 5, '0000-00-00'),
(25, 'sdssasasa', '1212121', '54454@fdfd.com', '2015-01-19', '04:20:00', 5, '0000-00-00'),
(26, 'sdssasasa', '566565', '54454@fdfd.com', '2016-01-19', '07:35:00', 5, '0000-00-00'),
(27, 'sdssasasa', '4154154', '54454@fdfd.com', '2015-01-19', '07:35:00', 1, '0000-00-00'),
(28, 'sdssasasa', '4154154', '54454@fdfd.com', '2015-01-19', '07:35:00', 1, '0000-00-00'),
(29, 'sdssasasa', '1212', '54454@fdfd.com', '2014-01-19', '08:40:00', 4, '0000-00-00'),
(30, 'sdssasasa', '1212', '54454@fdfd.com', '2014-01-19', '08:40:00', 4, '0000-00-00'),
(31, 'fdfdf', '1212', 'dfdfd@sdsd.com', '2015-01-19', '04:20:00', 2, '0000-00-00'),
(32, 'dfdf', '1111', 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(33, 'dfdf', '1111', 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(34, 'dfdf', '1111', 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(35, 'dfdf', '1111', 'dfd@dfd.com', '2015-01-19', '08:15:00', 8, '0000-00-00'),
(36, 'ds', '566565', '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(37, 'ds', '566565', '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(38, 'ds', '566565', '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(39, 'ds', '566565', '54454@fdfd.com', '2015-01-19', '08:50:00', 5, '0000-00-00'),
(40, 'sdssasasa', '11454545', 'dfd@dfd.com', '2015-01-19', '06:52:00', 5, '0000-00-00'),
(41, 'sdssasasa', '1145454', 'dfd@dfd.com', '2015-01-19', '06:52:00', 5, '0000-00-00'),
(42, 'sdssasasa', '1212', 'dfd@dfd.com', '2015-01-19', '05:56:00', 7, '0000-00-00'),
(43, 'sdssasasa', '12121', 'dfd@dfd.com', '2015-01-19', '05:56:00', 7, '0000-00-00'),
(44, 'Kevin', '1212121', 'dfdfd@sdsd.com', '2020-01-19', '07:35:00', 6, '0000-00-00'),
(45, 'sdssasasa', '566565', '54454@fdfd.com', '2031-01-19', '07:34:00', 5, '0000-00-00'),
(46, 'sdssasasa', '566565', '54454@fdfd.com', '2028-02-19', '07:34:00', 5, '0000-00-00'),
(47, 'sdssasasa', '566565', '54454@fdfd.com', '2023-01-19', '04:46:00', 4, '0000-00-00'),
(48, 'sdssasasa', '566565', '54454@fdfd.com', '2024-01-19', '04:46:00', 4, '0000-00-00'),
(49, 'sdssasasa', '1212', '54454@fdfd.com', '2030-01-19', '08:47:00', 4, '0000-00-00'),
(50, 'sdssasasa', '566565', '54454@fdfd.com', '2030-01-19', '05:26:00', 5, '0000-00-00'),
(51, 'sdssasasa', '566565', 'dfdfd@sdsd.com', '2031-01-19', '08:50:00', 6, '0000-00-00'),
(52, 'sdssasasa', '566565', 'dfdfd@sdsd.com', '2015-01-19', '08:40:00', 6, '2015-01-19'),
(53, 'sdssasasa', '566565', 'dfdfd@sdsd.com', '2016-01-19', '08:40:00', 6, '2015-01-19'),
(54, 'sdssasasa', '566565', '54454@fdfd.com', '2015-01-19', '08:40:00', 6, '2015-01-19'),
(55, 'sdssasassa', '566565', '54454@fdfd.com', '15-01-19', '08:40:00', 6, '15-01-19'),
(56, 'sdssasasa', '566565', 'dfd@dfd.com', '15-01-19', '08:40:00', 6, '15-01-19'),
(57, 'sdssasasa', '566565', 'dfd@dfd.com', '31-01-19', '08:40:00', 6, '15-01-19'),
(58, 'sdssasasa', '566565', '54454@fdfd.com', '16-01-19', '09:45:00', 4, '15-01-19'),
(59, 'Test', '11123456', '54454@fdfd.com', '23-01-19', '05:25:00', 5, '22-01-19'),
(60, 'Test', '11123456', '54454@fdfd.com', '24-01-19', '05:25:00', 5, '22-01-19'),
(61, 'ds', '1212121', 'dfd@dfd.com', '23-01-19', '08:24:00', 5, '22-01-19'),
(62, 'ds', '1212121', 'dfdfd@sdsd.com', '24-01-19', '08:25:00', 6, '22-01-19'),
(63, 'ds', '566565', 'dfd@dfd.com', '23-01-19', '08:40:00', 6, '22-01-19'),
(64, 'sdssasasa', '1212', 'dfdfd@sdsd.com', '23-01-19', '03:15:00', 5, '22-01-19'),
(65, 'sdssasasa', '2147483647', '54454@fdfd.com', '22-02-19', '05:24:00', 6, '21-02-19'),
(66, 'tttt', '2147483647', 'dfdfd@sdsd.com', '22-02-19', '05:25:00', 6, '21-02-19'),
(67, 'ds', '2147483647', 'dfdfd@sdsd.com', '23-02-19', '05:26:00', 3, '21-02-19'),
(68, 'qqq', '112234567', 'qqq@qqq.com', '22-02-19', '07:19:00', 5, '21-02-19'),
(69, 'ds', '1177889456', '54454@fdfd.com', '22-02-19', '06:31:00', 2, '21-02-19'),
(70, 'qwqwq', '+94117788945', '54454@fdfd.com', '22-02-19', '06:58:00', 7, '21-02-19'),
(71, 'tttt', '+94117788945', 'qqq@qqq.com', '24-02-19', '04:20:00', 6, '21-02-19'),
(72, 'www', '+94117788945', 'qqq@qqq.com', '24-02-19', '06:30:00', 6, '21-02-19'),
(73, 'Kevin', '1212121', 'dfd@dfd.com', '25-02-19', '05:25:00', 5, '21-02-19'),
(74, 'dsttttt', '1212121', 'qqq@qqq.com', '26-02-19', '05:24:00', 5, '21-02-19'),
(75, 'test', '1212', 'dfd@dfd.com', '23-02-19', '08:40:00', 4, '22-02-19'),
(76, 'test 2', '1212', 'dfd@dfd.com', '25-02-19', '08:46:00', 6, '22-02-19'),
(77, 'dsds', '1212', 'dfd@dfd.com', '26-02-19', '04:20:00', 4, '22-02-19'),
(78, 'test test', '1111', 'dfd@dfd.com', '28-02-19', '09:45:00', 4, '22-02-19'),
(79, 'test 6', '1212121', 'dfd@dfd.com', '27-02-19', '08:20:00', 5, '22-02-19'),
(80, 'test 6', '1212121', 'dfd@dfd.com', '25-02-19', '04:35:00', 5, '22-02-19'),
(81, 'Kevin', '1212', 'dfd@dfd.com', '23-02-19', '08:20:00', 3, '22-02-19'),
(82, 'Kevin', '+941127788456', 'dfd@dfd.com', '28-02-19', '04:16:00', 3, '22-02-19'),
(83, 'Kevin', '+94117788945', 'qqq@qqq.com', '23-02-19', '08:15:00', 6, '22-02-19'),
(84, 'Kevin', '+94117788945', 'dfdfd@sdsd.com', '26-02-19', '04:20:00', 7, '22-02-19'),
(85, 'Kevin', '+94117788945', 'dfd@dfd.com', '23-03-19', '04:15:00', 4, '22-02-19'),
(86, 'Kevin', '1212121', 'dfd@dfd.com', '23-02-19', '08:10:00', 8, '22-02-19'),
(87, 'Kevin', '1212121', 'dfd@dfd.com', '23-02-19', '03:14:00', 2, '22-02-19'),
(88, 'Kevin1', '1212121', 'dfd@dfd.com', '23-02-19', '03:14:00', 2, '22-02-19'),
(89, 'Kevin', '1212121', 'dfd@dfd.com', '23-02-19', '07:36:00', 6, '22-02-19'),
(90, 'Kevin 2', '+94117788945', 'dfd@dfd.com', '24-02-19', '08:20:00', 6, '2019-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_halls`
--
ALTER TABLE `book_halls`
  ADD PRIMARY KEY (`book_halls_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_halls`
--
ALTER TABLE `book_halls`
  MODIFY `book_halls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

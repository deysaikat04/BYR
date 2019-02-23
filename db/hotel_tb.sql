-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 08:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_byr`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_tb`
--

CREATE TABLE `hotel_tb` (
  `id` int(50) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cpn` int(10) NOT NULL,
  `rooms` int(10) NOT NULL,
  `beds` int(10) NOT NULL,
  `tou` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `toc` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_tb`
--

INSERT INTO `hotel_tb` (`id`, `h_name`, `location`, `city`, `cpn`, `rooms`, `beds`, `tou`, `toc`) VALUES
(1, 'Leela Palace', 'Beside Baishnabhata Mini Bus Stand', 'Chennai', 4500, 50, 20, '2018-05-04 10:19:15', '2018-04-30 14:54:29'),
(3, 'Taj Bengal', 'Near Alipure Zoo', 'Kolkata', 9500, 99, 5, '2018-04-30 15:21:48', '2018-04-30 15:21:48'),
(4, 'ABC', 'Beside Baishnabhata Mini Bus Stand', 'Kolkata', 12000, 20, 40, '2018-05-04 03:30:27', '2018-05-04 03:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_tb`
--
ALTER TABLE `hotel_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_tb`
--
ALTER TABLE `hotel_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `image_tb`
--

CREATE TABLE `image_tb` (
  `id` int(50) NOT NULL,
  `h_id` int(50) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `is_cover` tinyint(4) NOT NULL,
  `path` varchar(100) NOT NULL,
  `tou` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `toc` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_tb`
--

INSERT INTO `image_tb` (`id`, `h_id`, `file_name`, `is_cover`, `path`, `tou`, `toc`) VALUES
(4, 1, '980be9c9b1b61afe9be1002a504e58d2.jpg', 0, 'assets/images/hotel/1/980be9c9b1b61afe9be1002a504e58d2.jpg', '2018-04-30 14:54:29', '2018-04-30 14:54:29'),
(16, 1, '9d9fb35426cf1c3641821fffb614b8a1.jpg', 0, 'assets/images/hotel/1/9d9fb35426cf1c3641821fffb614b8a1.jpg', '2018-04-30 15:17:18', '2018-04-30 14:54:29'),
(17, 1, 'efb8df9991a8ab613cb2bb401de1acb2.jpg', 0, 'assets/images/hotel/1/efb8df9991a8ab613cb2bb401de1acb2.jpg', '2018-04-30 15:17:18', '2018-04-30 14:54:29'),
(18, 3, 'ccc500be1eaa828dbd197f814927e988.jpg', 1, 'assets/images/hotel/3/ccc500be1eaa828dbd197f814927e988.jpg', '2018-04-30 15:21:48', '2018-04-30 15:21:48'),
(19, 3, 'cf4fb0127f6e96dcdfb8cdc7e9deedd8.jpg', 0, 'assets/images/hotel/3/cf4fb0127f6e96dcdfb8cdc7e9deedd8.jpg', '2018-04-30 15:21:48', '2018-04-30 15:21:48'),
(21, 1, '9cfbb8f7f2c4a95d27b38c95e74f53ad.jpg', 1, 'assets/images/hotel/1/9cfbb8f7f2c4a95d27b38c95e74f53ad.jpg', '2018-05-01 15:04:22', '2018-04-30 14:54:29'),
(22, 4, 'c39694c4b4a674dd1f346aa722b7d7fa.jpg', 1, 'assets/images/hotel/4/c39694c4b4a674dd1f346aa722b7d7fa.jpg', '2018-05-04 03:30:27', '2018-05-04 03:30:27'),
(23, 4, '870bf0d0694fe9396b703cd4bac838eb.jpg', 0, 'assets/images/hotel/4/870bf0d0694fe9396b703cd4bac838eb.jpg', '2018-05-04 03:30:27', '2018-05-04 03:30:27'),
(24, 4, '1e9567a8091166047f64cd6540b5c4af.jpg', 0, 'assets/images/hotel/4/1e9567a8091166047f64cd6540b5c4af.jpg', '2018-05-04 03:30:27', '2018-05-04 03:30:27'),
(25, 4, '461f75737d208bbe3386c32e13d66ced.jpg', 0, 'assets/images/hotel/4/461f75737d208bbe3386c32e13d66ced.jpg', '2018-05-04 04:31:16', '2018-05-04 03:30:27'),
(26, 4, '3262981d8ae3bcedb52cd1550770a080.jpg', 0, 'assets/images/hotel/4/3262981d8ae3bcedb52cd1550770a080.jpg', '2018-05-04 04:31:16', '2018-05-04 03:30:27'),
(27, 4, '7347944730f2db9cca1d5df4ac69f8fe.jpg', 0, 'assets/images/hotel/4/7347944730f2db9cca1d5df4ac69f8fe.jpg', '2018-05-04 04:31:16', '2018-05-04 03:30:27'),
(28, 4, 'a82c54e5c3fe35b6175aa59b463354a1.jpg', 0, 'assets/images/hotel/4/a82c54e5c3fe35b6175aa59b463354a1.jpg', '2018-05-05 14:48:22', '2018-05-04 03:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `h_id` (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_tb`
--
ALTER TABLE `image_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD CONSTRAINT `image_tb_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hotel_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

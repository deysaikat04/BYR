-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 11:01 AM
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
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(50) NOT NULL,
  `h_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `rooms` int(10) NOT NULL,
  `people` int(10) NOT NULL,
  `nights` int(5) NOT NULL,
  `dateFrom` varchar(20) NOT NULL,
  `dateTo` varchar(20) NOT NULL,
  `netTotal` int(50) NOT NULL,
  `cgst` int(50) NOT NULL,
  `sgst` int(50) NOT NULL,
  `grand` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `h_id`, `u_id`, `rooms`, `people`, `nights`, `dateFrom`, `dateTo`, `netTotal`, `cgst`, `sgst`, `grand`) VALUES
(6, 4, 4, 1, 1, 1, '15-05-2018', '16-05-2018', 12000, 1080, 1080, 14160);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `c_name`) VALUES
(1, 'Mumbai'),
(2, 'Delhi '),
(3, 'Chennai'),
(4, 'Bangalore'),
(5, 'Hyderabad'),
(6, 'Kolkata'),
(7, 'Pune'),
(8, 'Jaipur'),
(9, 'Agra'),
(10, 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

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
(1, 'Hablis', 'Hablis Hotel, 19, GST road Guindy, Chennai, Tamil ', 'Chennai', 4980, 50, 20, '2018-05-09 14:38:58', '2018-04-30 14:54:29'),
(4, 'The Orchid', 'Nehru Road, Vile Parle East, Adjacent to Domestic ', 'Mumbai', 5833, 20, 40, '2018-05-09 14:29:24', '2018-05-04 03:30:27'),
(5, 'Trident Nariman Point', 'Netaji Subhash Chandra Bose Road, Nariman Point', 'Mumbai', 11000, 10, 20, '2018-05-09 14:27:23', '2018-05-09 14:27:23');

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
(29, 5, 'aad82c75067281113fba7116158b2d96.jpg', 1, 'assets/images/hotel/5/aad82c75067281113fba7116158b2d96.jpg', '2018-05-09 14:27:23', '2018-05-09 14:27:23'),
(30, 5, '056ff55dba5a1ed39ea72ea23bfd524d.jpg', 0, 'assets/images/hotel/5/056ff55dba5a1ed39ea72ea23bfd524d.jpg', '2018-05-09 14:27:23', '2018-05-09 14:27:23'),
(31, 5, 'c44574c03a9f1018bca869ba8647ee23.jpg', 0, 'assets/images/hotel/5/c44574c03a9f1018bca869ba8647ee23.jpg', '2018-05-09 14:27:23', '2018-05-09 14:27:23'),
(32, 5, '0b572b1b2140a410aa68d0f83dd43228.jpg', 0, 'assets/images/hotel/5/0b572b1b2140a410aa68d0f83dd43228.jpg', '2018-05-09 14:27:23', '2018-05-09 14:27:23'),
(33, 5, '59446b7b0acf096b054b7d613d5561cb.jpg', 0, 'assets/images/hotel/5/59446b7b0acf096b054b7d613d5561cb.jpg', '2018-05-09 14:27:23', '2018-05-09 14:27:23'),
(34, 4, 'b061ad3273712531491ab35db6cfa9d7.jpg', 0, 'assets/images/hotel/4/b061ad3273712531491ab35db6cfa9d7.jpg', '2018-05-09 14:32:46', '2018-05-04 03:30:27'),
(35, 4, '6ad91d677f8c5c095bde01c321baa625.jpg', 0, 'assets/images/hotel/4/6ad91d677f8c5c095bde01c321baa625.jpg', '2018-05-09 14:32:46', '2018-05-04 03:30:27'),
(36, 4, 'c7eb0cb7a09bacfb82a275eee0b9b745.jpg', 0, 'assets/images/hotel/4/c7eb0cb7a09bacfb82a275eee0b9b745.jpg', '2018-05-09 14:32:46', '2018-05-04 03:30:27'),
(37, 4, '49d269de80068c27ab21eb0e8863533f.jpg', 0, 'assets/images/hotel/4/49d269de80068c27ab21eb0e8863533f.jpg', '2018-05-09 14:32:47', '2018-05-04 03:30:27'),
(38, 4, '3e30a98a3a7bebf2d46c4d571849cd04.jpg', 1, 'assets/images/hotel/4/3e30a98a3a7bebf2d46c4d571849cd04.jpg', '2018-05-09 14:34:40', '2018-05-04 03:30:27'),
(39, 1, 'ee4221401ee0804e02890462b7b7c932.jpg', 1, 'assets/images/hotel/1/ee4221401ee0804e02890462b7b7c932.jpg', '2018-05-09 14:39:07', '2018-04-30 14:54:29'),
(40, 1, '6b1282b160ba35f696c43c917769c7ac.jpg', 0, 'assets/images/hotel/1/6b1282b160ba35f696c43c917769c7ac.jpg', '2018-05-09 14:39:57', '2018-04-30 14:54:29'),
(41, 1, '41b193c9367b9ff76314c97373ae7932.jpg', 0, 'assets/images/hotel/1/41b193c9367b9ff76314c97373ae7932.jpg', '2018-05-09 14:39:57', '2018-04-30 14:54:29'),
(42, 1, 'd13fa0042775c792ebf29fd8368000ff.jpg', 0, 'assets/images/hotel/1/d13fa0042775c792ebf29fd8368000ff.jpg', '2018-05-09 14:39:57', '2018-04-30 14:54:29'),
(43, 1, 'fa7379550b02255314f9d2f7aa5cde76.jpg', 0, 'assets/images/hotel/1/fa7379550b02255314f9d2f7aa5cde76.jpg', '2018-05-09 14:39:57', '2018-04-30 14:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1525923837, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'dsaikat378@gmail.com', '$2y$08$MumPk5ODtjVP81ePfnDA2O3QsIs9Fo1Gtk1aTmMBL3.XkAhSHf0Py', NULL, 'dsaikat378@gmail.com', NULL, NULL, NULL, NULL, 1514887403, 1514887555, 1, 'Saikat', 'Dey', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(8, 1, 2),
(6, 2, 1),
(7, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `mobile` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `name`, `u_name`, `pass`, `address`, `mail`, `mobile`) VALUES
(1, 'Sak', 'sak', '', 'kol', 'abcd@abc.in', 1234567890),
(3, 'asdad', 'sad', 'asd', 'asd', 'asd@we.df', 0),
(4, 'Saikat Dey', 'sak', 'sak', 'Howrah', 'saikat@saikat.com', 8981380649);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_tb`
--
ALTER TABLE `hotel_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hotel_tb`
--
ALTER TABLE `hotel_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image_tb`
--
ALTER TABLE `image_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD CONSTRAINT `booking_detail_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hotel_tb` (`id`),
  ADD CONSTRAINT `booking_detail_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user_tb` (`id`),
  ADD CONSTRAINT `booking_detail_ibfk_3` FOREIGN KEY (`h_id`) REFERENCES `hotel_tb` (`id`),
  ADD CONSTRAINT `booking_detail_ibfk_4` FOREIGN KEY (`h_id`) REFERENCES `hotel_tb` (`id`);

--
-- Constraints for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD CONSTRAINT `image_tb_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hotel_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

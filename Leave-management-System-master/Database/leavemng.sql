-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leavemng`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 2812),
(2, 'vvpedu@gmail.com', 2812);

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplication`
--

CREATE TABLE `leaveapplication` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `days` int(255) NOT NULL,
  `erno` bigint(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveapplication`
--

INSERT INTO `leaveapplication` (`id`, `fname`, `days`, `erno`, `message`) VALUES
(13, 'Akash Chauhan', 9, 2147483647, 'I will be going for a long vacation with my family and will stay out of the station these days. Therefore, I would like to take leave from (start date) till (end-date).'),
(18, '545454545', 1, 779754464646, 'sdsdsdsd'),
(19, 'Ashvin', 5, 160346799797, 'some reason');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistartion`
--

CREATE TABLE `studentregistartion` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregistartion`
--

INSERT INTO `studentregistartion` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(12, 'akash chauhan', 'ac8572611@gmail.com', '7285801867', '$2y$10$CagnCrrc1ab99u0DuK75PejCLdmsQwosIQb2jfPd0PmCJnu6SgdrC', '$2y$10$fxKy2eEivfar6Kw9dWeO0u87xC0SqxKxu6N42UAi.0V6FZMzdwq.W'),
(13, 'akash chauhan', '19it197@gmail.com', '7285801867', '$2y$10$uYJwZBSL8moP3JzxVpOeiuj.HUjWBeF4sAXA5zaus1s41ObJD/hwm', '$2y$10$avzgmV6PgyJ70UDP/Ja4Ruonmepup5vtvRBLCpkossjssLFiuDKte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentregistartion`
--
ALTER TABLE `studentregistartion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `studentregistartion`
--
ALTER TABLE `studentregistartion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

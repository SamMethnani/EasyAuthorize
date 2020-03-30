-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyauthorize`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorization`
--

CREATE TABLE `authorization` (
  `id` int(11) NOT NULL,
  `role` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `coment` varchar(500) DEFAULT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `start_state` varchar(200) NOT NULL,
  `end_state` varchar(200) DEFAULT NULL,
  `start_city` varchar(200) NOT NULL,
  `end_city` varchar(200) DEFAULT NULL,
  `action_type` varchar(500) DEFAULT NULL,
  `piece_jointe` varchar(800) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authorization`
--

INSERT INTO `authorization` (`id`, `role`, `reason`, `coment`, `start_datetime`, `end_datetime`, `start_state`, `end_state`, `start_city`, `end_city`, `action_type`, `piece_jointe`, `status`, `client_id`) VALUES
(1, 'Individual', 'Need for food', 'kkj', '0000-00-00 00:00:00', '0551-04-05 04:54:00', 'Ariana', 'Ariana', 'dd', 'd', 'NULL', 'NULL', 'Approved', 0),
(5, 'Individual', 'Need for food', 's', '0054-06-05 05:04:00', '0005-04-05 15:04:00', 'Ariana', 'Ariana', 's', 's', 'NULL', 'NULL', 'Approved', 0),
(6, 'Individual', 'Other', '', '0121-12-12 12:12:00', '0001-02-12 02:12:00', 'Ariana', 'Ariana', 's', '21', 'NULL', 'NULL', 'Pending', 0),
(8, 'Individual', 'Need for food', 'ss', '2020-01-01 00:00:00', '2020-12-01 00:00:00', 'Ben Arous', 'Ben Arous', 'Mourouj 1', 'Mourouj 1', 'NULL', 'NULL', 'Approved', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(20) NOT NULL,
  `role` varchar(500) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `role`, `nationality`, `unique_id`, `name`, `last_name`, `password`) VALUES
(0, 'Individual', 'Tunisia', 'aaa', 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL,
  `location_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL,
  `location_type` int(1) NOT NULL,
  `unique_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `last_name`, `username`, `password`, `location_id`, `location_type`, `unique_id`) VALUES
(2, 'pp', 'pp', 'pp', 'pp', 0, 0, 'pp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

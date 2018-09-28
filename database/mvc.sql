-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 06:43 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ip` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `hostname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `osname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_ports` text COLLATE utf8_unicode_ci,
  `filtered_ports` text COLLATE utf8_unicode_ci,
  `date_scan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `ip` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`ip`, `owner`) VALUES
('127.0.0.1', 'user1'),
('127.0.0.10', 'user1'),
('127.0.0.6', 'user1'),
('127.0.0.7', 'user1'),
('127.0.0.8', 'user1'),
('127.0.0.9', 'user1'),
('192.168.1.1', 'admin'),
('192.168.1.10', 'guest'),
('192.168.1.11', 'user2'),
('192.168.1.12', 'guest'),
('192.168.1.13', 'admin'),
('192.168.1.14', 'user2'),
('192.168.1.15', 'user1'),
('192.168.1.16', 'user1'),
('192.168.1.5', 'user1'),
('192.168.1.7', 'user1'),
('192.168.1.8', 'user2'),
('192.168.1.9', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `admin`) VALUES
('admin', 'password', 1),
('guest', 'guest', NULL),
('user1', '123456', 0),
('user2', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `fk_ip` FOREIGN KEY (`ip`) REFERENCES `servers` (`ip`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

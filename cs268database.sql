-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 08:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs268database`
--

-- --------------------------------------------------------

--
-- Table structure for table `default_pfps`
--

CREATE TABLE `default_pfps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pfp_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `default_pfps`
--

INSERT INTO `default_pfps` (`id`, `pfp_path`) VALUES
(1, 'images/pfp/pfp1.jpg'),
(2, 'images/pfp/pfp2.jpg'),
(3, 'images/pfp/pfp3.jpg'),
(4, 'images/pfp/pfp4.jpg'),
(5, 'images/pfp/pfp5.jpg'),
(6, 'images/pfp/pfp6.jpg'),
(7, 'images/pfp/pfp7.jpg'),
(8, 'images/pfp/pfp8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `pfp_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `pfp_path`) VALUES
(2, 'dreadvisage', '$2y$10$4ixZGoRP2N/jHKMwmYDGseP9GH9Eka0XFzZMsuDje9.xp.zcshme6', '2023-10-18 20:39:53', 'images/pfp/pfp2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `default_pfps`
--
ALTER TABLE `default_pfps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `default_pfps`
--
ALTER TABLE `default_pfps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 05:39 AM
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
-- Table structure for table `search_suggestions`
--

CREATE TABLE `search_suggestions` (
  `suggestionID` int(11) NOT NULL,
  `suggestionMatchOn` varchar(255) NOT NULL,
  `suggestionDisplay` varchar(255) NOT NULL,
  `suggestionLink` varchar(255) NOT NULL,
  `sectionTitle` varchar(255) DEFAULT NULL,
  `requireLogin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search_suggestions`
--

INSERT INTO `search_suggestions` (`suggestionID`, `suggestionMatchOn`, `suggestionDisplay`, `suggestionLink`, `sectionTitle`, `requireLogin`) VALUES
(1, 'Home', 'Home', 'index.php', NULL, 0),
(2, 'Factions', 'Factions', 'factions.php', NULL, 0),
(3, 'About', 'About', 'about.php', NULL, 0),
(4, 'Points', 'Points', 'points.php', NULL, 1),
(5, 'FAQ', 'FAQ', 'faq.php', NULL, 0),
(6, 'Frequently Asked Questions', 'FAQ', 'faq.php', NULL, 0),
(7, 'Adepta Sororitas', 'Adepta Sororitas', 'factions/adepta-sororitas.php', 'Factions', 0),
(8, 'Adeptus Custodes', 'Adeptus Custodes', 'factions/adeptus-custodes.php', 'Factions', 0),
(9, 'Adeptus Mechanicus', 'Adeptus Mechanicus', 'factions/adeptus-mechanicus.php', 'Factions', 0),
(10, 'Adeptus Titanicus', 'Adeptus Titanicus', 'factions/adeptus-titanicus.php', 'Factions', 0),
(11, 'Aeldari', 'Aeldari', 'factions/aeldari.php', 'Factions', 0),
(12, 'Agents of the Imperium', 'Agents of the Imperium', 'factions/agents-of-imperium.php', 'Factions', 0),
(13, 'Astra Militarum', 'Astra Militarum', 'factions/astra-militarum.php', 'Factions', 0),
(14, 'Black Templars', 'Black Templars', 'factions/black-templars.php', 'Factions', 0),
(15, 'Blood Angels', 'Blood Angels', 'factions/blood-angels.php', 'Factions', 0),
(16, 'Chaos Daemons', 'Chaos Daemons', 'factions/chaos-daemons.php', 'Factions', 0),
(17, 'Chaos Knights', 'Chaos Knights', 'factions/chaos-knights.php', 'Factions', 0),
(18, 'Chaos Space Marines', 'Chaos Space Marines', 'factions/chaos-marines.php', 'Factions', 0),
(19, 'Dark Angels', 'Dark Angels', 'factions/dark-angels.php', 'Factions', 0),
(20, 'Necrons', 'Necrons', 'factions/necrons.php', 'Factions', 0),
(21, 'Space Marines', 'Space Marines', 'factions/space-marine.php', 'Factions', 0),
(22, 'Aeldari', 'Aeldari', 'points/aeldari-points.php', 'Points', 1),
(23, 'Agents of the Imperium', 'Agents of the Imperium', 'points/agents-points.php', 'Points', 1),
(24, 'Blood Angels', 'Blood Angels', 'points/blood-angels-points.php', 'Points', 1),
(25, 'Chaos Knights', 'Chaos Knights', 'points/chaos-knights-points.php', 'Points', 1),
(26, 'Chaos Space Marines', 'Chaos Space Marines', 'points/chaos-marines-points.php', 'Points', 1),
(27, 'Adeptus Custodes', 'Adeptus Custodes', 'points/custodes-points.php', 'Points', 1),
(28, 'Chaos Daemons', 'Chaos Daemons', 'points/daemons-points.php', 'Points', 1),
(29, 'Dark Angels', 'Dark Angels', 'points/dark-angels-points.php', 'Points', 1),
(30, 'Adeptus Mechanicus', 'Adeptus Mechanicus', 'points/mechanicus-points.php', 'Points', 1),
(31, 'Astra Militarum', 'Astra Militarum', 'points/militarum-points.php', 'Points', 1),
(32, 'Adepta Sororitas', 'Adepta Sororitas', 'points/sororitas-points.php', 'Points', 1),
(33, 'Black Templars', 'Black Templars', 'points/templars-points.php', 'Points', 1),
(34, 'Adeptus Titanicus', 'Adeptus Titanicus', 'points/titanicus-points.php', 'Points', 1),
(35, 'Leagues of Votann', 'Leagues of Votann', 'points/votann-points.php', 'Points', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_table`
--

CREATE TABLE `unit_table` (
  `UserID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `models` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `pfp_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_suggestions`
--
ALTER TABLE `search_suggestions`
  ADD PRIMARY KEY (`suggestionID`);

--
-- Indexes for table `unit_table`
--
ALTER TABLE `unit_table`
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search_suggestions`
--
ALTER TABLE `search_suggestions`
  MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `unit_table`
--
ALTER TABLE `unit_table`
  ADD CONSTRAINT `unit_table_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

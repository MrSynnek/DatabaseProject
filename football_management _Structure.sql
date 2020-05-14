-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 06:28 PM
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
-- Database: `football_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `Name` varchar(100) NOT NULL,
  `Alias` varchar(30) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `League` varchar(100) DEFAULT NULL,
  `In_sponser` bigint(20) DEFAULT NULL,
  `In_ticket` bigint(20) DEFAULT NULL,
  `In_copyr` bigint(20) DEFAULT NULL,
  `In_award` bigint(20) DEFAULT NULL,
  `In_playerout` bigint(20) DEFAULT NULL,
  `Ex_player` bigint(20) DEFAULT NULL,
  `Ex_staff` bigint(20) DEFAULT NULL,
  `Ex_state` bigint(20) DEFAULT NULL,
  `Ex_playerin` bigint(20) DEFAULT NULL,
  `Ex_misscell` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Address` varchar(255) NOT NULL,
  `Clubname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `Number` int(11) NOT NULL,
  `Player_id` int(8) NOT NULL,
  `Clubname` varchar(100) NOT NULL,
  `Start_date` date DEFAULT NULL,
  `Expire_date` date DEFAULT NULL,
  `Salary(Euro)` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eventdate`
--

CREATE TABLE `eventdate` (
  `Edate` date DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `vita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `Clubname` varchar(100) DEFAULT NULL,
  `Formation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `Id` int(8) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Bdate` date DEFAULT NULL,
  `National` varchar(40) DEFAULT NULL,
  `SN` int(2) DEFAULT NULL,
  `Position` varchar(3) DEFAULT NULL,
  `IsCaptian` varchar(1) DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `substitute` varchar(1) DEFAULT NULL,
  `vita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Player_id` int(8) NOT NULL,
  `rating` float DEFAULT NULL,
  `MOTM` int(5) DEFAULT NULL,
  `Goal` int(5) DEFAULT NULL,
  `assist` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(8) NOT NULL,
  `Appointment` varchar(30) DEFAULT NULL,
  `BOD` date DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Salary` bigint(20) DEFAULT NULL,
  `Trophy` int(5) DEFAULT NULL,
  `National` varchar(40) DEFAULT NULL,
  `Vita` varchar(255) DEFAULT NULL,
  `Matches` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Name` varchar(50) NOT NULL,
  `capacity` int(7) DEFAULT NULL,
  `Tog` varchar(10) DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `history` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Player_id` int(8) NOT NULL,
  `Clubname` varchar(100) NOT NULL,
  `Value` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Address`,`Clubname`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`Number`,`Player_id`,`Clubname`),
  ADD UNIQUE KEY `Number` (`Number`),
  ADD UNIQUE KEY `Player_id_2` (`Player_id`),
  ADD KEY `Player_id` (`Player_id`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `eventdate`
--
ALTER TABLE `eventdate`
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Player_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`Player_id`,`Clubname`),
  ADD UNIQUE KEY `Player_id` (`Player_id`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_2` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`),
  ADD CONSTRAINT `contract_ibfk_3` FOREIGN KEY (`Player_id`) REFERENCES `player` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `eventdate`
--
ALTER TABLE `eventdate`
  ADD CONSTRAINT `eventdate_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`Player_id`) REFERENCES `player` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`),
  ADD CONSTRAINT `transfer_ibfk_2` FOREIGN KEY (`Player_id`) REFERENCES `player` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

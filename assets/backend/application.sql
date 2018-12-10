-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2018 at 04:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educon`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `aid` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `typeedu` varchar(50) NOT NULL,
  `result` float NOT NULL,
  `income` float NOT NULL,
  `year` int(11) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`aid`, `id`, `Status`, `institute`, `typeedu`, `result`, `income`, `year`, `occupation`, `did`) VALUES
(1, 1, '1', 'Ruia', '12th', 89, 10000, 2014, 'Farmer', 1),
(3, 1, '1', 'Ruia', '11th', 80, 12000, 2013, 'Farmer', 2),
(4, 408, '1', 'DJ Sanghvi', 'Medical', 55, 10000, 2017, 'Farmer', 395),
(5, 393, '2', 'SPIT', 'Engineering', 70, 15000, 2017, 'Worker', 395);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `id` (`aid`),
  ADD UNIQUE KEY `Did` (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

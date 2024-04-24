-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2024 at 04:16 PM
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
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movieUsers`
--

CREATE TABLE `movieUsers` (
  `id` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `profilePhoto` varchar(20) DEFAULT NULL,
  `DateOfBirth` varchar(10) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `LastLogin` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieUsers`
--

INSERT INTO `movieUsers` (`id`, `Name`, `Email`, `Password`, `profilePhoto`, `DateOfBirth`, `Gender`, `LastLogin`) VALUES
(2, 'Pratham Shah', 'pradpat1918@gmail.com', '1234', '', '20-08-2004', 'M', NULL),
(5, 'Devansh Kansagra', 'dkansagra04@gmail.com', '1234', NULL, '07-07-2004', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieUsers`
--
ALTER TABLE `movieUsers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movieUsers`
--
ALTER TABLE `movieUsers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

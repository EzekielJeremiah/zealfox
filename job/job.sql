-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 05:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `logo` varchar(222) NOT NULL,
  `website` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `company` int(11) NOT NULL,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phoneN` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`company`, `firstname`, `lastname`, `email`, `phoneN`) VALUES
(2, 'Ezekiel', 'Jeremiah', 'iamezekieljeremiah@gmail.com', '0812798263'),
(3, 'darius', 'kingddd', 'iamezekieljeremiah@gmail.com', ''),
(4, 'Ezekiel', 'Jeremiah', 'iamezekieljeremiah@gmail.com', '0812798263'),
(5, 'Ezekiel', 'Jeremiah', 'iamezekieljeremiah@gmail.com', '0812798263'),
(6, 'David', 'emma', 'iamezekieljeremiah@gmail.com', '09058536217'),
(7, 'David', 'emma', 'iamezekieljeremiah@gmail.com', '09058536217'),
(8, 'David', 'emma', 'iamezekieljeremiah@gmail.com', '09058536217'),
(9, 'David', 'emma', 'iamezekieljeremiah@gmail.com', '09058536217'),
(10, 'Ezekiel', 'Jeremiah', 'iamezekieljeremiah@gmail.com', '09058536217'),
(11, '', '', '', ''),
(12, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

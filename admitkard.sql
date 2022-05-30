-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 11:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admitkard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitkard`
--

CREATE TABLE `admitkard` (
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admitkard`
--

INSERT INTO `admitkard` (`Name`, `Email`, `Contact`, `Course`, `Country`, `DOB`) VALUES
('Abhinav Rana', 'abhinavrana132000@gmail.com', 2147483647, 'UG', 'Germany', '2022-05-03'),
('aksaaa', 'baab131@gmail.com', 2147483647, 'PG', 'Canada, UK, Ireland, Germany, ', '2022-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admitkard`
--
ALTER TABLE `admitkard`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

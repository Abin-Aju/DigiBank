-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2021 at 12:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `cname` char(25) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `accno` int(11) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `emailid`, `accno`, `balance`) VALUES
(8304020, 'Abin', 'abin@gmail.com', 10022330, 40089),
(8304021, 'Christa', 'christa@gmail.com', 10022331, 54200),
(8304022, 'Nithin', 'nithin@gmail.com', 10022332, 53351),
(8304023, 'Eby', 'eby@gmail.com', 10022333, 44630),
(8304024, 'Anju', 'anju@gmail.com', 10022334, 46445),
(8304025, 'Joel', 'joel@gmail.com', 10022335, 50049),
(8304026, 'Neethu', 'neethu@gmail.com', 10022336, 45145),
(8304027, 'Feba', 'feba@gmail.com', 10022337, 24999),
(8304028, 'Annmariya', 'annmariya@gmail.com', 10022338, 25501),
(8304029, 'Jithu', 'jithu@gmail.com', 10022339, 50150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `accno` (`accno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

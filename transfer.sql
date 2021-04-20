-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2021 at 12:06 PM
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
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sender_name` char(20) NOT NULL,
  `sender_accno` int(11) NOT NULL,
  `receiver_name` char(20) NOT NULL,
  `receiver_accno` int(11) NOT NULL,
  `amount` float NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sender_name`, `sender_accno`, `receiver_name`, `receiver_accno`, `amount`, `Date`) VALUES
('Joel', 10022335, 'Nithin', 10022332, 10001, '2021-04-19 14:21:59'),
('Christa', 10022331, 'Annmariya', 10022338, 500, '2021-04-19 14:23:38'),
('Joel', 10022335, 'Neethu', 10022336, 100, '2021-04-19 14:24:01'),
('Nithin', 10022332, 'Eby', 10022333, 5000, '2021-04-19 14:24:16'),
('Jithu', 10022339, 'Annmariya', 10022338, 15000, '2021-04-19 14:24:51'),
('Jithu', 10022339, 'Feba', 10022337, 10000, '2021-04-19 14:25:14'),
('Joel', 10022335, 'Neethu', 10022336, 4200, '2021-04-19 14:25:43'),
('Abin', 10022330, 'Feba', 10022337, 500, '2021-04-20 10:21:03'),
('Christa', 10022331, 'Feba', 10022337, 500, '2021-04-20 10:31:31'),
('Annmariya', 10022338, 'Feba', 10022337, 3000, '2021-04-20 10:51:52'),
('Abin', 10022330, 'Anju', 10022334, 100, '2021-04-20 14:20:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 08:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowtasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `json_wala_table`
--

CREATE TABLE `json_wala_table` (
  `c1` varchar(10) NOT NULL,
  `c2` varchar(10) NOT NULL,
  `c3` varchar(10) NOT NULL,
  `c4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `json_wala_table`
--

INSERT INTO `json_wala_table` (`c1`, `c2`, `c3`, `c4`) VALUES
('1', 'a', '51', 'p'),
('1', 'a', '52', 'q'),
('1', 'a', '53', 'r'),
('2', 'b', '51', 'p'),
('2', 'b', '54', 's'),
('3', 'c', '52', 'q'),
('3', 'c', '53', 'r');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

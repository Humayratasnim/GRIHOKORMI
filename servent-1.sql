-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2019 at 08:07 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `billing_information`
--

DROP TABLE IF EXISTS `billing_information`;
CREATE TABLE IF NOT EXISTS `billing_information` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `servent_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_information`
--

INSERT INTO `billing_information` (`bill_id`, `servent_id`, `client_id`, `price`) VALUES
(20, 11, 29, 1000),
(21, 11, 31, 1000),
(22, 14, 34, 2000),
(23, 11, 41, 1000),
(24, 11, 43, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `servent_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `servent_id`, `status`, `mpesa`) VALUES
(42, 'Anup Bhowmick', 'anup25bd@gmail.com', 35566, 1711273666, 'Dhaka', 'Male', NULL, 'Available', NULL),
(43, 'sazzad', 'sazzad@gmail.com', 12345, 1711273666, 'Dhaka', 'Male', 17, 'pending', 'werwer');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

DROP TABLE IF EXISTS `hire`;
CREATE TABLE IF NOT EXISTS `hire` (
  `hire_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `servent_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servents`
--

DROP TABLE IF EXISTS `servents`;
CREATE TABLE IF NOT EXISTS `servents` (
  `servent_id` int(11) NOT NULL AUTO_INCREMENT,
  `servent_name` varchar(255) NOT NULL,
  `servent_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`servent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servents`
--

INSERT INTO `servents` (`servent_id`, `servent_name`, `servent_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(11, 'akash', 'full time', '4 (1).jpg', 1000, 5, 'Available'),
(12, 'toyota premio', 'toyota', 'pre.jpg', 1500, 4, 'Available'),
(13, 'Allion', 'Toyota', 'BF953830_770277.jpg', 1200, 4, 'Available'),
(14, 'Hiace', 'Toyota', 'hia.jpg', 2000, 10, 'Available'),
(16, 'Range rover', 'Range rover', 'range.jpg', 10000, 3, 'Available'),
(17, 'Xcorolla', 'Toyota', 'hqdefault.jpg', 800, 4, 'Available'),
(19, 'corolla axio', 'toyota', 'BF953830_770277.jpg', 1000, 4, 'Available'),
(20, '', '1711', '4 (1).jpg', 1000, 4, 'Available');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

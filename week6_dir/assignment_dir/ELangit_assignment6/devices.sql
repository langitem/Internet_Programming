-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2012 at 03:21 AM
-- Server version: 5.1.63
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student2_mobiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `refNo` int(4) unsigned zerofill NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deviceType` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `colour` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stockLevel` int(4) NOT NULL,
  `salesThisMonth` int(4) NOT NULL,
  `customerRating` int(1) NOT NULL,
  PRIMARY KEY (`refNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`refNo`, `name`, `deviceType`, `colour`, `stockLevel`, `salesThisMonth`, `customerRating`) VALUES
(0001, 'iPhone', 'phone', 'black', 25, 6, 4),
(0002, 'Android', 'phone', 'silver', 40, 15, 4),
(0003, 'Blackberry', 'phone', 'black', 20, 6, 4),
(0004, 'Nokia', 'phone', 'pink', 10, 4, 3),
(0005, 'Windows Phone', 'phone', 'red', 10, 2, 3),
(0006, 'iPad', 'tablet', 'white', 30, 15, 5),
(0007, 'Blackberry Playbook', 'tablet', 'black', 10, 2, 3),
(0008, 'Kindle Fire', 'tablet', 'black', 30, 12, 4),
(0009, 'Samsung Galaxy', 'tablet', 'gold', 20, 10, 4),
(0010, 'Google Nexus', 'tablet', 'black', 30, 20, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

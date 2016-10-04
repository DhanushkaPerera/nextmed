-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 05:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `OrderNo.` int(255) NOT NULL AUTO_INCREMENT,
  `NIC` varchar(10) NOT NULL,
  `DP` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DPTime` time NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` longblob NOT NULL,
  PRIMARY KEY (`OrderNo.`),
  UNIQUE KEY `NIC` (`NIC`),
  UNIQUE KEY `Telephone` (`Telephone`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderNo.`, `NIC`, `DP`, `Address`, `DPTime`, `Telephone`, `Email`, `Image`) VALUES
(6, '933560623V', 'on', 'Arangala,Malabe', '01:12:00', 11234567, 'am@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

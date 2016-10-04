-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 06:57 PM
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
  `NIC` varchar(12) NOT NULL,
  `DP` varchar(15) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `DPTime` time NOT NULL,
  `Telephone` int(10) unsigned zerofill NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `ImageName1` varchar(64) NOT NULL,
  `Image1Type` varchar(100) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `ImageName2` varchar(64) NOT NULL,
  `Image2Type` varchar(100) NOT NULL,
  `Image3` varchar(255) NOT NULL,
  `ImageName3` varchar(64) NOT NULL,
  `Image3Type` varchar(100) NOT NULL,
  PRIMARY KEY (`OrderNo.`),
  UNIQUE KEY `NIC` (`NIC`),
  UNIQUE KEY `Telephone` (`Telephone`,`Email`),
  UNIQUE KEY `OrderNo.` (`OrderNo.`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderNo.`, `NIC`, `DP`, `Address`, `DPTime`, `Telephone`, `Email`, `Image1`, `ImageName1`, `Image1Type`, `Image2`, `ImageName2`, `Image2Type`, `Image3`, `ImageName3`, `Image3Type`) VALUES
(1, '933560634V ', 'Pickup', '-', '12:22:00', 0112412635, 'lakantha@gmail.com', 'photo/buenos-aires2_1941364b.jpg', 'buenos-aires2_1941364b.jpg', 'image/jpeg', 'photo/header.png', 'header.png', 'image/jpeg', 'photo/Colorful-coral-reef.jpg.824x0_q71_crop-scale.jpg', 'Colorful-coral-reef.jpg.824x0_q71_crop-scale.jpg', 'image/jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2016 at 01:29 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `postnews` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `postnews`, `date`) VALUES
(23, ' We are not Today because a special reason.', '2016-01-12'),
(24, ' There is an opportunity for a pharmacist , if you wish to join with us, register now quickly.', '2016-03-16'),
(25, ' There is an opportunity for a pharmacist , if you wish to join with us, register now quickly.', '2016-03-16'),
(26, ' There is an opportunity for a pharmacist , if you wish to join with us, register now quickly.', '2016-09-22'),
(27, ' Now you can purchase drugs with discount.', '2016-07-19'),
(28, ' Saturday we are here at 9.00 pm', '2016-05-17'),
(29, ' You can order medicine online by uploading digital copies of your prescription.', '2016-06-14'),
(30, ' If you have two year experience as a pharmacist , you can join with us. ', '2016-07-26'),
(31, ' After online ordering , come soon and collect your drugs.', '2016-07-07'),
(32, ' Make sure upload 3 digital copies in online ordering.', '2016-08-10'),
(33, ' Further details about online ordering contact us within weekdays.', '2016-09-13'),
(34, ' This month 22,23,24 , pharmacy will be closed.', '2016-09-20'),
(37, ' If you purchase drugs over 500 rupees, you will get 10% discount.', '2016-09-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

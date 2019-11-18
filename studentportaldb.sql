-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2019 at 02:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresstbl`
--

DROP TABLE IF EXISTS `addresstbl`;
CREATE TABLE IF NOT EXISTS `addresstbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(200) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Matricno` varchar(14) NOT NULL,
  `Status` int(11) NOT NULL COMMENT '1-Permananet,2-Temporary',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresstbl`
--

INSERT INTO `addresstbl` (`id`, `Address`, `City`, `State`, `Matricno`, `Status`) VALUES
(4, '28,Ekot Ekpene', 'Akpan', 'Akwa-Ibom', 'sci/15/16/0677', 1),
(5, '11, Essie Udok', 'Ekpenyong', 'Akwa-Ibom', 'sci/15/16/0677', 2);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

DROP TABLE IF EXISTS `biodata`;
CREATE TABLE IF NOT EXISTS `biodata` (
  `Matricno` varchar(14) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Middlename` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Matricno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`Matricno`, `Firstname`, `Middlename`, `Lastname`, `Email`, `Phone`, `DOB`, `Password`, `Gender`) VALUES
('sci/15/16/0677', 'Tobi', 'f', 'james', 'tobijames2@gmail.com', '08109035558', '14/01/2018', 'system', 'Male'),
('sci/15/16/0000', 'Emmanuel', 'O', 'Malieze', 'emma@mali.com', '07083324460', '14/01/2018', 'system', 'Male'),
('sci/15/16/1080', 'Wale', 'O', 'Rasaq', 'rasaqwale@gmail.com', '0897678877', '14/01/2018', 'wale', 'Male'),
('sci/15/16/8000', 'Munir', 'O', 'Azeez', 'azezmunir@gmail.com', '0886765', '14/01/1997', 'system', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Matricno` varchar(14) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Relationship` varchar(15) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

DROP TABLE IF EXISTS `medical`;
CREATE TABLE IF NOT EXISTS `medical` (
  `Matricno` varchar(14) NOT NULL,
  `Bloodgroup` varchar(15) NOT NULL,
  `Genotype` varchar(15) NOT NULL,
  `Healthstatus` varchar(15) NOT NULL,
  `Allergies` varchar(100) NOT NULL,
  PRIMARY KEY (`Matricno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `MatricNo` varchar(14) NOT NULL,
  `Amount` varchar(15) NOT NULL,
  `Session` varchar(9) NOT NULL,
  `DateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `RRN` varchar(15) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_transaction`
--

DROP TABLE IF EXISTS `payment_transaction`;
CREATE TABLE IF NOT EXISTS `payment_transaction` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `STAN` int(11) NOT NULL,
  `RRN` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

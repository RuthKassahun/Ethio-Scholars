-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2019 at 09:02 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethioscholars`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `guestid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `accountnumber` varchar(50) NOT NULL,
  PRIMARY KEY (`guestid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
CREATE TABLE IF NOT EXISTS `organization` (
  `organizationid` int(11) NOT NULL AUTO_INCREMENT,
  `organizationname` varchar(50) NOT NULL,
  `organizationlocation` varchar(50) NOT NULL,
  PRIMARY KEY (`organizationid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

DROP TABLE IF EXISTS `paper`;
CREATE TABLE IF NOT EXISTS `paper` (
  `paperid` int(11) NOT NULL AUTO_INCREMENT,
  `papertitle` varchar(100) NOT NULL,
  `researchername` varchar(30) NOT NULL,
  `researcherid` int(30) NOT NULL,
  `rating` int(100) NOT NULL,
  PRIMARY KEY (`paperid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

DROP TABLE IF EXISTS `researcher`;
CREATE TABLE IF NOT EXISTS `researcher` (
  `researcherid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `papertitle` varchar(50) NOT NULL,
  `submitteddate` timestamp NOT NULL,
  `accountnumber` varchar(30) NOT NULL,
  `areaofresearch` varchar(50) NOT NULL,
  PRIMARY KEY (`researcherid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

DROP TABLE IF EXISTS `scholars`;
CREATE TABLE IF NOT EXISTS `scholars` (
  `scholarid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `signupwith` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `signupdate` timestamp NOT NULL,
  PRIMARY KEY (`scholarid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `universityid` int(11) NOT NULL AUTO_INCREMENT,
  `universityname` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `researchername` varchar(30) NOT NULL,
  PRIMARY KEY (`universityid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2019 at 08:08 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `accountId` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`accountId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountId`, `username`, `password`, `role`) VALUES
(22, 'sel', '123', 'indpendentresearcher'),
(23, 'frew', 'a01610228fe998f515a72dd730294d87', 'enterprise'),
(24, 'emann', '123', 'indpendentresearcher');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `paperid` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `desciption` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `published` date DEFAULT NULL,
  `picpath` varchar(100) NOT NULL,
  PRIMARY KEY (`paperid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`paperid`, `path`, `title`, `dept`, `desciption`, `price`, `published`, `picpath`) VALUES
(33, 'doc/under world.docx', 'Born a crime', 'computer science', 'Big companies save time with Slack by securely collaborating across teams, departments, offices and countries.', 200, '2019-08-06', 'imag/covers (72).jpg'),
(32, 'doc/The_Island_of_Doctor_Moreau_NT.pdf', 'Research studies ', 'computer science', '4000+ UI elements, including 2000+ premium components, detailed documentation, 20+ ready to use templates, 50+ dedicated sections and more! Discover full power and possibilities of the most trusted UI Kit on the world.', 200, '2019-08-21', 'imag/covers (209).jpg'),
(31, 'doc/Around_the_World_in_80_Days_NT.pdf', 'Paper', 'enginnering', 'Eman Published a paper', 200, '2019-08-25', 'imag/covers (219).jpg'),
(30, 'doc/under world.docx', 'Documents', 'computer science', 'Efcgvbhnjmkl,kjhgfd', 200, '2019-08-09', 'imag/covers (199).jpg'),
(29, 'doc/Vol 2 - The Chamber of Secrets.pdf', 'Documents', 'social science', 'jhbvkjwen', 200, '2019-08-06', 'imag/covers (122).jpg'),
(35, 'doc/04.pdf', 'research', 'enginnering', 'this must be inserted', 200, '2019-08-22', 'imag/cover_6.jpg'),
(38, 'doc/03 Perfect - Sara Shepard.pdf', 'SDN', 'enginnering', 'SDN based data center', 500, '2019-08-22', 'imag/covers (6).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enterprise`
--

DROP TABLE IF EXISTS `enterprise`;
CREATE TABLE IF NOT EXISTS `enterprise` (
  `enterpriseid` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(50) NOT NULL,
  `companyemail` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `companywebsite` varchar(50) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `postbox` varchar(30) NOT NULL,
  `companyphone1` int(25) NOT NULL,
  `companyphone2` int(25) NOT NULL,
  `companyphone3` int(25) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `position` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `accId` int(10) DEFAULT NULL,
  PRIMARY KEY (`enterpriseid`),
  KEY `accId` (`accId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enterprise`
--

INSERT INTO `enterprise` (`enterpriseid`, `companyname`, `companyemail`, `location`, `companywebsite`, `fax`, `postbox`, `companyphone1`, `companyphone2`, `companyphone3`, `fullname`, `position`, `address`, `email`, `accId`) VALUES
(3, 'SAP', 'sap@gmail.com', 'dfds', 'gshkdfjv', 'dgg', 'anansh.mami@gmail.com', 3, 234, 76980, 'frew', 'manager', 'AA', 'frew@gmail.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `grantdoc`
--

DROP TABLE IF EXISTS `grantdoc`;
CREATE TABLE IF NOT EXISTS `grantdoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `disc` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `published` varchar(120) DEFAULT NULL,
  `picpath` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grantdoc`
--

INSERT INTO `grantdoc` (`id`, `path`, `title`, `dept`, `disc`, `price`, `published`, `picpath`) VALUES
(47, '../uploads/doc/dubai campass.txt', 'Women Empowerment', 'computer science', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 123, '2019-08-01', '../uploads/img/women.jpg'),
(48, '../uploads/doc/aerotak.txt', 'Health Science', 'other science', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 236, '2019-08-02', '../uploads/img/doctors.jpg'),
(49, '../uploads/doc/australian.txt', 'Engineering', 'enginnering', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 369, '2019-08-03', '../uploads/img/engimg.jpg'),
(50, '../uploads/doc/googledoc.txt', 'Social Science', 'social science', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 852, '2019-08-03', '../uploads/img/socialimg.jpg'),
(51, '../uploads/doc/myproject works.txt', 'Computer Science', 'other science', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 789, '2019-08-05', '../uploads/img/cs2img.jpg'),
(52, '../uploads/doc/login.txt', 'Other', 'other science', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 1245, '2019-08-06', '../uploads/img/other.jpg'),
(53, '../uploads/doc/new gmail.txt', 'Youth Association', 'other science', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit\r\n          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n          et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum', 876, '2019-08-14', '../uploads/img/youth.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `indpendentresearcher`
--

DROP TABLE IF EXISTS `indpendentresearcher`;
CREATE TABLE IF NOT EXISTS `indpendentresearcher` (
  `indpendentresearcherid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `educationallevel` varchar(30) NOT NULL,
  `accId` int(10) DEFAULT NULL,
  PRIMARY KEY (`indpendentresearcherid`),
  KEY `accId` (`accId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indpendentresearcher`
--

INSERT INTO `indpendentresearcher` (`indpendentresearcherid`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `location`, `educationallevel`, `accId`) VALUES
(10, 'eman', 'Hashim', 'emanhashim42@gmail.com', '0922420131', 'addiss', '5 kilo', 'Assistance Professor', 24),
(9, 'netsanet', 'hkjlo', 'anansh.mami@gmail.com', '0922420131', 'addiss', '5 kilo', 'Assistance Professor', NULL),
(8, 'nmnm', 'hkjlo', 'q3reeter7@gmail.com', '+251922420131', 'AA', '5 kilo', 'Assistance Professor', 22);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `ratingid` int(11) NOT NULL AUTO_INCREMENT,
  `accId` int(10) NOT NULL,
  `paperId` int(10) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `ratingnumber` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`ratingid`),
  KEY `accId` (`accId`),
  KEY `paperId` (`paperId`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingid`, `accId`, `paperId`, `feedback`, `ratingnumber`, `username`) VALUES
(1, 22, 23, 'sadsdsas', '4', 'sel'),
(2, 23, 26, 'zsxdcfvg', '3', 'sel'),
(3, 23, 26, 'sxd cfvgbhnjkolp;', '4', 'sel'),
(4, 23, 26, 'swedrftgyujiolkjhgfddfghjklkjhgfcd', '4', 'sel'),
(5, 23, 26, 'Best paper', '5', 'sel'),
(6, 23, 26, 'not bad', '3', 'sel');

-- --------------------------------------------------------

--
-- Table structure for table `searchgrant`
--

DROP TABLE IF EXISTS `searchgrant`;
CREATE TABLE IF NOT EXISTS `searchgrant` (
  `fieldid` int(200) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(100) NOT NULL,
  `fieldscore` varchar(100) NOT NULL,
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchgrant`
--

INSERT INTO `searchgrant` (`fieldid`, `fieldname`, `fieldscore`) VALUES
(1, 'enginnering', '4'),
(2, 'medicine', '3'),
(3, 'economics', '4'),
(4, 'accounting', '7');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `universityid` int(11) NOT NULL AUTO_INCREMENT,
  `institutionname` varchar(50) NOT NULL,
  `institutionemail` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `insititutionwebsite` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `postbox` varchar(30) NOT NULL,
  `insititutionphone1` int(25) NOT NULL,
  `insititutionphone2` int(25) NOT NULL,
  `insititutionphone3` int(25) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `accId` int(10) DEFAULT NULL,
  PRIMARY KEY (`universityid`),
  KEY `accId` (`accId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` int(25) NOT NULL,
  `address` varchar(20) NOT NULL,
  `location` varchar(25) NOT NULL,
  `educationallevel` varchar(25) NOT NULL,
  `accId` int(10) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  KEY `accId` (`accId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

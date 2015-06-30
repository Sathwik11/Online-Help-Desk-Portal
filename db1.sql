-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2014 at 10:16 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `ADMINNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ADMINNAME`, `PASSWORD`) VALUES
('admin1', 'admin1'),
('admin2', 'admin2'),
('admin3', 'admin3');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `FN` varchar(10) NOT NULL,
  `LN` varchar(10) NOT NULL,
  `AGE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`FN`, `LN`, `AGE`) VALUES
('Sa', 'Sas', 24),
('Sa', 'Sas', 24),
('Sa', 'Sas', 24),
('Sa', 'Sas', 24),
('Sb', 'Sab', 24),
('Sb', 'Sab', 24),
('Sb', 'Sab', 24),
('Scb', 'Sacb', 30),
('Scb', 'Sacb', 30);

-- --------------------------------------------------------

--
-- Table structure for table `issuesdetails`
--

CREATE TABLE IF NOT EXISTS `issuesdetails` (
  `USERNAME` varchar(20) NOT NULL,
  `CONADMIN` varchar(30) NOT NULL DEFAULT 'no',
  `ISDES` text NOT NULL,
  `STATUS` varchar(1) DEFAULT '0',
  `ISSOL` text NOT NULL,
  `SNO` int(11) NOT NULL AUTO_INCREMENT,
  `ISTYPE` varchar(20) NOT NULL,
  `Date` varchar(30) NOT NULL,
  PRIMARY KEY (`SNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `issuesdetails`
--

INSERT INTO `issuesdetails` (`USERNAME`, `CONADMIN`, `ISDES`, `STATUS`, `ISSOL`, `SNO`, `ISTYPE`, `Date`) VALUES
('sam1', 'no', 'Hi this is my First Issue . My name is Sam1 . Can you please do it as soon as possible', '0', ' Hi sam I solved your First Issue Please Check it out    ', 32, 'one', '2014-05-31  10:47:03  AM'),
('sam1', 'no', 'Hi this is my Second Issue . My name is Sam1 . Can you please do it as soon as possible', '0', ' hi sam I am processing ADmin 1     ', 33, 'two', '2014-05-31  10:48:57  AM'),
('sam1', 'no', 'Hi this is my Third Issue . My name is Sam1 . Can you please do it as soon as possible', '0', ' ', 34, 'three', '2014-05-31  10:49:28  AM'),
('sam2', 'admin2', 'Hi this is my First Issue . My name is Sam2 . Can you please do it as soon as possible', '1', '', 35, 'one', '2014-05-31  10:50:28  AM'),
('sam2', 'no', 'Hi this is my Second Issue . My name is Sam2 . Can you please do it as soon as possible', '0', '', 36, 'two', '2014-05-31  10:51:02  AM'),
('sam2', 'no', 'Hi this is my Third Issue . My name is Sam2 . Can you please do it as soon as possible', '0', '', 37, 'three', '2014-05-31  10:51:27  AM'),
('sam1', 'no', '', '0', ' ', 38, 'one', '2014-06-04  11:24:36  AM'),
('sam3', 'admin1', '', '2', ' ', 39, 'one', '2014-06-04  01:36:28  PM'),
('sam3', 'admin3', '', '1', '', 40, 'one', '2014-06-04  01:36:30  PM'),
('sam1', 'admin1', 'hi how r u....................jghjjd', '1', ' hi  ', 41, 'one', '2014-06-13  09:01:46  AM'),
('sam1', 'no', 'thfhfgh', '0', '', 42, 'one', '2014-06-13  11:25:39  AM'),
('sam1', 'admin1', 'Computer network is not working at ECIL ITSD', '2', ' The problem will be solved by our agents tomorrow morning 15-06-2014', 43, 'four', '2014-06-14  11:57:57  AM');

-- --------------------------------------------------------

--
-- Table structure for table `issuestypes`
--

CREATE TABLE IF NOT EXISTS `issuestypes` (
  `ISSTYPE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuestypes`
--

INSERT INTO `issuestypes` (`ISSTYPE`) VALUES
('one'),
('two'),
('three'),
('four'),
('five'),
('six');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `IP` varchar(30) NOT NULL,
  `MAC` varchar(30) NOT NULL,
  `PHNO` varchar(10) NOT NULL,
  UNIQUE KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`USERNAME`, `PASSWORD`, `IP`, `MAC`, `PHNO`) VALUES
('manicharan', 'manicharan', '1.12.21.1', '21-12-12-12-21-21', '2147483647'),
('manicharan1', 'manicharan1', '1.121.121.1', '23-31-12-12-31-31', '2147483647'),
('manicharan2', 'manicharan2', '172.324.234.342', '23-23-34-34-42-42', '2147483647'),
('sam1', 'sam1', '323-456-765-321', '12-32-34-54-43-43', '9876546789'),
('sam2', 'sam2', '323-456-765-323', '12-32-34-54-43-43', '9876546788'),
('sam3', 'sam3', '', '', ''),
('sam4', 'sam4', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

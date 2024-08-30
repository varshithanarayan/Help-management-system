-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2019 at 10:38 AM
-- Server version: 5.7.24
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
-- Database: `pickup`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

DROP TABLE IF EXISTS `confirm`;
CREATE TABLE IF NOT EXISTS `confirm` (
  `did` varchar(100) NOT NULL,
  `dmid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`did`, `dmid`) VALUES
('1', 'suma'),
('4', 'nishchith'),
('5', 'nishchith');

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

DROP TABLE IF EXISTS `deliver`;
CREATE TABLE IF NOT EXISTS `deliver` (
  `username` varchar(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dusername` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`username`, `did`, `dusername`, `cost`) VALUES
('sudha', '1', 'suma', '22'),
('', '', '', ''),
('sachin', '4', 'nishchith', '13'),
('dileep', '5', 'nishchith', '13');

-- --------------------------------------------------------

--
-- Table structure for table `deliver_request`
--

DROP TABLE IF EXISTS `deliver_request`;
CREATE TABLE IF NOT EXISTS `deliver_request` (
  `did` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dphone` varchar(50) NOT NULL,
  `daddress` varchar(550) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pphone` varchar(50) NOT NULL,
  `paddress` varchar(550) NOT NULL,
  `item` varchar(50) NOT NULL,
  `pdate` varchar(50) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliver_request`
--

INSERT INTO `deliver_request` (`did`, `username`, `dname`, `dphone`, `daddress`, `pname`, `pphone`, `paddress`, `item`, `pdate`, `ptype`) VALUES
(1, 'suma', 'sudha', '8884436043', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'manu', '8884644589', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'book', '2019-02-02', 'Normal'),
(2, 'sudha', 'suresh', '8884436043', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'manu', '8884644589', 'Mysore palace', 'book', '2019-02-05', 'Fastrack'),
(3, 'sudha', 'kushal', '8884644589', 'Mysore Bus Stand KSRTC, Lashkar Mohalla, Mandi Mohalla, Mysuru, Karnataka', 'suresh', '7026469873', 'Jagan Mohan Palace Road, Subbarayanakere, Chamrajpura, Mysuru, Karnataka', 'refrigerate', '2019-02-06', 'Normal'),
(4, 'sachin', 'ramu', '8884644589', 'JSS Hospital Road, Agrahara, Fort Mohalla, Mysuru, Karnataka, India', 'ravi', '8884644458', 'Mysore Palace, Agrahara, Chamrajpura, Mysuru, Karnataka', 'book', '2019-03-01', 'Normal'),
(5, 'dileep', 'nishchith', '8884644589', 'Mysore Bus Stand KSRTC, Lashkar Mohalla, Mandi Mohalla, Mysuru, Karnataka', 'sumanth', '8884644458', 'Mysore Palace, Agrahara, Chamrajpura, Mysuru, Karnataka', 'book', '2019-03-03', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `dusers`
--

DROP TABLE IF EXISTS `dusers`;
CREATE TABLE IF NOT EXISTS `dusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dusername` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusers`
--

INSERT INTO `dusers` (`id`, `dusername`, `fullname`, `email`, `phone`, `address`, `cname`, `password`, `status`, `trn_date`) VALUES
(3, 'suma1', 'suma a', 'suma@gmail.com', '8884644589', 'kuvempunagar', 'blue dart', 'e10adc3949ba59abbe56e057f20f883e', 'Active', '2019-02-19 18:44:57'),
(1, 'M101', 'suri', 'mysuru@gmail.com', '', 'ayush pg, block A1,stage 2 vijayanagar', 'blue dart', 'e10adc3949ba59abbe56e057f20f883e', 'Notactive', '2019-02-05 14:46:25'),
(4, 'prasad', 'm', 'prasad@gmail.com', '8884644589', 'Mysuru, Karnataka, India', 'delta', 'e10adc3949ba59abbe56e057f20f883e', 'Active', '2019-02-28 20:01:38'),
(5, 'nishchith', 'bishchith m', 'nishchith@gmail.com', '8884644589', 'kuvempunagar', 'delta', 'e10adc3949ba59abbe56e057f20f883e', 'Active', '2019-03-01 08:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `username` varchar(50) NOT NULL,
  `dmid` varchar(50) NOT NULL,
  `feed` varchar(100) NOT NULL,
  `impr` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `dmid`, `feed`, `impr`) VALUES
('suma', '', 'good service', 'Good'),
('suma', '', 'good service', 'Good'),
('suma1', 'suma', 'good service', 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
CREATE TABLE IF NOT EXISTS `track` (
  `did` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dmid` varchar(550) NOT NULL,
  `status` varchar(400) NOT NULL,
  `dtime` varchar(50) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  `lati` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`did`, `username`, `email`, `phone`, `dmid`, `status`, `dtime`, `ddate`, `longi`, `lati`) VALUES
('1', 'suma', 'suma1@gmail.com', '8884436043', 'suma1', 'Successfully Pick-Up', '22:10', '2019-02-26', '76.6223406', '12.3397331'),
('4', 'sachin', 'nishchith@gmail.com', '8846444589', 'nishchith', 'Successfully Pick-Up', '10:10', '2019-03-02', '77.59872', '12.9728512'),
('5', 'dileep', 'nishchith@gmail.com', '8846444589', 'nishchith', 'Successfully Pick-Up', '12:03', '2019-03-03', '76.649003', '12.3058815');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `phone`, `address`, `password`, `trn_date`) VALUES
(1, 'suresh', 'sureshmp', 'suri@gmail.com', '', 'Srirangapatna, Karnataka, India', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-31 12:10:29'),
(2, 'suresh', 'sureshmp', 'suri@gmail.com', '8884644589', 'Srirangapatna, Karnataka, India', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-31 12:12:30'),
(3, 'sudha', 'sudhamp', 'sudha@gmail.com', '8884644589', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'e10adc3949ba59abbe56e057f20f883e', '2019-01-31 12:35:53'),
(4, 'sachin', 'sachin kumar', 'sachin@gmail.com', '8884644589', 'mysuru', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-01 08:13:36'),
(5, 'dileep', 'm', 'dileep@gmail.com', '8884644589', 'mysuru', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-02 09:58:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 08:25 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE IF NOT EXISTS `courier` (
  `name` varchar(20) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `del_addr` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `time` varchar(10) NOT NULL,
  `hours` int(11) NOT NULL,
  `que_msg` varchar(50) NOT NULL,
  `track` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`name`, `contact_no`, `email`, `del_addr`, `weight`, `time`, `hours`, `que_msg`, `track`) VALUES
('hirva', 9409668841, 'hirvap08@gmail.com', 'abcxyz', 10, 'Midday', 3, '', '0'),
('mardav', 1234567890, 'mardav@gmail.com', 'abc', 10, 'Morning', 3, '', '0'),
('No one', 1234123845, 'abc@gmail.com', 'szdv', 20, 'Morning', 4, '', '0'),
('parshva', 1234567890, 'parshva@gmail.com', 'abc', 20, 'Morning', 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `city`, `feedback`) VALUES
('hirva', 'vadodara', 'good '),
('parshva', 'anand', 'i loved your service'),
('abc', 'vadodara', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `mail`, `username`, `password`) VALUES
('abc', 'abc@gmail.com', 'abc', 'abca'),
('hirva', 'hirvap08@gmail.com', 'hirva', 'hirva'),
('mardav', 'mardav@gmail.com', 'mardav', 'mardav'),
('parshva', 'parshva@gmail.com', 'parshva', 'par');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

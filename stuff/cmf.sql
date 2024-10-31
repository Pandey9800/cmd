-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 06:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`username`, `password`) VALUES
('ADMIN', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tab`
--

CREATE TABLE IF NOT EXISTS `contact_tab` (
  `id` mediumint(4) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` varchar(200) NOT NULL,
  `edition` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `year`, `edition`) VALUES
(28, 'ravi.pdf', '2016-17', '1st'),
(30, 'css.pdf', '2016-17', '2ND');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contact_tab`
--
ALTER TABLE `contact_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_tab`
--
ALTER TABLE `contact_tab`
  MODIFY `id` mediumint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

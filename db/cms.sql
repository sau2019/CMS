-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 04, 2019 at 03:22 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_register`
--

CREATE TABLE `com_register` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `com_cin` varchar(100) NOT NULL,
  `com_address` varchar(500) NOT NULL,
  `com_email` varchar(100) NOT NULL,
  `com_mobile` varchar(10) NOT NULL,
  `com_city` varchar(10) NOT NULL,
  `com_country` varchar(10) NOT NULL,
  `com_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_register`
--

INSERT INTO `com_register` (`com_id`, `com_name`, `com_cin`, `com_address`, `com_email`, `com_mobile`, `com_city`, `com_country`, `com_password`) VALUES
(320190001, 'codepanda', 'codepanda2019043634', 'bhopal', 'srk@gmail.com', '648652734', 'Bhopal', 'india', '090988877'),
(320190002, 'frued.com', 'sdhegd23455bh', 'Bhopal', 'sranjanteghra03@gmail.com', '8292475177', 'Bhopal', 'india', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `city`, `country`, `password`) VALUES
(20190013, 'saurabh', 'ranjan', 'srkit28@gmail.com', '8837647764', 'male', '', '', '12345'),
(20190014, '', '', 'raj123@gmail.com', '', '', '', '', ''),
(20190015, 'gajrendra', '', 'ga12345@gmail.com', '', '', '', '', ''),
(20190016, 'saurabh', '', '123@gmail.com', '', '', '', '', '12345'),
(20190017, '', '', '', '', '', '', '', ''),
(20190018, '', '', 'sr123543@gmail.com', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_register`
--
ALTER TABLE `com_register`
  ADD PRIMARY KEY (`com_id`),
  ADD UNIQUE KEY `com_email` (`com_email`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_register`
--
ALTER TABLE `com_register`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320190003;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20190019;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

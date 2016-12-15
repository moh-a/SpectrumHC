-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 02:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inse6260`
--

-- --------------------------------------------------------

--
-- Table structure for table `caregiver_availability_db`
--

CREATE TABLE `caregiver_availability_db` (
  `email` varchar(50) NOT NULL,
  `Monday` tinyint(1) NOT NULL DEFAULT '0',
  `Tuesday` tinyint(1) NOT NULL DEFAULT '0',
  `Wednesday` tinyint(1) NOT NULL DEFAULT '0',
  `Thrusday` tinyint(1) NOT NULL DEFAULT '0',
  `Friday` tinyint(1) NOT NULL DEFAULT '0',
  `Saturday` tinyint(1) NOT NULL DEFAULT '0',
  `Sunday` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caregiver_availability_db`
--

INSERT INTO `caregiver_availability_db` (`email`, `Monday`, `Tuesday`, `Wednesday`, `Thrusday`, `Friday`, `Saturday`, `Sunday`) VALUES
('rauf@gmail.com', 1, 1, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `caregiver_db`
--

CREATE TABLE `caregiver_db` (
  `id` int(7) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(7) DEFAULT NULL,
  `preferredLanguage` varchar(15) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caregiver_db`
--

INSERT INTO `caregiver_db` (`id`, `name`, `email`, `gender`, `DOB`, `address`, `city`, `state`, `postalCode`, `preferredLanguage`, `telephone`, `password`) VALUES
(1, 'rani', 'rani@gmail.com', 'female', '2012-01-01', '7422 gaspe', 'ad', 'df', 'h3n2d3', 'French', '5141238749', 'weqweqweqweqwe'),
(2, 'akram', 'akram12@gmail.cm', 'male', '2012-01-01', '7422 gaspe', 'ad', 'qc', 'h3n2d3', 'English', '5141238710', '46464644'),
(3, 'aad', 'aasd@sdd.com', 'female', '2012-01-01', '7820 ave parc', 'ad', 'qc', 'h3n2d3', 'English', '5141238710', '544564664'),
(4, 'janu', 'janu@abc.com', 'male', '2016-01-01', '7422 gaspe', 'ad', 'qc', 'h3n2d4', 'English', '5141238710', 'wdwewqeqeqwe'),
(5, 'akram', 'xczxc@sdasd.com', 'male', '2014-01-01', '7422 gaspe', 'assd', 'df', 'h3n2d3', 'French', '5141238710', 'weqwewqeqweqwe'),
(6, 'jani', 'sdadasd@abc.com', 'male', '2012-01-01', '7422 gaspe', 'ad', 'df', 'h3n2d3', 'English', '5141238710', 'rajaasdasd'),
(7, 'steve', 'steve@abc.com', 'male', '2012-01-01', '7422 gaspe', 'montreal', 'quebec', 'h3n2d3', 'English', '5141238710', '1234abcd'),
(8, 'moiz', 'maoi@abc.com', 'male', '2014-01-01', '7422 gaspe', 'ad', 'df', 'h3n2d3', 'English', '5141238710', '1234abcd'),
(9, 'rauf', 'rauf@gmail.com', 'male', '2012-01-01', '7820 ave parc', 'ad', 'quebec', 'h3n2d3', 'English', '5141238710', '1234abcd');

-- --------------------------------------------------------

--
-- Table structure for table `caregiver_services_db`
--

CREATE TABLE `caregiver_services_db` (
  `email` varchar(50) NOT NULL,
  `BloodTest` tinyint(1) NOT NULL DEFAULT '0',
  `GlucoseTest` tinyint(1) NOT NULL DEFAULT '0',
  `BloodPressure` tinyint(1) NOT NULL DEFAULT '0',
  `UrineTest` tinyint(1) NOT NULL DEFAULT '0',
  `Physio` tinyint(1) NOT NULL DEFAULT '0',
  `Injection` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caregiver_services_db`
--

INSERT INTO `caregiver_services_db` (`email`, `BloodTest`, `GlucoseTest`, `BloodPressure`, `UrineTest`, `Physio`, `Injection`) VALUES
('sdadasd@abc.com', 1, 0, 1, 1, 0, 0),
('steve@abc.com', 1, 1, 0, 1, 1, 1),
('maoi@abc.com', 1, 0, 0, 0, 0, 0),
('rauf@gmail.com', 1, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(30, 'khushbu', '1234', 'Caregiver'),
(31, 'ali', '1234', 'Patient'),
(32, 'zeeshan', '1234', 'Admin'),
(33, 'ali@abc.com', '1234abcd', 'Patient'),
(34, 'khushbu@gmail.com', '1234abcd', 'Patient'),
(35, 'sara@abc.com', '1234abcd', 'Patient'),
(36, 'sdads@abc.com', 'dfgdfgdfgdfgdfgdfg', 'Patient'),
(37, 'ass@abc.com', 'fdfdffsdfsdf', 'Patient'),
(38, 'abc@aby.com', 'dsdsadasdasdasd', 'Patient'),
(39, 'rani@gmail.com', 'weqweqweqweqwe', 'Caregiver'),
(40, 'akram12@gmail.cm', '46464644', 'Caregiver'),
(41, 'aasd@sdd.com', '544564664', 'Caregiver'),
(42, 'janu@abc.com', 'wdwewqeqeqwe', 'Caregiver'),
(43, 'xczxc@sdasd.com', 'weqwewqeqweqwe', 'Caregiver'),
(44, 'sdadasd@abc.com', 'rajaasdasd', 'Caregiver'),
(45, 'steve@abc.com', '1234abcd', 'Caregiver'),
(46, 'maoi@abc.com', '1234abcd', 'Caregiver'),
(47, 'rauf@gmail.com', '1234abcd', 'Caregiver');

-- --------------------------------------------------------

--
-- Table structure for table `patient_db`
--

CREATE TABLE `patient_db` (
  `id` int(7) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(7) DEFAULT NULL,
  `preferredLanguage` varchar(15) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_db`
--

INSERT INTO `patient_db` (`id`, `name`, `email`, `gender`, `DOB`, `address`, `city`, `state`, `postalCode`, `preferredLanguage`, `telephone`, `password`) VALUES
(1, 'Mohammad Ali', 'ali@abc.com', 'male', '2012-01-01', '7422 gaspe', 'montreal', 'quebec', 'h3n2d4', 'English', '5141238749', '1234abcd'),
(2, 'khushbu', 'khushbu@gmail.com', 'female', '2009-01-01', '7820 ave parc', 'montreal', 'quebec', 'h3n2r2', 'English', '5141238759', '1234abcd'),
(3, 'sara', 'sara@abc.com', 'female', '2012-01-01', '7422 gaspe', 'ad', 'df', 'aad', 'English', '5141238710', '1234abcd'),
(4, 'khushbu', 'sdads@abc.com', 'male', '2012-01-01', '7820 ave parc', 'ad', 'qc', 'h3n2d4', 'English', '5141238710', 'dfgdfgdfgdfgdfgdfg'),
(5, 'aad', 'ass@abc.com', 'male', '2013-01-01', '7422 gaspe', 'ad', 'df', 'aad', 'English', '5141238710', 'fdfdffsdfsdf'),
(6, 'aad', 'abc@aby.com', 'male', '2012-01-01', '7422 gaspe', 'ad', 'df', 'h3n2d4', 'English', '5141238710', 'dsdsadasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest_db`
--

CREATE TABLE `servicerequest_db` (
  `id` int(7) UNSIGNED NOT NULL,
  `BloodTest` tinyint(1) NOT NULL DEFAULT '0',
  `GlucoseTest` tinyint(1) NOT NULL DEFAULT '0',
  `BloodPressure` tinyint(1) NOT NULL DEFAULT '0',
  `UrineTest` tinyint(1) NOT NULL DEFAULT '0',
  `Physio` tinyint(1) NOT NULL DEFAULT '0',
  `Injection` tinyint(1) NOT NULL DEFAULT '0',
  `preferredGender` varchar(6) NOT NULL,
  `preferredLanguage` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(7) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `TimePref1` varchar(5) DEFAULT NULL,
  `TimePref2` varchar(5) DEFAULT NULL,
  `TimePref3` varchar(5) DEFAULT NULL,
  `instruction` varchar(500) DEFAULT NULL,
  `PatientID` varchar(50) NOT NULL,
  `careGiverID` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest_db`
--

INSERT INTO `servicerequest_db` (`id`, `BloodTest`, `GlucoseTest`, `BloodPressure`, `UrineTest`, `Physio`, `Injection`, `preferredGender`, `preferredLanguage`, `address`, `city`, `state`, `postalCode`, `date`, `TimePref1`, `TimePref2`, `TimePref3`, `instruction`, `PatientID`, `careGiverID`, `status`) VALUES
(6, 1, 1, 1, 0, 1, 1, 'female', 'French', '7820 ave parc', 'montreal', 'quebec', 'h3n2d4', '2016-03-11', '16:00', '17:00', '19:30', 'hello', 'ali', '', 'unallocated'),
(7, 1, 1, 1, 0, 1, 0, 'female', 'French', '7422 gaspe', 'ad', 'df', 'h3n2d3', '2016-03-11', '13:15', '13:15', '14:30', 'sdfsdf', 'ali', '', 'unallocated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caregiver_availability_db`
--
ALTER TABLE `caregiver_availability_db`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `caregiver_db`
--
ALTER TABLE `caregiver_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caregiver_services_db`
--
ALTER TABLE `caregiver_services_db`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_db`
--
ALTER TABLE `patient_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicerequest_db`
--
ALTER TABLE `servicerequest_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caregiver_db`
--
ALTER TABLE `caregiver_db`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `patient_db`
--
ALTER TABLE `patient_db`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `servicerequest_db`
--
ALTER TABLE `servicerequest_db`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

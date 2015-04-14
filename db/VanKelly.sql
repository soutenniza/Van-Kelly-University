-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2015 at 02:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `VanKelly`
--

-- --------------------------------------------------------

--
-- Table structure for table `College`
--

CREATE TABLE IF NOT EXISTS `College` (
  `CName` varchar(50) NOT NULL,
  `COffice` varchar(50) NOT NULL,
  `CDean` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE IF NOT EXISTS `Course` (
  `C#` varchar(10) NOT NULL,
  `CName` varchar(20) NOT NULL,
  `CDesc` text NOT NULL,
  `Credit` int(2) NOT NULL,
  `Level` int(5) NOT NULL,
  `CDept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE IF NOT EXISTS `Department` (
  `DName` varchar(50) NOT NULL,
  `DCode` varchar(10) NOT NULL,
  `DPhone` int(20) NOT NULL,
  `DNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE IF NOT EXISTS `Faculty` (
  `SSN` int(9) NOT NULL,
  `Rank` varchar(20) NOT NULL,
  `FOffice` varchar(20) NOT NULL,
  `FPhone` int(20) NOT NULL,
  `Salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE IF NOT EXISTS `Person` (
  `SSN` int(9) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Sex` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Section`
--

CREATE TABLE IF NOT EXISTS `Section` (
  `Sec#` varchar(20) NOT NULL,
  `Semster` varchar(10) NOT NULL,
  `InstructorName` varchar(30) NOT NULL,
  `Year` year(4) NOT NULL,
  `SecCourse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `SNum` int(10) NOT NULL,
  `SSN` int(9) NOT NULL,
  `Class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `College`
--
ALTER TABLE `College`
 ADD PRIMARY KEY (`CName`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
 ADD PRIMARY KEY (`C#`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
 ADD PRIMARY KEY (`DName`,`DCode`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
 ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
 ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Section`
--
ALTER TABLE `Section`
 ADD PRIMARY KEY (`Sec#`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
 ADD PRIMARY KEY (`SNum`,`SSN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

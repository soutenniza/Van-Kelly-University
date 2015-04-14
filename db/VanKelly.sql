-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2015 at 11:06 PM
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
-- Table structure for table `Academic`
--

CREATE TABLE IF NOT EXISTS `Academic` (
  `SSN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Administrator`
--

CREATE TABLE IF NOT EXISTS `Administrator` (
  `SSN` int(10) NOT NULL,
  `ACode` varchar(50) NOT NULL,
  `AName` varchar(50) NOT NULL,
  `APhone` int(20) NOT NULL,
  `AOffice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CD`
--

CREATE TABLE IF NOT EXISTS `CD` (
  `CName` varchar(50) NOT NULL,
  `DName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Coach`
--

CREATE TABLE IF NOT EXISTS `Coach` (
  `SSN` int(20) NOT NULL,
  `NoS` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `Current_Section`
--

CREATE TABLE IF NOT EXISTS `Current_Section` (
  `Sec#` int(20) NOT NULL,
  `C#` int(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL
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
-- Table structure for table `Grade`
--

CREATE TABLE IF NOT EXISTS `Grade` (
  `SSN` int(10) NOT NULL,
  `Grade` varchar(4) NOT NULL,
  `Sec#` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Grant`
--

CREATE TABLE IF NOT EXISTS `Grant` (
  `No` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Agency` varchar(50) NOT NULL,
  `St_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Instructor_Researcher`
--

CREATE TABLE IF NOT EXISTS `Instructor_Researcher` (
  `SSN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Major`
--

CREATE TABLE IF NOT EXISTS `Major` (
  `SSN` int(10) NOT NULL,
  `DName` varchar(20) NOT NULL,
  `DCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Minor`
--

CREATE TABLE IF NOT EXISTS `Minor` (
  `SSN` int(10) NOT NULL,
  `DName` varchar(20) NOT NULL,
  `DCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Non-Academic`
--

CREATE TABLE IF NOT EXISTS `Non-Academic` (
  `SSN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Offered`
--

CREATE TABLE IF NOT EXISTS `Offered` (
  `Sec#` varchar(20) NOT NULL,
  `C#` varchar(20) NOT NULL
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
-- Table structure for table `Primary`
--

CREATE TABLE IF NOT EXISTS `Primary` (
  `Nos` int(20) NOT NULL,
  `SNum` int(20) NOT NULL,
  `SSN` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Registered`
--

CREATE TABLE IF NOT EXISTS `Registered` (
  `SSN` int(20) NOT NULL,
  `Sec#` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Secondary`
--

CREATE TABLE IF NOT EXISTS `Secondary` (
  `Nos` int(20) NOT NULL,
  `SNum` int(20) NOT NULL,
  `SSN` int(20) NOT NULL
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
-- Table structure for table `Sport`
--

CREATE TABLE IF NOT EXISTS `Sport` (
  `PIC` varchar(50) NOT NULL,
  `OffLoc` varchar(50) NOT NULL,
  `NoS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE IF NOT EXISTS `Staff` (
  `SSN` int(20) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `Teaches`
--

CREATE TABLE IF NOT EXISTS `Teaches` (
  `SSN` int(20) NOT NULL,
  `Sec#` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Transcript`
--

CREATE TABLE IF NOT EXISTS `Transcript` (
  `SSN` int(20) NOT NULL,
  `Sec#` varchar(20) NOT NULL,
  `SNum_Grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administrator`
--
ALTER TABLE `Administrator`
 ADD PRIMARY KEY (`ACode`,`AName`);

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
-- Indexes for table `Current_Section`
--
ALTER TABLE `Current_Section`
 ADD PRIMARY KEY (`Sec#`);

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
-- Indexes for table `Grant`
--
ALTER TABLE `Grant`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `Instructor_Researcher`
--
ALTER TABLE `Instructor_Researcher`
 ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Major`
--
ALTER TABLE `Major`
 ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Minor`
--
ALTER TABLE `Minor`
 ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Non-Academic`
--
ALTER TABLE `Non-Academic`
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
-- Indexes for table `Sport`
--
ALTER TABLE `Sport`
 ADD PRIMARY KEY (`NoS`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
 ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
 ADD PRIMARY KEY (`SNum`,`SSN`);

--
-- Indexes for table `Teaches`
--
ALTER TABLE `Teaches`
 ADD PRIMARY KEY (`SSN`,`Sec#`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

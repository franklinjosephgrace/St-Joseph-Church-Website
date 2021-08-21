-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 11:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptism`
--

CREATE TABLE `baptism` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bfname` varchar(255) NOT NULL,
  `bmname` varchar(255) NOT NULL,
  `bdob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bpname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baptism`
--

INSERT INTO `baptism` (`regno`, `name`, `dob`, `fname`, `mname`, `bfname`, `bmname`, `bdob`, `address`, `bpname`) VALUES
('', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `conformation`
--

CREATE TABLE `conformation` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bfname` varchar(255) NOT NULL,
  `bmname` varchar(255) NOT NULL,
  `bdob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bpname` varchar(255) NOT NULL,
  `hcdob` varchar(255) NOT NULL,
  `hcplace` varchar(255) NOT NULL,
  `cdob` varchar(255) NOT NULL,
  `cplace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `donation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holycommunion`
--

CREATE TABLE `holycommunion` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bfname` varchar(255) NOT NULL,
  `bmname` varchar(255) NOT NULL,
  `bdob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bpname` varchar(255) NOT NULL,
  `hcdob` varchar(255) NOT NULL,
  `hcplace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intension`
--

CREATE TABLE `intension` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `intension` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `regno` varchar(255) NOT NULL,
  `men` varchar(255) NOT NULL,
  `women` varchar(255) NOT NULL,
  `hisdob` varchar(255) NOT NULL,
  `hisfname` varchar(255) NOT NULL,
  `hismname` varchar(255) NOT NULL,
  `herdob` varchar(255) NOT NULL,
  `herfname` varchar(255) NOT NULL,
  `hermname` varchar(255) NOT NULL,
  `mdob` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `pom` varchar(255) NOT NULL,
  `mpname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

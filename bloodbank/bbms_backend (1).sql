-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 11:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'a12345');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `blood` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `fname`, `lname`, `address`, `contact`, `gender`, `blood`) VALUES
(20, 'q', 'q', 'q', 'q', 'Female', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_b`
--

CREATE TABLE `exchange_b` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `blood` varchar(20) DEFAULT NULL,
  `exblood` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchange_b`
--

INSERT INTO `exchange_b` (`id`, `fname`, `lname`, `address`, `contact`, `gender`, `blood`, `exblood`) VALUES
(53, 'Ravi', 'Saini', '98,Sitapura', '7678998765', 'Male', 'AB+', 'A+'),
(54, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619934179', 'Male', 'B-', 'AB+'),
(55, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619945563', 'Male', 'AB+', 'AB+'),
(56, 'Pulkit', 'Singh', 'Poornima', '8790987678', 'Male', 'B+', 'B+'),
(57, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619934179', 'Female', 'A+', 'B+'),
(58, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619934179', 'Female', 'A+', 'B+'),
(59, 'Golu', 'Sharma', '11,Shiv Vihar', '8619934179', 'Male', 'B-', 'O+'),
(60, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619945456', 'Male', 'B+', 'B-'),
(61, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619934179', 'Male', 'AB+', 'O+'),
(62, 'Raghav', 'Jha', '24, Gyan Kunj,  Pradhan Road, Sitapura', '8619945563', 'Male', 'AB+', 'A+'),
(63, 'q', 'q', 'q', 'q', 'Male', 'B+', 'O-'),
(64, 'q1', 'q1', 'q1', 'q1', 'Male', 'B+', 'AB+'),
(65, 'q', 'q', 'q', 'q', 'Female', 'B+', 'B+'),
(66, 'q3', 'q3', 'q3', 'q3', 'Male', 'O+', 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `out_stock_b`
--

CREATE TABLE `out_stock_b` (
  `id` int(11) NOT NULL,
  `blood` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_stock_b`
--

INSERT INTO `out_stock_b` (`id`, `blood`, `fname`, `lname`, `contact`) VALUES
(17, 'B+', 'Rahul ', 'Sharma', '8619934179'),
(18, 'A+', 'Nakul', 'Singh', '8000018936'),
(19, 'A+', 'Nipun', 'Tiwari', '8754654789'),
(20, NULL, NULL, NULL, NULL),
(21, 'B+', 'Gaurav', 'Soni', '7300209837'),
(22, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL),
(24, 'B+', 'q', 'q', 'q'),
(25, NULL, NULL, NULL, NULL),
(26, 'B+', 'q', 'q', 'q'),
(27, 'O+', 'Neha', 'Khatri', '4521548769');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_b`
--
ALTER TABLE `exchange_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stock_b`
--
ALTER TABLE `out_stock_b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exchange_b`
--
ALTER TABLE `exchange_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `out_stock_b`
--
ALTER TABLE `out_stock_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

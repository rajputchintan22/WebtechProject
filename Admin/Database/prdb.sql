-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 07:36 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`) VALUES
('chintan221', 'Chintan Rajput', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `sno` int(11) DEFAULT NULL,
  `sname` varchar(300) DEFAULT NULL,
  `folder` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`sno`, `sname`, `folder`) VALUES
(2, 'In The Castle of Udaipur', 'storyImages/4.jpeg'),
(3, 'North meets Different South', 'storyImages/7.jpeg'),
(4, 'Not just Serendipity', 'storyImages/9.jpeg'),
(5, 'Just Married', 'storyImages/1.jpeg'),
(6, 'Deja vu.Not so.', 'storyImages/16.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `storie_no`
--

CREATE TABLE `storie_no` (
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storie_no`
--

INSERT INTO `storie_no` (`sno`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

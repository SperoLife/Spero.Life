-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 08:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spero.life`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleID` int(10) NOT NULL,
  `articleName` varchar(100) NOT NULL,
  `writerName` varchar(50) NOT NULL,
  `emailID` varchar(50) NOT NULL,
  `likes` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleID`, `articleName`, `writerName`, `emailID`, `likes`) VALUES
(1, 'The Strangers-1', 'Shubham Edla', 'wearefaultu@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `articleID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `emailId` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`articleID`, `name`, `Date`, `emailId`, `comment`) VALUES
(1, 'fdfs', '2017-07-30 01:02:26', 'shashikant@hotmail.com', 'sdsd'),
(1, 'shashi', '2017-07-31 23:26:36', 'shash@ewe.c', 'this is awesome'),
(1, 'romit', '2017-07-31 23:28:14', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:35:38', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:41:14', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:41:47', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:42:38', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:44:18', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:45:22', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:45:42', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:46:36', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:46:51', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:54:06', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:54:35', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:57:19', 'romit_bhalla@spero.life', 'grgrg'),
(1, 'romit', '2017-07-31 23:58:07', 'romit_bhalla@spero.life', 'grgrg'),
(2, 'hi', '2017-08-01 00:21:21', 'shashikant@hotmail.com', 'sdsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

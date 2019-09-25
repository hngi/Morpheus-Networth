-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 10:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_morpheus`
--

-- --------------------------------------------------------

--
-- Table structure for table `morph`
--

CREATE TABLE `morph` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `morph`
--

INSERT INTO `morph` (`UserID`, `FullName`, `Email`, `Password`) VALUES
(1, 'David Michael', 'davidomini@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(2, 'David Michael', 'davidomini@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(3, 'David Michael', 'davidomini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'David Michael', 'davidomini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'David Michael', 'davidomini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'david michael', 'davidomini@gmail.com', 'ea3ed20b6b101a09085ef09c97da1597'),
(7, 'David Michael', 'davidomini@gmail.com', '6537e99af2c2223642df9f70a0b5afca'),
(8, 'david michael', 'davidomini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'david michael', 'davidomini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'david michael', 'davidomini@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'David Michael', 'davidomini@gmail.com', '6da6a6af96d5bb0169941a7431ad90f6'),
(13, 'David Michael', 'davidomini@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'David Michael', 'davidomini@gmail.com', 'cbfe77ebddc38d21b5fdf6710e54dc54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `morph`
--
ALTER TABLE `morph`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `morph`
--
ALTER TABLE `morph`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

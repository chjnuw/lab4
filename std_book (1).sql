-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2020 at 10:50 AM
-- Server version: 5.5.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surache1_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `BookID` int(11) NOT NULL,
  `Book` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`BookID`, `Book`) VALUES
(1, 'ดราก้อนบอล เล่ม 1'),
(2, 'ดราก้อนบอล เล่ม 2'),
(3, 'ล่าข้ามศตวรรษ เล่ม 1'),
(4, 'เทพมรณะ เล่ม 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std`
--

CREATE TABLE `tbl_std` (
  `Id` int(11) NOT NULL,
  `Sname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Slastname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_std`
--

INSERT INTO `tbl_std` (`Id`, `Sname`, `Slastname`, `Address`) VALUES
(1, 'A', 'AA', '1/1'),
(2, 'B', 'BB', '2/2'),
(3, 'ก', 'กก', '3/3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_book`
--

CREATE TABLE `tbl_std_book` (
  `Id` int(11) NOT NULL,
  `BookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_std_book`
--

INSERT INTO `tbl_std_book` (`Id`, `BookID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `tbl_std`
--
ALTER TABLE `tbl_std`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_std_book`
--
ALTER TABLE `tbl_std_book`
  ADD PRIMARY KEY (`Id`,`BookID`),
  ADD KEY `BookID` (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_std`
--
ALTER TABLE `tbl_std`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_std_book`
--
ALTER TABLE `tbl_std_book`
  ADD CONSTRAINT `tbl_std_book_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `tbl_book` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_std_book_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `tbl_std` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2019 at 03:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7486334_employe`
--

-- --------------------------------------------------------

--
-- Table structure for table `appOrder`
--

CREATE TABLE `appOrder` (
  `Oid` int(5) NOT NULL,
  `CID` int(10) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `RID` int(11) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appOrder`
--

INSERT INTO `appOrder` (`Oid`, `CID`, `type`, `RID`, `price`) VALUES
(6, 11, 'veg', 8, 124),
(7, 12, 'veg', 8, 124),
(8, 13, 'veg', 8, 124),
(9, 13, 'veg', 8, 124),
(10, 13, 'veg', 8, 124),
(11, 13, 'veg', 8, 124),
(12, 13, 'veg', 8, 124),
(13, 13, 'veg', 8, 124),
(14, 12, 'veg', 8, 124),
(15, 12, 'veg', 8, 124),
(16, 12, 'veg', 8, 124),
(17, 12, 'veg', 8, 124),
(18, 13, 'veg', 8, 124),
(19, 13, 'veg', 8, 124),
(20, 13, 'veg', 8, 124),
(21, 13, 'veg', 8, 124),
(22, 12, 'veg', 8, 124),
(23, 12, 'veg', 8, 124),
(24, 10, 'veg', 8, 124),
(25, 12, 'veg', 8, 111),
(26, 12, 'NON-VEG', 10, 399),
(27, 0, '', 0, 0),
(28, 0, 'veg', 0, 898),
(29, 0, 'veg', 0, 898),
(30, 0, 'NON-VEG', 0, 399),
(31, 0, 'NON-VEG', 0, 399),
(32, 12, 'NON-VEG', 10, 399),
(33, 10, 'veg', 11, 879);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `username`, `email`, `password`) VALUES
(9, 'anujeet', 'anujeet98@gmail.com', 'c3a19f40516264dd50542ee17363052e'),
(10, 'admin', 'anujeet98@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'anujeet', 'anujeet98@gmail.com', 'c3a19f40516264dd50542ee17363052e'),
(12, 'kartik', 'k.sonaghela@somaiya.edu', 'c8d39cdb56a46ad807969ee04c4e660b'),
(13, 'vedank', 'vedank98@gmail.com', '6910dfbaf368c0134064f0a10380b692');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `name`, `rname`, `type`, `price`) VALUES
(7, 'coffe', 'ccd', 'veg', 800),
(12, 'cake', 'ccd', 'veg', 111),
(14, 'pizza', 'dominos', 'veg', 456),
(15, 'SANDWICH', 'KFC', 'NON-VEG', 399),
(16, 'pizza', 'pizzahut', 'veg', 879),
(17, 'cake', 'pizzahut', 'veg', 898);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `RID` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `img_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`RID`, `name`, `rating`, `location`, `img_name`, `img_path`, `img_type`) VALUES
(9, 'dominos', 4, 'nerul', 'dominos.jpg', 'dbmsimage/', 'jpg'),
(10, 'KFC', 5, 'KALYAN', 'kfc.png', 'dbmsimage/', 'png'),
(11, 'pizzahut', NULL, 'mulund', 'pizza.jpg', 'dbmsimage/', 'jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appOrder`
--
ALTER TABLE `appOrder`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`RID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appOrder`
--
ALTER TABLE `appOrder`
  MODIFY `Oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `RID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

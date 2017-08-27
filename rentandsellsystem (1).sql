-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 05:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentandsellsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `name`) VALUES
('aashutoshrestha', 'am@N.321', 'Aashutosh Shrestha'),
('saagar', 'sagar321', 'Sagar Shrestha'),
('subreen', 'subreen123', 'Subreen Shrestha'),
('utsav', 'utsav123', 'Utsav Shrestha');

-- --------------------------------------------------------

--
-- Table structure for table `advpost`
--

CREATE TABLE `advpost` (
  `advID` int(11) NOT NULL,
  `advType` enum('forRent','forSale','','') NOT NULL,
  `advDetails` varchar(50) NOT NULL,
  `advlocationdetail` varchar(50) NOT NULL,
  `advlocationlong` varchar(50) NOT NULL,
  `advlocationlat` varchar(50) NOT NULL,
  `advprice` varchar(50) NOT NULL,
  `advcontact` varchar(50) NOT NULL,
  `advimg` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `advpost`
--

INSERT INTO `advpost` (`advID`, `advType`, `advDetails`, `advlocationdetail`, `advlocationlong`, `advlocationlat`, `advprice`, `advcontact`, `advimg`, `username`) VALUES
(1, 'forRent', 'Flat in Bhaktapur', 'surya binayak,bhaktapur', '24.2323', '12.212', '5465', '46546546', 'c:/img/bkt.png', 'aashutoshrestha'),
(2, 'forSale', 'House in patan', 'patan, mangalbazar, lalitpur', '45665', '65465', '65465', '65465', 'c:/img/ptn.png', 'aashutoshrestha'),
(3, 'forSale', 'House in lazimpat', 'lazimpat kathmandu', '4645', '56465', '6546', '6546', 'c:/img/ping.png', 'aashutoshrestha');

-- --------------------------------------------------------

--
-- Table structure for table `favouriteadpost`
--

CREATE TABLE `favouriteadpost` (
  `favouriteAdID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `advID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `favouriteadpost`
--

INSERT INTO `favouriteadpost` (`favouriteAdID`, `username`, `advID`) VALUES
(1, 'saagar', 1),
(2, 'saagar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `phone`, `fullname`) VALUES
('aashutoshrestha', '12345', 'theofficialaman@gmail.com', '9868105448', 'Aashutosh Shrestha'),
('saagar', '12345', 'saagar@saagar.com', '123123444', 'Saagar Shrestha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `advpost`
--
ALTER TABLE `advpost`
  ADD PRIMARY KEY (`advID`);

--
-- Indexes for table `favouriteadpost`
--
ALTER TABLE `favouriteadpost`
  ADD PRIMARY KEY (`favouriteAdID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advpost`
--
ALTER TABLE `advpost`
  MODIFY `advID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `favouriteadpost`
--
ALTER TABLE `favouriteadpost`
  MODIFY `favouriteAdID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

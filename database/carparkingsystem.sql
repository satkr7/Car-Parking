-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 19, 2020 at 07:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carparkingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(10) NOT NULL,
  `carowner` text NOT NULL,
  `userid` int(10) NOT NULL,
  `licencenum` text NOT NULL,
  `garagelocation` text NOT NULL,
  `lotnumber` int(20) NOT NULL,
  `cost` int(10) NOT NULL,
  `duration` int(20) NOT NULL,
  `fromtime` datetime NOT NULL,
  `payment` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `carowner`, `userid`, `licencenum`, `garagelocation`, `lotnumber`, `cost`, `duration`, `fromtime`, `payment`, `status`) VALUES
(8, 'Satyam', 11, '7474', 'Godrej Waterside', 6, 120, 60, '2020-06-18 11:33:49', 'Paid', 'Left'),
(9, 'Satyam', 11, '7404', 'Technopolis', 2, 360, 180, '2020-06-19 20:44:00', 'Paid', 'Left'),
(10, 'Satyam', 11, '1347', 'Technopolis', 2, 240, 120, '2020-06-19 17:00:00', 'Paid', 'Left'),
(11, 'Satyam', 11, '1347', 'Technopolis', 2, 360, 180, '2020-06-19 18:07:00', 'Paid', 'Left'),
(12, 'Satyam', 11, '7474', 'Godrej Waterside', 6, 200, 100, '2020-06-19 15:10:00', 'Paid', 'Left'),
(13, 'Satyam', 11, 'JH09C-7404', 'Godrej Waterside', 6, 240, 120, '2020-06-20 13:15:00', 'Paid', 'Left'),
(14, 'Satyam', 11, 'JH09C-1234', 'Technopolis', 2, 360, 180, '2020-06-19 18:25:00', 'Paid', 'Left'),
(15, 'Satyam', 11, '1234', 'Godrej Waterside', 6, 240, 120, '2020-06-20 12:45:00', 'Due', 'Park');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) NOT NULL,
  `lotname` text NOT NULL,
  `ownerid` int(10) NOT NULL,
  `lots` int(20) NOT NULL,
  `totallots` int(20) NOT NULL,
  `address` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`id`, `lotname`, `ownerid`, `lots`, `totallots`, `address`, `latitude`, `longitude`) VALUES
(4, 'Technopolis', 13, 2, 2, 'BP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091', '22.5803', '88.4378'),
(7, 'Godrej Waterside', 12, 5, 6, 'DP-5, DP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091', '22.5734', '88.4376'),
(11, 'Infinity Think Tank', 13, 7, 7, 'Tower II, A3, GP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091', '22.5693', '88.4321');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `aadhar` text NOT NULL,
  `useruid` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `address`, `aadhar`, `useruid`, `type`) VALUES
(2, 'Sambit', 'sambit@gmail.com', 'c2Ft', '1234567890', 'bhubneswar', '1234567', 10, 'customer'),
(3, 'Satyam', 'krsatyam1996@gmail.com', 'c2F0', '9608794980', 'bokaro', '1234567', 11, 'customer'),
(4, 'Samiul', 'samiul@gmail.com', 'c2Ft', '1234567890', 'kolkata', '1234567', 12, 'owner'),
(5, 'Gaurav', 'gaurav@gmail.com', 'Z2F1', '1234567890', 'kolkata', '1234567', 13, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

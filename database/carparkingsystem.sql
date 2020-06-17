-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 17, 2020 at 06:15 AM
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
-- Table structure for table `logtable`
--

CREATE TABLE `logtable` (
  `id` int(11) NOT NULL,
  `useruid` text NOT NULL,
  `lotname` text NOT NULL,
  `carno` text NOT NULL,
  `otp1` text NOT NULL,
  `fromtime` datetime NOT NULL,
  `otp2` text NOT NULL,
  `totime` datetime NOT NULL,
  `payment` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logtable`
--

INSERT INTO `logtable` (`id`, `useruid`, `lotname`, `carno`, `otp1`, `fromtime`, `otp2`, `totime`, `payment`, `status`) VALUES
(5, '11', 'P3', '7704', '830535', '2020-06-16 15:10:13', '716248', '2020-06-16 15:11:21', 'Paid', 'Left'),
(6, '11', 'P1', '7704', '404016', '2020-06-16 15:22:34', '204479', '2020-06-16 15:25:12', 'Paid', 'Left'),
(7, '11', 'P1', '7404', '428748', '2020-06-16 16:06:51', '129884', '2020-06-16 16:10:40', 'Paid', 'Left'),
(8, '10', 'P7', '1234', '803346', '2020-06-16 16:08:43', '177483', '2020-06-16 16:11:14', 'Paid', 'Left');

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE `lot` (
  `id` int(11) NOT NULL,
  `lotname` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lot`
--

INSERT INTO `lot` (`id`, `lotname`, `status`) VALUES
(1, 'P1', 'Free'),
(2, 'P2', 'Free'),
(3, 'P3', 'Free'),
(4, 'P4', 'Free'),
(5, 'P5', 'Free'),
(6, 'P6', 'Free'),
(7, 'P7', 'Free'),
(8, 'P8', 'Free'),
(9, 'P9', 'Free'),
(10, 'P10', 'Free');

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
(2, 'Sambit', 'sambit@gmail.com', 'c2Ft', '1234567890', 'address', '1234567', 10, 'customer'),
(3, 'Satyam Kumar', 'satyam@gmail.com', 'c2F0', '9608794980', 'bokaro', '1234567', 11, 'customer'),
(4, 'Samiul', 'samiul@gmail.com', 'c2Ft', '1234567890', 'kolkata', '1234567', 12, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logtable`
--
ALTER TABLE `logtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lot`
--
ALTER TABLE `lot`
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
-- AUTO_INCREMENT for table `logtable`
--
ALTER TABLE `logtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lot`
--
ALTER TABLE `lot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

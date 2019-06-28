-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 05:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpi_shuttle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL,
  `bus_id` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `booked_date` date NOT NULL,
  `start_point` varchar(100) NOT NULL,
  `end_point` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bus_id`, `name`, `booking_date`, `booked_date`, `start_point`, `end_point`) VALUES
(3, 'Red Bus', 'Kayode Olamide', '2003-08-18', '2018-08-04', 'School Gate', 'Auditorium'),
(4, 'Red Bus', 'Kayode Olamide', '2003-08-18', '2018-08-04', 'School Gate', 'Auditorium'),
(5, 'Red Bus', 'Tijani', '2003-08-18', '2018-08-06', 'Complex', 'orita'),
(6, 'Red Bus', 'Tijani', '2003-08-18', '2018-08-06', 'Complex', 'orita'),
(7, 'Red Bus', 'Tijani', '2003-08-18', '2018-08-06', 'Complex', 'orita'),
(8, 'Red Bus', 'Tijani', '2003-08-18', '2018-08-06', 'Complex', 'orita'),
(9, 'Red Bus', 'Tijani', '2003-08-18', '2018-08-06', 'Complex', 'orita'),
(10, 'Red Bus', 'Kayode Olamide', '2003-08-18', '2018-08-01', 'School Gate', 'Auditorium'),
(11, 'Red Bus', 'Tijani', '2003-08-18', '2018-08-10', 'Complex', 'orita'),
(12, 'Red Bus', 'Kayode Olamide', '2003-08-18', '2018-08-23', 'Complex', 'Auditorium');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `bus_id` int(100) NOT NULL,
  `bus_name` varchar(222) NOT NULL,
  `seat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_name`, `seat`) VALUES
(1, 'Aluta Bomb', '20'),
(2, 'Red Bus', '100');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stop`
--

CREATE TABLE IF NOT EXISTS `bus_stop` (
  `bus_stop_id` int(11) NOT NULL,
  `bus_stop_name` varchar(200) NOT NULL,
  `on_campus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stop`
--

INSERT INTO `bus_stop` (`bus_stop_id`, `bus_stop_name`, `on_campus`) VALUES
(1, 'orita', 0),
(2, 'Auditorium', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parks`
--

CREATE TABLE IF NOT EXISTS `parks` (
  `park_id` int(11) NOT NULL,
  `park_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parks`
--

INSERT INTO `parks` (`park_id`, `park_name`) VALUES
(1, 'School Gate'),
(2, 'Complex');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL,
  `route_name` varchar(255) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `trip_id` int(11) NOT NULL,
  `bus_id` varchar(110) NOT NULL,
  `departure_place` varchar(200) NOT NULL,
  `arrival_place` varchar(222) NOT NULL,
  `start_time` time NOT NULL,
  `return_time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `bus_id`, `departure_place`, `arrival_place`, `start_time`, `return_time`) VALUES
(1, 'red bus', 'complex', 'orita', '04:14:00', '10:29:00'),
(2, 'red bus', 'complex', 'orita', '04:14:00', '10:29:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `bus_stop`
--
ALTER TABLE `bus_stop`
  ADD PRIMARY KEY (`bus_stop_id`);

--
-- Indexes for table `parks`
--
ALTER TABLE `parks`
  ADD PRIMARY KEY (`park_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bus_stop`
--
ALTER TABLE `bus_stop`
  MODIFY `bus_stop_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parks`
--
ALTER TABLE `parks`
  MODIFY `park_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

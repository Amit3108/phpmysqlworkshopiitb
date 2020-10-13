-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 13, 2020 at 09:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` char(100) NOT NULL,
  `age` int(11) NOT NULL,
  `standard` int(11) NOT NULL,
  `division` char(2) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `PHP` int(11) DEFAULT NULL,
  `MySQL` int(11) DEFAULT NULL,
  `HTML` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `out of` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `status` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `age`, `standard`, `division`, `roll`, `pass`, `PHP`, `MySQL`, `HTML`, `total`, `out of`, `percent`, `status`) VALUES
('Praful Kumar', 19, 14, 'A', 'A304', 'A304', 88, 84, 76, 248, 300, 83, 'DISTINCTION'),
('Amit Naik', 19, 12, 'B', 'B320', 'B320', 84, 91, 81, 256, 300, 85, 'DISTINCTION'),
('Harsh Bhandari', 19, 14, 'E', 'E1419', 'E1419', 59, 53, 62, 174, 300, 58, 'PASS'),
('Rishabh Murali', 19, 14, 'M', 'M1401', 'M1401', 68, 74, 83, 225, 300, 75, 'DISTINCTION');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

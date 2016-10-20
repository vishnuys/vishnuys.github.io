-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 04:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `name` varchar(5) NOT NULL,
  `no.of.stu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`name`, `no.of.stu`) VALUES
('Civil', 200),
('CSE', 80),
('ECE', 80),
('EEE', 80),
('ISE', 70),
('Mech', 130);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `name` varchar(15) NOT NULL,
  `ctc` float NOT NULL,
  `handler` varchar(30) NOT NULL,
  `criteria` int(11) NOT NULL,
  `livebacks` int(11) NOT NULL,
  `deadbacks` int(11) NOT NULL,
  `lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `ctc`, `handler`, `criteria`, `livebacks`, `deadbacks`, `lastdate`) VALUES
('moondraft', 5.5, 'PC', 75, 0, 3, '2015-06-05'),
('oracle', 7, 'Dips', 70, 0, 0, '2015-06-10'),
('SAP', 7.5, 'PC', 70, 0, 0, '2015-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `moondraft`
--

CREATE TABLE IF NOT EXISTS `moondraft` (
  `name` varchar(30) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `branch` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moondraft`
--

INSERT INTO `moondraft` (`name`, `reg_no`, `branch`) VALUES
('Student', '1234', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `oracle`
--

CREATE TABLE IF NOT EXISTS `oracle` (
  `name` varchar(20) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `branch` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oracle`
--

INSERT INTO `oracle` (`name`, `reg_no`, `branch`) VALUES
('Student', '1234', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE IF NOT EXISTS `pc` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`name`, `reg_no`, `branch`, `username`) VALUES
('Sandy', '1111', 'EEE', 'sandy'),
('PC', '12345', 'ISE', 'pc'),
('Dips', '123456', 'ISE', 'dips');

-- --------------------------------------------------------

--
-- Table structure for table `placed`
--

CREATE TABLE IF NOT EXISTS `placed` (
  `reg_no` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placed`
--

INSERT INTO `placed` (`reg_no`, `name`) VALUES
('1234', 'oracle'),
('1111', 'SAP');

-- --------------------------------------------------------

--
-- Table structure for table `sap`
--

CREATE TABLE IF NOT EXISTS `sap` (
  `name` varchar(20) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `branch` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sap`
--

INSERT INTO `sap` (`name`, `reg_no`, `branch`) VALUES
('Student', '1234', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `branch` varchar(5) NOT NULL,
  `10th_percentage` int(2) NOT NULL,
  `12th_percentage` int(2) NOT NULL,
  `b.e_aggr` int(2) NOT NULL,
  `livebacks` int(1) NOT NULL,
  `deadbacks` int(1) NOT NULL,
  `caste` varchar(3) DEFAULT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `reg_no`, `dob`, `branch`, `10th_percentage`, `12th_percentage`, `b.e_aggr`, `livebacks`, `deadbacks`, `caste`, `username`) VALUES
('Sandy', '1111', '1994-08-27', 'ISE', 92, 89, 73, 0, 0, 'GM', 'sandy'),
('Student', '1234', '1994-06-06', 'EEE', 75, 78, 80, 0, 0, 'GM', 'stu'),
('PC', '12345', '1994-01-01', 'Mech', 85, 88, 75, 0, 0, 'GM', 'pc'),
('Dips', '123456', '1994-03-13', 'ISE', 93, 88, 71, 0, 0, 'GM', 'dips'),
('Avinash', '22222', '1994-10-27', 'ISE', 85, 92, 85, 0, 0, 'GM', 'avi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` int(11) NOT NULL,
`userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `usertype`, `userid`) VALUES
('YSV', 'ysv', 'ysv', 0, 1),
('PC', 'pc', 'pc', 1, 2),
('STU', 'stu', 'stu', 2, 3),
('dips', 'dips', 'dips', 1, 4),
('sandy', 'sandy', 'sandy', 1, 5),
('avi', 'avi', 'avi', 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`name`), ADD KEY `handler` (`handler`);

--
-- Indexes for table `oracle`
--
ALTER TABLE `oracle`
 ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
 ADD PRIMARY KEY (`reg_no`), ADD UNIQUE KEY `reg_no` (`reg_no`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `name` (`name`), ADD KEY `branch` (`branch`);

--
-- Indexes for table `placed`
--
ALTER TABLE `placed`
 ADD PRIMARY KEY (`reg_no`,`name`), ADD KEY `name` (`name`);

--
-- Indexes for table `sap`
--
ALTER TABLE `sap`
 ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`reg_no`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `reg_no` (`reg_no`), ADD KEY `branch` (`branch`), ADD KEY `branch_2` (`branch`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`handler`) REFERENCES `pc` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pc`
--
ALTER TABLE `pc`
ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pc_ibfk_3` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pc_ibfk_4` FOREIGN KEY (`branch`) REFERENCES `branch` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `placed`
--
ALTER TABLE `placed`
ADD CONSTRAINT `placed_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `placed_ibfk_2` FOREIGN KEY (`name`) REFERENCES `company` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`branch`) REFERENCES `branch` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

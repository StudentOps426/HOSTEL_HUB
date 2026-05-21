-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 20, 2026 at 05:53 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

-- 
-- Database: `hostel reserve`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `hostel`
-- 
-- Creation: May 07, 2026 at 11:46 AM
-- 

DROP TABLE IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
  `hostelid` int(11) NOT NULL auto_increment,
  `hostelname` text NOT NULL,
  `location` text NOT NULL,
  PRIMARY KEY  (`hostelid`)
) ENGINE=InnoDB  AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `hostel`
-- 

INSERT INTO `hostel` (`hostelid`, `hostelname`, `location`) VALUES 
(7, 'Hostel256', 'banda'),
(8, '5A Hostels', 'Kampala'),
(9, 'Havana Hostel', 'Banda'),
(10, 'D', 'DDD'),
(11, 's', 'd'),
(12, 'Ds', 'ww'),
(13, 'tes', 'gabad'),
(14, 'Batana Hostels', 'Banda'),
(15, 'dsfgertg', 'wtf24w');

-- --------------------------------------------------------

-- 
-- Table structure for table `owner`
-- 
-- Creation: May 07, 2026 at 11:52 AM
-- 

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `ownerid` int(11) NOT NULL auto_increment,
  `ownername` text NOT NULL,
  `ownercontact` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hostelid` int(11) NOT NULL,
  PRIMARY KEY  (`ownerid`),
  KEY `hostelid` (`hostelid`)
) ENGINE=InnoDB  AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `owner`
-- 

INSERT INTO `owner` (`ownerid`, `ownername`, `ownercontact`, `email`, `password`, `hostelid`) VALUES 
(7, 'blessed', 740290934, 'hostel2562@gmail.com', '1245', 7),
(8, 'Timothy Handy Kamba', 778105395, 'tim@gmail.com', '123', 8),
(9, 'xtreme', 2147483647, 'h@gmail.com', '123', 9),
(10, 'D', 4, 'C@gmail.com', '12', 10),
(11, 'f', 25252, 'v@gmail.com', '1234', 11),
(12, 'w3w3232', 7738373, 'im@gmail.com', '1234', 12),
(13, '32wjejl', 212344, 'yey@gmail.com', 'tet', 13),
(14, 'Handy Sir', 778043536, 'batana@gmail.com', '1234', 14),
(15, '5467regrwg', 0, 's@gmail.com', 'wqeq3124555e', 15);

-- --------------------------------------------------------

-- 
-- Table structure for table `reservation`
-- 
-- Creation: May 12, 2026 at 10:38 PM
-- 

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservationid` int(11) NOT NULL auto_increment,
  `roomid` int(11) default NULL,
  `studentname` varchar(100) default NULL,
  `studentcontact` varchar(50) default NULL,
  `reservationdate` timestamp NOT NULL,
  `status` varchar(20) default 'Pending',
  PRIMARY KEY  (`reservationid`),
  KEY `roomid` (`roomid`)
) ENGINE=InnoDB  AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `reservation`
-- 

INSERT INTO `reservation` (`reservationid`, `roomid`, `studentname`, `studentcontact`, `reservationdate`, `status`) VALUES 
(1, 4, 'Kamba Timothy ', '0778105395', '2026-05-13 11:56:29', 'Approved'),
(2, 6, 'Kamba Timothy ', '0778105395', '2026-05-13 15:42:52', 'Approved'),
(3, 5, 'Kamba Timothy', '123456', '2026-05-20 00:30:07', 'Approved'),
(4, 8, 'kakaj', '1234276373', '2026-05-20 11:01:53', 'Pending');

-- --------------------------------------------------------

-- 
-- Table structure for table `room`
-- 
-- Creation: May 07, 2026 at 11:50 AM
-- 

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `roomid` int(11) NOT NULL auto_increment,
  `hostelid` int(11) NOT NULL,
  `roomtype` text NOT NULL,
  `price` int(255) NOT NULL,
  `availabilitystatus` varchar(255) NOT NULL,
  `roomnumber` int(255) NOT NULL,
  PRIMARY KEY  (`roomid`),
  KEY `hostelid` (`hostelid`)
) ENGINE=InnoDB  AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `room`
-- 

INSERT INTO `room` (`roomid`, `hostelid`, `roomtype`, `price`, `availabilitystatus`, `roomnumber`) VALUES 
(4, 9, 'Single', 12000000, 'Occupied', 10),
(5, 9, 'Double', 112344000, 'Occupied', 1244),
(6, 9, 'Self Contained', 1200000, 'Occupied', 206),
(7, 11, 'Single', 12000000, 'Available', 0),
(8, 9, 'Double', 120000, 'Occupied', 456),
(9, 9, 'Self Contained', 12000000, 'Available', 3141),
(10, 9, 'Self Contained', 334455, 'Available', 145368);

-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 
-- Creation: May 07, 2026 at 11:48 AM
-- 

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stdid` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `contact` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`stdid`)
) ENGINE=InnoDB  AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `student`
-- 

INSERT INTO `student` (`stdid`, `name`, `contact`, `email`, `password`) VALUES 
(5, 'x', 123454776, 'g@gmail.com', '123'),
(6, 'WFD', 0, 'D', '12'),
(7, 'dsd', 12343, 'cdde', '1223'),
(8, '833', 12233, 'mdkd', '12323\r\n'),
(9, 'Simon', 77845363, 'simon@gmail.com', '1234');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `owner`
-- 
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`hostelid`) REFERENCES `hostel` (`hostelid`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `reservation`
-- 
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `room` (`roomid`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `room`
-- 
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hostelid`) REFERENCES `hostel` (`hostelid`);

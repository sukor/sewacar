-- phpMyAdmin SQL Dump
-- version 4.3.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2015 at 08:00 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `requestformv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_code` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_code`) VALUES
(1, 'Sofware develop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `positio_id` int(11) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `position_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positio_id`, `position_name`, `position_code`) VALUES
(1, 'Programmer', 'pro');

-- --------------------------------------------------------

--
-- Table structure for table `request_dic`
--

CREATE TABLE IF NOT EXISTS `request_dic` (
  `req_id` int(11) NOT NULL,
  `request_status` int(11) NOT NULL DEFAULT '1' COMMENT '1-pendding,2-complte,3-canceled',
  `date_log` varchar(20) DEFAULT NULL,
  `date_done` varchar(20) DEFAULT NULL,
  `req_type_id` int(11) NOT NULL,
  `detail_request` text NOT NULL,
  `assg_to` int(11) NOT NULL,
  `req_by` int(11) NOT NULL,
  `date_due` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `special_request` text,
  `other` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_dic`
--

INSERT INTO `request_dic` (`req_id`, `request_status`, `date_log`, `date_done`, `req_type_id`, `detail_request`, `assg_to`, `req_by`, `date_due`, `quantity`, `special_request`, `other`) VALUES
(2, 1, NULL, NULL, 5, 'test', 3, 2, '11-3-2015', 10, 'po', 'itik'),
(3, 1, NULL, NULL, 5, 'l', 2, 3, '5-3-2015', NULL, '', 'lembumu');

-- --------------------------------------------------------

--
-- Table structure for table `request_type`
--

CREATE TABLE IF NOT EXISTS `request_type` (
  `type_id` int(11) NOT NULL,
  `request_name` varchar(30) NOT NULL,
  `req_type` varchar(10) NOT NULL,
  `date_in` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_type`
--

INSERT INTO `request_type` (`type_id`, `request_name`, `req_type`, `date_in`) VALUES
(2, 'Web Portal', '1', '12345678'),
(3, ' Company Profile', '1', ''),
(4, 'Banner / Bunting', '1', ''),
(5, 'Brochure / Modul Cover', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `position_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `position_id`, `department_id`) VALUES
(2, 'sukor bin muhammad', 1, 1),
(3, 'abu bin ali', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positio_id`);

--
-- Indexes for table `request_dic`
--
ALTER TABLE `request_dic`
  ADD PRIMARY KEY (`req_id`), ADD KEY `req_type_id` (`req_type_id`), ADD KEY `assg_to` (`assg_to`), ADD KEY `assg_to_2` (`assg_to`), ADD KEY `assg_to_3` (`assg_to`), ADD KEY `req_by` (`req_by`);

--
-- Indexes for table `request_type`
--
ALTER TABLE `request_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`), ADD KEY `department_id` (`department_id`), ADD KEY `staff_position` (`position_id`), ADD KEY `position_id` (`position_id`), ADD KEY `department_id_2` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positio_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `request_dic`
--
ALTER TABLE `request_dic`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `request_type`
--
ALTER TABLE `request_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `request_dic`
--
ALTER TABLE `request_dic`
ADD CONSTRAINT `request_dic_ibfk_1` FOREIGN KEY (`req_type_id`) REFERENCES `request_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `request_dic_ibfk_2` FOREIGN KEY (`assg_to`) REFERENCES `staff` (`staff_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `request_dic_ibfk_3` FOREIGN KEY (`req_by`) REFERENCES `staff` (`staff_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`positio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

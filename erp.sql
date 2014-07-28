-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2014 at 11:03 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--
CREATE DATABASE IF NOT EXISTS `erp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `erp`;
-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `alumid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `hall` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `alumSince` int(11) NOT NULL,
  PRIMARY KEY (`alumid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumid`, `name`, `hall`, `dept`, `alumSince`) VALUES
(1, 'John Doe', 'CS', 'Rajendra Prasad Hall', 1965),
(2, 'Atanu Das', 'CS', 'Rajendra Prasad Hall', 1965),
(3, 'B K Tariyal', 'CS', '', 1965),
(4, 'Jyoti Parshad Banerjee', 'CS', '', 1965),
(5, 'K K Saxena', 'CS', 'Rajendra Prasad Hall', 1965),
(6, 'Kiran Sankar Sahu', 'CS', '', 1965),
(7, 'Mithilesh Kumar Sinha', 'CS', 'Azad Hall', 1965),
(8, 'Satish Bansal', 'CS', 'Nehru Hall', 1965),
(9, 'Tapash Kumar Pal', 'CS', 'Rajendra Prasad Hall', 1965),
(10, 'Amitava De', 'CS', 'Lala Lajpat Rai Hall', 1975),
(11, 'Ashok Kumar Ghosh', 'CS', 'Lala Lajpat Rai Hall', 1975),
(12, 'Niladri Nirjhar Biswas', 'CS', '', 1975),
(13, 'Partha Sen', 'ME', 'Rajendra Prasad Hall', 1975),
(14, 'Pramod Kumar Gupta', 'ME', 'Vidya Sagar Hall', 1975),
(15, 'Shyam Sunder Verma', 'ME', 'Vidya Sagar Hall', 1975),
(16, 'Sudip Sen', 'ME', 'Nehru Hall', 1975),
(17, 'Sushim Kumar Dasgupta', 'ME', 'Patel Hall', 1975),
(18, 'Tirthankar Banerjee', 'ME', 'Patel Hall', 1975),
(19, 'Swapan Guha', 'ME', 'Rajendra Prasad Hall', 1975),
(20, 'Vinod Rai Juthani', 'ME', '', 1975),
(21, 'S Anand', 'ME', 'Azad Hall', 1990),
(22, 'Ashis Kumar Roy', 'ME', 'Azad Hall', 1990),
(23, 'Dinesh Shastri', 'ME', 'Patel Hall', 1990),
(24, 'J Ramesh', 'ME', 'Radhakrishnan Hall', 1990),
(25, 'Jayanta Kumar Rudra', 'ME', '', 1990),
(26, 'Peshwa Acharya', 'ME', 'Rajendra Prasad Hall', 1990),
(27, 'Pradeep Kumar Bhalla', 'ME', 'Lala Lajpat Rai Hall', 1990),
(28, 'Rajeev Kumar Saraf', 'CH', 'Nehru Hall', 1990),
(29, 'Rakesh Chandubhai Pandya', 'CH', 'Rajendra Prasad Hall', 1990),
(30, 'Ramakrishna Manne', 'CH', 'Azad Hall', 1990),
(31, 'Ravindra Kumar Sinha', 'CH', 'Vidya Sagar Hall', 1990),
(32, 'Sanjay Prakash Gupta', 'CH', 'Rajendra Prasad Hall', 1990),
(33, 'Sanjay Dutt', 'CH', 'Lala Lajpat Rai Hall', 1990),
(34, 'Sanjiv Kumar Singh', 'CH', 'Rajendra Prasad Hall', 1990),
(35, 'Shambhu Sharan', 'CH', '', 1990),
(36, 'Sibasish Padhi', 'CH', 'Vidya Sagar Hall', 1990),
(37, 'Sujit Bhattacharyya', 'CH', 'Nehru Hall', 1990),
(38, 'Sumit Das', 'CH', 'Lala Lajpat Rai Hall', 1990),
(39, 'Sumit Chakraborty', 'CH', 'Radhakrishnan Hall', 1990),
(40, 'Suresh Adina', 'CH', 'Azad Hall', 1990),
(41, 'Tapash Kumar Gupta', 'CH', 'Patel Hall', 1975),
(42, 'Chiranjit Ghosh', 'CH', 'Patel Hall', 1975),
(43, 'L Ravindra Rao', 'CH', 'Patel Hall', 1975),
(44, 'Samir Biswas', 'CH', '', 1975),
(45, 'Kunal Bhattacharya', 'MF', 'Patel Hall', 1975),
(46, 'Ranjit Kumar Jana', 'MF', 'Patel Hall', 1975),
(47, 'Chandra Sekhar Bandyopadhyay', 'MF', 'Patel Hall', 1975);

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE IF NOT EXISTS `assign` (
  `alumid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`alumid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `calling`
--

CREATE TABLE IF NOT EXISTS `calling` (
  `alumid` int(11) NOT NULL,
  `followup` date NOT NULL DEFAULT '2014-07-20',
  `lastdate` date NOT NULL DEFAULT '2014-07-01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calling`
--

INSERT INTO `calling` (`alumid`, `followup`, `lastdate`) VALUES
(1, '2014-07-20', '2014-07-01'),
(2, '2014-07-20', '2014-07-01'),
(3, '2014-07-20', '2014-07-01'),
(4, '2014-07-20', '2014-07-01'),
(5, '2014-07-20', '2014-07-01'),
(6, '2014-07-20', '2014-07-01'),
(7, '2014-07-20', '2014-07-01'),
(8, '2014-07-20', '2014-07-01'),
(9, '2014-07-20', '2014-07-01'),
(10, '2014-07-20', '2014-07-01'),
(11, '2014-07-20', '2014-07-01'),
(12, '2014-07-20', '2014-07-01'),
(13, '2014-07-20', '2014-07-01'),
(14, '2014-07-20', '2014-07-01'),
(15, '2014-07-20', '2014-07-01'),
(16, '2014-07-20', '2014-07-01'),
(17, '2014-07-20', '2014-07-01'),
(18, '2014-07-20', '2014-07-01'),
(19, '2014-07-20', '2014-07-01'),
(20, '2014-07-20', '2014-07-01'),
(21, '2014-07-20', '2014-07-01'),
(22, '2014-07-20', '2014-07-01'),
(23, '2014-07-20', '2014-07-01'),
(24, '2014-07-20', '2014-07-01'),
(25, '2014-07-20', '2014-07-01'),
(26, '2014-07-20', '2014-07-01'),
(27, '2014-07-20', '2014-07-01'),
(28, '2014-07-20', '2014-07-01'),
(29, '2014-07-20', '2014-07-01'),
(30, '2014-07-20', '2014-07-01'),
(31, '2014-07-20', '2014-07-01'),
(32, '2014-07-20', '2014-07-01'),
(33, '2014-07-20', '2014-07-01'),
(34, '2014-07-20', '2014-07-01'),
(35, '2014-07-20', '2014-07-01'),
(36, '2014-07-20', '2014-07-01'),
(37, '2014-07-20', '2014-07-01'),
(38, '2014-07-20', '2014-07-01'),
(39, '2014-07-20', '2014-07-01'),
(40, '2014-07-20', '2014-07-01'),
(41, '2014-07-20', '2014-07-01'),
(42, '2014-07-20', '2014-07-01'),
(43, '2014-07-20', '2014-07-01'),
(44, '2014-07-20', '2014-07-01'),
(45, '2014-07-20', '2014-07-01'),
(46, '2014-07-20', '2014-07-01'),
(47, '2014-07-20', '2014-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `alumid` int(11) NOT NULL AUTO_INCREMENT,
  `search` int(11) NOT NULL,
  `called` int(11) NOT NULL,
  `register` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `touserid` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`alumid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='stores status about the alumni' AUTO_INCREMENT=27 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`alumid`, `search`, `called`, `register`, `pay`, `touserid`, `year`) VALUES
(2, 1, 1, 2, 1, 6, 1965),
(3, 2, 4, 1, 2, 6, 1975),
(4, 2, 1, 2, 2, 8, 1985),
(5, 1, 4, 1, 2, 9, 1975),
(6, 1, 2, 2, 1, 7, 1975),
(7, 3, 1, 2, 2, 7, 1985),
(8, 2, 2, 2, 1, 10, 1965),
(9, 1, 1, 2, 1, 10, 1965),
(10, 4, 3, 1, 2, 9, 1965),
(11, 2, 4, 2, 1, 9, 1975),
(12, 3, 4, 2, 2, 7, 1985),
(13, 4, 2, 2, 1, 8, 1975),
(14, 3, 4, 2, 2, 9, 1985),
(15, 2, 3, 2, 2, 8, 1965),
(16, 1, 2, 2, 2, 7, 1985),
(17, 2, 2, 1, 1, 6, 1985),
(18, 1, 3, 1, 2, 9, 1975),
(19, 2, 1, 1, 2, 8, 1965),
(20, 2, 2, 2, 1, 9, 1965),
(21, 2, 1, 2, 1, 6, 1985),
(22, 1, 2, 2, 1, 8, 1965),
(23, 2, 1, 1, 2, 9, 1975),
(24, 1, 3, 2, 2, 9, 1975),
(25, 4, 3, 2, 1, 7, 1965),
(26, 3, 1, 1, 2, 8, 1985);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(11) NOT NULL COMMENT 'can have 4 values',
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `privilege`, `email`) VALUES
(1, 'Admin', 'admin', '33ee7e1eb504b6619c1b445ca1442c21', 3, 'mishra.rahul1712@gmail.com'),
(2, 'Arpit', 'arpit', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'arpit366@gmail.com'),
(3, 'Rahul', 'root', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'namannishesh@gmail.com'),
(4, 'testuser', 'test', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'user@user.com'),
(5, 'GSEC 1', 'gsec', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'kannan.siddharth12@gmail.com'),
(6, 'MEMBER', 'mem6', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(7, 'MEMBER 7', 'mem7', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(8, 'MEMBER 8', 'mem8', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(9, 'MEMBER 9', 'mem9', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(10, 'MEMBER 10', 'mem10', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com');

-- --------------------------------------------------------

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`alumid`) REFERENCES `alumni` (`alumid`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`alumid`) REFERENCES `alumni` (`alumid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2014 at 04:59 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `alumid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `hall` varchar(100) NOT NULL,
  `alumSince` int(11) NOT NULL,
  PRIMARY KEY (`alumid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumid`, `name`, `hall`, `alumSince`) VALUES
(2, 'Atanu Das', 'Rajendra Prasad Hall', 1964),
(3, 'B K Tariyal', '', 1964),
(4, 'Jyoti Parshad Banerjee', '', 1964),
(5, 'K K Saxena', 'Rajendra Prasad Hall', 1964),
(6, 'Kiran Sankar Sahu', '', 1964),
(7, 'Mithilesh Kumar Sinha', 'Azad Hall', 1964),
(8, 'Satish Bansal', 'Nehru Hall', 1964),
(9, 'Tapash Kumar Pal', 'Rajendra Prasad Hall', 1964),
(10, 'Amitava De', 'Lala Lajpat Rai Hall', 1974),
(11, 'Ashok Kumar Ghosh', 'Lala Lajpat Rai Hall', 1974),
(12, 'Niladri Nirjhar Biswas', '', 1974),
(13, 'Partha Sen', 'Rajendra Prasad Hall', 1974),
(14, 'Pramod Kumar Gupta', 'Vidya Sagar Hall', 1974),
(15, 'Shyam Sunder Verma', 'Vidya Sagar Hall', 1974),
(16, 'Sudip Sen', 'Nehru Hall', 1974),
(17, 'Sushim Kumar Dasgupta', 'Patel Hall', 1974),
(18, 'Tirthankar Banerjee', 'Patel Hall', 1974),
(19, 'Swapan Guha', 'Rajendra Prasad Hall', 1974),
(20, 'Vinod Rai Juthani', '', 1974),
(21, 'S Anand', 'Azad Hall', 1989),
(22, 'Ashis Kumar Roy', 'Azad Hall', 1989),
(23, 'Dinesh Shastri', 'Patel Hall', 1989),
(24, 'J Ramesh', 'Radhakrishnan Hall', 1989),
(25, 'Jayanta Kumar Rudra', '', 1989),
(26, 'Peshwa Acharya', 'Rajendra Prasad Hall', 1989),
(27, 'Pradeep Kumar Bhalla', 'Lala Lajpat Rai Hall', 1989),
(28, 'Rajeev Kumar Saraf', 'Nehru Hall', 1989),
(29, 'Rakesh Chandubhai Pandya', 'Rajendra Prasad Hall', 1989),
(30, 'Ramakrishna Manne', 'Azad Hall', 1989),
(31, 'Ravindra Kumar Sinha', 'Vidya Sagar Hall', 1989),
(32, 'Sanjay Prakash Gupta', 'Rajendra Prasad Hall', 1989),
(33, 'Sanjay Dutt', 'Lala Lajpat Rai Hall', 1989),
(34, 'Sanjiv Kumar Singh', 'Rajendra Prasad Hall', 1989),
(35, 'Shambhu Sharan', '', 1989),
(36, 'Sibasish Padhi', 'Vidya Sagar Hall', 1989),
(37, 'Sujit Bhattacharyya', 'Nehru Hall', 1989),
(38, 'Sumit Das', 'Lala Lajpat Rai Hall', 1989),
(39, 'Sumit Chakraborty', 'Radhakrishnan Hall', 1989),
(40, 'Suresh Adina', 'Azad Hall', 1989),
(41, 'Tapash Kumar Gupta', 'Patel Hall', 1975),
(42, 'Chiranjit Ghosh', 'Patel Hall', 1976),
(43, 'L Ravindra Rao', 'Patel Hall', 1976),
(44, 'Samir Biswas', '', 1976),
(45, 'Kunal Bhattacharya', 'Patel Hall', 1977),
(46, 'Ranjit Kumar Jana', 'Patel Hall', 1977),
(47, 'Chandra Sekhar Bandyopadhyay', 'Patel Hall', 1978);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `privilege`, `email`) VALUES
(1, 'Admin', 'admin', '33ee7e1eb504b6619c1b445ca1442c21', 3, 'mishra.rahul1712@gmail.com'),
(2, 'Arpit', 'arpit', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'arpit366@gmail.com'),
(3, 'Rahul', 'root', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'namannishesh@gmail.com'),
(4, 'testuser', 'test', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'user@user.com'),
(5, 'GSEC 1', 'gsec', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'kannan.siddharth12@gmail.com'),
(6, 'MEMBER', 'studmem', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `toname` varchar(30) NOT NULL,
  `fromid` int(11) NOT NULL,
  `toid` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `table`, `description`, `toname`, `fromid`, `toid`, `year`) VALUES
(30, 'alumni', '1965 ready data', 'Arpit', 2, 8, 1964),
(31, 'alumni', 'PUT description here', 'Arpit', 9, 12, 0000);

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

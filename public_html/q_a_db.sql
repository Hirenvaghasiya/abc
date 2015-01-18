-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2014 at 03:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `q&a_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `ans_id` int(11) NOT NULL,
  `que_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ans_des` text,
  `file` longblob,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artical`
--

CREATE TABLE IF NOT EXISTS `artical` (
  `artical_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `description` text,
  `file` longblob,
  `comment` text,
  PRIMARY KEY (`artical_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `user_id` int(11) NOT NULL,
  `que_id` int(11) NOT NULL,
  `ans_id` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq_ans`
--

CREATE TABLE IF NOT EXISTS `faq_ans` (
  `faq_ans_id` int(11) NOT NULL,
  `faq_id` int(11) DEFAULT NULL,
  `ans` text,
  PRIMARY KEY (`faq_ans_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq_que`
--

CREATE TABLE IF NOT EXISTS `faq_que` (
  `faq_id` int(11) NOT NULL,
  `que_des` text,
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Message`) VALUES
('hiren', 'hiren', 'abc'),
('hiren', 'vaghasiya@gmail.com', 'abc                       '),
('hiren', 'vaghasiya@gmail.com', '            hiiii           ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('hiren@gmail.com', '123'),
('hirenvaghasiya@gmail.com', '123456789'),
('vaghasiya@gmail.com', 'hiren');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE IF NOT EXISTS `login_log` (
  `user_id` int(11) NOT NULL,
  `last_login_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `que_des` text NOT NULL,
  `que_status` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `file` varchar(150) NOT NULL,
  `lastmodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`que_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `sub_id`, `que_des`, `que_status`, `date`, `file`, `lastmodified`) VALUES
(41, 1, 'asp net', '0', '2014-03-22 06:20:22', '../7/que_files', '2014-03-23 03:40:37'),
(40, 2, 'how to insert data in mysql using php?', '0', '2014-03-22 06:07:27', '../7/que_files', '2014-03-23 03:40:37'),
(39, 2, 'how to insert data in mysql using php?', '0', '2014-03-22 05:44:10', '../7/que_files', '2014-03-23 03:40:37'),
(38, 2, 'how to insert data in mysql using php?', '0', '2014-03-22 06:32:06', '../7/que_files', '2014-03-23 03:40:37'),
(37, 2, 'how to insert data in mysql using php?', '0', '2014-03-22 00:09:13', '../7/que_files', '2014-03-23 03:40:37'),
(36, 2, 'how to insert data in mysql using php?', '1', '2014-03-21 11:44:00', '../7/que_files', '2014-03-23 03:49:22'),
(35, 1, 'how to insert data in mysql using php?', '0', '2014-03-21 11:28:00', '../7/que_files.', '2014-03-23 03:40:37'),
(42, 2, 'date and time function in php?', '1', '2014-03-23 08:48:36', '../7/que_files', '2014-03-23 15:20:01'),
(43, 2, 'how to   set   picture in photoshop', '0', '2014-03-26 08:05:23', '../7/que_files', '0000-00-00 00:00:00'),
(44, 3, 'how to set picture in photoshop', '0', '2014-03-26 08:17:23', '../7/que_files', '0000-00-00 00:00:00'),
(45, 1, 'how to insert data inn sql server 2008 datatable?', '0', '2014-03-28 10:16:22', '../7/que_files', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`) VALUES
(1, 'ASP.NET'),
(2, 'PHP'),
(3, 'C'),
(4, 'C++'),
(5, 'JAVA'),
(6, 'JSF'),
(7, 'RUBY'),
(8, 'PERL'),
(9, 'ANDROID'),
(10, 'UNIX'),
(11, 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `fname` varchar(70) DEFAULT NULL,
  `lname` varchar(70) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile_no` int(10) DEFAULT NULL,
  `profile_pic` longblob,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `email`, `fname`, `lname`, `date_of_birth`, `mobile_no`, `profile_pic`, `reg_date`) VALUES
(1, 'hiren@gmail.com', 'Vaghasiya', 'hiren', '1992-03-03', 2147483647, 0x6e, '0000-00-00 00:00:00'),
(6, 'hirenvaghasiya@gmail.com', 'Vaghasiya', 'hiren', '2004-05-16', 2147483647, 0x4e, '0000-00-00 00:00:00'),
(7, 'vaghasiya@gmail.com', 'hiren', 'vaghasiya', '2004-08-17', 1278207, 0x4e, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2015 at 12:53 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `class_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(33) NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `student_id`) VALUES
(1, '8A', 1),
(2, '8B', 2),
(3, '8C', 3),
(4, '9A', 4),
(5, '9B', 5),
(6, '9C', 6),
(7, '10A', 7),
(8, '8A', 8),
(9, '8B', 9),
(10, '8C', 10),
(11, '9A', 11),
(12, '9B', 12),
(13, '9C', 13),
(14, '9C', 14),
(15, '8A', 15);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_fname` varchar(20) NOT NULL,
  `student_lname` varchar(25) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_fname`, `student_lname`) VALUES
(1, 'John', 'Smith'),
(2, 'Mark', 'Dev'),
(3, 'Will', 'Jobs'),
(4, 'Line', 'Price'),
(5, 'Vashya', 'Popov'),
(6, 'Jim', 'Black'),
(7, 'Devid', 'Martinov'),
(8, 'Big', 'Ned'),
(9, 'Tiny', 'Tim'),
(10, 'Sun', 'Mike'),
(11, 'Dig', 'Math'),
(12, 'Vitya', 'Chexov'),
(13, 'Path', 'Will'),
(14, 'Devid', 'Smith'),
(15, 'John', 'Price');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(33) NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `student_id`) VALUES
(1, 'mathematics', 13),
(2, 'physics', 12),
(3, 'chemistry', 11),
(4, 'geography', 10),
(5, 'history', 9),
(6, 'mathematics', 8),
(7, 'physics', 6),
(8, 'chemistry', 5),
(9, 'geography', 4),
(10, 'history', 3),
(11, 'mathematics', 2),
(12, 'physics', 1),
(13, 'geography', 7),
(14, 'history', 1),
(15, 'geography', 2),
(16, 'physics', 5),
(17, 'mathematics', 7),
(18, 'history', 8),
(19, 'physics', 11),
(20, 'geography', 13),
(21, 'physics', 3),
(22, 'physics', 13),
(23, 'chemistry', 3),
(24, 'geography', 14),
(25, 'mathematics', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

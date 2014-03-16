-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2014 at 01:12 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `degame`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(6) NOT NULL,
  `name` text NOT NULL,
  `deprecated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `deprecated`) VALUES
(1, 'MTH201', 'Calculus I', 0),
(2, 'CSC126', 'Game Design & Development', 0);

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(6) NOT NULL,
  `assignment` text NOT NULL,
  `description` text NOT NULL,
  `due` date NOT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `course`, `assignment`, `description`, `due`, `value`, `score`, `completed`) VALUES
(1, 'MTH201', 'Homework 1: Review Packet', '', '2014-01-27', 10, 0, 0),
(2, 'MTH201', 'Homework 2: 1.2, 1.3, 1.4', '<ul>\r\n<li>1.1: 6, 9, 10 (Optional)</li>\r\n<li>1.2: 3, 4, 6, 13, 14, 18, 19, 21-23, 25, 27, 28, 29, 31, 33-47 odd, 52, 62, 65-71, 75, 77</li>\r\n<li>1.3: 3, 4, 13, 17, 19-22, 26, 33-36, 40, 44, 47-61 odd, 63, 64, 70, 71, 73, 74, 75-90n3, 94, 95, 97, 100, 102, 106, 109, 111, 115-121, 124</li>\r\n<li>1.4: 2, 4, 5, 7, 11-13, 16, 17, 22, 25-33 odd, 39-60 n3, 61-67 odd, 72, 74, 76, 78, 81, 85-87, 95, 98-102, 103, 106, 111, 112, 114, 118, 119, 122</li>\r\n<li>1.5: 1-11 odd, 15-27 n3, 29, 31, 32, 33-51 n3, 54, 55, 60, 61, 63, 64, 65-71 odd, 73 (Optional)</li>\r\n<li>Review Problems: 1, 3-5, 7, 9, 12-24 n3, 30, 32, 33, 35, 39-54 n3, 62, 64, 66, 70, 72, 75-81 n3, 84 (Optional)</li>\r\n<li>Problem Solving: 1, 5, 6, 9, 14 (Optional)</li></ul>', '2014-02-03', 10, 0, 0),
(3, 'MTH201', 'Worksheet 1: Limits', '', '2014-02-05', 15, 0, 0),
(4, 'MTH201', 'Quiz 1: Limits', '', '2014-02-05', 25, 0, 0),
(5, 'MTH201', '<b>EXAM: Chapter 1</b>', '', '2014-02-10', 100, 0, 0),
(6, 'MTH201', 'Homework 3: 2.1-2.2', '<ul>\r\n<li>2.1: 1-25 odd, 35, 39-47, 49-55 odd, 58, 63, 65-67, 70, 75-91 odd, 93-96</li>\r\n<li>2.2: 1-65 odd, 66, 68, 69, 78, 79, 81, 87-93, 97, 99, 101, 103, 105, 111, 112, 115, 117, 118</li></ul>', '2014-02-17', 10, 0, 0),
(7, 'MTH201', 'Homework 4: 2.3, 2.4', '<ul>\r\n<li>2.3: 1-53 odd, 59, 60, 65, 67, 69, 71, 73, 77-87 odd, 91-105 odd, 107-111, 115, 119, 123, 125, 127, 129-134</li>\r\n<li>2.4: 1-33 odd, 41-93 odd, 95-100, 102, 103, 107, 113, 115, 116, 120, 122, 125-128</li></ul>', '2014-02-24', 10, 0, 0),
(8, 'MTH201', 'Worksheet 2: Derivatives', '', '2014-02-26', 15, 0, 0),
(9, 'MTH201', 'Quiz 2: Derivatives', '', '2014-02-26', 25, 0, 0),
(10, 'MTH201', '<b>EXAM: Chapter 2</b>', '', '2014-03-03', 100, 0, 0),
(11, 'MTH201', 'Homework 5: 2.6, 3.1', '<ul>\r\n<li>2.6: 1-9 odd, 10, 11-29 odd, 39, 40</li>\r\n<li>3.1: 3-39 n3, 41, 42, 52-60, 63-68</li></ul>', '2014-03-10', 10, 0, 0),
(12, 'MTH201', 'Homework 6: 3.2 - 3.6', '<ul>\r\n<li>3.2: 3, 5, 8, 9-21 n3, 27, 29-33, 39-45 n3, 49, 51, 53-56, 58, 60, 62, 63-71 odd, 73-77, 79</li>\r\n<li>3.3: 3-39 n3, 41, 43, 47, 55, 57-62, 64-68 even, 69-71, 78, 81-87 odd, 91-97, 99</li>\r\n<li>3.4: 1-4, 6-42 n3, 49-53, 57, 61, 63, 65, 71, 74, 75-79</li>\r\n<li>3.5: 1-6, 13, 15-39 n3, 43, 45, 49, 53-58, 60-72 n3, 86, 88, 91, 95, 99, 103-104</li>\r\n<li>3.6: 1-4, 6-36, n3, 49, 37, 38, 52, 55, 58, 59, 62, 65</li></ul>', '2014-03-17', 10, 0, 0),
(13, 'MTH201', 'Worksheet 3: Application of Derivatives', '', '2014-03-17', 15, 0, 0),
(14, 'MTH201', 'Quiz 3: Applications of Derivatives', '', '2014-03-17', 25, 0, 0),
(15, 'MTH201', '<b>EXAM: Chapter 3 (3.1 - 3.6)</b>', '', '2014-03-19', 100, 0, 0),
(16, 'MTH201', 'Homework 7: 3.7, 4.1', '<ul>\r\n<li>3.7: 2, 3-18 n3, 19, 20, 22, 23, 25, 33, 34, 35, 41, 49</li>\r\n<li>4.1: 1-41 odd, 50, 51, 53, 54, 56, 69-76</li></ul>', '2014-03-31', 10, 0, 0),
(17, 'MTH201', 'Project 1: Newton''s Method and Differentials', '', '2014-04-07', 10, 0, 0),
(18, 'MTH201', 'Homework 8: 4.2 - 4.4', '<ul>\r\n<li>4.2:\r\n<ul><li>Summation: 1-23 odd, 37-41 odd, 73, 76</li>\r\n<li>Upper and Lower Sums: 31, 33, 35, 43, 44, 45-55 odd, 61, 65, 66, 68</li></ul>\r\n<li>4.3: 1, 3-30 n3, 33-49 odd, 50, 53, 55, 57, 58, 63-68, 71</li>\r\n<li>4.4: 1-57 odd, 59, 62, 66, 67, 71-75 odd, 78, 81, 84, 87-91 odd, 101, 105</li></ul>', '2014-04-14', 10, 0, 0),
(19, 'MTH201', 'Homework 9: 4.5', '<ul>\r\n<li>4.5: 1-99 odd, 100</li></ul>', '2014-04-21', 10, 0, 0),
(20, 'MTH201', 'Worksheet 4: Integration', '', '2014-04-21', 15, 0, 0),
(21, 'MTH201', '<b>EXAM: Chapter 4 (3.8 - 4.6)</b>', '', '2014-04-23', 100, 0, 0),
(22, 'MTH201', 'Project 2: Numerical Integration', '', '2014-04-28', 10, 0, 0),
(23, 'MTH201', 'Homework 10: 7.1', '<ul>\r\n<li>7.1: 1-6, 7, 9, 13, 15, 18, 19, 20, 21-27 odd, 31, 37, 38, 43, 51, 55, 57, 61, 65, 69, 71, 73, 79, 80, 82, 83, 85</li>', '2014-04-28', 10, 0, 0),
(24, 'MTH201', 'Worksheet 5: Applications of Integration', '', '2014-04-30', 15, 0, 0),
(25, 'MTH201', 'Homework 11: 7.2 - 7.4', '<ul>\r\n<li>7.2: 1-9 odd, 12, 15, 21, 24, 30, 31, 33, 41-47 odd, 49-52, 59, 60, 62, 69, 71, 72</li>\r\n<li>7.3: 3, 6, 9, 14, 17, 20, 23, 24, 27, 29, 32, 39, 43, 45, 47, 48, 51, 53</li>\r\n<li>7.4: 1, 3, 8, 9, 15, 35, 44, 53, 56, 63</li></ul>', '2014-05-05', 10, 0, 0),
(26, 'MTH201', '<b>EXAM: Chapter 7</b>', '', '2014-05-05', 100, 0, 0),
(27, 'MTH201', 'Project 3: Further Applications of Integration', '', '2014-05-07', 30, 0, 0),
(28, 'MTH201', '<b>FINAL EXAM: 10:30 - 12:30 in E204</b>', '', '2014-05-12', 200, 0, 0),
(29, 'CSC126', 'Discussion Board Post', '<ul>\r\n<li>Likes</li>\r\n<li>Disklikes</li>\r\n<li>Reply and Participate</li>\r\n</ul>', '2014-01-28', 0, 0, 1);

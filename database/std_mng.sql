-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 03:22 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_mng`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`id`, `name`, `email`, `phno`, `password`) VALUES
(9, 'Tanvir Hossain', 'hossain@gmail.com', '67354657634', '1111'),
(10, 'Motaleb Hossain', 'motaleb@gmail.com', '65348768764238', '2222'),
(12, 'Shamsul Kaonain', 'kaonain@gmail.com', '235765432', '3333'),
(13, 'Rakib Hasan', 'r@r.r', '123', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aboutid` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aboutid`, `content`) VALUES
(1, 'International Institute of Emerging Sciences is one of the leading universities in the world. We always maintain a quality of our education. Moreover, our main goal is to provide best facilities to our students. We alwasy try to make our students as a golbal citizen.Therefore, according to students demand we have different subjects to study on. After completing the graduation we help our students to secure a high class job in different companies.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `email`, `password`) VALUES
(1, 'Seaum', 'seaum@', '1111'),
(4, 'Mohibul', 'bull@', '2222'),
(5, 'Musta', 'motalebu@', '3333'),
(7, 'Sabuj', 'sabuj@', '5555'),
(23, 'Waqqas', 'wqs@', '9999');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `coId` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emai` varchar(100) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`coId`, `name`, `emai`, `subject`) VALUES
(3, 'samin', 'asdf@a.a', ' asdffads vgyfg gufgj fghfh hfgyhfg hfghdf hfgyhft hftgyftgyc fhgcxfh');

-- --------------------------------------------------------

--
-- Table structure for table `contact_reply`
--

CREATE TABLE `contact_reply` (
  `rplyid` int(11) NOT NULL,
  `coid` int(11) NOT NULL,
  `r_msg` varchar(250) NOT NULL,
  `rply_date` date NOT NULL,
  `rply_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `dept_loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_loc`) VALUES
(20001, 'EEE', 'Building 5, 5th floor'),
(30001, 'CSE', 'Building 5, 4th Floor'),
(40001, 'ESS', 'Building 4, 8th floor'),
(50001, 'MNS', 'Building 2, 15th floor');

-- --------------------------------------------------------

--
-- Table structure for table `gradedetails`
--

CREATE TABLE `gradedetails` (
  `rt_id` int(10) NOT NULL,
  `gpa` float(10,2) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradedetails`
--

INSERT INTO `gradedetails` (`rt_id`, `gpa`, `grade`, `id`) VALUES
(1, 3.70, 'A-', 12),
(2, 3.30, 'B+', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `curtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `topic`, `content`, `curtime`) VALUES
(2, 'Important Announcement Regarding Usis Server Cluster Shutdown', 'Please be notified that prior to our Pre-advising session starting from Friday, 16th March, 2018, there is need for server maintenance of the USIS cluster for the purpose of optimization. This shut down will start from Midnight 12:01 am, Thursday, 15th. March, 2018 till 6:00 am Thursday, March 15, 2018. After 6:00 am Thursday the cluster will function as normal. Again on Friday, 16, Midnight 12:01 am the cluster will be shut down and continue till Friday 6:00 am. After this the USIS shall be ready for the pre-advising session and operate as normal.', '2018-03-23 05:39:36'),
(3, 'Final Examinations seat plan, Spring 2018', 'Final exam will be help between 8th April to 21st April, 2018. Your cooperation is highly appreciated.', '2018-03-23 05:39:36'),
(4, 'Final Examinations seat plan, Spring 2018', 'Final exam will be help between 8th April to 21st April, 2018. Your cooperation is highly appreciated.', '2018-03-23 05:39:36'),
(10, 'Semester Ends', 'NOTE: Semester ends on 30th of April.', '2018-03-23 09:11:30'),
(11, 'Farewell to the Brilliant mind', 'SM University mourns the death of Stephen Hawking.', '2018-03-23 09:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `faname` varchar(50) DEFAULT NULL,
  `faocu` varchar(15) NOT NULL,
  `moname` varchar(50) DEFAULT NULL,
  `moocu` varchar(15) NOT NULL,
  `addr` varchar(80) NOT NULL,
  `birth` date DEFAULT NULL,
  `gender` varchar(5) NOT NULL,
  `sscName` varchar(50) DEFAULT NULL,
  `sscGpa` int(1) DEFAULT NULL,
  `hscName` varchar(50) DEFAULT NULL,
  `hscGpa` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `fname`, `lname`, `email`, `faname`, `faocu`, `moname`, `moocu`, `addr`, `birth`, `gender`, `sscName`, `sscGpa`, `hscName`, `hscGpa`) VALUES
(9, 'Tanvir', 'Hossain', 'hossain@gmail.com', 'Ahmed Hossain', 'Teacher', 'Jorina Begum', 'Housewife', 'Mohammadpur', '1997-10-05', 'male', 'Saint Joseph School', 5, 'Notre Dame College', 5),
(10, 'Motaleb', 'Hossain', 'motaleb@gmail.com', 'Mohammad Hossain', 'Architect', 'Morjina Begum', 'Housewife', '1997-02-19', '1997-02-19', 'Male', 'Rajuk', 5, 'Rajuk', 5),
(12, 'Shamsul', 'Kaonain', 'kaonain@gmail.com', 'Kabir Hossain', 'Teacher', 'Korima Begum', 'Housewife', '1996-10-05', '1996-10-05', 'male', 'Dhanmondi Govt. Boys High School', 5, 'Notre Dame College', 5),
(13, 'Rakib', 'Hasan', 'r@r.r', 'Sakib Hasan', 'Teacher', 'Rejia Khatun', 'Housewife', '12 13 Dhaka', '1995-11-23', 'male', 'School', 5, 'College', 5);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `rt_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`rt_id`, `std_id`, `sub`, `day`, `time`) VALUES
(1, 12, 'Electronics & Commun', 'sun', '9am'),
(2, 12, 'Computer Sci & Engin', 'mon', '11am');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(7) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_credit` int(4) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sub_credit`, `dept_id`) VALUES
(20012, 'Electronics & Communication', 133, 20001),
(30011, 'Computer Sci & Engineering', 136, 30001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`aboutid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`coId`);

--
-- Indexes for table `contact_reply`
--
ALTER TABLE `contact_reply`
  ADD PRIMARY KEY (`rplyid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`rt_id`),
  ADD UNIQUE KEY `time` (`time`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a`
--
ALTER TABLE `a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `aboutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `coId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_reply`
--
ALTER TABLE `contact_reply`
  MODIFY `rplyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `dept_id` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

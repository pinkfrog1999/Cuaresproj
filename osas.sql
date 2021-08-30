-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2020 at 11:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `privilege` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `privilege`) VALUES
(1, 'Juver Colas', 'juver', '12345', 0),
(3, 'Maria Emelee Bascug', 'emelee', '12345', 1),
(4, 'SouthEastMob', 'pataas', 'qwerty', 4);

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

DROP TABLE IF EXISTS `clearance`;
CREATE TABLE IF NOT EXISTS `clearance` (
  `student_id` text NOT NULL,
  `clinic` text NOT NULL,
  `guidance` text NOT NULL,
  `ssc` text NOT NULL,
  `osas` text NOT NULL,
  `librarian` text NOT NULL,
  `cashier` text NOT NULL,
  `registrar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`student_id`, `clinic`, `guidance`, `ssc`, `osas`, `librarian`, `cashier`, `registrar`) VALUES
('1310140-1', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
('1', '', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
('310143241', '', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
('1234567-8', '', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_personal_data`
--

DROP TABLE IF EXISTS `clinic_personal_data`;
CREATE TABLE IF NOT EXISTS `clinic_personal_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text NOT NULL,
  `year` int(4) NOT NULL,
  `section` text NOT NULL,
  `date` date NOT NULL,
  `student_id` text NOT NULL,
  `first` text NOT NULL,
  `middle` text NOT NULL,
  `last` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `dateofbirth` date NOT NULL,
  `birthplace` text NOT NULL,
  `address` text NOT NULL,
  `boarding` text NOT NULL,
  `guardian1` text NOT NULL,
  `contact1` text NOT NULL,
  `guardian2` text NOT NULL,
  `contact2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_personal_data`
--

INSERT INTO `clinic_personal_data` (`id`, `course`, `year`, `section`, `date`, `student_id`, `first`, `middle`, `last`, `age`, `gender`, `dateofbirth`, `birthplace`, `address`, `boarding`, `guardian1`, `contact1`, `guardian2`, `contact2`) VALUES
(1, 'BAT', 4, 'A', '2019-09-12', '1310140-1', 'Juver', 'Gorduiz', 'Colas', 22, 'Male', '2019-09-12', 'Sogod', 'sto. nino', 'n/a', 'weqweqw', '123', 'dasdwq', '123'),
(2, 'BAT', 1, 'A', '2019-09-12', '1', '1', '1', '1', 1, 'Male', '2019-09-03', '1', '1', '1', '1', '1', '1', '1'),
(3, 'BSA', 2, 'B', '2019-09-12', '2', '2', '2', '2', 2, 'Male', '2019-09-10', '2', '2', '2', '2', '2', '2', '2'),
(4, 'BSFI', 3, 'A', '2019-09-12', '3', '3', '3', '3', 3, 'Male', '2019-09-10', '3', '3', '3', '33', '3', '3', '3'),
(5, 'BSFI', 4, 'A', '2019-09-12', '5', '5', '5', '5', 5, 'Female', '2019-09-25', '5', '5', '5', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `complete` text NOT NULL,
  `alternative` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `complete`, `alternative`) VALUES
(1, '01', 'BAT', 'Bachelor in Agricultural Technology', 'B in Agricultural Technology'),
(2, '02', 'BSA', 'Bachelor of Science in Agriculture', 'BS in Agriculture'),
(3, '03', 'BSFI', 'Bachelor of Science in Fisheries', 'BS in Fisheries'),
(5, '04', 'BSIT', 'Bachelor of Science in Information Technology', 'BS in Information Technology'),
(6, '05', 'BSMB', 'Bachelor of Science in Marine Biology', 'BS in Marine Biology'),
(8, '06', 'BSPN', 'Bachelor of Science in Practical Nursing', 'BS in Practical Nursing');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `feedback` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `feedback`, `date`, `time`) VALUES
(1, '', 'Great Job!', '0000-00-00', '12:24:19'),
(2, '', 'Keep it up!', '0000-00-00', '12:52:28'),
(3, '', 'dsdasdsa', '0000-00-00', '12:44:29'),
(4, '', 'dadsad', '0000-00-00', '12:16:31'),
(5, 'Juveer', 'dasdasd', '2019-10-05', '09:10:54'),
(6, 'Juver', 'sadasdas', '2019-10-22', '06:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `time`, `date`) VALUES
(1, 'juver', '08:35:03', '2019-09-12'),
(2, 'juver', '08:37:53', '2019-09-12'),
(3, 'juver', '02:54:51', '2019-09-13'),
(4, 'juver', '03:01:02', '2019-09-15'),
(5, 'juver', '03:01:02', '2019-09-15'),
(6, 'juver', '03:10:06', '2019-09-15'),
(7, 'juver', '07:15:57', '2019-09-15'),
(8, 'juver', '12:00:26', '2019-09-15'),
(9, 'juver', '03:18:59', '2019-09-16'),
(10, 'admin', '05:01:39', '2019-09-16'),
(11, 'admin', '02:06:34', '2019-09-17'),
(12, 'juver', '03:18:33', '2019-09-19'),
(13, 'admin', '07:36:44', '2019-09-19'),
(14, 'juver', '08:15:31', '2019-09-20'),
(15, 'juver', '08:15:31', '2019-09-20'),
(16, 'juver', '10:37:03', '2019-10-05'),
(17, 'juver', '10:37:03', '2019-10-05'),
(18, 'juver', '10:37:03', '2019-10-05'),
(19, 'juver', '10:37:03', '2019-10-05'),
(20, 'admin', '10:45:48', '2019-10-05'),
(21, 'admin', '10:29:51', '2019-10-05'),
(22, 'admin', '11:44:42', '2019-10-05'),
(23, 'admin', '12:36:12', '2019-10-06'),
(24, 'admin', '02:16:17', '2019-10-06'),
(25, 'admin', '03:25:14', '2019-10-06'),
(26, 'admin', '03:25:14', '2019-10-06'),
(27, 'admin', '03:12:18', '2019-10-06'),
(28, 'admin', '03:12:18', '2019-10-06'),
(29, 'admin', '03:12:18', '2019-10-06'),
(30, 'admin', '03:12:18', '2019-10-06'),
(31, 'admin', '03:12:18', '2019-10-06'),
(32, 'admin', '03:12:18', '2019-10-06'),
(33, 'emelee', '08:13:29', '2019-10-08'),
(34, 'emelee', '08:26:30', '2019-10-08'),
(35, 'emelee', '09:27:52', '2019-10-08'),
(36, 'emelee', '09:44:59', '2019-10-08'),
(37, 'admin', '06:56:11', '2019-10-22'),
(38, 'admin', '04:59:25', '2019-10-27'),
(39, 'juver', '08:40:01', '2019-11-10'),
(40, 'juver', '06:44:23', '2019-11-11'),
(41, 'juver', '06:00:38', '2019-11-11'),
(42, 'juver', '09:43:44', '2019-11-12'),
(43, 'juver', '01:53:34', '2019-11-16'),
(44, 'juver', '03:02:33', '2019-11-24'),
(45, 'juver', '03:17:49', '2019-11-24'),
(46, 'juver', '08:20:18', '2019-11-24'),
(47, 'juver', '08:20:18', '2019-11-24'),
(48, 'juver', '09:35:34', '2019-11-24'),
(49, 'juver', '12:00:46', '2019-11-29'),
(50, 'juver', '09:17:44', '2019-12-01'),
(51, 'juver', '09:17:44', '2019-12-01'),
(52, 'juver', '07:23:34', '2019-12-03'),
(53, 'juver', '10:51:44', '2019-12-03'),
(54, 'juver', '12:24:06', '2019-12-03'),
(55, 'juver', '12:23:04', '2019-12-05'),
(56, 'juver', '09:50:20', '2019-12-09'),
(57, 'juver', '07:09:46', '2019-12-10'),
(58, 'juver', '11:42:35', '2019-12-10'),
(59, 'juver', '11:02:45', '2019-12-10'),
(60, 'juver', '11:31:55', '2019-12-10'),
(61, 'juver', '10:25:28', '2019-12-12'),
(62, 'juver', '10:00:36', '2019-12-12'),
(63, 'juver', '10:04:41', '2019-12-12'),
(64, 'juver', '11:15:39', '2019-12-13'),
(65, 'juver', '05:24:12', '2019-12-14'),
(66, 'juver', '11:29:54', '2019-12-14'),
(67, 'juver', '09:32:38', '2019-12-15'),
(68, 'juver', '12:31:38', '2019-12-15'),
(69, 'juver', '01:30:16', '2019-12-17'),
(70, 'juver', '05:54:56', '2019-12-17'),
(71, 'juver', '10:29:21', '2019-12-17'),
(72, 'juver', '10:35:52', '2019-12-21'),
(73, 'emelee', '01:53:23', '2019-12-29'),
(74, 'emelee', '03:29:17', '2019-12-30'),
(75, 'emelee', '04:53:07', '2019-12-31'),
(76, 'juver', '05:54:05', '2020-01-04'),
(77, 'emelee', '06:04:34', '2020-01-06'),
(78, 'juver', '01:52:10', '2020-01-15'),
(79, 'emelee', '10:24:09', '2020-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`) VALUES
(0, 'All'),
(1, 'clinic'),
(2, 'guidance and counselling'),
(3, 'ssc'),
(4, 'scholarship'),
(5, 'cultural affairs'),
(6, 'sports development'),
(7, 'dormitory'),
(8, 'alumni affairs'),
(9, 'canteen');

-- --------------------------------------------------------

--
-- Table structure for table `studentsinfo`
--

DROP TABLE IF EXISTS `studentsinfo`;
CREATE TABLE IF NOT EXISTS `studentsinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `section` text NOT NULL,
  `first` text NOT NULL,
  `middle` text NOT NULL,
  `last` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `sex` text NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` text NOT NULL,
  `boarding` text NOT NULL,
  `guardian` text NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsinfo`
--

INSERT INTO `studentsinfo` (`id`, `student_id`, `course`, `year`, `section`, `first`, `middle`, `last`, `email`, `address`, `sex`, `birthdate`, `birthplace`, `boarding`, `guardian`, `contact`) VALUES
(1, '1310140-1', 'BS in Information Technology', '4', 'A', 'Juver', 'Gorduiz', 'Colas', 'colasjuver1@gmail.com', 'Sto. Nino, Bontoc, So. Leyte', 'Male', '1997-03-08', 'Sogod, So. Leyte', 'N/A', 'Julia G. Colas', '09105974811');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

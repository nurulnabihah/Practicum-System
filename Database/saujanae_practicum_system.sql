-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2022 at 11:32 AM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saujanae_practicum_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyassessment`
--

CREATE TABLE `companyassessment` (
  `matricNo` varchar(6) NOT NULL,
  `totalA` varchar(6) NOT NULL,
  `totalB` varchar(6) NOT NULL,
  `totalC` varchar(6) NOT NULL,
  `totalD` varchar(6) NOT NULL,
  `totalE` varchar(6) NOT NULL,
  `totalF` varchar(6) NOT NULL,
  `totalG` varchar(6) NOT NULL,
  `totalH` varchar(6) NOT NULL,
  `grandTotal` varchar(6) NOT NULL,
  `grandHundred` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyassessment`
--

INSERT INTO `companyassessment` (`matricNo`, `totalA`, `totalB`, `totalC`, `totalD`, `totalE`, `totalF`, `totalG`, `totalH`, `grandTotal`, `grandHundred`) VALUES
('', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
('251043', '0', '0', '0', '0', '0', '0', '0', '0', '0.00', '0.00'),
('253196', '1.25', '2.33', '3.00', '1.50', '2.67', '1.25', '5.00', '10.00', '27.00', ''),
('255254', '2.25', '2.33', '3.00', '1.88', '1.00', '1.25', '8.89', '3.75', '24.60', '61.50'),
('260369', '0', '0', '0', '0', '0', '0', '0', '0', '0.00', '0.00'),
('260864', '1.50', '0', '0', '0', '0', '0', '0', '0', '1.50', '3.75'),
('261357', '3.00', '4.00', '3.00', '3.00', '4.00', '0', '0', '0', '17.00', '42.50'),
('261470', '1.50', '1.00', '2.25', '1.25', '1.00', '0.88', '5.83', '6.88', '20.59', '51.48'),
('262468', '2.25', '0', '0', '0', '0', '0', '0', '0', '2.25', '5.63'),
('266543', '3.00', '2.67', '3.00', '1.88', '2.00', '1.88', '7.50', '7.50', '29.43', '73.58'),
('268140', '1.50', '3.00', '0.00', '2.38', '3.00', '1.25', '5.00', '6.25', '22.38', '55.95');

-- --------------------------------------------------------

--
-- Table structure for table `ctotala`
--

CREATE TABLE `ctotala` (
  `matricNo` varchar(6) NOT NULL,
  `q1` varchar(2) NOT NULL,
  `q2` varchar(2) NOT NULL,
  `q3` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotala`
--

INSERT INTO `ctotala` (`matricNo`, `q1`, `q2`, `q3`) VALUES
('', '0', '0', '0'),
('251043', '0', '0', '0'),
('253196', '3', '2', '0'),
('255254', '2', '4', '3'),
('260369', '0', '0', '0'),
('260864', '1', '2', '3'),
('261357', '4', '4', '4'),
('261470', '1', '2', '3'),
('262468', '1', '4', '4'),
('266543', '4', '4', '4'),
('268140', '1', '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `ctotalb`
--

CREATE TABLE `ctotalb` (
  `matricNo` varchar(6) NOT NULL,
  `q4` varchar(6) NOT NULL,
  `q5` varchar(6) NOT NULL,
  `q6` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotalb`
--

INSERT INTO `ctotalb` (`matricNo`, `q4`, `q5`, `q6`) VALUES
('', '0', '0', '0'),
('251043', '0', '0', '0'),
('253196', '4', '3', '0'),
('255254', '2', '2', '3'),
('260369', '0', '0', '0'),
('260864', '0', '0', '0'),
('261357', '4', '4', '4'),
('261470', '0', '1', '2'),
('262468', '0', '0', '0'),
('266543', '2', '3', '3'),
('268140', '2', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ctotalc`
--

CREATE TABLE `ctotalc` (
  `matricNo` varchar(6) NOT NULL,
  `q7` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotalc`
--

INSERT INTO `ctotalc` (`matricNo`, `q7`) VALUES
('', '0'),
('251043', '0'),
('253196', '4'),
('255254', '4'),
('260369', '0'),
('260864', '0'),
('261357', '4'),
('261470', '3'),
('262468', '0'),
('266543', '4'),
('268140', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ctotald`
--

CREATE TABLE `ctotald` (
  `matricNo` varchar(6) NOT NULL,
  `q8` varchar(6) NOT NULL,
  `q9` varchar(6) NOT NULL,
  `q10` varchar(6) NOT NULL,
  `q11` varchar(6) NOT NULL,
  `q12` varchar(6) NOT NULL,
  `q13` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotald`
--

INSERT INTO `ctotald` (`matricNo`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`) VALUES
('', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0'),
('253196', '0', '1', '2', '3', '4', '2'),
('255254', '2', '3', '4', '3', '2', '1'),
('260369', '0', '0', '0', '0', '0', '0'),
('260864', '0', '0', '0', '0', '0', '0'),
('261357', '4', '4', '4', '4', '4', '4'),
('261470', '0', '1', '2', '3', '4', '0'),
('262468', '0', '0', '0', '0', '0', '0'),
('266543', '1', '1', '2', '3', '4', '4'),
('268140', '3', '4', '3', '4', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ctotale`
--

CREATE TABLE `ctotale` (
  `matricNo` varchar(6) NOT NULL,
  `q14` varchar(6) NOT NULL,
  `q15` varchar(6) NOT NULL,
  `q16` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotale`
--

INSERT INTO `ctotale` (`matricNo`, `q14`, `q15`, `q16`) VALUES
('', '0', '0', '0'),
('251043', '0', '0', '0'),
('253196', '0', '4', '4'),
('255254', '0', '1', '2'),
('260369', '0', '0', '0'),
('260864', '0', '0', '0'),
('261357', '4', '4', '4'),
('261470', '0', '1', '2'),
('262468', '0', '0', '0'),
('266543', '2', '2', '2'),
('268140', '2', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ctotalf`
--

CREATE TABLE `ctotalf` (
  `matricNo` varchar(6) NOT NULL,
  `q17` varchar(6) NOT NULL,
  `q18` varchar(6) NOT NULL,
  `q19` varchar(6) NOT NULL,
  `q20` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotalf`
--

INSERT INTO `ctotalf` (`matricNo`, `q17`, `q18`, `q19`, `q20`) VALUES
('', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0'),
('253196', '0', '4', '2', '4'),
('255254', '4', '3', '2', '1'),
('260369', '0', '0', '0', '0'),
('260864', '0', '0', '0', '0'),
('261357', '0', '0', '0', '0'),
('261470', '0', '0', '3', '4'),
('262468', '0', '0', '0', '0'),
('266543', '3', '4', '4', '4'),
('268140', '3', '3', '4', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ctotalg`
--

CREATE TABLE `ctotalg` (
  `matricNo` varchar(6) NOT NULL,
  `q21` varchar(6) NOT NULL,
  `q22` varchar(6) NOT NULL,
  `q23` varchar(6) NOT NULL,
  `q24` varchar(6) NOT NULL,
  `q25` varchar(6) NOT NULL,
  `q26` varchar(6) NOT NULL,
  `q27` varchar(6) NOT NULL,
  `q28` varchar(6) NOT NULL,
  `q29` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotalg`
--

INSERT INTO `ctotalg` (`matricNo`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`) VALUES
('', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('253196', '4', '2', '0', '0', '1', '2', '4', '3', '2'),
('255254', '4', '4', '4', '4', '4', '3', '3', '3', '3'),
('260369', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('261357', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('261470', '1', '2', '3', '4', '2', '2', '2', '2', '3'),
('262468', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('266543', '2', '2', '3', '3', '4', '4', '4', '3', '2'),
('268140', '2', '1', '0', '2', '3', '4', '3', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ctotalh`
--

CREATE TABLE `ctotalh` (
  `matricNo` varchar(6) NOT NULL,
  `q30` varchar(6) NOT NULL,
  `q31` varchar(6) NOT NULL,
  `q32` varchar(6) NOT NULL,
  `q33` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctotalh`
--

INSERT INTO `ctotalh` (`matricNo`, `q30`, `q31`, `q32`, `q33`) VALUES
('', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0'),
('253196', '4', '4', '4', '4'),
('255254', '2', '2', '1', '1'),
('260369', '0', '0', '0', '0'),
('261357', '0', '0', '0', '0'),
('261470', '4', '3', '2', '2'),
('262468', '0', '0', '0', '0'),
('266543', '3', '3', '2', '4'),
('268140', '3', '2', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `position` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `cPassword` varchar(70) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `csName` varchar(60) NOT NULL,
  `phoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`position`, `username`, `password`, `cPassword`, `fName`, `lName`, `email`, `csName`, `phoneNo`) VALUES
('admin', 'admin123', 'abc123&', 'abc123&', 'admin', 'soc', 'adminsoc@gmail.com', 'School of Computing', 49285051),
('uum', 'naby', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', '', 'amrinabihah@gmail.com', 'soc uum', 1123545342),
('uum', 'naby', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', '', 'amrinabihah@gmail.com', 'soc uum', 1123545342),
('company', 'naby', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 'amrinabihah@gmail.com', 'soc uum', 1123545342),
('committe', 'nabihahamri', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 'amrinabihah@gmail.com', 'soc uum', 1123545342),
('admin', 'uum1', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum2', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Syamsul Debat', 'bin Mohamed', 'amrinabihah@gmail.com', 'soc uum', 1169251004),
('uum', 'uum3', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nurul', 'nabihah', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum3', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nurul', 'naz', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum4', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nurul', 'najihah', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum5', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nurul', 'amirah', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum5', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nur', 'athirah', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum6', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'naby', 'nabihah', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum7', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nur', 'nazirah', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('uum', 'uum8', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'dini', 'razi', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'nabihah', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nabihah', 'amri', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'nabihah', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Siti Hajar', 'binti Mohd Firdaus', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'siti', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Siti Hajar', 'binti Mohd Firdaus', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'hajar', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nur Hajar', 'Binti Harun', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'wawa', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nur Wawa', 'Binti Mohd Adhi', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'Anisah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nur Anisah', 'Binti Iqbal', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'faizah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nor Faizah', 'Binti Mohamed', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'amri', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Mohd Amri', 'Bin Ismail', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'najihah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nurul Najihah', 'Binti Mohd Zainuddin', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'Lily', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nor Lily', 'Binti Mazlin', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'Raja', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Raja Farhana', 'Binti Yus', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'Afiqah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nur Afiqah', 'Binti Jamil', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'farah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Farah Azwa', 'Binti Mazlan', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'nora', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nora Danish', 'Binti Akmal', 'amrinabihah@gmail.com', 'soc uum', 1169251004),
('committe', 'nora', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nora Danish', 'Binti Akmal', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'nora', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nora Danish', 'Binti Akmal', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'nora', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nora Danish', 'Binti Akmal', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'nora', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nora Danish', 'Binti Akmal', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'Zulaikha', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nurul Zulaikha', 'Binti Zuki', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('company', 'Izuddin', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Mohd Izuddin', 'Binti Ismail', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('admin', 'nazirah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Nur Nazirah', 'Binti Haji', 'amrinabihah@gmail.com', 'soc uum', 1169251004),
('committe', 'hajar1', 'c9b359951c09c5d04de4f852746671ab2b2d0994', 'c9b359951c09c5d04de4f852746671ab2b2d0994', 'Nur Hajar', 'Binti Harun', 'amrinabihah2@gmail.com', 'soc uum', 1169251004),
('committe', 'noraidah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Noraidah', 'Binti Esa', 'amrinabihah@gmail.com', 'soc uum', 1169251004),
('admin', 'Noraidah', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'b16f191dcfa6861b98ad85a76104ea4c856db3b1', 'Noraidah', 'Binti Esa', 'amrinabihah@gmail.com', 'soc uum', 1169251004),
('committe', 'nurul', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nurul', 'najihah', 'najihah@gmail.com', 'soc', 1169251004),
('committe', 'huda', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nurul', 'huda', 'huda@gmail.com', 'soc', 1169251004),
('committe', 'amirahsayukhi', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', 'nur', 'amirah', 'nuramirah.sayukhi@gmail.com', 'SOC', 18);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studMatricNo` int(6) NOT NULL,
  `studName` varchar(70) NOT NULL,
  `offName` varchar(100) NOT NULL,
  `lectName` varchar(100) NOT NULL,
  `uumMarks` varchar(5) NOT NULL,
  `uumHundred` varchar(5) NOT NULL,
  `companyMarks` varchar(5) NOT NULL,
  `companyHundred` varchar(5) NOT NULL,
  `totalMarks` varchar(5) NOT NULL,
  `session` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studMatricNo`, `studName`, `offName`, `lectName`, `uumMarks`, `uumHundred`, `companyMarks`, `companyHundred`, `totalMarks`, `session`, `status`, `feedback`) VALUES
(251043, 'Siti Musfirah binti Azman', 'Siti Hajar binti Mohd Firdaus', 'Nur Azilah binti Husin', '', '', '0.00', '0.00', '0.00', 'A192', 'Unconfirmed', ''),
(251116, 'Mohammad Hariz bin Omar', 'Mohamad Syafiq bin Amiruddin', 'Syamsul Debat bin Mohamed', '22.59', '37.65', '', '', '22.59', 'A192', 'Pending', 'Marks too high!'),
(253196, 'Nur Intan Najihah binti Azman', 'Siti Hajar binti Mohd Firdaus', 'Khadijah binti Ismail', '', '', '27.00', '', '27.00', 'A201', 'Unconfirmed', ''),
(253376, 'Nurul Huda binti Mohammad', 'Norliawati binti Ahmed', 'Syamsul Debat', '38.11', '63.52', '', '', '38.11', 'A201', 'Unconfirmed', ' '),
(255254, 'Chai Shun Pei', 'Mohd Fequz bin Wann Ahmad', 'Syamsul Debat bin Mohamed', '44.83', '74.72', '24.60', '61.50', '69.43', 'A201', 'Pending', 'Marks is too high!\r\n                    '),
(260369, 'Hashima binti Halim', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat bin Mohamed', '', '', '0.00', '0.00', '0.00', 'A201', '', ''),
(260864, 'Mohammad Fikri bin Zain', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat bin Mohamed', '0.00', '0.00', '1.50', '3.75', '1.50', 'A201', 'Unconfirmed', ' '),
(261357, 'Nureen Aqila binti Haji Zanuddin', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat Bin Mohamed', '43.87', '73.12', '17.00', '42.50', '60.87', 'A201', 'Unconfirmed', ' '),
(261470, 'Lim Shin Hai', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat bin Mohamed', '27.81', '46.35', '20.59', '51.48', '48.40', 'A201', 'Unconfirmed', ' '),
(262468, 'Sarahiya binti Daud', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat bin Mohamed', '', '', '2.25', '5.63', '2.25', 'A201', 'Unconfirmed', ' '),
(266543, 'Nurul Diyana binti Razak', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat Bin Mohamed', '40.31', '67.18', '29.43', '73.58', '69.74', 'A201', 'Pending', 'The marks is too low.                    '),
(267036, 'Adhiya binti Haji', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat Bin Mohamed', '7.50', '12.50', '', '', '7.50', 'A201', 'Unconfirmed', ' '),
(267531, 'Eisya Elaini binti Bahar', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat Bin Mohamed', '26.50', '44.17', '', '', '26.50', 'A201', 'Unconfirmed', ' '),
(268140, 'Intan Zara binti Khairuddin', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat Bin Mohamed', '34.14', '56.90', '22.38', '55.95', '56.52', 'A201', 'Approve', ' '),
(268642, 'Nurlia binti Naqiuddin', 'Siti Hajar binti Mohd Firdaus', 'Syamsul Debat Bin Mohamed', '8.06', '13.43', '', '', '8.06', 'A201', 'Unconfirmed', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `session` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `matricNo` varchar(10) NOT NULL,
  `uumSName` varchar(100) NOT NULL,
  `companySName` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`session`, `name`, `matricNo`, `uumSName`, `companySName`, `companyName`) VALUES
('3çÁòN', '', '', '', '', ''),
('A192', 'Siti Musfirah binti Azman', '251043', 'Nur Azilah binti Husin', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A192', 'Mohammad Hariz bin Omar', '251116', 'Syamsul Debat bin Mohamed', 'Mohamad Syafiq bin Amiruddin', 'Cube Sdn. Bhd.'),
('A201', 'Low Kai Kee', '251120', 'Nurul Amirah binti Mohd Azmin', 'Mohamad Amir bin Azhar', 'Global Factor Sdn. Bhd.'),
('A201', 'Nurul Nazurah binti Ahmad Mazni', '252737', 'Nurul Amirah binti Mohd Azmin', 'Mohd Johan bin Iskandar', 'Desjaya Sdn. Bhd.'),
('A201', 'Mohd Naufal bin Ismail', '252755', 'Khadijah binti Ismail', 'Mohd Johan bin Iskandar', 'Desjaya Sdn. Bhd.'),
('A201', 'Nur Amirah binti Mohd Sayukhi', '253012', 'Nurul Amirah binti Mohd Azmin', 'Mohamad Amir bin Azhar', 'Global Factor Sdn. Bhd.'),
('A201', 'Nur Intan Najihah binti Azman', '253196', 'Khadijah binti Ismail', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nurul Huda binti Mohammad', '253376', 'Syamsul Debat', 'Norliawati binti Ahmed', 'Tune Sdn. Bhd.'),
('A201', 'Ahmad Azlan bin Dzammar', '254152', 'Syamsul Debat bin Mohamed', 'Mohamad Syafiq bin Amiruddin', 'Cube Sdn. Bhd.'),
('A201', 'Chai Shun Pei', '255254', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus\r\n', 'Sentoria Sdn. Bhd.'),
('A201', 'Hashima binti Halim', '260369', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Hannan binti Harun', '260741', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Mohammad Fikri bin Zain', '260864', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nureen Aqila binti Haji Zanuddin', '261357', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Atikah binti Mahasan', '261370', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Lim Shin Hai', '261470', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Mohd Syafiq bin Hanim', '262311', 'Nur Azilah binti Husin', 'Akmal bin Ismail', 'ICTS Sdn. Bhd.'),
('A201', 'Nur Arishiah binti Zauhari', '262367', 'Nur Azilah binti Husin', 'Norliawati binti Ahmed', 'Tune Sdn. Bhd.'),
('A201', 'Sarahiya binti Daud', '262468', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Lee Jai Yi', '262581', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Mohd Adam bin Jamal', '263690', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nur Shahirah binti Azmin', '263692', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nur Aqila binti Mohed', '264241', 'Nur Azilah binti Husin', 'Mohd Fequz bin Wann Ahmad', 'Pixy Sdn. Bhd.'),
('A201', 'Nur Alia binti Zamrul', '264558', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nur Diyana binti Azam', '264703', 'Syamsul Debat bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Lee Hai Ci', '265814', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nurul Diyana binti Razak', '266543', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Belinda Monrara', '266925', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Adhiya binti Haji', '267036', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Eisya Elaini binti Bahar', '267531', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Intan Zara binti Khairuddin', '268140', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Aisyah binti Mat Zain', '268334', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Mohd Danial bin Asad', '268529', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Nurlia binti Naqiuddin', '268642', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Zarahiyah binti Harun', '269258', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Amirul Fikri bin Ismail', '269630', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('A201', 'Mohd Azmir bin Hasham', '269753', 'Syamsul Debat Bin Mohamed', 'Siti Hajar binti Mohd Firdaus', 'Sentoria Sdn. Bhd.'),
('’ëBŠÊ', 'Ôº…äch°ð{Ú-¿A±8êÜ	-<aÓ.¾šNNJ‰ÇX±…Q$ýÃ~ÄÙ±Ž	©>æÙI‰y0Éù‹Ð¬ªjmò_´/Nµï', 'ä}Wƒ:=RYþì', '', '', ''),
('Sessi', 'Name', 'Matric No', 'UUM Supervisor Name', 'Company Supervisor Name', 'Company Name'),
('ï¢Y-', 'Ü‰Î{Áy”P·´-“Õ½‡¢Hõ8L¨Û0¡', 'Ü‰PÞO)8', '‰#½ÇAu#Å\"BûŽnãß]´è”ÎQå»ut–Ò!SRÇ0RKÂÞÄÎ&¢¨Û©iNÉéxFg	2¥x#Å’¬}GÉÊÒ­F¤:¥zd¤#è', 'Ý#ÿÕßºº‘bå¡=(6ÖÒ>ÆšÖuV?d–ü‘Þã º‘b¡=(( ëÿ®)	d¬i:‹ 2KIïqPÝH±‚Ðv.–	FZkëNI!U¾ÛÍh–\"SjÈ0R', '‡ÀÚƒÂÎÅŠÏˆ´@§‘Œt<£³4™E†‘bUÖv.êvjDZ SÂHFºÒYÊHzÏ'),
('&w1þr', 'cœ™c‹…‘È××;©4É8¸Úøs’£Æ_è`°ÐŠž', '×ªV¥9PW•%', 'héWcµ¼é$œ‚y', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `totala`
--

CREATE TABLE `totala` (
  `matricNo` varchar(6) NOT NULL,
  `q1` varchar(2) NOT NULL,
  `q2` varchar(2) NOT NULL,
  `q3` varchar(2) NOT NULL,
  `q4` varchar(2) NOT NULL,
  `q5` varchar(2) NOT NULL,
  `q6` varchar(2) NOT NULL,
  `q7` varchar(2) NOT NULL,
  `q8` varchar(2) NOT NULL,
  `q9` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totala`
--

INSERT INTO `totala` (`matricNo`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`) VALUES
('', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('243730', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('251116', '2', '1', '2', '2', '2', '3', '3', '4', '3'),
('253376', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
('255254', '3', '4', '2', '3', '2', '4', '3', '3', '4'),
('260864', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('261357', '2', '3', '4', '4', '4', '4', '4', '4', '4'),
('261470', '0', '1', '2', '3', '4', '3', '2', '1', '0'),
('266543', '2', '2', '2', '2', '4', '4', '3', '3', '2'),
('267036', '1', '2', '3', '4', '4', '4', '4', '3', '2'),
('267531', '2', '2', '3', '3', '3', '0', '2', '2', '3'),
('268140', '1', '2', '3', '4', '4', '4', '4', '3', '2'),
('268642', '1', '2', '3', '4', '4', '4', '4', '4', '3'),
('269258', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalb`
--

CREATE TABLE `totalb` (
  `matricNo` varchar(6) NOT NULL,
  `q10` varchar(2) NOT NULL,
  `q11` varchar(2) NOT NULL,
  `q12` varchar(2) NOT NULL,
  `q13` varchar(2) NOT NULL,
  `q14` varchar(2) NOT NULL,
  `q15` varchar(2) NOT NULL,
  `q16` varchar(2) NOT NULL,
  `q17` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalb`
--

INSERT INTO `totalb` (`matricNo`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`) VALUES
('', '0', '0', '0', '0', '0', '0', '0', '0'),
('243730', '0', '0', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0', '0', '0'),
('251116', '2', '2', '1', '0', '3', '3', '0', '2'),
('253376', '0', '0', '0', '0', '0', '0', '0', '0'),
('254152', '0', '0', '0', '0', '0', '0', '0', '0'),
('255254', '4', '4', '4', '3', '2', '2', '2', '4'),
('260864', '0', '0', '0', '0', '0', '0', '0', '0'),
('261357', '4', '4', '4', '4', '4', '4', '3', '2'),
('261470', '0', '1', '2', '3', '2', '2', '2', '2'),
('266543', '1', '2', '2', '2', '3', '3', '3', '3'),
('267036', '0', '0', '0', '0', '0', '0', '0', '0'),
('267531', '4', '4', '4', '3', '4', '4', '3', '3'),
('268140', '4', '3', '2', '1', '0', '0', '2', '3'),
('268642', '0', '0', '0', '0', '0', '0', '0', '0'),
('269258', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalc`
--

CREATE TABLE `totalc` (
  `matricNo` varchar(6) NOT NULL,
  `q18` varchar(2) NOT NULL,
  `q19` varchar(2) NOT NULL,
  `q20` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalc`
--

INSERT INTO `totalc` (`matricNo`, `q18`, `q19`, `q20`) VALUES
('', '0', '0', '0'),
('251043', '0', '0', '0'),
('251116', '2', '2', '2'),
('253376', '4', '4', '4'),
('255254', '2', '3', '0'),
('260864', '0', '0', '0'),
('261357', '1', '3', '4'),
('261470', '2', '3', '4'),
('266543', '1', '1', '2'),
('267036', '0', '0', '0'),
('267531', '4', '4', '4'),
('268140', '3', '2', '3'),
('268642', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totald`
--

CREATE TABLE `totald` (
  `matricNo` varchar(6) NOT NULL,
  `q21` varchar(2) NOT NULL,
  `q22` varchar(2) NOT NULL,
  `q23` varchar(2) NOT NULL,
  `q24` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totald`
--

INSERT INTO `totald` (`matricNo`, `q21`, `q22`, `q23`, `q24`) VALUES
('', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0'),
('251116', '2', '2', '2', '2'),
('253376', '4', '4', '4', '4'),
('255254', '4', '3', '3', '4'),
('260864', '0', '0', '0', '0'),
('261357', '4', '4', '3', '2'),
('261470', '0', '1', '2', '3'),
('266543', '2', '3', '4', '4'),
('267036', '0', '0', '0', '0'),
('267531', '4', '4', '4', '0'),
('268140', '2', '2', '2', '2'),
('268642', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totale`
--

CREATE TABLE `totale` (
  `matricNo` varchar(6) NOT NULL,
  `q25` varchar(2) NOT NULL,
  `q26` varchar(2) NOT NULL,
  `q27` varchar(2) NOT NULL,
  `q28` varchar(2) NOT NULL,
  `q29` varchar(2) NOT NULL,
  `q30` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totale`
--

INSERT INTO `totale` (`matricNo`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`) VALUES
('', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0'),
('251116', '0', '1', '2', '2', '0', '0'),
('253376', '2', '3', '4', '1', '1', '1'),
('255254', '3', '3', '3', '2', '4', '3'),
('260864', '0', '0', '0', '0', '0', '0'),
('261357', '2', '2', '2', '1', '1', '0'),
('261470', '0', '4', '3', '2', '1', '0'),
('266543', '3', '3', '4', '4', '4', '4'),
('267036', '0', '0', '0', '0', '0', '0'),
('267531', '3', '0', '0', '0', '4', '4'),
('268140', '0', '1', '1', '3', '3', '4'),
('268642', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalf`
--

CREATE TABLE `totalf` (
  `matricNo` varchar(6) NOT NULL,
  `q31` varchar(2) NOT NULL,
  `q32` varchar(2) NOT NULL,
  `q33` varchar(2) NOT NULL,
  `q34` varchar(2) NOT NULL,
  `q35` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalf`
--

INSERT INTO `totalf` (`matricNo`, `q31`, `q32`, `q33`, `q34`, `q35`) VALUES
('', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0'),
('251116', '0', '2', '0', '0', '0'),
('253376', '0', '1', '2', '4', '4'),
('255254', '3', '2', '4', '4', '4'),
('260864', '0', '0', '0', '0', '0'),
('261357', '3', '3', '3', '4', '0'),
('261470', '0', '1', '2', '4', '0'),
('266543', '3', '3', '3', '0', '0'),
('267036', '0', '0', '0', '0', '0'),
('267531', '0', '0', '0', '0', '0'),
('268140', '4', '3', '3', '4', '4'),
('268642', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalg`
--

CREATE TABLE `totalg` (
  `matricNo` varchar(6) NOT NULL,
  `q36` varchar(2) NOT NULL,
  `q37` varchar(2) NOT NULL,
  `q38` varchar(2) NOT NULL,
  `q39` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalg`
--

INSERT INTO `totalg` (`matricNo`, `q36`, `q37`, `q38`, `q39`) VALUES
('', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0'),
('251116', '0', '2', '0', '2'),
('253376', '1', '2', '3', '4'),
('255254', '0', '1', '2', '3'),
('260864', '0', '0', '0', '0'),
('261357', '4', '2', '3', '0'),
('261470', '3', '4', '0', '0'),
('266543', '4', '4', '4', '4'),
('267036', '0', '0', '0', '0'),
('267531', '0', '0', '0', '0'),
('268140', '0', '0', '2', '2'),
('268642', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalh`
--

CREATE TABLE `totalh` (
  `matricNo` varchar(6) NOT NULL,
  `q40` varchar(2) NOT NULL,
  `q41` varchar(2) NOT NULL,
  `q42` varchar(2) NOT NULL,
  `q43` varchar(2) NOT NULL,
  `q44` varchar(2) NOT NULL,
  `q45` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalh`
--

INSERT INTO `totalh` (`matricNo`, `q40`, `q41`, `q42`, `q43`, `q44`, `q45`) VALUES
('', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0'),
('251116', '0', '0', '0', '0', '2', '2'),
('253376', '3', '2', '1', '0', '1', '0'),
('255254', '2', '3', '4', '0', '1', '2'),
('260864', '0', '0', '0', '0', '0', '0'),
('261357', '1', '2', '3', '4', '3', '0'),
('261470', '1', '2', '3', '4', '2', '1'),
('266543', '0', '0', '3', '2', '4', '0'),
('267036', '0', '0', '0', '0', '0', '0'),
('267531', '0', '0', '0', '0', '0', '0'),
('268140', '4', '4', '4', '3', '3', '3'),
('268642', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totali`
--

CREATE TABLE `totali` (
  `matricNo` varchar(6) NOT NULL,
  `q46` varchar(2) NOT NULL,
  `q47` varchar(2) NOT NULL,
  `q48` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totali`
--

INSERT INTO `totali` (`matricNo`, `q46`, `q47`, `q48`) VALUES
('', '0', '0', '0'),
('251043', '0', '0', '0'),
('251116', '0', '2', '2'),
('253376', '0', '1', '2'),
('255254', '2', '1', '0'),
('260864', '0', '0', '0'),
('261357', '1', '1', '1'),
('261470', '0', '0', '0'),
('266543', '3', '3', '3'),
('267036', '0', '0', '0'),
('267531', '0', '0', '0'),
('268140', '2', '2', '2'),
('268642', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalj`
--

CREATE TABLE `totalj` (
  `matricNo` varchar(6) NOT NULL,
  `q49` varchar(2) NOT NULL,
  `q50` varchar(2) NOT NULL,
  `q51` varchar(2) NOT NULL,
  `q52` varchar(2) NOT NULL,
  `q53` varchar(2) NOT NULL,
  `q54` varchar(2) NOT NULL,
  `q55` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalj`
--

INSERT INTO `totalj` (`matricNo`, `q49`, `q50`, `q51`, `q52`, `q53`, `q54`, `q55`) VALUES
('', '0', '0', '0', '0', '0', '0', '0'),
('251043', '0', '0', '0', '0', '0', '0', '0'),
('251116', '0', '1', '1', '2', '0', '0', '2'),
('253376', '0', '1', '2', '3', '4', '3', '2'),
('255254', '4', '3', '2', '3', '3', '2', '3'),
('260864', '0', '0', '0', '0', '0', '0', '0'),
('261357', '2', '2', '2', '0', '3', '4', '2'),
('261470', '0', '1', '2', '3', '4', '3', '2'),
('266543', '0', '3', '2', '3', '0', '4', '4'),
('267036', '0', '0', '0', '0', '0', '0', '0'),
('267531', '0', '0', '0', '0', '0', '0', '0'),
('268140', '1', '1', '1', '0', '0', '0', '2'),
('268642', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `totalk`
--

CREATE TABLE `totalk` (
  `matricNo` varchar(6) NOT NULL,
  `q56` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalk`
--

INSERT INTO `totalk` (`matricNo`, `q56`) VALUES
('', '0'),
('251043', '0'),
('251116', '0'),
('253376', '4'),
('255254', '4'),
('260864', '0'),
('261357', '4'),
('261470', '3'),
('266543', '1'),
('267036', '0'),
('267531', '0'),
('268140', '3'),
('268642', '0');

-- --------------------------------------------------------

--
-- Table structure for table `uumassessment`
--

CREATE TABLE `uumassessment` (
  `matricNo` varchar(6) NOT NULL,
  `totalA` varchar(6) NOT NULL,
  `totalB` varchar(6) NOT NULL,
  `totalC` varchar(6) NOT NULL,
  `totalD` varchar(6) NOT NULL,
  `totalE` varchar(6) NOT NULL,
  `totalF` varchar(6) NOT NULL,
  `totalG` varchar(6) NOT NULL,
  `totalH` varchar(6) NOT NULL,
  `totalI` varchar(6) NOT NULL,
  `totalJ` varchar(6) NOT NULL,
  `totalK` varchar(6) NOT NULL,
  `grandTotal` varchar(6) NOT NULL,
  `grandHundred` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uumassessment`
--

INSERT INTO `uumassessment` (`matricNo`, `totalA`, `totalB`, `totalC`, `totalD`, `totalE`, `totalF`, `totalG`, `totalH`, `totalI`, `totalJ`, `totalK`, `grandTotal`, `grandHundred`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('243730', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
('251043', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.00', ''),
('251116', '6.11', '4.06', '1.50', '5.00', '0.63', '0.40', '0.75', '0.67', '1.33', '2.14', '', '22.59', '37.65'),
('253376', '10.00', '0.00', '3.00', '10.00', '1.50', '2.20', '1.88', '1.17', '1.00', '5.36', '2.00', '38.11', '63.52'),
('254152', '1.8', '2.4', '', '', '', '', '', '', '', '', '', '', ''),
('255254', '7.78', '8.13', '1.25', '8.75', '2.25', '3.40', '1.13', '2.00', '1.00', '7.14', '2.00', '44.83', '74.72'),
('260864', '0', '0.00', '0.00', '0', '0', '0', '0.00', '0', '0', '0', '0.00', '0.00', '0.00'),
('261357', '9.17', '8.75', '2.00', '8.13', '1.00', '2.60', '1.69', '2.17', '1.00', '5.36', '2.00', '43.87', '73.12'),
('261470', '4.44', '4.38', '2.25', '3.75', '1.25', '1.40', '1.31', '2.17', '0', '5.36', '1.50', '27.81', '46.35'),
('266543', '6.67', '6.25', '1.00', '8.13', '2.75', '1.80', '3.00', '1.50', '3.00', '5.71', '0.50', '40.31', '67.18'),
('267036', '7.50', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '7.50', '12.50'),
('267531', '5.56', '9.06', '3.00', '7.50', '1.38', '0', '0', '0', '0', '0', '0', '26.50', '44.17'),
('268140', '7.50', '5.00', '2.00', '5.00', '1.50', '3.60', '0.75', '3.50', '2.00', '1.79', '1.50', '34.14', '56.90'),
('268642', '8.06', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '8.06', '13.43'),
('269258', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyassessment`
--
ALTER TABLE `companyassessment`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotala`
--
ALTER TABLE `ctotala`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotalb`
--
ALTER TABLE `ctotalb`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotalc`
--
ALTER TABLE `ctotalc`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotald`
--
ALTER TABLE `ctotald`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotale`
--
ALTER TABLE `ctotale`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotalf`
--
ALTER TABLE `ctotalf`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotalg`
--
ALTER TABLE `ctotalg`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `ctotalh`
--
ALTER TABLE `ctotalh`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studMatricNo`);

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totala`
--
ALTER TABLE `totala`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalb`
--
ALTER TABLE `totalb`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalc`
--
ALTER TABLE `totalc`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totald`
--
ALTER TABLE `totald`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totale`
--
ALTER TABLE `totale`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalf`
--
ALTER TABLE `totalf`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalg`
--
ALTER TABLE `totalg`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalh`
--
ALTER TABLE `totalh`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totali`
--
ALTER TABLE `totali`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalj`
--
ALTER TABLE `totalj`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `totalk`
--
ALTER TABLE `totalk`
  ADD PRIMARY KEY (`matricNo`);

--
-- Indexes for table `uumassessment`
--
ALTER TABLE `uumassessment`
  ADD PRIMARY KEY (`matricNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

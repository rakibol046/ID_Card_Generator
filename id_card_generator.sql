-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 10:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id_card_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `student_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `student_program` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_intake` int(3) NOT NULL,
  `student_blood` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `student_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `student_info` (`student_ID`, `student_name`, `student_program`, `student_intake`, `student_blood`, `student_date`) VALUES
('18191103040', 'Md. Rakibul Islam', 'CSE', 40, 'A+', '0000-00-00'),
('18191103045', 'Rahid', 'CSE', 11, 'AB+', '0000-00-00'),
('18191103345', 'Ulfat', 'CSE', 10, 'AB+',  '2021-06-14'),
('19977737377', 'Taieb', 'EEE', 13, 'A-',  '2021-06-02'),
('19356553543', 'Cleopatra', 'CSE', 15, 'AB+',  '2021-06-17'),
('19324234424', 'Abir', 'EEE', 25, 'A-',  '0000-00-00'),
('19324234624', 'Kabir', 'EEE', 25, 'A-',  '0000-00-00'),
('19324234453', 'Kabila', 'EEE', 25, 'A-',  '0000-00-00'),
('19324264424', 'Rajib', 'EEE', 25, 'A-',  '0000-00-00'),
('19387834424', 'Masud', 'EEE', 25, 'A-',  '0000-00-00'),
('19423478345', 'Abraham', 'Textile', 19, 'B+', '2021-03-15');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

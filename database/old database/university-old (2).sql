-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 01:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `instructor_email` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `date_today` varchar(255) NOT NULL,
  `date_deadline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `sender_email`, `instructor_email`, `subject_code`, `descript`, `date_today`, `date_deadline`) VALUES
(26, 'rickytepora@gmail.com', 'jewellshije@gmail.com', 'DCIT70 / N/A', '<p>dsdadsasddas</p>', '2023-01-23', '2023-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `createuser`
--

CREATE TABLE `createuser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` enum('Administrator','Instructor','Chairperson','Dean') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `contact` int(255) NOT NULL,
  `consult_sched1` varchar(255) NOT NULL,
  `consult_sched2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createuser`
--

INSERT INTO `createuser` (`id`, `name`, `role`, `email`, `password`, `dept`, `contact`, `consult_sched1`, `consult_sched2`) VALUES
(85, 'Jewells', 'Instructor', 'jewellshije@gmail.com', 'Jewell_ann.!3', 'Department of Computer Studies', 2147483647, 'Mon 6:00 -7:00 pm', 'Mon 6:00 -7:00 pm'),
(92, 'John Doe', 'Dean', 'johndoe@gmail.com', '123', 'Campus Administrator', 966793724, 'N/A', 'N/A'),
(93, 'Ricky Tepora', 'Chairperson', 'rickytepora@gmail.com', '123', 'Department of Computer Science', 970755761, 'N/A', 'N/A'),
(94, 'Gizelle Rodero', 'Instructor', 'gizellerodero@gmail.com', 'mrnerolero10', 'Department of Computer Science', 2147483647, 'Mon 6:00 -7:00 pm', 'Tue 6:00 -7:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `done_syllabus`
--

CREATE TABLE `done_syllabus` (
  `id` int(255) NOT NULL,
  `instructor_email` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_tittle` varchar(255) NOT NULL,
  `date_today` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `reciever_email` varchar(100) NOT NULL,
  `reciever_role` varchar(100) NOT NULL,
  `reciever_dept` varchar(255) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `sender_email`, `reciever_email`, `reciever_role`, `reciever_dept`, `file_name`, `comment`, `date`) VALUES
(65, 'jewellshije@gmail.com', 'rickytepora@gmail.com', 'Chairperson', '', 'cvsu_dcit_syllabus.pdf', '', '2023-01-23'),
(66, 'rickytepora@gmail.com', 'jewellshije@gmail.com', 'Instructor', '', 'cvsu_dcit_syllabus.pdf', '<p>Change the first week syllabus</p>', '2023-01-23'),
(67, 'rickytepora@gmail.com', 'jewellshije@gmail.com', 'Instructor', '', 'cvsu_dcit_syllabus.pdf', '<p>asddasad</p>', '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `course` Text NOT NULL, -- course_code, course_title, credits_units, course_prereq, course_sched, course_desc
  `check_a` Text NOT NULL, --A5
  `check_b` Text NOT NULL, --B5
  `check_c` Text NOT NULL, --C5
  `check_d` Text NOT NULL, --D5
  `check_e` Text NOT NULL, --E5
  `check_f` Text NOT NULL, --F5
  `check_g` Text NOT NULL, --G5
  `check_h` Text NOT NULL, --H5
  `check_i` Text NOT NULL, --I5
  `check_j` Text NOT NULL, --J5
  `level_a` text NOT NULL, --A10
  `level_b` text NOT NULL, --B10
  `level_c` text NOT NULL, --C10 
  `level_d` text NOT NULL, --D10
  `level_e` text NOT NULL, --E10
  `level_f` text NOT NULL, --F10
  `level_g` text NOT NULL, --G10
  `level_h` text NOT NULL, --H10
  `level_i` text NOT NULL, --I10
  `level_j` text NOT NULL, --J10
  `week_a` text NOT NULL, --A7
  `week_b` text NOT NULL, --B7
  `week_c` text NOT NULL, --C7
  `week_d` text NOT NULL, --D7
  `week_e` text NOT NULL, --E7
  `week_f` text NOT NULL, --F7
  `week_g` text NOT NULL, --G7
  `course_req` text NOT NULL,
  `grading_system` text NOT NULL,
  `class_policies` text NOT NULL,
  `ref_sup` text NOT NULL, 
  `rev` Text NOT NULL, --ref_sup, rev_no, rev_date, rev_imp, rev_desc
  `instructor` text NOT NULL, --ins_name, ins_role, ins_contact, ins_email, ins_dept, ins_sched1, ins_sched2
  `chairperson` text NOT NULL, -- cha_name, cha_role, cha_email, cha_dept, cha_date
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createuser`
--
ALTER TABLE `createuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `done_syllabus`
--
ALTER TABLE `done_syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `createuser`
--
ALTER TABLE `createuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `done_syllabus`
--
ALTER TABLE `done_syllabus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

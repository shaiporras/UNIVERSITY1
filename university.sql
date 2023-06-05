-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 04:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `id` int(11) NOT NULL,
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
(26, 'rickytepora@gmail.com', 'jewellshije@gmail.com', 'DCIT70 / N/A', '<p>dsdadsasddas</p>', '2023-01-23', '2023-01-26'),
(27, 'rickytepora@gmail.com', 'jewellshije@gmail.com', 'DCIT70 / N/A', '<p>qkwuge;qwiueg;wqgueuqe</p>', '2023-02-02', '2023-02-02');

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
  `contact` int(11) NOT NULL,
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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `reciever_email` varchar(100) NOT NULL,
  `reciever_role` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `Sy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `sender_email`, `reciever_email`, `reciever_role`, `file_name`, `comment`, `date`, `Sy_id`) VALUES
(72, 'gizellerodero@gmail.com', 'rickytepora@gmail.com', 'Chairperson', 'Lero_Noriel_4F.pdf', '2023-02-06', '', 18);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `course_units` varchar(255) NOT NULL,
  `course_pre-req` varchar(255) NOT NULL,
  `course_shced` varchar(255) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `check_a` text NOT NULL,
  `check_b` text NOT NULL,
  `check_c` text NOT NULL,
  `check_d` text NOT NULL,
  `check_e` text NOT NULL,
  `check_f` text NOT NULL,
  `check_g` text NOT NULL,
  `check_h` text NOT NULL,
  `check_i` text NOT NULL,
  `check_j` text NOT NULL,
  `level_a` text NOT NULL,
  `level_b` text NOT NULL,
  `level_c` text NOT NULL,
  `level_d` text NOT NULL,
  `level_e` text NOT NULL,
  `level_f` text NOT NULL,
  `week_a` text NOT NULL,
  `week_b` text NOT NULL,
  `week_c` text NOT NULL,
  `week_d` text NOT NULL,
  `week_e` text NOT NULL,
  `week_f` text NOT NULL,
  `week_g` text NOT NULL,
  `course_req` text NOT NULL,
  `grading_system` text NOT NULL,
  `class_policies` text NOT NULL,
  `ref_sup` text NOT NULL,
  `rev` text NOT NULL,
  `instructor` text NOT NULL,
  `chairperson` text NOT NULL,
  `Instr_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `course_code`, `course_title`, `course_type`, `course_units`, `course_pre-req`, `course_shced`, `course_description`, `check_a`, `check_b`, `check_c`, `check_d`, `check_e`, `check_f`, `check_g`, `check_h`, `check_i`, `check_j`, `level_a`, `level_b`, `level_c`, `level_d`, `level_e`, `level_f`, `week_a`, `week_b`, `week_c`, `week_d`, `week_e`, `week_f`, `week_g`, `course_req`, `grading_system`, `class_policies`, `ref_sup`, `rev`, `instructor`, `chairperson`, `Instr_ID`) VALUES
(18, 'ITEC70', 'League of Legends', 'Lecture', '3 UNITS', '', '11:00  AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI', '', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[], [], [], [], []', '[I], [I], [I], [I], [I], [I], [I], [I], [I], [I]', '[I], [I], [I], [I], [I], [I], [I], [I], [I], [I]', '[I], [I], [I], [I], [I], [I], [I], [I], [I], [I]', '[I], [I], [I], [I], [I], [I], [I], [I], [I], [I]', '[I], [I], [I], [I], [I], [I], [I], [I], [I], [I]', '[I], [I], [I], [I], [I], [I], [I], [I], [I], [I]', '[], [], [], [], [], [], []', '[], [], [], [], [], [], []', '[], [], [], [], [], [], []', '[], [], [], [], [], [], []', '[], [], [], [], [], [], []', '[], [], [], [], [], [], []', '[], [], [], [], [], [], []', '<br><b>Suggested Lecture Requirements:</b> <br> 1. Mid-Term Examination <br>       2. Final Examination <br>       3. Quizzes/Seat works/Recitations <br>       4. Video presentation <br>       5. Fact Sheet <br>       6. Class Reporting/Reaction Paper <br>       7. Assignments <br>       8. Class or Group Project (Term Paper/Project Design/Case Study/Feasibility Study/Culminating Activity/Portfolio) <br>       9. Class Attendance <br></br> <b>Suggested Laboratory Requirements:</b> <br>      1. Laboratory Reports <br>       2. Individual Performance <br>       3. Quizzes <br>       4. Mid-Term Examination <br>       5. Final Examination <br>       6. Video presentation <br>       7. Fact Sheet <br>       8. Attendance <br></br> *All exams must follow a Table of Specifications (TOS) and Rubrics for evaluation of student performance or projects.', '<br><b>A. Grading system for 2 units lecture and 1 unit laboratory</b> (i.e. DCIT 21; 3 units; Lec - 2 hrs & Lab - 3 hrs) <br>        Lecture – 60% <br>       Laboratory – 40% <br></br> <b>B. Grading system for 1 unit lecture and 2 units laboratory</b> (i.e. DCIT 22; 3 units; Lec -1 hr & Lab - 6 hrs) <br>       Lecture – 40% <br>       Laboratory – 60% <br></br> <b>C. Grading system for 2 units lecture and 3 units laboratory</b> (i.e. ELEX 50; 5 units; Lec – 2 hrs & Lab – 9 hrs) <br>       Lecture – 30% <br>       Laboratory – 70%', '<br> <b>A. Attendance</b> <br><b> B. Classroom Decorum</b> <br> <b>C. Examination/ Evaluation</b> ', '<br><b>A. Laboratory Manual (if with laboratory)</b> <br></br> <b>B. Reference Books</b> <br></br> <b>C. Electronic References( E-books/Websites)</b>', '[], [], [2nd Semester AY2022-2023], []', '[], [Instructor 1], [], [], [Department of Information Technology], [Mon 6:00 -7:00 pm], [Tue 6:00 -7:00 pm]', '[], [Chairperson], [], [], [Department of Information Technology]', 94);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `createuser`
--
ALTER TABLE `createuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

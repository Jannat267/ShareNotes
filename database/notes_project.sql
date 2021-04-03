-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 08:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `n_id` int(10) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `n_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `n_image` varchar(255) NOT NULL,
  `n_file` varchar(255) NOT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`n_id`, `s_id`, `n_name`, `course`, `dept`, `description`, `n_image`, `n_file`, `approval`) VALUES
(4, '3', 'biology', 'genetics', 'science', 'sdjkfjgtijyihktmhk', '', '', 1),
(36, 'EEE67676', 'Electronics', 'EEE121', 'EEE', 'Electronics is the study of how to control the flow of electrons.', '555-timer-in-Astable-mode-proteus-simulation.jpg', 'L1 Chapter 1_S21617.ppt', 0),
(37, 'EEE67676', 'basic Electronics', 'EEE223', 'EEE', 'Electronics is the study of how to control the flow of electrons. It deals with circuits that are made with parts called components and connecting wires that control the flow of electricity and direct it to do useful things.', '555-timer-in-Astable-mode-proteus-simulation.jpg', 'L1 Chapter 1_S21617.ppt', 0),
(38, 'CSE190283', 'note1', 'English', 'english', 'English is an International language......', 'doctor.png', '', 1),
(40, 'CSE190283', 'chemistry1', 'chemistry1', 'chemistry', 'esfgydfhygf', 'd8e5f6dc60fead732d37cacadf192e50.jpg', '', 1),
(41, 'EEE24465', 'physics2', 'physics2', 'CSE', 'The average speed is the average of speed of a moving body for the overall distance that it has covered.', 'a2db56de331d3696ff37e052ec5d42e3.png', 'physics-formulas.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_id`, `dept`, `u_name`, `address`, `email`, `password`, `approval`) VALUES
(8, 'rashed', '2', 'cse', 'universityname', 'nai', 'rashed@xfg.df', 'abc123', 1),
(9, 'Abdur Rahim', 'EEE23454333', 'EEE', 'uits', '1/2 uttar badda', 'rahim@gmail.com', 'rahim123', 1),
(11, 'Rubina', 'CSE2345', 'CSE', 'uits', '3/4kawranbajar dhaka', '', 'ac68a6ae84e6214f9514a560ddc68290', 1),
(12, 'Farhana sumi', 'ECE24718', 'Math', 'AIUB', '3/3uttara,dhaka', 'sumi@gmail.com', 'a52eb3f5da9d81b0d010bc83ad95c9dc', 0),
(13, 'Jannatul Nayema', 'CSE111222', 'CSE', 'uits', '34/2 Bashundhara R/A', 'nayema@gmail.com', 'ea8bde6e362e0fe953ea3713f4e7e6fc', 0),
(14, 'Lamia Akter', 'EEE34545', 'EEE', 'AIUB', '34/3chawkbajar,Dhaka', 'lamia@gmail.com', 'c02ed5247c2361f229d150d0f0d5caf7', 1),
(15, 'Emran Hossain', 'CSE12334', 'CSE', 'AIUB', 'a/c Banasree,Dhaka', 'emran@gmail.com', '02c2ec1e3f21e97dd5ac747147a141e0', 0),
(16, 'Farjana', 'ECE2363', 'ECE', 'uits', 'panthapath,Dhaka', 'farjana@gmail.com', '812df2b03649824758333a931d930d5c', 0),
(17, 'Rakib ', 'EEE23429', 'EEE', 'uits', '33/3uttara,dhaka', 'rakib@gmail.com', 'c6a12dd17a3aa185b3d23b77b36e8a80', 1),
(21, 'Sajib dewan', 'EEE67676', 'EEE', 'uits', '34/2Dhanmondi', 'sajib@gmail.com', '1622d00ad661038a57592db7959a1da8', 1),
(22, 'Nabila', 'CSE387276', 'CSE', 'uits', '45/1dhanmondi', 'nabila@gmail.com', '9c8aaad368f10f55699450d759a72501', 1),
(24, 'Alamin', 'CSE190283', 'CSE', 'AIUB', 'r/a panthapath,Dhaka', 'alamin@gmail.com', '2513141d3dae5213d9a78e748a76ee45', 1),
(25, 'Arnab Hasan', 'ECE23637', 'ECE', 'uits', 'a/9 Banasree,Dhaka', 'arnab@gmail.com', '5a2ab1c31e56a86d224d567249461990', 1),
(26, 'Kobir', 'CSE192393', 'CSE', 'uits', '2/3banasree,dhaka', 'kobir@gmail.com', '75708129c87db59c25e31243c2d01139', 1),
(27, 'limon', 'EEE24465', 'EEE', 'uits', '33/3uttara,dhaka', 'limon@gmail.com', 'df80f33867bde01b50824cf77c9ab592', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

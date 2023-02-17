-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 01:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25


--
-- Database: `siakad`
--
CREATE DATABASE IF NOT EXISTS `siakad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `siakad`;

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `nim` varchar(18) NOT NULL,
  `first_na` varchar(25) NOT NULL,
  `last_na` varchar(30) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `birth_loc` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `std_addr` varchar(250) NOT NULL,
  `std_email` varchar(30) NOT NULL,
  `std_phone` varchar(16) NOT NULL,
  `dad_na` varchar(50) DEFAULT NULL,
  `dad_addr` varchar(250) DEFAULT NULL,
  `dad_phone` varchar(16) DEFAULT NULL,
  `mom_na` varchar(50) DEFAULT NULL,
  `mom_addr` varchar(250) DEFAULT NULL,
  `mom_phone` varchar(16) DEFAULT NULL,
  `std_photo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`nim`);

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`nim`, `first_na`, `last_na`, `gender`, `birth_loc`, `birth_date`, `std_addr`, `std_email`, `std_phone`, `dad_na`, `dad_addr`, `dad_phone`, `mom_na`, `mom_addr`, `mom_phone`, `std_photo`, `created_at`, `updated_at`) VALUES
('1152125001', 'Henry', 'Kim', 'Laki-Laki', 'Earth', '1998-01-16', 'AAAA', 'henryk@gmail.com', '+62', NULL, NULL, NULL, NULL, NULL, NULL, 'avatar5.png', '2023-01-16 03:08:23', '2023-01-16 03:08:23'),
('1152125002', 'M', 'Ramdan Pujianto', 'Laki-Laki', 'Earth', '1999-01-01', 'Jln. Jalan', 'mramdan@example.com', '+62', NULL, NULL, NULL, NULL, NULL, NULL, 'avatar.png', '2023-01-27 23:13:42', '2023-01-27 23:13:42');

-- --------------------------------------------------------




--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `username` varchar(25) NOT NULL,
  `first_na` varchar(30) NOT NULL,
  `last_na` varchar(60) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(18) NOT NULL,
  `level` enum('1','2','3','4','5') NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`username`);

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`username`, `first_na`, `last_na`, `phone`, `email`, `password`, `level`, `photo`, `created_at`, `updated_at`) VALUES
('admin', 'Admin', 'Siakad', '+6282281190072', 'adminsiakad@siakad.gov', 'admin', '1', 'avatar5.png', '2023-01-04 00:27:50', '2023-01-04 00:27:50'),
('chikachiki', 'Chika', 'Chiki', '+62', 'chikachiki@gmail.com', 'chikachiki', '5', '', '2023-01-09 22:00:41', '2023-01-09 22:00:41'),
('guest', 'Tn.', 'Guest', '+62', 'guest1@gmail.com', 'guest', '5', '', '2023-01-06 02:05:00', '2023-01-06 02:05:00'),
('mabdulfajar', 'Muhammad', 'Abdul Fajar', '+62', 'mabdulfajar@example.com', 'mabdulfajar', '5', '', '2023-01-27 22:03:41', '2023-01-27 22:03:41'),
('moderator', 'Tn.', 'Moderator', '+62', 'moderator1@gmail.com', 'moderator', '2', '', '2023-01-06 02:02:50', '2023-01-06 02:02:50'),
('pujianto', 'Muhammad', 'Ramdan Pujianto', '+62', 'pujianto@gmail.com', 'pujianto', '5', '', '2023-01-06 14:30:48', '2023-01-06 14:30:48'),
('siakademik', 'SI', '', '+62', 'siakaddemik@gmail.com', 'siakademik', '5', '', '2023-01-27 00:12:38', '2023-01-27 00:12:38'),
('student', 'Tn.', 'Student', '+62', 'student1@gmail.com', 'student', '4', '', '2023-01-06 02:04:29', '2023-01-06 02:04:29'),
('teacher', 'Tn.', 'Teacher', '+62', 'teacher1@gmail.com', 'teacher', '3', '', '2023-01-06 02:00:48', '2023-01-06 02:00:48');



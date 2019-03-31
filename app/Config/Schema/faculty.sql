-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 03:13 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL COMMENT 'Firstname',
  `middlename` varchar(255) DEFAULT NULL COMMENT 'Middlename',
  `lastname` varchar(255) NOT NULL COMMENT 'Lastname',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `date_hired` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL COMMENT 'Address',
  `gender` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `firstname`, `middlename`, `lastname`, `email`, `username`, `password`, `birthday`, `date_hired`, `address`, `gender`, `contact`, `deleted_date`, `created`, `modified`) VALUES
(1, 'menandro', '', 'oba', 'obamenandro@gmail.com', 'obamenandro', 'd033e22ae348aeb5660fc2140aec35850c4da997', '03/05/2019', '03/26/2019', '1076 Tensuan Site Poblacion', 1, 9154386367, NULL, '2019-03-31 13:46:21', '2019-03-31 13:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_students`
--

CREATE TABLE `faculty_students` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE `faculty_subjects` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_subjects`
--

INSERT INTO `faculty_subjects` (`id`, `faculty_id`, `subject_id`, `deleted_date`, `created`, `modified`) VALUES
(6, 8, 4, NULL, '2019-03-24 11:31:03', '2019-03-24 11:31:03'),
(7, 8, 5, NULL, '2019-03-24 11:31:03', '2019-03-24 11:31:03'),
(8, 1, 1, NULL, '2019-03-31 13:46:21', '2019-03-31 13:46:21'),
(9, 1, 2, NULL, '2019-03-31 13:46:21', '2019-03-31 13:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `first` int(11) DEFAULT '0',
  `second` int(11) DEFAULT '0',
  `third` int(11) DEFAULT '0',
  `fourth` int(11) DEFAULT '0',
  `final` int(11) DEFAULT '0',
  `grade_id` int(11) NOT NULL DEFAULT '0',
  `subject_id` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `deleted_date`, `student_id`, `first`, `second`, `third`, `fourth`, `final`, `grade_id`, `subject_id`, `created`, `modified`) VALUES
(21, NULL, 1, 90, 90, 90, 90, 90, 10, 1, '2019-03-31 13:03:51', '2019-03-31 13:03:51'),
(22, NULL, 1, 90, 90, 90, 90, 90, 10, 2, '2019-03-31 13:03:51', '2019-03-31 13:03:51'),
(23, NULL, 1, 90, 90, 90, 90, 90, 10, 3, '2019-03-31 13:03:51', '2019-03-31 13:03:51'),
(24, NULL, 1, 90, 90, 90, 90, 90, 10, 4, '2019-03-31 13:03:51', '2019-03-31 13:03:51'),
(25, NULL, 1, 90, 90, 100, 90, 93, 10, 5, '2019-03-31 13:03:51', '2019-03-31 13:03:51'),
(26, NULL, 1, 90, 90, 100, 90, 93, 9, 5, '2019-03-31 13:03:51', '2019-03-31 13:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL COMMENT 'Firstname',
  `middlename` varchar(255) NOT NULL COMMENT 'Middlename',
  `lastname` varchar(255) NOT NULL COMMENT 'Lastname',
  `student_id` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL COMMENT 'Address',
  `contact` bigint(20) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_enrolled` varchar(255) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `middlename`, `lastname`, `student_id`, `password`, `address`, `contact`, `birthday`, `gender`, `guardian`, `grade`, `status`, `date_enrolled`, `deleted_date`, `created`, `modified`) VALUES
(1, 'Menandro', 'Calangian', 'Oba', 2222, 'd033e22ae348aeb5660fc2140aec35850c4da997', '1076 Tensuan Site Poblacion', 9154386367, '03/06/2019', 1, 'Menandro', 10, 2, '03/26/2019', NULL, '2019-03-24 15:34:12', '2019-03-24 16:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `units` int(11) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Created Date',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `deleted_date`, `created`, `modified`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, '2019-03-24 04:56:42', '2019-03-24 04:56:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_students`
--
ALTER TABLE `faculty_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty_students`
--
ALTER TABLE `faculty_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

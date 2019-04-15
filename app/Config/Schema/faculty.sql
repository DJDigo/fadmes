-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 02:34 PM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL COMMENT 'Firstname',
  `middlename` varchar(255) NOT NULL COMMENT 'Middlename',
  `lastname` varchar(255) NOT NULL COMMENT 'Lastname',
  `suggestion` varchar(255) NOT NULL COMMENT 'Suggestion',
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

INSERT INTO `students` (`id`, `firstname`, `middlename`, `lastname`, `suggestion`, `student_id`, `password`, `address`, `contact`, `birthday`, `gender`, `guardian`, `grade`, `status`, `date_enrolled`, `deleted_date`, `created`, `modified`) VALUES
(1, 'Menandro', 'Calangian', 'Oba', 'hello ', 2222, 'd033e22ae348aeb5660fc2140aec35850c4da997', '1076 Tensuan Site Poblacion', 9154386367, '03/06/2019', 1, 'Menandro', 10, 2, '03/26/2019', NULL, '2019-03-24 15:34:12', '2019-04-15 14:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

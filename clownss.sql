-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2026 at 01:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clownss`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `project1` varchar(300) NOT NULL,
  `project2` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `project1`, `project2`) VALUES
(1, 'Alex Hall', 'made jobs page', 'made .inc files, settings.php and about database'),
(2, 'Jack Goodsell', 'made about page', 'wip'),
(3, 'Callum Rochfort', 'made apply page', 'wip'),
(4, 'Thomas Crawley', 'made index page', 'wip');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `job_ref_no` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `aus_citizen` tinyint(1) DEFAULT NULL,
  `indigenous_aus` tinyint(1) DEFAULT NULL,
  `work_visa` varchar(20) DEFAULT NULL,
  `street_addr` varchar(100) DEFAULT NULL,
  `suburb` varchar(20) DEFAULT NULL,
  `state` char(3) DEFAULT NULL,
  `postecode` int(4) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `SC001_skill_1` tinyint(1) DEFAULT NULL,
  `SC001_skill_2` tinyint(1) DEFAULT NULL,
  `SC001_skill_3` tinyint(1) DEFAULT NULL,
  `SC001_skill_4` tinyint(1) DEFAULT NULL,
  `SC001_skill_5` tinyint(1) DEFAULT NULL,
  `SC002_skill_1` tinyint(1) DEFAULT NULL,
  `SC002_skill_2` tinyint(1) DEFAULT NULL,
  `SC002_skill_3` tinyint(1) DEFAULT NULL,
  `SC002_skill_4` tinyint(1) DEFAULT NULL,
  `SC002_skill_5` tinyint(1) DEFAULT NULL,
  `other_skills` text DEFAULT NULL,
  `status` char(7) DEFAULT 'NEW'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`job_ref_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `job_ref_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

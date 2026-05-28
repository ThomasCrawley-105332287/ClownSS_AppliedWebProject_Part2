-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2026 at 10:07 AM
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
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `eoi_num` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `aus_citizen` tinyint(1) DEFAULT NULL,
  `indigenous` tinyint(1) DEFAULT NULL,
  `work_visa` varchar(20) DEFAULT NULL,
  `street_addr` varchar(100) DEFAULT NULL,
  `suburb` varchar(20) DEFAULT NULL,
  `state` char(26) DEFAULT NULL,
  `postcode` int(4) DEFAULT NULL,
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
  `status` char(7) DEFAULT 'NEW',
  `job_ref_num` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `reference_number` varchar(5) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `short_description` text NOT NULL,
  `salary` varchar(50) NOT NULL,
  `reports_to` varchar(100) NOT NULL,
  `responsibilities` text NOT NULL,
  `essential_requirements` text NOT NULL,
  `preferable_requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `reference_number`, `job_title`, `short_description`, `salary`, `reports_to`, `responsibilities`, `essential_requirements`, `preferable_requirements`) VALUES
(1, 'SC001', 'Smart Transport Systems Analyst', 'Support the design and delivery of digital transport platforms for local councils, integrating real-time traffic data, public transit feeds, and connected infrastructure into unified urban mobility dashboards.', '$85,000 – $98,000', 'Senior Transport Consultant', 'Develop and maintain data pipelines integrating GPS feeds and transit APIs.\r\nAnalyse transport network data.\r\nPrepare technical documentation.\r\nCollaborate with software developers.\r\nSupport client workshops.\r\nContribute to proposal writing.', 'Bachelor degree in related field.\r\nMinimum 2 years experience.\r\nPython or R proficiency.\r\nExperience with SQL databases.\r\nStrong written communication skills.', 'Experience with GIS systems.\r\nKnowledge of SCATS systems.\r\nFamiliarity with transport modelling tools.'),
(2, 'SC002', 'Urban Energy Monitoring Consultant', 'Lead client engagements focused on the deployment and optimisation of energy monitoring platforms for smart city infrastructure, helping councils and industry partners reduce consumption, improve grid resilience, and meet sustainability targets.', '$105,000 – $122,000', 'Practice Lead – Energy & Utilities', 'Manage end-to-end delivery of energy monitoring platform projects across municipal and commercial client sites.\r\nAssess client energy infrastructure and develop specifications for IoT sensor networks, SCADA integrations, and data ingestion pipelines.\r\nInterpret energy consumption and generation data to produce insights informing council sustainability strategies.\r\nLiaise with council energy managers, sustainability officers, and IT teams to ensure platform adoption and ongoing value.\r\nDevelop case studies, reports, and presentations for business development and internal knowledge sharing.\r\nMentor junior analysts and review technical outputs across the energy monitoring practice.', 'Bachelor degree in Electrical Engineering, Energy Systems, Environmental Science, or equivalent.\r\nMinimum 4 years experience in energy consultancy, utilities management, or smart infrastructure roles.\r\nDemonstrated knowledge of building energy management systems or industrial IoT monitoring platforms.\r\nStrong understanding of energy metering protocols such as Modbus, BACnet, or MQTT.\r\nProven ability to manage client relationships and deliver projects to time and budget.', 'Experience working within or alongside local government or public sector bodies.\r\nFamiliarity with sustainability reporting standards such as NABERS or ISO 50001.\r\nKnowledge of renewable energy integration and demand response programs.\r\nExposure to cloud-based energy platforms such as EnergyCAP or Wattics.\r\nRelevant professional certification such as Certified Energy Manager or Engineers Australia membership.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$LkC1DJbomIVNUodxmsNgCeTqLWsgOB6rS4kuoG02XGcwPWbM.KEkC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`eoi_num`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `reference_number` (`reference_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `eoi_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

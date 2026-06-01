-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2026 at 03:47 AM
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
  `name` varchar(25) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `contribution1` text NOT NULL,
  `contribution2` text NOT NULL,
  `quote` text NOT NULL,
  `translation` text NOT NULL,
  `dream_job` varchar(100) NOT NULL,
  `coding_snack` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `student_id`, `contribution1`, `contribution2`, `quote`, `translation`, `dream_job`, `coding_snack`, `hometown`) VALUES
(1, 'Alex Hall', '105419083', 'jobs.html, jobs-styles.css, main_style_sheet.css', 'header.inc, nav.inc, footer.inc, settings.php, about page linked to database', '\"Pǎo zài chē qián de rén huì lèi, pǎo zài chē hòu de rén huì jīnpílìjìn.\"', '\"Man who runs in front of car gets tired. Man who runs behind car gets exhausted.\"', 'IT Job', 'Coffee', 'Pakenham'),
(2, 'Thomas Crawley', '105332287', 'Index page, jira management, GitHub management', 'Made the eoi table, application.inc,  and ability to upload the application to the eoi table through the process_eoi.php page', '\"vivimusque moriemurque item fratres\"', '\"we live and die as brothers\"', 'Lead engineer for asteroid mining company', 'Pizza flavoured shapes', 'Park Orchards'),
(3, 'Callum Rochfort', '106463515', 'Apply page, apply style sheet, main_style_sheet.css', 'Made the non-login functionality of the manage page (eoi table viewer, table sorting and filtering, eoi deletion by job reference, ability to change eoi status in the viewer), did the CSS styling for manage page, added some user input validation in the eoi process page and changed the apply page to better meet the requirements and feedback of assignment 1.', 'این نیز بگذرد', 'This too shall pass', '	Machine Ethicist', 'Coffee', 'Resevoir'),
(4, 'Jack Goodsell', '106016142', 'about.html, about-styles.css, main_style_sheet.css', 'Jobs table in the MySQL database, added the job data from the original jobs page, converted jobs.php to load all job information dynamically from the database, added a search bar to jobs.php that allows jobs to be searched, users table for manager authentication, login.php and logout.php and set up session-based login protection for manage.php, admin/admin account required for marker access and implemented secure login checks.', '\"A szeretleken nagyjából azt értem, hogy hiányzol akkor is, ha itt vagy.”', '\"What I mean by love you, is that I miss you even if you’re here\"', 'Audio Engineer', 'Bounty', 'Woodend');

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

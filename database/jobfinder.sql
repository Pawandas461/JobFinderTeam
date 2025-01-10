-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 07:47 PM
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
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `resume_type` enum('uploaded','resume') NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_id`, `candidate_id`, `resume_id`, `resume_type`, `apply_date`, `status`) VALUES
(1, 2, 3, 2, 'resume', '2025-01-05 14:19:18', 3),
(2, 4, 5, 4, 'resume', '2025-01-07 01:26:25', 2),
(3, 1, 4, 3, 'resume', '2025-01-10 01:44:01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'technical_it_jobs'),
(2, 'creative_jobs'),
(3, 'healthcare_jobs'),
(4, 'finance_business'),
(5, 'education_training'),
(6, 'sales_marketing'),
(7, 'logistics_operations'),
(8, 'engineering_jobs');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `trade_number` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `web_link` varchar(255) DEFAULT NULL,
  `company_experience` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_address` text NOT NULL,
  `owner_contact` varchar(20) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `company_type` enum('Private','Public','LLP','Startup') NOT NULL,
  `office_image` varchar(255) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_address`, `trade_number`, `email`, `phone`, `web_link`, `company_experience`, `owner_name`, `owner_address`, `owner_contact`, `owner_email`, `company_type`, `office_image`, `brand_logo`, `password`, `auth`, `created_at`, `updated_at`) VALUES
(1, 'OyeLabs', 'Hariyana', 'SDJGH634HD', 'oyelabs@gmail.com', '9876543210', 'https://github.com/Pawandas461/JobFinderTeam', 6, 'Pawan Das', 'Madarihat', '8765432109', 'pawan@gmail.com', 'Private', 'public/office_images/MRqlLGphGpCYlEo73KDTyY4aSsLRYYUl2XFbamFu.jpg', 'public/brand_logos/u60tIKpkztRGFJtwwtFqa06T7YbMiBuXkWUHpdK1.jpg', '123abc', 1, '2024-12-30 18:51:08', '2024-12-30 18:51:08'),
(2, 'Ejob India', 'Kolkata', '545665676', 'ejobindia@gmail.com', '9831314659', 'https://www.ejobindia.com/', 1, 'Gargi Pramanik', 'Santipur', '7364764647', 'gargi@ejobindia.com', 'Private', 'public/office_images/Rkw0URH63nHeXExXwzz8ItATg86yVSCiGoiI8Zkk.jpg', 'public/brand_logos/yosZLcEEOb12mRssjp8IbBhxmvR9gOFtyZHDX1UN.jpg', '1234abcd', 1, '2025-01-03 05:15:11', '2025-01-03 05:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_responsibilities` text NOT NULL,
  `job_mode` varchar(100) NOT NULL,
  `job_role` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `num_of_candidate` int(11) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `required_skills` varchar(100) NOT NULL,
  `min_salary` int(11) NOT NULL,
  `mex_salary` int(11) NOT NULL,
  `apply_by` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `job_title`, `job_responsibilities`, `job_mode`, `job_role`, `experience`, `num_of_candidate`, `qualification`, `required_skills`, `min_salary`, `mex_salary`, `apply_by`, `created_at`, `created_by`, `status`) VALUES
(1, 1, 'PHP Development', 'PHP Development and backend Development', 'WFH', 'Backend Development', '1', 20, 'BCA, MCA, BTCH', 'PHP, C, Web Development', 10000, 15000, '2025-01-24', '2025-01-02 12:11:55', 1, 2),
(2, 5, 'Java Developer', 'Java Development and backend Development', 'WFO', 'Software Engineer', '2', 15, 'BCA, MCA, BTCH', 'JAVA, C, Web Development', 10000, 15000, '2025-01-24', '2025-01-02 12:17:28', 1, 2),
(3, 1, 'Python Developer', 'web development, backend development', 'WFH', 'Backend Developer', '2', 10, 'BCA, MCA', 'python, django', 15000, 20000, '2025-01-25', '2025-01-02 23:01:49', 1, 2),
(4, 6, 'sales manager', 'bike', 'WFO', 'sale', '2', 1, 'hs', 'communication skills', 10000, 15000, '2025-01-11', '2025-01-04 13:19:06', 2, 2),
(5, 3, 'Medical Representative', 'Selected intern\'s day-to-day responsibilities include:\r\n\r\n1. Conducting market research to identify potential customers and trends in the healthcare industry\r\n2. Assisting in developing and maintaining relationships with healthcare professionals and key stakeholders\r\n3. Educating healthcare providers on our products and services through sales presentations and demonstrations', 'remote', 'sales', 'Freshers', 5, 'MBA', 'Effective Communication,\r\nMarketing,\r\nSales,\r\nSales pitch', 10000, 15000, '2025-01-09', '2025-01-05 23:47:13', 2, 2),
(6, 4, 'Finance', '1. Perform comprehensive equity research and stock market analysis to uncover potential investment opportunities and assess associated risks.\r\n2. Support the creation and management of diversified, well-balanced portfolios tailored to clients\' risk tolerance and financial objectives.\r\n3. Collaborate with financial planners to design holistic financial plans that address retirement planning, tax strategies, and estate planning.\r\n4. Execute market analysis, financial modeling, and other research-focused projects and assignments as required.', 'remote', 'Finance office', '2 year', 2, 'MBA', 'Communication, Ms Office', 25000, 30000, '2025-01-30', '2025-01-07 01:31:05', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pursuing_education_status` enum('yes','no') NOT NULL,
  `pursuing_education` text DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `stream` varchar(100) DEFAULT NULL,
  `college` varchar(255) NOT NULL,
  `experience_status` enum('yes','no') NOT NULL,
  `experience` text DEFAULT NULL,
  `skills` text NOT NULL,
  `known_languages` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `candidate_id`, `address`, `pursuing_education_status`, `pursuing_education`, `degree`, `stream`, `college`, `experience_status`, `experience`, `skills`, `known_languages`, `created_at`) VALUES
(2, 3, 'Coochbehar, Coochbehar, 8358743', 'yes', 'BCA', 'BCA', 'Computer Science', 'IGNOU', 'no', 'Freshers', 'PHP, C', 'Bengali, English, Hindi', '2025-01-05 16:26:12'),
(3, 4, 'Dinhata, Coochbehar, 736135', 'yes', 'BCA', 'BCA', 'computer science', 'IGNOU', 'no', NULL, 'C, Ghum, Batela', 'Urdu, afgan, turki, telegu', '2025-01-07 01:20:49'),
(4, 5, 'Medinipur, kolkata,7467343', 'yes', 'MTECH', 'BTECH', 'computer science', 'ABC', 'yes', '2', 'C, C++, PHP', 'Bengali, English, Hindi', '2025-01-07 01:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_resumes`
--

CREATE TABLE `uploaded_resumes` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` text NOT NULL,
  `auth` tinyint(1) DEFAULT 1,
  `user_type` varchar(50) DEFAULT 'candidate',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `dob`, `gender`, `phone`, `password`, `auth`, `user_type`, `created_at`) VALUES
(1, 'pawan@gmail.com', 'Pawan Das', '2003-05-16', 'male', 7478991407, '123', 1, 'candidate', '2024-12-28 12:46:07'),
(2, 'admin@gmail.com', 'Admin Das', '2024-12-19', 'male', 9099888777, '123', 1, 'admin', '2024-12-30 05:18:26'),
(3, 'deba@gmail.com', 'Debashis Das', '2025-03-05', 'male', 8837487367, '123', 1, 'candidate', '2025-01-05 16:22:44'),
(4, 'subham@gmail.com', 'subham Roy', '2025-01-23', 'male', 8767655644, '123', 1, 'candidate', '2025-01-07 06:37:53'),
(5, 'prabir@gmail.com', 'Prabir khatua', '2025-01-24', 'male', 8547643654, '123', 1, 'candidate', '2025-01-07 06:54:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_resumes`
--
ALTER TABLE `uploaded_resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploaded_resumes`
--
ALTER TABLE `uploaded_resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 04:23 PM
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
-- Database: `alo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `abt_id` int(10) NOT NULL,
  `abt` text NOT NULL,
  `mission` text NOT NULL,
  `vission` text NOT NULL,
  `abt_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`abt_id`, `abt`, `mission`, `vission`, `abt_img`) VALUES
(1, 'ALO- Aid for Landless Outcasts is a non-government organization to serve the Refugees of Rohingya Camp. There was a time more than 700,000 Rohingya fled Myanmar on 25 August 2017, crossing the border to Bangladesh, and then the honorable Prime Minister Sheikh Hasina took the bold decision to provide them shelter for the sake of humanity. After that ALO steps forward to manage the camp and the people around there.', 'ALO works around the Refugees to save lives, defeat poverty and achieve social justice. A world free from all forms of exploitation and discrimination where everyone has the opportunity to realize their potential. ', 'We seek a world of hope, inclusion, and social justice, where poverty has been overcome and all people live in dignity and security with proper identity.', 'abt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(100) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_pass` varchar(100) NOT NULL,
  `a_contact` varchar(255) NOT NULL,
  `a_token` varchar(100) NOT NULL,
  `a_img` text NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_pass`, `a_contact`, `a_token`, `a_img`, `post`) VALUES
(1, 'Mila', 'nusratshameema@gmail.com', '1234', '1234', '1', '1.jpg\n', 'Backend Developer'),
(2, 'Abiha', 'abihatabassum8@gmail.com', '12345', '1234', '2', '2.jpeg', 'Content Writer'),
(3, 'Rahat', 'hazratalirahat0@gmail.com', '1234', '1234', '3', '3.jpeg', 'Frontend Developer'),
(4, 'Ishara', 'ishara.ajanta@gmail.com', '1234', '1234', '4', '7.jpg', 'UI/UX Designer'),
(5, 'Turjo', 'tasinturjo007@gmail.com', '1234', '1234', '5', '5.jpeg', 'UI/UX Designer'),
(6, 'Apon', 'Aponbd@yahoo.com', '1234', '1234', '6', '6.jpeg', 'Intern(unpaid)');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `des`, `img`) VALUES
(1, 'Health', 'our mission is to improve the health and livelihood of children and families of Rohingyas', 'blog1.jpg'),
(2, 'Education', 'Volunteer of ALO in the camp area to serve the surrounding people', 'blog2.jpg'),
(3, 'Sanitation', 'Ensuring to Live a healthier life with a clean and tidy toilet in the camp areas', 'blog3.jpg'),
(4, 'Medical Checkup', 'Always give primary health support to the Rohingyas and assure them of their better treatment from us.', 'blog4.jpg'),
(5, 'Pure Water', 'Assure to provide pure and unpolluted water in the camps.', 'blog5.jpg'),
(6, 'Education', 'Give them proper educational and activity supports from the organization.', 'blog6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `b_info`
--

CREATE TABLE `b_info` (
  `id` int(11) NOT NULL,
  `baby_name` varchar(50) NOT NULL,
  `baby_dob` date NOT NULL,
  `med_condition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_info`
--

INSERT INTO `b_info` (`id`, `baby_name`, `baby_dob`, `med_condition`) VALUES
(1, 'asd', '2022-09-26', 'good'),
(2, 'asd', '2022-09-28', 'good'),
(3, 'mishu', '2022-09-10', 'bad'),
(4, 'mila', '2022-10-02', 'good'),
(5, 'mila', '2022-10-02', 'good'),
(6, 'asd', '2022-01-18', 'good'),
(7, 'mila', '2022-10-31', 'ok'),
(8, 'mila', '2022-11-03', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

CREATE TABLE `cause` (
  `id` int(10) NOT NULL,
  `food` text NOT NULL,
  `water` text NOT NULL,
  `health` text NOT NULL,
  `edu` text NOT NULL,
  `residence` text NOT NULL,
  `social` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cause`
--

INSERT INTO `cause` (`id`, `food`, `water`, `health`, `edu`, `residence`, `social`) VALUES
(1, 'To measure the food security level of Rohingya refugees in the camp area', 'Build permanent and sustainable facilities and clean water access to promote healthy life', 'To give the Rohingya people medical facilities with proper data history.', 'To ensure the primary educational facilities of the refugees.', 'To ensure their camp area clean and hygienic', 'To identify the livelihood activities engaged by Rohingya refugees.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'mila', 'mila@gmail.com', 'gtv', 0),
(2, 'mila', 'mila@gmail.com', 'gtv', 0),
(3, 'mila', 'mila@gmail.com', 'gtv', 0),
(4, '', '', '', 0),
(5, '', '', '', 0),
(6, '', '', '', 0),
(7, 'mila', 'mila@gmail.com', 'dfsdv', 0),
(8, '', 'mila@gmail.com', '', 0),
(9, '', 'mila@gmail.com', '', 0),
(10, '', 'mila@gmail.com', '', 0),
(11, '', 'mila@gmail.com', '', 0),
(12, '', 'mila@gmail.com', '', 0),
(13, '', '', '', 0),
(14, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_amnt` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `d_name`, `d_email`, `d_amnt`) VALUES
(67, 'Rahim', 'test@test.com', '5.00'),
(72, 'karim', 'test@test.com', '1.00'),
(75, 'Shafin', 'test@test.com', '2.00'),
(76, 'Rohan', 'test@test.com', '9.00'),
(77, 'Ria', 'test@test.com', '1.00'),
(78, 'Mr. ABC', 'test@test.com', '1.00'),
(79, 'Mr. ABC', 'test@test.com', '1.00'),
(80, 'Mr. ABC', 'test@test.com', '87.00');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `e_id` int(100) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_age` tinyint(20) NOT NULL,
  `e_instructor` varchar(50) NOT NULL,
  `e_camp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`e_id`, `e_name`, `e_age`, `e_instructor`, `e_camp`) VALUES
(1, 'mila', 21, 'don', 1),
(2, 'mila', 0, '', 0),
(3, 'mila', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(100) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_history` varchar(255) NOT NULL,
  `h_issue` varchar(255) NOT NULL,
  `h_doc` varchar(50) NOT NULL,
  `h_campno` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `h_name`, `h_history`, `h_issue`, `h_doc`, `h_campno`) VALUES
(1, 'mila', 'typhoid', 'fever', 'dan', 1),
(2, 'mila', 'typhoid', 'fever', 'dan', 1),
(3, 'abiha', 'fever', 'good', 'adadstgf', 25);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `mail`) VALUES
(1, 'mila@gmail.com'),
(2, 'mila@gmail.com'),
(3, ''),
(4, ''),
(5, ''),
(6, 'mila@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(110) NOT NULL,
  `person_name` varchar(60) NOT NULL,
  `person_dob` date NOT NULL,
  `dad_name` varchar(60) NOT NULL,
  `mom_name` varchar(60) NOT NULL,
  `person_gender` enum('female','male') NOT NULL,
  `person_status` enum('single','married','widowed') NOT NULL,
  `p_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `person_name`, `person_dob`, `dad_name`, `mom_name`, `person_gender`, `person_status`, `p_img`) VALUES
(27, 'Jack', '2022-11-02', 'abc', 'cdf', 'male', 'single', '1'),
(28, 'jhon', '2022-11-01', 'abc', 'cdf', 'male', 'single', '2'),
(30, 'Apon', '2022-11-03', 'asad', 'cdf', 'male', 'single', '3'),
(36, 'Rita', '0000-00-00', 'a', 'b', 'female', 'married', '4');

-- --------------------------------------------------------

--
-- Table structure for table `raise`
--

CREATE TABLE `raise` (
  `id` int(11) NOT NULL,
  `raise1` varchar(70) NOT NULL,
  `goal1` varchar(80) NOT NULL,
  `r1_title` varchar(100) NOT NULL,
  `r1_desc` text NOT NULL,
  `img` text NOT NULL,
  `annual` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raise`
--

INSERT INTO `raise` (`id`, `raise1`, `goal1`, `r1_title`, `r1_desc`, `img`, `annual`) VALUES
(1, '100000', '500000', 'Employment Donation ', 'For the betterment of employment progress', '6.jpg', '20%'),
(2, '500000', '130000', 'Educational Donation', 'For the betterment of educational progress', '4.jpg', '38%'),
(3, '90000', '400000', 'Medical Donation', 'For the betterment of medical progress', '5.jpg', '23%');

-- --------------------------------------------------------

--
-- Table structure for table `r_slider`
--

CREATE TABLE `r_slider` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_name`, `s_img`) VALUES
(9, 'man', '4.jpg'),
(26, 'man', '5.jpg'),
(27, 'man', '6.jpg'),
(28, 'man', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `reason`) VALUES
(1, 'mila', 'mila@gmail.comv', 'gghhhhh'),
(2, 'mila', 'mila@gmail.com', 'asdfg'),
(3, '', 'mila@gmail.com', ''),
(4, '', 'mila@gmail.com', ''),
(5, '', 'mila@gmail.com', ''),
(6, '', 'mila@gmail.com', ''),
(7, '', 'mila@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `w_name` varchar(50) NOT NULL,
  `w_age` tinyint(20) NOT NULL,
  `w_gender` varchar(191) NOT NULL,
  `work` text NOT NULL,
  `w_incharge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `w_name`, `w_age`, `w_gender`, `work`, `w_incharge`) VALUES
(1, 'mila', 12, 'female', 'a', 'don'),
(2, 'mila', 12, '', 'as', 'don'),
(3, 'ala', 2, '', 'h', 'don'),
(6, 'mila', 23, 'on', 'd', 'don'),
(7, 'mila', 22, 'male', 'ff', 'don');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`abt_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_info`
--
ALTER TABLE `b_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raise`
--
ALTER TABLE `raise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_slider`
--
ALTER TABLE `r_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `abt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `b_info`
--
ALTER TABLE `b_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cause`
--
ALTER TABLE `cause`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `e_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `raise`
--
ALTER TABLE `raise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_slider`
--
ALTER TABLE `r_slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

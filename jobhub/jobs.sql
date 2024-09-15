-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 03:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `psition` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`, `psition`) VALUES
(1, 'Accountacy', '2024-09-09', '5 Open Position'),
(3, 'Bank', '2024-09-10', '10 position'),
(5, 'Food', '2024-09-11', '11 Open Position'),
(6, 'Agriculture', '2024-09-10', '5 open position'),
(7, 'Hospitality', '2024-09-11', '2 Open Position'),
(8, 'N.G.O', '2024-09-11', ''),
(9, 'Data entry', '2024-09-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `date`, `position`) VALUES
(2, 'Candid Dealings ltd', 'Dhaka,Bangladeshh', '2024-09-05', '6 Open Position'),
(3, 'Basundhara', 'Dhaka', '2024-09-09', '10 Open Position'),
(5, 'City', 'hhhv', '2024-09-09', '10 Open Position'),
(8, 'Cocacola', 'Cumilla', '2024-09-09', '5 Open Position'),
(12, 'Asha ltd', 'Cumilla', '2024-09-10', '5 Open Position'),
(13, 'Square LTD', 'Dhaka', '2024-09-05', '10 position'),
(14, 'Bargarr', 'vvvv', '2024-09-16', '5 Open Position'),
(15, 'Nippon Ltd', 'Dhaka', '2024-09-09', ''),
(22, 'Dhanshiri Ltd', 'Dhaka', '2024-09-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `massage`) VALUES
(1, 'Amir', 'abdullah@gmail.com', '44444', 'subjec', 'fffffffff'),
(2, 'Amir', 'abdullah@gmail.com', '44444', 'subjec', 'fffffffff'),
(3, 'Amir', 'abdullah@gmail.com', '44444', 'subjec', 'fffffffff'),
(4, 'Amir', 'abdullah@gmail.com', '2', 'subjec', 'kkk'),
(5, 'Amir', 'abdullah@gmail.com', '2', 'subjec', 'kkk'),
(6, 'Amir', 'abdullah@gmail.com', '2', 'subjec', 'kkk'),
(7, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(8, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(9, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(10, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(11, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(12, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(13, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(14, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(15, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(16, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(17, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(18, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(19, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(20, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(21, 'Amir', 'abdullah@gmail.com', '444', 'subjec', 'gggg'),
(24, 'Amir', 'abdullah@gmail.com', '555555', 'subjec', 'ssss'),
(26, 'Amir', 'abdullah@gmail.com', '012555', 'subjec', 'llllll'),
(27, 'Amirasss', 'abdullah@gmail.com', '445555', 'gggg', 'llllll'),
(28, 'salam', 'saif@gmail.com', '45623', 'subjec', 'kkkk'),
(29, 'salam', 'saif@gmail.com', '45623', 'subjec', 'kkkk'),
(30, 'Amirmahmud', 'abdullah@gmail.com', '1255', 'subjec', 'gghfhff'),
(31, 'Amirmahmud', 'abdullah@gmail.com', '1255', 'subjec', 'gghfhff'),
(32, 'Hasib', 'sm@gmail.com', '55555', 'aaaaaaa', 'aaaaaa'),
(33, '$name', '$email', '$phone', '$sub', '$msz'),
(34, 'dddddf', 'abuhmdabdullah@ffff.com', '44555', 'aaaaaaa', 'aaaa'),
(35, 'dddddf', 'abuhmdabdullah@ffff.com', '44555', 'aaaaaaa', 'aaaa'),
(36, 'dddddf', 'abuhmdabdullah@ffff.com', '44555', 'aaaaaaa', 'aaaa'),
(37, 'Amirwer', 'abdullah@gmail.com', '24444', 'gggg', 'llllll'),
(38, 'Nazrul khan', 'abdullah@gmail.com', '5566332', 'subjec', 'ghjj'),
(39, 'Nazrul khan', 'abdullah@gmail.com', '5566332', 'subjec', 'ghjj'),
(40, 'Amirfgggshs', 'abdullah@gmail.com', '55566', 'subjec', 'aaaaass'),
(41, 'Mamun', 'abuhmdabdullah@hhh.com', '45522', 'kkkk', 'lllll'),
(42, 'Nazrul', 'abuhmdabdullah@gmail.com', '44444444', 'subjec', 'jjjjjjj'),
(43, 'Amir', 'abuhmdabdullah@gmail.com', '44444444444', 'html', 'jjjjjjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `name`, `date`) VALUES
(1, 'Assistant officer', '2024-09-11'),
(3, 'Sr. Officer', '2024-09-09'),
(4, 'As. Officer', '2024-09-16'),
(6, 'Junior operator', '2024-09-18'),
(7, 'Tellar', '2024-09-03'),
(8, 'Driver', '2024-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(4, 'md', 'sani', 'abdullah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'md', 'mohiuddin', 'asm@gmail.com', 'ad7dfc879a60e3fc17b63ee2b1c779d0'),
(6, 'md', 'Rashid', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'md', 'Rashid', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'md', 'Rashid', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'md', 'abdullah', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'md', 'abdullah', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'md', 'abdullah', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'md', 'abdullah', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'md', 'abdullah', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'md', 'hasib', 'mamun@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'sm', 'Rashid', 'sm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'md', 'hafiz', 'saif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'sm', 'sajib', 'sm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(18, 'asss', 'Doe', 'mamun@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'utiv', 'babu', 'abdullah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'md', 'sohel', 'mamun@gmail.com', 'c37bf859faf392800d739a41fe5af151'),
(21, 'md', 'daaaaal', 'abdullah@gmail.com', '8a13dab3f5ec9e22d0d1495c8c85e436'),
(22, 'asif', 'abdullah', 'abuhmdabdullah@gmail.com', 'c7c85b0c46f1f4182514ad2cf7f05a0a'),
(23, 'Noman', 'abdullah', 'noman@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(24, 'md', 'abdullah', 'abdullah@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(25, 'safin', 'ahmed', 'sdmj@as.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(26, 'gias', 'uddin', 'gas@gm.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(27, 'asm', 'abdullah', 'aqz@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(28, 'Abdullah', 'Rashid', 'mamun@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(29, 'md', 'Doe', 'mamun@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(30, 'Yousuf', 'Molla', 'yousuf@gmail.com', 'ddd37f736db183b6b4c186b87dd6236c'),
(31, 'Tomal', '', 'tomal@gmail.com', '93c254394e0934023c19e70e30e99f94'),
(32, 'Abdullah', '', 'awz@gmail.com', 'c4789f12650125bba9cc322bb294ffdf'),
(33, 'md sami', '', 'aabdullah@gmail.com', '040b7cf4a55014e185813e0644502ea9'),
(34, 'md mamunur ', '', 'mmamun@gmail.com', 'eb89f40da6a539dd1b1776e522459763'),
(35, 'Tanzim hossain', '', 'abbdullah@gmail.com', '076ba99d45f1409c529e9377f5755727'),
(36, 'md', '', 'mamun@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(38, 'A.S.M Abdullah', '', 'asm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES
(4, 'Sami', 'Abdullah', 'ass@dd.com', '12345'),
(5, 'A.s.m', 'Abdullah', 'asm@gmail.com', '12345'),
(7, 'Samsul', 'Islam', 'sm@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `last_date` date NOT NULL DEFAULT current_timestamp(),
  `website` varchar(30) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `company_id` int(11) NOT NULL,
  `vacancy_count` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `category_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `job_title`, `salary`, `company_name`, `address`, `category`, `start_date`, `last_date`, `website`, `job_type`, `company_id`, `vacancy_count`, `catagory_id`, `category_count`) VALUES
(20, 'Junior oficer', '', 'Square LTD', 'Dhaka', 'Accountacy', '2024-09-04', '2024-09-27', 'www.squre.com', '', 13, 0, 1, 0),
(36, 'As. Officer', '', 'Candid Dealings ltd', 'Dhaka', 'Accountacy', '2024-09-09', '2024-09-21', '', '', 2, 1, 1, 0),
(37, 'Manager', '', 'Candid Dealings ltd', 'Dhaka', 'Accountacy', '2024-09-15', '2024-09-23', '', '', 2, 1, 1, 0),
(38, 'As. Officer', '', 'Square LTD', 'Dhaka', 'Accountacy', '2024-09-10', '2024-09-20', '', '', 13, 0, 1, 0),
(41, 'As. Officer', '', 'Basundhara', 'Dhaka', 'Accountacy', '2024-09-10', '2024-09-17', '', '', 3, 1, 1, 0),
(42, 'As. Officer', '', 'Basundhara', 'Dhaka', 'Bank', '2024-09-17', '2024-09-28', '', '', 3, 1, 3, 0),
(43, 'As. Officer', '', 'Basundhara', 'Dhaka', 'Bank', '2024-09-17', '2024-09-28', '', '', 3, 1, 0, 0),
(44, 'As. Officer', '', 'Basundhara', 'Dhaka', 'Bank', '2024-09-17', '2024-09-28', '', '', 3, 1, 0, 0),
(45, 'Tellar', '', 'Dhanshiri Ltd', 'Dhaka', 'N.G.O', '2024-09-10', '2024-09-28', '', '1', 22, 1, 1, 8),
(46, 'Tellar', '', 'Dhanshiri Ltd', 'Dhaka', 'N.G.O', '2024-09-10', '2024-09-28', '', '1', 22, 1, 1, 8),
(48, 'Junior operator', '', 'Nippon Ltd', 'Dhaka', 'Data entry', '2024-09-10', '2024-09-21', '', 'Full Time', 15, 1, 9, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

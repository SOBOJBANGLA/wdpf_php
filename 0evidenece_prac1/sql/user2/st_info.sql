-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 05:23 PM
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
-- Database: `cmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_info`
--

CREATE TABLE `st_info` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `district` varchar(15) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `st_info`
--

INSERT INTO `st_info` (`id`, `image`, `name`, `gender`, `address`, `birth`, `district`, `subject`) VALUES
(1, 'photo/man1.jpg', 'Amir masa', 'Male', 'Banani     ', '2024-07-04', 'Dhaka', 'NT'),
(3, 'photo/man2.jpg', 'Mamun', 'Male', '  hollggt     ', '2024-07-18', 'Dhaka', 'NT,GAVE'),
(5, 'photo/man13.jpg', 'Nazrul', 'Male', 'ukkjhh ', '2019-01-29', 'Cumilla', 'GAVE'),
(6, 'photo/man6 (1).jpg', 'Samir', 'Male', 'tttt ', '2024-07-10', 'Dhaka', 'NT'),
(7, 'photo/man5 (1).jpg', 'Mamun', 'Male', 'ooo ', '2024-07-11', 'Dhaka', 'NT'),
(8, 'photo/man1.jpg', 'Mamun', 'Male', 'ooo  ', '2024-07-11', 'Dhaka', 'WDPF'),
(9, 'photo/man2.jpg', 'Abdullah', 'Male', 'ioolju', '2024-07-16', 'Cumilla', 'NT,GAVE'),
(22, 'photo/man3 (1).jpg', 'salma', 'Female', ' ggghh ', '2024-07-22', 'Dhaka', 'NT,GAVE'),
(23, 'photo/man2.jpg', 'Amir sad', 'Male', ' iollkk  ', '2024-07-14', 'Dhaka', 'NT,WDPF'),
(25, 'photo/man6 (1).jpg', 'Samir', 'Male', ' nggkl ', '2020-02-04', 'Dhaka', 'NT,GAVE'),
(27, 'photo/man3 (1).jpg', 'fahim', 'Male', ' ngtddggd', '2024-07-08', 'Dhaka', 'NT,GAVE'),
(32, 'photo/Screenshot 2024-04-19 211605.png', 'Amir', 'Female', ' llljhhf  ', '2024-07-16', 'Cumilla', 'NT,GAVE'),
(33, 'photo/Capture.PNG', 'Mamuna assd', 'Female', 'gghh  ', '2024-07-16', 'Dhaka', 'NT,GAVE'),
(34, 'photo/man3 (1).jpg', 'Mamun', 'Male', 'hffui', '2024-07-03', 'Dhaka', 'NT, WDPF'),
(35, 'photo/man8 (1).jpg', 'Asif', 'Male', 'dwertt', '2024-07-02', 'Cumilla', 'NT, GAVE'),
(36, 'photo/man3 (1).jpg', 'Mamun', 'Male', 'fjjfjkkhh', '2024-07-09', 'Dhaka', 'NT, GAVE'),
(37, 'photo/man3 (1).jpg', 'Abdullah', 'Male', 'hjjjj ', '2024-07-02', 'Dhaka', 'NT'),
(38, 'photo/man2.jpg', 'Mamun', 'Male', 'ttty', '2024-08-07', 'Dhaka', 'NT, GAVE'),
(39, 'photo/laptop13.png', 'Amir', 'Male', 'kkkkjhh', '2024-08-06', 'Dhaka', 'NT, GAVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_info`
--
ALTER TABLE `st_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

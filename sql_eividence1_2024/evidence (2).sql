-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 25, 2024 at 01:51 PM
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
-- Database: `evidence`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacturer` (IN `name` VARCHAR(50), IN `address` VARCHAR(100), IN `contact` VARCHAR(50))   INSERT INTO manufacturer(id,name,address,contact_no) VALUES (NULL,name,address,contact)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('Insert','Update','Delete') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `product_name`, `event`, `event_time`) VALUES
(1, 'sony_car', 'Insert', '0000-00-00 00:00:00'),
(2, 'walton_car', 'Insert', '0000-00-00 00:00:00'),
(3, 'Walton honda', 'Insert', '2024-08-24 07:00:59'),
(4, 'walton_car', 'Update', '2024-08-24 07:01:47'),
(5, 'Sony_oven', 'Delete', '2024-08-24 07:02:20'),
(6, 'sony_car', 'Update', '2024-08-25 02:54:08'),
(7, 'sony_Tv', 'Delete', '2024-08-25 06:59:11'),
(8, 'sony_car', 'Delete', '2024-08-25 06:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(2, 'Samsung', 'Gazipur', '02256564123'),
(4, 'Otobi', 'Cumilla', '1125455'),
(5, 'Singer', 'Narayagang', '55421664'),
(6, 'jyhrfjhyrhgrg', 'yrh', '654653'),
(7, 'fffffi', 'iiii', '5555');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_DELETE` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product
WHERE product.manufacturer_id=old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Sony', 'Dhaka', '021546456'),
(2, 'Samsung', 'Gazipur', '02256564123'),
(3, 'Walton', 'Manikgang', '0125465445'),
(4, 'Otobi', 'Cumilla', '1125455'),
(5, 'Singer', 'Narayagang', '55421664');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(3, 'Samsung_washing', 8000, 2),
(6, 'Singer_fan', 5500, 5),
(7, 'Otobi_Table', 3500, 4),
(9, 'walton_carr', 4440, 3),
(10, 'Walton honda', 150000, 3);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(
NULL,old.name,'Delete', NOW()
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO log_book VALUES(
NULL,new.name,'Insert', NOW()
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_update` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(
NULL,old.name,'Update', NOW()
)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_above_2000_price`
-- (See below for the actual view)
--
CREATE TABLE `products_above_2000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_above_5000_price`
-- (See below for the actual view)
--
CREATE TABLE `products_above_5000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'sony_Tv', 10000, 1),
(2, 'Sony_oven', 4000, 1),
(3, 'Samsung_washing', 8000, 2),
(4, 'Walton_Tv', 10000, 3),
(5, 'Walton_Hiter', 2000, 3),
(6, 'Singer_fan', 5500, 5),
(7, 'Otobi_Table', 3500, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`manufacture_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `products_above_2000_price`
--
DROP TABLE IF EXISTS `products_above_2000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_above_2000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 20002000  ;

-- --------------------------------------------------------

--
-- Structure for view `products_above_5000_price`
--
DROP TABLE IF EXISTS `products_above_5000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_above_5000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `product_name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `manufacture_name` FROM (`product` join `manufacturer`) WHERE `manufacturer`.`id` = `product`.`manufacturer_id``manufacturer_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

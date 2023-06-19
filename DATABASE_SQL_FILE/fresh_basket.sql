-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 06:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fresh_basket`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_stock_manager`
--

CREATE TABLE `area_stock_manager` (
  `asm_id` int(11) NOT NULL,
  `asm_password` varchar(30) NOT NULL,
  `asm_name` varchar(31) NOT NULL,
  `asm_pincode` bigint(20) NOT NULL,
  `sm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_stock_manager`
--

INSERT INTO `area_stock_manager` (`asm_id`, `asm_password`, `asm_name`, `asm_pincode`, `sm_id`) VALUES
(50, '123456', 'Suman', 700144, 100),
(51, '123456', 'Swarup', 700145, 100),
(52, '123456', 'Tom', 700146, 100),
(53, '123456', 'Swarup', 700147, 100),
(54, '123456', 'Suman', 700148, 100),
(55, '123456', 'Tom', 700149, 100),
(56, '123456', 'Thomson', 700150, 100);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(31) NOT NULL,
  `age` int(11) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `pincode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `age`, `c_address`, `c_password`, `gender`, `email_id`, `phone_no`, `pincode`) VALUES
(51, 'Raihan Laskar', 22, 'Baruipur', '123456', 'male', 'raihanlaskar65@gmail.com', 7894561235, 700144),
(52, 'Pritam Haldar', 18, 'Kolkata', '123456', 'male', 'phaldar1@gmail.com', 9595525574, 700145),
(53, 'Priyanka Das', 26, 'Sonarpur', '123456', 'female', 'pdas4@gmail.com', 9851242451, 700145),
(54, 'Souvik Naskar', 16, 'Narendrapur', '123456', 'male', 'snaskar56@gmail.com', 8526481585, 700146),
(55, 'Manish Chowdhury', 35, 'Baruipur', '123456', 'others', 'mchow87@gmail.com', 8526431885, 700144),
(56, 'Akhil Paul', 50, 'Sonarpur', '123456', 'Male', 'apaul39@gmail.com', 9854687456, 700147),
(57, 'Kakoli Haldar', 31, 'Baghajatin', '123456', 'Female', 'Khaldar45@gmail.com', 9856321456, 700148),
(58, 'Sourav Naskar', 27, 'Narendrapur', '123456', 'Male', 'Snaskar34@gmail.com', 9856321457, 700149),
(59, 'Mukesh Sharma', 45, 'Garia', '123456', 'Male', 'msharma34@gmail.com', 9856321457, 700150),
(60, 'Keya Biswas', 65, ' New Garia', '123456', 'Female', 'kbiswas56@gmail.com', 9874563215, 700150),
(61, 'Tamal Das', 56, 'Jadavpur', '123456', 'MAle', 'tdas65@gmail.com', 9874651357, 700149),
(62, 'Aman Shaw', 56, 'Park Circus', '123456', 'Male', 'ashaw45@gmail.com', 9856321459, 700148);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`o_id`, `c_id`, `price`, `date`, `address`) VALUES
(3, 51, 61, '2022-12-22', 'asdas'),
(4, 51, 61, '2022-12-22', 'asdas'),
(6, 51, 62, '2022-12-22', 'baruipur'),
(9, 51, 61, '2022-12-22', 'sdas'),
(10, 51, 20, '2022-12-22', 'bansdroni'),
(12, 51, 20, '2023-06-19', 'kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `s_id` int(11) NOT NULL,
  `s_pincode` bigint(20) NOT NULL,
  `s_name` varchar(31) NOT NULL,
  `pack_size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `country_of_origin` varchar(31) NOT NULL,
  `amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `brand` varchar(31) NOT NULL,
  `sm_id` int(11) NOT NULL,
  `asm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`s_id`, `s_pincode`, `s_name`, `pack_size`, `quantity`, `country_of_origin`, `amount`, `discount`, `brand`, `sm_id`, `asm_id`) VALUES
(6, 700144, 'Salt', 1000, 11, 'India', 20, 1, 'Tata', 100, 50),
(7, 700144, 'Salt', 1000, 18, 'India', 21, 1, 'Ashirbad', 100, 50),
(8, 700144, 'Salt', 1000, 150, 'India', 22, 1, 'Surya', 100, 50),
(9, 700145, 'Biscuit', 5000, 100, 'France', 50, 20, 'Parle-G', 100, 51),
(10, 700145, 'Biscuit', 6500, 20, 'England', 200, 15, 'Britania', 100, 51),
(11, 700146, 'Cooking Oil', 650, 66, 'India', 800, 25, 'Fortune', 100, 52),
(12, 700146, 'Cooking Oil', 50, 1000, 'India', 20, 16, 'Safola', 100, 52),
(13, 700147, 'Chips', 5, 500, 'Hongkong', 20, 13, 'Lays', 100, 53),
(14, 700147, 'Chips', 5, 600, 'India', 50, 13, 'Bingo', 100, 53),
(15, 700148, 'Milk', 50, 5000, 'India', 50, 12, 'Amul', 100, 54),
(16, 700148, 'Milk', 50, 6000, 'England', 120, 6, 'Amul', 100, 54),
(17, 700149, 'Rice', 50, 4000, 'Paris', 450, 11, 'Fortune', 100, 55),
(18, 700149, 'Rice', 5600, 2000, 'China', 200, 16, 'Dawaat', 100, 55),
(19, 700150, 'Toothpaste', 500, 120, 'India', 50, 13, 'Colgate', 100, 56),
(20, 700150, 'Toothpaste', 560, 140, 'London', 48, 14, 'Dabur', 100, 56),
(21, 700144, 'Butter', 100, 49, 'India', 41, 5, 'Amul', 100, 50),
(22, 700146, 'Cooking Oil', 900, 51, 'India', 195, 12, 'Arati', 100, 52);

-- --------------------------------------------------------

--
-- Table structure for table `stock_manager`
--

CREATE TABLE `stock_manager` (
  `sm_id` int(11) NOT NULL,
  `sm_name` varchar(31) NOT NULL,
  `sm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_manager`
--

INSERT INTO `stock_manager` (`sm_id`, `sm_name`, `sm_password`) VALUES
(100, 'Debjyoti', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_stock_manager`
--
ALTER TABLE `area_stock_manager`
  ADD PRIMARY KEY (`asm_id`),
  ADD KEY `test` (`sm_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `t1` (`c_id`),
  ADD KEY `t2` (`s_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `t3` (`c_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `test1` (`sm_id`),
  ADD KEY `test2` (`asm_id`);

--
-- Indexes for table `stock_manager`
--
ALTER TABLE `stock_manager`
  ADD PRIMARY KEY (`sm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_stock_manager`
--
ALTER TABLE `area_stock_manager`
  MODIFY `asm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stock_manager`
--
ALTER TABLE `stock_manager`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area_stock_manager`
--
ALTER TABLE `area_stock_manager`
  ADD CONSTRAINT `test` FOREIGN KEY (`sm_id`) REFERENCES `stock_manager` (`sm_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `t1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `t2` FOREIGN KEY (`s_id`) REFERENCES `stock` (`s_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `t3` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `test1` FOREIGN KEY (`sm_id`) REFERENCES `stock_manager` (`sm_id`),
  ADD CONSTRAINT `test2` FOREIGN KEY (`asm_id`) REFERENCES `area_stock_manager` (`asm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

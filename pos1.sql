-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 01:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos1`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_data`
--

CREATE TABLE `billing_data` (
  `id` int(100) NOT NULL,
  `CUSTOMER_NAME` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `CUSTOMER_NUMBER` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `SALESMAN` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `PRODUCT_NAME` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `AMOUNT` int(100) NOT NULL,
  `PURCHASE_AMOUNT` int(100) NOT NULL,
  `SALE_DATE` date NOT NULL,
  `SALE_TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `billing_data`
--

INSERT INTO `billing_data` (`id`, `CUSTOMER_NAME`, `CUSTOMER_NUMBER`, `SALESMAN`, `PRODUCT_NAME`, `QUANTITY`, `AMOUNT`, `PURCHASE_AMOUNT`, `SALE_DATE`, `SALE_TIME`) VALUES
(124, 'attiq', '4565', 'dfgh', '10*13', 20, 8000, 6800, '2022-11-11', '07:11:36'),
(125, 'atiq', '23', 'fd', '10*13', 10, 4000, 3400, '2022-11-11', '07:12:53'),
(126, 'ygjhj', '4685', 'iguhijl', '12*15', 5, 2000, 1700, '2022-11-11', '07:17:44'),
(127, 'efwd', '234', 'fv', '10*13', 5, 2000, 1700, '2022-11-18', '07:39:27'),
(128, 'jghj', '654', 'hgf', '10*13', 15, 6000, 5100, '2022-11-18', '07:41:54'),
(129, 'hftjgh', '8645', 'htdfgvh', '10*13', 10, 4000, 3400, '2022-11-18', '07:47:51'),
(130, 'yughkjn', '684531', 'jyfthfc', '12*15', 2, 800, 680, '2022-11-18', '07:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `SR` int(100) NOT NULL,
  `BRAND_NAME` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`SR`, `BRAND_NAME`) VALUES
(39, 'JILANI PLASTIC'),
(40, 'AL UMAR'),
(41, 'ITFAAQ'),
(43, 'Awais');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `SR` int(100) NOT NULL,
  `CATEGORY_NAME` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`SR`, `CATEGORY_NAME`) VALUES
(9, 'shopr');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(200) NOT NULL,
  `EMPLOYEE NAME` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `USERNAME` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `PASSWORD` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `CELL NUMBER` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `COMMISSION` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `EMPLOYEE NAME`, `USERNAME`, `PASSWORD`, `CELL NUMBER`, `COMMISSION`) VALUES
(4, 'awais akhtar', 'awais', 'sdv', '3245', 'dsv');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(100) NOT NULL,
  `EXPENSE_TYPE` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `AMOUNT` int(100) NOT NULL,
  `EXPENSE_DATE` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `ACTION` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `EXPENSE_TYPE`, `AMOUNT`, `EXPENSE_DATE`, `ACTION`) VALUES
(64, 'Rent2', 68745, '2022-11-09', ''),
(65, 'Employees Pay', 78675, '2022-11-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(100) NOT NULL,
  `PRODUCT_NAME` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `CATEGORY` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `BRAND` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `SALE_PRICE` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `PURCHASE_PRICE` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `EXPIRE_DATE` date NOT NULL,
  `DESCRIPTION` varchar(200) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `PRODUCT_NAME`, `CATEGORY`, `BRAND`, `SALE_PRICE`, `PURCHASE_PRICE`, `QUANTITY`, `EXPIRE_DATE`, `DESCRIPTION`) VALUES
(30, '10*13', 'SHOPER', 'JILANI PLASTIC', '400', '340', 20, '2022-11-07', 'ytfgjbhjn'),
(31, '12*15', 'SHOPER', 'JILANI PLASTIC', '400', '340', 1, '2022-11-13', ''),
(32, '15*18', 'SHOPER', 'JILANI PLASTIC', '400', '340', 5, '2022-11-08', 'utgyhuj'),
(34, '8*11', 'shopr', 'JILANI PLASTIC', '400', '340', 12, '2022-11-11', '  ytfgyhj                                          ');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `Admin_name` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `Admin_password` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `Admin_name`, `Admin_password`) VALUES
(10, 'Awais', 'a1999');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_person`
--

CREATE TABLE `purchase_person` (
  `id` int(100) NOT NULL,
  `p_name` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `p_pass` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `purchase_person`
--

INSERT INTO `purchase_person` (`id`, `p_name`, `p_pass`) VALUES
(6, 'hamza1', '15'),
(7, 'Talha', '1998');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(100) NOT NULL,
  `Sales_person` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `Password` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

CREATE TABLE `sales_person` (
  `id` int(100) NOT NULL,
  `s_name` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `s_pass` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `sales_person`
--

INSERT INTO `sales_person` (`id`, `s_name`, `s_pass`) VALUES
(17, 'zia1', '12'),
(18, 'adnan1', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_data`
--
ALTER TABLE `billing_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`SR`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`SR`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_person`
--
ALTER TABLE `purchase_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_person`
--
ALTER TABLE `sales_person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_data`
--
ALTER TABLE `billing_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `SR` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `SR` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_person`
--
ALTER TABLE `purchase_person`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_person`
--
ALTER TABLE `sales_person`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

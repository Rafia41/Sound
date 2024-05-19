-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Catg_Id` int(20) NOT NULL,
  `Catg_Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Catg_Id`, `Catg_Name`) VALUES
(10, 'Brocade'),
(8, 'Chiffon'),
(1, 'Cotton'),
(11, 'Fabrics'),
(5, 'Jacquad'),
(4, 'Khaddar'),
(3, 'Lawn'),
(7, 'Linen'),
(2, 'Silk'),
(6, 'Velvet');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Prod_Id` int(25) NOT NULL,
  `Prod_Name` varchar(225) NOT NULL,
  `Prod_Desc` text NOT NULL,
  `Prod_Image` varchar(225) NOT NULL,
  `Prod_Price` int(20) NOT NULL,
  `Prod_Catg_Id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Prod_Id`, `Prod_Name`, `Prod_Desc`, `Prod_Image`, `Prod_Price`, `Prod_Catg_Id`) VALUES
(1, 'Prod1', 'Fabrics', 'Cotton Fabric.jpeg', 1300, 1),
(2, 'Prod2', 'Fabrics', 'Silk Fabric.jpeg', 5000, 2),
(3, 'Prod3', 'Fabrics', 'Khaddar Fabrics.jpeg', 1500, 4),
(4, 'Prod4', 'Fabrics', 'Major-Cross-Matching.jpg', 5000, 11);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Reg_Id` int(20) NOT NULL,
  `Reg_Name` varchar(25) NOT NULL,
  `Reg_Lastname` varchar(25) NOT NULL,
  `Reg_Email` varchar(225) NOT NULL,
  `Reg_Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Reg_Id`, `Reg_Name`, `Reg_Lastname`, `Reg_Email`, `Reg_Pass`) VALUES
(1, 'Rafia', 'Najam', 'najamrafia02@gmail.com', 'abcd'),
(2, 'Sania', 'Najam', 'sanianajam88@gmail.com', 'efgh'),
(4, 'Sabra', 'Najam', 'rafianajam@gmail.com', 'asdf'),
(7, 'Najam', 'Ali', 'rafianajam@gmail.com', 'qwer'),
(29, 'Rafia', 'Ali', 'rafianajam@gmail.com', 'dfad'),
(30, 'Mudassir', 'Khan', 'najamrafia02@gmail.com', 'aaDSD'),
(35, 'Sania', 'Khan', 'sania@gmail.com', '123'),
(36, 'Hareem', 'Shah', 'hareem@gmail.com', 'hareem'),
(37, 'shahid', 'kapoor', 'shahid@gmail.com', '123'),
(38, 'talha', '125', 'talha@gmail.com', '786'),
(39, 'sara', 'khan', 'sara@gmail.com', '777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Catg_Id`),
  ADD UNIQUE KEY `Unique_Category` (`Catg_Name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Prod_Id`),
  ADD KEY `Foreign key` (`Prod_Catg_Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Reg_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Catg_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Prod_Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Reg_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`Prod_Catg_Id`) REFERENCES `category` (`Catg_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

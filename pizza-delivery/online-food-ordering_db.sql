-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 04:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-food-ordering_db`
--
CREATE DATABASE IF NOT EXISTS `online-food-ordering_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `online-food-ordering_db`;

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

DROP TABLE IF EXISTS `forgotpassword`;
CREATE TABLE IF NOT EXISTS `forgotpassword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_verified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `forgotpassword`
--

TRUNCATE TABLE `forgotpassword`;
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `orders`
--

TRUNCATE TABLE `orders`;
--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(17, 'Margherita', 499, 1),
(17, 'Double cheese Margherita', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `regilog`
--

DROP TABLE IF EXISTS `regilog`;
CREATE TABLE IF NOT EXISTS `regilog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `regilog`
--

TRUNCATE TABLE `regilog`;
--
-- Dumping data for table `regilog`
--

INSERT INTO `regilog` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'krina', 'krina', 'krinagajera998@gmail.com', '1234'),
(2, 'Krina Gajera', 'krinaGajera', 'krinagajera988@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `reglog`
--

DROP TABLE IF EXISTS `reglog`;
CREATE TABLE IF NOT EXISTS `reglog` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `reglog`
--

TRUNCATE TABLE `reglog`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(0, 'krina', 'krinagajera998@gmail.com', '$2y$10$csx8Llyzb9il.K8DewXw5eShzhECn.Ci2GG0xFfIhTcKGKoSRBAsa', 886681, 'notverified'),
(0, 'krina', 'krinagajera988@gmail.com', '$2y$10$V.KQAXo8UVRfuKXz2WnZluCgPM8niVPxgtoVSf.0Q6ptASBPC3OUy', 707197, 'notverified');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `usertable`
--

TRUNCATE TABLE `usertable`;
-- --------------------------------------------------------

--
-- Table structure for table `user_manager`
--

DROP TABLE IF EXISTS `user_manager`;
CREATE TABLE IF NOT EXISTS `user_manager` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `user_manager`
--

TRUNCATE TABLE `user_manager`;
--
-- Dumping data for table `user_manager`
--

INSERT INTO `user_manager` (`order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 'krina', 9313263533, '70,sarswati ckfdnk', 'COD'),
(2, 'krina', 9313263533, '70,sarswati ckfdnk', 'COD'),
(3, 'krina', 9313263533, '70,sarswati ckfdnk', 'COD'),
(4, 'krina', 9313263533, '70,sarswati ckfdnk', 'COD'),
(5, 'krina', 9313263533, '70,sarswati ckfdnk', 'COD'),
(6, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(7, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(8, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(9, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(10, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(11, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(12, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(13, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(14, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(15, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(16, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD'),
(17, 'krina', 9313263533, '70,sarswati so.,jakatnaka,surat', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
CREATE TABLE IF NOT EXISTS `user_orders` (
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `user_orders`
--

TRUNCATE TABLE `user_orders`;
--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Quantity`) VALUES
(1),
(1),
(1),
(1),
(1),
(1);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

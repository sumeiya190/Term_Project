-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 10:16 AM
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
-- Database: `hamsy_biotech_inc`
--
DROP DATABASE IF EXISTS `hamsy_biotech_inc`;
CREATE DATABASE IF NOT EXISTS `hamsy_biotech_inc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hamsy_biotech_inc`;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

DROP TABLE IF EXISTS `orderitems`;
CREATE TABLE IF NOT EXISTS `orderitems` (
  `orderItemId` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `serviceId` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`orderItemId`),
  KEY `orderId` (`orderId`),
  KEY `productId` (`productId`),
  KEY `serviceId` (`serviceId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `orderitems`
--

TRUNCATE TABLE `orderitems`;
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `orderDate` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`orderId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `orders`
--

TRUNCATE TABLE `orders`;
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` enum('in_stock','out_of_stock','pre_order') NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `name`, `description`, `price`, `availability`, `quantity`) VALUES
(1, 'Advanced Imaging Systems', 'High-resolution imaging systems used for detailed internal examinations, including MRI, CT, and ultrasound machines.', 50000.00, 'in_stock', 10),
(2, 'Surgical Robotics', 'Robotic systems that assist surgeons in performing precise and minimally invasive surgeries.', 150000.00, 'pre_order', 5),
(3, 'Patient Monitoring Devices', 'Devices that continuously monitor patients vital signs and provide real-time data to healthcare providers.', 10000.00, 'in_stock', 50),
(4, 'Diagnostic Equipment', 'Equipment used for diagnosing medical conditions including X-ray machines, ECG machines, and lab analyzers.', 30000.00, 'out_of_stock', 0),
(5, 'Remote Consultation Devices', 'Devices that enable healthcare providers to conduct remote consultations with patients including telemedicine carts and video conferencing tools.', 8000.00, 'in_stock', 20),
(6, 'Rehabilitation Robots', 'Robotic devices that assist patients in their rehabilitation exercises helping them regain movement and strength.', 20000.00, 'pre_order', 15),
(7, 'Assisted Living Devices', 'Devices designed to assist elderly or disabled individuals in their daily activities, such as mobility aids and smart home devices.', 5000.00, 'in_stock', 30);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serviceId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` enum('available','not_available') NOT NULL,
  PRIMARY KEY (`serviceId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `services`
--

TRUNCATE TABLE `services`;
--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `name`, `description`, `price`, `availability`) VALUES
(1, ' Electronic Health Record Systems ', 'A comprehensive electronic system for managing patient health records, ensuring secure and easy access to patient data for healthcare providers.', 10000.00, 'available'),
(2, 'Practice Management Software', 'Software designed to streamline administrative and clinical operations for medical practices, including appointment scheduling, billing, and patient management.', 50000.00, 'available'),
(3, 'Health Analytics Software', 'Software that utilizes data analysis and predictive analytics to provide insights into patient health trends, outcomes, and resource utilization.', 60000.00, 'available'),
(4, 'Remote Monitoring Devices', 'Devices used for monitoring patients health conditions remotely, providing real-time data to healthcare providers for timely interventions.', 20000.00, 'available'),
(5, 'AI-powered Diagnosis Assistance', 'Advanced AI algorithms that assist healthcare providers in diagnosing medical conditions based on patient data and medical literature.', 40000.00, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`, `password`) VALUES
(1, 'Alex', 'alexkamu@gmail.com', '123456@'),
(2, 'Kamau', 'kamuu124@gmail.com', '123456#'),
(3, 'Jane ', 'janee345@gmail.com', '123456$'),
(4, 'Kevin', 'kevoq234@gmail.com', '123456%');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`),
  ADD CONSTRAINT `orderitems_ibfk_3` FOREIGN KEY (`serviceId`) REFERENCES `services` (`serviceId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

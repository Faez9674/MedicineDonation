-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 09:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unusedmedicinedonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `user_name`, `email_id`, `phone`, `address`, `password`) VALUES
(1, 'CVS Corporation', 'cvs@gmail.com', '44357757', 'Massachusetts, United States', '12345678'),
(2, 'H E B Drug Stores', 'heb@gmail.com', '44867668', 'Texas, United States', '12345678'),
(3, 'Costco Pharmacies', 'costco@gmail.com', '44956789', 'USA', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `donar_request`
--

CREATE TABLE `donar_request` (
  `id` int(11) NOT NULL,
  `donar_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `doner_name` varchar(255) NOT NULL,
  `doner_address` varchar(255) NOT NULL,
  `doner_phone` int(11) NOT NULL,
  `doner_email` varchar(255) NOT NULL,
  `ngo_name` varchar(255) NOT NULL,
  `ngo_address` varchar(255) NOT NULL,
  `ngo_phone` int(11) NOT NULL,
  `ngo_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar_request`
--

INSERT INTO `donar_request` (`id`, `donar_id`, `ngo_id`, `doner_name`, `doner_address`, `doner_phone`, `doner_email`, `ngo_name`, `ngo_address`, `ngo_phone`, `ngo_email`, `status`) VALUES
(3, 1, 1, 'CVS Corporation', 'Massachusetts, United States', 44357757, 'cvs@gmail.com', 'Doctors Without Borders', 'USA', 44788779, 'doc@gmail.com', 'Accepted'),
(4, 1, 2, 'CVS Corporation', 'Massachusetts, United States', 44357757, 'cvs@gmail.com', 'Oxfam America', 'USA', 44756789, 'oxfarm@gmail.com', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `review_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `user_name`, `email_id`, `phone`, `address`, `password`, `review_details`) VALUES
(1, 'Doctors Without Borders', 'doc@gmail.com', 44788779, 'USA', '12345678', 'Need medicine'),
(2, 'Oxfam America', 'oxfarm@gmail.com', 44756789, 'USA', '12345678', 'Need medicine support'),
(3, 'American Red Cross', 'redcross@gmail.com', 44656778, 'USA', '12345678', 'Need immediate medical support'),
(4, 'Save the Children', 'savechl@gmail.com', 44656798, 'USA', '12345678', 'Need medicine for kids'),
(5, 'Habitat for Humanity', 'humanity@gmail.com', 446567792, 'USA', '12345678', '24x7 Medicine supply needed');

-- --------------------------------------------------------

--
-- Table structure for table `unusedmedicine`
--

CREATE TABLE `unusedmedicine` (
  `id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `donar_name` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `batch_number` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unusedmedicine`
--

INSERT INTO `unusedmedicine` (`id`, `donor_id`, `donar_name`, `medicine_name`, `batch_number`, `quantity`) VALUES
(1, 1, 'CVS Corporation', 'Acebutolol', 'AZ3549', 10),
(2, 1, 'CVS Corporation', 'Atenolol', 'AT3550', 10),
(3, 1, 'CVS Corporation', 'Sensipar', 'SE3550', 10),
(4, 1, 'CVS Corporation', 'Renvela', 'RE3550', 10),
(5, 1, 'CVS Corporation', 'Dulaglutide', 'DU3550', 10),
(6, 2, 'H E B Drug Stores', 'Exenatide', 'EX3550', 15),
(7, 2, 'H E B Drug Stores', 'Liraglutide', 'LI3550', 15),
(8, 2, 'H E B Drug Stores', 'Semaglutide', 'SEM3550', 15),
(9, 2, 'H E B Drug Stores', 'Corticosteroids', 'COM3550', 15),
(10, 2, 'H E B Drug Stores', 'Muscle Relaxants', 'MU3550', 15),
(11, 3, 'Costco Pharmacies', 'Bisphosphonates', 'BI3550', 20),
(12, 3, 'Costco Pharmacies', 'Tirzepatide', 'TI3550', 20),
(13, 3, 'Costco Pharmacies', 'Insulin', 'IN3550', 20),
(14, 3, 'Costco Pharmacies', 'Nadolol', 'NA3550', 20),
(15, 3, 'Costco Pharmacies', 'Propranolol', 'PR3550', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar_request`
--
ALTER TABLE `donar_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unusedmedicine`
--
ALTER TABLE `unusedmedicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donar_request`
--
ALTER TABLE `donar_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unusedmedicine`
--
ALTER TABLE `unusedmedicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

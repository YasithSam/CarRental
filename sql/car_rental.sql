-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2021 at 05:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_name`, `password`, `role`) VALUES
('admin', 'e6e061838856bf47e1de730719fb2609', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `car_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `start` time(6) NOT NULL,
  `end` time(6) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `car_id`, `user_id`, `owner_id`, `start`, `end`, `day`) VALUES
(7, 1, 4, 1, '20:17:28.624000', '21:17:28.099000', '2021-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE `Brand` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`id`, `name`) VALUES
(1, 'car'),
(2, 'van'),
(3, 'motor-bike'),
(4, 'tuk tuk');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `user_name`, `password`, `city`, `contact_no`, `role`) VALUES
(1, 'sam', '202cb962ac59075b964b07152d234b70', 'colombo', 12345, 'owner'),
(2, 'Nimal', 'c20ad4d76fe97759aa27a0c99bff6710', 'Kandy', 123456, 'owner'),
(3, 'Kamal', 'c4ca4238a0b923820dcc509a6f75849b', 'Galle', 1111, 'owner'),
(4, 'Sunil', '250cf8b51c773f3f8dc8b4be867a9a02', 'Borella', 0, 'owner'),
(5, 'Rama', 'c6f057b86584942e415435ffb1fa93d4', 'Jaffna', 9999, 'owner'),
(6, 'Admin', '0a113ef6b61820daa5611c870ed8d5ee', 'Hire Me', 0, 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(120) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `contact_no`, `dob`, `address`, `city`, `role`) VALUES
(4, 'ucsc', 'd32934b31349d77e70957e057b1bcd28', 'ucsc@gmail.com', '0112004000', '01/01/2002', 'UCSC Building Complex,35 Reid Ave,Colombo 00700', 'Colombo', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `owner_id` int(10) DEFAULT NULL,
  `vehicle_title` varchar(150) DEFAULT NULL,
  `vehicles_brand` int(11) DEFAULT NULL,
  `price_per_km` int(11) DEFAULT NULL,
  `seats` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `vimage1` varchar(100) DEFAULT NULL,
  `vimage2` varchar(120) DEFAULT NULL,
  `vimage3` varchar(120) DEFAULT NULL,
  `rating` int(10) NOT NULL DEFAULT 0,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `owner_id`, `vehicle_title`, `vehicles_brand`, `price_per_km`, `seats`, `city`, `vimage1`, `vimage2`, `vimage3`, `rating`, `status`) VALUES
(1, 1, '2018 alto hybrid ', 1, 60, 4, 'Kandy', 'alto.jpg', NULL, NULL, 3, 1),
(3, 3, 'Nissan Caravan E 20 1980 Van', 2, 200, 6, 'Borella', 'caravan.jpg', NULL, NULL, 4, 1),
(4, 4, 'Yamaha TW 225 1999 Motorbike', 3, 50, 1, 'Gampaha', 'tw.jpg', NULL, NULL, 4, 1),
(5, 5, 'Toyota Belta 2009 Car', 1, 300, 5, 'Colombo', 'belta.jpg', NULL, NULL, 3, 1),
(6, 2, 'Bajaj RE 2 stroke 1989 Three Wheel', 4, 60, 3, 'Colombo', 'wheel.png', NULL, NULL, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_car` (`car_id`),
  ADD KEY `fk_owner_id` (`owner_id`);

--
-- Indexes for table `Brand`
--
ALTER TABLE `Brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicle_title` (`vehicle_title`),
  ADD KEY `fk_brand` (`vehicles_brand`),
  ADD KEY `fk_owner` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_car` FOREIGN KEY (`car_id`) REFERENCES `vehicles` (`id`),
  ADD CONSTRAINT `fk_owner_id` FOREIGN KEY (`owner_id`) REFERENCES `driver` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `fk_brand` FOREIGN KEY (`vehicles_brand`) REFERENCES `Brand` (`id`),
  ADD CONSTRAINT `fk_owner` FOREIGN KEY (`owner_id`) REFERENCES `driver` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

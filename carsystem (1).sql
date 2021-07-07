-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 11:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Next_Of_Kin` varchar(255) NOT NULL,
  `Phone_Number` text NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Next_Of_Kin_Phone_Number` text NOT NULL,
  `Car_Plate_Number` text NOT NULL,
  `Car_Color` varchar(255) NOT NULL,
  `Car_Model` text NOT NULL,
  `Car_Chassis_Number` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Next_Of_Kin`, `Phone_Number`, `Gender`, `Next_Of_Kin_Phone_Number`, `Car_Plate_Number`, `Car_Color`, `Car_Model`, `Car_Chassis_Number`, `image`) VALUES
(1, 'Oluwasijibomi', 'TodimuOlaifa', '23435645', 'Male', '2147483647', '12345', 'Blue', 'Audi', '5235311', ''),
(2, 'Sabrina', 'Pawan', '3456789', 'Female', '34567890', 'TRYE34567', 'Yellow', 'Toyota', '23456789', ''),
(3, 'Olaiya Joseph', 'Pawan Pius', '3456789', 'Male', '34567890', 'ADNORTH12231', 'Red', 'Honda', '45678', ''),
(4, 'Qudus Adullahi', 'Qudus Kuwar', '3245678', 'Male', '2345678', 'APP-456CV', 'Purple', 'Benz', '4567', ''),
(5, 'Felix Charles', 'Derek', '2147483647', 'Male', '456789', 'ADKWARA233', 'Boron', 'AUDI', '3454678', ''),
(6, 'Lqweretyuiop Qeetrtyu', 'Qsdgfghjkl;l', '2147483647', 'Male', '2147483647', 'APP-456CVQQ', 'Pink', 'Benz', '2343567890', ''),
(8, 'Olaiya Joseph', 'Pawan Kuwar', '2147483647', 'Male', '2147483647', 'APP-456CVAQW', 'Qsdfgfhj', 'Hondaasdfgh', '234565789', 'regexphp.png'),
(9, 'Olqweqweqrwrwr', 'dasdasdsdasda', '312424', 'Male', '2147483647', 'AQWDWW-LSRSES', 'Aqua', 'Mosq', '3456787467', 'eiliv-sonas-aceron-8R757Ge1S-E-unsplash.jpg'),
(10, 'Walex Supuriill', 'Qopos Delima', '2147483647', 'Male', '2147483647', 'QP-233442432LON', 'West', 'Pollo', '2345678797868', 'mae-mu-dTNNDTbZr8I-unsplash.jpg'),
(11, 'Qerwretewtwetwenq', 'Qwetwetwetwet', '2147483647', 'Male', '2147483647', '444124124', 'Red', 'Toyota', '234567846', 'elcarito-4rnGfF7XbYY-unsplash.jpg'),
(12, 'Oluwasijibomi Olaifa', 'Todimu Olaifa', '07012645748', 'Male', '09039456789', 'GWA-947FB', 'Red', 'Benz', '1HGBH41JXMN109186', 'myself.jpeg'),
(13, 'Olasasa Aodldld', 'Saad', '0873276563223', 'Male', '7572573980339', 'QWE-522HY', 'Yellow', 'Honda', '1QUEIEDUIDUJBAK22', 'israel-palacio-Y20JJ_ddy9M-unsplash.jpg'),
(14, 'Qudus Dele', 'Lawal Musa', '07012645746', 'Male', '07023456798', 'BDG-564FB', 'Red', 'Benz', '1HGBH41JXMN109186', 'myself.jpeg'),
(15, 'Qudus Dele', 'Lawal Musa', '07012645746', 'Male', '07023456798', 'BDG-564FB', 'Red', 'Benz', '1HGBH41JXMN109186', 'myself.jpeg'),
(16, 'Wale Sudo', 'Kola Martins', '090123455687998', 'Male', '09034567891', '', '', '', '', ''),
(19, 'Shafff Bello', 'Bola Taiwo', '24241215125', 'Male', '12441512512515', 'AD84-KWAR', 'Yellow rrww', 'Wqowowo', 'Aewwe++++@', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

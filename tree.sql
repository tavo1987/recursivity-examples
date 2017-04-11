-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2017 at 09:33 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `order` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `have_childrens` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `order`, `parent_id`, `label`, `have_childrens`) VALUES
(1, '0', 0, 'Carpeta 1', 0),
(2, '1', 0, 'Carpeta 2', 1),
(3, '2 ', 0, 'Carpeta 3', 0),
(4, '3', 0, 'Carpeta 4', 0),
(5, '4', 0, 'Carpeta 5', 1),
(6, '5', 7, 'Carpeta 6', 0),
(7, '6', 11, 'Carpeta 7', 1),
(8, '7', 0, 'Carpeta 8', 0),
(9, '8', 5, 'Carpeta 9', 0),
(10, '9', 5, 'Carpeta 10', 0),
(11, '10', 2, 'Carpeta 11', 1),
(12, '11', 6, 'Carpeta 12', 1),
(13, '12', 12, 'Carpeta 13', 1),
(14, '13', 13, 'Carpeta 14', 0),
(15, '14', 13, 'Carpeta 15', 0),
(16, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

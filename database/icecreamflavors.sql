-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2020 at 03:50 AM
-- Server version: 5.7.29
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bwfarrel_parlor`
--

-- --------------------------------------------------------

--
-- Table structure for table `icecreamflavors`
--

CREATE TABLE `icecreamflavors` (
  `id` int(100) NOT NULL,
  `personality1` varchar(15) NOT NULL,
  `personality2` varchar(15) NOT NULL,
  `personality3` varchar(15) NOT NULL,
  `personality4` varchar(15) NOT NULL,
  `personalityType` varchar(10) NOT NULL,
  `flavor` varchar(50) NOT NULL,
  `topping` varchar(50) NOT NULL,
  `medium` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icecreamflavors`
--

INSERT INTO `icecreamflavors` (`id`, `personality1`, `personality2`, `personality3`, `personality4`, `personalityType`, `flavor`, `topping`, `medium`) VALUES
(1, 'I', 'S', 'F', 'J', 'ISFJ', 'Vanilla', 'Chocolate chips', 'Small bowl'),
(2, 'I', 'S', 'T', 'P', 'ISTJ', 'Cookie Dough', 'Chocolate chips, sprinkles', 'Sprinkle waffle cone'),
(3, 'E', 'S', 'T', 'J', 'ESTJ', 'Rocky Road', 'Cookie dough, whipped cream', 'Large bowl'),
(4, 'I', 'S', 'F', 'P', 'ISFP', 'Vanilla', 'Gummy Bears', 'Waffle cone'),
(5, 'I', 'N', 'F', 'J', 'INFJ', 'Strawberry', 'Chocolate sprinkles, whipped cream', 'Sprinkle waffle cone'),
(6, 'E', 'N', 'F', 'P', 'ENFJ', 'Neapolitan', 'Rainbow sprinkles', 'Waffle cone'),
(7, 'I', 'S', 'T', 'P', 'ISTP', 'Vanilla', 'Oreo, gummy bears', 'Small bowl'),
(8, 'E', 'N', 'T', 'P', 'ENTP', 'Moose Tracks', 'Chocolate syrup', 'Chocolate-dipped waffle cone'),
(9, 'E', 'S', 'F', 'P', 'ESFP', 'Chocolate', 'None', 'Small bowl'),
(10, 'I', 'S', 'T', 'P', 'ISTP', 'Strawberry', 'Cherries, rainbow sprinkles', 'Sprinkle waffle cone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icecreamflavors`
--
ALTER TABLE `icecreamflavors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icecreamflavors`
--
ALTER TABLE `icecreamflavors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2020 at 09:35 AM
-- Server version: 5.6.20-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ds_2020_01_22`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_ds`
--

CREATE TABLE IF NOT EXISTS `menu_ds` (
`idMenu` int(3) NOT NULL,
  `jour_ds` varchar(10) NOT NULL,
  `plat_ds` varchar(255) NOT NULL,
  `photoMenu` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu_ds`
--

INSERT INTO `menu_ds` (`idMenu`, `jour_ds`, `plat_ds`, `photoMenu`) VALUES
(1, 'Lundi', 'Ravioli', 'lundi.jpg'),
(2, 'Mardi', 'Boulettes', 'mardi.jpg'),
(3, 'Mercredi', 'Steak Frites', 'mercredi.jpg'),
(4, 'Jeudi', 'Pâtes', 'jeudi.jpg'),
(5, 'Vendredi', 'Poisson', 'vendredi.jpg'),
(6, 'Samedi', 'Pizza', 'samedi.jpg'),
(7, 'Dimanche', 'Nouille', 'dimanche.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_ds`
--
ALTER TABLE `menu_ds`
 ADD PRIMARY KEY (`idMenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_ds`
--
ALTER TABLE `menu_ds`
MODIFY `idMenu` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

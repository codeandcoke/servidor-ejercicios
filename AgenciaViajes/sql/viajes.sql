-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 06:52 PM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `viajes`
--

-- --------------------------------------------------------

--
-- Table structure for table `viajes`
--

CREATE TABLE IF NOT EXISTS `viajes` (
`id` int(10) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `precio` float NOT NULL,
  `destacado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viajes`
--

INSERT INTO `viajes` (`id`, `nombre`, `descripcion`, `foto1`, `foto2`, `fecha`, `duracion`, `disponible`, `precio`, `destacado`) VALUES
(1, 'Viaje al marenostrum', 'Conoce el supercomputador más potente de Europa', 'marenostrum.jpg', '', '2017-12-08', 2, 0, 100, 0),
(2, 'Viaje al marenostrum', 'Conoce el supercomputador más potente de Europa', 'marenostrum.jpg', '', '2017-12-08', 2, 1, 100, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `viajes`
--
ALTER TABLE `viajes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `viajes`
--
ALTER TABLE `viajes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

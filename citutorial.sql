-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2018 at 02:02 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citutorial`
--
CREATE DATABASE IF NOT EXISTS `citutorial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `citutorial`;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `appaterno` varchar(30) NOT NULL,
  `apmaterno` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`idPersona`, `nombre`, `appaterno`, `apmaterno`, `email`, `dni`, `direccion`) VALUES
(11, 'Andres', 'Vega', 'Vega', 'andres_vega93@hotmail.com', '19422581', 'Urb. La Humbolt');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(20) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `idPersona` int(10) NOT NULL,
  `privilegio` varchar(45) NOT NULL,
  `usr_fec_creacion` date DEFAULT NULL,
  `usr_fec_actualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomUsuario`, `clave`, `idPersona`, `privilegio`, `usr_fec_creacion`, `usr_fec_actualizacion`) VALUES
(4, 'Andres', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 11, 'user', '2018-08-18', '2018-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idPersona` (`idPersona`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

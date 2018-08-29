-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2018 at 06:21 PM
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
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compania`
--

CREATE TABLE `compania` (
  `com_codigo` int(11) NOT NULL,
  `com_nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `comp_id` int(11) NOT NULL,
  `comp_proveedor` int(11) NOT NULL,
  `op_id` int(11) NOT NULL,
  `comp_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `inv_id` int(11) NOT NULL,
  `itm_codigo` int(11) NOT NULL,
  `inv_existencia` int(11) NOT NULL,
  `inv_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itm_codigo` int(11) NOT NULL,
  `itm_nombre` varchar(45) NOT NULL,
  `itm_unidad` varchar(45) NOT NULL,
  `itm_precio_compra` float NOT NULL,
  `itm_creado_por` int(11) NOT NULL,
  `itm_fecha_creacion` date NOT NULL,
  `itm_fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kardex`
--

CREATE TABLE `kardex` (
  `inv_codigo` int(11) NOT NULL,
  `itm_codigo` int(11) NOT NULL,
  `inv_cantidad` int(11) NOT NULL,
  `inv_operacion_id` int(11) NOT NULL,
  `inv_tipo_operacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listafactura`
--

CREATE TABLE `listafactura` (
  `list_id` int(11) NOT NULL,
  `itm_codigo` int(11) NOT NULL,
  `list_cantidad` int(11) NOT NULL,
  `op_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operacion`
--

CREATE TABLE `operacion` (
  `op_id` int(11) NOT NULL,
  `op_comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(11, 'Andres', 'Vega', 'Vega', 'andres_vega932@hotmail.com', '19422581', 'Urb. La Humbolt'),
(12, 'test', 'test', 'test', 'test@test.com', '123123', 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `prov_id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sucursal`
--

CREATE TABLE `sucursal` (
  `suc_codigo` int(11) NOT NULL,
  `suc_compania_codigo` int(11) NOT NULL,
  `suc_nombre` varchar(45) NOT NULL,
  `suc_direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 12, 'user', '2018-08-26', '2018-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `vent_codigo` int(11) NOT NULL,
  `vent_cliente` int(11) NOT NULL,
  `op_id` int(11) NOT NULL,
  `vent_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`),
  ADD KEY `idPersona` (`idPersona`);

--
-- Indexes for table `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`com_codigo`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`comp_id`),
  ADD KEY `op_id` (`op_id`),
  ADD KEY `compras_ibfk_2` (`comp_proveedor`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`inv_id`),
  ADD KEY `itm_codigo` (`itm_codigo`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itm_codigo`),
  ADD KEY `param_creado_por` (`itm_creado_por`);

--
-- Indexes for table `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`inv_codigo`),
  ADD KEY `inv_operacion_id` (`inv_operacion_id`),
  ADD KEY `itm_codigo` (`itm_codigo`);

--
-- Indexes for table `listafactura`
--
ALTER TABLE `listafactura`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `listafactura_ibfk_1` (`op_id`),
  ADD KEY `param_codigo` (`itm_codigo`);

--
-- Indexes for table `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`op_id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`prov_id`),
  ADD KEY `idPersona` (`idPersona`);

--
-- Indexes for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`suc_codigo`),
  ADD KEY `suc_compania_codigo` (`suc_compania_codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idPersona` (`idPersona`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`vent_codigo`),
  ADD KEY `ventas_ibfk_1` (`op_id`),
  ADD KEY `vent_cliente` (`vent_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compania`
--
ALTER TABLE `compania`
  MODIFY `com_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventario`
--
ALTER TABLE `inventario`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itm_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kardex`
--
ALTER TABLE `kardex`
  MODIFY `inv_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listafactura`
--
ALTER TABLE `listafactura`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operacion`
--
ALTER TABLE `operacion`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `suc_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `vent_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`op_id`) REFERENCES `operacion` (`op_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`comp_proveedor`) REFERENCES `proveedor` (`prov_id`);

--
-- Constraints for table `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`itm_codigo`) REFERENCES `items` (`itm_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`itm_creado_por`) REFERENCES `usuario` (`idUsuario`);

--
-- Constraints for table `kardex`
--
ALTER TABLE `kardex`
  ADD CONSTRAINT `kardex_ibfk_1` FOREIGN KEY (`inv_operacion_id`) REFERENCES `operacion` (`op_id`),
  ADD CONSTRAINT `kardex_ibfk_2` FOREIGN KEY (`itm_codigo`) REFERENCES `items` (`itm_codigo`);

--
-- Constraints for table `listafactura`
--
ALTER TABLE `listafactura`
  ADD CONSTRAINT `listafactura_ibfk_1` FOREIGN KEY (`op_id`) REFERENCES `operacion` (`op_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `listafactura_ibfk_2` FOREIGN KEY (`itm_codigo`) REFERENCES `items` (`itm_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `sucursal_ibfk_1` FOREIGN KEY (`suc_compania_codigo`) REFERENCES `compania` (`com_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`op_id`) REFERENCES `operacion` (`op_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`vent_cliente`) REFERENCES `cliente` (`cli_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

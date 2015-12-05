-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 07:02 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cine`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `codigoActor` char(4) NOT NULL,
  `nombre` char(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`codigoActor`, `nombre`, `estado`) VALUES
('1231', 'asda', 'i'),
('2091', 'Arnulf2', 'i'),
('2222', 'Andrea', 'a'),
('3333', 'Rosmeri', 'a'),
('3453', 'Camila', 'a'),
('4444', 'Claudia', 'a'),
('5555', 'Daniel Fuentes', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `clasificacion`
--

CREATE TABLE `clasificacion` (
  `codigoClasificacion` char(4) NOT NULL,
  `nombre` char(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clasificacion`
--

INSERT INTO `clasificacion` (`codigoClasificacion`, `nombre`, `estado`) VALUES
('2983', 'Terror', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `detallepelicula`
--

CREATE TABLE `detallepelicula` (
  `codigoDetalle` char(4) NOT NULL,
  `estado` char(1) NOT NULL,
  `codigoPelicula` char(4) NOT NULL,
  `codigoClasificacion` char(4) NOT NULL,
  `codigoGenero` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detallepelicula`
--

INSERT INTO `detallepelicula` (`codigoDetalle`, `estado`, `codigoPelicula`, `codigoClasificacion`, `codigoGenero`) VALUES
('1', 'a', '1', '2983', '7273');

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `codigoGenero` char(4) NOT NULL,
  `nombre` char(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`codigoGenero`, `nombre`, `estado`) VALUES
('7273', 'Suspenso', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` varchar(5) DEFAULT '',
  `nombremenu` varchar(45) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `nombremenu`) VALUES
('700', 'MENU PELI-ACTOR'),
('100', 'MENU ACTOR'),
('200', 'MENU UBICACION'),
('300', 'MENU GENERO'),
('400', 'MENU CLASIFICACION'),
('500', 'MENU PELICULA'),
('600', 'MENU DETALLE-PELICULA');

-- --------------------------------------------------------

--
-- Table structure for table `pelicula`
--

CREATE TABLE `pelicula` (
  `codigoPelicula` char(4) NOT NULL,
  `nombre` char(50) NOT NULL,
  `duracion` time NOT NULL,
  `fechaPublicacion` date NOT NULL,
  `estado` char(1) NOT NULL,
  `codigoUbicacion` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelicula`
--

INSERT INTO `pelicula` (`codigoPelicula`, `nombre`, `duracion`, `fechaPublicacion`, `estado`, `codigoUbicacion`) VALUES
('1', 'Chucky', '00:00:20', '2010-09-09', 'a', '12');

-- --------------------------------------------------------

--
-- Table structure for table `pelicula_has_actor`
--

CREATE TABLE `pelicula_has_actor` (
  `codigoPelicula` char(4) NOT NULL,
  `codigoActor` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `idsubmenu` varchar(50) DEFAULT '',
  `nombresubmenu` varchar(45) DEFAULT '',
  `url` varchar(50) DEFAULT '',
  `idmenu` varchar(5) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`idsubmenu`, `nombresubmenu`, `url`, `idmenu`) VALUES
('300', 'Ingreso Genero', '../vista/ingresogenero.php', '300'),
('701', 'Listar Peli-Actor', '../control/procesos.php?opc=84', '700'),
('702', 'Consultar Peli-Actor', '../vista/consultaPeliActor.php', '700'),
('100', 'Ingresar Actor', '../vista/ingresoactor.php', '100'),
('101', 'Listar Actor', '../control/procesos.php?opc=3', '100'),
('102', 'Consultar Actor', '../vista/consultaActor.php', '100'),
('200', 'Ingresar Ubicacion', '../vista/ingresoubicacion.php', '200'),
('201', 'Listar Ubicacion', '../control/procesos.php?opc=9', '200'),
('202', 'Consultar Ubicacion', '../vista/consultaUbicacion.php', '200'),
('301', 'Listar Genero', '../control/procesos.php?opc=15', '300'),
('302', 'Consultar Genero', '../vista/consultaGenero.php', '300'),
('400', 'Ingreso Clasificacion', '../vista/ingresoclasificacion.php', '400'),
('401', 'Listar Clasificacion', '../control/procesos.php?opc=21', '400'),
('402', 'Consultar Clasificacion', '../vista/consultaClasificacion.php', '400'),
('500', 'Ingreso Pelicula', '../vista/ingresopelicula.php', '500'),
('501', 'Listar Pelicula', '../control/procesos.php?opc=82', '500'),
('502', 'Consultar Pelicula', '../vista/consultaPelicula.php', '500'),
('600', 'Ingreso Detalle-Pelicula', '../vista/ingresodetallepelicula.php', '600'),
('601', 'Listar Detalle-Pelicula', '../control/procesos.php?opc=82', '600'),
('602', 'Consultar Detalle-Pelicula', '../vista/consultaDetallePelicula.php', '600'),
('700', 'Ingreso Peli-Actor', '../vista/ingresopeliactor.php', '700');

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `codigoUbicacion` char(4) NOT NULL,
  `nombre` char(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ubicacion`
--

INSERT INTO `ubicacion` (`codigoUbicacion`, `nombre`, `estado`) VALUES
('12', 'Medellin', 'a'),
('9247', 'Bogota', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`codigoActor`);

--
-- Indexes for table `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`codigoClasificacion`);

--
-- Indexes for table `detallepelicula`
--
ALTER TABLE `detallepelicula`
  ADD PRIMARY KEY (`codigoDetalle`),
  ADD KEY `fk_detallepelicula_pelicula1_idx` (`codigoPelicula`),
  ADD KEY `fk_detallepelicula_clasificacion1_idx` (`codigoClasificacion`),
  ADD KEY `fk_detallepelicula_genero1_idx` (`codigoGenero`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`codigoGenero`);

--
-- Indexes for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`codigoPelicula`),
  ADD KEY `fk_pelicula_ubicacion1_idx` (`codigoUbicacion`);

--
-- Indexes for table `pelicula_has_actor`
--
ALTER TABLE `pelicula_has_actor`
  ADD PRIMARY KEY (`codigoPelicula`,`codigoActor`),
  ADD KEY `fk_pelicula_has_actor_actor1_idx` (`codigoActor`),
  ADD KEY `fk_pelicula_has_actor_pelicula_idx` (`codigoPelicula`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`codigoUbicacion`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detallepelicula`
--
ALTER TABLE `detallepelicula`
  ADD CONSTRAINT `fk_detallepelicula_clasificacion1` FOREIGN KEY (`codigoClasificacion`) REFERENCES `clasificacion` (`codigoClasificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detallepelicula_genero1` FOREIGN KEY (`codigoGenero`) REFERENCES `genero` (`codigoGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detallepelicula_pelicula1` FOREIGN KEY (`codigoPelicula`) REFERENCES `pelicula` (`codigoPelicula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `fk_pelicula_ubicacion1` FOREIGN KEY (`codigoUbicacion`) REFERENCES `ubicacion` (`codigoUbicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pelicula_has_actor`
--
ALTER TABLE `pelicula_has_actor`
  ADD CONSTRAINT `fk_pelicula_has_actor_actor1` FOREIGN KEY (`codigoActor`) REFERENCES `actor` (`codigoActor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pelicula_has_actor_pelicula` FOREIGN KEY (`codigoPelicula`) REFERENCES `pelicula` (`codigoPelicula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

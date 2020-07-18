-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2020 at 05:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `switchhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospedaje`
--

CREATE TABLE `hospedaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` text NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pais` varchar(50) NOT NULL,
  `provincia` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospedaje`
--

INSERT INTO `hospedaje` (`id`, `nombre`, `link`, `descripcion`, `direccion`, `pais`, `provincia`, `ciudad`) VALUES
(34, 'Royal Rio', 'https://t-ec.bstatic.com/images/hotel/max1024x768/120/120546270.jpg', 'Un lugar para dormir bien', 'Av. Bustillo 1231', 'Argentina', 'Buenos aires', 'Palermo'),
(35, 'Royal Rio 4', 'https://t-ec.bstatic.com/images/hotel/max1024x768/120/120546271.jpg', 'ALL INCLUSIVE', 'Calle 504', 'Argentina', 'Buenos aires', 'La Plata'),
(36, 'Iberostar', 'https://t-ec.bstatic.com/images/hotel/max1024x768/120/120546271.jpg', 'Hermosa playa', 'San martin 450, Mar del Plata', 'Brasil', 'Curitiba', 'Novo Mundo');

-- --------------------------------------------------------

--
-- Table structure for table `notificacion`
--

CREATE TABLE `notificacion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `notificacion`
--

INSERT INTO `notificacion` (`id`, `id_usuario`, `mensaje`) VALUES
(4, 6, 'Se a dado de alta como usuario premium.'),
(5, 6, 'Se a dado de baja como usuario premium.'),
(6, 6, 'Se a dado de alta como usuario premium.'),
(18, 10, 'Se a dado de alta como usuario premium.'),
(19, 10, 'Se a dado de baja como usuario premium.'),
(20, 10, 'Se a dado de alta como usuario premium.'),
(21, 10, 'Se a dado de baja como usuario premium.'),
(22, 10, 'Se a dado de alta como usuario premium.'),
(23, 10, 'Se a dado de baja como usuario premium.'),
(24, 10, 'Se a dado de alta como usuario premium.'),
(25, 10, 'Se a dado de baja como usuario premium.'),
(27, 10, 'Se a dado de alta como usuario premium.'),
(28, 10, 'Se a dado de baja como usuario premium.'),
(29, 6, 'Se a dado de baja como usuario premium.'),
(31, 6, 'Se a dado de alta como usuario premium.'),
(32, 6, 'Se a dado de baja como usuario premium.');

-- --------------------------------------------------------

--
-- Table structure for table `puja`
--

CREATE TABLE `puja` (
  `id` int(11) NOT NULL,
  `id_subasta` int(3) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `precio_base` double NOT NULL,
  `precio_actual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `puja`
--

INSERT INTO `puja` (`id`, `id_subasta`, `id_usuario`, `precio_base`, `precio_actual`) VALUES
(23, 57, 7, 15000, 15000),
(24, 57, 6, 15000, 15500),
(25, 58, 7, 15000, 15000),
(26, 59, 7, 15000, 15000),
(27, 60, 7, 15000, 15000),
(28, 60, 6, 15000, 15500),
(29, 60, 6, 15000, 15500),
(30, 61, 7, 1000000, 1000000),
(31, 61, 6, 1000000, 1000500),
(32, 62, 7, 15000, 15000),
(33, 63, 7, 15000, 15000),
(34, 64, 7, 15000, 15000),
(35, 65, 7, 15000, 15000),
(36, 65, 7, 15000, 15000),
(37, 0, 7, 15000, 15000),
(38, 65, 7, 15000, 15000),
(39, 65, 7, 15000, 15000),
(40, 65, 7, 15000, 15000),
(41, 65, 7, 15000, 15000),
(42, 0, 7, 0, 0),
(43, 65, 7, 15000, 15000),
(44, 65, 7, 15000, 15000),
(45, 0, 7, 15000, 15000),
(46, 0, 7, 15000, 15000),
(47, 0, 7, 15000, 15000),
(48, 0, 7, 15000, 15000),
(49, 0, 7, 15000, 15000),
(50, 0, 7, 15000, 15000),
(51, 0, 7, 15000, 15000),
(52, 0, 7, 15000, 15000),
(53, 0, 7, 15000, 15000),
(54, 0, 7, 15000, 15000),
(55, 66, 7, 15000, 15000),
(56, 67, 7, 15000, 15000),
(57, 68, 7, 15000, 15000),
(58, 68, 6, 15000, 17000);

-- --------------------------------------------------------

--
-- Table structure for table `subasta`
--

CREATE TABLE `subasta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `precio_base` double NOT NULL,
  `hospedaje` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `inicio_hospedaje` date NOT NULL,
  `fin_hospedaje` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `subasta`
--

INSERT INTO `subasta` (`id`, `nombre`, `fecha_inicio`, `fecha_fin`, `precio_base`, `hospedaje`, `estado`, `inicio_hospedaje`, `fin_hospedaje`) VALUES
(65, 'Royal Rio - Semana 23', '2019-06-06', '2019-06-09', 15000, 34, 1, '2019-06-10', '2019-06-17'),
(66, 'Royal Rio 4 - Semana 23', '2019-06-09', '2019-06-12', 15000, 35, 1, '2019-06-10', '2019-06-17'),
(67, 'Royal Rio - Semana 26', '2019-06-25', '2019-06-28', 15000, 34, 1, '2019-06-17', '2019-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `id_pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_provincia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_ciudad` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `id_pais`, `id_provincia`, `id_ciudad`) VALUES
(1, 'Argentina', 'Buenos Aires', 'La Plata'),
(2, 'Argentina', 'Buenos Aires', 'Palermo'),
(3, 'Argentina', 'Buenos Aires', 'San Isidro'),
(4, 'Brasil', 'Rio de Janeiro', 'Copacabana'),
(5, 'Brasil', 'Rio de Janeiro', 'Flamengo'),
(6, 'Brasil', 'Rio de Janeiro', 'Ipanema'),
(7, 'Brasil', 'Curitiba', 'Colombo'),
(8, 'Uruguay', 'Montevideo', 'Pocitos'),
(9, 'Uruguay', 'Montevideo', 'Buceo'),
(10, 'Uruguay', 'Montevideo', 'Carrasco');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titular` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_tar` text NOT NULL,
  `vencimiento` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(3) NOT NULL,
  `creditos` int(1) NOT NULL,
  `tipo` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `limite` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `fecha`, `mail`, `contrasenia`, `titular`, `numero_tar`, `vencimiento`, `codigo`, `creditos`, `tipo`, `limite`) VALUES
(6, 'Yzovmaixvoaqnraobpasjkahlkahsl', 'wicyioxovuvyabblaoqngoz', '1992-06-15', 'nico@hotmail.com', '123', 'NICOLAS', '1234567890123412', '0619', 444, 2, '1', 21000),
(7, 'Andrea', 'Rodriguez', '1995-06-15', 'admin@admin.com', '123', 'ANDREA R', '2147483647', '0921', 123, 2, '2', 11692),
(9, 'Matias', 'Delle Donne', '2019-05-25', 'nico@hotmail.com.ARsadsa', '123', 'NICo', '2147483647', '0519', 123, 2, '1', 12266),
(10, 'Gaston', 'Gaston', '1996-12-12', 'gaston@hotmail.com', '123', 'JOSE', '2147483647', '0119', 123, 2, '1', 14550);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospedaje`
--
ALTER TABLE `hospedaje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puja`
--
ALTER TABLE `puja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subasta`
--
ALTER TABLE `subasta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospedaje`
--
ALTER TABLE `hospedaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `puja`
--
ALTER TABLE `puja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `subasta`
--
ALTER TABLE `subasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

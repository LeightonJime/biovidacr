-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 05:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biovidacr`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogo`
--

CREATE TABLE `catalogo` (
  `id_animal` int(11) NOT NULL,
  `nombre_animal` varchar(255) NOT NULL,
  `info_animal` text NOT NULL,
  `foto_animal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactos_ayuda`
--

CREATE TABLE `contactos_ayuda` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(255) NOT NULL,
  `descripcion_contacto` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `sitio_web` varchar(255) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactos_ayuda`
--

INSERT INTO `contactos_ayuda` (`id_contacto`, `nombre_contacto`, `descripcion_contacto`, `imagen`, `sitio_web`, `telefono`, `ubicacion`) VALUES
(1, 'Rescate Wildlife Rescue Center', 'Este centro se dedica al rescate y rehabilitación de diversas especies de animales silvestres.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZlrDxmWWzL-RC1GvtUsih0tMPxYdAbsZ0WQ&s', 'http://rescatewildlife.org/', NULL, 'Alajuela, Costa Rica'),
(2, 'Centro de Educación y Rescate de Vida Silvestre Michael Uren – IAR Costa Rica', 'Enfocado en la educación y rescate de vida silvestre.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVA6EKyqc4L57Dgr11qWaHSJUwVcM_qDTSnBfjdlUgetmOHp59GBUDyvU2Ujoqw64HDEU&usqp=CAU', 'http://iarcostarica.org/', '+506 2682 5049', NULL),
(3, 'NATUWA, Santuario de Lapas', 'Centro de manejo y rehabilitación de vida silvestre.', 'https://www.natuwa.com/wp-content/uploads/2021/10/Logo-PNG-1500X1500V1-e1689488596286-300x300.png', 'http://natuwa.com/', NULL, NULL),
(4, 'IAR Costa Rica', NULL, 'https://clydescamp.com/wp-content/uploads/2016/04/Refuge_Revised_Logo_with_Foundation_Name-293x300.jpg', 'http://iarcostarica.org/', '+506 8824 3323', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grupos_ayuda`
--

CREATE TABLE `grupos_ayuda` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(255) NOT NULL,
  `descripcion_grupo` varchar(2000) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `sitio_web` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grupos_ayuda`
--

INSERT INTO `grupos_ayuda` (`id_grupo`, `nombre_grupo`, `descripcion_grupo`, `imagen`, `sitio_web`) VALUES
(1, 'Centro de Conservación Santa Ana', 'Fundazoo se dedica a la investigación, la reproducción en cautiverio de especies de flora y fauna tropicales, educación ambiental, conservación y rehabilitación de hábitat y a la recreación ecoturística.', 'https://destinosviajeros.com/wp-content/uploads/formidable/36/ccsaP1030885-1.jpg', 'https://www.facebook.com/CentrodeConservacion/?locale=es_LA'),
(2, 'Rescate Wildlife Rescue Center', 'Este centro se dedica al rescate y rehabilitación de diversas especies de animales silvestres.', 'https://rescatewildlife.org/wp-content/uploads/2023/09/Group-1086-2-1.webp', 'https://rescatewildlife.org/es/visitenos/'),
(3, 'Zoológico Simón Bolívar', 'Fundazoo se dedica a la investigación, la reproducción en cautiverio de especies de flora y fauna tropicales, educación ambiental, conservación y rehabilitación de hábitat y a la recreación ecoturística.', 'https://scontent.fsyq8-1.fna.fbcdn.net/v/t39.30808-6/327296856_1333094940591421_2685742748681785215_n.png?_nc_cat=106&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=aNYHs_F1EN4Q7kNvwG2A6_T&_nc_oc=AdnIAN3ze-hEtM93UaubmhuKcp72ykkbU9z75_5-uv0u-vN7S2mx_A3SlNPsjeZboCE&_nc_zt=23&_nc_ht=scontent.fsyq8-1.fna&_nc_gid=3I5s7fJvXtpUqRO02S3mvQ&oh=00_AfHycV96by6bbXWIiyoAX1Qo9HXmDX29xT1UBso93gL3yg&oe=6811E17B', 'https://www.facebook.com/zoosimonbolivar/?locale=es_LA'),
(4, 'Ponderosa Adventure Park', 'Parque de aventura con animales salvajes y diversas actividades al aire libre.', 'https://ponderosacostarica.com/wp-content/uploads/2023/07/Whatsapp-Ponderosa-Costa-Rica.webp', 'https://ponderosacostarica.com/');

-- --------------------------------------------------------

--
-- Table structure for table `registro_mascota`
--

CREATE TABLE `registro_mascota` (
  `id_mascota` int(11) NOT NULL,
  `nombre_mascota` varchar(255) NOT NULL,
  `tipo_animal` varchar(255) NOT NULL,
  `genero_animal` varchar(255) NOT NULL,
  `lugar_encontrado` text NOT NULL,
  `foto_mascota` text NOT NULL,
  `detalle_adopcion` text NOT NULL,
  `acuerdo_compromiso` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registro_mascota`
--

INSERT INTO `registro_mascota` (`id_mascota`, `nombre_mascota`, `tipo_animal`, `genero_animal`, `lugar_encontrado`, `foto_mascota`, `detalle_adopcion`, `acuerdo_compromiso`) VALUES
(1, 'Prueba gato', 'Gato', 'Macho', 'Prueba registro mascota', 'https://inaturalist-open-data.s3.amazonaws.com/photos/129658776/original.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombreP_usuario` varchar(255) NOT NULL,
  `correo_electronico` text NOT NULL,
  `nombreD_usuario` varchar(255) NOT NULL,
  `contraseña` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reportar_emergencia`
--

CREATE TABLE `reportar_emergencia` (
  `id_reporte` int(11) NOT NULL,
  `ubicacion_reporte` text NOT NULL,
  `persona_reporta` varchar(255) NOT NULL,
  `animal_reporte` text NOT NULL,
  `causa_reporte` text NOT NULL,
  `foto_reporte` text NOT NULL,
  `contacto_reporte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportar_emergencia`
--

INSERT INTO `reportar_emergencia` (`id_reporte`, `ubicacion_reporte`, `persona_reporta`, `animal_reporte`, `causa_reporte`, `foto_reporte`, `contacto_reporte`) VALUES
(1, 'Cartago', 'Prueba', 'Gato', 'Reporte de prueba', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKhJ9vY-WJviH34cgDfbG2Hn_cBf0t5BBmaWrmH--NzBO3pjGP6hjV7pb8s958ug9K7p6iR-3vz6nlw7c4i5ZdMw', '+506 8888 8888'),
(2, 'San José', 'Otra Prueba', 'Gato', 'Otro reporte de prueba', '', '+506 7777 7777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactos_ayuda`
--
ALTER TABLE `contactos_ayuda`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `grupos_ayuda`
--
ALTER TABLE `grupos_ayuda`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `registro_mascota`
--
ALTER TABLE `registro_mascota`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indexes for table `reportar_emergencia`
--
ALTER TABLE `reportar_emergencia`
  ADD PRIMARY KEY (`id_reporte`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactos_ayuda`
--
ALTER TABLE `contactos_ayuda`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grupos_ayuda`
--
ALTER TABLE `grupos_ayuda`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registro_mascota`
--
ALTER TABLE `registro_mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reportar_emergencia`
--
ALTER TABLE `reportar_emergencia`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

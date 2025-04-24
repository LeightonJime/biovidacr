-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2025 a las 11:12:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biovidacr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id_animal` int(11) NOT NULL,
  `nombre_animal` varchar(255) NOT NULL,
  `info_animal` text NOT NULL,
  `foto_animal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos_ayuda`
--

CREATE TABLE `contactos_ayuda` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(255) NOT NULL,
  `telefono_contacto` text NOT NULL,
  `ubicacion_contacto` text NOT NULL,
  `horario_ayuda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_ayuda`
--

CREATE TABLE `grupos_ayuda` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(255) NOT NULL,
  `tipo_asistencia` text NOT NULL,
  `detalle_grupo` text NOT NULL,
  `ubicacion_grupo` text NOT NULL,
  `contacto_principal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_mascota`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
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
-- Estructura de tabla para la tabla `reportar_emergencia`
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos_ayuda`
--
ALTER TABLE `contactos_ayuda`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `grupos_ayuda`
--
ALTER TABLE `grupos_ayuda`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `registro_mascota`
--
ALTER TABLE `registro_mascota`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `reportar_emergencia`
--
ALTER TABLE `reportar_emergencia`
  ADD PRIMARY KEY (`id_reporte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--hola

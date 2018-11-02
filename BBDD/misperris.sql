-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2018 a las 03:40:02
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misperris`
--
CREATE DATABASE IF NOT EXISTS `misperris` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `misperris`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`) VALUES
(1, 'Adoptado'),
(2, 'Rescatado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id_ciudad` int(4) NOT NULL,
  `nombre_ciudad` varchar(50) NOT NULL,
  `region_id_region` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre_ciudad`, `region_id_region`) VALUES
(1, 'Arica', 1),
(2, 'Putre', 1),
(3, 'Camarones', 1),
(4, 'General Lagos', 1),
(5, 'Iquique', 2),
(6, 'Pica', 2),
(7, 'Pozo Almonte', 2),
(8, 'Camiña', 2),
(9, 'Antofagasta', 3),
(10, 'Tocopilla', 3),
(11, 'Mejillones', 3),
(12, 'Taltal', 3),
(14, 'Copiapo', 4),
(15, 'Vallenar', 4),
(16, 'Diego de almagro', 4),
(17, 'Caldera', 4),
(18, 'Coquimbo', 5),
(19, 'La Serena', 5),
(20, 'Ovalle', 5),
(21, 'Illapel', 5),
(22, 'Valparaiso', 6),
(23, 'Viña del Mar', 6),
(24, 'Quillota', 6),
(25, 'San Antonio', 6),
(26, 'Rancagua', 7),
(27, 'San Fernando', 7),
(28, 'Pichilemu', 7),
(29, 'Santa Cruz', 7),
(30, 'Talca', 8),
(31, 'Curico', 8),
(32, 'Constitucion', 8),
(33, 'Linares', 8),
(34, 'Concepcion', 9),
(35, 'Los Angeles', 9),
(36, 'Chillan ', 9),
(37, 'Lota', 9),
(38, 'Temuco', 10),
(39, 'Angol', 10),
(40, 'Pucon', 10),
(41, 'Villa Rica', 10),
(42, 'Valdivia', 11),
(43, 'Corral', 11),
(44, 'Panguipulli', 11),
(45, 'Lago Ranco', 11),
(46, 'Puerto mont', 12),
(47, 'Osorno', 12),
(48, 'Puerto Varas ', 12),
(49, 'Frutillar', 12),
(50, 'Coyahique', 13),
(51, 'Puerto Aysen ', 13),
(52, 'Aysen', 13),
(53, 'Chile chico', 13),
(54, 'Punta Arenas', 14),
(55, 'San Gregorio', 14),
(56, 'Torres del paine', 14),
(57, 'Laguna Blanca', 14),
(58, 'Santiago', 15),
(59, 'Melipilla', 15),
(60, 'Maipo', 15),
(61, 'Puente Alto', 15),
(62, 'Buin', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `peso` varchar(45) NOT NULL,
  `raza` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `edad` varchar(45) NOT NULL,
  `CATEGORIA_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

DROP TABLE IF EXISTS `postulante`;
CREATE TABLE `postulante` (
  `run` varchar(12) NOT NULL,
  `nombre_com` varchar(100) NOT NULL,
  `fecha_nacimiento` int(10) NOT NULL,
  `telefono` int(9) NOT NULL,
  `ciudad_id_ciudad` int(4) NOT NULL,
  `ciudad_region_id_region` int(4) NOT NULL,
  `tipo_vivienda_id_vivienda` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `id_region` int(4) NOT NULL,
  `nombre_region` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `nombre_region`) VALUES
(1, ' XV de Arica y Parinacota'),
(2, 'I de Tarapacá'),
(3, 'II de Antofagasta'),
(4, 'III de Atacama'),
(5, 'IV de Coquimbo'),
(6, 'V de Valparaíso'),
(7, 'VI del Libertador General Bernardo O\'Higgins'),
(8, 'VII del Maule'),
(9, 'VIII del Bío Bío'),
(10, 'IX de la Araucanía'),
(11, 'XIV de los Ríos'),
(12, 'X de los Lagos'),
(13, 'XI Aisén del General Carlos Ibáñez del Campo'),
(14, 'XII de Magallanes y Antártica Chilena'),
(15, 'Región Metropolitana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

DROP TABLE IF EXISTS `tipo_vivienda`;
CREATE TABLE `tipo_vivienda` (
  `id_vivienda` int(4) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`id_vivienda`, `descripcion`) VALUES
(1, 'Casa con patio grande'),
(2, 'Casa con patio pequeño'),
(3, 'Casa sin patio'),
(4, 'Departamento');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`,`region_id_region`),
  ADD KEY `fk_ciudad_region_idx` (`region_id_region`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `fk_MASCOTA_CATEGORIA1_idx` (`CATEGORIA_id_categoria`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`run`),
  ADD KEY `fk_postulante_ciudad1_idx` (`ciudad_id_ciudad`,`ciudad_region_id_region`),
  ADD KEY `fk_postulante_tipo_vivienda1_idx` (`tipo_vivienda_id_vivienda`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `tipo_vivienda`
--
ALTER TABLE `tipo_vivienda`
  ADD PRIMARY KEY (`id_vivienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

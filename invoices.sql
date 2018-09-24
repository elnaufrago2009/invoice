-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-09-2018 a las 05:49:33
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `invoices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(6) NOT NULL,
  `razon_social` varchar(200) NOT NULL,
  `ruc` varchar(15) NOT NULL,
  `representante` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `abrevia` varchar(4) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `abrevia`, `descripcion`) VALUES
(1, 'F', 'FACTURA ELECTRÓNICA'),
(2, 'B', 'BOLETA DE VENTA ELECTRÓNICA'),
(3, 'NC', 'NOTA DE CRÉDITO ELECTRÓNICA'),
(4, 'NB', 'NOTA DE DÉBITO ELECTRÓNICA'),
(5, 'GR', 'GUÍA DE REMISIÓN REMITENTE ELECTRÓNICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emisores`
--

CREATE TABLE `emisores` (
  `id` int(11) NOT NULL,
  `ruc` varchar(12) DEFAULT NULL,
  `razon_social` varchar(300) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `web` varchar(250) DEFAULT NULL,
  `razon_comercial` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `emisores`
--

INSERT INTO `emisores` (`id`, `ruc`, `razon_social`, `telefono`, `email`, `web`, `razon_comercial`) VALUES
(8, '20532710066', 'SUR MOTRIZ SOCIEDAD COMERCIAL DE RESPONSABILIDAD LIMITADA- SURMOTRIZ S.R.L.', NULL, NULL, NULL, 'TOYOTA SURMOTRIZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `id` int(11) NOT NULL,
  `codigo` varchar(5) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `ubigeo` varchar(8) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `emisor_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`id`, `codigo`, `descripcion`, `ubigeo`, `direccion`, `departamento`, `provincia`, `distrito`, `emisor_id`) VALUES
(1, '001', 'SUR MOTRIZ SOCIEDAD COMERCIAL DE RESPONSABILIDAD LIMITADA- SURMOTRIZ S.R.L.', NULL, 'AV. LEGUIA NRO. 1870 (FRENTE A I.E. JOSE ROSA ARA) TACNA - TACNA - TACNA', NULL, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `serie` varchar(4) DEFAULT NULL,
  `documento_id` int(3) DEFAULT NULL,
  `local_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `ruc` varchar(11) NOT NULL,
  `activo` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emisores`
--
ALTER TABLE `emisores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `emisores`
--
ALTER TABLE `emisores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

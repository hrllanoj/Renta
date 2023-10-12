-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 19:03:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `renta2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_administracion`
--

CREATE TABLE `info_administracion` (
  `id_info_administracion` int(200) NOT NULL,
  `fecha_de__fecha_hasta` varchar(200) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `daños_mantenimiento` varchar(200) NOT NULL,
  `revision` varchar(200) NOT NULL,
  `predial` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_administracion_2`
--

CREATE TABLE `info_administracion_2` (
  `id_info_administracion` int(200) NOT NULL,
  `fecha_de__fecha_hasta` varchar(200) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `daños_mantenimiento` varchar(200) NOT NULL,
  `revision` varchar(200) NOT NULL,
  `predial` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_administracion_3`
--

CREATE TABLE `info_administracion_3` (
  `id_info_administracion` int(200) NOT NULL,
  `fecha_de__fecha_hasta` varchar(200) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `daños_mantenimiento` varchar(200) NOT NULL,
  `revision` varchar(200) NOT NULL,
  `predial` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_administracion_4`
--

CREATE TABLE `info_administracion_4` (
  `id_info_administracion` int(200) NOT NULL,
  `fecha_de__fecha_hasta` varchar(200) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `daños_mantenimiento` varchar(200) NOT NULL,
  `revision` varchar(200) NOT NULL,
  `predial` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_apartamento`
--

CREATE TABLE `info_apartamento` (
  `id_info_apartamento` int(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `alcobas` varchar(200) NOT NULL,
  `baños` varchar(200) NOT NULL,
  `patio_terraza` varchar(200) NOT NULL,
  `amoblado` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_apartamento_2`
--

CREATE TABLE `info_apartamento_2` (
  `id_info_apartamento` int(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `alcobas` varchar(200) NOT NULL,
  `baños` varchar(200) NOT NULL,
  `patio_terraza` varchar(200) NOT NULL,
  `amoblado` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_apartamento_3`
--

CREATE TABLE `info_apartamento_3` (
  `id_info_apartamento` int(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `alcobas` varchar(200) NOT NULL,
  `baños` varchar(200) NOT NULL,
  `patio_terraza` varchar(200) NOT NULL,
  `amoblado` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_apartamento_4`
--

CREATE TABLE `info_apartamento_4` (
  `id_info_apartamento` int(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `alcobas` varchar(200) NOT NULL,
  `baños` varchar(200) NOT NULL,
  `patio_terraza` varchar(200) NOT NULL,
  `amoblado` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_inquilino`
--

CREATE TABLE `info_inquilino` (
  `id_info_inquilino` int(200) NOT NULL,
  `fecha_de_fecha_hasta` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `documento_` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `cobro_debe` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_inquilino_2`
--

CREATE TABLE `info_inquilino_2` (
  `id_info_inquilino` int(200) NOT NULL,
  `fecha_de_fecha_hasta` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `documento_` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `cobro_debe` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_inquilino_3`
--

CREATE TABLE `info_inquilino_3` (
  `id_info_inquilino` int(200) NOT NULL,
  `fecha_de_fecha_hasta` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `documento_` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `cobro_debe` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_inquilino_4`
--

CREATE TABLE `info_inquilino_4` (
  `id_info_inquilino` int(200) NOT NULL,
  `fecha_de_fecha_hasta` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `documento_` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `cobro_debe` varchar(200) NOT NULL,
  `id_usuarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_administracion`
--
ALTER TABLE `info_administracion`
  ADD PRIMARY KEY (`id_info_administracion`);

--
-- Indices de la tabla `info_administracion_2`
--
ALTER TABLE `info_administracion_2`
  ADD PRIMARY KEY (`id_info_administracion`);

--
-- Indices de la tabla `info_administracion_3`
--
ALTER TABLE `info_administracion_3`
  ADD PRIMARY KEY (`id_info_administracion`);

--
-- Indices de la tabla `info_administracion_4`
--
ALTER TABLE `info_administracion_4`
  ADD PRIMARY KEY (`id_info_administracion`);

--
-- Indices de la tabla `info_apartamento`
--
ALTER TABLE `info_apartamento`
  ADD PRIMARY KEY (`id_info_apartamento`);

--
-- Indices de la tabla `info_apartamento_2`
--
ALTER TABLE `info_apartamento_2`
  ADD PRIMARY KEY (`id_info_apartamento`);

--
-- Indices de la tabla `info_apartamento_3`
--
ALTER TABLE `info_apartamento_3`
  ADD PRIMARY KEY (`id_info_apartamento`);

--
-- Indices de la tabla `info_apartamento_4`
--
ALTER TABLE `info_apartamento_4`
  ADD PRIMARY KEY (`id_info_apartamento`);

--
-- Indices de la tabla `info_inquilino`
--
ALTER TABLE `info_inquilino`
  ADD PRIMARY KEY (`id_info_inquilino`);

--
-- Indices de la tabla `info_inquilino_2`
--
ALTER TABLE `info_inquilino_2`
  ADD PRIMARY KEY (`id_info_inquilino`);

--
-- Indices de la tabla `info_inquilino_3`
--
ALTER TABLE `info_inquilino_3`
  ADD PRIMARY KEY (`id_info_inquilino`);

--
-- Indices de la tabla `info_inquilino_4`
--
ALTER TABLE `info_inquilino_4`
  ADD PRIMARY KEY (`id_info_inquilino`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_administracion`
--
ALTER TABLE `info_administracion`
  MODIFY `id_info_administracion` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_administracion_2`
--
ALTER TABLE `info_administracion_2`
  MODIFY `id_info_administracion` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_administracion_3`
--
ALTER TABLE `info_administracion_3`
  MODIFY `id_info_administracion` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_administracion_4`
--
ALTER TABLE `info_administracion_4`
  MODIFY `id_info_administracion` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_apartamento`
--
ALTER TABLE `info_apartamento`
  MODIFY `id_info_apartamento` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_apartamento_2`
--
ALTER TABLE `info_apartamento_2`
  MODIFY `id_info_apartamento` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_apartamento_3`
--
ALTER TABLE `info_apartamento_3`
  MODIFY `id_info_apartamento` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_apartamento_4`
--
ALTER TABLE `info_apartamento_4`
  MODIFY `id_info_apartamento` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_inquilino`
--
ALTER TABLE `info_inquilino`
  MODIFY `id_info_inquilino` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_inquilino_2`
--
ALTER TABLE `info_inquilino_2`
  MODIFY `id_info_inquilino` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_inquilino_3`
--
ALTER TABLE `info_inquilino_3`
  MODIFY `id_info_inquilino` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_inquilino_4`
--
ALTER TABLE `info_inquilino_4`
  MODIFY `id_info_inquilino` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

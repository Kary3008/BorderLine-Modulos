-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2020 a las 05:33:42
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id_Alumno` int(11) NOT NULL,
  `Nombre_A` varchar(50) NOT NULL,
  `ApellidoP_A` varchar(50) NOT NULL,
  `ApellidoM_A` varchar(50) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Id_Genero` int(2) NOT NULL,
  `Id_Grupo` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Carrera` int(11) NOT NULL,
  `Id_Plantel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id_Alumno`, `Nombre_A`, `ApellidoP_A`, `ApellidoM_A`, `Fecha_Nac`, `Id_Genero`, `Id_Grupo`, `Id_Usuario`, `Id_Carrera`, `Id_Plantel`) VALUES
(1, 'Fernanda', 'Osorio', 'Vega', '2003-12-01', 2, 1, 1, 4, 1),
(2, 'Omar', 'Leyva', 'Navarro', '2004-12-16', 1, 2, 2, 3, 12),
(3, 'Alonso', 'Villalpando', 'Camarena', '2003-12-06', 1, 3, 3, 1, 10),
(4, 'Sara', 'García', 'Velazquez', '2005-12-19', 2, 4, 4, 2, 4),
(5, 'Sofía', 'Fernández', 'López', '2004-12-28', 2, 5, 5, 3, 14),
(6, 'Diana', 'Vega', 'Velazquez', '2005-12-30', 2, 6, 6, 3, 18),
(7, 'Jose Miguel', 'García', 'Rivera', '2005-12-12', 2, 7, 7, 1, 5),
(8, 'Natalia', 'Palacios', 'Flores', '2005-12-11', 2, 8, 8, 4, 9),
(9, 'Bryan', 'Villareal', 'Perez', '2003-12-19', 1, 9, 9, 1, 16),
(10, 'Alfredo', 'Pacheco', 'Leyva', '2003-12-31', 1, 10, 10, 3, 20),
(11, 'Alexa', 'Vazquez', 'Flores', '2004-12-05', 2, 11, 11, 1, 11),
(12, 'Frida', 'Martínez', 'Sanchez', '2003-12-24', 2, 12, 12, 3, 7),
(13, 'Angelica', 'Mendoza', 'Fuentes', '2003-12-07', 2, 13, 13, 2, 3),
(14, 'Daniel', 'Gómez', 'Villareal', '2020-12-01', 1, 14, 14, 3, 13),
(15, 'Diego', 'Villalpando', 'Camarena', '2020-12-02', 1, 15, 15, 1, 15),
(16, 'Vanessa', 'Barrera', 'Monroy', '2020-12-14', 2, 16, 16, 1, 17),
(17, 'Roberto', 'Mejía', 'Pérez', '2020-12-18', 1, 17, 17, 3, 19),
(18, 'Danielle', 'Arciniegas', 'Franco', '2020-12-13', 2, 18, 18, 1, 6),
(19, 'Isabella', 'Castillo', 'Andrade', '2020-12-09', 2, 19, 19, 4, 2),
(20, 'María Gabriela', 'De Faría', 'Chacón', '2020-12-03', 2, 20, 20, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Id_Carrera` int(11) NOT NULL,
  `Nombre_Carrera` varchar(50) NOT NULL,
  `Codigo_C` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`Id_Carrera`, `Nombre_Carrera`, `Codigo_C`) VALUES
(1, 'Informatica', 'INFO08'),
(2, 'Contabilidad', 'CONT08'),
(3, 'Alimentos y Bebidas', 'ALBE08'),
(4, 'Hospitalidad Turistica', 'HOSP08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `Id_Genero` int(11) NOT NULL,
  `Nombre_G` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`Id_Genero`, `Nombre_G`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `Id_Grupo` int(11) NOT NULL,
  `Grupo` int(50) NOT NULL,
  `Id_Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`Id_Grupo`, `Grupo`, `Id_Carrera`) VALUES
(1, 101, 3),
(2, 102, 3),
(3, 103, 2),
(4, 104, 4),
(5, 105, 1),
(6, 106, 1),
(7, 201, 3),
(8, 202, 3),
(9, 203, 2),
(10, 204, 4),
(11, 205, 1),
(12, 206, 1),
(13, 301, 3),
(14, 302, 3),
(15, 303, 2),
(16, 304, 4),
(17, 305, 1),
(18, 306, 1),
(19, 401, 3),
(20, 402, 3),
(21, 403, 2),
(22, 404, 4),
(23, 405, 1),
(24, 406, 1),
(25, 501, 3),
(26, 502, 3),
(27, 503, 2),
(28, 504, 4),
(29, 505, 1),
(30, 506, 1),
(31, 601, 3),
(32, 602, 3),
(33, 603, 2),
(34, 604, 4),
(35, 605, 1),
(36, 606, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel`
--

CREATE TABLE `plantel` (
  `Id_Plantel` int(11) NOT NULL,
  `Nombre_Plantel` varchar(50) NOT NULL,
  `Codigo_Plantel` int(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plantel`
--

INSERT INTO `plantel` (`Id_Plantel`, `Nombre_Plantel`, `Codigo_Plantel`, `Direccion`) VALUES
(1, 'Naucalpan I', 187, 'Naucalpan de Juárez'),
(2, 'Naucalpan II', 188, 'Naucalpan de Juárez'),
(3, 'Huixquilucan', 181, 'Huixquilucan'),
(4, 'Atizapan I', 183, 'Atizapán de Zaragoza'),
(5, 'Atizapan II', 190, 'Atizapán de Zaragoza'),
(6, 'Ecatepec I', 191, 'Ecatepec de Morelos'),
(7, 'Ecatepec II', 192, 'Ecatapec de Morelos'),
(8, 'Ecatepec III', 193, 'Ecatepec de Morelos'),
(9, 'Tlalnepantla I', 174, 'Tlalnepantla de Baz'),
(10, 'Tlalnepantla II', 175, 'Tlalnepantla de Baz'),
(11, 'Tlalnepantla III', 176, 'Tlalnepantla de Baz'),
(12, 'Tultitlán', 178, 'Tultitlán'),
(13, 'Toluca', 180, 'Toluca de Lerdo'),
(14, 'Valle de Aragón', 165, 'Ecatepec de Morelos'),
(15, 'Cuatitlán', 189, 'Cuatitlán'),
(16, 'Chimalhuacán', 179, 'Chimalhuacán'),
(17, 'El Oro', 163, 'El Oro'),
(18, 'Nicolas Romero', 164, 'Nicolás Romero'),
(19, 'Chalco', 199, 'Chalco'),
(20, 'Coacalco', 166, 'Coacalco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Correo_U` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Usuario`, `Correo_U`, `Password`, `Estado`) VALUES
(1, 'Fer30', 'ferov@gmail.com', '123456', 'Activo'),
(2, 'Omar25', 'omarleyva@gmail.com', '678900', 'Activo'),
(3, 'AlonVillal', 'camarenalonso@outlook.com', '323232', 'Activo'),
(4, 'SarahG', 'saragarcia@gmail.com', '654321', 'Activo'),
(5, 'Sofi234', 'lopezsofia@outlook.com', '9876', 'Activo'),
(6, 'Dianavega', 'vegavelazquez@outlook.com', '1234', 'Activo'),
(7, 'JosDice', 'miguelriv@hotmail.com', '5054', 'Activo'),
(8, 'NatyD5', 'natpalacios@gmail.com', '101010', 'Activo'),
(9, 'BryMouque', 'brianperez@hotmail.com', '34567', 'Activo'),
(10, 'Freddy01', 'leyvafr@outlook.com', '99898', 'Activo'),
(11, 'AleF', 'alexa25@hotmail.com', '87654', 'Activo'),
(12, 'Frida18', 'sanchezfri31@gmail.com', '678900', 'Activo'),
(13, 'Angie05', 'angiemend3@outlook.com', '10987', 'Activo'),
(14, 'DanGV', 'villadani34@gmail.com', '456789', 'Activo'),
(15, 'DiR18', 'villaldiego@gmail.com', '87653', 'Activo'),
(16, 'VaneM9', 'monroym9@outlook.com', '88088', 'Activo'),
(17, 'Roby_Mejia', 'robymp24@hotmail.com', '545454', 'Activo'),
(18, 'DaniArc', 'danielle97@hotmail.com', '5432', 'Activo'),
(19, 'BellaCastillo', 'isac58@outlook.com', '789789', 'Activo'),
(20, 'Mari_Faria16', 'faria28@gmail.com', '123123', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id_Alumno`),
  ADD KEY `Id_Genero` (`Id_Genero`),
  ADD KEY `Id_Grupo` (`Id_Grupo`),
  ADD KEY `Id_Carrera` (`Id_Carrera`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Plantel` (`Id_Plantel`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Id_Carrera`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`Id_Genero`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`Id_Grupo`),
  ADD KEY `Id_Carrera` (`Id_Carrera`);

--
-- Indices de la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`Id_Plantel`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `Id_Alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `Id_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `Id_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `Id_Grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `plantel`
--
ALTER TABLE `plantel`
  MODIFY `Id_Plantel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`Id_Carrera`) REFERENCES `carrera` (`Id_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupos` (`Id_Grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`Id_Plantel`) REFERENCES `plantel` (`Id_Plantel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`Id_Genero`) REFERENCES `genero` (`Id_Genero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`Id_Carrera`) REFERENCES `carrera` (`Id_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `alumnos` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

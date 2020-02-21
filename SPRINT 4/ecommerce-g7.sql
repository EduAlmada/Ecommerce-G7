-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2020 a las 06:29:11
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce-g7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `catNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `catNombre`) VALUES
(1, 'Camperas'),
(2, 'Camperas Sport'),
(3, 'Sacos'),
(4, 'Chalecos'),
(5, 'Tapados'),
(6, 'Kimonos'),
(7, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int(11) NOT NULL,
  `mkNombre` varchar(30) NOT NULL,
  `Proveedor` text NOT NULL,
  `domicilioProveedor` text NOT NULL,
  `telefonoProveedor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `mkNombre`, `Proveedor`, `domicilioProveedor`, `telefonoProveedor`) VALUES
(1, 'Tommy Hilfiger', 'Roberto SA', '', ''),
(2, 'Rapsodia', 'Cecilia SRL', '', ''),
(3, 'Donadonna', 'Florencia SRL', '', ''),
(4, 'Portsaid', 'El Checho SA', '', ''),
(5, 'Prussia', 'C Tevez', '', ''),
(6, 'Laila', 'Virginia Cia', '', ''),
(7, 'Spiga 31', 'Pepe SAIC', '', ''),
(8, 'Valdivia', 'Negro el 8', '', ''),
(9, 'Yurine', 'Ernesto Baffa', '', ''),
(10, 'Bohemia', 'Art y Asoc SA', '', ''),
(11, 'Darling Sport', 'Copiadora SRL', '', ''),
(12, 'Devré', 'Devré SA', '', ''),
(13, 'Eastwood', 'Clint SA', '', ''),
(14, 'Siliquini', 'Siliquini Mayorista', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `cantidad` int(8) NOT NULL,
  `fechaCompra` date NOT NULL,
  `fechaEnvio` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `statusCompra` tinyint(1) NOT NULL,
  `statusEnvio` tinyint(1) NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `prdNombre` varchar(30) NOT NULL,
  `prdPrecio` double NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `prdPresentacion` text NOT NULL,
  `prdStock` int(6) NOT NULL,
  `prdImagen` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `idMarca`, `idCategoria`, `prdPresentacion`, `prdStock`, `prdImagen`) VALUES
(1, 'Campera1', 500.12, 1, 2, 'Campera Número 1', 15, 'P001.jpg'),
(2, 'Campera2', 610.16, 1, 1, 'Campera Número 2', 29, 'P002.jpg'),
(3, 'Campera3', 510.12, 6, 1, 'Campera Número 3', 13, 'P003.jpg'),
(4, 'Saco1', 459.91, 2, 3, 'Saco Número 1', 9, 'P004.jpg'),
(5, 'Saco2', 489.91, 5, 3, 'Saco Número 2', 16, 'P005.jpg'),
(6, 'Saco3', 423.91, 4, 3, 'Saco Número 3', 19, 'P006.jpg'),
(7, 'Chaleco1', 600, 0, 4, 'Chaleco Número 1', 20, 'P007.jpg'),
(8, 'Chaleco2', 700, 100, 4, 'Chaleco Número 2', 23, 'P008.jpg'),
(9, 'Chaleco3', 390, 0, 4, 'Chaleco Número 3', 27, 'P009.jpg'),
(10, 'Tapado1', 750.51, 0, 5, 'Tapado Número 1', 8, 'P010.jpg'),
(11, 'Tapado2', 740.51, 4, 5, 'Tapado Numero 2', 12, 'P011.jpg'),
(12, 'Kimono1', 300.21, 5, 6, 'Kimono Número 1', 25, 'P012.jpg'),
(13, 'Kimono2', 310.21, 3, 6, 'Kimono Número 2', 27, 'P013.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuNombre` varchar(30) NOT NULL,
  `usuApellido` varchar(30) NOT NULL,
  `usuEmail` varchar(30) NOT NULL,
  `usuPass` varchar(20) NOT NULL,
  `usuDomicilio` varchar(30) NOT NULL,
  `usuCodPostal` int(10) NOT NULL,
  `usuLocalidad` text NOT NULL,
  `usuProvincia` text NOT NULL,
  `usuPais` text NOT NULL,
  `usuEstado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuNombre`, `usuApellido`, `usuEmail`, `usuPass`, `usuDomicilio`, `usuCodPostal`, `usuLocalidad`, `usuProvincia`, `usuPais`, `usuEstado`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', '', 0, '', '', '', 1),
(2, 'nombretest', 'apellidotest', 'test@mail.com', 'clavetest', '', 0, '', '', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `Marca` (`idMarca`),
  ADD KEY `Rubro` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `Email` (`usuEmail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2020 a las 04:45:54
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
-- Base de datos: `ecommerce-g7-3`
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
(1, 'Sacos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `idColor` int(11) NOT NULL,
  `color` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`idColor`, `color`) VALUES
(1, 'Azul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int(11) NOT NULL,
  `mkNombre` varchar(30) NOT NULL,
  `Proveedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `mkNombre`, `Proveedor`) VALUES
(1, 'Vendré', 'Almada SA'),
(2, 'Vendré', 'Almada SA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mpedidos`
--

CREATE TABLE `mpedidos` (
  `idPedido` int(11) NOT NULL,
  `pedidoweb` int(20) NOT NULL,
  `fechaCrea` date NOT NULL,
  `cliente` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `prdNombre` varchar(30) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `importe` double NOT NULL,
  `tipoEntrega` varchar(30) NOT NULL,
  `estadoEntrega` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `prdNombre` varchar(30) NOT NULL,
  `prdDetalle` varchar(50) DEFAULT NULL,
  `prdCosto` double NOT NULL,
  `prdPrecio` double NOT NULL,
  `marca` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `talle` varchar(30) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `prdImagen` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdDetalle`, `prdCosto`, `prdPrecio`, `marca`, `categoria`, `color`, `talle`, `genero`, `stock`, `prdImagen`) VALUES
(3, 'Saco1', NULL, 0, 0, 'Vendré', 'Sacos', 'Azul', 'Small', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nombreProv` varchar(50) NOT NULL,
  `domicilioProv` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `telefonoProv` int(20) NOT NULL,
  `emailProv` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `idTalle` int(11) NOT NULL,
  `talle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`idTalle`, `talle`) VALUES
(1, 'Small');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `domicilio` varchar(30) NOT NULL,
  `codigopostal` varchar(20) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `email`, `password`, `domicilio`, `codigopostal`, `localidad`, `provincia`, `pais`) VALUES
(1, 'Eduardo', 'Almada', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `categoria` (`catNombre`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`idColor`),
  ADD KEY `color` (`color`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`),
  ADD KEY `nombre` (`mkNombre`),
  ADD KEY `proveedor` (`Proveedor`);

--
-- Indices de la tabla `mpedidos`
--
ALTER TABLE `mpedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idcliente` (`cliente`),
  ADD KEY `idproducto` (`idProducto`),
  ADD KEY `prdNombre` (`prdNombre`),
  ADD KEY `tipoentrega` (`tipoEntrega`),
  ADD KEY `estadoentrega` (`estadoEntrega`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `categorias` (`categoria`) USING BTREE,
  ADD KEY `productos-marcas` (`marca`),
  ADD KEY `prdNombre` (`prdNombre`),
  ADD KEY `productos-colores` (`color`),
  ADD KEY `productos-talles` (`talle`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`idTalle`),
  ADD KEY `talle` (`talle`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `idColor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mpedidos`
--
ALTER TABLE `mpedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `idTalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mpedidos`
--
ALTER TABLE `mpedidos`
  ADD CONSTRAINT `pedidos-cliente` FOREIGN KEY (`cliente`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `pedidos-producto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  ADD CONSTRAINT `pedidos-producto2` FOREIGN KEY (`prdNombre`) REFERENCES `productos` (`prdNombre`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos-categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`catNombre`),
  ADD CONSTRAINT `productos-colores` FOREIGN KEY (`color`) REFERENCES `colores` (`color`),
  ADD CONSTRAINT `productos-marcas` FOREIGN KEY (`marca`) REFERENCES `marcas` (`mkNombre`),
  ADD CONSTRAINT `productos-talles` FOREIGN KEY (`talle`) REFERENCES `talles` (`talle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

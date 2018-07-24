-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2018 a las 21:45:48
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pintura_prueba`
--
CREATE DATABASE IF NOT EXISTS `pintura_prueba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `pintura_prueba`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Pa_empleado` (IN `usuario` VARCHAR(20), IN `contra` VARCHAR(120))  NO SQL
SELECT Count(*) FROM empleado WHERE id_permiso = 3 AND nombre_usuario = (usuario) AND contrasena = (contra)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PA_insertaEstado` (IN `PA_Estado` VARCHAR(20))  NO SQL
INSERT INTO estado(estado)
VALUES(Pa_Estado)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`, `id_marca`) VALUES
(8, 'Especial', 3),
(9, 'Standard', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla de los clientes (entraran a sitio publico)';

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombres`, `apellidos`, `email`, `nombre_usuario`, `contrasena`) VALUES
(5, 'Andres Oswaldo', 'Henriquez Gomez', 'andresdosmil@gmail.com', 'AndresK21', '$2y$10$svX9qHHUgA1zXjzIzGd5puez2PLyikPcqZLhGnAKV6JWx79//N0vu'),
(9, 'Nombre', 'Apellido', 'usuario@gmail.com', 'cliente', '$2y$10$zpwy33ITsGcfXWcD/j6ms.a1KdKYmTy7qm/ALoZjMAUQFyuXSUEy2'),
(10, 'Diego', 'Guzman', 'diego.christopher@hotmail.com', 'DGuzman23', '$2y$10$qYk095lSv0Jm//zNx7WaluxvXfZrgC2hqE7M2eKAqeAANzT83Fo.a');

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `cliente-pedido` AFTER INSERT ON `cliente` FOR EACH ROW BEGIN

DECLARE cliente1 int;
DECLARE fecha1 date;

SET cliente1 = (SELECT MAX(id_cliente) FROM cliente);
SET fecha1 = CURRENT_DATE;

INSERT INTO pedido(estado, fecha, id_cliente, id_empleado) VALUES(1, fecha1, cliente1, 12);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='detlle del pedido ()<productos y cantidades)';

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle`, `id_producto`, `cantidad`, `fecha`, `estado`, `id_pedido`) VALUES
(70, 17, 25, '2018-04-24', 0, 6),
(71, 19, 5, '2018-04-24', 0, 6),
(72, 17, 12, '2018-04-24', 0, 6),
(73, 17, 30, '2018-04-24', 0, 6),
(74, 19, 2, '2018-04-24', 0, 6),
(75, 19, 5, '2018-04-24', 0, 6),
(82, 17, 25, '2018-04-24', 0, 7),
(83, 17, 25, '2018-04-24', 0, 6),
(84, 17, 50, '2018-04-24', 0, 9),
(85, 17, 25, '2018-04-24', 0, 6),
(86, 24, 25, '2018-04-24', 1, 16),
(87, 18, 6, '2018-04-24', 0, 16),
(88, 18, 4, '2018-04-24', 1, 16),
(89, 24, 2, '2018-04-24', 1, 16),
(90, 17, 5, '2018-05-08', 1, 16),
(91, 19, 5, '2018-05-08', 1, 16),
(92, 24, 1, '2018-05-02', 1, 17),
(93, 17, 5, '2018-05-02', 1, 17),
(94, 18, 5, '2018-05-02', 1, 17),
(95, 18, 3, '2018-05-02', 1, 17),
(96, 17, 4, '2018-05-02', 1, 17),
(97, 24, 56, '2018-05-02', 1, 17),
(98, 17, 6, '2018-05-02', 1, 17),
(99, 24, 15, '2018-05-02', 1, 17),
(100, 24, 2, '2018-05-07', 1, 17),
(101, 17, 4, '0000-00-00', 0, 17),
(103, 28, 2, '2018-05-08', 1, 18),
(104, 18, 2, '2018-05-08', 1, 18),
(105, 19, 1, '2018-05-08', 1, 18),
(106, 17, 2, '2018-06-22', 1, 16),
(107, 18, 2, '2018-06-22', 1, 16),
(108, 19, 3, '2018-06-22', 1, 16),
(109, 21, 5, '2018-06-22', 1, 16),
(110, 24, 3, '2018-06-22', 1, 16),
(111, 25, 2, '2018-06-22', 1, 16),
(112, 26, 4, '2018-06-22', 1, 16),
(113, 27, 3, '2018-06-22', 1, 16),
(114, 28, 1, '2018-06-22', 1, 16),
(115, 30, 2, '2018-06-22', 1, 16),
(116, 33, 3, '2018-06-22', 1, 16),
(117, 35, 4, '2018-06-22', 1, 16),
(118, 29, 5, '2018-06-22', 1, 16),
(119, 31, 6, '2018-06-22', 1, 16),
(120, 32, 7, '2018-06-22', 1, 16),
(121, 34, 8, '2018-06-22', 1, 16),
(122, 17, 1, '2018-06-26', 1, 19),
(123, 18, 1, '2018-06-26', 1, 19),
(124, 30, 2, '2018-06-26', 1, 19),
(125, 30, 20, '2018-06-26', 1, 19),
(126, 17, 1, '2018-06-26', 1, 19),
(127, 28, 23, '2018-06-26', 1, 19),
(128, 33, 1, '2018-06-26', 1, 19),
(129, 33, 1, '2018-06-26', 1, 19),
(130, 35, 1, '2018-06-26', 1, 19),
(131, 18, 1, '2018-06-26', 1, 19),
(132, 33, 1, '2018-06-26', 1, 19),
(133, 35, 1, '2018-06-26', 1, 19),
(134, 33, 1, '2018-06-26', 1, 19),
(135, 33, 1, '2018-06-26', 1, 19),
(136, 33, 1, '2018-06-26', 1, 19),
(137, 19, 1, '2018-06-26', 1, 19),
(138, 28, 1, '2018-06-26', 1, 19),
(139, 35, 1, '2018-06-26', 1, 19),
(140, 21, 1, '2018-06-26', 1, 19),
(141, 35, 1, '2018-06-26', 1, 19),
(142, 30, 2, '2018-06-26', 1, 19),
(143, 33, 1, '2018-06-26', 1, 19),
(144, 30, 2, '2018-06-26', 1, 19),
(145, 21, 2, '2018-06-26', 1, 19),
(146, 33, 1, '2018-06-26', 1, 19),
(147, 18, 1, '2018-07-02', 1, 19),
(148, 33, 1, '2018-07-02', 1, 19);

--
-- Disparadores `detalle_pedido`
--
DELIMITER $$
CREATE TRIGGER `cantidad_productos` AFTER INSERT ON `detalle_pedido` FOR EACH ROW BEGIN

DECLARE cantidad1 int;
DECLARE producto1 int;

SET cantidad1 = (SELECT cantidad FROM detalle_pedido WHERE id_detalle = (SELECT MAX(id_detalle) FROM detalle_pedido));

SET producto1 = (SELECT id_producto FROM detalle_pedido WHERE id_detalle = (SELECT MAX(id_detalle) FROM detalle_pedido));

UPDATE producto Set cantidad = cantidad - cantidad1 WHERE id_producto = producto1;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre_completo` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo_electronico` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(220) COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_permiso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla de los empleados ()<usaran el dasboard';

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_completo`, `correo_electronico`, `nombre_usuario`, `contrasena`, `imagen`, `id_permiso`) VALUES
(14, 'Diego Edgardo Guzman Huezo', 'diego.christopher@hotmail.com', 'Diego', '$2y$10$QNyl46npdBQYFvuEMEe.OeChiVCSAAfa78LwMraMnlCy8rJtV708.', '5b578164388cc.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='estado existente o sin existencias de los productos';

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'disponible'),
(2, 'Inactivo'),
(3, 'Ejemplo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(4, 'Comex'),
(3, 'Protecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla de carrito';

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `estado`, `fecha`, `id_cliente`, `id_empleado`) VALUES
(6, 1, '2000-01-01', NULL, NULL),
(7, 1, '2000-01-01', NULL, NULL),
(8, 1, '2000-01-01', NULL, NULL),
(9, 1, '2018-04-15', NULL, NULL),
(10, 1, '2018-04-15', NULL, NULL),
(11, 1, '2018-04-17', NULL, NULL),
(15, 1, '2018-04-25', NULL, NULL),
(16, 1, '2018-04-29', 5, NULL),
(17, 1, '2018-05-07', NULL, NULL),
(18, 1, '2018-05-08', 9, NULL),
(19, 1, '2018-06-25', 10, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Contiene los permisos de los usuarios del dashboard';

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `permiso`) VALUES
(2, 'Administrador'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentaciones`
--

CREATE TABLE `presentaciones` (
  `id_presentacion` int(11) NOT NULL,
  `presentacion` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='presentaciones de los productos';

--
-- Volcado de datos para la tabla `presentaciones`
--

INSERT INTO `presentaciones` (`id_presentacion`, `presentacion`, `id_tipo`) VALUES
(5, 'Galones', 4),
(6, 'Litros', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `color` varchar(25) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `imagen` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_presentacion` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla de productos';

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `cantidad`, `precio`, `color`, `imagen`, `id_categoria`, `id_estado`, `id_presentacion`, `id_marca`) VALUES
(17, 'pintura 2', 995, '4.00', 'rojo', 'producto1.jpg', 8, 1, 5, 3),
(18, 'pintura 3', 993, '4.00', 'rojo', 'producto2.jpg', 8, 1, 5, 3),
(19, 'Pintura 1', 995, '2.00', 'azul', 'producto3.jpg', 8, 1, 5, 3),
(21, 'Producto 4', 992, '25.00', 'azul', '5addf9415712e.jpg', 8, 1, 5, 3),
(24, 'Producto 5', 997, '15.00', 'rojo', '5ade510c094bf.jpg', 8, 1, 5, 3),
(25, 'Producto 6', 997, '2.50', 'Azul', '5af0ba37bbb37.jpg', 8, 1, 5, 4),
(26, 'Producto 7', 995, '1.00', 'Rosado', '5af0ba944200e.jpg', 8, 1, 5, 3),
(27, 'Producto 8', 996, '5.00', 'Amarillo', '5af0baebb4547.jpg', 8, 1, 5, 3),
(28, 'Producto 9', 972, '1.50', 'Azul', '5af0bbdb88f69.jpg', 9, 1, 5, 4),
(29, 'Producto 10', 994, '1.00', 'Cafe', '5af0bc0062de9.jpg', 9, 1, 6, 3),
(30, 'Producto 11', 971, '5.00', 'Verde', '5af0bd1732615.jpg', 9, 1, 5, 3),
(31, 'Producto 12', 993, '12.00', 'Magenta', '5af0bd3a0bd1a.jpg', 9, 1, 6, 3),
(32, 'Producto 13', 992, '3.50', 'Celeste', '5af0bd873ce53.jpg', 9, 1, 6, 3),
(33, 'Producto 14', 987, '2.50', 'Naranja', '5af0bdb00c40e.jpg', 9, 1, 5, 3),
(34, 'Producto 15', 991, '1.50', 'Plateado', '5af0bddec9d32.jpg', 9, 1, 6, 4),
(35, 'Producto 16', 991, '4.00', 'Dorado', '5af0be07f2554.jpg', 9, 1, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_p`
--

CREATE TABLE `tipo_p` (
  `id_tipo` int(11) NOT NULL,
  `tipo_p` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tipos de productos que se venderan';

--
-- Volcado de datos para la tabla `tipo_p`
--

INSERT INTO `tipo_p` (`id_tipo`, `tipo_p`) VALUES
(4, 'Bandejas'),
(3, 'Brochas'),
(2, 'Pintura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id_valoracion` int(11) NOT NULL,
  `estrellas` int(1) DEFAULT NULL,
  `comentario` varchar(280) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`id_valoracion`, `estrellas`, `comentario`, `id_producto`, `id_cliente`) VALUES
(2, 4, 'comentario', 17, NULL),
(3, 4, 'comentario 2', 17, NULL),
(5, 3, 'Comentario', 24, 5),
(6, 5, 'Comentario 2', 24, 5),
(7, 2, 'Comentario', 24, NULL),
(8, 4, 'Comentario del producto', 17, 5),
(9, 3, 'Comentario del producto', 18, 5),
(10, 5, 'Comentario del producto', 19, 5),
(11, 4, 'Comentario del producto', 21, 5),
(12, 4, 'Comentario del producto', 24, 5),
(13, 5, 'Comentario del producto', 25, 5),
(14, 3, 'Comentario del producto', 27, 5),
(15, 5, 'Comentario del producto', 28, 5),
(16, 4, 'Comentario del producto', 30, 5),
(17, 5, 'Comentario del producto', 33, 5),
(18, 3, 'Comentario del producto', 35, 5),
(19, 4, 'Comentario del producto', 29, 5),
(20, 4, 'Comentario del producto', 31, 5),
(21, 3, 'Comentario del producto', 32, 5),
(22, 4, 'Comentario del producto', 34, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `categoria` (`categoria`),
  ADD KEY `categoria_ibfk_1` (`id_marca`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `detalle_pedido_ibfk_1` (`id_pedido`),
  ADD KEY `detalle_pedido_ibfk_2` (`id_producto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `correo_electronico` (`correo_electronico`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `marca` (`marca`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pedido_ibfk_1` (`id_cliente`),
  ADD KEY `pedido_ibfk_2` (`id_empleado`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  ADD PRIMARY KEY (`id_presentacion`),
  ADD UNIQUE KEY `presentacion` (`presentacion`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `producto_ibfk_1` (`id_presentacion`),
  ADD KEY `producto_ibfk_2` (`id_estado`),
  ADD KEY `producto_ibfk_3` (`id_categoria`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `tipo_p`
--
ALTER TABLE `tipo_p`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `tipo_p` (`tipo_p`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `valoraciones_ibfk_1` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  MODIFY `id_presentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tipo_p`
--
ALTER TABLE `tipo_p`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE SET NULL,
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE SET NULL;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permiso`) ON DELETE SET NULL;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  ADD CONSTRAINT `presentaciones_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_p` (`id_tipo`) ON DELETE SET NULL;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_presentacion`) REFERENCES `presentaciones` (`id_presentacion`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `valoraciones_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

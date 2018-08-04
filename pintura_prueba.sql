-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2018 a las 22:57:06
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
(10, 'Armando', 'Lydia', 'neque.sed@metus.com', 'William', 'VLP60HTC8YH'),
(11, 'Blaze', 'Aline', 'porta@utodiovel.ca', 'Regina', 'MHP19FHQ1FM'),
(12, 'Travis', 'Aline', 'correoelectr@gmail.com', 'Uta', 'UQR69GSU1LR'),
(13, 'Nehru', 'Ila', 'correoelectr3@gmail.com', 'Elizabeth', 'SLW38KLT9MC'),
(14, 'Salvador', 'Kaye', 'Mauris@diam.com', 'Mara', 'HNZ31FQM9VN'),
(15, 'Timothy', 'Bianca', 'semper@nec.edu', 'Evangeline', 'TXD35MSL6PC'),
(16, 'Kirk', 'Kelly', 'correoelectr5@gmail.com', 'Nathan', 'AAU16VFC8TP'),
(17, 'Clarke', 'Jana', 'Sed@eleifendCras.com', 'Xena', 'NRT13WNE0FN'),
(18, 'Gregory', 'Fallon', 'mauris.erat@loremegetmollis.co.uk', 'Ruth', 'WJN09KJE1SQ'),
(19, 'Adam', 'Denise', 'fermentum.arcu.Vestibulum@at.com', 'Ashton', 'GGY93XSR5JA'),
(20, 'Duncan', 'Nomlanga', 'correoelectr8@gmail.com', 'Sylvester', 'LMS93MML1CH'),
(21, 'Quentin', 'Alika', 'ante.Nunc@necorci.edu', 'Xyla', 'XUX61UWI0XY'),
(22, 'Gil', 'Elizabeth', 'vitae.aliquam.eros@Suspendisse.ca', 'Scarlet', 'DHF03OMD7KT'),
(23, 'Warren', 'Brooke', 'orci@Cumsociisnatoque.co.uk', 'Daniel', 'RZM67VRM5RY'),
(24, 'Thaddeus', 'Lucy', 'correoelectr6@gmail.com', 'Eleanor', 'ALN99DGT1QB'),
(25, 'Francis', 'Marah', 'correoelectr7@gmail.com', 'Tamara', 'JGD64UFX7XP'),
(26, 'Ashton', 'Ava', 'diam.eu.dolor@vitae.ca', 'Elaine', 'VAI08LIF7KC'),
(27, 'Finn', 'Jaden', 'in.aliquet.lobortis@mi.co.uk', 'Caleb', 'ZVE63RZJ8SZ'),
(28, 'Stuart', 'Bree', 'interdum@loremutaliquam.edu', 'Tanisha', 'ZTK92ZVX7GG'),
(29, 'Ashton', 'Brianna', 'commodo@velit.ca', 'Nichole', 'WOE94LYO2VT'),
(40, 'Hunter', 'Zelda', 'bibendum.Donec@et.net', 'Quail', 'TDS04LUK5QG'),
(41, 'Tyler', 'Amy', 'sem@et.edu', 'Todd', 'FHF10HWA0ZF'),
(42, 'Leo', 'Winter', 'sem.vitae@sitametorci.com', 'MacKensie', 'TBO40EDC6CW'),
(43, 'Edward', 'Jael', 'correoelectr4@gmail.com', 'Mohammad', 'TRK77LCB4GY'),
(44, 'Vincent', 'Jaime', 'libero.Donec@eteuismodet.net', 'Lilah', 'AZS04SGB9IN'),
(45, 'Mohammad', 'Tara', 'correoelectr9@gmail.com', 'Rogan', 'RSH14CRN6DQ'),
(46, 'Joel', 'Nayda', 'aptent@duiCumsociis.co.uk', 'Harrison', 'LCN35GCI3UJ'),
(47, 'Rahim', 'Phyllis', 'Ut@iaculis.net', 'Driscoll', 'IUS43XBX9DN'),
(48, 'Wayne', 'Leila', 'at@Curabiturconsequatlectus.co.uk', 'Abigail', 'EBQ20WUC6JH'),
(49, 'Ferris', 'Bianca', 'correoelectr2@gmail.com', 'Hedwig', 'TQI34VRT3VA'),
(80, 'Allistair', 'Yuri', 'pellentesque.eget@lacus.ca', 'Mallory', 'GCG48VLK6GH'),
(81, 'Yoshio', 'Alisa', 'correoelectr1@gmail.com', 'Burke', 'CLA78GAK7SH'),
(82, 'Kyle', 'Xantha', 'vel@diam.co.uk', 'August', 'GAL26DUW5WT'),
(83, 'Honorato', 'Yael', 'correoelectr10@gmail.com', 'Jacob', 'UWO83TEH4OW'),
(84, 'Ryder', 'Zephr', 'a.odio@necluctus.ca', 'Grady', 'LEH63USV3XK'),
(85, 'Adam', 'Adria', 'massa@a.ca', 'Kylan', 'KVI34CWT1AI'),
(86, 'Austin', 'Eleanor', 'nulla.In@volutpatNulla.co.uk', 'Fay', 'MGK00MUO8HO'),
(87, 'Craig', 'Zia', 'sed.leo@semper.org', 'Baker', 'OTJ47BER3CO'),
(88, 'Nash', 'Halee', 'Nulla.eget.metus@dui.net', 'Francis', 'KLC11CUO5CL'),
(89, 'Brennan', 'Jayme', 'ipsum@eratSed.co.uk', 'Ian', 'CEC72MDQ4CM'),
(90, 'Tanner', 'Tamara', 'pede@facilisisnon.net', 'Aimee', 'NLS41HZH6NB'),
(91, 'Kirk', 'Neve', 'eu.augue@ullamcorper.co.uk', 'Kermit', 'BBP65CLU0KP'),
(92, 'Edan', 'Donna', 'Proin.vel@euodioPhasellus.edu', 'Sade', 'LIS36CBT7PT'),
(93, 'Phillip', 'Quin', 'risus.Duis.a@pedeNuncsed.edu', 'Mariko', 'UOD41OTB2HF'),
(94, 'Sylvester', 'Cally', 'Nulla@inlobortistellus.com', 'Rinah', 'AYX74JML6GQ'),
(95, 'Hammett', 'Serina', 'justo.nec@placerat.com', 'Kasimir', 'LUE45KEW0BR'),
(96, 'Robert', 'Hermione', 'ridiculus@facilisis.ca', 'Melyssa', 'HKR88WFF7HX'),
(97, 'Galvin', 'Margaret', 'vel.faucibus@sit.com', 'Rhea', 'QCD49DWM4TF'),
(98, 'Tarik', 'Maggy', 'Sed@dolor.net', 'Zane', 'WYE52YUZ5MX'),
(99, 'Theodore', 'Regina', 'auctor@enimmitempor.ca', 'Tatyana', 'GFF42UTS8YZ');

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
(87, 18, 6, '2018-04-24', 1, 16),
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
(122, 21, 45, '2018-06-23', 1, 16),
(123, 25, 100, '2018-06-23', 1, 16),
(124, 34, 100, '2018-06-23', 1, 16);

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
  `fecha_registro` datetime NOT NULL,
  `estado` int(2) DEFAULT NULL,
  `fecha_bloqueo` datetime DEFAULT NULL,
  `id_permiso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla de los empleados ()<usaran el dasboard';

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_completo`, `correo_electronico`, `nombre_usuario`, `contrasena`, `imagen`, `fecha_registro`, `estado`, `fecha_bloqueo`, `id_permiso`) VALUES
(14, 'Jonah Barnes', 'vel.arcu@Nullamvitaediam.net', 'Emmanuel', 'Ariana Matthews', 'Sodales Industries', '0000-00-00 00:00:00', NULL, NULL, 3),
(15, 'Oleg Durham', 'correo10@gmail.com', 'Brian', 'Myra Strong', 'Accumsan Neque Et LLP', '0000-00-00 00:00:00', NULL, NULL, 3),
(16, 'Porter Kramer', 'correoelectro@gmail.com', 'Blake', 'Martina Sellers', 'Rhoncus Limited', '0000-00-00 00:00:00', NULL, NULL, 2),
(17, 'Dante Petersen', 'in.faucibus@laciniaSed.edu', 'Kevin', 'Uta Richardson', 'Ipsum Suspendisse Corporation', '0000-00-00 00:00:00', NULL, NULL, 2),
(18, 'Kelly Lyons', 'sociis.natoque@id.ca', 'Adrian', 'Eve Lindsay', 'Libero Lacus LLC', '0000-00-00 00:00:00', NULL, NULL, 2),
(19, 'Allistair Cross', 'correo1@gmail.com', 'Nash', 'Scarlet Klein', 'Interdum Company', '0000-00-00 00:00:00', NULL, NULL, 3),
(20, 'Xanthus Guerra', 'sit.amet.dolom@hotmail.com', 'Fuller', 'Elaine Andrews', 'At LLP', '0000-00-00 00:00:00', NULL, NULL, 2),
(21, 'Asher Harvey', 'correo4@gmail.com', 'Byron', 'Elizabeth Nixon', 'Tellus Limited', '0000-00-00 00:00:00', NULL, NULL, 2),
(22, 'Jason Jackson', 'molestie.dapibus@molestie.com', 'Walter', 'Dahlia Atkinson', 'Metus Vivamus Euismod LLP', '0000-00-00 00:00:00', NULL, NULL, 2),
(23, 'Bruno Carver', 'correo5@gmail.com', 'Henry', 'Joy Collins', 'Lobortis Class PC', '0000-00-00 00:00:00', NULL, NULL, 2),
(44, 'Linus Hale', 'orci.sem.eget@vitaeerat.org', 'Mufutau', 'Ayanna Wagner', 'Lectus Justo Eu LLC', '0000-00-00 00:00:00', NULL, NULL, 2),
(45, 'Cairo Kelly', 'ac@mollis.edu', 'Alan', 'Signe Molina', 'Lorem Incorporated', '0000-00-00 00:00:00', NULL, NULL, 3),
(46, 'Eaton Bishop', 'rhoncus.id@ac.ca', 'Chadwick', 'Imani Clemons', 'Ridiculus Associates', '0000-00-00 00:00:00', NULL, NULL, 3),
(47, 'Ignatius Conway', 'correo8@gmail.com', 'Neville', 'Zorita Roberts', 'Aliquet Proin PC', '0000-00-00 00:00:00', NULL, NULL, 2),
(48, 'Blaze Adams', 'augue.id@Pellentesque.net', 'Barclay', 'Sydney Williamson', 'Mi Lacinia Limited', '0000-00-00 00:00:00', NULL, NULL, 2),
(49, 'Carl Talley', 'et.lacinia@elit.ca', 'Tarik', 'Sharon Howe', 'Eu Lacus Consulting', '0000-00-00 00:00:00', NULL, NULL, 2),
(50, 'Ahmed Mcintyre', 'imperdiet@Sedauctor.net', 'Vincent', 'Cynthia Petty', 'Diam Pellentesque Habitant Incorporated', '0000-00-00 00:00:00', NULL, NULL, 2),
(51, 'Eaton Hubbard', 'nascetur.ridiculus@diam.ca', 'Bruno', 'Carol Pena', 'Montes PC', '0000-00-00 00:00:00', NULL, NULL, 3),
(52, 'Patrick Henson', 'correo11@gmail.com', 'Gary', 'Breanna Gould', 'Dis Parturient Montes Incorporated', '0000-00-00 00:00:00', NULL, NULL, 2),
(53, 'Stephen Fuller', 'ut.dolor.dapibus@enim.co.uk', 'Castor', 'Gretchen Decker', 'Mollis Duis Sit Ltd', '0000-00-00 00:00:00', NULL, NULL, 3),
(54, 'Octavius Sellers', 'convallis.ante@ligula.co.uk', 'Norman', 'Kiara Trujillo', 'Lorem Eu Metus LLP', '0000-00-00 00:00:00', NULL, NULL, 2),
(55, 'Malachi Payne', 'correo9@gmail.com', 'Laith', 'Jada Fields', 'Et Libero Consulting', '0000-00-00 00:00:00', NULL, NULL, 2),
(56, 'Erich Mcleod', 'blandit.congue.In@Sed.edu', 'Cairo', 'Skyler Mueller', 'Cursus Associates', '0000-00-00 00:00:00', NULL, NULL, 2),
(120, 'Andres Oswaldo Henriquez Gomez', 'andresdosmil@gmail.com', 'AndresK21', '$2y$10$p1G1pXZMgNJZupLu3a9Kc.wWI4qvpDDdEIn/SySj7.L/mp9hwfqC2', '5b633d9ee31e6.jpg', '2018-08-02 12:31:25', 1, NULL, 2),
(121, 'Diego Edgardo Guzman Huezo', 'diegocristopher@gmail.com', 'diego', '$2y$10$tVaiUffVhBeg1ROkRowp9OvEVhykae6E.YQa0E/qc/WUHR5jiADqa', '5b637f022400c.jpg', '2018-08-02 00:00:00', 0, NULL, 3);

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
(6, 1, '2000-01-01', 5, NULL),
(7, 1, '2000-01-01', 9, NULL),
(8, 1, '2000-01-01', 9, NULL),
(9, 1, '2018-04-15', 9, NULL),
(10, 1, '2018-04-15', 5, NULL),
(11, 1, '2018-04-17', 5, NULL),
(15, 1, '2018-04-25', 9, NULL),
(16, 1, '2018-04-29', 5, NULL),
(17, 1, '2018-05-07', 9, NULL),
(18, 1, '2018-05-08', 9, NULL),
(19, 1, '2018-06-24', 10, NULL),
(20, 1, '2018-06-24', 11, NULL),
(21, 1, '2018-06-24', 12, NULL),
(22, 1, '2018-06-24', 13, NULL),
(23, 1, '2018-06-24', 14, NULL),
(24, 1, '2018-06-24', 15, NULL),
(25, 1, '2018-06-24', 16, NULL),
(26, 1, '2018-06-24', 17, NULL),
(27, 1, '2018-06-24', 18, NULL),
(28, 1, '2018-06-24', 19, NULL),
(29, 1, '2018-06-24', 20, NULL),
(30, 1, '2018-06-24', 21, NULL),
(31, 1, '2018-06-24', 22, NULL),
(32, 1, '2018-06-24', 23, NULL),
(33, 1, '2018-06-24', 24, NULL),
(34, 1, '2018-06-24', 25, NULL),
(35, 1, '2018-06-24', 26, NULL),
(36, 1, '2018-06-24', 27, NULL),
(37, 1, '2018-06-24', 28, NULL),
(38, 1, '2018-06-24', 29, NULL),
(42, 1, '2018-06-24', 40, NULL),
(43, 1, '2018-06-24', 41, NULL),
(44, 1, '2018-06-24', 42, NULL),
(45, 1, '2018-06-24', 43, NULL),
(46, 1, '2018-06-24', 44, NULL),
(47, 1, '2018-06-24', 45, NULL),
(48, 1, '2018-06-24', 46, NULL),
(49, 1, '2018-06-24', 47, NULL),
(50, 1, '2018-06-24', 48, NULL),
(51, 1, '2018-06-24', 49, NULL),
(68, 1, '2018-06-24', 80, NULL),
(69, 1, '2018-06-24', 81, NULL),
(70, 1, '2018-06-24', 82, NULL),
(71, 1, '2018-06-24', 83, NULL),
(72, 1, '2018-06-24', 84, NULL),
(73, 1, '2018-06-24', 85, NULL),
(74, 1, '2018-06-24', 86, NULL),
(75, 1, '2018-06-24', 87, NULL),
(76, 1, '2018-06-24', 88, NULL),
(77, 1, '2018-06-24', 89, NULL),
(78, 1, '2018-06-24', 90, NULL),
(79, 1, '2018-06-24', 91, NULL),
(80, 1, '2018-06-24', 92, NULL),
(81, 1, '2018-06-24', 93, NULL),
(82, 1, '2018-06-24', 94, NULL),
(83, 1, '2018-06-24', 95, NULL),
(84, 1, '2018-06-24', 96, NULL),
(85, 1, '2018-06-24', 97, NULL),
(86, 1, '2018-06-24', 98, NULL),
(87, 1, '2018-06-24', 99, NULL);

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
(17, 'pintura 2', 997, '4.00', 'rojo', 'producto1.jpg', 8, 1, 5, 3),
(18, 'pintura 3', 996, '4.00', 'rojo', 'producto2.jpg', 8, 1, 5, 3),
(19, 'Pintura 1', 996, '2.00', 'azul', 'producto3.jpg', 8, 1, 5, 3),
(21, 'Producto 4', 950, '25.00', 'azul', '5addf9415712e.jpg', 8, 1, 5, 3),
(24, 'Producto 5', 997, '15.00', 'rojo', '5ade510c094bf.jpg', 8, 1, 5, 3),
(25, 'Producto 6', 897, '2.50', 'Azul', '5af0ba37bbb37.jpg', 8, 1, 5, 4),
(26, 'Producto 7', 995, '1.00', 'Rosado', '5af0ba944200e.jpg', 8, 1, 5, 3),
(27, 'Producto 8', 996, '5.00', 'Amarillo', '5af0baebb4547.jpg', 8, 1, 5, 3),
(28, 'Producto 9', 996, '1.50', 'Azul', '5af0bbdb88f69.jpg', 9, 1, 5, 4),
(29, 'Producto 10', 994, '1.00', 'Cafe', '5af0bc0062de9.jpg', 9, 1, 6, 3),
(30, 'Producto 11', 997, '5.00', 'Verde', '5af0bd1732615.jpg', 9, 1, 5, 3),
(31, 'Producto 12', 993, '12.00', 'Magenta', '5af0bd3a0bd1a.jpg', 9, 1, 6, 3),
(32, 'Producto 13', 992, '3.50', 'Celeste', '5af0bd873ce53.jpg', 9, 1, 6, 3),
(33, 'Producto 14', 996, '2.50', 'Naranja', '5af0bdb00c40e.jpg', 9, 1, 5, 3),
(34, 'Producto 15', 891, '1.50', 'Plateado', '5af0bddec9d32.jpg', 9, 1, 6, 4),
(35, 'Producto 16', 995, '4.00', 'Dorado', '5af0be07f2554.jpg', 9, 1, 5, 4);

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
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

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
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

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
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

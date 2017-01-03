-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2017 a las 00:24:51
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `login` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`login`, `contrasena`) VALUES
('daniel', 'dan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigoB` varchar(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `Tipo` int(5) NOT NULL,
  `imagen` varchar(23) NOT NULL,
  `precio` int(36) NOT NULL,
  `tamano` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigoB`, `nombre`, `Tipo`, `imagen`, `precio`, `tamano`) VALUES
('4655433er', '4quesos', 1, '4-quesos.jpg', 100, 'g'),
('4q', '4 quesos', 1, '4-quesos.jpg', 60, 'm'),
('5545433er', '4quesos', 1, '4-quesos.jpg', 30, 'ch'),
('alhhlluu', 'fresca', 3, 'fresca_banner.jpg', 20, 'g'),
('allluu', 'fanta', 3, 'fanta.jpg', 20, 'g'),
('appoilhhll', 'fresca', 3, 'fresca_banner.jpg', 15, 'm'),
('asdcc4465', 'aros de cebolla', 4, 'onion_rings.jpg', 85, 'g'),
('auu', 'fanta', 3, 'fanta.jpg', 15, 'm'),
('eeeee', 'ranchera', 1, 'ranchera.jpg', 30, 'ch'),
('hfhgf', 'helado  de fres', 4, 'fresa.jpg', 40, 'ch'),
('iiljllmlll', 'helado de vainilla', 4, 'vainilla.jpg', 40, 'ch'),
('iilllmlmli', 'helado de chocolate', 4, 'chocolate.jpg', 40, 'ch'),
('iilmllliil', 'helado de vainilla', 4, 'vainilla.jpg', 60, 'm'),
('iilmllmmml', 'helado de chocolate', 4, 'chocolate.jpg', 60, 'm'),
('iuyuiyiu', 'Qpapas', 4, 'patatas_asadas.jpg', 25, 'ch'),
('kkillopuhg', 'pastor', 1, 'pastor.jpg', 90, 'g'),
('kkiopuhg', 'pastor', 1, 'pastor.jpg', 25, 'ch'),
('lllllllllm', 'fresca', 3, 'fresca_banner.jpg', 10, 'ch'),
('llllllyybb', 'manzanita', 3, 'Manzana_Lift.jpg', 10, 'ch'),
('lojhg', 'mexicana', 1, 'mexicana.jpg', 60, 'm'),
('lojiopuhg', 'mexicana', 1, 'mexicana.jpg', 30, 'ch'),
('mex', 'mexicana', 1, 'mexicana.jpg', 90, 'g'),
('ooouhbg', 'aros de cebolla', 4, 'onion_rings.jpg', 67, 'm'),
('pas', 'pastor', 1, 'pastor.jpg', 50, 'm'),
('poisdduuyy', 'cocacola', 3, 'coca-cola-logo2.jpg', 16, 'm'),
('poiuuyy435', 'fanta', 3, 'fanta.jpg', 10, 'ch'),
('poiuuyyfds', 'cocacola', 3, 'coca-cola-logo2.jpg', 10, 'ch'),
('qqjjjwwss', 'carnes frias', 1, 'pizza_carnesfrias.jpg', 30, 'ch'),
('qqqq', 'hawuaiana', 1, 'normal1.jpg', 50, 'm'),
('qqwwss', 'carnes frias', 1, 'pizza_carnesfrias.jpg', 60, 'm'),
('rrrrrr', 'ranchera', 1, 'ranchera.jpg', 50, 'm'),
('rtt544465', 'hawuaiana', 1, 'normal1.jpg', 90, 'g'),
('rtt5465', 'hawuaiana', 1, 'normal1.jpg', 30, 'ch'),
('rttttt4465', 'hawuaiana,pastor,peperoni', 2, 'd4.jpg', 230, 'g'),
('rttttyut44', 'mexicana,pastor,peperoni,', 2, 'd4.jpg', 230, 'g'),
('t4465', 'Qpapas', 4, 'patatas_asadas.jpg', 45, 'm'),
('tg53yut446', 'mexicana,pastor,4quesos', 2, 'd4.jpg', 230, 'g'),
('ttre4465', 'Qpapas', 4, 'patatas_asadas.jpg', 60, 'g'),
('ttrecc4465', 'aros de cebolla', 4, 'onion_rings.jpg', 40, 'ch'),
('www', 'carnes frias', 1, 'pizza_carnesfrias.jpg', 90, 'g'),
('yybbb533', 'manzanita', 3, 'Manzana_Lift.jpg', 20, 'g'),
('yybbvccb53', 'manzanita', 3, 'Manzana_Lift.jpg', 15, 'm'),
('yyfds43533', 'cocacola', 3, 'coca-cola-logo2.jpg', 25, 'g');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'normal'),
(2, 'd4'),
(3, 'bebidas'),
(4, 'complementos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(28) NOT NULL,
  `telefono` int(10) NOT NULL,
  `contrasena` varchar(28) NOT NULL,
  `correo` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `nombre`, `apellidos`, `telefono`, `contrasena`, `correo`) VALUES
('d', 'd', 'd', 2343, 'd', 'd'),
('dan', 'daniel', 'ramirez', 5455, 'fdfgdf', 'dan@h.com'),
('hg', 'ghhg', 'hgfh', 657, 'jhgj', 'fdss@c.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `contraseña` (`contrasena`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigoB`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2014 a las 20:24:55
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ventas-2014-10-08-4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `cantidad_volumen` int(11) NOT NULL,
  `cantidad_dosis` int(11) NOT NULL,
  `valor_volumen` int(11) NOT NULL,
  `valor_dosis` int(11) NOT NULL,
  `tipo_producto` int(11) NOT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `descripcion`, `cantidad_volumen`, `cantidad_dosis`, `valor_volumen`, `valor_dosis`, `tipo_producto`) VALUES
(1, 'Penicilina 50gr', 10, 2, 50000, 6000, 1),
(2, 'Metrodinazol 100gr', 12, 1, 10000, 1000, 2),
(3, 'Ibuprofeno 400gr', 30, 1, 20000, 800, 1),
(4, 'Aspirina 100gr', 10, 1, 3000, 400, 2),
(5, 'Vitamina C Tab', 24, 2, 20000, 1000, 3),
(6, 'Complejo B Cap', 6, 1, 15000, 3000, 3),
(7, 'Vitamina D Cap', 12, 1, 26000, 2500, 3),
(8, 'Suero Pedialyte 700ml', 6, 1, 30000, 6500, 3),
(9, 'Dolex', 12, 1, 9800, 1000, 2),
(10, 'metocarbamol 500gr', 30, 2, 5000, 10000, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` bigint(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `clave`, `rol`) VALUES
(1, 'Leonardo', '12345', 'Vendedor'),
(2, 'Alfonso', '12345', 'Vendedor'),
(3, 'Maria Villanueva', '12345', 'Cliente'),
(4, 'Jesus Gutierrez', '12345', 'Cliente'),
(5, 'Marco Valdez', '12345', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valorventa`
--

CREATE TABLE IF NOT EXISTS `valorventa` (
  `idusuario` bigint(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`,`fecha_hora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valorventa`
--

INSERT INTO `valorventa` (`idusuario`, `fecha_hora`, `valor`) VALUES
(3, '2014-10-09 03:38:58', 151000),
(4, '2014-10-09 03:48:01', 88000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `idusuario` bigint(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  PRIMARY KEY (`idusuario`,`idproducto`,`fecha_hora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idusuario`, `idproducto`, `fecha_hora`) VALUES
(3, 1, '2014-10-09 03:38:58'),
(3, 2, '2014-10-09 03:38:58'),
(3, 5, '2014-10-09 03:38:58'),
(3, 6, '2014-10-09 03:38:58'),
(3, 7, '2014-10-09 03:38:58'),
(3, 8, '2014-10-09 03:38:58'),
(4, 1, '2014-10-09 03:48:01'),
(4, 4, '2014-10-09 03:48:01'),
(4, 5, '2014-10-09 03:48:01'),
(4, 6, '2014-10-09 03:48:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2016 a las 05:19:10
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `ap_pat` varchar(25) NOT NULL,
  `ap_mat` varchar(25) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `fechanac` date NOT NULL,
  `fechaing` date NOT NULL,
  `id_sus` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `ap_pat`, `ap_mat`, `telefono`, `direccion`, `correo`, `fechanac`, `fechaing`, `id_sus`, `idempleado`, `imagen`) VALUES
(1, 'Jose Guillermo', 'Hernandez', 'Duran', '8117388527', 'Francisco I. Madero 1307', 'guille_tigres_19@hotmail.com', '1996-06-15', '2016-04-24', 350, 1, 'img/20160524014015.jpg'),
(2, 'Juan Enrique', 'Hernandez', 'Sanchez', '8153478258', 'Antonio I Villareal', 'secu7123@hotmail.com', '1970-07-04', '2015-02-06', 350, 0, 'img/20160524014015.jpg'),
(3, 'Maria Aracely', 'Hernandez', 'Duran', '8147521548', 'Linda Vista', 'chely9901@gmail.com', '2001-09-05', '2015-12-08', 350, 5, 'img/20160524014015.jpg'),
(4, 'Gustavo', 'Hernandez', 'Duran', '8115547890', 'Idelfonzo Vazquez', 'g_ustavo19@hotmail.com', '1994-08-24', '2015-05-02', 325, 3, 'img/20160524014015.jpg'),
(5, 'Maria de Jesus', 'Duran', 'Tellez', '8145782031', 'Idelfonzo Vazquez', 'marydute@hotmail.com', '1972-07-25', '2015-03-30', 200, 0, 'img/20160524014227.jpg'),
(6, 'Victor', 'Zavala', 'Molina', '8145963247', 'Linda Vista', 'victorhugo@hotmail.com', '1995-09-10', '2015-05-27', 300, 2, 'img/20160524014227.jpg'),
(7, 'Hector', 'Sifuentes', 'Gomez', '8145217934', 'Nueva Rosita', 'Hector@hotmail.com', '1996-07-05', '2015-05-07', 300, 0, 'img/20160524014227.jpg'),
(8, 'Sandra Guadalupe', 'Barcenas', 'Hernandez', '8114521124', '15 de Septiembre', 'sandra_guadalupe@hotmail.com', '1991-03-14', '2015-07-05', 250, 6, 'img/20160524014227.jpg'),
(9, 'Miguel Angel', 'Barcenas', 'Hernandez', '8115228610', '15 de Septiembre', 'mike_10@hotmail.com', '1990-04-23', '2014-08-04', 350, 0, 'img/20160524014227.jpg'),
(10, 'Luis Javier', 'Galvan', 'Lozano', '8145628792', 'buena vista', 'LuisJavier@gmail.con', '1996-08-05', '2015-05-05', 310, 3, 'img/20160524014227.jpg'),
(14, '', 'martinez', 'ibarra', '8113693654', 'Cordillera cantaurica ', 'thebeny.mtz@hotmail.com', '1994-08-05', '2016-05-23', 1, 2, 'img/20160524014015.jpg'),
(15, 'brandon', 'Cardenas', 'Morales', '8117029077', 'Valle de Guadalahara #158A', 'brandon.rayado5@hotmail.com', '1996-02-03', '0521-01-23', 5, 3, 'img/20160524014227.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesus`
--

CREATE TABLE IF NOT EXISTS `detallesus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sus` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `importe` decimal(6,2) NOT NULL,
  `dia` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `detallesus`
--

INSERT INTO `detallesus` (`id`, `id_sus`, `id_cliente`, `nombre`, `importe`, `dia`) VALUES
(1, 110, 0, 'Inscripcion', '50.00', '2016-04-03'),
(2, 110, 0, 'Inscripcion', '50.00', '2016-04-05'),
(3, 113, 0, 'Promocion 3 Meses Hombres', '720.00', '2016-04-10'),
(4, 111, 0, 'Suscripcion Mujer', '260.00', '2016-04-06'),
(5, 111, 0, 'Suscripcion Mujer', '260.00', '2016-04-06'),
(6, 113, 0, 'Promocion 3 Meses Hombres', '720.00', '2016-04-09'),
(7, 112, 0, 'Subscripcion Hombre', '360.00', '2016-04-07'),
(8, 110, 0, 'Inscripcion', '50.00', '2016-04-09'),
(9, 110, 0, 'Inscripcion', '50.00', '2016-04-12'),
(10, 111, 0, 'Suscripcion Mujer', '260.00', '2016-04-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `puesto` varchar(30) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `idTipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `email`, `password`, `fecha_nac`, `puesto`, `sueldo`, `imagen`, `idTipo`) VALUES
(26, 'Fransisco', 'Pancho@hotmail.com', '1580554', '2213-12-12', 'entrenador', 2500, 'imgE/20160524030244.jpg', 2),
(28, 'Brandon', 'brandon.rayado5@hotmail.com', '1580554', '1996-02-03', 'Administrador', 2500, 'imgE/20160524224454.jpg', 2),
(29, 'pepe', 'ohew@hotmail.com', '12', '1212-12-12', 'pepe', 2500, 'imgE/20160525015702.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del producto',
  `nombre` varchar(25) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `presentacion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `presentacion`) VALUES
(1, 'Agua ', '10.00', '1 Litro'),
(2, 'Agua', '15.00', '1,5 Litros'),
(7, 'Cacahuates Con Nuez', '20.00', '75 Gramos'),
(6, 'Cacahuates Dulce', '15.00', '70 Gramos'),
(5, 'Cacahuates Con Arandano', '15.00', '80 Gramos'),
(3, 'Cacahuates', '15.00', '90 Gramos'),
(4, 'Cacahuates Con Almendra', '15.00', '80 Gramos'),
(19, 'Chicles', '20.00', '50kg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE IF NOT EXISTS `suscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la suscripcion',
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad de Meses',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `nombre`, `precio`, `cantidad`) VALUES
(110, 'Inscripcion', '50.00', 1),
(111, 'Suscripcion Mujer', '260.00', 1),
(112, 'Suscripcion Hombre', '360.00', 1),
(113, 'Promocion 3 Meses Hombres', '720.00', 3),
(114, 'Promocion 3 Meses Mujeres', '680.00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `id_producto`, `nombre`, `precio`, `cantidad`, `fecha_venta`) VALUES
(3, 2, 'agua', '16.00', 2, '2012-12-12'),
(2, 0, 'Agua', '15.00', 3, '2012-12-12'),
(4, 3, 'chicles', '15.00', 3, '1996-02-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

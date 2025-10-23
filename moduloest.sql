-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-10-2025 a las 23:40:13
-- Versión del servidor: 9.2.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mosaicointeractivo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moduloest`
--

DROP TABLE IF EXISTS `moduloest`;
CREATE TABLE IF NOT EXISTS `moduloest` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `frase` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `moduloest`
--

INSERT INTO `moduloest` (`id`, `nombre`, `frase`, `foto`, `video`) VALUES
(1, 'Danna Londoño Urbano', 'Tengo sueño', 'IMG_5012.JPG\r\n', 'danna.mp4'),
(2, 'David Santamaría', 'Diseñar es crear experiencias visuales con alma.', 'IMG_5001.JPG', 'david.mp4'),
(3, 'Jenifer Lizethe Leiva Martín', 'El diseño es la voz de lo invisible.', 'IMG_5002.JPG', 'jenifer.mp4'),
(4, 'Diana Camargo', 'La creatividad es inteligencia divirtiéndose.', 'IMG_5017.JPG', 'natalia.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

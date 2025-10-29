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
(1, 'Danna Londoño Urbano', 'Lider de proyectos que unen arte, tecnología y propósito', 'IMG_5012.JPG', 'danna.mp4'),
(2, 'David Santamaría', '  Especializarme en modelado 3D y animación, combinando imagen, sonido, diseñar personajes y entornos  en proyectos como videojuegos o cortos animados.', 'IMG_5001.JPG', 'david.mp4'),
(3, 'Jenifer Lizethe Leiva Martín', 'Desarrollo web ,diseño visual, creación de interfaces o videojuegos', 'IMG_5002.JPG', 'jenifer.mp4'),
(4, 'Diana Camargo', ' Programadora', 'IMG_5017.JPG', 'diana.mp4');
COMMIT;

INSERT INTO `moduloest` (`id`, `nombre`, `frase`, `foto`, `video`) VALUES
(5, 'Juan Felipe cruz muñoz', 'Animacion 3D', 'IMG_4993', 'juanFelipe.mp4'),
(6, 'Juan David Mantilla Navarro', 'Desarrollador de aplicaciones y videojuegos.', 'IMG_4995.JPG', 'juandavid.mp4'),
(7, 'Felipe Alexander peña Urrego', 'Paginas Web', 'IMG_4997.JPG', 'felipealexander.mp4'),
(8, 'Eybar Santiago Viasus Arboleda', 'Programador full stack', 'IMG_4999.JPG', 'Eybar.mp4');
(9, 'Esteban Ahumedo Marchena', 'Quiero dedicarme a la industria 3D y los efectos visuales desde el CGI hasta VFX como Generalista 3D, así comunicar y contar historias de forma atractiva, y aportar soluciones a diferentes industrias por medio de la multimedia.', 'IMG_5000.JPG', 'Esteban.mp4');
(10, 'Angel Joseph Tovar Gonzalez', ' Diseño y desarrollo de productos digitales, páginas web, aplicaciones interactivas, simulaciones, videos promocionales o experiencias de realidad aumentada o virtual,  combinar lo técnico con lo creativo para mejorar la experiencia en la empresa a la cual aplique.', 'IMG_5003.JPG', 'Angel.mp4');
(11, 'María Alejandra Suárez Cuesta ', 'Diseñadora de interfaces de videojuegos ', 'IMG_5006.JPG', 'Maria.mp4');
(12, 'Astrid Carolina Melo Guayacán', 'Desarrolladora de proyectos multimedia interactivos como videojuegos, páginas web y experiencias inmersivas.', 'IMG_5007.JPG', 'Astrid.mp4');
(13, 'Juliana Bonilla Calderon', 'Creadora de soluciones multimedia integrales que impulsen la innovación en el sector público.', 'IMG_5009.JPG', 'Juliana.mp4');
(14, 'David Santiago Crispoca Taborda', 'Diseño de interfaces y experiencias de usuario (UI/UX), implementando soluciones de audio o desarrollando proyectos basados en programación y/o IA.', 'IMG_5013.JPG', 'Santiago.mp4');
(15, 'Sebastián Guzmán Castiblanco', 'Artista de animación 3D, enfocado en el diseño de escenarios y personajes para productos digitales.', 'IMG_5014.JPG', 'Sebastian.mp4');
(16, 'Yoann Esteban Jacome Garcia', 'Desarrollador paginas web y videojuegos', 'IMG_5016.JPG', 'Yoann.mp4');
(17, 'Anderson Muñoz', 'Seguridad informatica', 'IMG_5019.JPG', 'Anderson.mp4');
(18, 'Alejandra Bernal Castro', 'Diseñadora UX/UI, integrando creatividad y tecnología para desarrollar experiencias digitales atractivas y funcionales.', 'IMG_5022.JPG', 'Aleja.mp4');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

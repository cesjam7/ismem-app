-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 31-10-2024 a las 08:29:22
-- Versión del servidor: 5.7.39
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ismem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `fecha`, `contenido`, `created_at`, `updated_at`) VALUES
(1, 'Primera noticia', '2024-10-31 08:27:13', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab a ipsum illum minima cumque iusto autem. Ipsa perferendis, quaerat iure dignissimos dolores quasi dolore dolor id veritatis beatae distinctio?\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa maiores laboriosam nesciunt alias natus cumque odio vel eaque, fugit recusandae facere doloremque. Hic ratione doloremque in illum, cum a alias!', '2024-10-31 08:27:57', NULL),
(2, 'Segunda noticia', '2024-10-31 08:27:13', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab a ipsum illum minima cumque iusto autem. Ipsa perferendis, quaerat iure dignissimos dolores quasi dolore dolor id veritatis beatae distinctio?\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa maiores laboriosam nesciunt alias natus cumque odio vel eaque, fugit recusandae facere doloremque. Hic ratione doloremque in illum, cum a alias!', '2024-10-31 08:27:57', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

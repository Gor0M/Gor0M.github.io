-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2025 a las 04:46:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercializadora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `cant_disponible` int(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre`, `descripcion`, `cant_disponible`, `id`) VALUES
('360-8960 Filtro De Combustible Para Motores Cat', 'Los filtros de combustible de eficiencia avanzada Cat 360-8960 están diseñados para eliminar las partículas contaminantes pequeñas que causan el mayor daño. Con todos los filtros de combustible, se pueden eliminar algunas partículas, pero varios filtros de la competencia no son eficaces a la hora de capturar o retener las partículas que causan el mayor daño a los componentes sensibles de los sistemas de combustible.', 12, 1),
('Filtro de aceite de motor Caterpillar 1R1808 3406 C15 genuino eficiencia avanzada', 'Este filtro de aceite de motor Caterpillar 1R1808 3406 C15 es un filtro genuino de eficiencia avanzada, diseñado para equipos pesados ​​como compactadores de movimiento de tierras, excavadoras, bulldozers sobre ruedas y más. Fabricado en Estados Unidos, este filtro de alta calidad es fabricado por Caterpillar, una marca de confianza en la industria. Es compatible con una amplia gama de modelos de equipos pesados, incluyendo el Challenger, la motoniveladora, el cargador de ruedas y muchos más. Este filtro de aceite es esencial para mantener su equipo pesado en excelentes condiciones y garantizar un rendimiento óptimo.', 6, 2),
('Mobil Super 5W-30 - Aceite de Motor Convencional', 'Los acondicionadores de sellado rejuvenecen los sellos del motor envejecidos para ayudar a detener y prevenir fugas de aceite\r\nLos detergentes adicionales mantienen los motores más antiguos limpios al unirse y quitar el lodo y los depósitos\r\nLos antioxidantes ayudan a prevenir la rotura del aceite evitando la obstrucción del motor y la formación de depósitos', 8, 3),
('Mobil Super - Aceite de motor sintético 5W-30, (120853), 4.7 L, bote', 'Dimensiones del paquete: 25 cm de largo x 24 cm de ancho x 9.5 cm de alto\r\nPeso del paquete: 98 g.\r\nCantidad: 1.\r\nTipo de producto: aceite automotriz.', 2, 4),
('Valvula Solenoide Carrier 00ppn500011800a', 'La válvula solenoide Carrier 00PPN500011800A es una solución eficiente y confiable para sistemas de refrigeración. Diseñada por la reconocida marca Carrier, este modelo EF23VS-122 garantiza un rendimiento óptimo en el control del flujo de refrigerantes. Su construcción robusta asegura durabilidad y resistencia en diversas condiciones operativas.\r\n\r\nCon un diámetro de conexión de 3 pulgadas, esta válvula es ideal para aplicaciones que requieren un manejo preciso de gases refrigerantes. Su diseño permite una instalación sencilla y un mantenimiento mínimo, lo que la convierte en una opción preferida para técnicos y profesionales del sector.', 14, 5),
('Esmeriladora Angular 4-1/2\'\' Profesional 700 W Truper ESMA-4-1/2A12 Color Naranja con Negro', 'La esmeriladora Truper es una herramienta versátil, que permite realizar diferentes trabajos con una terminación profesional. Por eso, es una excelente opción sumarla a tu taller o caja de herramientas.\r\n\r\nEquipa tu casa o taller y ¡hazlo tu mismo! Esta esmeriladora angular es perfecta para realizar distintos trabajos de esmerilado y pulido. A su vez, se destaca por ser un elemento indispensable para cortar, desbastar y lijar diversos materiales derivados del metal.', 5, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

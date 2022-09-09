-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2021 a las 02:35:41
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mbusiness2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombrecategoria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombrecategoria`) VALUES
(2, 'Veterinaria'),
(3, 'Barberia'),
(4, 'bordados'),
(5, 'artesanias'),
(6, 'comida'),
(7, 'ropa'),
(8, 'variedades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_fotos` int(11) NOT NULL,
  `id_negocio` int(11) NOT NULL,
  `foto1` varchar(500) DEFAULT NULL,
  `foto2` varchar(500) DEFAULT NULL,
  `foto3` varchar(500) DEFAULT NULL,
  `foto4` varchar(500) DEFAULT NULL,
  `foto5` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_fotos`, `id_negocio`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`) VALUES
(4, 3, 'fotos/negocio/galeria/Barberia El Guapo_1.jpg', 'fotos/negocio/galeria/Barberia El Guapo_2.jpg', 'fotos/negocio/galeria/Barberia El Guapo_3.jpg', 'fotos/negocio/galeria/Barberia El Guapo_4.jpg', 'fotos/negocio/galeria/Barberia El Guapo_5.jpg'),
(5, 4, 'fotos/negocio/galeria/Club Nutrición_1.jpg', 'fotos/negocio/galeria/Club Nutrición_2.jpg', 'fotos/negocio/galeria/Club Nutrición_3.jpg', 'fotos/negocio/galeria/Club Nutrición_4.jpg', 'fotos/negocio/galeria/Club Nutrición_5.jpg'),
(6, 5, 'fotos/negocio/galeria/Comedor Rosita_1.jpg', 'fotos/negocio/galeria/Comedor Rosita_2.jpg', 'fotos/negocio/galeria/Comedor Rosita_3.jpg', 'fotos/negocio/galeria/Comedor Rosita_4.jpg', 'fotos/negocio/galeria/Comedor Rosita_5.jpg'),
(7, 6, 'fotos/negocio/galeria/Jack & Jackie Store_1.jpg', 'fotos/negocio/galeria/Jack & Jackie Store_2.jpg', 'fotos/negocio/galeria/Jack & Jackie Store_3.jpg', 'fotos/negocio/galeria/Jack & Jackie Store_4.jpg', 'fotos/negocio/galeria/Jack & Jackie Store_5.jpg'),
(8, 7, 'fotos/negocio/galeria/Nikafe_1.jpg', 'fotos/negocio/galeria/Nikafe_2.jpg', 'fotos/negocio/galeria/Nikafe_3.jpg', 'fotos/negocio/galeria/Nikafe_4.jpg', 'fotos/negocio/galeria/Nikafe_5.jpg'),
(9, 9, 'fotos/negocio/galeria/Productos  Veracruz_1.jpg', 'fotos/negocio/galeria/Productos  Veracruz_2.jpg', 'fotos/negocio/galeria/Productos  Veracruz_3.jpg', 'fotos/negocio/galeria/Productos  Veracruz_4.jpg', 'fotos/negocio/galeria/Productos  Veracruz_5.jpg'),
(11, 11, 'fotos/negocio/galeria/Farmavet_1.jpg', 'fotos/negocio/galeria/Farmavet_2.jpg', 'fotos/negocio/galeria/Farmavet_3.jpg', 'fotos/negocio/galeria/Farmavet_4.jpg', 'fotos/negocio/galeria/Farmavet_5.jpg'),
(12, 12, 'fotos/negocio/galeria/Kati Raya Arte y Pintura _1.jpg', 'fotos/negocio/galeria/Kati Raya Arte y Pintura _2.jpg', 'fotos/negocio/galeria/Kati Raya Arte y Pintura _3.jpg', 'fotos/negocio/galeria/Kati Raya Arte y Pintura _4.jpg', 'fotos/negocio/galeria/Kati Raya Arte y Pintura _5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id_negocio` int(11) NOT NULL,
  `nombrenegocio` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `portada` varchar(500) NOT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `whatsapp` varchar(500) DEFAULT NULL,
  `Url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id_negocio`, `nombrenegocio`, `descripcion`, `direccion`, `telefono`, `id_tipo`, `id_categoria`, `logo`, `portada`, `facebook`, `whatsapp`, `Url`) VALUES
(3, 'Barberia El Guapo', 'Barberia el guapo es un lugar agradable en donde ofrecen servicios de corte de cabello, Barba, Exfoliación, Limpieza Facial.', 'De llantasa de la máximo Jerez  1c Arriba  1c al lago  Casa A-20.', 78639002, 1, 3, 'fotos/negocio/Barberia El Guapo_1_Logo.jpg', 'fotos/negocio/Barberia El Guapo_2_portada.jpg', 'https://fb.watch/v/7T1iKJqVp/', '78639002', NULL),
(4, 'Club Nutrición', 'Es un club de nutrición donde brinda  accesoria a sus clientes y ofrece una   Amplia gama de productos nutricionales de gran calidad.', 'Mercado Iván Montenegro parque de los  buses en el sector comida.', 86732718, 2, 6, 'fotos/negocio/Club Nutrición_1_Logo.jpg', 'fotos/negocio/Club Nutrición_2_portada.jpg', 'https://www.facebook.com/Herbalife-Nutrition-club-105329691109375/', '86732718', NULL),
(5, 'Comedor Rosita', 'Comedor rosita es un Negocio familiar que vende comida,  pollo con verduras, cerdo adobado, carne desmenuzada, bisteck, Salpicón, Pollo  y frito.', 'Se donde el gimnasio body factor 3c al sur 20 vrs abajo.', 81064705, 1, 6, 'fotos/negocio/Comedor Rosita_1_Logo.jpg', 'fotos/negocio/Comedor Rosita_2_portada.jpg', '', '81064705', NULL),
(6, 'Jack & Jackie Store', 'Jack & Jackie store es una tienda enfocada en prendas de vestir y accesorios masculinos.', 'De la Vicky 1c abajo y 1½ c  al sur mano derecha, planta baja de Atomic Pizza Altamira.', 83543630, 2, 7, 'fotos/negocio/Jack & Jackie Store_1_Logo.jpg', 'fotos/negocio/Jack & Jackie Store_2_portada.jpg', 'https://www.facebook.com/Jack-Jackie-Store-100567321759226', '83543630', NULL),
(7, 'Nikafe', 'Negocio en lineal que  ofrece Café en Polvo, cosechado y procesado por manos nicaraguenses, este producto  es empacado y distribuido a pequeños negocios para ofrecer.', 'De La Estatua De Monseñor Lezcano Dos Cuadras Al Sur.', 75294095, 2, 6, 'fotos/negocio/Nikafe_1_Logo.jpg', 'fotos/negocio/Nikafe_2_portada.jpg', '', '75294095', NULL),
(9, 'Productos  Veracruz', 'Venta de cereales y productos nutritivos como la Soya y la Granola .', 'Frente a la Iglesia Católica, Barrio la Cruz. San Marcos, Carazo.', 58797698, 2, 6, 'fotos/negocio/Productos  Veracruz_1_Logo.jpg', 'fotos/negocio/Productos  Veracruz_2_portada.jpg', 'https://www.facebook.com/Productos-Veracruz-110816284033994/', '58797698', NULL),
(11, 'Farmavet', 'Fármacos Veterinarios,  concentrados para Mascotas Aves, gatos, perros, conejos y mas,  consultas y asesoramiento,  accesorios para tu mascota y mas.', 'Barrio San Judas, de donde fue Telcor 30 varas al Este.', 86789778, 1, 2, 'fotos/negocio/Farmavet_1_Logo.jpg', 'fotos/negocio/Farmavet_2_portada.jpg', 'https://www.facebook.com/FarmaVetsTuFarmaciaVeterinaria/?ti=as', '86789778', NULL),
(12, 'Arte y Pintura ', 'Ofrezco Producto con Identidad cultural relacionado con el Arte y la Pintura, también bolso de tuno,  Aretes de tuno este  material es extraído de la  corteza del árbol.', 'Carretera Masaya, Km13 Condominio Valle de Santiago Casa A7', 85233069, 2, 5, 'fotos/negocio/Kati Raya Arte y Pintura _1_Logo.jpg', 'fotos/negocio/Kati Raya Arte y Pintura _2_portada.jpg', 'https://www.facebook.com/Kati-Raya-Arte-y-Cultura-103973251425363', '85233069', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nombretipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nombretipo`) VALUES
(1, 'Servicios'),
(2, 'Productos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `id_negocio` (`id_negocio`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`id_negocio`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `id_negocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_negocio`) REFERENCES `negocio` (`id_negocio`);

--
-- Filtros para la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD CONSTRAINT `negocio_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`),
  ADD CONSTRAINT `negocio_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

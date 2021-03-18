-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2021 a las 02:52:04
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `revistas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulo` int(2) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `inicio` varchar(1000) NOT NULL,
  `fin` varchar(1000) NOT NULL,
  `idautor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulo`, `titulo`, `inicio`, `fin`, `idautor`) VALUES
(1, 'Historia del maquillaje', '         Hoy día puedes encontrar cualquier cantidad de videos explicando que los labiales se preparan con ceras, colores y aceites. Y dependiendo de la marca que compres, el color podría provenir de insectos molidos; específicamente, la cochinilla, de la cual se obtiene el carmín. Sin embargo, a lo largo de la historia, los cosméticos como el lápiz labial, el delineador para ojos y el maquillaje en polvo para el rostro se han hecho con un montón de ingredientes distintos, algunos de los cuales es mejor que no te pongas en  la cara.\r\n', 'A fines del siglo XIX, los periódicos \r\n                estadounidenses publicitaban unas latas de obleas que, \r\n                si las comías, prometían eliminar pecas, espinillas, y otras imperfecciones faciales. \r\n                Esos productos contenían veneno, pero no era un secreto, pues lo anunciaba la etiqueta,\r\n                que decía \"Obleas de Arsénico para el Cutis\".En la era victoriana se sabía que el arsénico \r\n                era venenoso, aunque quizás las mujeres pensaban que un poquito no haría daño.\r\n               Si bien es tolerable en pequeñas cantidades, la ingestión de arsénico conlleva un gran riesgo? \r\n               a menos que de veras quieras tener una \"piel de porcelana\"', 1),
(2, 'secreto de las pestañas', ' En este post vas a encontrar datos sobre el pelo de las pestañas, cómo crecen, cómo caen y cuánto cuesta que vuelvan a crecer. Va dedicado a todas aquellas mujeres que creen que las suyas son eternas y que las estropean por pereza. Las que no les dedican mimos y no se desmaquillan adecuadamente, que se aplican el rimmel de cualquier manera.', 'Haciendo un símil, sería como el lienzo de un pintor. Si éste lo prepara mal, por mucha maestría que tenga nunca conseguirá el resultado esperado. Ocurre lo mismo con este cosmético: si una mujer no elige el adecuado o lo aplica de forma incorrecta, no lucirá su mejor aspecto al maquillarse ni aprovechará su potencial de belleza.', 2),
(3, 'bases', ' La base de maquillaje es un cosmético que se aplica directamente sobre el rostro y que contribuye a cubrir las manchas e imperfecciones; y dotar al cutis de un mejor aspecto. Es uno de los productos de belleza más utilizados por las mujeres en cualquiera de sus formas, bien sea ésta líquida, en polvo o como crema\r\n', 'Haciendo un símil, sería como el lienzo de un pintor. Si éste lo prepara mal, por mucha maestría que tenga nunca conseguirá el resultado esperado. Ocurre lo mismo con este cosmético: si una mujer no elige el adecuado o lo aplica de forma incorrecta, no lucirá su mejor aspecto al maquillarse ni aprovechará su potencial de belleza.', 3),
(4, 'cosmeticos naturales', 'Cada piel y cada rostro son diferentes. Queremos que junto a Natura encuentres la mejor expresión de ti misma. Creemos en la belleza verdadera y en que tu también puedes descubrirla. El maquillaje es una manera de realzar tu belleza, porque la belleza es sentirse cómoda con una misma y que tu exterior refleje todo lo que sientes en tu interior.\r\n', 'La principal característica de la cosmética ecológica es que utiliza ingredientes que, además de ser naturales, se han producido siguiendo los criterios para la agricultura ecológica que establece el Reglamento Europeo u otras normas equivalentes de otros países para la producción ecológica. “Estos criterios incluyen la no utilización de fertilizantes, pesticidas ni herbicidas químicos, entre otros”, señala Nuria Alonso. “Los ingredientes ecológicos tienen que estar certificados para poder reconocerse como tal”, matiza Nuria.', 4),
(5, 'maquillaje natural', '   Cada piel y cada rostro son diferentes. Queremos que junto a Natura encuentres la mejor expresión de ti misma. Creemos en la belleza verdadera y en que tu también puedes descubrirla. El maquillaje es una manera de realzar tu belleza, porque la belleza es sentirse cómoda con una misma y que tu exterior refleje todo lo que sientes en tu interior.', 'En este lanzamiento podrás descubrir todos los tonos que puedes necesitar para encontrar aquel que combine perfectamente con tu tono de piel. Cada color puede ser una nueva versión y una gran manera de renovarte para cada ocasión. Expresa tu belleza genuina a través de tu rostro, tus gestos y tu forma de ser.', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` int(2) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `abscrip` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `autor`, `abscrip`, `email`, `direccion`) VALUES
(1, 'Mario Rojas', 'Croidon', 'mario@mail.co', 'cellee 33 #213_34, florida'),
(2, 'Fabian Redondo', 'Yambal', 'Fabian@mail.co', 'palmas '),
(3, 'Melisa Salsedo', 'Leonisa', 'melisa@mail.co', 'calle 63 la union'),
(4, 'Carlos Fuentes', 'Cyson', 'carlos@mail.co', 'carrera 33 puerto'),
(5, 'Mario Rojas', 'Croidon', 'mario@mail.co', 'cellee 33 #213_34, florida'),
(6, 'Fabian Redondo', 'Yambal', 'Fabian@mail.co', 'palmas '),
(7, 'Melisa Salsedo', 'Leonisa', 'melisa@mail.co', 'calle 63 la union'),
(8, 'Carlos Fuentes', 'Cyson', 'carlos@mail.co', 'carrera 33 puerto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE `revista` (
  `codigo` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `numero` int(2) NOT NULL,
  `año` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `revista`
--

INSERT INTO `revista` (`codigo`, `nombre`, `numero`, `año`) VALUES
(323, 'Croidon', 1, 2020),
(1211, 'Avon', 4, 2021),
(1212, 'Avon', 3, 2020),
(1234, 'Leonisa', 1, 2020),
(2221, 'Leonisa ', 5, 2021),
(2320, 'Avon', 5, 2021),
(3111, 'Avon', 1, 2020),
(3134, 'Avon', 2, 2020),
(3214, 'Cyson', 1, 2020),
(3444, 'Yambal', 1, 2021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(20) NOT NULL,
  `contrasena` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `contrasena`) VALUES
('kelly', 1),
('kelly', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idarticulo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `revista`
--
ALTER TABLE `revista`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3445;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api_rest_jquery_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

create database api_rest_jquery_ajax;
use api_rest_jquery_ajax;



CREATE TABLE `tm_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cat_obs` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `cat_obs`, `est`) VALUES
(1, 'Televisores', 'Observación TV', 1),
(2, 'Refrigeradoras', 'Observación Regrigeradoras', 1),
(3, 'Cocinas', 'Observación TV', 1),
(4, 'Lavadoras', 'Observación Regrigeradoras', 1),
(5, 'Actualizacion', 'Actualizacion Obs', 1),
(6, 'Envio Desde Postman', 'Envio Obs Postman', 1),
(7, 'Envio Desde Postman', 'Envio Obs Postman', 1),
(8, 'Envio Desde Postman', 'Envio Obs Postman', 1),
(9, 'Envio Desde Postman', 'Envio Obs Postman', 0),
(10, 'Envio Desde Postman2', 'Envio Obs Postman2', 0),
(11, 'Envio Desde Postman2', 'Envio Obs Postman2', 1);


--

-- Tabla productos 
CREATE TABLE `tm_producto` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `prod_nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`),
  CONSTRAINT `fk_tm_producto_tm_categoria` FOREIGN KEY (`cat_id`) REFERENCES `tm_categoria` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



INSERT INTO tm_producto (cat_id, prod_nom, est) VALUES (1, 'Smart TV 55"', 1);
INSERT INTO tm_producto (cat_id, prod_nom, est) VALUES (2, 'Refrigerador Doble Puerta', 1);

SELECT p.prod_id, p.prod_nom, c.cat_nom AS cat_nombre
FROM tm_producto p
JOIN tm_categoria c ON p.cat_id = c.cat_id;


--


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

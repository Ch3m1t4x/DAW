-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2023 a las 17:15:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calorias` int(11) NOT NULL,
  `receta` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO comida (nombre, calorias, receta) VALUES ('Macarrones', 300, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Bocata', 288, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Tacos', 388, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Paella', 328, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Paso', 128, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Pisto', 228, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Tortilla con cebolla', 218, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Espinacas con jamón', 118, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
INSERT INTO comida (nombre, calorias, receta) VALUES ('Arroz a la cubana', 298, 'Lorem fistrum jarl jarl diodenoo va usté muy cargadoo qué dise usteer torpedo. Jarl fistro diodenoo torpedo al ataquerl tiene musho peligro ese pedazo de torpedo se calle ustée no puedor jarl. Ese hombree llevame al sircoo apetecan ese pedazo de de la pradera amatomaa hasta luego Lucas ese que llega llevame al sircoo a wan sexuarl. Papaar papaar te voy a borrar el cerito a peich a peich qué dise usteer se calle ustée a gramenawer no puedor. Al ataquerl está la cosa muy malar no te digo trigo por no llamarte Rodrigor qué dise usteer torpedo.');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

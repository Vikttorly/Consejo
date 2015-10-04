-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2015 a las 04:47:49
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `consejo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
`id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `psecreta` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `clave`, `nombre`, `psecreta`) VALUES
(1, 'admin', '1234', 'El Administrador', 'calabozo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
`id` int(11) NOT NULL,
  `cusuario` int(8) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_generacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=305 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `cusuario`, `tipo`, `fecha_generacion`) VALUES
(1, 25132279, 'Carta_Aval', '2015-09-25 19:08:35'),
(2, 25132279, 'Carta_Aval', '2015-09-25 19:09:03'),
(3, 25132279, 'Constancia_Residencia', '2015-09-25 19:09:18'),
(4, 25132279, 'Constancia_Residencia', '2015-09-25 20:52:26'),
(5, 25132279, 'Constancia_Residencia', '2015-09-25 20:53:44'),
(6, 25132279, 'Constancia_Residencia', '2015-09-25 20:54:15'),
(7, 25132279, 'Carta_Aval', '2015-09-25 20:58:27'),
(8, 25132279, 'Carta_Aval', '2015-09-25 20:59:03'),
(9, 25132279, 'Carta_Aval', '2015-09-25 20:59:07'),
(10, 25132279, 'Carta_Aval', '2015-09-25 21:00:46'),
(11, 25132279, 'Carta_Aval', '2015-09-25 21:01:02'),
(12, 25132279, 'Carta_Aval', '2015-09-25 21:01:14'),
(13, 25132279, 'Carta_Aval', '2015-09-25 21:01:23'),
(14, 25132279, 'Carta_Aval', '2015-09-25 21:01:26'),
(15, 25132279, 'Carta_Aval', '2015-09-25 21:01:26'),
(16, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(17, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(18, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(19, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(20, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(21, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(22, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(23, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(24, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(25, 25132279, 'Carta_Aval', '2015-09-25 21:01:27'),
(26, 25132279, 'Carta_Aval', '2015-09-25 21:01:28'),
(27, 25132279, 'Carta_Aval', '2015-09-25 21:01:28'),
(28, 25132279, 'Carta_Aval', '2015-09-25 21:01:28'),
(29, 25132279, 'Carta_Aval', '2015-09-25 21:01:28'),
(30, 25132279, 'Carta_Aval', '2015-09-25 21:01:28'),
(31, 25132279, 'Carta_Aval', '2015-09-25 21:01:28'),
(32, 25132279, 'Constancia_Residencia', '2015-09-25 21:01:37'),
(33, 25132279, 'Constancia_Residencia', '2015-09-25 21:33:11'),
(34, 25132279, 'Constancia_Residencia', '2015-09-25 21:33:50'),
(35, 25132279, 'Constancia_Residencia', '2015-09-25 21:34:52'),
(36, 25132279, 'Constancia_Residencia', '2015-09-25 21:34:53'),
(37, 25132279, 'Constancia_Residencia', '2015-09-25 21:34:53'),
(38, 25132279, 'Constancia_Residencia', '2015-09-25 21:34:53'),
(39, 25132279, 'Constancia_Residencia', '2015-09-25 21:34:54'),
(40, 25132279, 'Constancia_Residencia', '2015-09-25 21:35:51'),
(41, 25132279, 'Constancia_Residencia', '2015-09-25 21:36:10'),
(42, 25132279, 'Constancia_Residencia', '2015-09-25 21:36:50'),
(43, 25132279, 'Constancia_Residencia', '2015-09-25 21:36:50'),
(44, 25132279, 'Constancia_Residencia', '2015-09-25 21:37:08'),
(45, 25132279, 'Constancia_Residencia', '2015-09-25 21:37:36'),
(46, 25132279, 'Constancia_Residencia', '2015-09-25 21:38:06'),
(47, 25132279, 'Constancia_Residencia', '2015-09-25 21:40:40'),
(48, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:33'),
(49, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:34'),
(50, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:34'),
(51, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:34'),
(52, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:34'),
(53, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:34'),
(54, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:35'),
(55, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:35'),
(56, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:42'),
(57, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:43'),
(58, 25132279, 'Constancia_Residencia', '2015-09-25 21:42:49'),
(59, 25132279, 'Constancia_Residencia', '2015-09-25 21:43:33'),
(60, 25132279, 'Constancia_Residencia', '2015-09-25 21:43:47'),
(61, 25132279, 'Constancia_Residencia', '2015-09-25 21:44:12'),
(62, 25132279, 'Constancia_Residencia', '2015-09-25 21:44:17'),
(63, 25132279, 'Constancia_Residencia', '2015-09-25 21:45:12'),
(64, 25132279, 'Constancia_Residencia', '2015-09-25 21:45:30'),
(65, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:24'),
(66, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:26'),
(67, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:27'),
(68, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:27'),
(69, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:27'),
(70, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:27'),
(71, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:34'),
(72, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:34'),
(73, 25132279, 'Constancia_Residencia', '2015-09-25 21:47:35'),
(74, 25132279, 'Constancia_Residencia', '2015-09-25 21:48:25'),
(75, 25132279, 'Constancia_Residencia', '2015-09-25 21:48:31'),
(76, 25132279, 'Constancia_Residencia', '2015-09-25 21:48:32'),
(77, 25132279, 'Constancia_Residencia', '2015-09-25 21:48:36'),
(78, 25132279, 'Constancia_Residencia', '2015-09-25 21:48:42'),
(79, 25132279, 'Constancia_Residencia', '2015-09-25 21:49:29'),
(80, 25132279, 'Constancia_Residencia', '2015-09-25 21:49:30'),
(81, 25132279, 'Constancia_Residencia', '2015-09-25 21:49:30'),
(82, 25132279, 'Constancia_Residencia', '2015-09-25 21:54:55'),
(83, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:14'),
(84, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:15'),
(85, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:15'),
(86, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:16'),
(87, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:26'),
(88, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:27'),
(89, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:27'),
(90, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:27'),
(91, 25132279, 'Constancia_Residencia', '2015-09-25 21:55:27'),
(92, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:30'),
(93, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:31'),
(94, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:31'),
(95, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:31'),
(96, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:32'),
(97, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:32'),
(98, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:32'),
(99, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:32'),
(100, 25132279, 'Constancia_Residencia', '2015-09-25 21:56:32'),
(101, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:16'),
(102, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:16'),
(103, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:17'),
(104, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:17'),
(105, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:17'),
(106, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:17'),
(107, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:17'),
(108, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:17'),
(109, 25132279, 'Constancia_Residencia', '2015-09-25 21:57:43'),
(110, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:03'),
(111, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:27'),
(112, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:28'),
(113, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:28'),
(114, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:28'),
(115, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:29'),
(116, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:29'),
(117, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:52'),
(118, 25132279, 'Constancia_Residencia', '2015-09-25 21:58:53'),
(119, 25132279, 'Constancia_Residencia', '2015-09-25 21:59:25'),
(120, 25132279, 'Constancia_Residencia', '2015-09-25 21:59:43'),
(121, 25132279, 'Constancia_Residencia', '2015-09-25 22:00:23'),
(122, 25132279, 'Constancia_Residencia', '2015-09-25 22:01:11'),
(123, 25132279, 'Constancia_Residencia', '2015-09-25 22:08:43'),
(124, 25132279, 'Constancia_Residencia', '2015-09-25 22:08:44'),
(125, 25132279, 'Constancia_Residencia', '2015-09-25 22:08:44'),
(126, 25132279, 'Constancia_Residencia', '2015-09-25 22:08:51'),
(127, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:08'),
(128, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:29'),
(129, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:35'),
(130, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:36'),
(131, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:36'),
(132, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:37'),
(133, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:37'),
(134, 25132279, 'Constancia_Residencia', '2015-09-25 22:09:42'),
(135, 25132279, 'Constancia_Residencia', '2015-09-25 22:11:03'),
(136, 25132279, 'Constancia_Residencia', '2015-09-25 22:11:16'),
(137, 25132279, 'Constancia_Residencia', '2015-09-25 22:11:33'),
(138, 25132279, 'Constancia_Residencia', '2015-09-25 22:12:44'),
(139, 25132279, 'Constancia_Residencia', '2015-09-25 22:13:05'),
(140, 25132279, 'Constancia_Residencia', '2015-09-25 22:13:48'),
(141, 25132279, 'Constancia_Residencia', '2015-09-25 22:14:02'),
(142, 25132279, 'Constancia_Residencia', '2015-09-25 22:14:34'),
(143, 25132279, 'Constancia_Residencia', '2015-09-25 22:15:09'),
(144, 25132279, 'Constancia_Residencia', '2015-09-25 22:15:27'),
(145, 25132279, 'Constancia_Residencia', '2015-09-25 22:17:33'),
(146, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:00'),
(147, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:19'),
(148, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:20'),
(149, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:36'),
(150, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:49'),
(151, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:49'),
(152, 25132279, 'Constancia_Residencia', '2015-09-25 22:18:50'),
(153, 25132279, 'Constancia_Residencia', '2015-09-25 22:19:02'),
(154, 25132279, 'Constancia_Residencia', '2015-09-25 22:19:42'),
(155, 25132279, 'Constancia_Residencia', '2015-09-25 22:19:55'),
(156, 25132279, 'Constancia_Residencia', '2015-09-25 22:21:32'),
(157, 25132279, 'Constancia_Residencia', '2015-09-25 22:21:53'),
(158, 25132279, 'Constancia_Residencia', '2015-09-25 22:24:55'),
(159, 25132279, 'Constancia_Residencia', '2015-09-25 22:25:28'),
(160, 25132279, 'Constancia_Residencia', '2015-09-25 22:25:35'),
(161, 25132279, 'Constancia_Residencia', '2015-09-25 22:26:25'),
(162, 25132279, 'Constancia_Residencia', '2015-09-25 22:26:32'),
(163, 25132279, 'Constancia_Residencia', '2015-09-25 22:27:14'),
(164, 25132279, 'Constancia_Residencia', '2015-09-25 22:28:01'),
(165, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:05'),
(166, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:17'),
(167, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:30'),
(168, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:31'),
(169, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:31'),
(170, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:33'),
(171, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:33'),
(172, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:43'),
(173, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:44'),
(174, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:44'),
(175, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:44'),
(176, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:56'),
(177, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:56'),
(178, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:56'),
(179, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:56'),
(180, 25132279, 'Constancia_Residencia', '2015-09-25 22:29:56'),
(181, 25132279, 'Constancia_Residencia', '2015-09-25 22:30:00'),
(182, 25132279, 'Carta_Aval', '2015-09-25 22:30:09'),
(183, 25132279, 'Constancia_Residencia', '2015-09-25 22:30:25'),
(184, 25132279, 'Constancia_Residencia', '2015-09-25 22:30:38'),
(185, 25132279, 'Constancia_Residencia', '2015-09-25 22:30:45'),
(186, 25132279, 'Constancia_Residencia', '2015-09-25 22:30:57'),
(187, 25132279, 'Constancia_Residencia', '2015-09-25 22:31:18'),
(188, 25132279, 'Constancia_Residencia', '2015-09-25 22:31:24'),
(189, 25132279, 'Constancia_Residencia', '2015-09-25 22:31:37'),
(190, 25132279, 'Constancia_Residencia', '2015-09-25 22:32:04'),
(191, 25132279, 'Constancia_Residencia', '2015-09-25 22:32:30'),
(192, 25132279, 'Constancia_Residencia', '2015-09-25 22:32:54'),
(193, 25132279, 'Constancia_Residencia', '2015-09-25 22:33:06'),
(194, 25132279, 'Constancia_Residencia', '2015-09-25 22:33:10'),
(195, 25132279, 'Constancia_Residencia', '2015-09-25 22:33:14'),
(196, 25132279, 'Constancia_Residencia', '2015-09-25 22:33:41'),
(197, 25132279, 'Constancia_Residencia', '2015-09-25 22:33:49'),
(198, 25132279, 'Constancia_Residencia', '2015-09-25 22:34:11'),
(199, 25132279, 'Constancia_Residencia', '2015-09-25 22:34:12'),
(200, 25132279, 'Constancia_Residencia', '2015-09-25 22:34:31'),
(201, 25132279, 'Constancia_Residencia', '2015-09-25 22:34:47'),
(202, 25132279, 'Constancia_Residencia', '2015-09-25 22:34:58'),
(203, 25132279, 'Constancia_Residencia', '2015-09-25 22:35:14'),
(204, 25132279, 'Constancia_Residencia', '2015-09-25 22:35:19'),
(205, 25132279, 'Constancia_Residencia', '2015-09-25 22:35:26'),
(206, 25132279, 'Constancia_Residencia', '2015-09-25 22:36:19'),
(207, 25132279, 'Constancia_Residencia', '2015-09-25 22:36:20'),
(208, 25132279, 'Constancia_Residencia', '2015-09-25 22:36:20'),
(209, 25132279, 'Constancia_Residencia', '2015-09-25 22:37:15'),
(210, 25132279, 'Constancia_Residencia', '2015-09-25 22:37:23'),
(211, 25132279, 'Constancia_Residencia', '2015-09-25 22:37:52'),
(212, 25132279, 'Constancia_Residencia', '2015-09-25 22:38:18'),
(213, 25132279, 'Constancia_Residencia', '2015-09-25 22:38:47'),
(214, 25132279, 'Constancia_Residencia', '2015-09-25 22:39:02'),
(215, 25132279, 'Constancia_Residencia', '2015-09-25 22:39:08'),
(216, 25132279, 'Constancia_Residencia', '2015-09-25 22:39:48'),
(217, 25132279, 'Constancia_Residencia', '2015-09-26 14:22:48'),
(218, 25132279, 'Constancia_Residencia', '2015-09-26 14:25:01'),
(219, 25132279, 'Constancia_Residencia', '2015-09-26 14:25:51'),
(220, 25132279, 'Constancia_Residencia', '2015-09-26 14:44:20'),
(221, 24235566, 'Constancia_Residencia', '2015-09-26 14:45:15'),
(222, 24235566, 'Constancia_Residencia', '2015-09-26 14:52:12'),
(223, 25132279, 'Carta_Aval', '2015-09-26 15:22:41'),
(224, 25132279, 'Carta_Aval', '2015-09-26 15:31:38'),
(225, 25132279, 'Carta_Aval', '2015-09-26 15:32:29'),
(226, 25132279, 'Carta_Aval', '2015-09-26 15:33:20'),
(227, 25132279, 'Carta_Aval', '2015-09-26 15:33:22'),
(228, 25132279, 'Carta_Aval', '2015-09-26 15:34:08'),
(229, 25132279, 'Carta_Aval', '2015-09-26 15:34:29'),
(230, 25132279, 'Carta_Aval', '2015-09-26 15:35:13'),
(231, 25132279, 'Carta_Aval', '2015-09-26 15:35:49'),
(232, 25132279, 'Carta_Aval', '2015-09-26 15:36:08'),
(233, 25132279, 'Carta_Aval', '2015-09-26 15:36:26'),
(234, 25132279, 'Carta_Aval', '2015-09-26 15:37:23'),
(235, 25132279, 'Carta_Aval', '2015-09-26 15:39:01'),
(236, 25132279, 'Carta_Aval', '2015-09-26 15:39:42'),
(237, 25132279, 'Carta_Aval', '2015-09-26 15:39:50'),
(238, 25132279, 'Carta_Aval', '2015-09-26 15:40:25'),
(239, 25132279, 'Carta_Aval', '2015-09-26 16:04:54'),
(240, 25132279, 'Carta_Aval', '2015-09-26 16:11:02'),
(241, 25132279, 'Carta_Aval', '2015-09-26 16:12:08'),
(242, 25132279, 'Carta_Aval', '2015-09-26 16:12:30'),
(243, 25132279, 'Carta_Aval', '2015-09-26 16:12:50'),
(244, 25132279, 'Carta_Aval', '2015-09-26 16:14:17'),
(245, 25132279, 'Carta_Aval', '2015-09-26 16:14:18'),
(246, 25132279, 'Carta_Aval', '2015-09-26 16:14:18'),
(247, 25132279, 'Carta_Aval', '2015-09-26 16:14:19'),
(248, 25132279, 'Carta_Aval', '2015-09-26 16:14:19'),
(249, 25132279, 'Carta_Aval', '2015-09-26 16:14:24'),
(250, 25132279, 'Carta_Aval', '2015-09-26 16:14:33'),
(251, 25132279, 'Carta_Aval', '2015-09-26 16:14:42'),
(252, 25132279, 'Carta_Aval', '2015-09-26 16:14:47'),
(253, 25132279, 'Carta_Aval', '2015-09-26 16:15:03'),
(254, 25132279, 'Carta_Aval', '2015-09-26 16:15:17'),
(255, 25132279, 'Carta_Aval', '2015-09-26 16:15:24'),
(256, 25132279, 'Carta_Aval', '2015-09-26 16:16:22'),
(257, 25132279, 'Carta_Aval', '2015-09-26 16:16:27'),
(258, 25132279, 'Carta_Aval', '2015-09-26 16:16:51'),
(259, 25132279, 'Carta_Aval', '2015-09-26 16:16:59'),
(260, 25132279, 'Carta_Aval', '2015-09-26 16:17:09'),
(261, 25132279, 'Carta_Aval', '2015-09-26 16:17:10'),
(262, 25132279, 'Carta_Aval', '2015-09-26 16:17:11'),
(263, 25132279, 'Carta_Aval', '2015-09-26 16:17:15'),
(264, 25132279, 'Carta_Aval', '2015-09-26 16:17:48'),
(265, 25132279, 'Carta_Aval', '2015-09-26 16:17:53'),
(266, 25132279, 'Carta_Aval', '2015-09-26 16:18:34'),
(267, 25132279, 'Carta_Aval', '2015-09-26 16:18:48'),
(268, 25132279, 'Carta_Aval', '2015-09-26 16:27:30'),
(269, 25132279, 'Carta_Aval', '2015-09-26 16:29:14'),
(270, 25132279, 'Carta_Aval', '2015-09-26 16:29:31'),
(271, 24235566, 'Constancia_Residencia', '2015-09-26 16:30:15'),
(272, 24235566, 'Constancia_Residencia', '2015-09-26 16:30:31'),
(273, 24235566, 'Constancia_Residencia', '2015-09-26 16:30:55'),
(274, 24235566, 'Constancia_Residencia', '2015-09-26 16:33:48'),
(275, 24235566, 'Constancia_Residencia', '2015-09-26 16:33:53'),
(276, 24235566, 'Constancia_Residencia', '2015-09-26 16:34:03'),
(277, 24235566, 'Constancia_Residencia', '2015-09-26 16:34:04'),
(278, 24235566, 'Constancia_Residencia', '2015-09-26 16:34:27'),
(279, 24235566, 'Constancia_Residencia', '2015-09-26 16:37:44'),
(280, 24235566, 'Constancia_Residencia', '2015-09-26 23:42:23'),
(281, 25132279, 'Carta_Aval', '2015-09-26 23:43:10'),
(282, 25132279, 'Carta_Aval', '2015-09-26 23:43:32'),
(283, 25132279, 'Constancia_Residencia', '2015-09-26 23:52:11'),
(284, 25132279, 'Constancia_Residencia', '2015-09-26 23:52:29'),
(285, 25132279, 'Constancia_Residencia', '2015-09-26 23:53:39'),
(286, 25132279, 'Constancia_Residencia', '2015-09-26 23:53:56'),
(287, 25132279, 'Constancia_Residencia', '2015-09-26 23:54:07'),
(288, 25132279, 'Constancia_Residencia', '2015-09-26 23:54:20'),
(289, 25132279, 'Constancia_Residencia', '2015-09-26 23:56:03'),
(290, 25132279, 'Constancia_Residencia', '2015-09-26 23:56:49'),
(291, 25132279, 'Constancia_Residencia', '2015-09-26 23:56:57'),
(292, 25132279, 'Constancia_Residencia', '2015-09-26 23:58:08'),
(293, 25132279, 'Constancia_Residencia', '2015-09-26 23:58:31'),
(294, 24235566, 'Constancia_Residencia', '2015-09-26 23:58:46'),
(295, 24235566, 'Constancia_Residencia', '2015-09-26 23:59:40'),
(296, 24235566, 'Constancia_Residencia', '2015-09-27 00:00:12'),
(297, 24235566, 'Constancia_Residencia', '2015-09-27 00:00:25'),
(298, 24235566, 'Constancia_Residencia', '2015-09-27 00:00:40'),
(299, 24235566, 'Constancia_Residencia', '2015-09-27 00:00:40'),
(300, 24235566, 'Constancia_Residencia', '2015-09-27 00:02:43'),
(301, 24235566, 'Constancia_Residencia', '2015-09-27 18:36:50'),
(302, 24235566, 'Constancia_Residencia', '2015-09-27 19:45:41'),
(303, 25132279, 'Carta_Aval', '2015-09-27 19:51:17'),
(304, 24235566, 'Constancia_Residencia', '2015-09-27 19:52:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
`id` int(11) NOT NULL,
  `nombres` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(8) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `residencia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `antiguedad` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `cedula`, `fecha`, `residencia`, `antiguedad`) VALUES
(1, 'VICTOR MANUEL ', 'LAYA CASTILLO', 25132279, '2015-09-25 19:08:27', 'Casa 23 Calle 4', 1996),
(2, 'JORGE JOSÃ‰', 'LARA RODRIGUEZ', 24235566, '2015-09-26 14:44:59', 'PRINCIPAL CASA 3', 2001);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cedula` (`cedula`), ADD KEY `cedula_2` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2017 a las 11:17:01
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `homestead`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, '1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP', 1, NULL, NULL, NULL),
(2, 2, 'fyK8rndQfs59RiYn8wXIHwOSyqn2CTNo', 1, '2017-11-16 19:39:48', '2017-11-16 19:39:48', '2017-11-16 19:39:48'),
(3, 3, '2avmsRYkIAnyvqQhozVdq37lzNibQrsd', 1, '2017-11-25 21:38:48', '2017-11-25 21:38:48', '2017-11-25 21:38:48'),
(4, 4, 'aiX4HGbEGiQY4K6w8DSUQQDQmsLUjZhp', 1, '2017-11-30 21:17:15', '2017-11-30 21:17:14', '2017-11-30 21:17:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `idcaja` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idsedefk` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`idcaja`, `nombre`, `idsedefk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Caja Uno', 1, '2017-11-12 12:33:02', '2017-11-17 02:16:35', NULL),
(2, 'Caja Dos', 1, '2017-11-12 13:27:29', '2017-11-17 04:56:21', NULL),
(3, 'Caja Tres', 1, '2017-11-12 13:27:48', '2017-11-17 04:56:25', NULL),
(4, 'Caja Uno', 2, '2017-11-12 13:28:34', '2017-11-17 04:57:05', NULL),
(5, 'Caja Dos', 2, '2017-11-12 13:28:51', '2017-11-17 04:57:17', NULL),
(6, 'Caja Tres', 2, '2017-11-12 13:29:11', '2017-11-17 04:57:28', NULL),
(7, 'Caja Uno', 3, '2017-11-12 13:29:33', '2017-11-17 04:57:40', NULL),
(8, 'Caja Dos', 3, '2017-11-17 02:30:52', '2017-11-17 04:57:50', NULL),
(9, 'Caja Tres', 3, '2017-11-17 02:32:02', '2017-11-17 04:58:01', NULL),
(10, 'Caja Cuatro', 1, '2017-11-17 02:32:19', '2017-11-17 04:58:44', NULL),
(11, 'Caja Once', 2, '2017-11-17 02:32:35', '2017-11-17 02:32:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idestado` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(22, '2017_05_05_084634_PasswordReset', 1),
(23, '2017_11_08_201921_create_sedes_table', 1),
(24, '2017_11_10_014610_create_estados_table', 1),
(25, '2017_11_10_195840_create_categorias_table', 1),
(26, '2017_11_11_211505_create_notificaciones_table', 2),
(27, '2017_11_11_235616_create_promociones_table', 2),
(28, '2017_11_12_003707_create_tipos_table', 3),
(29, '2017_11_12_022123_create_cajas_table', 4),
(30, '2017_11_16_191309_create_personas_table', 4),
(31, '2017_11_11_211506_create_notificaciones_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idnotificacion` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpersonafk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`idnotificacion`, `descripcion`, `idpersonafk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Prueba una', 1, '2017-11-18 01:03:29', '2017-11-18 04:42:45', NULL),
(2, 'Prueba dos', 2, '2017-11-18 04:40:04', '2017-11-18 04:57:38', NULL),
(3, 'Saludo de bienvenida', 1, '2017-11-18 04:40:22', '2017-11-18 04:45:39', NULL),
(4, 'Prueba Cuatro', 1, '2017-11-18 04:59:01', '2017-11-18 04:59:01', NULL),
(5, 'Esta es una prueba para permitir que los usuarios puedan ver las notificaciones se sea su rol dentro del sistema', 1, '2017-11-18 23:30:45', '2017-11-18 23:30:45', NULL),
(6, 'Prueba seis de las notificaciones', 2, '2017-11-19 00:19:09', '2017-11-19 00:19:09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$WfHQspLC2Pfv9VfRCg1DB.H7YTxsaly7FyITlhp1ff/On2RKTDvbC', '2017-11-19 02:17:07'),
('prueba@gmail.com', '$2y$10$87kz1/Sb0V1CzOM2w.AhNu5sBbKzQvGnO62q34yxdgy7bghW/yfqu', '2017-11-26 22:41:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'LM3MQisBUxAVeW0WDXHqpCXdE9xd9knQ', '2017-11-12 05:11:57', '2017-11-12 05:11:57'),
(2, 1, 'yi4baxMtCCdjosSJDDFG0ZDNTsELkF2m', '2017-11-16 02:48:12', '2017-11-16 02:48:12'),
(5, 1, '6DrQQ4sAJEVWq3oEewKDl81N55EfGhLB', '2017-11-16 23:08:41', '2017-11-16 23:08:41'),
(6, 1, 'u4VXdsNNOBWFLNdJVGtNdwbRbZtdE3jg', '2017-11-17 20:22:20', '2017-11-17 20:22:20'),
(7, 1, 'nnczB5JHuWlVoig9vtZmxEdwP36Z1n7t', '2017-11-18 04:08:54', '2017-11-18 04:08:54'),
(8, 1, '6Cy5X98SKLs6CBXs31kLjmQKTPNL1T3c', '2017-11-20 06:53:57', '2017-11-20 06:53:57'),
(9, 1, 'hqZ9L436LfO1EgBYgCjgfxlHEP7i7MDE', '2017-11-25 01:31:01', '2017-11-25 01:31:01'),
(18, 1, 'UGWyin7BBGVZxE6KpD2h5fLUP1FtVxxC', '2017-11-25 23:50:11', '2017-11-25 23:50:11'),
(19, 1, '360EUlnDWL7dMFd5E6jcOaw86CW7OHcR', '2017-11-26 22:41:58', '2017-11-26 22:41:58'),
(20, 1, 'Q52kjqVokPryMO8CuCNkuuyOLg7ampVm', '2017-11-27 04:50:18', '2017-11-27 04:50:18'),
(21, 1, 'wHZFXqFJDWYljWAUfIGN6MzsjNJ3GV4F', '2017-11-27 21:15:39', '2017-11-27 21:15:39'),
(22, 4, 'CCAcyqcazwljRbNRKqYK5CBd3OgtWqO0', '2017-11-30 21:17:25', '2017-11-30 21:17:25'),
(23, 1, 'CmzRAM2dima3C7phgLU0s6Y7zPy5xKYD', '2017-12-07 19:24:47', '2017-12-07 19:24:47'),
(24, 1, 'n9FJW4zcfbmD1j8hTKO6LMSWPOxv0Vjx', '2017-12-07 19:24:47', '2017-12-07 19:24:47'),
(26, 1, 'fe94qwUktRl7tyoQvt7fHx8Jpbpnt3aV', '2017-12-08 15:50:55', '2017-12-08 15:50:55'),
(30, 1, 'XTc1nLfW1SHYlpjJ9z7PBkUmePQNwfoG', '2017-12-08 16:01:12', '2017-12-08 16:01:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtipofk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idpersona`, `nombre`, `apellido`, `telefono`, `correo`, `fechaNacimiento`, `direccion`, `idtipofk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wilmer', 'Mosquera', 4535535, 'wilmer@gmail.com', '1993-08-09', 'calle 45', 1, '2017-11-17 01:10:37', '2017-11-17 21:49:04', NULL),
(2, 'prueba', 'prueba', 2342424, 'prueba@gmail.com', '2017-11-08', 'calle 56', 2, '2017-11-17 21:49:48', '2017-11-17 21:49:48', NULL),
(3, 'tercera', 'prueba', 2442332, 'tercera@gmail.com', '2017-11-15', 'calle 65 - 99', 3, '2017-11-27 00:02:38', '2017-11-27 00:02:38', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `idpromocion` int(11) NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procentaje` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`idpromocion`, `descripcion`, `procentaje`, `fechainicio`, `fechafin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '16% de descuento', 16, '2017-11-11', '2017-11-30', '2017-11-12 05:16:49', '2017-11-12 05:17:02', NULL),
(2, '30 % de descuento', 30, '2017-11-08', '2017-11-16', '2017-11-17 03:03:52', '2017-11-17 03:03:52', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', '{\"password.request\":true,\"password.email\":true,\"password.reset\":true,\"home.dashboard\":true,\"user.index\":true,\"user.create\":true,\"user.store\":true,\"user.show\":true,\"user.edit\":true,\"user.update\":true,\"user.destroy\":true,\"user.permissions\":true,\"user.save\":true,\"user.activate\":true,\"user.deactivate\":true,\"role.index\":true,\"role.create\":true,\"role.store\":true,\"role.show\":true,\"role.edit\":true,\"role.update\":true,\"role.destroy\":true,\"role.permissions\":true,\"role.save\":true,\"facturacion.index\":true,\"facturacion.create\":true,\"facturacion.store\":true,\"facturacion.show\":true,\"facturacion.edit\":true,\"facturacion.update\":true,\"facturacion.destroy\":true,\"ventas.index\":true,\"ventas.create\":true,\"ventas.store\":true,\"ventas.show\":true,\"ventas.edit\":true,\"ventas.update\":true,\"ventas.destroy\":true,\"compras.index\":true,\"compras.create\":true,\"compras.store\":true,\"compras.show\":true,\"compras.edit\":true,\"compras.update\":true,\"compras.destroy\":true,\"inventario.index\":true,\"inventario.create\":true,\"inventario.store\":true,\"inventario.show\":true,\"inventario.edit\":true,\"inventario.update\":true,\"inventario.destroy\":true,\"sedes.index\":true,\"sedes.create\":true,\"sedes.store\":true,\"sedes.show\":true,\"sedes.edit\":true,\"sedes.update\":true,\"sedes.destroy\":true,\"estados.index\":true,\"estados.create\":true,\"estados.store\":true,\"estados.show\":true,\"estados.edit\":true,\"estados.update\":true,\"estados.destroy\":true,\"configuracion.index\":true,\"configuracion.create\":true,\"configuracion.store\":true,\"configuracion.show\":true,\"configuracion.edit\":true,\"configuracion.update\":true,\"configuracion.destroy\":true,\"categorias.index\":true,\"categorias.create\":true,\"categorias.store\":true,\"categorias.show\":true,\"categorias.edit\":true,\"categorias.update\":true,\"categorias.destroy\":true,\"tipos.index\":true,\"tipos.create\":true,\"tipos.store\":true,\"tipos.show\":true,\"tipos.edit\":true,\"tipos.update\":true,\"tipos.destroy\":true,\"cajas.index\":true,\"cajas.create\":true,\"cajas.store\":true,\"cajas.show\":true,\"cajas.edit\":true,\"cajas.update\":true,\"cajas.destroy\":true,\"personas.index\":true,\"personas.create\":true,\"personas.store\":true,\"personas.show\":true,\"personas.edit\":true,\"personas.update\":true,\"personas.destroy\":true,\"personal.permissions\":true}', NULL, '2017-11-27 21:53:44'),
(2, 'client', 'Cliente', '{\"home.dashboard\":true}', NULL, '2017-11-16 23:24:59'),
(3, 'proveedor', 'Proveedor', NULL, '2017-11-16 23:24:34', '2017-11-16 23:24:34'),
(4, 'empleado', 'Empleado', NULL, '2017-11-16 23:25:31', '2017-11-16 23:25:31'),
(5, 'ejecutivo', 'Ejecutivo', NULL, '2017-11-16 23:25:56', '2017-11-16 23:25:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, '2017-11-25 23:40:49', '2017-11-25 23:40:49'),
(3, 4, '2017-11-25 21:38:48', '2017-11-25 21:38:48'),
(4, 2, '2017-11-30 21:17:15', '2017-11-30 21:17:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `idsede` int(11) NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`idsede`, `descripcion`, `direccion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'Select', '', NULL, NULL, NULL),
(1, 'Norte', 'calle 45-66', '2017-11-12 07:53:45', '2017-11-26 00:40:01', NULL),
(2, 'Sur', 'calle 84-90', '2017-11-12 07:54:00', '2017-11-17 23:37:29', NULL),
(3, 'Oriente', 'calle 63-34', '2017-11-12 07:54:18', '2017-11-12 07:54:18', NULL),
(4, 'Centro', 'Calle 34 -78', '2017-11-26 01:56:33', '2017-11-26 01:56:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2017-11-12 05:08:23', '2017-11-12 05:08:23'),
(2, NULL, 'ip', '::1', '2017-11-12 05:08:23', '2017-11-12 05:08:23'),
(3, NULL, 'global', NULL, '2017-11-12 05:11:47', '2017-11-12 05:11:47'),
(4, NULL, 'ip', '::1', '2017-11-12 05:11:47', '2017-11-12 05:11:47'),
(5, 1, 'user', NULL, '2017-11-12 05:11:47', '2017-11-12 05:11:47'),
(6, NULL, 'global', NULL, '2017-11-16 23:08:29', '2017-11-16 23:08:29'),
(7, NULL, 'ip', '::1', '2017-11-16 23:08:30', '2017-11-16 23:08:30'),
(8, 1, 'user', NULL, '2017-11-16 23:08:30', '2017-11-16 23:08:30'),
(9, NULL, 'global', NULL, '2017-11-19 00:43:23', '2017-11-19 00:43:23'),
(10, NULL, 'ip', '::1', '2017-11-19 00:43:23', '2017-11-19 00:43:23'),
(11, 1, 'user', NULL, '2017-11-19 00:43:23', '2017-11-19 00:43:23'),
(12, NULL, 'global', NULL, '2017-11-25 01:30:54', '2017-11-25 01:30:54'),
(13, NULL, 'ip', '::1', '2017-11-25 01:30:54', '2017-11-25 01:30:54'),
(14, 1, 'user', NULL, '2017-11-25 01:30:54', '2017-11-25 01:30:54'),
(15, NULL, 'global', NULL, '2017-11-25 23:37:25', '2017-11-25 23:37:25'),
(16, NULL, 'ip', '::1', '2017-11-25 23:37:25', '2017-11-25 23:37:25'),
(17, NULL, 'global', NULL, '2017-11-25 23:37:35', '2017-11-25 23:37:35'),
(18, NULL, 'ip', '::1', '2017-11-25 23:37:35', '2017-11-25 23:37:35'),
(19, NULL, 'global', NULL, '2017-11-25 23:37:50', '2017-11-25 23:37:50'),
(20, NULL, 'ip', '::1', '2017-11-25 23:37:50', '2017-11-25 23:37:50'),
(21, NULL, 'global', NULL, '2017-12-08 15:50:48', '2017-12-08 15:50:48'),
(22, NULL, 'ip', '::1', '2017-12-08 15:50:48', '2017-12-08 15:50:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`idtipo`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', '2017-11-12 05:43:37', '2017-11-12 05:43:37', NULL),
(2, 'Cliente', '2017-11-12 05:43:45', '2017-11-12 05:43:45', NULL),
(3, 'Proveedor', '2017-11-12 05:43:56', '2017-11-12 05:43:56', NULL),
(4, 'Empleado', '2017-11-12 05:44:16', '2017-11-12 05:46:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `avatar`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '1512683925.jpg', '$2y$10$Yx7K6q3iLKUYMgnW2bsCqOHwc6rsMXKjSwJoKJr0WpnIVWmTwwLR6', '{\"home.dashboard\":true}', '2017-12-08 16:01:12', 'Wilmer', 'Mosquera', NULL, NULL, NULL, '2017-12-08 16:01:12'),
(2, 'prueba@gmail.com', '1512748336.jpg', '$2y$10$Dkr6bpv1L6mj42BpgCDxAeTQhK.Z8bMTF5Vus06vIWCZ2MZqWa8Zu', '', '2017-12-08 15:54:21', 'Prueba', 'Primera', NULL, NULL, '2017-11-16 19:39:48', '2017-12-08 15:54:21'),
(3, 'tres@gmail.com', 'default.jpg', '$2y$10$MVJgd7SplBmwXQssbz5O.OnFPdYa.iT3kAUHeDF2dXdk8vm4nQYrK', NULL, NULL, 'tres', 'prueba', NULL, NULL, '2017-11-25 21:38:48', '2017-11-25 21:38:48'),
(4, 'qwer@gmail.com', 'default.jpg', '$2y$10$PIXcijeloQLFBu.5N1fMuO.WkdHmLfA7MhPPpBmBEuhPlQCPNYYOK', NULL, '2017-11-30 21:17:26', 'qwer', 'qwer', NULL, NULL, '2017-11-30 21:17:14', '2017-11-30 21:17:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`idcaja`),
  ADD KEY `cajas_idsedefk_foreign` (`idsedefk`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idnotificacion`),
  ADD KEY `notificaciones_idpersonafk_foreign` (`idpersonafk`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `personas_idtipofk_foreign` (`idtipofk`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idpromocion`);

--
-- Indices de la tabla `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`idsede`);

--
-- Indices de la tabla `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD CONSTRAINT `cajas_idsedefk_foreign` FOREIGN KEY (`idsedefk`) REFERENCES `sedes` (`idsede`);

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `notificaciones_idpersonafk_foreign` FOREIGN KEY (`idpersonafk`) REFERENCES `personas` (`idpersona`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_idtipofk_foreign` FOREIGN KEY (`idtipofk`) REFERENCES `tipos` (`idtipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

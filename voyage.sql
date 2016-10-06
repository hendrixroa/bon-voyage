-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2016 at 01:27 PM
-- Server version: 5.5.52-0+deb8u1
-- PHP Version: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voyage`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinos`
--

CREATE TABLE IF NOT EXISTS `destinos` (
`id` int(10) unsigned NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lugar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `viaje_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destinos`
--

INSERT INTO `destinos` (`id`, `codigo`, `nombre`, `lugar`, `created_at`, `updated_at`, `viaje_id`) VALUES
(1, '4554', 'Linea fina', 'España', '2016-10-06 21:14:31', '2016-10-06 21:14:31', NULL),
(2, '45547', 'Linea de pinga', 'Estados Unidos', '2016-10-06 21:14:44', '2016-10-06 21:14:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_05_193103_create_viajeros_table', 1),
('2016_10_05_193112_create_viajes_table', 1),
('2016_10_05_203543_create_destino_table', 1),
('2016_10_05_203551_create_origen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `origens`
--

CREATE TABLE IF NOT EXISTS `origens` (
`id` int(10) unsigned NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lugar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viaje_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `origens`
--

INSERT INTO `origens` (`id`, `codigo`, `nombre`, `lugar`, `viaje_id`, `created_at`, `updated_at`) VALUES
(1, '234', 'Oceania', 'Peru', NULL, '2016-10-06 21:13:52', '2016-10-06 21:13:52'),
(2, '2345', 'Atantico', 'Panama', NULL, '2016-10-06 21:14:08', '2016-10-06 21:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `viajeros`
--

CREATE TABLE IF NOT EXISTS `viajeros` (
`id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viajeros`
--

INSERT INTO `viajeros` (`id`, `nombre`, `cedula`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Jose Angel', '5676532', 'Argentina', '3434342', '2016-10-06 21:14:53', '2016-10-06 21:14:53'),
(2, 'Pedrito Perez', '56765', 'Lima', '3234', '2016-10-06 21:15:14', '2016-10-06 21:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `viajes`
--

CREATE TABLE IF NOT EXISTS `viajes` (
`id` int(10) unsigned NOT NULL,
  `cod_viajes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_plazas` int(11) NOT NULL,
  `origen_id` int(10) unsigned NOT NULL,
  `destino_id` int(10) unsigned NOT NULL,
  `fecha_viajes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viajero_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viajes`
--

INSERT INTO `viajes` (`id`, `cod_viajes`, `num_plazas`, `origen_id`, `destino_id`, `fecha_viajes`, `viajero_id`, `created_at`, `updated_at`) VALUES
(1, '345', 6, 1, 1, '09/03/2016', 1, '2016-10-06 21:26:31', '2016-10-06 21:26:31'),
(2, '765', 8, 2, 2, '19/03/2017', 2, '2016-10-06 21:26:57', '2016-10-06 21:26:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinos`
--
ALTER TABLE `destinos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `origens`
--
ALTER TABLE `origens`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `viajeros`
--
ALTER TABLE `viajeros`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `viajeros_cedula_unique` (`cedula`), ADD UNIQUE KEY `viajeros_telefono_unique` (`telefono`);

--
-- Indexes for table `viajes`
--
ALTER TABLE `viajes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinos`
--
ALTER TABLE `destinos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `origens`
--
ALTER TABLE `origens`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `viajeros`
--
ALTER TABLE `viajeros`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `viajes`
--
ALTER TABLE `viajes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

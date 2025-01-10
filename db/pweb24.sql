-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para pweb24
CREATE DATABASE IF NOT EXISTS `pweb24` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pweb24`;

-- Volcando estructura para tabla pweb24.almacena_producto
CREATE TABLE IF NOT EXISTS `almacena_producto` (
  `id_puesto` int NOT NULL,
  `id_producto` int NOT NULL,
  `cantidad_disponible` int NOT NULL,
  `precio` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla pweb24.almacena_producto: ~3 rows (aproximadamente)
INSERT INTO `almacena_producto` (`id_puesto`, `id_producto`, `cantidad_disponible`, `precio`) VALUES
	(1, 1, 20, 15.50),
	(1, 11, 10, 12.00),
	(1, 12, 15, 8.50),
	(1, 13, 25, 7.20),
	(1, 14, 12, 14.80),
	(1, 15, 18, 6.50),
	(1, 51, 10, 9.80),
	(1, 52, 8, 22.00),
	(1, 53, 13, 11.40),
	(1, 54, 7, 19.50),
	(1, 55, 14, 5.50),
	(2, 2, 15, 10.00),
	(2, 16, 20, 20.00),
	(2, 17, 30, 15.00),
	(2, 18, 22, 12.00),
	(2, 19, 17, 8.00),
	(2, 20, 25, 9.50),
	(2, 56, 10, 25.00),
	(2, 57, 12, 14.00),
	(2, 58, 18, 10.50),
	(2, 59, 14, 9.00),
	(2, 60, 16, 13.00),
	(3, 3, 30, 3.50),
	(3, 21, 20, 4.00),
	(3, 22, 18, 2.50),
	(3, 23, 15, 3.00),
	(3, 24, 25, 3.20),
	(3, 25, 12, 2.80),
	(3, 61, 14, 1.50),
	(3, 62, 18, 2.20),
	(3, 63, 16, 4.50),
	(3, 64, 22, 2.00),
	(3, 65, 20, 1.80),
	(4, 4, 10, 12.00),
	(4, 26, 15, 5.50),
	(4, 27, 20, 6.00),
	(4, 28, 25, 4.50),
	(4, 29, 18, 3.50),
	(4, 30, 12, 4.00),
	(4, 66, 16, 3.00),
	(4, 67, 22, 5.50),
	(4, 68, 14, 2.80),
	(4, 69, 18, 4.00),
	(4, 70, 20, 5.50),
	(5, 5, 25, 3.50),
	(5, 31, 20, 2.80),
	(5, 32, 30, 3.00),
	(5, 33, 25, 2.20),
	(5, 34, 18, 4.00),
	(5, 35, 10, 6.00),
	(5, 71, 15, 3.80),
	(5, 72, 12, 4.50),
	(5, 73, 18, 5.00),
	(5, 74, 14, 6.00),
	(5, 75, 20, 3.50),
	(6, 6, 40, 8.00),
	(6, 36, 20, 7.50),
	(6, 37, 18, 9.50),
	(6, 38, 25, 10.00),
	(6, 39, 12, 6.50),
	(6, 40, 15, 5.50),
	(6, 76, 18, 12.00),
	(6, 77, 22, 9.00),
	(6, 78, 16, 8.50),
	(6, 79, 20, 10.00),
	(6, 80, 14, 7.00),
	(7, 7, 50, 5.00),
	(7, 41, 20, 6.00),
	(7, 42, 15, 4.50),
	(7, 43, 12, 7.00),
	(7, 44, 18, 8.00),
	(7, 45, 25, 5.50),
	(7, 81, 14, 6.20),
	(7, 82, 16, 4.80),
	(7, 83, 20, 7.50),
	(7, 84, 18, 5.00),
	(7, 85, 22, 4.50),
	(8, 8, 35, 7.50),
	(8, 46, 25, 5.00),
	(8, 47, 20, 6.50),
	(8, 48, 15, 7.00),
	(8, 49, 18, 8.00),
	(8, 50, 12, 4.50),
	(8, 86, 16, 6.00),
	(8, 87, 20, 7.50),
	(8, 88, 14, 9.00),
	(8, 89, 18, 4.00),
	(8, 90, 22, 5.50),
	(9, 9, 45, 1.50),
	(9, 22, 25, 2.80),
	(9, 23, 20, 2.50),
	(9, 24, 18, 3.00),
	(9, 61, 30, 1.80),
	(9, 62, 15, 2.00),
	(10, 10, 55, 9.50),
	(10, 4, 15, 3.50),
	(10, 26, 10, 4.00),
	(10, 27, 20, 2.80),
	(10, 29, 25, 4.50),
	(10, 48, 18, 3.00);

-- Volcando estructura para tabla pweb24.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.cache: ~0 rows (aproximadamente)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('filament-fabricator::page-urls', 'a:12:{i:1;s:9:"/pagina-1";i:2;s:17:"/paagina-con-hero";i:3;s:13:"/introduccion";i:4;s:6:"/about";i:5;s:21:"/contcta-con-nosotros";i:6;s:12:"/paginalibre";i:7;s:10:"/el-equipo";i:8;s:5:"/home";i:9;s:8:"/precios";i:13;s:17:"/practicas/portal";i:14;s:20:"/practicas/practica1";i:10;s:10:"/practicas";}', 2048182644);

-- Volcando estructura para tabla pweb24.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.cache_locks: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pweb24.detalle_factura
CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `id_factura` int NOT NULL,
  `id_producto` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.detalle_factura: ~10 rows (aproximadamente)
INSERT INTO `detalle_factura` (`id_factura`, `id_producto`, `cantidad`) VALUES
	(1, 1, 5),
	(2, 2, 3),
	(3, 3, 7),
	(4, 4, 2),
	(5, 5, 6),
	(6, 6, 4),
	(7, 7, 8),
	(8, 8, 1),
	(9, 9, 9),
	(10, 10, 10);

-- Volcando estructura para tabla pweb24.detalle_pedido
CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id_pedido` int NOT NULL,
  `id_producto` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.detalle_pedido: ~33 rows (aproximadamente)
INSERT INTO `detalle_pedido` (`id_pedido`, `id_producto`, `cantidad`, `precio_unitario`) VALUES
	(1, 1, 5, 10.00),
	(2, 2, 3, 15.50),
	(3, 3, 7, 8.75),
	(4, 4, 2, 12.30),
	(5, 5, 6, 9.20),
	(6, 6, 4, 13.40),
	(7, 7, 8, 11.00),
	(8, 9, 1, 16.50),
	(9, 10, 9, 7.30),
	(10, 5, 10, 14.25),
	(12, 1, 3, 15.50),
	(13, 2, 1, 10.00),
	(14, 1, 1, 15.50),
	(14, 55, 1, 5.50),
	(15, 2, 1, 10.00),
	(15, 16, 1, 20.00),
	(16, 1, 1, 15.50),
	(16, 53, 1, 11.40),
	(17, 31, 1, 2.80),
	(18, 21, 1, 4.00),
	(18, 22, 1, 2.50),
	(19, 1, 1, 15.50),
	(19, 15, 1, 6.50),
	(20, 1, 1, 15.50),
	(21, 2, 1, 10.00),
	(22, 1, 1, 15.50),
	(23, 7, 1, 5.00),
	(24, 1, 1, 15.50),
	(25, 44, 1, 8.00),
	(26, 1, 1, 15.50),
	(27, 2, 1, 10.00),
	(28, 1, 1, 15.50),
	(29, 2, 1, 10.00);

-- Volcando estructura para tabla pweb24.facturas
CREATE TABLE IF NOT EXISTS `facturas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `coste_total` decimal(10,2) NOT NULL,
  `id_puesto` int NOT NULL,
  `id_proveedor` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.facturas: ~10 rows (aproximadamente)
INSERT INTO `facturas` (`id`, `estado`, `fecha`, `coste_total`, `id_puesto`, `id_proveedor`) VALUES
	(1, 'pagado', '2024-01-01', 150.50, 1, 1),
	(2, 'pendiente', '2024-01-02', 200.75, 2, 2),
	(3, 'anulado', '2024-01-03', 50.00, 3, 3),
	(4, 'pagado', '2024-01-04', 300.20, 4, 4),
	(5, 'pendiente', '2024-01-05', 100.40, 5, 5),
	(6, 'anulado', '2024-01-06', 250.30, 6, 6),
	(7, 'pagado', '2024-01-07', 400.60, 7, 7),
	(8, 'pendiente', '2024-01-08', 75.90, 8, 8),
	(9, 'anulado', '2024-01-09', 125.70, 9, 9),
	(10, 'pagado', '2024-01-10', 350.80, 10, 10);

-- Volcando estructura para tabla pweb24.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pweb24.filament_simple_pages
CREATE TABLE IF NOT EXISTS `filament_simple_pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_public` tinyint(1) NOT NULL,
  `indexable` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filament_simple_pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.filament_simple_pages: ~4 rows (aproximadamente)
INSERT INTO `filament_simple_pages` (`id`, `slug`, `title`, `content`, `is_public`, `indexable`, `created_at`, `updated_at`, `image_url`) VALUES
	(1, 'pg1', 'Pagina 1', '<h1>Mi pagina 1</h1><h2>Horario del curso 2023-2024</h2><p><img src="/storage/images/nrJFpxiBAi7uJcFCYGeCrMOyhoX5p93EgWIB0TBi.png" width="252" height="118"></p><p></p>', 1, 0, '2024-08-12 18:44:09', '2024-08-22 14:51:55', NULL),
	(2, 'pg2', 'Pagina 2', '<p>Contenido de la pagina 2</p><p><img src="/storage/images/98e2da93-e25c-4189-a61e-07fdedec7556.png" width="805" height="800"></p><p><img src="/storage/images/c696c8ae-4393-4225-bb29-74183fe65313.png" width="1024" height="1024"></p>', 1, 0, '2024-08-12 18:48:36', '2024-08-22 15:04:23', NULL),
	(5, 'home', 'Home', '<h1 style="text-align: center; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center;; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center; text-align: center;">Pagina HOME del simpleCMS</h1><hr><div class="filament-tiptap-grid-builder" data-type="responsive" data-cols="2" style="grid-template-columns: repeat(2, 1fr);" data-stack-at="md"><div class="filament-tiptap-grid-builder__column" data-col-span="1" style="grid-column: span 1;"><p>Primer bloque</p></div><div class="filament-tiptap-grid-builder__column" data-col-span="1" style="grid-column: span 1;"><p style="text-align: end; ;">Este sitio está desarrollado utilizando el componente de creación de páginas<span style="color: #0c0d82;"> simple-page</span>.</p></div></div><p></p><p>Las páginas tienen un único bloque compuesto por una imagen, que será presentada al comienzo de la página y un contenido, editado con un TipTapEditor. Este editor permite tanto utilizar un menú para la inclusión de las etiquetas más habituales como la edición del código fuente para incluir otros elementos html.</p>', 1, 0, '2024-08-14 14:45:58', '2024-08-22 11:37:59', 'images/logo_ulpgcl_negativa_2t_azul.svg'),
	(6, 'grupo1/pag3', 'Pagina 3', '<p>Contenido de la pagina 3</p>', 1, 0, '2024-08-20 17:42:09', '2024-08-22 10:59:41', NULL);

-- Volcando estructura para tabla pweb24.historicos
CREATE TABLE IF NOT EXISTS `historicos` (
  `id_puesto` int NOT NULL,
  `id_sensor` int NOT NULL,
  `fecha_lectura` datetime NOT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.historicos: ~10 rows (aproximadamente)
INSERT INTO `historicos` (`id_puesto`, `id_sensor`, `fecha_lectura`, `valor`) VALUES
	(1, 1, '2024-01-01 10:00:00', 23.50),
	(2, 2, '2024-01-02 11:00:00', 45.70),
	(3, 3, '2024-01-03 12:00:00', 19.80),
	(4, 4, '2024-01-04 13:00:00', 52.40),
	(5, 5, '2024-01-05 14:00:00', 21.10),
	(6, 6, '2024-01-06 15:00:00', 33.30),
	(7, 7, '2024-01-07 16:00:00', 26.60),
	(8, 8, '2024-01-08 17:00:00', 40.90),
	(9, 9, '2024-01-09 18:00:00', 22.40),
	(10, 10, '2024-01-10 19:00:00', 47.50),
	(1, 1, '2024-12-17 20:44:00', 20.00),
	(1, 1, '2024-12-17 21:44:00', 20.50),
	(1, 1, '2024-12-17 22:44:00', 21.00);

-- Volcando estructura para tabla pweb24.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pweb24.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.job_batches: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pweb24.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha_publicacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.mensajes: ~11 rows (aproximadamente)
INSERT INTO `mensajes` (`id`, `titulo`, `cuerpo`, `id_usuario`, `fecha_publicacion`) VALUES
	(16, 'Compren en el Puesto de Carne', 'El puesto de carne es genial, compre un solomillo increible', 1, '2024-12-04 19:59:08'),
	(17, 'La Pescadería Azul no es recomendable', 'Precios caros y mala calidad, al menos en mi experiencia', 3, '2024-12-04 20:02:14'),
	(18, 'Quesería Gourmet Increible', 'Muchisimos queso y de calidad increible', 3, '2024-12-04 20:03:06'),
	(19, 'La Floristeria es muy buena', 'Hacen ramos increíbles y muy buen precio', 5, '2024-12-04 20:05:11'),
	(20, 'Cafetería Expreso mala atención al cliente', 'Camareros muy bordes y tardan mucho en servir', 3, '2024-12-04 20:06:44'),
	(21, 'FLores bonitas', 'la floristeria tiene flores increibles, comprad ahi.', 1, '2024-12-17 21:04:59'),
	(22, 'Soy vendedora', 'Soy la propietaria de la nueva floristeria', 2, '2024-12-17 21:10:52'),
	(23, 'Carniceria', 'Si quiren ver mi carniceria esta abierta', 4, '2024-12-17 21:11:33'),
	(24, 'Proveedor de Carne', 'El proveedor Carne Uruguayas S.L son muy bueno, precios geniales', 4, '2024-12-17 21:12:06'),
	(25, 'Pescado malo', 'La pescaderia vende pescado malos y sucios', 1, '2024-12-17 21:14:15'),
	(26, 'Flores baratas', 'si quieren decorar sus puestos, para los vendedores del mercado hago el 50%', 2, '2024-12-17 21:15:11');

-- Volcando estructura para tabla pweb24.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'header',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.menus: ~3 rows (aproximadamente)
INSERT INTO `menus` (`id`, `key`, `location`, `title`, `items`, `activated`, `created_at`, `updated_at`) VALUES
	(1, 'simpleCMS', 'header', 'simpeCMS', NULL, 1, '2024-08-13 11:30:13', '2024-08-22 11:38:49'),
	(2, 'CMS', 'header', 'CMS', NULL, 1, '2024-08-13 11:31:18', '2024-08-22 20:34:39'),
	(3, 'pieCMS', 'footer', 'footerCMS', NULL, 1, '2024-08-19 19:51:08', '2024-08-19 19:51:36');

-- Volcando estructura para tabla pweb24.menu_items
CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint unsigned NOT NULL,
  `title` json NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'primary',
  `badge_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_badge` tinyint(1) DEFAULT '1',
  `has_badge_query` tinyint(1) DEFAULT '1',
  `badge_table` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `badge_condation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `badge` json DEFAULT NULL,
  `is_route` tinyint(1) DEFAULT '1',
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_tab` tinyint(1) DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  `order` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.menu_items: ~15 rows (aproximadamente)
INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `icon`, `badge_color`, `has_badge`, `has_badge_query`, `badge_table`, `badge_condation`, `badge`, `is_route`, `route`, `url`, `new_tab`, `permissions`, `order`, `created_at`, `updated_at`) VALUES
	(3, 1, '{"en": "Home"}', 'heroicon-c-home', NULL, 0, 1, NULL, NULL, '{"en": "El cuadro"}', 0, 'simpleCMS/{slug}', '/simpleCMS/home', 0, '[]', 1, '2024-08-13 14:45:01', '2024-08-22 11:39:19'),
	(5, 2, '{"en": "Home"}', 'heroicon-o-home', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, 'home', 0, '[]', 1, '2024-08-16 14:46:27', '2024-08-22 20:32:21'),
	(6, 2, '{"en": "About us"}', 'heroicon-o-user-group', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, 'about', 0, '[]', 7, '2024-08-16 14:48:58', '2024-08-22 20:32:21'),
	(7, 2, '{"en": "Introduccion"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, 'introduccion', 0, '[]', 2, '2024-08-16 14:50:44', '2024-08-22 20:32:21'),
	(8, 2, '{"en": "Página simple"}', 'heroicon-c-link', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/simpleCMS/pg1', 0, '[]', 4, '2024-08-16 14:52:15', '2024-08-22 20:32:21'),
	(9, 2, '{"en": "Contacta"}', 'heroicon-c-pencil-square', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, 'contcta-con-nosotros', 0, '[]', 5, '2024-08-18 20:58:41', '2024-08-22 20:32:21'),
	(11, 2, '{"en": "El Equipo"}', 'heroicon-c-user-group', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, 'el-equipo', 0, '[]', 6, '2024-08-19 10:40:47', '2024-08-22 20:32:21'),
	(12, 3, '{"en": "Aviso Legal"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/avisoLegal', 0, '[]', 0, '2024-08-19 19:52:32', '2024-08-19 19:52:32'),
	(13, 3, '{"en": "Protección de datos"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/proteccionDatos', 0, '[]', 0, '2024-08-19 19:52:57', '2024-08-20 09:55:11'),
	(14, 3, '{"en": "Cookies"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/cookies', 0, '[]', 0, '2024-08-19 19:53:21', '2024-08-19 19:53:21'),
	(15, 3, '{"en": "Sobre esta web"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/sobreWeb', 0, '[]', 0, '2024-08-19 19:54:21', '2024-08-19 19:54:21'),
	(16, 1, '{"en": "Full CMS"}', 'heroicon-o-home', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/home', 0, '[]', 4, '2024-08-20 15:13:43', '2024-08-22 11:38:42'),
	(17, 1, '{"en": "Pagina 1"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/simpleCMS/pg1', 0, '[]', 2, '2024-08-20 16:25:56', '2024-08-22 11:38:42'),
	(18, 1, '{"en": "Pagina 2"}', NULL, NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/simpleCMS/pg2', 0, '[]', 3, '2024-08-20 16:26:26', '2024-08-22 11:38:42'),
	(19, 2, '{"en": "Practicas"}', 'heroicon-c-wrench', NULL, 0, 1, NULL, NULL, NULL, 0, NULL, '/practicas', 0, '[]', 3, '2024-08-22 16:23:41', '2024-08-22 20:33:03');

-- Volcando estructura para tabla pweb24.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.migrations: ~28 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2022_12_14_083707_create_settings_table', 2),
	(5, '2024_08_21_204117_sites_settings', 2),
	(6, '2024_08_21_210001_create_permission_tables', 3),
	(7, '2024_08_21_211148_create_pages_table', 4),
	(8, '2024_08_21_211149_fix_slug_unique_constraint_on_pages_table', 4),
	(9, '2022_04_02_192724_create_menus_table', 5),
	(10, '2024_05_13_192724_create_menu_items_table', 5),
	(11, '2024_08_22_100444_create_filament-simple-pages_table', 6),
	(12, '2024_08_22_100445_add_image_to_filament-simple-pages_table', 6),
	(37, 'create_table_almacenaproducto', 7),
	(38, 'create_table_detallefactura', 7),
	(39, 'create_table_detallepedido', 7),
	(40, 'create_table_facturas', 7),
	(41, 'create_table_historicos', 7),
	(42, 'create_table_pedidos', 7),
	(43, 'create_table_productos', 7),
	(44, 'create_table_proveedors', 7),
	(45, 'create_table_puestos', 7),
	(46, 'create_table_sensors', 7),
	(47, 'create_table_stocks', 7),
	(48, 'create_table_usuarios', 7),
	(49, '2024_11_27_095922_create_clcategoriapuestos_table', 8),
	(50, '2024_11_27_095938_create_clpuestos_table', 8),
	(51, '2024_11_27_095946_create_clpedidos_table', 8),
	(52, '2024_12_02_175619_create_messages_table', 9);

-- Volcando estructura para tabla pweb24.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.model_has_permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pweb24.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.model_has_roles: ~4 rows (aproximadamente)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 3),
	(2, 'App\\Models\\User', 4),
	(2, 'App\\Models\\User', 5);

-- Volcando estructura para tabla pweb24.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `blocks` json NOT NULL,
  `parent_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_parent_id_unique` (`slug`,`parent_id`),
  KEY `pages_parent_id_foreign` (`parent_id`),
  KEY `pages_title_index` (`title`),
  KEY `pages_layout_index` (`layout`),
  CONSTRAINT `pages_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.pages: ~12 rows (aproximadamente)
INSERT INTO `pages` (`id`, `title`, `slug`, `layout`, `blocks`, `parent_id`, `created_at`, `updated_at`) VALUES
	(1, 'Pagina 1', 'pagina-1', 'default', '[{"data": {"content": "<h1 style=\\"text-align: center;\\">Texto al centro y h1</h1>\\n<p style=\\"text-align: right;\\">Texto a la derecha</p>\\n<p style=\\"text-align: left;\\">Texto a la izquierda</p>\\n<p style=\\"text-align: right;\\">&nbsp;</p>", "image_url": null, "colorFondo": "#c2fcf9"}, "type": "libre-tiny-m-c-e"}]', NULL, '2024-08-16 10:51:03', '2024-08-20 10:24:47'),
	(2, 'Paagina con hero', 'paagina-con-hero', 'default', '[{"data": {"image": "01J5DRXE3CW7HJ87XJC8GDDX32.png", "title": "El  titulo", "button_url": "http://cmspweb.test/Home", "button_text": "al Homes", "description": "Una descripción"}, "type": "hero"}, {"data": {"image": "01J5RTJ3AHG45ZC6V27NCDFH1W.jpg", "title": "Segundo bloque", "button_url": null, "button_text": null, "description": "Descripción del bloque"}, "type": "hero"}]', NULL, '2024-08-16 13:01:37', '2024-08-20 20:19:50'),
	(3, 'Introducción', 'introduccion', 'default', '[{"data": {"url": null, "boton": "y un boton", "title": "Esto es un bloque CTA básico.  Contiene un título"}, "type": "CTA_basico"}, {"data": {"url": "/home", "boton": ".. y un botón al ...", "image": "01J5E60X620DZD16GKPP8MRTXP.png", "title": "Bloque tipo Hero mod1", "content": "Tiene una InputText como Contenido. O sea, es una string sin formato y una imagen de fondo con opacidad. ", "opacity": "0.2"}, "type": "hero_mod1"}, {"data": {"url1": null, "url2": null, "image": "01J5R458XKQJZAQQPARDHRBEH4.jpg", "boton1": null, "boton2": null, "number": "15", "content": "<h2 style=\\"text-align: center;\\"><span style=\\"color: #236fa1;\\">Bloque tipo Hero mod2</span></h2>\\n<p><span style=\\"color: #000000;\\">Para el contenido utiliza el editor <strong>TinyMCE</strong>.</span></p>\\n<p><span style=\\"color: #000000;\\">Es un editor bastante completo, incluye el upload de im&aacute;genes, ver codigo fuente, etc...</span></p>\\n<p><span style=\\"color: #000000;\\">Este un bloque de contenido tipo \\"Hero mod2\\", que contiene el texto, una imagen y dos posibles botones.</span></p>\\n<p>&nbsp;</p>\\n<p>&nbsp;</p>\\n<p>&nbsp;</p>\\n<details class=\\"mce-accordion\\">\\n<summary>Accordion summary...Esto es un acordeon</summary>\\n<p style=\\"text-align: left;\\">Aqui estar&iacute;a</p>\\n<p style=\\"text-align: left;\\">todo el texto del acordeon</p>\\n<p style=\\"text-align: left;\\">en varias lineas</p>\\n<p style=\\"text-align: center;\\">&nbsp;</p>\\n</details>\\n<p>Otra linea despu&eacute;s</p>", "opacity": "0.4"}, "type": "hero_mod2"}, {"data": {"url1": null, "url2": null, "image": "01J5R660807W9XGZAQ2GM4R0GQ.jpg", "boton1": null, "boton2": null, "content": "<p style=\\"text-align: center;\\"><span style=\\"font-size: 17px;\\"><strong>Otro cuadro hero mod2</strong></span></p>\\n<p>as</p>\\n<p>sa</p>\\n<p>sa</p>\\n<p>a</p>\\n<p>a</p>\\n<p>a</p>\\n<p><img style=\\"display: block; margin-left: auto; margin-right: auto;\\" src=\\"http://cmsPWeb.test/storage/uploads/K4jBD554w2W519txuPU4u38i7aisY6bWnApyq2qW.png\\" width=\\"252\\" height=\\"251\\"></p>\\n<p style=\\"text-align: center;\\">Con una imagen dentro del contenido</p>\\n<p>a</p>\\n<p>a</p>\\n<p>&nbsp;</p>", "opacity": "0.7"}, "type": "hero_mod2"}, {"data": {"image": "01J5R6NYYZA4E9Y4HPX5ND7CS4.jpg", "title": "Block Hero", "button_url": "precios", "button_text": "..a precios", "description": "Este es un bloque Hero básico. Con un enlace a los precios."}, "type": "hero"}]', NULL, '2024-08-16 16:40:18', '2024-08-20 14:35:42'),
	(4, 'Acerca de', 'about', 'defaultULPGC', '[{"data": [], "type": "about"}]', NULL, '2024-08-18 19:45:00', '2024-08-20 08:45:40'),
	(5, 'Contcta con nosotros', 'contcta-con-nosotros', 'defaultULPGC', '[{"data": [], "type": "contact-us"}]', NULL, '2024-08-18 20:51:42', '2024-08-20 08:45:55'),
	(6, 'PaginaLibre', 'paginalibre', 'default', '[{"data": {"content": "<h2 style=\\"padding-left: 40px; text-align: center;\\"><strong>esto es el contenido&nbsp;</strong></h2>\\n<p><strong><!-- pagebreak --></strong></p>\\n<div style=\\"text-align: center;\\">de la pagina libre\\n<details class=\\"mce-accordion\\">\\n<summary>Este es un elemento de tipo acordeon</summary>\\n<p>Aqui tienes que estar el cuerpo del acordeon</p>\\n<p>Con tantas l&iacute;neas como sean necesarias</p>\\n</details>\\n</div>\\n<p style=\\"padding-left: 40px;\\">Esta p&aacute;gina solo tiene un bloque&nbsp;<strong>Libre tiny m c e.</strong>&nbsp;</p>\\n<p style=\\"padding-left: 40px;\\">Este tipo de p&aacute;ginas puede tener una imagen de fondo y un color de fondo</p>", "image_url": null, "colorFondo": "#caf1f5"}, "type": "libre-tiny-m-c-e"}]', NULL, '2024-08-18 21:23:04', '2024-08-22 08:29:49'),
	(7, 'El equipo', 'el-equipo', 'defaultULPGC', '[{"data": [], "type": "team-mod1"}]', NULL, '2024-08-19 10:28:26', '2024-08-20 08:45:28'),
	(8, 'Home', 'home', 'default', '[{"data": {"url1": "/about", "url2": "/el-equipo", "image": "01J5R61W2TYZXJYC6T3XCB0W3E.jpg", "boton1": "Acerca de ....", "boton2": "EL equipo", "content": "<h1 style=\\"text-align: center;\\">P&aacute;gina de Francisco Cazorla Hern&aacute;ndez</h1>\\n<h2 style=\\"padding-left: 40px;\\">Creaci&oacute;n del prototipo del portal a desarrollar</h2>\\n<h3>Creaci&oacute;n de la estructura b&aacute;sica&nbsp;</h3>\\n<h4 style=\\"text-align: right;\\">.... con configurador de menu</h4>\\n<p><span style=\\"font-size: 18px;\\">Se podr&aacute;n modificar las p&aacute;ginas utilizando el editor&nbsp;<strong>TinyMCE </strong>y otros tipos de bloques precargados.</span></p>\\n<p><span style=\\"font-size: 18px;\\">Deber&aacute; entrar en al panel de admin, siendo un usuario con privilegios de <em>admin.</em></span></p>\\n<p>Este contenido est&aacute; desarollado dentro un bloque de tipo \\"<em><strong>Hero mod2</strong></em>\\", que contiene el texto, una imagen y dos posibles botones. La imagen definida en el bloque ser&aacute; utilizada en el fondo del contenido de manera fija.&nbsp;</p>\\n<p>&nbsp;</p>", "opacity": "0.5"}, "type": "hero_mod2"}]', NULL, '2024-08-20 10:33:04', '2024-10-28 11:18:04'),
	(9, 'Precios', 'precios', 'default', '[{"data": [], "type": "pricing"}]', NULL, '2024-08-20 14:34:54', '2024-08-20 14:35:03'),
	(10, 'Practicas', 'practicas', 'defaultPractica', '[{"data": {"image": "01J5XTVVXF1KQPY592HTD77SG5.jpg", "title": "Portal de Practicas", "button_url": null, "button_text": null, "description": "Utilizaremos este portal para la comprobación de algunas prácticas y el prototipado del portal a desarrollar a lo largo del curso."}, "type": "hero"}]', NULL, '2024-08-22 15:31:45', '2024-08-22 20:17:32'),
	(13, 'Portal', 'portal', 'defaultPractica', '[{"data": {"image": "01J5XZHPFH5M80XJJ5CKJRVE6X.png", "title": "Portal del curso", "button_url": "/portal", "button_text": "... ir al Portal", "description": "Se deberá desarrollar un portal basado íntegramente en Laravel. Se deberán definir las plantillas blade, las hojas de estilos y javascripts necesarios. El portal debe estar a partir de la dirección /portal \\n"}, "type": "hero"}]', 10, '2024-08-22 20:23:11', '2024-08-22 20:41:43'),
	(14, 'Práctica1 ', 'practica1', 'defaultPractica', '[{"data": [], "type": "practica1"}]', 10, '2024-08-22 20:37:05', '2024-08-22 20:37:05');

-- Volcando estructura para tabla pweb24.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla pweb24.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` int NOT NULL,
  `id_puesto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.pedidos: ~29 rows (aproximadamente)
INSERT INTO `pedidos` (`id`, `estado`, `id_usuario`, `id_puesto`) VALUES
	(1, 'pendiente', 1, '5'),
	(2, 'pagado', 3, '6'),
	(3, 'anulado', 5, '7'),
	(4, 'pendiente', 7, '8'),
	(5, 'pagado', 9, '1'),
	(6, 'anulado', 2, '2'),
	(7, 'pendiente', 4, '3'),
	(8, 'pagado', 6, '4'),
	(9, 'anulado', 8, '5'),
	(10, 'pendiente', 10, '6'),
	(11, 'pagado', 1, '1'),
	(12, 'pagado', 1, '1'),
	(13, 'pagado', 1, '2'),
	(14, 'pagado', 1, '1'),
	(15, 'pagado', 1, '2'),
	(16, 'pagado', 1, '1'),
	(17, 'pagado', 1, '5'),
	(18, 'pagado', 1, '3'),
	(19, 'pagado', 1, '1'),
	(20, 'pagado', 1, '1'),
	(21, 'pagado', 1, '2'),
	(22, 'pagado', 1, '1'),
	(23, 'pagado', 1, '7'),
	(24, 'pagado', 1, '1'),
	(25, 'pagado', 1, '7'),
	(26, 'pagado', 1, '1'),
	(27, 'pagado', 1, '2'),
	(28, 'pagado', 1, '1'),
	(29, 'pagado', 1, '2');

-- Volcando estructura para tabla pweb24.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.permissions: ~22 rows (aproximadamente)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'view_role', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(2, 'view_any_role', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(3, 'create_role', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(4, 'update_role', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(5, 'delete_role', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(6, 'delete_any_role', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(7, 'view_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(8, 'view_any_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(9, 'create_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(10, 'update_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(11, 'restore_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(12, 'restore_any_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(13, 'replicate_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(14, 'reorder_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(15, 'delete_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(16, 'delete_any_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(17, 'force_delete_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(18, 'force_delete_any_user', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(19, 'page_SettingsHub', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(20, 'page_SiteSettings', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(21, 'page_SocialMenuSettings', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(22, 'page_LocationSettings', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06');

-- Volcando estructura para tabla pweb24.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.productos: ~90 rows (aproximadamente)
INSERT INTO `productos` (`id`, `nombre`, `categoria`, `descripcion`) VALUES
	(1, 'Carne de res', 'carniceria', 'Corte de primera calidad'),
	(2, 'Pescado fresco', 'pescaderia', 'Del mar a tu mesa'),
	(3, 'Pan integral', 'panaderia', 'Pan saludable y fresco'),
	(4, 'Cafe espresso', 'cafeteria', 'Cafe fuerte y aromatico'),
	(5, 'Manzanas', 'fruteria', 'Frutas frescas y dulces'),
	(6, 'Queso manchego', 'queseria', 'Queso de alta calidad'),
	(7, 'Rosas rojas', 'floristeria', 'Flores frescas y fragantes'),
	(8, 'Batido de frutas', 'cafeteria', 'Bebida natural y refrescante'),
	(9, 'Croissants', 'panaderia', 'Bolleria de mantequilla'),
	(10, 'Leche y Leche', 'cafeteria', 'Cafe con leche condensada'),
	(11, 'Chuletón de cerdo', 'carniceria', 'Carne sabrosa y jugosa'),
	(12, 'Salchichas artesanales', 'carniceria', 'Embutido de calidad'),
	(13, 'Pollo entero', 'carniceria', 'Pollo fresco de granja'),
	(14, 'Costillas de cordero', 'carniceria', 'Costillas tiernas y jugosas'),
	(15, 'Carne molida', 'carniceria', 'Carne de res picada de calidad'),
	(16, 'Langostinos', 'pescaderia', 'Mariscos frescos y grandes'),
	(17, 'Camarones', 'pescaderia', 'Deliciosos camarones frescos'),
	(18, 'Atún', 'pescaderia', 'Atún fresco y saludable'),
	(19, 'Calamares', 'pescaderia', 'Calamares frescos y tiernos'),
	(20, 'Trucha', 'pescaderia', 'Pescado fresco de río'),
	(21, 'Pan de centeno', 'panaderia', 'Pan denso y nutritivo'),
	(22, 'Donuts', 'panaderia', 'Bollería dulce y suave'),
	(23, 'Pan de ajo', 'panaderia', 'Pan con un toque de ajo'),
	(24, 'Baguette', 'panaderia', 'Pan francés crujiente'),
	(25, 'Muffins de arándanos', 'panaderia', 'Bollería con arándanos frescos'),
	(26, 'Capuchino', 'cafeteria', 'Cafe con leche espumosa'),
	(27, 'Latte vainilla', 'cafeteria', 'Cafe suave con sabor a vainilla'),
	(28, 'Té verde', 'cafeteria', 'Té natural y saludable'),
	(29, 'Chocolate caliente', 'cafeteria', 'Bebida de chocolate cremosa'),
	(30, 'Sandwich vegetal', 'cafeteria', 'Sandwich con verduras frescas'),
	(31, 'Peras', 'fruteria', 'Frutas frescas y jugosas'),
	(32, 'Naranjas', 'fruteria', 'Frutas cítricas y saludables'),
	(33, 'Plátanos', 'fruteria', 'Frutas tropicales'),
	(34, 'Uvas', 'fruteria', 'Racimos frescos y dulces'),
	(35, 'Sandía', 'fruteria', 'Fruta refrescante y jugosa'),
	(36, 'Queso cheddar', 'queseria', 'Queso maduro y fuerte'),
	(37, 'Queso azul', 'queseria', 'Queso con sabor fuerte y picante'),
	(38, 'Queso feta', 'queseria', 'Queso fresco y salado'),
	(39, 'Queso brie', 'queseria', 'Queso suave y cremoso'),
	(40, 'Queso gouda', 'queseria', 'Queso holandés semi curado'),
	(41, 'Lirios', 'floristeria', 'Flores blancas y elegantes'),
	(42, 'Tulipanes', 'floristeria', 'Flores coloridas y vibrantes'),
	(43, 'Orquídeas', 'floristeria', 'Flores exóticas y delicadas'),
	(44, 'Girasoles', 'floristeria', 'Flores grandes y brillantes'),
	(45, 'Claveles', 'floristeria', 'Flores de colores variados'),
	(46, 'Zumo de naranja', 'cafeteria', 'Bebida cítrica y refrescante'),
	(47, 'Batido de chocolate', 'cafeteria', 'Bebida dulce y cremosa'),
	(48, 'Café americano', 'cafeteria', 'Café suave y diluido'),
	(49, 'Té chai', 'cafeteria', 'Infusión especiada y aromática'),
	(50, 'Croissant de almendras', 'cafeteria', 'Bollería con almendras'),
	(51, 'Morcilla', 'carniceria', 'Embutido de sangre y arroz'),
	(52, 'Solomillo de ternera', 'carniceria', 'Corte de ternera de alta calidad'),
	(53, 'Chorizo fresco', 'carniceria', 'Embutido tradicional'),
	(54, 'Entrecot', 'carniceria', 'Corte de carne con mucho sabor'),
	(55, 'Pechuga de pollo', 'carniceria', 'Parte más magra del pollo'),
	(56, 'Pulpo', 'pescaderia', 'Pulpo fresco ideal para parrilla'),
	(57, 'Mejillones', 'pescaderia', 'Marisco fresco y delicioso'),
	(58, 'Merluza', 'pescaderia', 'Pescado blanco y suave'),
	(59, 'Bacalao', 'pescaderia', 'Pescado salado y de sabor intenso'),
	(60, 'Almejas', 'pescaderia', 'Marisco fresco ideal para paellas'),
	(61, 'Pan de chocolate', 'panaderia', 'Bollito relleno de chocolate'),
	(62, 'Empanadas', 'panaderia', 'Masa rellena de carne o verduras'),
	(63, 'Pan sin gluten', 'panaderia', 'Pan apto para celíacos'),
	(64, 'Pan de molde', 'panaderia', 'Pan suave y esponjoso para sandwiches'),
	(65, 'Rosquillas', 'panaderia', 'Bollería dulce en forma de aro'),
	(66, 'Smoothie de fresa', 'cafeteria', 'Bebida refrescante de fresas naturales'),
	(67, 'Café con leche', 'cafeteria', 'Café mezclado con leche cremosa'),
	(68, 'Té negro', 'cafeteria', 'Infusión fuerte y estimulante'),
	(69, 'Café moca', 'cafeteria', 'Café con chocolate y crema'),
	(70, 'Frapuccino', 'cafeteria', 'Café helado con crema'),
	(71, 'Kiwi', 'fruteria', 'Fruta verde y rica en vitamina C'),
	(72, 'Melón', 'fruteria', 'Fruta dulce y jugosa'),
	(73, 'Cerezas', 'fruteria', 'Fruta pequeña y roja, muy dulce'),
	(74, 'Higos', 'fruteria', 'Fruta dulce y carnosa'),
	(75, 'Pomelo', 'fruteria', 'Fruta cítrica, ideal para jugos'),
	(76, 'Queso parmesano', 'queseria', 'Queso italiano duro y rallado'),
	(77, 'Queso mozzarella', 'queseria', 'Queso fresco, ideal para pizza'),
	(78, 'Queso ricotta', 'queseria', 'Queso suave y cremoso, ideal para postres'),
	(79, 'Queso camembert', 'queseria', 'Queso francés suave y cremoso'),
	(80, 'Queso suizo', 'queseria', 'Queso con agujeros y sabor suave'),
	(81, 'Rosas amarillas', 'floristeria', 'Flores delicadas y luminosas'),
	(82, 'Margaritas', 'floristeria', 'Flores sencillas y frescas'),
	(83, 'Jazmín', 'floristeria', 'Flores fragantes y delicadas'),
	(84, 'Violetas', 'floristeria', 'Flores pequeñas y coloridas'),
	(85, 'Hortensias', 'floristeria', 'Flores grandes y redondas'),
	(86, 'Batido de mango', 'cafeteria', 'Bebida tropical y refrescante'),
	(87, 'Matcha latte', 'cafeteria', 'Té verde matcha con leche espumosa'),
	(88, 'Café irlandés', 'cafeteria', 'Café con whisky y crema'),
	(89, 'Agua de coco', 'cafeteria', 'Bebida natural y refrescante'),
	(90, 'Bagel', 'cafeteria', 'Bollo redondo, ideal para desayunos');

-- Volcando estructura para tabla pweb24.proveedors
CREATE TABLE IF NOT EXISTS `proveedors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contacto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.proveedors: ~10 rows (aproximadamente)
INSERT INTO `proveedors` (`id`, `contacto`, `sector`) VALUES
	(1, '1234567890', 'carniceria'),
	(2, '0987654321', 'pescaderia'),
	(3, '1122334455', 'panaderia'),
	(4, '5566778899', 'cafeteria'),
	(5, '6677889900', 'fruteria'),
	(6, '2233445566', 'queseria'),
	(7, '3344556677', 'floristeria'),
	(8, '4455667788', 'pescaderia'),
	(9, '5566778890', 'carniceria'),
	(10, '6677889901', 'fruteria');

-- Volcando estructura para tabla pweb24.puestos
CREATE TABLE IF NOT EXISTS `puestos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.puestos: ~10 rows (aproximadamente)
INSERT INTO `puestos` (`id`, `nombre`, `ubicacion`, `descripcion`, `sector`, `id_usuario`) VALUES
	(1, 'Puesto de Carnes', 'planta baja', 'Carnes frescas y de calidad', 'carniceria', 2),
	(2, 'Pescaderia Azul', 'planta baja', 'Pescado fresco todos los dias', 'pescaderia', 4),
	(3, 'Panaderia Delicias', 'planta alta', 'Pan artesanal y bolleria', 'panaderia', 6),
	(4, 'Cafeteria Aroma', 'planta alta', 'Cafe y snacks', 'cafeteria', 8),
	(5, 'Fruteria Natural', 'planta baja', 'Frutas frescas y jugos', 'fruteria', 2),
	(6, 'Queseria Gourmet', 'planta baja', 'Variedad de quesos', 'queseria', 4),
	(7, 'Floristeria Rosa', 'planta alta', 'Flores frescas y plantas', 'floristeria', 6),
	(8, 'Mercado Verde', 'planta baja', 'Productos ecologicos', 'fruteria', 8),
	(9, 'La Despensa', 'planta alta', 'Productos variados', 'panaderia', 10),
	(10, 'Cafeteria Expreso', 'planta baja', 'Cafe rapido y comidas', 'cafeteria', 1);

-- Volcando estructura para tabla pweb24.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.roles: ~3 rows (aproximadamente)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'super_admin', 'web', '2024-08-21 20:00:06', '2024-08-21 20:00:06'),
	(2, 'grupoPractica', 'web', '2024-08-22 15:20:19', '2024-08-22 15:20:19'),
	(3, 'invitado', 'web', '2024-08-22 16:40:37', '2024-08-22 16:40:37');

-- Volcando estructura para tabla pweb24.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.role_has_permissions: ~0 rows (aproximadamente)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1);

-- Volcando estructura para tabla pweb24.sensors
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `magnitud` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_puesto` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.sensors: ~0 rows (aproximadamente)
INSERT INTO `sensors` (`id`, `magnitud`, `ubicacion`, `id_puesto`) VALUES
	(1, '°C', 'planta baja', 1),
	(2, 'dB', 'planta alta', 2),
	(3, '°C', NULL, 3),
	(4, 'dB', 'planta baja', 4),
	(5, '°C', 'planta alta', 5),
	(6, 'dB', NULL, 6),
	(7, '°C', 'planta baja', 7),
	(8, 'dB', 'planta alta', 8),
	(9, '°C', NULL, 9),
	(10, 'dB', 'planta baja', 10),
	(11, '°C', 'planta alta', 10),
	(12, '°C', 'planta alta', 8);

-- Volcando estructura para tabla pweb24.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.sessions: ~0 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('fKAdYhM8srSHBH7OmCEJUbzhiib9y3tRweX59t9r', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidEs3QUhXMDl2bTdDeHNtNFF5ZEttQ2s5ekRxaFlIdVhXUk13cGUySyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1734465967),
	('NNUzEaBxFu5Ud89Nk29hcDotLUdKTi6YpZHgJeOm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaTZ4UUZpS0V3czhneGo1dk5rbHJUN1MyVlc4Y3NyaXo5djNGVWoyUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9wd2ViMjQudGVzdC9taVBvcnRhbC9hY2Nlc28vbXVybyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiZW1haWwiO3M6MjI6Imp1YW4ucGVyZXpAZXhhbXBsZS5jb20iO3M6Mzoicm9sIjtzOjk6ImNvbXByYWRvciI7czoxMDoiaWRfdXN1YXJpbyI7aToxO30=', 1734471182);

-- Volcando estructura para tabla pweb24.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `payload` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_group_name_unique` (`group`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.settings: ~0 rows (aproximadamente)
INSERT INTO `settings` (`id`, `group`, `name`, `locked`, `payload`, `created_at`, `updated_at`) VALUES
	(1, 'sites', 'site_name', 0, '"CMS PWeb 24-25"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(2, 'sites', 'site_description', 0, '"Creative Solutions para la asignatura Programación Web"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(3, 'sites', 'site_keywords', 0, '"Graphics, Marketing, Programming"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(4, 'sites', 'site_profile', 0, 'null', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(5, 'sites', 'site_logo', 0, '"logo_ulpgc_2t.svg "', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(6, 'sites', 'site_author', 0, '"Miguel Angel Quintana"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(7, 'sites', 'site_address', 0, '"Las Palmas de Gran Canaria, Islas Canarias"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(8, 'sites', 'site_email', 0, '"mangel@example.com"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(9, 'sites', 'site_phone', 0, '"+3492845"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(10, 'sites', 'site_phone_code', 0, '"+34"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(11, 'sites', 'site_location', 0, '"España"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(12, 'sites', 'site_currency', 0, '"EUR"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(13, 'sites', 'site_language', 0, '"English"', '2024-08-12 10:35:58', '2024-08-19 19:46:51'),
	(14, 'sites', 'site_social', 0, '[{"link": "http://www.facebook.com/pages/Ulpgc-Para-Ti/160435343978326?sk=wall", "vendor": "facebook"}, {"link": "https://twitter.com/ulpgc", "vendor": "twiter"}, {"link": "https://www.instagram.com/ulpgc_para_ti", "vendor": "instagram"}, {"link": "https://www.linkedin.com/school/universidad-de-las-palmas-de-gran-canaria/", "vendor": "linkedin"}]', '2024-08-12 10:35:58', '2024-08-19 19:46:51');

-- Volcando estructura para tabla pweb24.stocks
CREATE TABLE IF NOT EXISTS `stocks` (
  `id_producto` int NOT NULL,
  `id_proveedor` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.stocks: ~0 rows (aproximadamente)
INSERT INTO `stocks` (`id_producto`, `id_proveedor`, `cantidad`) VALUES
	(1, 1, 50),
	(2, 2, 30),
	(3, 3, 100),
	(4, 4, 20),
	(5, 5, 150),
	(6, 6, 40),
	(7, 7, 60),
	(8, 4, 80),
	(9, 3, 70),
	(10, 2, 25);

-- Volcando estructura para tabla pweb24.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'admin@example.com', NULL, '$2y$12$LoBcN5jo7FaVt2s8nBh73.1frPcAa7bwLE7gTReIHGCUWk9IdqNWO', NULL, '2024-08-21 19:30:37', '2024-08-21 19:30:37'),
	(2, 'Invitado', 'invitado@example.com', NULL, '$2y$12$G4pyJQITXkrTMQsAQfLl9eNDoTU/AB4QBSXe0fhxNAXf3h0BAQUOW', NULL, '2024-08-22 10:38:51', '2024-08-22 10:38:51'),
	(3, 'Alumno1', 'alumno1@example.com', NULL, '$2y$12$UF493x3w.Vaz3WbuvAZpYOrGpWDNKOydkLzLSQn2WiOvTt4jnzp2q', NULL, '2024-08-22 15:21:30', '2024-08-22 15:21:30'),
	(4, 'Alumno2', 'alumno2@example.com', NULL, '$2y$12$cknwARkpKzS9bxkLZjJ3EuXl4OYnIKXYmhTDl01El4e5RLBw3d4sO', NULL, '2024-08-22 15:22:15', '2024-08-22 15:22:15'),
	(5, 'Alumno3', 'alumno3@example.com', NULL, '$2y$12$uRMG9J8Z.zqy9hS.gCekLO7nV1bNV5j/b6aRV7HpfawtQAumA6OI2', NULL, '2024-08-22 15:23:17', '2024-08-22 15:23:17'),
	(6, 'Test User', 'test@example.com', '2024-11-25 12:21:40', '$2y$12$08ZuaAucH2i3PtonU0HZ/ugloKyOiGMxVvzvjxjjTZvdm8Yhkkvqm', 'k32O3n57ze', '2024-11-25 12:21:40', '2024-11-25 12:21:40');

-- Volcando estructura para tabla pweb24.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pweb24.usuarios: ~10 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`, `rol`) VALUES
	(1, 'Juan Perez', 'juan.perez@example.com', 'password123', 'comprador'),
	(2, 'Maria Garcia', 'maria.garcia@example.com', 'password456', 'vendedor'),
	(3, 'Carlos Lopez', 'carlos.lopez@example.com', 'password789', 'comprador'),
	(4, 'Laura Sanchez', 'laura.sanchez@example.com', 'password101', 'vendedor'),
	(5, 'Pedro Torres', 'pedro.torres@example.com', 'password102', 'comprador'),
	(6, 'Ana Jimenez', 'ana.jimenez@example.com', 'password103', 'vendedor'),
	(7, 'Luis Martinez', 'luis.martinez@example.com', 'password104', 'comprador'),
	(8, 'Elena Gonzalez', 'elena.gonzalez@example.com', 'password105', 'vendedor'),
	(9, 'Diego Ramirez', 'diego.ramirez@example.com', 'password106', 'comprador'),
	(10, 'Lucia Morales', 'lucia.morales@example.com', 'password107', 'vendedor');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

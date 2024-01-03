-- Adminer 4.8.1 MySQL 8.0.35-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `CRM_open`;
CREATE DATABASE `CRM_open` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `CRM_open`;

DROP TABLE IF EXISTS `acquisti`;
CREATE TABLE `acquisti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prodotti` int NOT NULL,
  `fattura` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantita` int NOT NULL,
  `costo_totale_netto` decimal(10,2) NOT NULL,
  `costo_totale_lordo` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prodotti` (`id_prodotti`),
  CONSTRAINT `acquisti_ibfk_1` FOREIGN KEY (`id_prodotti`) REFERENCES `prodotti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `auth_groups_users`;
CREATE TABLE `auth_groups_users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `group` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `auth_groups_users` (`id`, `user_id`, `group`, `created_at`) VALUES
(9,	9,	'admin',	'2024-01-02 12:02:23');

DROP TABLE IF EXISTS `auth_identities`;
CREATE TABLE `auth_identities` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `secret` varchar(255) NOT NULL,
  `secret2` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `extra` text,
  `force_reset` tinyint(1) NOT NULL DEFAULT '0',
  `last_used_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_secret` (`type`,`secret`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `auth_identities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `auth_identities` (`id`, `user_id`, `type`, `name`, `secret`, `secret2`, `expires`, `extra`, `force_reset`, `last_used_at`, `created_at`, `updated_at`) VALUES
(13,	9,	'email_password',	NULL,	'admin@info.it',	'$2y$12$ShEtFZ95NxjHX/xLpCge4ekPrrQqKZOO3lutkyp6jwDS7tADdbO4S',	NULL,	NULL,	0,	'2024-01-02 12:18:33',	'2024-01-02 12:02:23',	'2024-01-02 12:18:33');

DROP TABLE IF EXISTS `auth_logins`;
CREATE TABLE `auth_logins` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type_identifier` (`id_type`,`identifier`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `auth_logins` (`id`, `ip_address`, `user_agent`, `id_type`, `identifier`, `user_id`, `date`, `success`) VALUES
(1,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-11 12:15:04',	1),
(2,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-11 12:18:05',	1),
(3,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	NULL,	'2023-12-11 20:05:20',	0),
(4,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-11 20:05:27',	1),
(5,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-11 20:13:03',	1),
(6,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-11 20:16:26',	1),
(7,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-11 20:17:29',	1),
(8,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-19 19:49:34',	1),
(9,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-19 19:50:50',	1),
(10,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-24 09:40:14',	1),
(11,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-25 10:11:07',	1),
(12,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-26 08:22:39',	1),
(13,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'pippuccio76@gmail.com',	8,	'2023-12-26 08:47:26',	1),
(14,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-26 08:57:12',	1),
(15,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-27 08:59:29',	1),
(16,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-27 11:08:59',	1),
(17,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-30 15:20:06',	1),
(18,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-30 15:39:45',	1),
(19,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-30 15:43:54',	1),
(20,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-31 10:38:14',	1),
(21,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2023-12-31 15:17:15',	1),
(22,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'stefanobanchelli@yahoo.it',	1,	'2024-01-01 10:29:06',	1),
(23,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'admin@info.it',	9,	'2024-01-02 12:16:19',	1),
(24,	'127.0.0.1',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',	'email_password',	'admin@info.it',	9,	'2024-01-02 12:18:33',	1);

DROP TABLE IF EXISTS `auth_permissions_users`;
CREATE TABLE `auth_permissions_users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `permission` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_permissions_users_user_id_foreign` (`user_id`),
  CONSTRAINT `auth_permissions_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


DROP TABLE IF EXISTS `auth_remember_tokens`;
CREATE TABLE `auth_remember_tokens` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int unsigned NOT NULL,
  `expires` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `selector` (`selector`),
  KEY `auth_remember_tokens_user_id_foreign` (`user_id`),
  CONSTRAINT `auth_remember_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


DROP TABLE IF EXISTS `auth_token_logins`;
CREATE TABLE `auth_token_logins` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type_identifier` (`id_type`,`identifier`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


DROP TABLE IF EXISTS `clienti`;
CREATE TABLE `clienti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ragione_sociale` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_iva` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_f` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clienti` (`id`, `ragione_sociale`, `p_iva`, `c_f`, `telefono`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'La mia azienda personale',	'5646546464',	'a',	's54f',	'as5',	'2023-12-30 15:47:30',	'2023-12-30 15:47:30',	NULL),
(2,	'La mia azienda personale2 ',	'56465464648',	'awwww',	'55223366',	'as5f',	'2023-12-30 15:47:38',	'2023-12-30 15:50:33',	NULL);

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `clienti_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clienti_id` (`clienti_id`),
  CONSTRAINT `events_ibfk_2` FOREIGN KEY (`clienti_id`) REFERENCES `clienti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1,	'2020-12-28-223112',	'CodeIgniter\\Shield\\Database\\Migrations\\CreateAuthTables',	'default',	'CodeIgniter\\Shield',	1701777999,	1),
(2,	'2021-07-04-041948',	'CodeIgniter\\Settings\\Database\\Migrations\\CreateSettingsTable',	'default',	'CodeIgniter\\Settings',	1701777999,	1),
(3,	'2021-11-14-143905',	'CodeIgniter\\Settings\\Database\\Migrations\\AddContextColumn',	'default',	'CodeIgniter\\Settings',	1701777999,	1),
(4,	'2023-12-06-194220',	'App\\Database\\Migrations\\AddFirstnameLastnameToUsers',	'default',	'App',	1701892279,	2);

DROP TABLE IF EXISTS `prodotti`;
CREATE TABLE `prodotti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codice` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unita_misura` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scorta_minima` int NOT NULL,
  `iva` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `prodotti` (`id`, `nome`, `codice`, `descrizione`, `unita_misura`, `scorta_minima`, `iva`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4,	'primo prodotto',	'11223346',	'primo prodotto inserito',	'PZ',	55,	0,	'2023-12-31 15:30:50',	'2023-12-31 16:57:25',	NULL),
(5,	'secondo prodotto',	'11223348',	'descrizione secondo prodotto',	'mt',	50,	22,	'2023-12-31 16:57:04',	'2024-01-01 10:38:10',	NULL);

DROP TABLE IF EXISTS `prodotti_costi_acquisto`;
CREATE TABLE `prodotti_costi_acquisto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prodotti` int NOT NULL,
  `costo_unitario_netto` decimal(10,2) NOT NULL,
  `costo_unitario_lordo` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prodotti` (`id_prodotti`),
  CONSTRAINT `prodotti_costi_acquisto_ibfk_1` FOREIGN KEY (`id_prodotti`) REFERENCES `prodotti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `prodotti_costi_acquisto` (`id`, `id_prodotti`, `costo_unitario_netto`, `costo_unitario_lordo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5,	4,	22.50,	25.00,	'2023-12-31 15:30:50',	'2023-12-31 16:42:48',	'2023-12-31 16:42:48'),
(7,	4,	22.50,	23.00,	'2023-12-31 16:45:25',	'2023-12-31 16:51:28',	'2023-12-31 16:51:28'),
(8,	4,	22.70,	23.00,	'2023-12-31 16:51:28',	'2023-12-31 16:57:25',	'2023-12-31 16:57:25'),
(9,	5,	66.21,	70.44,	'2023-12-31 16:57:04',	'2023-12-31 16:57:04',	NULL),
(10,	4,	22.70,	23.00,	'2023-12-31 16:57:25',	'2023-12-31 16:57:25',	NULL);

DROP TABLE IF EXISTS `prodotti_costi_vendita`;
CREATE TABLE `prodotti_costi_vendita` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prodotti` int NOT NULL,
  `costo_unitario_netto` decimal(10,2) NOT NULL,
  `costo_unitario_lordo` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prodotti` (`id_prodotti`),
  CONSTRAINT `prodotti_costi_vendita_ibfk_1` FOREIGN KEY (`id_prodotti`) REFERENCES `prodotti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `prodotti_costi_vendita` (`id`, `id_prodotti`, `costo_unitario_netto`, `costo_unitario_lordo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	4,	30.00,	36.00,	'2023-12-31 15:30:50',	'2023-12-31 16:45:25',	'2023-12-31 16:45:25'),
(2,	4,	34.00,	38.00,	'2023-12-31 16:45:25',	'2023-12-31 16:45:25',	NULL),
(3,	5,	56.61,	77.90,	'2023-12-31 16:57:04',	'2023-12-31 16:57:04',	NULL);

DROP TABLE IF EXISTS `sedi_clienti`;
CREATE TABLE `sedi_clienti` (
  `id` int NOT NULL,
  `id_clienti` int NOT NULL,
  `referente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  KEY `id_clienti` (`id_clienti`),
  CONSTRAINT `sedi_clienti_ibfk_1` FOREIGN KEY (`id_clienti`) REFERENCES `clienti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text,
  `type` varchar(31) NOT NULL DEFAULT 'string',
  `context` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


DROP TABLE IF EXISTS `stato_clienti`;
CREATE TABLE `stato_clienti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `last_active` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `users` (`id`, `username`, `status`, `status_message`, `active`, `last_active`, `created_at`, `updated_at`, `deleted_at`, `firstname`, `lastname`) VALUES
(9,	'admin',	NULL,	NULL,	1,	NULL,	'2024-01-02 12:02:23',	'2024-01-02 12:02:23',	NULL,	'Amministratore',	'Amministratore');

DROP TABLE IF EXISTS `vendite`;
CREATE TABLE `vendite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_clienti` int NOT NULL,
  `id_prodotti` int NOT NULL,
  `quantita` int NOT NULL,
  `costo_totale_netto` decimal(10,2) NOT NULL,
  `costo_totale_lordo` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_clienti` (`id_clienti`),
  KEY `id_prodotti` (`id_prodotti`),
  CONSTRAINT `vendite_ibfk_1` FOREIGN KEY (`id_clienti`) REFERENCES `clienti` (`id`),
  CONSTRAINT `vendite_ibfk_2` FOREIGN KEY (`id_prodotti`) REFERENCES `prodotti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2024-01-03 18:24:30

# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.39)
# Database: mocal
# Generation Time: 2024-02-13 8:58:35 AM +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table m_event_calendar_settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `m_event_calendar_settings`;

CREATE TABLE `m_event_calendar_settings` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('default','event','mycalendar') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeslot_interval` int(11) DEFAULT NULL,
  `all_day` tinyint(1) DEFAULT NULL,
  `customize` tinyint(1) NOT NULL DEFAULT '0',
  `reserve_time` tinyint(1) DEFAULT NULL,
  `start_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_type` enum('never','date','count') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_count` int(11) DEFAULT NULL,
  `heading_1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desktop_placeholder` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_placeholder` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `m_event_calendar_settings` WRITE;
/*!40000 ALTER TABLE `m_event_calendar_settings` DISABLE KEYS */;

INSERT INTO `m_event_calendar_settings` (`id`, `user_id`, `event_id`, `type`, `meeting_address`, `location`, `calendar_type`, `status`, `language`, `timezone`, `timeslot_interval`, `all_day`, `customize`, `reserve_time`, `start_date_time`, `end_date_time`, `end_type`, `end_count`, `heading_1`, `heading_2`, `heading_3`, `desktop_placeholder`, `mobile_placeholder`, `calendar_link`, `calendar_profile_image`, `brand_logo`, `after_booking`, `redirect_url`, `privacy_policy_url`, `privacy_policy`, `created_at`, `updated_at`)
VALUES
	('1bbb7717-c0e3-45d7-9748-223a36577365',NULL,NULL,NULL,'Eos quasi laboriosam','Eos dolor quo fugit',NULL,0,NULL,'Nihil quas iusto qua',NULL,NULL,0,NULL,'2024-02-13 11:00:37','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:15:37','2024-02-13 05:15:37'),
	('2',NULL,NULL,NULL,'Id adipisicing Nam ','Est vel neque sed c',NULL,0,NULL,'Velit quaerat labor',NULL,NULL,0,NULL,'2024-02-12 23:58:59','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-12 18:13:59','2024-02-12 18:13:59'),
	('23fc23a5-e170-414c-8af3-e5ccff4e10dd',NULL,NULL,NULL,'Laboriosam saepe re','Incididunt quia exer',NULL,0,NULL,'Maiores in placeat ',NULL,NULL,0,NULL,'2024-02-13 11:59:17','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:14:17','2024-02-13 06:14:17'),
	('2c61ee6d-f2ee-4db2-a771-9348d51ca1f4',NULL,NULL,NULL,'Quisquam do vel volu','Culpa duis qui cons',NULL,0,NULL,'Perspiciatis volupt',NULL,NULL,0,NULL,'2024-02-13 11:53:42','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:08:42','2024-02-13 06:08:42'),
	('3c953fb1-0d78-4d8d-8e39-0cf20b418dc5',NULL,NULL,NULL,'Dolores sit non dol','Et aut ex reprehende',NULL,0,NULL,'Eum et at et sit re',NULL,NULL,0,NULL,'2024-02-13 11:50:32','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:05:32','2024-02-13 06:05:32'),
	('408f1cc2-61ae-48c6-9406-4784bda5c387',NULL,NULL,NULL,'Sed commodi error pe','Nulla iure magna vol',NULL,0,NULL,'Aut ut incididunt au',NULL,NULL,0,NULL,'2024-02-13 00:56:25','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-12 19:11:25','2024-02-12 19:11:25'),
	('4c623722-bca4-4978-a5da-da5a21abb761',NULL,NULL,NULL,'Labore beatae cupida','Nisi non assumenda a',NULL,0,NULL,'Est non est eu aut p',NULL,NULL,0,NULL,'2024-02-13 14:33:03','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 08:48:03','2024-02-13 08:48:03'),
	('5',NULL,NULL,NULL,'Et veritatis fugiat ','Amet ad distinctio',NULL,0,NULL,'Tenetur facere praes',NULL,NULL,0,NULL,'2024-02-13 00:00:29','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-12 18:15:29','2024-02-12 18:15:29'),
	('6',NULL,NULL,NULL,'Quis ipsam aut quas ','In officiis nostrum ',NULL,0,NULL,'Corporis itaque ut i',NULL,NULL,0,NULL,'2024-02-13 00:00:59','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-12 18:15:59','2024-02-12 18:15:59'),
	('63a77d93-6bd6-4f20-a351-bb883cffb6b6',NULL,NULL,NULL,'Nisi assumenda saepe','Nam rerum ut dolorem',NULL,0,NULL,'Saepe adipisicing ve',NULL,NULL,0,NULL,'2024-02-13 11:47:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:02:00','2024-02-13 06:02:00'),
	('7',NULL,NULL,NULL,'Incidunt harum labo','Consequat Nobis und',NULL,0,NULL,'Maiores duis possimu',NULL,NULL,0,NULL,'2024-02-13 00:01:43','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-12 18:16:43','2024-02-12 18:16:43'),
	('73f3f4ef-dc83-4434-8b49-c2a79d50d3db',NULL,NULL,NULL,'Est vel itaque solut','Et ad nulla quaerat ',NULL,0,NULL,'Non quae odio modi p',NULL,NULL,0,NULL,'2024-02-13 11:37:11','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:52:11','2024-02-13 05:52:11'),
	('7a509e45-df1d-4982-a3f1-33fabc8cc59e',NULL,NULL,NULL,'Debitis placeat dig','Magni aliquid quos s',NULL,0,NULL,'Consequatur modi lo',NULL,NULL,0,NULL,'2024-02-13 11:35:58','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:50:58','2024-02-13 05:50:58'),
	('7b5521e6-11ba-4fab-9ebf-a789654cd201','7aa82a00-2f2f-4065-abde-858d7c7ef737',NULL,'mycalendar','office location','in_person_meeting','owner',1,'english','Asia/Kolkata',30,1,0,0,'2023-12-27 15:36:13','2024-03-27 15:36:13','date',NULL,NULL,NULL,NULL,NULL,NULL,'amit-singh',NULL,NULL,NULL,NULL,NULL,NULL,'2023-12-27 21:06:13','2023-12-27 21:06:13'),
	('955ca3c8-8fef-48f8-aeee-014695f650ff',NULL,NULL,NULL,'Culpa cum harum qui','Voluptate est repudi',NULL,0,NULL,'Sit ad corporis ess',NULL,NULL,0,NULL,'2024-02-13 14:32:19','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 08:47:19','2024-02-13 08:47:19'),
	('95647069-f01b-49d8-9513-3bb0275e0f07',NULL,NULL,NULL,'Consequatur impedit','Natus a autem molest',NULL,0,NULL,'Voluptatum dolor eiu',NULL,NULL,0,NULL,'2024-02-13 11:40:29','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:55:29','2024-02-13 05:55:29'),
	('a3caf5ee-5a08-4cbe-9738-e3072b283bc0',NULL,NULL,NULL,'Illum et quaerat du','Asperiores error ame',NULL,0,NULL,'Eiusmod quia nulla o',NULL,NULL,0,NULL,'2024-02-13 11:53:48','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:08:48','2024-02-13 06:08:48'),
	('a9e5aead-6019-4c7d-875e-8e652b640323',NULL,NULL,NULL,'Eius et praesentium ','Voluptates adipisici',NULL,0,NULL,'Velit nostrum nostru',NULL,NULL,0,NULL,'2024-02-13 14:34:40','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 08:49:40','2024-02-13 08:49:40'),
	('aa77468f-8376-4bfa-aa44-02625ade9acb',NULL,NULL,NULL,'Duis officiis omnis ','Sint sunt qui dolori',NULL,0,NULL,'Nesciunt duis aut m',NULL,NULL,0,NULL,'2024-02-13 11:37:55','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:52:55','2024-02-13 05:52:55'),
	('af0b92d7-e208-44cc-96de-02cbb101ec0d',NULL,NULL,NULL,'Magni enim ipsum at','Non reprehenderit vo',NULL,0,NULL,'Commodo qui irure po',NULL,NULL,0,NULL,'2024-02-13 14:33:41','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 08:48:41','2024-02-13 08:48:41'),
	('bdaa793a-ae0e-4b32-a8df-6ff3b66e0547',NULL,NULL,NULL,'Voluptas enim sunt n','Cum velit libero ips',NULL,0,NULL,'Aut doloremque dolor',NULL,NULL,0,NULL,'2024-02-13 11:44:23','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:59:23','2024-02-13 05:59:23'),
	('c1c2863b-fd39-4a6c-a83f-b4e4d7f798f1',NULL,NULL,NULL,'Reprehenderit iure ','Commodi expedita sun',NULL,0,NULL,'Sed ex rerum sunt nu',NULL,NULL,0,NULL,'2024-02-13 14:33:58','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 08:48:58','2024-02-13 08:48:58'),
	('d82d0ee9-45c5-41db-ad2e-b6bdc988f44d',NULL,NULL,NULL,'Qui qui nihil cillum','Placeat dolorem dol',NULL,0,NULL,'Nulla sed reprehende',NULL,NULL,0,NULL,'2024-02-13 11:57:47','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:12:47','2024-02-13 06:12:47'),
	('db43c6a2-7bca-4a32-b5e8-6fc67e26dc24',NULL,NULL,NULL,'Ut nulla porro labor','Et libero dolores un',NULL,0,NULL,'Irure quod consequat',NULL,NULL,0,NULL,'2024-02-13 12:06:55','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:21:55','2024-02-13 06:21:55'),
	('db76747d-15cb-4a2d-9491-da0ae3da2fa3',NULL,NULL,NULL,'Sit aliquip enim ex','Voluptatum nisi quos',NULL,0,NULL,'Dolores et impedit ',NULL,NULL,0,NULL,'2024-02-13 10:55:45','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 05:10:45','2024-02-13 05:10:45'),
	('fa021839-198d-44e8-8fb4-7619f7f39f84',NULL,NULL,NULL,'Ut officia incididun','Officiis hic tempore',NULL,0,NULL,'Consequuntur dicta q',NULL,NULL,0,NULL,'2024-02-13 11:59:36','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:14:36','2024-02-13 06:14:36'),
	('fed46119-eab1-4678-b4f7-a1ca1fc4441b',NULL,NULL,NULL,'Non ut vel aut minus','Nostrud debitis omni',NULL,0,NULL,'Recusandae Quae duc',NULL,NULL,0,NULL,'2024-02-13 11:49:55','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 06:04:55','2024-02-13 06:04:55');

/*!40000 ALTER TABLE `m_event_calendar_settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table m_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `m_users`;

CREATE TABLE `m_users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_reference_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salutation` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `microsoft_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_slug` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_country_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_auth` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_auth_mobile_country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_auth_mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_changed_at` timestamp NULL DEFAULT NULL,
  `profile_pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_verified` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `m_users` WRITE;
/*!40000 ALTER TABLE `m_users` DISABLE KEYS */;

INSERT INTO `m_users` (`id`, `user_reference_id`, `calendar_link`, `status`, `email`, `password`, `salutation`, `first_name`, `last_name`, `mobile`, `timezone`, `theme`, `google_id`, `microsoft_id`, `display_name`, `user_slug`, `profile_image`, `gender`, `designation`, `department`, `mobile_country_id`, `industry`, `address_id`, `created_by`, `updated_by`, `two_step_auth`, `two_step_auth_mobile_country`, `two_step_auth_mobile`, `password_changed_at`, `client_id`, `pin_changed_at`, `profile_pin`, `remember_token`, `created_at`, `updated_at`, `mobile_verified`, `email_verified`, `email_verified_at`, `mobile_verified_at`)
VALUES
	('39c8aaca-6227-42d9-a0c6-12c095993df0',NULL,NULL,1,'amit@gmail.com','$2y$10$5763ecBYMIYmvuIhjp4O.ukb8CJOimIj3otAKSwsS1E4xhN1BU2Ea',NULL,'Amit','Singh',NULL,NULL,NULL,NULL,NULL,NULL,'amit-singh',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-12-13 15:13:08','2023-12-13 15:13:08',0,0,NULL,NULL);

/*!40000 ALTER TABLE `m_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
	(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),
	(4,'2019_08_19_000000_create_failed_jobs_table',1),
	(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(6,'2024_02_12_092014_create_sessions_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reset_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`)
VALUES
	('FhIsQV0u4ocG46oowZLKN5yYl1E32A7SXTgwnRFl',2,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMzR2SUt1RzdXVDJSQTB6U3pPT29RM3prc3RaYzd6NHEwNm5lZFN2WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YToxOntpOjA7czo3OiJzdWNjZXNzIjt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJElleE9DSWpSWnozSU1WMi9lZ01TY3VaUVM1WGRzOTJVbmVMOWJGZ3FINzBoc0NUNTR2ZEZPIjt9',1707814180);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`)
VALUES
	(1,'Oren Coleman','bylo@mailinator.com',NULL,'$2y$12$RYkcwFbpefi7Yk.ed4fwPO7i5VV2Y898kyb2no3tu7lTfbW2ELRs.',NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-12 16:02:59','2024-02-12 16:02:59'),
	(2,'Stuart Ayala','wegyvy@mailinator.com',NULL,'$2y$12$IexOCIjRZz3IMV2/egMScuZQS5Xds92UneL9bFgqH70hsCT54vdFO',NULL,NULL,NULL,NULL,NULL,NULL,'2024-02-13 04:39:25','2024-02-13 04:39:25');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

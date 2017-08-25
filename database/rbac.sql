-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

DROP TABLE IF EXISTS `ability`;
CREATE TABLE `ability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `rule` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_connection` (`role`),
  KEY `rule_connection` (`rule`),
  CONSTRAINT `role_connection` FOREIGN KEY (`role`) REFERENCES `role` (`id`),
  CONSTRAINT `rule_connection` FOREIGN KEY (`rule`) REFERENCES `rules` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ability` (`id`, `role`, `rule`) VALUES
(1,	1,	1),
(2,	1,	2);

DROP TABLE IF EXISTS `arranger`;
CREATE TABLE `arranger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_connection` (`role`),
  KEY `user_connection` (`user`),
  CONSTRAINT `role_user_connection` FOREIGN KEY (`role`) REFERENCES `role` (`id`),
  CONSTRAINT `user_connection` FOREIGN KEY (`user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `arranger` (`id`, `role`, `user`) VALUES
(1,	1,	3),
(2,	2,	1);

DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base',	1503077335),
('m130524_201442_init',	1503077339);

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `role` (`id`, `role`) VALUES
(1,	'admin'),
(2,	'member');

DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rules` (`id`, `rule`, `desc`) VALUES
(1,	'create_roles',	'Ability to create Role'),
(2,	'create_rules',	'Ability to create rules');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1,	'danielpanjaitan',	'xO2oxDHI5uDNjj8xJhW_hpKEkE6ydO35',	'$2y$13$4eytXdS4zjdVzvNvU6SD.Ok93ZSuSawAf7mFajfZszG42Pbu/QfNG',	NULL,	'daniel@tanihub.com',	10,	1503077415,	1503077415),
(2,	'nathanael',	'vS8mEH7Kt7-zTcuVVy_myBvHBq51qVlX',	'$2y$13$1knk94yQPFbxODzIcMSe1.tOtQfjQXm5cWZqqWvj9CxIciIFxVH6W',	NULL,	'nathanael@tanihub.com',	10,	1503077479,	1503077479),
(3,	'admin',	'xkpZWM_Mg6bUOeKb4lsJ3EybYA3tDylC',	'$2y$13$FYGDYkDV2ncR2SCoFFeFXe3mL7y1VZrXuSD.trzSphbuAYB7uDJ6W',	NULL,	'admin@yii2.com',	10,	1503669123,	1503669123);

-- 2017-08-25 16:19:04

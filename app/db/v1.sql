-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 15 Sty 2015, 12:29
-- Wersja serwera: 5.5.40-36.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `16373138_gpi`
--

CREATE TABLE IF NOT EXISTS `db_version` (
  `version` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `db_version` (`version`) VALUES
  (1);


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acl_entries`
--
ALTER TABLE auction ADD max_realization_date DATETIME DEFAULT NULL;
ALTER TABLE auction_audit ADD max_realization_date DATETIME DEFAULT NULL;

CREATE TABLE auction_comments (id INT AUTO_INCREMENT NOT NULL, auction_id INT DEFAULT NULL, content LONGTEXT NOT NULL, created DATETIME NOT NULL, INDEX IDX_EA1648C457B8F0DE (auction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE auction_comments ADD CONSTRAINT FK_EA1648C457B8F0DE FOREIGN KEY (auction_id) REFERENCES auction (id);



CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=357 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=123 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=252 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `content_changed_by` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `max_price` decimal(10,2) DEFAULT NULL,
  `end_time` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `is_canceled` tinyint(1) NOT NULL,
  `is_deactivated` tinyint(1) NOT NULL,
  `is_partially_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1159CC0FDE12AB56` (`created_by`),
  KEY `IDX_1159CC0F16FE72E1` (`updated_by`),
  KEY `IDX_1159CC0F8985DB6D` (`content_changed_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auction_audit`
--

CREATE TABLE IF NOT EXISTS `auction_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `content_changed_by` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `max_price` decimal(10,2) DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `is_canceled` tinyint(1) DEFAULT NULL,
  `is_deactivated` tinyint(1) DEFAULT NULL,
  `is_partially_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auction_category`
--

CREATE TABLE IF NOT EXISTS `auction_category` (
  `auction_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`auction_id`,`category_id`),
  KEY `IDX_B3C4C72F57B8F0DE` (`auction_id`),
  KEY `IDX_B3C4C72F12469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auction_document`
--

CREATE TABLE IF NOT EXISTS `auction_document` (
  `auction_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  PRIMARY KEY (`auction_id`,`document_id`),
  KEY `IDX_6DE1549857B8F0DE` (`auction_id`),
  KEY `IDX_6DE15498C33F7837` (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `basket__basket`
--

CREATE TABLE IF NOT EXISTS `basket__basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `positions` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `delivery_address_id` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL,
  `payment_method_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpt_element` int(11) DEFAULT NULL,
  `delivery_method_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1FD2A7E19395C3F3` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `basket__basket_element`
--

CREATE TABLE IF NOT EXISTS `basket__basket_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `basket_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `vat_rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `options` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4538CA2C1BE1FB52` (`basket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__category`
--

CREATE TABLE IF NOT EXISTS `classification__category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43629B36727ACA70` (`parent_id`),
  KEY `IDX_43629B36E25D857E` (`context`),
  KEY `IDX_43629B36EA9FDD75` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=360 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__category_audit`
--

CREATE TABLE IF NOT EXISTS `classification__category_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__collection`
--

CREATE TABLE IF NOT EXISTS `classification__collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_collection` (`slug`,`context`),
  KEY `IDX_A406B56AE25D857E` (`context`),
  KEY `IDX_A406B56AEA9FDD75` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__collection_audit`
--

CREATE TABLE IF NOT EXISTS `classification__collection_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__context`
--

CREATE TABLE IF NOT EXISTS `classification__context` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__context_audit`
--

CREATE TABLE IF NOT EXISTS `classification__context_audit` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__tag`
--

CREATE TABLE IF NOT EXISTS `classification__tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_context` (`slug`,`context`),
  KEY `IDX_CA57A1C7E25D857E` (`context`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classification__tag_audit`
--

CREATE TABLE IF NOT EXISTS `classification__tag_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment__comment`
--

CREATE TABLE IF NOT EXISTS `comment__comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ancestors` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `depth` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `state` int(11) NOT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` double DEFAULT NULL,
  `private` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD78D017E2904019` (`thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment__comment_audit`
--

CREATE TABLE IF NOT EXISTS `comment__comment_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `thread_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci,
  `ancestors` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` double DEFAULT NULL,
  `private` tinyint(1) DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment__thread`
--

CREATE TABLE IF NOT EXISTS `comment__thread` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_commentable` tinyint(1) NOT NULL,
  `num_comments` int(11) NOT NULL,
  `last_comment_at` datetime DEFAULT NULL,
  `average_note` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3B60C91012469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment__thread_audit`
--

CREATE TABLE IF NOT EXISTS `comment__thread_audit` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rev` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_commentable` tinyint(1) DEFAULT NULL,
  `num_comments` int(11) DEFAULT NULL,
  `last_comment_at` datetime DEFAULT NULL,
  `average_note` double DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer__address`
--

CREATE TABLE IF NOT EXISTS `customer__address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `is_current` tinyint(1) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_55C3CDD39395C3F3` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=295 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer__address_audit`
--

CREATE TABLE IF NOT EXISTS `customer__address_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `is_current` tinyint(1) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer__customer`
--

CREATE TABLE IF NOT EXISTS `customer__customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` int(11) DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `birth_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_fake` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4043373A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer__customer_audit`
--

CREATE TABLE IF NOT EXISTS `customer__customer_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` int(11) DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `birth_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_fake` tinyint(1) DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `content_changed_by` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_211FE820DE12AB56` (`created_by`),
  KEY `IDX_211FE82016FE72E1` (`updated_by`),
  KEY `IDX_211FE8208985DB6D` (`content_changed_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `document_audit`
--

CREATE TABLE IF NOT EXISTS `document_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `content_changed_by` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fos_user_group_audit`
--

CREATE TABLE IF NOT EXISTS `fos_user_group_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=527 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fos_user_user_audit`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) DEFAULT NULL,
  `expired` tinyint(1) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) DEFAULT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invoice__invoice`
--

CREATE TABLE IF NOT EXISTS `invoice__invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `total_inc` decimal(10,4) NOT NULL,
  `total_excl` decimal(10,4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FB05AC619395C3F3` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invoice__invoice_audit`
--

CREATE TABLE IF NOT EXISTS `invoice__invoice_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_inc` decimal(10,4) DEFAULT NULL,
  `total_excl` decimal(10,4) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invoice__invoice_element`
--

CREATE TABLE IF NOT EXISTS `invoice__invoice_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `order_element_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price_excl` decimal(10,4) NOT NULL,
  `unit_price_inc` decimal(10,4) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `vat_rate` decimal(10,4) NOT NULL,
  `total` decimal(10,4) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C66B56842989F1FD` (`invoice_id`),
  KEY `IDX_C66B5684ACC5D771` (`order_element_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1022 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `media__gallery`
--

CREATE TABLE IF NOT EXISTS `media__gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `context` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `default_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `media__gallery_audit`
--

CREATE TABLE IF NOT EXISTS `media__gallery_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `context` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_format` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `media__gallery_media`
--

CREATE TABLE IF NOT EXISTS `media__gallery_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_80D4C5414E7AF8F` (`gallery_id`),
  KEY `IDX_80D4C541EA9FDD75` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=251 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `media__gallery_media_audit`
--

CREATE TABLE IF NOT EXISTS `media__gallery_media_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `media__media`
--

CREATE TABLE IF NOT EXISTS `media__media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) NOT NULL,
  `provider_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_status` int(11) NOT NULL,
  `provider_reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_metadata` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `content_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_size` int(11) DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `context` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cdn_is_flushable` tinyint(1) DEFAULT NULL,
  `cdn_flush_at` datetime DEFAULT NULL,
  `cdn_status` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=421 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `media__media_audit`
--

CREATE TABLE IF NOT EXISTS `media__media_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) DEFAULT NULL,
  `provider_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_status` int(11) DEFAULT NULL,
  `provider_reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_metadata` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `content_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_size` int(11) DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `context` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cdn_is_flushable` tinyint(1) DEFAULT NULL,
  `cdn_flush_at` datetime DEFAULT NULL,
  `cdn_status` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news__comment`
--

CREATE TABLE IF NOT EXISTS `news__comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A90210404B89032C` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1777 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news__comment_audit`
--

CREATE TABLE IF NOT EXISTS `news__comment_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news__post`
--

CREATE TABLE IF NOT EXISTS `news__post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abstract` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `raw_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_formatter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_date_start` datetime DEFAULT NULL,
  `comments_enabled` tinyint(1) NOT NULL,
  `comments_close_at` datetime DEFAULT NULL,
  `comments_default_status` int(11) NOT NULL,
  `comments_count` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7D109BC83DA5256D` (`image_id`),
  KEY `IDX_7D109BC8F675F31B` (`author_id`),
  KEY `IDX_7D109BC8514956FD` (`collection_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=281 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news__post_audit`
--

CREATE TABLE IF NOT EXISTS `news__post_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abstract` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `raw_content` longtext COLLATE utf8_unicode_ci,
  `content_formatter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication_date_start` datetime DEFAULT NULL,
  `comments_enabled` tinyint(1) DEFAULT NULL,
  `comments_close_at` datetime DEFAULT NULL,
  `comments_default_status` int(11) DEFAULT NULL,
  `comments_count` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news__post_tag`
--

CREATE TABLE IF NOT EXISTS `news__post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `IDX_682B20514B89032C` (`post_id`),
  KEY `IDX_682B2051BAD26311` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notification__message`
--

CREATE TABLE IF NOT EXISTS `notification__message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `state` int(11) NOT NULL,
  `restart_count` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `started_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_state` (`state`),
  KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notification__message_audit`
--

CREATE TABLE IF NOT EXISTS `notification__message_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `state` int(11) DEFAULT NULL,
  `restart_count` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `started_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auction` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `content_changed_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_canceled` tinyint(1) NOT NULL,
  `is_deactivated` tinyint(1) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `actual_price` decimal(10,2) NOT NULL,
  `bid_percent` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E817A83A16FE72E1` (`updated_by`),
  KEY `IDX_E817A83A8985DB6D` (`content_changed_by`),
  KEY `IDX_E817A83ADE12AB56` (`created_by`),
  KEY `IDX_E817A83ADEE4F593` (`auction`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offercategory`
--

CREATE TABLE IF NOT EXISTS `offercategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offer_audit`
--

CREATE TABLE IF NOT EXISTS `offer_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `auction` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `content_changed_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_canceled` tinyint(1) DEFAULT NULL,
  `is_deactivated` tinyint(1) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `actual_price` decimal(10,2) NOT NULL,
  `bid_percent` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offer_document`
--

CREATE TABLE IF NOT EXISTS `offer_document` (
  `offer_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  PRIMARY KEY (`offer_id`,`document_id`),
  KEY `IDX_A1143A1453C674EE` (`offer_id`),
  KEY `IDX_A1143A14C33F7837` (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order__order`
--

CREATE TABLE IF NOT EXISTS `order__order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `delivery_status` int(11) DEFAULT NULL,
  `validated_at` datetime DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_inc` decimal(10,4) DEFAULT NULL,
  `total_excl` decimal(10,4) DEFAULT NULL,
  `delivery_cost` decimal(10,4) DEFAULT NULL,
  `delivery_vat` decimal(10,4) DEFAULT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_country_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BC9E6FD19395C3F3` (`customer_id`),
  KEY `order_status` (`status`),
  KEY `payment_status` (`payment_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order__order_audit`
--

CREATE TABLE IF NOT EXISTS `order__order_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `delivery_status` int(11) DEFAULT NULL,
  `validated_at` datetime DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_inc` decimal(10,4) DEFAULT NULL,
  `total_excl` decimal(10,4) DEFAULT NULL,
  `delivery_cost` decimal(10,4) DEFAULT NULL,
  `delivery_vat` decimal(10,4) DEFAULT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_country_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order__order_element`
--

CREATE TABLE IF NOT EXISTS `order__order_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price_excl` decimal(10,4) NOT NULL,
  `unit_price_inc` decimal(10,4) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `vat_rate` decimal(10,4) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `raw_product` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `status` int(11) NOT NULL,
  `delivery_status` int(11) NOT NULL,
  `validated_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_701A67EC8D9F6D38` (`order_id`),
  KEY `product_type` (`product_type`),
  KEY `order_element_status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=922 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order__order_element_audit`
--

CREATE TABLE IF NOT EXISTS `order__order_element_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price_excl` decimal(10,4) DEFAULT NULL,
  `unit_price_inc` decimal(10,4) DEFAULT NULL,
  `price` decimal(10,4) DEFAULT NULL,
  `vat_rate` decimal(10,4) DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `options` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `raw_product` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `status` int(11) DEFAULT NULL,
  `delivery_status` int(11) DEFAULT NULL,
  `validated_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__block`
--

CREATE TABLE IF NOT EXISTS `page__block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `settings` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `enabled` tinyint(1) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_66F58DA0727ACA70` (`parent_id`),
  KEY `IDX_66F58DA0C4663E4` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1089 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__block_audit`
--

CREATE TABLE IF NOT EXISTS `page__block_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `enabled` tinyint(1) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__page`
--

CREATE TABLE IF NOT EXISTS `page__page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `decorate` tinyint(1) NOT NULL,
  `edited` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8_unicode_ci,
  `url` longtext COLLATE utf8_unicode_ci,
  `custom_url` longtext COLLATE utf8_unicode_ci,
  `request_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `javascript` longtext COLLATE utf8_unicode_ci,
  `stylesheet` longtext COLLATE utf8_unicode_ci,
  `raw_headers` longtext COLLATE utf8_unicode_ci,
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2FAE39EDF6BD1646` (`site_id`),
  KEY `IDX_2FAE39ED727ACA70` (`parent_id`),
  KEY `IDX_2FAE39ED158E0B66` (`target_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=626 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__page_audit`
--

CREATE TABLE IF NOT EXISTS `page__page_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `decorate` tinyint(1) DEFAULT NULL,
  `edited` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` longtext COLLATE utf8_unicode_ci,
  `url` longtext COLLATE utf8_unicode_ci,
  `custom_url` longtext COLLATE utf8_unicode_ci,
  `request_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `javascript` longtext COLLATE utf8_unicode_ci,
  `stylesheet` longtext COLLATE utf8_unicode_ci,
  `raw_headers` longtext COLLATE utf8_unicode_ci,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__site`
--

CREATE TABLE IF NOT EXISTS `page__site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relative_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled_from` datetime DEFAULT NULL,
  `enabled_to` datetime DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__site_audit`
--

CREATE TABLE IF NOT EXISTS `page__site_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relative_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled_from` datetime DEFAULT NULL,
  `enabled_to` datetime DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__snapshot`
--

CREATE TABLE IF NOT EXISTS `page__snapshot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `decorate` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `publication_date_start` datetime DEFAULT NULL,
  `publication_date_end` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3963EF9AF6BD1646` (`site_id`),
  KEY `IDX_3963EF9AC4663E4` (`page_id`),
  KEY `idx_snapshot_dates_enabled` (`publication_date_start`,`publication_date_end`,`enabled`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4733 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page__snapshot_audit`
--

CREATE TABLE IF NOT EXISTS `page__snapshot_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `decorate` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `publication_date_start` datetime DEFAULT NULL,
  `publication_date_end` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment__transaction`
--

CREATE TABLE IF NOT EXISTS `payment__transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `parameters` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `status_code` int(11) NOT NULL,
  `payment_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `information` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4A7A00358D9F6D38` (`order_id`),
  KEY `status_code` (`status_code`),
  KEY `state` (`state`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__delivery`
--

CREATE TABLE IF NOT EXISTS `product__delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `per_item` tinyint(1) DEFAULT NULL,
  `country_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `zone` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_77E11FFD4584665A` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__delivery_audit`
--

CREATE TABLE IF NOT EXISTS `product__delivery_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_item` tinyint(1) DEFAULT NULL,
  `country_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zone` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__package`
--

CREATE TABLE IF NOT EXISTS `product__package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `width` decimal(10,4) NOT NULL,
  `height` decimal(10,4) NOT NULL,
  `length` decimal(10,4) NOT NULL,
  `weight` decimal(10,4) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6190EC7F4584665A` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__product`
--

CREATE TABLE IF NOT EXISTS `product__product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_inc_vat` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `raw_description` longtext COLLATE utf8_unicode_ci,
  `description_formatter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci,
  `raw_short_description` longtext COLLATE utf8_unicode_ci,
  `short_description_formatter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `vat_rate` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `product_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `travellers` int(11) DEFAULT NULL,
  `travel_date` datetime DEFAULT NULL,
  `travel_days` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6CB28F473DA5256D` (`image_id`),
  KEY `IDX_6CB28F474E7AF8F` (`gallery_id`),
  KEY `IDX_6CB28F47727ACA70` (`parent_id`),
  KEY `enabled` (`enabled`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__product_audit`
--

CREATE TABLE IF NOT EXISTS `product__product_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_inc_vat` tinyint(1) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `raw_description` longtext COLLATE utf8_unicode_ci,
  `description_formatter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci,
  `raw_short_description` longtext COLLATE utf8_unicode_ci,
  `short_description_formatter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `vat_rate` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `product_type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `travellers` int(11) DEFAULT NULL,
  `travel_date` datetime DEFAULT NULL,
  `travel_days` int(11) DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__product_category`
--

CREATE TABLE IF NOT EXISTS `product__product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `main` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D0B834B14584665A` (`product_id`),
  KEY `IDX_D0B834B112469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__product_category_audit`
--

CREATE TABLE IF NOT EXISTS `product__product_category_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `main` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__product_collection`
--

CREATE TABLE IF NOT EXISTS `product__product_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_96AD96454584665A` (`product_id`),
  KEY `IDX_96AD9645514956FD` (`collection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product__product_collection_audit`
--

CREATE TABLE IF NOT EXISTS `product__product_collection_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `revisions`
--

CREATE TABLE IF NOT EXISTS `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14107 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `site_audit`
--

CREATE TABLE IF NOT EXISTS `site_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` longtext COLLATE utf8_unicode_ci,
  `serverData` longtext COLLATE utf8_unicode_ci,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_car`
--

CREATE TABLE IF NOT EXISTS `test_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engine_id` int(11) DEFAULT NULL,
  `color_r` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_g` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_b` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_material_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `rescueEngine_id` int(11) DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E403A5AE78C9C0A` (`engine_id`),
  KEY `IDX_E403A5A124A1CAE` (`rescueEngine_id`),
  KEY `IDX_E403A5A354AA425589740CE28FDB4419F71D163` (`color_r`,`color_g`,`color_b`,`color_material_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_car_audit`
--

CREATE TABLE IF NOT EXISTS `test_car_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `engine_id` int(11) DEFAULT NULL,
  `color_r` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_g` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_b` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_material_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `rescueEngine_id` int(11) DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_car_engine`
--

CREATE TABLE IF NOT EXISTS `test_car_engine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8BF34046EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_car_engine_audit`
--

CREATE TABLE IF NOT EXISTS `test_car_engine_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `power` int(11) DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_car_inspection`
--

CREATE TABLE IF NOT EXISTS `test_car_inspection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B4624299C3C6F69F` (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_car_inspection_audit`
--

CREATE TABLE IF NOT EXISTS `test_car_inspection_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_color`
--

CREATE TABLE IF NOT EXISTS `test_color` (
  `r` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `g` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `material_id` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`r`,`g`,`b`,`material_id`),
  KEY `IDX_6D88EEE2E308AC6F` (`material_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_color_audit`
--

CREATE TABLE IF NOT EXISTS `test_color_audit` (
  `r` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `g` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `material_id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`r`,`g`,`b`,`material_id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_material`
--

CREATE TABLE IF NOT EXISTS `test_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test_material_audit`
--

CREATE TABLE IF NOT EXISTS `test_material_audit` (
  `id` int(11) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `timeline__action`
--

CREATE TABLE IF NOT EXISTS `timeline__action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_current` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_wanted` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duplicate_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duplicate_priority` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=190 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `timeline__action_component`
--

CREATE TABLE IF NOT EXISTS `timeline__action_component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) DEFAULT NULL,
  `component_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6ACD1B169D32F035` (`action_id`),
  KEY `IDX_6ACD1B16E2ABAFFF` (`component_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=549 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `timeline__component`
--

CREATE TABLE IF NOT EXISTS `timeline__component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identifier` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1B2F01CDD1B862B8` (`hash`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=111 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `timeline__timeline`
--

CREATE TABLE IF NOT EXISTS `timeline__timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FFBC6AD59D32F035` (`action_id`),
  KEY `IDX_FFBC6AD523EDC87` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=731 ;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Ograniczenia dla tabeli `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `FK_1159CC0F16FE72E1` FOREIGN KEY (`updated_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_1159CC0F8985DB6D` FOREIGN KEY (`content_changed_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_1159CC0FDE12AB56` FOREIGN KEY (`created_by`) REFERENCES `fos_user_user` (`id`);

--
-- Ograniczenia dla tabeli `auction_category`
--
ALTER TABLE `auction_category`
  ADD CONSTRAINT `FK_B3C4C72F12469DE2` FOREIGN KEY (`category_id`) REFERENCES `classification__category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C4C72F57B8F0DE` FOREIGN KEY (`auction_id`) REFERENCES `auction` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `auction_document`
--
ALTER TABLE `auction_document`
  ADD CONSTRAINT `FK_6DE1549857B8F0DE` FOREIGN KEY (`auction_id`) REFERENCES `auction` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6DE15498C33F7837` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `basket__basket`
--
ALTER TABLE `basket__basket`
  ADD CONSTRAINT `FK_1FD2A7E19395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer__customer` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `basket__basket_element`
--
ALTER TABLE `basket__basket_element`
  ADD CONSTRAINT `FK_4538CA2C1BE1FB52` FOREIGN KEY (`basket_id`) REFERENCES `basket__basket` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `classification__category`
--
ALTER TABLE `classification__category`
  ADD CONSTRAINT `FK_43629B36727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `classification__category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_43629B36E25D857E` FOREIGN KEY (`context`) REFERENCES `classification__context` (`id`),
  ADD CONSTRAINT `FK_43629B36EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `classification__collection`
--
ALTER TABLE `classification__collection`
  ADD CONSTRAINT `FK_A406B56AE25D857E` FOREIGN KEY (`context`) REFERENCES `classification__context` (`id`),
  ADD CONSTRAINT `FK_A406B56AEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `classification__tag`
--
ALTER TABLE `classification__tag`
  ADD CONSTRAINT `FK_CA57A1C7E25D857E` FOREIGN KEY (`context`) REFERENCES `classification__context` (`id`);

--
-- Ograniczenia dla tabeli `comment__comment`
--
ALTER TABLE `comment__comment`
  ADD CONSTRAINT `FK_FD78D017E2904019` FOREIGN KEY (`thread_id`) REFERENCES `comment__thread` (`id`);

--
-- Ograniczenia dla tabeli `comment__thread`
--
ALTER TABLE `comment__thread`
  ADD CONSTRAINT `FK_3B60C91012469DE2` FOREIGN KEY (`category_id`) REFERENCES `classification__category` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `customer__address`
--
ALTER TABLE `customer__address`
  ADD CONSTRAINT `FK_55C3CDD39395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer__customer` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `customer__customer`
--
ALTER TABLE `customer__customer`
  ADD CONSTRAINT `FK_4043373A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_211FE82016FE72E1` FOREIGN KEY (`updated_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_211FE8208985DB6D` FOREIGN KEY (`content_changed_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_211FE820DE12AB56` FOREIGN KEY (`created_by`) REFERENCES `fos_user_user` (`id`);

--
-- Ograniczenia dla tabeli `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `invoice__invoice`
--
ALTER TABLE `invoice__invoice`
  ADD CONSTRAINT `FK_FB05AC619395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer__customer` (`id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `invoice__invoice_element`
--
ALTER TABLE `invoice__invoice_element`
  ADD CONSTRAINT `FK_C66B56842989F1FD` FOREIGN KEY (`invoice_id`) REFERENCES `invoice__invoice` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C66B5684ACC5D771` FOREIGN KEY (`order_element_id`) REFERENCES `order__order_element` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `media__gallery_media`
--
ALTER TABLE `media__gallery_media`
  ADD CONSTRAINT `FK_80D4C5414E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `media__gallery` (`id`),
  ADD CONSTRAINT `FK_80D4C541EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media__media` (`id`);

--
-- Ograniczenia dla tabeli `news__comment`
--
ALTER TABLE `news__comment`
  ADD CONSTRAINT `FK_A90210404B89032C` FOREIGN KEY (`post_id`) REFERENCES `news__post` (`id`);

--
-- Ograniczenia dla tabeli `news__post`
--
ALTER TABLE `news__post`
  ADD CONSTRAINT `FK_7D109BC83DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media__media` (`id`),
  ADD CONSTRAINT `FK_7D109BC8514956FD` FOREIGN KEY (`collection_id`) REFERENCES `classification__collection` (`id`),
  ADD CONSTRAINT `FK_7D109BC8F675F31B` FOREIGN KEY (`author_id`) REFERENCES `fos_user_user` (`id`);

--
-- Ograniczenia dla tabeli `news__post_tag`
--
ALTER TABLE `news__post_tag`
  ADD CONSTRAINT `FK_682B20514B89032C` FOREIGN KEY (`post_id`) REFERENCES `news__post` (`id`),
  ADD CONSTRAINT `FK_682B2051BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `classification__tag` (`id`);

--
-- Ograniczenia dla tabeli `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `FK_E817A83A16FE72E1` FOREIGN KEY (`updated_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_E817A83A8985DB6D` FOREIGN KEY (`content_changed_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_E817A83ADE12AB56` FOREIGN KEY (`created_by`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_E817A83ADEE4F593` FOREIGN KEY (`auction`) REFERENCES `auction` (`id`);

--
-- Ograniczenia dla tabeli `offer_document`
--
ALTER TABLE `offer_document`
  ADD CONSTRAINT `FK_A1143A1453C674EE` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A1143A14C33F7837` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `order__order`
--
ALTER TABLE `order__order`
  ADD CONSTRAINT `FK_BC9E6FD19395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer__customer` (`id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `order__order_element`
--
ALTER TABLE `order__order_element`
  ADD CONSTRAINT `FK_701A67EC8D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `order__order` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `page__block`
--
ALTER TABLE `page__block`
  ADD CONSTRAINT `FK_66F58DA0727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `page__block` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_66F58DA0C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page__page` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `page__page`
--
ALTER TABLE `page__page`
  ADD CONSTRAINT `FK_2FAE39ED158E0B66` FOREIGN KEY (`target_id`) REFERENCES `page__page` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2FAE39ED727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `page__page` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2FAE39EDF6BD1646` FOREIGN KEY (`site_id`) REFERENCES `page__site` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `page__snapshot`
--
ALTER TABLE `page__snapshot`
  ADD CONSTRAINT `FK_3963EF9AC4663E4` FOREIGN KEY (`page_id`) REFERENCES `page__page` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3963EF9AF6BD1646` FOREIGN KEY (`site_id`) REFERENCES `page__site` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `payment__transaction`
--
ALTER TABLE `payment__transaction`
  ADD CONSTRAINT `FK_4A7A00358D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `order__order` (`id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `product__delivery`
--
ALTER TABLE `product__delivery`
  ADD CONSTRAINT `FK_77E11FFD4584665A` FOREIGN KEY (`product_id`) REFERENCES `product__product` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `product__package`
--
ALTER TABLE `product__package`
  ADD CONSTRAINT `FK_6190EC7F4584665A` FOREIGN KEY (`product_id`) REFERENCES `product__product` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `product__product`
--
ALTER TABLE `product__product`
  ADD CONSTRAINT `FK_6CB28F473DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_6CB28F474E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `media__gallery` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_6CB28F47727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `product__product` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `product__product_category`
--
ALTER TABLE `product__product_category`
  ADD CONSTRAINT `FK_D0B834B112469DE2` FOREIGN KEY (`category_id`) REFERENCES `classification__category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D0B834B14584665A` FOREIGN KEY (`product_id`) REFERENCES `product__product` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `product__product_collection`
--
ALTER TABLE `product__product_collection`
  ADD CONSTRAINT `FK_96AD96454584665A` FOREIGN KEY (`product_id`) REFERENCES `product__product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_96AD9645514956FD` FOREIGN KEY (`collection_id`) REFERENCES `classification__collection` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `test_car`
--
ALTER TABLE `test_car`
  ADD CONSTRAINT `FK_E403A5A124A1CAE` FOREIGN KEY (`rescueEngine_id`) REFERENCES `test_car_engine` (`id`),
  ADD CONSTRAINT `FK_E403A5A354AA425589740CE28FDB4419F71D163` FOREIGN KEY (`color_r`, `color_g`, `color_b`, `color_material_id`) REFERENCES `test_color` (`r`, `g`, `b`, `material_id`),
  ADD CONSTRAINT `FK_E403A5AE78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `test_car_engine` (`id`);

--
-- Ograniczenia dla tabeli `test_car_engine`
--
ALTER TABLE `test_car_engine`
  ADD CONSTRAINT `FK_8BF34046EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media__media` (`id`);

--
-- Ograniczenia dla tabeli `test_car_inspection`
--
ALTER TABLE `test_car_inspection`
  ADD CONSTRAINT `FK_B4624299C3C6F69F` FOREIGN KEY (`car_id`) REFERENCES `test_car` (`id`);

--
-- Ograniczenia dla tabeli `test_color`
--
ALTER TABLE `test_color`
  ADD CONSTRAINT `FK_6D88EEE2E308AC6F` FOREIGN KEY (`material_id`) REFERENCES `test_material` (`id`);

--
-- Ograniczenia dla tabeli `timeline__action_component`
--
ALTER TABLE `timeline__action_component`
  ADD CONSTRAINT `FK_6ACD1B169D32F035` FOREIGN KEY (`action_id`) REFERENCES `timeline__action` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6ACD1B16E2ABAFFF` FOREIGN KEY (`component_id`) REFERENCES `timeline__component` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `timeline__timeline`
--
ALTER TABLE `timeline__timeline`
  ADD CONSTRAINT `FK_FFBC6AD523EDC87` FOREIGN KEY (`subject_id`) REFERENCES `timeline__component` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FFBC6AD59D32F035` FOREIGN KEY (`action_id`) REFERENCES `timeline__action` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

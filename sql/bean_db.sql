-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2017 alle 12:25
-- Versione del server: 5.6.21-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bean_db`
--

--
-- Struttura della tabella `multiple_pk`
--

CREATE TABLE IF NOT EXISTS `multiple_pk` (
  `id_int` int(11) NOT NULL,
  `id_date` date NOT NULL,
  `id_string` varchar(20) NOT NULL,
  `field_string` varchar(200) DEFAULT NULL COMMENT 'nessuna',
  `field_date` date DEFAULT NULL COMMENT 'ssss',
  `field_date_time` datetime DEFAULT NULL,
  `field_decimal` decimal(11,2) DEFAULT NULL,
  `field_int` int(11) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `multiple_pk`
--

INSERT INTO `multiple_pk` (`id_int`, `id_date`, `id_string`, `field_string`, `field_date`, `field_date_time`, `field_decimal`, `field_int`, `field_text`) VALUES
(1, '2016-11-16', 'sa', NULL, NULL, '2016-11-20 05:04:00', '86.10', 3, 'pippo'),
(1, '2016-11-30', 'sa', 'Field string ok', '2016-11-30', '2016-11-02 10:10:00', '1.54', 1, 'Field text modificato'),
(200, '2017-01-01', 'codice', 'se', '2017-01-19', '2017-01-20 02:04:00', '4.40', 6, 'demo');

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_date`
--

CREATE TABLE IF NOT EXISTS `single_pk_date` (
  `id_date` date NOT NULL DEFAULT '0000-00-00',
  `field_string` varchar(200) DEFAULT NULL,
  `field_date` date DEFAULT NULL,
  `field_date_time` datetime DEFAULT NULL,
  `field_decimal` decimal(11,2) DEFAULT NULL,
  `field_int` int(11) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `single_pk_date`
--

INSERT INTO `single_pk_date` (`id_date`, `field_string`, `field_date`, `field_date_time`, `field_decimal`, `field_int`, `field_text`) VALUES
('2017-11-01', 'Field 1', '2017-11-16', '2017-11-23 00:00:00', '1.10', 1, 'Text àèìòù'),
('2017-12-01', 'Field 2', '2017-12-16', '2017-12-23 00:00:00', '2.10', 2, 'Text àèìòù');

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_date_time`
--

CREATE TABLE IF NOT EXISTS `single_pk_date_time` (
  `id_date_time` datetime NOT NULL,
  `field_string` varchar(200) DEFAULT NULL,
  `field_date` date DEFAULT NULL,
  `field_date_time` datetime DEFAULT NULL,
  `field_decimal` decimal(12,2) DEFAULT NULL,
  `field_int` int(11) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `single_pk_date_time`
--

INSERT INTO `single_pk_date_time` (`id_date_time`, `field_string`, `field_date`, `field_date_time`, `field_decimal`, `field_int`, `field_text`) VALUES
('2017-11-01 00:00:00', 'single pk date time 1', '2017-11-02', '2017-11-17 14:38:40', '1.10', 1, 'Text with accent àèìòù'),
('2017-11-24 00:00:00', 'another field', '2017-11-23', '2017-11-17 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_decimal`
--

CREATE TABLE IF NOT EXISTS `single_pk_decimal` (
  `field_decimal` decimal(10,0) NOT NULL,
  `fiield_string` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

--
-- Dump dei dati per la tabella `single_pk_decimal`
--

INSERT INTO `single_pk_decimal` (`field_decimal`, `fiield_string`) VALUES
('1', 'sa');

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_float`
--

CREATE TABLE IF NOT EXISTS `single_pk_float` (
  `field_float` float NOT NULL,
  `field_string` varchar(20) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

--
-- Dump dei dati per la tabella `single_pk_float`
--

INSERT INTO `single_pk_float` (`field_float`, `field_string`, `field_text`) VALUES
(1.6, 'float demo 1', 'Text'),
(1.7, 'float demo 2', 'Text'),
(1.8, 'float demo 3', 'Text');

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_int`
--

CREATE TABLE IF NOT EXISTS `single_pk_int` (
  `id_int` int(11) NOT NULL,
  `field_string` varchar(200) DEFAULT NULL,
  `field_date` date DEFAULT NULL,
  `field_date_time` datetime DEFAULT NULL,
  `field_decimal` decimal(11,2) DEFAULT NULL,
  `field_int` int(11) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `single_pk_int`
--

INSERT INTO `single_pk_int` (`id_int`, `field_string`, `field_date`, `field_date_time`, `field_decimal`, `field_int`, `field_text`) VALUES
(1, 'field string 1', '2017-11-16', '2017-11-15 13:20:23', '1.13', 1, 'Text with accent: àèìòù Teet with accent: àèìòù Text with accent: àèìòù'),
(2, 'field string 2', '2017-11-16', '2017-11-15 13:20:23', '1.13', 1, 'Text with accent: àèìòù Teet with accent: àèìòù Text with accent: àèìòù');

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_int_auto`
--

CREATE TABLE IF NOT EXISTS `single_pk_int_auto` (
`id_int_auto` int(11) NOT NULL,
  `field_string` varchar(200) DEFAULT NULL,
  `field_date` date DEFAULT NULL,
  `field_date_time` datetime DEFAULT NULL,
  `field_decimal` decimal(12,2) DEFAULT NULL,
  `field_int` int(11) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `single_pk_int_auto`
--

INSERT INTO `single_pk_int_auto` (`id_int_auto`, `field_string`, `field_date`, `field_date_time`, `field_decimal`, `field_int`, `field_text`) VALUES
(1, 'string field 1', '2017-11-01', '2017-11-01 08:23:27', '450.13', 80373636, 'Text here'),
(2, 'string field 2', '2017-11-22', '2017-11-21 07:44:22', '1.56', 1, 'Lorem ipsum à è ì'),
(3, 'string field 3', '2017-11-02', '2017-11-15 09:30:28', '10.52', 89, 'Demo text');

-- --------------------------------------------------------

--
-- Struttura della tabella `single_pk_string`
--

CREATE TABLE IF NOT EXISTS `single_pk_string` (
  `id_string` varchar(20) NOT NULL,
  `field_string` varchar(200) DEFAULT NULL,
  `field_date` date DEFAULT NULL,
  `field_date_time` datetime DEFAULT NULL,
  `field_decimal` decimal(11,2) DEFAULT NULL,
  `field_int` int(11) DEFAULT NULL,
  `field_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `single_pk_string`
--

INSERT INTO `single_pk_string` (`id_string`, `field_string`, `field_date`, `field_date_time`, `field_decimal`, `field_int`, `field_text`) VALUES
('the string 1', 'the string field 1', '2017-11-01', '2017-11-02 07:22:21', '1.25', 1, 'The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field '),
('the string 2', 'the string field 2', '2017-11-01', '2017-11-02 07:22:21', '1.25', 1, 'The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field The text field ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_actions`
--
ALTER TABLE `acl_actions`
 ADD PRIMARY KEY (`id`), ADD KEY `idx_aclaction_id_del` (`id`,`deleted`), ADD KEY `idx_category_name` (`category`,`name`);

--
-- Indexes for table `multiple_pk`
--
ALTER TABLE `multiple_pk`
 ADD PRIMARY KEY (`id_int`,`id_date`,`id_string`);

--
-- Indexes for table `single_pk_date`
--
ALTER TABLE `single_pk_date`
 ADD PRIMARY KEY (`id_date`) USING BTREE;

--
-- Indexes for table `single_pk_date_time`
--
ALTER TABLE `single_pk_date_time`
 ADD PRIMARY KEY (`id_date_time`) USING BTREE;

--
-- Indexes for table `single_pk_decimal`
--
ALTER TABLE `single_pk_decimal`
 ADD PRIMARY KEY (`field_decimal`);

--
-- Indexes for table `single_pk_float`
--
ALTER TABLE `single_pk_float`
 ADD PRIMARY KEY (`field_float`);

--
-- Indexes for table `single_pk_int`
--
ALTER TABLE `single_pk_int`
 ADD PRIMARY KEY (`id_int`) USING BTREE;

--
-- Indexes for table `single_pk_int_auto`
--
ALTER TABLE `single_pk_int_auto`
 ADD PRIMARY KEY (`id_int_auto`) USING BTREE;

--
-- Indexes for table `single_pk_string`
--
ALTER TABLE `single_pk_string`
 ADD PRIMARY KEY (`id_string`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `single_pk_int_auto`
--
ALTER TABLE `single_pk_int_auto`
MODIFY `id_int_auto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

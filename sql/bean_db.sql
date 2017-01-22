-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Gen 22, 2017 alle 18:15
-- Versione del server: 5.6.21-log
-- PHP Version: 5.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bean_db`
--

-- --------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for dumped tables
--

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
MODIFY `id_int_auto` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

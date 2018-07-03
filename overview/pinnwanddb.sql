-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jul 2018 um 09:51
-- Server Version: 5.5.32
-- PHP-Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `pinnwanddb`
--
CREATE DATABASE IF NOT EXISTS `pinnwanddb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pinnwanddb`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
  `b_Id` int(11) NOT NULL,
  `b_Vorname` text NOT NULL,
  `b_Nachname` text NOT NULL,
  `b_benutzername` text NOT NULL,
  `b_password` text NOT NULL,
  PRIMARY KEY (`b_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eintraege`
--

CREATE TABLE IF NOT EXISTS `eintraege` (
  `e_ID` int(11) NOT NULL,
  `e_Text` text NOT NULL,
  `e_Titel` text NOT NULL,
  `b_Id` int(11) NOT NULL,
  PRIMARY KEY (`e_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

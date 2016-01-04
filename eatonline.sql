-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Gen 04, 2016 alle 16:05
-- Versione del server: 10.1.9-MariaDB
-- Versione PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatonline`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `numero_tel` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `via` varchar(40) NOT NULL,
  `citta` varchar(40) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `codice_attivazione` varchar(40) NOT NULL,
  `stato` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`numero_tel`, `nome`, `cognome`, `password`, `email`, `via`, `citta`, `cap`, `codice_attivazione`, `stato`) VALUES
('3471173932', 'Rino', 'Manzo', 'bbb', 'gennaro.m87@gmail.com', '', '', '', '55869763', 1),
('3899365280', 'Gennaro', 'Manzo', 'aaa', '', '', '', '', '', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`numero_tel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

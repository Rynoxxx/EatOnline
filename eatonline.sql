-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Feb 01, 2016 alle 23:36
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
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descrizione` varchar(40) NOT NULL,
  `immagine` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `descrizione`, `immagine`) VALUES
(1, 'primi_piatti', 'I primi piatti', ''),
(2, 'secondi_piatti', 'I secondi piatti', ''),
(3, 'contorni', 'Verdure, insalata, ecc...', ''),
(4, 'pizze', 'Margherita, Capricciosa, Diavola...', ''),
(5, 'bevande', 'Vino, birra, cocacola, ecc...', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ingredienti` varchar(200) NOT NULL,
  `prezzo` double NOT NULL,
  `disponibile` tinyint(1) NOT NULL,
  `immagine` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`id`, `id_categoria`, `nome`, `ingredienti`, `prezzo`, `disponibile`, `immagine`) VALUES
(1, 1, 'Spaghetti alla carbonara', 'Uova, guanciale, pepe nero, sale, olio extravergine d''oliva.', 8.5, 0, ''),
(2, 1, 'Fettuccine alla pecorara', 'Guanciale, uova, pecorino, ricotta.', 7.5, 0, ''),
(3, 1, 'Pappardelle al cinghiale', 'Prezzemolo, olio extravergine d''oliva, cinghiale, pomodorini pachino.', 8.5, 0, ''),
(4, 2, 'Tagliata di pollo', 'Pollo, glassa di aceto balsamico, rucola.', 10, 0, ''),
(5, 2, 'Cotoletta di vitello', 'Carne di vitello, uova, farina 00, sale, olio di semi di girasole.', 0, 0, ''),
(6, 4, 'Margherita', 'Passata di pomodoro, mozzarella, basilico, sale, olio extravergine di oliva.', 0, 0, ''),
(7, 4, 'Diavola', 'Passata di pomodoro, salame piccante, sale, olio extravergine di oliva.', 0, 0, '');

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
('3471173932', 'Rino', 'Manzo', 'bbb', 'gennaro.m87@gmail.com', '', '', '', '419507338', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`numero_tel`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

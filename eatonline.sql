-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 10, 2016 alle 00:50
-- Versione del server: 5.5.46-0ubuntu0.14.04.2
-- Versione PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eatonline`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carta`
--

CREATE TABLE IF NOT EXISTS `carta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `carta`
--

INSERT INTO `carta` (`id`, `numero`) VALUES
(1, '54561111323212312');

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `descrizione` varchar(40) NOT NULL,
  `immagine` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
-- Struttura della tabella `ordine`
--

CREATE TABLE IF NOT EXISTS `ordine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` bigint(20) NOT NULL,
  `pagato` tinyint(1) NOT NULL,
  `confermato` tinyint(1) NOT NULL,
  `id_utente` varchar(50) NOT NULL,
  `id_carta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`id`, `data`, `pagato`, `confermato`, `id_utente`, `id_carta`) VALUES
(1, 1455054883, 0, 0, '3471173932', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine_prodotto`
--

CREATE TABLE IF NOT EXISTS `ordine_prodotto` (
  `id_ordine` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL,
  `quantita` int(11) NOT NULL,
  PRIMARY KEY (`id_ordine`,`id_prodotto`),
  KEY `id_ordine` (`id_ordine`),
  KEY `id_prodotto` (`id_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordine_prodotto`
--

INSERT INTO `ordine_prodotto` (`id_ordine`, `id_prodotto`, `quantita`) VALUES
(1, 2, 1),
(1, 6, 1),
(1, 26, 2),
(5, 0, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE IF NOT EXISTS `prodotto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ingredienti` varchar(200) NOT NULL,
  `prezzo` double NOT NULL,
  `disponibile` tinyint(1) NOT NULL,
  `immagine` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`id`, `id_categoria`, `nome`, `ingredienti`, `prezzo`, `disponibile`, `immagine`) VALUES
(1, 1, 'Spaghetti alla carbonara', 'Uova, guanciale, pepe nero, sale, olio extravergine d''oliva.', 8.5, 0, 'primi/carbonara.jpg'),
(2, 1, 'Fettuccine alla pecorara', 'Guanciale, uova, pecorino, ricotta.', 7.5, 0, 'primi/fettuccine_alla_pecorara.jpg'),
(3, 1, 'Lasagne al ragù', 'Basilico, olio extravergine d''oliva, macinato di bocino, passata di pomodoro.', 8.5, 0, 'primi/lasagne_ragu.jpg'),
(4, 2, 'Tagliata di pollo', 'Pollo, glassa di aceto balsamico, rucola.', 10, 0, 'secondi/tagliata_di_pollo.jpg'),
(5, 2, 'Cotoletta di vitello', 'Carne di vitello, uova, farina 00, sale, olio di semi di girasole.', 10, 0, 'secondi/cotoletta_di_vitello.jpg'),
(6, 4, 'Margherita', 'Passata di pomodoro, mozzarella, basilico, sale, olio extravergine di oliva.', 6, 0, 'pizze/margherita.jpg'),
(7, 4, 'Diavola', 'Passata di pomodoro, salame piccante, sale, olio extravergine di oliva.', 7, 0, 'pizze/diavola.jpg'),
(8, 1, 'Cannelloni ripieni', 'Uova, farina 00, pomodoro, carne di vitello,basilico', 10, 0, 'primi/cannelloni_ripieni.jpg'),
(9, 1, 'Gnocchi alla sorrentina', 'Patate, farina 00, basilico, pomodoro, mozzarella, olio extravergine d''oliva', 7.5, 0, 'primi/gnocchi_sorrentina.jpg'),
(10, 1, 'Gnocchi ai gamberetti con zafferano', 'Patete, farina 00, olio etravergine, zafferano, gamberetti', 8.5, 0, 'primi/gnocchi_zafferano_gamberetti.png'),
(11, 1, 'Linguine allo scoglio', 'prezzemolo, Olio extravergine d''oliva, aglio, vongole, cozze, fasolari', 9, 0, 'primi/linguine_allo_scoglio.jpg'),
(12, 1, 'Linguine al nero di seppia', 'Seppie(con la sacca del nero), aglio, olio extravergine, prezzemolo, pepe nero, vino bianco', 9, 0, 'primi/linguine_nero_seppia.jpg'),
(13, 1, 'Spaghetti al pesto', 'Olio extravergine d''oliva, aglio, pesto di basilico, pinoli, sale', 7, 0, 'primi/spaghetti_pesto.jpg'),
(14, 1, 'Tagliatelle al tartufo', 'Olio extravergine d''oliva, aglio, prezzemolo, tartufo nero, pepe nero', 8.5, 0, 'primi/tagliatelle_tartufo.jpg'),
(15, 1, 'Pappardelle ai funghi', 'Olio extravergine d''oliva, aglio, prezzemolo, funghi porcini, funghi champignon', 8.5, 0, 'primi/pappardelle_funghi.jpg'),
(16, 1, 'Riso freddo', 'Olio extravergine d''oliva, cipolla, sale, olive nere, bresaola, pomodorini pachino ', 6, 0, 'primi/riso_freddo_bresaola.jpg'),
(17, 1, 'Penne all''arrabbiata', 'Olio extravergine d''oliva, sale, aglio, peperoncino piccante fresco, pomodorini pachino, prezzemolo', 7, 0, 'primi/penne_arrabbiata.jpg'),
(18, 4, '4 Formaggi', 'Olio extravergine d''oliva, basilico, mozzarella, gorgonzola, provola, pecorino', 7.5, 0, 'pizze/4formaggi.jpg'),
(19, 3, 'Insalata mista', 'Insalata verde, radicchio, pomodori, tonno, cipolla, olive, uova soda, olio extravergine d''oliva', 5, 0, 'contorni/insalata_mista.jpg'),
(20, 3, 'Patate al forno', 'Patate, rosmarino, aglio, sale, olio extravergine d''oliva', 4, 0, 'contorni/patate_forno.jpg'),
(21, 3, 'Olive ascolane', 'Olive nere, pepe nero, prezzemolo, macinato di bovino, aglio, olio di semi di girasole', 4, 0, 'contorni/olive_ascolane.jpg'),
(22, 3, 'Patatine fritte', 'Patate, sale, olio di semi di girasole', 4, 0, 'contorni/patatine_fritte.jpg'),
(23, 5, 'Coca Cola 1,5 lt', 'Acqua, zucchero, colorante (E 150D), aromi naturali, caffeina, acido fosforico (E 338)', 2, 0, 'bevande/cocacola.jpg'),
(24, 5, 'Nastro Azzurro 66 cl', 'Acqua, orzo, luppolo, lievito', 3, 0, 'bevande/nastroazzurro.jpg'),
(25, 5, 'Fanta 1,5 lt', 'Acqua, zucchero, succo d''arancia, anidride carbonica, acido citrico, aromi naturali', 2, 0, 'bevande/fanta.jpg'),
(26, 5, 'Pasetti TESTAROSSA', 'Uva Montepulciano, bisolfiti', 20, 0, 'bevande/testarossa.jpg'),
(27, 5, 'Ramì Di Majo Norante', 'Uva Falanghina, bisolfiti', 18, 0, 'bevande/rami.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `numero_tel` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `via` varchar(40) NOT NULL,
  `citta` varchar(40) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `codice_attivazione` varchar(40) NOT NULL,
  `stato` tinyint(1) NOT NULL,
  PRIMARY KEY (`numero_tel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`numero_tel`, `nome`, `cognome`, `password`, `email`, `via`, `citta`, `cap`, `codice_attivazione`, `stato`) VALUES
('3471173932', 'Rino', 'Manzo', 'bbb', 'gennaro.m87@gmail.com', '', '', '', '419507338', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

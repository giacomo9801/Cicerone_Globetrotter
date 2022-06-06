-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 04, 2019 alle 19:19
-- Versione del server: 10.1.38-MariaDB
-- Versione PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cicerone_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `attivita`
--

CREATE TABLE `attivita` (
  `id_attivita` int(20) NOT NULL,
  `utente_id` int(11) NOT NULL,
  `nome_attivita` varchar(50) NOT NULL,
  `luogo` varchar(50) NOT NULL,
  `lingua` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `durata` int(2) NOT NULL,
  `costo` int(3) NOT NULL,
  `descrizione` varchar(500) NOT NULL,
  `stato` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(10) NOT NULL,
  `id_scrittore` int(10) NOT NULL,
  `utente_id` int(10) NOT NULL,
  `commento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `richiesta`
--

CREATE TABLE `richiesta` (
  `id_richiesta` int(20) NOT NULL,
  `attivita_id` int(20) NOT NULL,
  `id_richiedente` int(11) NOT NULL,
  `stato` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id_registrazione` int(20) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `data_di_nascita` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `ruolo` varchar(20) NOT NULL,
  `biografia` varchar(255) NOT NULL,
  `nazione` varchar(50) NOT NULL,
  `sesso` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id_registrazione`, `nome`, `cognome`, `mail`, `data_di_nascita`, `password`, `ruolo`, `biografia`, `nazione`, `sesso`) VALUES
(1, 'Nome test 1', 'Cognome test 1', 'test1@gmail.com', '1990-01-01', 'b444ac06613fc8d63795be9ad0beaf55011936ac', 'cicerone', 'Prova descrizione test 1', 'IT', 'Uomo'),
(2, 'Nome test 2', 'Cognome test 2', 'test2@gmail.com', '1999-05-02', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', 'globetrotter', 'Prova descrizione test 2', 'ES', 'Donna'),
(3, 'Nome test 3', 'Cognome test 3', 'test3@gmail.com', '1997-03-12', '3ebfa301dc59196f18593c45e519287a23297589', 'amministratore', 'Prova descrizione test 3', 'IT', 'Uomo');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `attivita`
--
ALTER TABLE `attivita`
  ADD PRIMARY KEY (`id_attivita`),
  ADD KEY `fk_utente` (`utente_id`);

--
-- Indici per le tabelle `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD UNIQUE KEY `id_scrittore` (`id_scrittore`,`utente_id`),
  ADD KEY `feedback_ibfk_1` (`utente_id`);

--
-- Indici per le tabelle `richiesta`
--
ALTER TABLE `richiesta`
  ADD PRIMARY KEY (`id_richiesta`),
  ADD UNIQUE KEY `id_attivita` (`attivita_id`,`id_richiedente`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id_registrazione`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `attivita`
--
ALTER TABLE `attivita`
  MODIFY `id_attivita` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `richiesta`
--
ALTER TABLE `richiesta`
  MODIFY `id_richiesta` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id_registrazione` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `attivita`
--
ALTER TABLE `attivita`
  ADD CONSTRAINT `fk_utente` FOREIGN KEY (`utente_id`) REFERENCES `utente` (`id_registrazione`);

--
-- Limiti per la tabella `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`utente_id`) REFERENCES `utente` (`id_registrazione`);

--
-- Limiti per la tabella `richiesta`
--
ALTER TABLE `richiesta`
  ADD CONSTRAINT `richiesta_ibfk_1` FOREIGN KEY (`attivita_id`) REFERENCES `attivita` (`id_attivita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

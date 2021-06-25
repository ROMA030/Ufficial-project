-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 25, 2021 alle 15:37
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xeos`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `acc`
--

CREATE TABLE `acc` (
  `timestamp` varchar(40) DEFAULT NULL,
  `accX` varchar(40) DEFAULT NULL,
  `accY` varchar(40) DEFAULT NULL,
  `accZ` varchar(40) DEFAULT NULL,
  `player` varchar(40) DEFAULT NULL,
  `session` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(40) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `club`
--

CREATE TABLE `club` (
  `ClubID` int(11) NOT NULL,
  `ClubName` varchar(40) DEFAULT NULL,
  `RandomKey` varchar(40) DEFAULT NULL,
  `Avatar` longblob DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `clubcoach`
--

CREATE TABLE `clubcoach` (
  `Club` varchar(40) DEFAULT NULL,
  `Coach` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `clubmanager`
--

CREATE TABLE `clubmanager` (
  `Club` varchar(40) DEFAULT NULL,
  `Manager` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `clubplayers`
--

CREATE TABLE `clubplayers` (
  `Club` varchar(40) DEFAULT NULL,
  `player` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `coachplayer`
--

CREATE TABLE `coachplayer` (
  `Coach` varchar(40) DEFAULT NULL,
  `Player` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `ecg`
--

CREATE TABLE `ecg` (
  `timestamp` varchar(40) DEFAULT NULL,
  `respiration` varchar(40) DEFAULT NULL,
  `ecgLead1` varchar(40) DEFAULT NULL,
  `ecgLead2` varchar(40) DEFAULT NULL,
  `ecgLead3` varchar(40) DEFAULT NULL,
  `player` varchar(40) DEFAULT NULL,
  `session` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `eventplayer`
--

CREATE TABLE `eventplayer` (
  `Event` int(255) DEFAULT NULL,
  `Club` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `events`
--

CREATE TABLE `events` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(40) DEFAULT NULL,
  `Desc` varchar(255) DEFAULT NULL,
  `Data` varchar(40) DEFAULT NULL,
  `Club` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `gyro`
--

CREATE TABLE `gyro` (
  `timestamp` varchar(40) DEFAULT NULL,
  `gyroX` varchar(40) DEFAULT NULL,
  `gyroY` varchar(40) DEFAULT NULL,
  `gyroZ` varchar(40) DEFAULT NULL,
  `player` varchar(40) DEFAULT NULL,
  `session` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `other`
--

CREATE TABLE `other` (
  `timestamp` varchar(40) DEFAULT NULL,
  `battery` varchar(40) DEFAULT NULL,
  `skinTemp` varchar(40) DEFAULT NULL,
  `ambientTemp` varchar(40) DEFAULT NULL,
  `occupiedMemory` varchar(40) DEFAULT NULL,
  `respirationRate` varchar(40) DEFAULT NULL,
  `heartRate` varchar(40) DEFAULT NULL,
  `gainCH0` varchar(40) DEFAULT NULL,
  `gainCH1` varchar(40) DEFAULT NULL,
  `gainCH2` varchar(40) DEFAULT NULL,
  `gainCH3` varchar(40) DEFAULT NULL,
  `player` varchar(40) DEFAULT NULL,
  `session` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `Name` varchar(40) DEFAULT NULL,
  `Surname` varchar(40) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Avatar` longblob DEFAULT NULL,
  `UserType` varchar(40) DEFAULT NULL,
  `Risposta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`ClubID`);

--
-- Indici per le tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `club`
--
ALTER TABLE `club`
  MODIFY `ClubID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `events`
--
ALTER TABLE `events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

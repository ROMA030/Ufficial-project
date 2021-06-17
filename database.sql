CREATE TABLE `admin` (
    `Utente` varchar(40),
    `Password` varchar(40),
)

CREATE TABLE `manager` (
    `Utente` varchar(40),
    `Password` varchar(40),
    `Nome` varchar(40),
    `Cognome` varchar(40),
    `DataNascita` varchar(40)
)

CREATE TABLE `allenatore` (
    `Utente` varchar(40),
    `Password` varchar(40),
    `Nome` varchar(40),
    `Cognome` varchar(40),
    `DataNascita` varchar(40)
)

CREATE TABLE `giocatore` (
    `Utente` varchar(40),
    `Password` varchar(40),
    `Nome` varchar(40),
    `Cognome` varchar(40),
    `DataNascita` varchar(40)
)

CREATE TABLE `squadra` (
    `NomeSquadra` varchar(40),
    `RandomKey` varchar(40),
)


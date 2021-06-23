CREATE TABLE IF NOT EXISTS `admin` (
    `Username` varchar(40),
    `Password` varchar(40)
);
/*
CREATE TABLE `manager` (
    `Username` varchar(40),
    `Password` varchar(40),
    `Name` varchar(40),
    `Surname` varchar(40),
    `Birthday` varchar(40),
    `Avatar` longblob DEFAULT NULL
);

CREATE TABLE `coach` (
    `Username` varchar(40),
    `Password` varchar(40),
    `Name` varchar(40),
    `Surname` varchar(40),
    `Birthday` varchar(40),
    `Avatar` longblob DEFAULT NULL
);

CREATE TABLE `player` (
    `Username` varchar(40),
    `Password` varchar(40),
    `Name` varchar(40),
    `Surname` varchar(40),
    `Birthday` varchar(40),
    `Avatar` longblob DEFAULT NULL
);
*/

CREATE TABLE IF NOT EXISTS `users` (
    `Name` varchar(40),
    `Surname` varchar(40),
    `Email` varchar(50),
    `Username` varchar(30),
    `Password` varchar(40),
    `Avatar` longblob DEFAULT NULL,
    `UserType` varchar(40),
    `Risposta` varchar(40)
);

CREATE TABLE IF NOT EXISTS `club` (
    `ClubID` int NOT NULL AUTO_INCREMENT,
    `ClubName` varchar(40),
    `RandomKey` varchar(40),
    `Avatar` longblob DEFAULT NULL,
    PRIMARY KEY (`ClubID`)
);

CREATE TABLE IF NOT EXISTS `clubCoach` (
    `Club` varchar(40),
    `Coach` varchar(40)
);

CREATE TABLE IF NOT EXISTS `coachPlayer` (
    `Coach` varchar(40),
    `Player` varchar(40)
);

CREATE TABLE IF NOT EXISTS `other` (
    `timestamp` varchar(40),
    `battery` varchar(40),
    `skinTemp` varchar(40),
    `ambientTemp` varchar(40),
    `occupiedMemory` varchar(40),
    `respirationRate` varchar(40),
    `heartRate` varchar(40),
    `gainCH0` varchar(40),
    `gainCH1` varchar(40),
    `gainCH2` varchar(40),
    `gainCH3` varchar(40),
    `player` varchar(40),
    `session` varchar(40),
    `date` varchar(40)
);

CREATE TABLE IF NOT EXISTS `acc` (
    `timestamp` varchar(40),
    `accX` varchar(40),
    `accY` varchar(40),
    `accZ` varchar(40),
    `player` varchar(40),
    `session` varchar(40),
    `date` varchar(40)
);

CREATE TABLE IF NOT EXISTS `ecg` (
    `timestamp` varchar(40),
    `respiration` varchar(40),
    `ecgLead1` varchar(40),
    `ecgLead2` varchar(40),
    `ecgLead3` varchar(40),
    `player` varchar(40),
    `session` varchar(40),
    `date` varchar(40)
);

CREATE TABLE IF NOT EXISTS `gyro` (
    `timestamp` varchar(40),
    `gyroX` varchar(40),
    `gyroY` varchar(40),
    `gyroZ` varchar(40),
    `player` varchar(40),
    `session` varchar(40),
    `date` varchar(40)
);

CREATE TABLE IF NOT EXISTS `events` (
    `Coach` varchar(40),
    `Player` varchar(40),
    `Date` varchar(40),
    `Text` varchar(255)
);
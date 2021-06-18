CREATE TABLE `admin` (
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

CREATE TABLE `users` (
    `Name` varchar(40),
    `Surname` varchar(40),
    `Email` varchar(50),
    `Username` varchar(30),
    `Password` varchar(40),
    /*`Avatar` longblob DEFAULT NULL,*/
    `UserType` varchar(40)
);

CREATE TABLE `club` (
    `ClubName` varchar(40),
    `RandomKey` varchar(40),
    `Avatar` longblob DEFAULT NULL
);


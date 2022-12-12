-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 okt 2022 om 09:42
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `richestpeople`
--

DROP TABLE IF EXISTS `richestpeople`;
CREATE TABLE IF NOT EXISTS `richestpeople` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Networth` varchar(200) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `MyCompany` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `richestpeople`
--

INSERT INTO `richestpeople` (`Id`, `Name`, `Networth`, `Age`, `MyCompany`) VALUES
(1, 'Elon Musk', '261000000000', 50, 'Tesla'),
(2, 'Jeff Bezos', '1830000000', 58, 'Amazon'),
(3, 'Bernard Arnault', '1420000000', 73, 'Louis Vuitton Moet Hennessy'),
(4, 'Bill Gates', '130000000000', 66, 'Microsoft'),
(5, 'Warren Buffet', '1260000000', 91, 'Berkshire Hathaway');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

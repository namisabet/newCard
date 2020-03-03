-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2020 at 05:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencewebquebec`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` blob NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Updated_At` date NOT NULL,
  `Created_At` date NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Budget` varchar(50) NOT NULL,
  `TypeClient` varchar(50) DEFAULT NULL,
  `ServiceOffert` varchar(50) DEFAULT NULL,
  `NbEmploye` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`Id`, `Titre`, `Email`, `Ville`, `Updated_At`, `Created_At`, `Telephone`, `Description`, `Budget`, `TypeClient`, `ServiceOffert`, `NbEmploye`) VALUES
(2, 'wr', 'ew@ea', 'Shawinigan', '2020-03-02', '2020-03-02', '987-897-9874', 'rwasawasdaaad', '10,000 ~ 25,000 $', NULL, NULL, NULL),
(3, 'wr', 'ew@ea', 'Shawinigan', '2020-03-02', '2020-03-02', '987-897-9874', 'rwasawasdaaad', '10,000 ~ 25,000 $', NULL, NULL, NULL),
(4, 'wr', 'ew@ea', 'Shawinigan', '2020-03-02', '2020-03-02', '987-897-9874', 'rwasawasdaaad', '10,000 ~ 25,000 $', NULL, NULL, NULL),
(5, '123', '123@123', 'Montréal', '2020-03-02', '2020-03-02', '123-456-7897', 'haha', '10,000 ~ 25,000 $', NULL, NULL, NULL),
(6, '123', 'fatsyram@gmail.com', 'Montréal', '2020-03-02', '2020-03-02', '123-456-7894', '123', '0 ~ 3,000 $', NULL, NULL, NULL),
(7, 'https://github.com/namisabet', 'nami.sabet@hotmail.com', 'Montréal', '2020-03-03', '2020-03-03', '555-555-5555', 'asd', '0 ~ 3,000 $', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) DEFAULT NULL,
  `Token` varchar(128) NOT NULL,
  `Created_At` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `GalleryId` int(11) DEFAULT NULL,
  `InformationId` int(11) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Updated_At` date NOT NULL,
  `Created_At` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `GalleryId`, `InformationId`, `Name`, `Phone`, `Email`, `Password`, `Updated_At`, `Created_At`) VALUES
(21, NULL, 6, 'testma447', '123-456-7894', 'fatsyram@gmail.com', '$2y$10$0NafBaD1A9C5VkfuX3z.fu0sAPGGUh0kWsUmf/6wjBHInWBYmnEV.', '2020-03-02', '2020-03-02'),
(20, NULL, 5, 'testma447', '514-123-1232', 'haha@123', '$2y$10$2n885Zm2o/WTXcVxU5OfFO83ZhWhGa8itM97r/OXEU0uJqib4rOAy', '2020-03-02', '2020-03-02'),
(19, NULL, 4, 'testma447', '514-654-8979', '6faadfewafewwaew78@gmail.comwa', '$2y$10$X722cIku4/3HJYgfTLUNTOSkJs5BoepQPcZyjgAjx1vQmea0VErQe', '2020-03-02', '2020-03-02'),
(18, NULL, 3, 'testma447', '514-654-8979', '6455ad78@gmail.comwa', '$2y$10$A4TuSDNT7uSl3G.PQ8TXr.ZJHz2j0MLSQnVFIuzWglRgqZh7GweE.', '2020-03-02', '2020-03-02'),
(17, NULL, NULL, 'testma447', '514-654-8979', '645568778@gmail.comwa', '$2y$10$4MkqnkcU1j5dYSD40BcTqeuW8XoWCDlUc/LXF0LKIsYdk3y7HIV3q', '2020-03-02', '2020-03-02'),
(22, NULL, 7, 'NamiTest', '555-555-5555', 'nami.sabet@hotmail.com', '$2y$10$sPhJeGBr1PEsNwKUE98H2OYOIlaSJSLpCTWorN1sAYnLStnMpWKbK', '2020-03-03', '2020-03-03'),
(23, NULL, NULL, 'kevin', NULL, 'k@h.com', '$2y$10$FYFhdoL87Xk4KqdHqL7Ht.jPr1vAOPPJ03jtLA/tPpVtzlZTtOjKq', '2020-03-03', '2020-03-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

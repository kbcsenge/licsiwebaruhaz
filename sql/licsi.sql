-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 01:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licsi`
--
CREATE DATABASE IF NOT EXISTS `licsi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci;
USE `licsi`;

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `ID` int(5) NOT NULL,
  `felhasznalonev` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jelszo` varchar(10000) NOT NULL,
  `nev` varchar(50) NOT NULL,
  `szuldatum` date NOT NULL,
  `orszag` varchar(50) NOT NULL,
  `nem` varchar(10) NOT NULL,
  `rendelesekszama` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- Dumping data for table `felhasznalo`
--

INSERT INTO `felhasznalo` (`ID`, `felhasznalonev`, `email`, `jelszo`, `nev`, `szuldatum`, `orszag`, `nem`, `rendelesekszama`) VALUES
(3, 'cserepes.virag', 'cserepesvirag@gmail.com', '$2y$10$0uGfpCK7Sf2aUA3cUje7zOTbzZgHihkXBzlUyjcCjbnil.dBTrdQq', 'Cserepes Virág', '2000-01-01', 'Magyarország', 'nő', 0),
(7, 'savanya.monika', 'savanyamonika@gmail.com', '$2y$10$9TZP.n6lIi3EED1edYYDdOzFUV5O3b0Eei9kC66Wo/vwV1GpU9kWK', 'Savanya Mónika', '2000-01-01', 'Magyarország', 'nő', 0),
(8, 'savanya.balazs', 'savanyabalazs@gmail.com', '$2y$10$4ZnRTK1UVcfIRduU1gfeb.NP.hffXH7ygufGqAEEFxMEhJzN8Xyqi', 'Savanya Balázs', '2000-01-01', 'Magyarország', 'férfi', 8),
(18, 'kbcsenge', 'krcsenge@gmail.com', '$2y$10$Syby8XpuZ8ZTzS7CrFmCSOss5Ib3KwT8EOwalAC/LvJ/j9z9Ek76C', 'Kovács-Bodó Csenge', '2001-05-04', 'Magyarország', 'nő', 2),
(19, 'gipszjakab', 'gipszjakab@gmail.com', '$2y$10$IuCcy7zQYhYxRkou2vH3sOE89PiPkH5z/OaM8ZXL7HQAB9jzIDQ8S', 'Gipsz Jakab', '1987-03-22', 'Magyarország', 'férfi', 0),
(20, 'marosimark', 'marosimark@gmail.com', '$2y$10$1PoaXltPgftDcVKUyxTvZuSZGMtbWpjOUGhprQTn9m9Rv0bTquBzW', 'Marosi Márk', '1999-09-21', 'Magyarország', 'férfi', 0),
(21, 'nagypetike', 'nagypeter@gmail.com', '$2y$10$1lXzJJhnHksSSArNuGPJ6.DtLb.bRWgBIGPkc4ZtxPOkiCw9OPik2', 'Nagy Péter', '2000-08-14', 'Ukrajna', 'férfi', 0),
(22, 'acsarpad', 'arpi@gmail.com', '$2y$10$qO.0HVklx75m14PSpBaF9OENEule94FUtVjYxsgZxh.TwhKXOK8YG', 'Ács Árpád', '1988-02-02', 'Ausztria', 'férfi', 0),
(23, 'kisstomi', 'kisstomi@gmail.com', '$2y$10$lC1Wqh6jeWxW0tnTcwvmcexPdiYm9cJtu2FZu/3n75jAviZBM5wfa', 'Kiss Tamás', '2002-12-31', 'Szerbia', 'férfi', 0),
(24, 'szabozsolti', 'szabo@gmail.com', '$2y$10$UfmBmLF3vKWfp3ia98J/ieEcMns1fsvcZUPKAP7fvH2wxJjxxJthi', 'Szabó Zsolt', '2000-11-12', 'Szlovénia', 'férfi', 0),
(25, 'tatar.liliana', 'tatarliliana@gmail.com', '$2y$10$gltEXxP.nSm.rqjv1NFB7ez0lFs1o/wVvqsiINYc159RJ3ntRmTIC', 'Tatár Liliána', '2001-10-28', 'Magyarország', 'nő', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kosar`
--

CREATE TABLE `kosar` (
  `felhasznalo_id` int(10) NOT NULL,
  `Termek` varchar(100) NOT NULL,
  `Mennyiseg` int(100) NOT NULL,
  `egyseg_ar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- Dumping data for table `kosar`
--

INSERT INTO `kosar` (`felhasznalo_id`, `Termek`, `Mennyiseg`, `egyseg_ar`) VALUES
(3, 'Szilva', 5, 800),
(18, 'Paradicsom', 99, 700);

-- --------------------------------------------------------

--
-- Table structure for table `termek`
--

CREATE TABLE `termek` (
  `nev` varchar(100) NOT NULL,
  `ar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- Dumping data for table `termek`
--

INSERT INTO `termek` (`nev`, `ar`) VALUES
('Alma', 700),
('Ananász', 900),
('Banán', 750),
('Burgonya', 500),
('Cukkini', 460),
('Eper', 520),
('Görögdinnye', 560),
('Gyökér', 300),
('Hagyma', 600),
('Káposzta', 750),
('Kivi', 410),
('Körte', 480),
('Licsi', 940),
('Lilahagyma', 240),
('Mandarin', 470),
('Narancs', 700),
('Őszibarack', 630),
('Padlizsán', 430),
('Paprika', 1000),
('Paradicsom', 700),
('Pritaminpaprika', 700),
('Répa', 400),
('Retek', 550),
('Saláta', 250),
('Szilva', 800),
('Szőlő', 1550),
('Uborka', 450);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kosar`
--
ALTER TABLE `kosar`
  ADD KEY `felhasznalo_id` (`felhasznalo_id`),
  ADD KEY `Termek` (`Termek`);

--
-- Indexes for table `termek`
--
ALTER TABLE `termek`
  ADD PRIMARY KEY (`nev`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kosar`
--
ALTER TABLE `kosar`
  ADD CONSTRAINT `kosar_ibfk_1` FOREIGN KEY (`Termek`) REFERENCES `termek` (`nev`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kosar_ibfk_2` FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

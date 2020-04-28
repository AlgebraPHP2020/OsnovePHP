-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 09:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka_ispit`
--

-- --------------------------------------------------------

--
-- Table structure for table `clan`
--

CREATE TABLE `clan` (
  `OIB` varchar(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `mjesto_stanovanja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clan`
--

INSERT INTO `clan` (`OIB`, `ime`, `prezime`, `mjesto_stanovanja`) VALUES
('11111111111', 'James', 'Hetfield', 'Downey'),
('22222222222', 'Bruce', 'Dickinson', 'Nottinghamshire'),
('33333333333', 'Jesper', 'Stromblad', 'Gothenburg');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `sifra_filma` varchar(10) NOT NULL,
  `naziv_filma` varchar(50) NOT NULL,
  `godina` year(4) NOT NULL,
  `ocjena` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`sifra_filma`, `naziv_filma`, `godina`, `ocjena`) VALUES
('1', 'The Rise of Skywalker', 2019, 7),
('2', 'The Dark Knight ', 2008, 9),
('3', 'Joker ', 2019, 8);

-- --------------------------------------------------------

--
-- Table structure for table `posudba`
--

CREATE TABLE `posudba` (
  `OIB` varchar(11) NOT NULL,
  `sifra_filma` varchar(10) NOT NULL,
  `datum_posudbe` datetime NOT NULL,
  `datum_vracanja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posudba`
--

INSERT INTO `posudba` (`OIB`, `sifra_filma`, `datum_posudbe`, `datum_vracanja`) VALUES
('33333333333', '1', '2020-04-28 20:14:12', NULL),
('22222222222', '3', '2020-04-10 20:15:24', '2020-04-14 20:15:53'),
('11111111111', '2', '2020-04-26 20:16:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`OIB`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`sifra_filma`);

--
-- Indexes for table `posudba`
--
ALTER TABLE `posudba`
  ADD KEY `FK_posudba_clan` (`OIB`),
  ADD KEY `FK_posudba_film` (`sifra_filma`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posudba`
--
ALTER TABLE `posudba`
  ADD CONSTRAINT `FK_posudba_clan` FOREIGN KEY (`OIB`) REFERENCES `clan` (`OIB`),
  ADD CONSTRAINT `FK_posudba_film` FOREIGN KEY (`sifra_filma`) REFERENCES `film` (`sifra_filma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

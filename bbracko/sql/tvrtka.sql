-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 04:39 PM
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
-- Database: `tvrtka`
--

-- --------------------------------------------------------

--
-- Table structure for table `djelatnik`
--

CREATE TABLE `djelatnik` (
  `OIB` varchar(11) NOT NULL,
  `ime` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_mysql561_ci NOT NULL,
  `prezime` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `sifra_odjela` int(11) NOT NULL,
  `funkcija` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `djelatnik`
--

INSERT INTO `djelatnik` (`OIB`, `ime`, `prezime`, `sifra_odjela`, `funkcija`) VALUES
('22222222222', 'štef', 'pior', 1, 'manager'),
('33333333333', 'warrel', 'dane', 2, 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `odjel`
--

CREATE TABLE `odjel` (
  `sifra_odjela` int(11) NOT NULL,
  `naziv_odjela` varchar(20) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `sef_odjela` varchar(11) NOT NULL,
  `broj_djelatnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odjel`
--

INSERT INTO `odjel` (`sifra_odjela`, `naziv_odjela`, `sef_odjela`, `broj_djelatnika`) VALUES
(1, 'proizvodnja', '12345678901', 42),
(2, 'R&D', '10987654321', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djelatnik`
--
ALTER TABLE `djelatnik`
  ADD PRIMARY KEY (`OIB`);

--
-- Indexes for table `odjel`
--
ALTER TABLE `odjel`
  ADD PRIMARY KEY (`sifra_odjela`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

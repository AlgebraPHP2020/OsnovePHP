-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 04:59 PM
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
-- Database: `trgovina`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `sifra_proizvoda` varchar(20) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `sifra_skladista` varchar(20) NOT NULL,
  `naziv_proizvoda` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`sifra_proizvoda`, `sifra_skladista`, `naziv_proizvoda`) VALUES
('1', '001', 'cigla'),
('2', '002', 'drvo');

-- --------------------------------------------------------

--
-- Table structure for table `radnik`
--

CREATE TABLE `radnik` (
  `OIB` varchar(11) NOT NULL,
  `ime` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `prezime` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `sifra_odjela` int(11) NOT NULL,
  `funkcija` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radnik`
--

INSERT INTO `radnik` (`OIB`, `ime`, `prezime`, `sifra_odjela`, `funkcija`) VALUES
('44444444444', 'mikael', 'stanne', 1, 'manager'),
('55555555555', 'josip', 'draganjac', 2, 'skladistar');

-- --------------------------------------------------------

--
-- Table structure for table `skladisno_mjesto`
--

CREATE TABLE `skladisno_mjesto` (
  `sifra_skladista` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `naziv` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skladisno_mjesto`
--

INSERT INTO `skladisno_mjesto` (`sifra_skladista`, `naziv`) VALUES
('001', 'skladiste_cigla'),
('002', 'skladiste_drvo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`sifra_proizvoda`);

--
-- Indexes for table `radnik`
--
ALTER TABLE `radnik`
  ADD PRIMARY KEY (`OIB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

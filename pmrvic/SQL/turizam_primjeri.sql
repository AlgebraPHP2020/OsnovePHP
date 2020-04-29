-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for turizam
CREATE DATABASE IF NOT EXISTS `turizam` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `turizam`;

-- Dumping structure for table turizam.turisti
CREATE TABLE IF NOT EXISTS `turisti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `broj_putovnice` int(7) NOT NULL,
  `domovina_id` int(10) NOT NULL COMMENT 'domovina turista',
  PRIMARY KEY (`id`),
  KEY `FK_turisti_zemlje` (`domovina_id`),
  CONSTRAINT `FK_turisti_zemlje` FOREIGN KEY (`domovina_id`) REFERENCES `zemlje` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table turizam.turisti: ~8 rows (approximately)
/*!40000 ALTER TABLE `turisti` DISABLE KEYS */;
INSERT INTO `turisti` (`id`, `ime`, `prezime`, `broj_putovnice`, `domovina_id`) VALUES
	(1, 'Anica', 'Anic', 1234567, 1),
	(2, 'Anica2', 'Anic', 1455567, 2),
	(3, 'Anica3', 'Anic', 1234567, 3),
	(4, 'Anica4', 'Anic', 1278617, 4),
	(5, 'Anica5', 'Anic', 1236727, 5),
	(6, 'Anica6', 'Anic', 1234567, 4),
	(7, 'Anica7', 'Anic', 1267857, 2),
	(8, 'Anica8', 'Anic', 2674567, 3);
/*!40000 ALTER TABLE `turisti` ENABLE KEYS */;

-- Dumping structure for table turizam.zemlje
CREATE TABLE IF NOT EXISTS `zemlje` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `BDP` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table turizam.zemlje: ~5 rows (approximately)
/*!40000 ALTER TABLE `zemlje` DISABLE KEYS */;
INSERT INTO `zemlje` (`id`, `naziv`, `BDP`) VALUES
	(1, 'Njemacka', 45000),
	(2, 'Hrvatska', 15000),
	(3, 'Madjarska', 20000),
	(4, 'Italija', 25000),
	(5, 'Austrija', 35000);
/*!40000 ALTER TABLE `zemlje` ENABLE KEYS */;

-- Dumping structure for table turizam.zemlje_turisti
CREATE TABLE IF NOT EXISTS `zemlje_turisti` (
  `turist_id` int(10) NOT NULL,
  `zemlja_id` int(10) NOT NULL,
  `datum_dolaska` date DEFAULT NULL,
  `duljina_boravka` int(3) DEFAULT NULL,
  `potrosnja` double DEFAULT NULL,
  PRIMARY KEY (`turist_id`,`zemlja_id`),
  KEY `FK_zemlja_id` (`zemlja_id`),
  CONSTRAINT `FK_turist_id` FOREIGN KEY (`turist_id`) REFERENCES `turisti` (`id`),
  CONSTRAINT `FK_zemlja_id` FOREIGN KEY (`zemlja_id`) REFERENCES `zemlje` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table turizam.zemlje_turisti: ~3 rows (approximately)
/*!40000 ALTER TABLE `zemlje_turisti` DISABLE KEYS */;
INSERT INTO `zemlje_turisti` (`turist_id`, `zemlja_id`, `datum_dolaska`, `duljina_boravka`, `potrosnja`) VALUES
	(1, 4, '2020-06-29', 10, 50),
	(2, 1, '2020-07-29', 7, 100),
	(2, 4, '2020-08-29', 5, 50);
/*!40000 ALTER TABLE `zemlje_turisti` ENABLE KEYS */;

-- Dumping structure for view turizam.v_dobit_od_turizma
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_dobit_od_turizma` (
	`naziv` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`zarada` DOUBLE(23,0) NULL,
	`Broj turista` BIGINT(21) NOT NULL,
	`prosjecan boravak` DECIMAL(14,4) NULL,
	`median boravak` DOUBLE(18,10) NULL,
	`BDP` INT(6) NULL,
	`% udjela u BDP` DOUBLE(23,0) NULL
) ENGINE=MyISAM;

-- Dumping structure for view turizam.v_gubitak_od_turizma
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_gubitak_od_turizma` (
	`domovina` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`Broj domacih sto putuju vani` BIGINT(21) NOT NULL,
	`gubitak koji su gradjani iznijeli van` DOUBLE(23,0) NULL,
	`srednji broj dana koje potrose vani` DECIMAL(14,4) NULL,
	`BDP` INT(6) NULL,
	`% udjela u BDP` DOUBLE(23,0) NULL
) ENGINE=MyISAM;

-- Dumping structure for view turizam.v_putovanja
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_putovanja` (
	`id` INT(10) NOT NULL,
	`ime` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`prezime` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`broj_putovnice` INT(7) NOT NULL,
	`naziv` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`BDP` INT(6) NULL,
	`datum_dolaska` DATE NULL,
	`duljina_boravka` INT(3) NULL,
	`potrosnja` DOUBLE(22,0) NULL,
	`domovina` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view turizam.v_trosak_po_turistu
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_trosak_po_turistu` (
	`ime` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`prezime` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`trosak` DOUBLE(23,0) NULL,
	`domovina` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view turizam.v_dobit_od_turizma
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_dobit_od_turizma`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_dobit_od_turizma` AS -- koliko je zemlja u plusu od turizma?
-- koliko ukupno turista dodje?
-- Koliko prosjecno turisti ostaju?
SELECT 
naziv,
SUM(duljina_boravka * potrosnja) AS zarada,
COUNT(v_putovanja.broj_putovnice) AS "Broj turista",
AVG(duljina_boravka) AS "prosjecan boravak",
MEDIAN(duljina_boravka) OVER (PARTITION BY naziv) AS "median boravak",
BDP,

(SUM(duljina_boravka * potrosnja)/BDP)*100 AS "% udjela u BDP"
FROM v_putovanja
WHERE naziv IS NOT NULL
GROUP BY v_putovanja.naziv ;

-- Dumping structure for view turizam.v_gubitak_od_turizma
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_gubitak_od_turizma`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_gubitak_od_turizma` AS -- koliko je zemlja u minusu od oni sto putuju?
-- koliko ljudi ode vani?
-- koliko dana ukupno potrose na vanjska putovanja
SELECT 
domovina,
COUNT(v_putovanja.broj_putovnice) AS "Broj domacih sto putuju vani",
SUM(duljina_boravka * potrosnja) AS "gubitak koji su gradjani iznijeli van",
AVG(duljina_boravka) AS "srednji broj dana koje potrose vani" ,
BDP,

(SUM(duljina_boravka * potrosnja)/BDP)*100 AS "% udjela u BDP"
FROM v_putovanja
WHERE naziv IS NOT NULL
GROUP BY v_putovanja.domovina ;

-- Dumping structure for view turizam.v_putovanja
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_putovanja`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_putovanja` AS SELECT 
turisti.id,
turisti.ime,
turisti.prezime,
turisti.broj_putovnice,
zemlje.naziv,
zemlje.BDP,
zemlje_turisti.datum_dolaska,
zemlje_turisti.duljina_boravka,
zemlje_turisti.potrosnja,
z1.naziv AS domovina
FROM turisti
LEFT JOIN zemlje_turisti ON turisti.id= zemlje_turisti.turist_id
LEFT JOIN zemlje ON zemlje_turisti.zemlja_id=zemlje.id
LEFT JOIN zemlje z1 ON turisti.domovina_id=z1.id ;

-- Dumping structure for view turizam.v_trosak_po_turistu
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_trosak_po_turistu`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_trosak_po_turistu` AS -- koliko svaki od njih ukupno potrosi
SELECT 
ime,
prezime,
SUM(duljina_boravka * potrosnja) AS trosak,
domovina
FROM v_putovanja
GROUP BY v_putovanja.broj_putovnice ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

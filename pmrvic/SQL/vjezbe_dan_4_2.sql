CREATE DATABASE Upisi;

CREATE TABLE Polaznici(
id INT(10) AUTO_INCREMENT PRIMARY KEY,
Ime VARCHAR(50) NOT NULL,
Prezime VARCHAR(50) NOT NULL
)

INSERT INTO polaznici(Ime,Prezime) 
VALUES 
("Maja","Majic"),
("Mgaja","Majic5"),
("Mfaja","Majic4"),
("Mafja","Majic3"),
("Majfa","Majic22"),
("Mafgja","Majic2"),
("Maja","Majic"),
("Maja","Majic")

/*
KREIRANJE UPISA
*/


-- Dumping database structure for Upisi
CREATE DATABASE IF NOT EXISTS `upisi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `Upisi`;

-- Dumping structure for table Upisi.polaznici
CREATE TABLE IF NOT EXISTS `polaznici` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(50) NOT NULL,
  `Prezime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table Upisi.polaznici: ~8 rows (approximately)
/*!40000 ALTER TABLE `polaznici` DISABLE KEYS */;
INSERT INTO `polaznici` (`id`, `Ime`, `Prezime`) VALUES
	(1, 'Maja', 'Majic'),
	(2, 'Mgaja', 'Majic5'),
	(3, 'Mfaja', 'Majic4'),
	(4, 'Mafja', 'Majic3'),
	(5, 'Majfa', 'Majic22'),
	(6, 'Morsan', 'Majic2'),
	(7, 'Maja', 'Majic'),
	(8, 'Maja', 'Majic');
/*!40000 ALTER TABLE `polaznici` ENABLE KEYS */;

-- Dumping structure for table Upisi.polaznici_tecajevi
CREATE TABLE IF NOT EXISTS `polaznici_tecajevi` (
  `polaznik_id` int(10) NOT NULL,
  `tecaj_id` int(10) NOT NULL,
  PRIMARY KEY (`polaznik_id`,`tecaj_id`),
  KEY `FK_tecajevi` (`tecaj_id`),
  CONSTRAINT `FK_polaznici` FOREIGN KEY (`polaznik_id`) REFERENCES `polaznici` (`id`),
  CONSTRAINT `FK_tecajevi` FOREIGN KEY (`tecaj_id`) REFERENCES `tecajevi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table Upisi.polaznici_tecajevi: ~3 rows (approximately)
/*!40000 ALTER TABLE `polaznici_tecajevi` DISABLE KEYS */;
INSERT INTO `polaznici_tecajevi` (`polaznik_id`, `tecaj_id`) VALUES
	(3, 2),
	(4, 2),
	(4, 3);
/*!40000 ALTER TABLE `polaznici_tecajevi` ENABLE KEYS */;

-- Dumping structure for table Upisi.tecajevi
CREATE TABLE IF NOT EXISTS `tecajevi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table Upisi.tecajevi: ~5 rows (approximately)
/*!40000 ALTER TABLE `tecajevi` DISABLE KEYS */;
INSERT INTO `tecajevi` (`id`, `naziv`) VALUES
	(1, 'awedr'),
	(2, 'jnj'),
	(3, 'lmlkjklm'),
	(4, 'jkhjkhjk'),
	(5, ';lk;lkl;k');



/*
ZADATAK 3.1 Promijenimo prezime polaznice Ane Milić u Morsan
*/
UPDATE polaznici SET Ime="Morsan" WHERE Ime LIKE 'Mafgja'

/*
ZADATAK 3.3 Izbrišite sve podatke iz tablice Upisi. 
*/
-- kreiram jednu dummy tablicu
CREATE TABLE Upisi (SELECT * FROM polaznici_tecajevi);
DELETE 
FROM upisi;

/*
ZADATAK 3.4 Obrišite tablicu Upisi. 
*/

DROP TABLE upisi;

/*
ZADATAK 3.5 Obrišite cijelu bazu podataka Upisi. 
 
*/

DROP DATABASE Upisi;

USE fakultet;


/*
ZADATAK 3.6 Kreirajte tablicu Osjecani u kojoj se nalaze podaci samo studenata
 iz tablice stud čije je mjesto stanovanja Osijek. 
*/

CREATE TABLE Osjecani
(SELECT 

stud.mbrStud,
stud.imeStud,
stud.prezStud,
stud.pbrRod,
stud.pbrStan,
stud.datRodStud,
stud.jmbgStud,
stud.email
 
FROM 
stud INNER JOIN mjesto ON stud.pbrRod = mjesto.pbr
WHERE
mjesto.nazMjesto LIKE 'Osijek');

/*
ZADATAK 3.7 Kreirajte privremenu tablicu Splicani u kojoj se nalaze
 podaci samo studenata iz tablice stud čije je mjesto stanovanja Split. 
*/
--------------
CREATE TEMPORARY TABLE Splicani
(SELECT 

stud.mbrStud,
stud.imeStud,
stud.prezStud,
stud.pbrRod,
stud.pbrStan,
stud.datRodStud,
stud.jmbgStud,
stud.email
 
FROM 
stud INNER JOIN mjesto ON stud.pbrRod = mjesto.pbr
WHERE
mjesto.nazMjesto LIKE 'Split');



SELECT * FROM SPlicani;
-----------------

/*
ZADATAK 3.8 Kreirajte pogled na tablicu stud. Sadrži samo imena i prezimena studenata. 
*/

CREATE VIEW v_stud AS
SELECT stud.imeStud, stud.prezStud
FROM stud;





INSERT IGNORE INTO upisani_pred_stud(stud_mbr,pred_id)
    SELECT ispit.mbrStud, ispit.sifPred
    FROM ispit;
  
-- primjer privremene tablice
CREATE TEMPORARY TABLE IF NOT EXISTS privremena AS (
SELECT ispit.mbrStud, ispit.sifPred FROM ispit);

--------------------------------------------------
-- Kreiranje procedure za ubacivanje podataka u tablicu
--  pokrecemo sa: CALL `upisi100`('101')
--------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `upisi100`(
	IN `v_max` INT
)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT 'Doadaj 100 studenata koji su upisali sto predmeta'
BEGIN
-- DECLARE v_max INT UNSIGNED DEFAULT 100; 
DECLARE v_counter INT UNSIGNED DEFAULT 0; 

WHILE v_counter < v_max DO
    
INSERT IGNORE INTO fakultet.upisani_pred_stud (
upisani_pred_stud.pred_id,
upisani_pred_stud.stud_mbr
)
VALUES (
(SELECT `sifPred` FROM `pred` ORDER BY RAND() LIMIT 1),
(SELECT `mbrStud` FROM `stud` ORDER BY RAND() LIMIT 1) 
);
     
SET v_counter=v_counter+1;
END WHILE;
END
-------------------------------------


-- Selektiraj sve studente koji su upisali neki predmet ali nisu nikada izasli na ispit
SELECT 
*
FROM
upisani_pred_stud LEFT JOIN stud ON upisani_pred_stud.stud_mbr=stud.mbrStud
LEFT JOIN ispit ON upisani_pred_stud.pred_id=ispit.sifPred
WHERE ispit.ocjena IS NULL

-- Selektiraj sve studente koji su upisali neki predmet ali nisu nikada izasli na ispit
SELECT 
 pred.nazPred, 
 -- pred_id, 
 COUNT(upisani_pred_stud.pred_id) AS broj_upisanih_a_nisu_izasli_na_ispit
FROM
upisani_pred_stud LEFT JOIN stud ON upisani_pred_stud.stud_mbr=stud.mbrStud
LEFT JOIN ispit ON upisani_pred_stud.pred_id=ispit.sifPred
LEFT JOIN pred ON pred.sifPred = upisani_pred_stud.pred_id 
WHERE ispit.ocjena IS NULL
GROUP BY upisani_pred_stud.pred_id
ORDER BY broj_upisanih_a_nisu_izasli_na_ispit DESC
LIMIT 10


-- Selektiraj sve studente koji su upisali neki predmet ali nisu nikada izasli na ispit
SELECT 
 pred.nazPred, 
 -- pred_id, 
 COUNT(upisani_pred_stud.pred_id) AS broj_upisanih_koji_su_izasli_na_ispit,
 AVG(ispit.ocjena) AS prosjek,
SUM(ispit.ocjena) AS suma_ocjena
FROM
upisani_pred_stud LEFT JOIN stud ON upisani_pred_stud.stud_mbr=stud.mbrStud
LEFT JOIN ispit ON upisani_pred_stud.pred_id=ispit.sifPred
LEFT JOIN pred ON pred.sifPred = upisani_pred_stud.pred_id 
WHERE ispit.ocjena IS NOT NULL
GROUP BY upisani_pred_stud.pred_id
ORDER BY broj_upisanih_koji_su_izasli_na_ispit DESC
LIMIT 10

---------------------



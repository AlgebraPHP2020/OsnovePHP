/*
ZADATAK 2.9 Ispišite sve studente kojima je šifra 1, 3 ili 5. 
*/
SELECT *
FROM stud
WHERE stud.mbrStud=1170 OR stud.mbrStud=1172 OR stud.mbrStud=1174;

/*
ZADATAK 2.9 DRUGI NACIN spišite sve studente kojima je šifra 1, 3 ili 5. 
*/
SELECT *
FROM stud
WHERE stud.mbrStud IN (1180,1181,1182);

/*
ZADATAK 2.10 dohvatite koliko je studenata upisalo koji predmet
takodje u drugom upitu koliko je svaki sudent pisao predmeta
*/
SELECT 
stud.imeStud,
 stud.prezStud,
 COUNT(pred.sifPred) AS "Broj upisanih predmeta"
FROM
upisani_pred_stud LEFT JOIN stud ON upisani_pred_stud.stud_mbr=stud.mbrStud
LEFT JOIN pred ON upisani_pred_stud.pred_id=pred.sifPred
GROUP BY stud.mbrStud,stud.imeStud, stud.prezStud;

SELECT 
pred.nazPred, 
COUNT(stud.mbrStud) AS "Broj upisanih studenata"
FROM
upisani_pred_stud LEFT JOIN stud ON upisani_pred_stud.stud_mbr=stud.mbrStud
LEFT JOIN pred ON upisani_pred_stud.pred_id=pred.sifPred
GROUP BY pred.sifPred,pred.nazPred;
-- z3.2 uzmi dva polja iz tablice nastavnik
SELECT 
nastavnik.imeNastavnik,
nastavnik.prezNastavnik
FROM fakultet.nastavnik;

-- z 3.3 ime prez svih studenata ime i prez ispoisati u jednom stupcu
SELECT 
CONCAT(stud.imeStud, " ", stud.prezStud) AS "Ime i prezime"
FROM stud;

-- ZADATAK 2.17 Ispišite imena i prezimena nastavnika s nazivom 
-- mjesta u kojem stanuju.
SELECT 
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
mjesto.nazMjesto
FROM fakultet.nastavnik INNER JOIN mjesto ON nastavnik.pbrStan=mjesto.pbr;

/* 
ZADATAK 2.18 Ispišimo imena i prezimena svih studenata zajedno s ispitima 
na koje su izašli i ocjenama koje su dobili. 
Naravno, bit će studenata koji nisu ni jednom izašli na neki ispit,
 pa kod njih ne možemo ispisati šifru ispita
*/

SELECT 
CONCAT(stud.imeStud, " ", stud.prezStud) AS "Ime i prezime",
ispit.ocjena,
pred.nazPred
FROM stud INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud
LEFT JOIN pred ON pred.sifPred=ispit.sifPred
WHERE ocjena>1;

/*
ZADATAK 2.2 Ispišite podatke iz svih stupaca tablice studenti.  
*/
SELECT 
*
FROM stud;

/*
ZADATAK 2.3 Ispišite podatke iz svih stupaca tablice stud i 
stupcima promijenite naziv u ispisu rezultata: 
sifra_polaznika – Šifra, ime – Ime osobe, prezime– Prezime osobe,
 mjesto_stanovanja – Mjesto. 
*/

SELECT 
stud.mbrStud as "Sifra",
stud.imeStud as "Ime studenta",
stud.prezStud as "Prezime",
stud.pbrRod as "postanski broj mjesta rod.",
stud.pbrStan as "Postanski broj stanovanja",
stud.datRodStud as "Datum rodjenja",
stud.jmbgStud as "Jedinstveni Maticni Broj Gradjana",
stud.email as "E-mail"
FROM stud;


/*
ZADATAK 2.4 Sortirajmo podatke u upitu tako da je ime sortirano uzlazno. 
*/
SELECT 
*
FROM stud
ORDER BY stud.imeStud DESC;

/*
ZADATAK 2.4 Sortirajmo podatke u upitu tako da je ime sortirano uzlazno. 
ZADATAK 2.4 Sortirajmo podatke u upitu tako da je mjesto stanovanja silazno. 
*/
SELECT 
*
FROM stud
ORDER BY stud.pbrStan DESC,stud.imeStud ASC ;

/*
ZADATAK 2.6 Ispišite sva mjesta stanovanja. 
Na popisu se ne smiju pojaviti duplikati
*/
SELECT 
DISTINCT mjesto.nazMjesto
FROM mjesto RIGHT JOIN stud ON stud.pbrStan=mjesto.pbr;

/*
ZADATAK 2.6 Ispišite sva mjesta ODAKLE NE DOLAZE STUDENTI
*/
SELECT 
*
FROM mjesto LEFT JOIN stud ON stud.pbrStan=mjesto.pbr
WHERE stud.mbrStud IS NULL;


-- popis imena i prezimena svih clanova koji nisu vratili film_1 nacin
SELECT ime, prezime FROM clan
INNER JOIN posudba 
ON clan.OIB=posudba.OIB
WHERE datum_vracanja IS NULL;

-- popis imena i prezimena svih clanova koji nisu vratili film_2 nacin
SELECT ime, prezime FROM clan, posudba
WHERE datum_vracanja IS NULL AND clan.OIB=posudba.OIB;

-- popis imena i prezimena svih clanova koji nisu vratili film + naziv filma koji nije vracen_1 nacin
SELECT ime, prezime, naziv_filma FROM clan, posudba, film
WHERE datum_vracanja IS NULL AND clan.OIB=posudba.OIB AND film.sifra_filma=posudba.sifra_filma;

-- popis imena i prezimena svih clanova koji nisu vratili film + naziv filma koji nije vracen_2 nacin
SELECT ime, prezime, naziv_filma FROM clan
INNER JOIN posudba 
ON clan.OIB=posudba.OIB
INNER JOIN film 
ON film.sifra_filma=posudba.sifra_filma
WHERE datum_vracanja IS NULL;

<?php

echo "<b>Primjer broj 8.4.1 FUNKCIJA is_file</b>";
echo "<br>";
if (is_file ('O meni.txt'))

{
    echo "Ovaj file je ok";
}
echo "<hr>";


echo "<b>Primjer broj 8.4.2 FUNKCIJA id_dir</b>";
echo "<br>";

if (is_dir ('primjeri842'))
{
    echo "Ovaj folder je ok";
}
echo "<hr>";


echo "<b>Primjer broj 8.4.3 FUNKCIJA mkdir</b>";
echo "<br>";

mkdir ('primjer843');

echo "Stvorili smo folder primjer843";

echo "<hr>";


echo "<b>Primjer broj 8.4.4 FUNKCIJA rmdir</b>";
echo "<br>";

rmdir ('primjer843');

echo "Obrisali smo folder primjer843";

echo "<hr>";


echo "<b>Primjer broj 8.4.5 FUNKCIJA unlink</b>";
echo "<br>";

fopen ('zabrisanje.txt','w');

echo "Imamo file za brisati";

echo "<br>";

unlink ('zabrisanje.txt');

echo "obrisali smo file za brisanje";

echo "<hr>";


echo "<b>Primjer broj 8.4.5 FUNKCIJA unset</b>";
echo "<br>";

$broj_zarazenih=40;

echo "Definirali smo varijablu broj_zarazenih";
echo "<br>";

unset ($broj_zarazenih);


echo "Izbrisali smo varijablu broj_zarazenih";

echo "<hr>";


fopen ('zadaci_za_ponavljanje_str_91.php','w');

unlink ('zadaci_za_ponavljanje_str_91');

        
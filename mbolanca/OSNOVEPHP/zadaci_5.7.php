<?php

echo '<strong>1. Koristeći se operatorima usporedbe &nbsp < &nbsp i &nbsp >&nbsp , te iskazom <i>if-else</i> <br>'
 . 'provjeri odnos varijabli &nbsp $a = 4 i &nbsp $b = 2 i ispiši poruku.</strong><br><br>';

$a = 4;
$b = 2;

if ($a > $b) {
    echo 'Varijabla $a = ' . $a . ' i veća je od varijable $b = ' . $b;
} else if ($a < $b) {
    echo 'Varijabla $a = ' . $a . ' i manja je od varijable $b = ' . $b;
} else {
    echo 'Varijabla $a = ' . $a . ' jednaka je varijabli $b = ' . $b;
}

echo '<br><br><strong>2. Napiši program koji rabi dvije varijable $a i $b. Ako je $a veće od $b, uvećaj ga za 1, <br>'
 . 'a ako je veći $b onda ga umanji za 1. Na kraju ispiši vrijednost varijabli.</strong><br><br>';

$a = 17;
$b = 4;

echo ' $a = ' . $a . ' $b = ' . $b . '<br><br>';

if ($a > $b) {

    $a++;
    echo ' $a je veći od $b pa je uvećan. <br> $a = ' . $a;
} else if ($a < $b) {

    $b--;
    echo ' $b je veći od $a pa je umanjen. <br> $b = ' . $b;
} else {

    echo '$a i $b su jednaki';
}

echo "<br><br><strong>3. Pomoću petlje <i>while</i> ispiši brojeve od 1 do 50, jedan ispod drugoga.</strong><br><br>";

$a = 1;

while ($a <= 50) {

    echo $a . "<br>";
    $a++;
}

echo"<br><br><strong>4. Pomoću petlje <i> for </i> zbroji brojeve od 20 do 30 i ispiši zbroj.</strong><br><br>";

$zbroj = 0;

for ($i = 20; $i <= 30; $i++) {

    $zbroj += $i;
}
echo "Zbroj svih brojeva od 20 do 30 = " . $zbroj . ".";

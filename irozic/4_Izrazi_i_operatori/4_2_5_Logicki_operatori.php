<?php

// Logičko I (&&, and)
$a=5;

if($a>0 && $a<10)
    echo 'Broj je u traženom nizu';
else
    echo 'Nije iz traženog niza';

echo "<br>";

// Logičko ILI (||, or)
$b=0;
$c=-2;

if ($b > 0 || $c < 0)
    echo 'Uvjet je zadovoljen';
else
    echo 'Uvjet nije zadovoljen';

echo "<br>";

// Logička negacija (!)
$d=0;

if(!$d)
    echo 'Uvjet je istinit';
else
    echo 'Uvjet nije istinit';
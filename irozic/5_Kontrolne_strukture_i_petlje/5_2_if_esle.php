<?php

// Primjer 1.
$naziv1 = 'Programiranje';

if (strlen($naziv1) > 10) {
    echo 'Naziv ima više od 10 znakova';
} else {
    if (strlen($naziv1) >= 5 && strlen($naziv1) <= 15) {
        echo 'Duzina naziva je u zadanom nizu';
    } else {
        echo 'Naziv je prekratak';
    }
}

echo "<br>";

// Primjer 2.
$naziv2 = 'Programiranje';

if (strlen($naziv2) > 10) {
    echo 'Naziv ima više od 10 znakova';
} elseif (strlen($naziv2) >= 5 && strlen($naziv2) <= 15) {
    echo 'Duzina naziva je u zadanom nizu';
} else {
    echo 'Naziv je prekratak';
}


<?php

// Primjer 1.
function ispis_imena($imena) {
    echo '<table border="1" widht="500">';
    echo '<tr><tr><th>Ključ</th>
        <th>Ime</th></tr>';
    foreach ($imena as $key => $ime) {
        echo '<tr><td>' . $key . '</td>
    <td>' . $ime . '</td>
    </tr>';
    }

    echo '</table>';
}

$ucenici = array('Ivan', 'Ante', 'Petar');

ispis_imena($ucenici);

echo '<br>';
// Primjer 2.
function sumiraj($a,$b)
{
    $sum=$a + $b;
    
    return $sum;
}

$x=3;
$y=8;

echo sumiraj($x, $y);


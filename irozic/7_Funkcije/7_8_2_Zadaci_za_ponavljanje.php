<?php

function ispis_imena($imena) {
    echo '<table border="1" widht="500">';
    echo '<tr><tr><th>Ime</th>
        <th>Prezime</th></tr>';
    foreach ($imena as $key => $ime) {
        echo '<tr><td>' . $key . '</td>
    <td>' . $ime . '</td>
    </tr>';
    }

    echo '</table>';
}

$ucenici = array('Ivan' => 'Ivic', 'Petar' => 'Petric', 'Ante' => 'Antic');

ispis_imena($ucenici);

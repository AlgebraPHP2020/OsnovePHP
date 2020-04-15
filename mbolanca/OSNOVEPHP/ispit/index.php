<?php

include 'data.php';

echo '<table border=2 cellpadding=10>'
 . '<thead bgcolor="lightgrey">'
 . '<th>Rbr.</th>'
 . '<th>Prezime</th>'
 . '<th>Ime</th>'
 . '<th>Datum prijave</th>'
 . '<th>Placeno</th>'
 . '</thead>';

foreach ($data as $key => $value) {

    echo '<tr>'
    . '<td>' . $key . '.</td>'
    . '<td>' . $value["prezime"] . '</td>'
    . '<td>' . $value["ime"] . '</td>'
    . '<td>' . date_trans($value["datum"]) . '</td>'
    . '<td>'
    .'<select>';

    if ($value["placeno"] === "Da") {

        echo '<option selected>' . $value["placeno"] . '</option>'
        . '<option>Ne</option>';
    } else {

        echo '<option selected>' . $value["placeno"] . '</option>'
        . '<option>Da</option>';
    }
    echo '</select>'
    .'</td>'
    .'</tr>';
}
echo '</table>';

function date_trans ($datum) {
    $novi_datum = explode("-", $datum);
    return $novi_datum[2].'.'.$novi_datum[1].'.'.$novi_datum[0].'.';
}

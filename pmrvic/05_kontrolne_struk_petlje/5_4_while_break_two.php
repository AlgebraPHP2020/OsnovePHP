<?php

/* 
 * break 2
 * prirucnik str 51.
 */

$x = 0;
$y = 0;
$counter=0; // brojac izvrsavanja petlji

while ($x <= 10) {
    while ($y <= 10) {
        echo "Kordinata: x=$x, y=$y <br>";
        $y++;
        $counter++;
        if($counter>=110){
            break 2;
        }
    }
    echo "<hr>";
    $y=0;
    $x++; 
    $counter++;
}

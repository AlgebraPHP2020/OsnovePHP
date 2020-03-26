<?php

$x = 0;
$y = 0;

while ($x <= 10) {
    $x++; 
    while ($y <= 10) {
        echo "Kordinata: x=$x, y=$y <br>";
        if($y==5){
            continue 2;
        } 
        $y++;
    }
}


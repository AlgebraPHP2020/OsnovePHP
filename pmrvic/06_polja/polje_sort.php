<?php
/**
 * Sortiranje po vrijednosti (abecedno)
 * 
 */

$fruits=array(0=>'limun','b'=>'naranca',1=>'banana','a'=>'jabuka');

echo "<pre>";
print_r($fruits);
echo "</pre>";

// Koristiti s oprezom jer se kljucevi ponovo generiraju
sort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

/*
Array
(
    [0] => limun
    [b] => naranca
    [1] => banana
    [a] => jabuka
)
Array
(
    [0] => banana
    [1] => jabuka
    [2] => limun
    [3] => naranca
)
 */
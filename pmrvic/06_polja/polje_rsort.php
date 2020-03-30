<?php
/**
 * Sortiranje po vrijednosti (obrnuto abecedno)
 * 
 */

$fruits=array(0=>'limun','b'=>'naranca',1=>'banana','a'=>'jabuka');

echo "<pre>";
print_r($fruits);
echo "</pre>";

// Koristiti s oprezom jer se kljucevi ponovo generiraju
rsort($fruits);

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
    [0] => naranca
    [1] => limun
    [2] => jabuka
    [3] => banana
)
 */

// KLJUCEVI SU PONOVO IZGUBLJENI
<?php
/**
 * Sortiranje po vrijednosti uz zadrzavanje asocijacija (abecedno)
 * 
 */

$fruits=array(0=>'limun','b'=>'naranca',1=>'banana','a'=>'jabuka');

echo "<pre>";
print_r($fruits);
echo "</pre>";

arsort($fruits);

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
    [b] => naranca
    [0] => limun
    [a] => jabuka
    [1] => banana
)
 */
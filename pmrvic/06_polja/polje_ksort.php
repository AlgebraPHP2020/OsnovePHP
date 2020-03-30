<?php
/**
 * Sortiranje po kljucevima  (abecedno)
 * 
 */

$fruits=array(0=>'limun','b'=>'naranca',1=>'banana','a'=>'jabuka');

echo "<pre>";
print_r($fruits);
echo "</pre>";

ksort($fruits);

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
    [0] => limun
    [a] => jabuka
    [b] => naranca
    [1] => banana
)
 */

echo "<hr> sort_natural";
ksort($fruits,6);  // SORT_NATURAL=6

echo "<pre>";
print_r($fruits);
echo "</pre>";


echo "<hr> sort_String";
ksort($fruits,SORT_STRING);

echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<hr> sort_numeric";
ksort($fruits,SORT_NUMERIC);

echo "<pre>";
print_r($fruits);
echo "</pre>";
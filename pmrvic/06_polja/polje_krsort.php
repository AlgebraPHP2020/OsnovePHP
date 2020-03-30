<?php
/**
 * Sortiranje po kljucevima  (abecedno)
 * 
 */

$fruits=array(0=>'limun','b'=>'naranca',1=>'banana','a'=>'jabuka');

echo "<pre>";
print_r($fruits);
echo "</pre>";

krsort($fruits);

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
    [1] => banana
    [0] => limun
    [b] => naranca
    [a] => jabuka
)

 */

echo "<hr> sort_natural";
krsort($fruits,6);  // SORT_NATURAL=6

echo "<pre>";
print_r($fruits);
echo "</pre>";


echo "<hr> sort_String";
krsort($fruits,SORT_STRING);

echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<hr> sort_numeric";
krsort($fruits,SORT_NUMERIC);

echo "<pre>";
print_r($fruits);
echo "</pre>";
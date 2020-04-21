<?php

$var='Algebra';
$var='35';
$var=array('Algebra', '35');
$var='';

//1. primjer
$naziv_var='iznos';
$$naziv_var=35;

echo $iznos;

echo "<br>";
//2. primjer
$naziv_var='iznos';
$iznos=35;

echo $iznos;

echo "<br>";
//alias varijabli
$a='Algebra';
$b=&$a;

echo $b;

echo "<br>";
//define
define('PDV', 23);
echo 'Iznos poreza je='.PDV.'%';
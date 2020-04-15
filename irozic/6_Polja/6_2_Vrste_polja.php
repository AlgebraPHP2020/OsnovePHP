<?php

// indeksna polja su polja kojima su ključevi brojevi
$polje1=array('Tesla', 'Edison', 'Bell');

$polje2=array();
$polje2[0]='Tesla';
$polje2[1]='Edison';
$polje2[2]='Bell';

echo $polje1[2];
echo "<br>";
echo $polje2[0];

echo "<hr>";
$polje3=array(5=>'Tesla', 6=>'Edison', 7=>'Bell', 'Penkala');

echo $polje3[8];

echo "<hr>";
$polje4=array('naranca', 'banana');

array_push($polje4, 'jabuka', 'jagoda');

echo $polje4[3];

echo "<hr>";
echo "<hr>";
// asoscijativna polja su polja kojima su ključevi tekstualne vrijednosti
$polje5=array('boja1'=>'plava', 'boja2'=>'crvena', 'boja3'=>'zelena');

echo $polje5['boja2'];

echo "<hr>";
$polje6=array('boja1'=>'plava', 2=>'crvena', 'boja3'=>'zelena');

echo $polje6[2];
echo "<br>";
echo $polje6['boja3'];
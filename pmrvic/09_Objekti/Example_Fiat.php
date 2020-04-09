<?php
require_once './Autoload.php';
require_once('./Template.php');
/* 
 * Primjer koristenja nasljedene klase Fiat::Auto
 */

$f1=new Fiat();
echo $f1;

$f1->promjeniSnagu(55);
$f1->model="Tipo";

echo $f1;
$f1->promjeniBoju("LawnGreen");

echo $f1;

$j1=new Jeep();

echo $j1;

$j1->ubrzaj();  // nista jer je vrijeme ubrzanja nula
echo $j1;

$j1->ubrzaj(1, 5);
echo $j1;
$f1->ubrzaj(3, 5);
echo $f1;

// djip slepa fiata
$j1->shlep($f1);
echo $j1;
$j1->ubrzaj(1, 5);
echo $j1;

$f1->promjeniBoju("red");
echo $j1;
echo $f1;
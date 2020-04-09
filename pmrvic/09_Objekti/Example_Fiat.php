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

<?php
require_once './Autoload.php';
require_once('./Template.php');


//$a1=new AutoMobil(); // ovo ne moze jer je Automobil abstract

$j2=new Jeep();
$j2->model="Cherokee";
$j2->promjeniBoju("brown");
echo $j2;


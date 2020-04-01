<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

////////////////////
/**
 * Djelokrug varijabli
 * kljucna rijec #
 * global
 */

//$a=2;    // ZAKOMENTIRANO jer nije potrebno INICIJALIZIRATI VAR
function inc_a() {
   static $broj_a=0;  // ako postoji iskorisi ako ne stvori var $a
    $broj_a++;
    echo "Var a unutar f-cije: ".$broj_a."<br>";
}

inc_a();
inc_a();
inc_a();
inc_a();



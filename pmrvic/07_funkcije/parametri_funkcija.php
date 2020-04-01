<?php

/* 
 * Funkcijama predajemo parametre po vrijednostima i referencama
 */

// NA OVAJ NACIN IZBJEGAVAMO KORISTITI GLOBAL
function potencija(&$val){
    $val= $val*$val;
}

$broj=3;
potencija($broj);
echo "<br>".$broj;
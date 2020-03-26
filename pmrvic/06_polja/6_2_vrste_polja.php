<?php

/* 
 * Polja (niz poodataka, nizovi, array)
 */
// polja pocinju od 0
//              [0]      [1]     [2]
$polje =array('Tesla','Edison','Bell');

print_r($polje);

// drugi nacin rucna dodjela kljuceva
$polje=array();

$polje[5]="Tesla";
$polje[11]="Edison";
$polje[23]="Bell";

print_r($polje);

// dopuna polja novim elementom
$polje[]="Penkala";
print_r($polje);

// rucno indexiranje
$polje2 =array('5'=>'Tesla','6'=>'Edison','7'=>'Bell');
print_r($polje2);

// array_push spaja polja ili dodaje nove elemente
array_push($polje2,'jabuka','jagoda');
print_r($polje2);

// ne mosemo dodavati asocijacije u array_push
//array_push($polje2,'voce1'=>'banana','voce2'=>'kokos');
$voce=array('voce1'=>'banana','voce2'=>'kokos');

// pushati array unutar arraya ne daje ok rezultat
//array_push($polje2,$voce);

$spojenopolje= array_merge($voce, $polje2);
print_r($spojenopolje);
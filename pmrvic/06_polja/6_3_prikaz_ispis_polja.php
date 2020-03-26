<?php

$polje=array('Tesla'
    ,'Edison'
    ,'Dirac'
    ,'Einstein'
    ,'Bohr'   
 // ,'Newton'   
    ,'Curie'  
    ,'Bell');

echo $polje[4]; // Bohr
echo '<br>';

//pomocu petlje for
for ($i = 0; $i < count($polje); $i++) {
    echo $polje[$i]." ";
} 

// preformatirani ispis
echo '<pre>';
for ($i = 0; $i < count($polje); $i++) {
    echo $polje[$i]."\n";
} 
echo '</pre>';

//numerirana lista
echo '<ol>';
for ($i = 0; $i < count($polje); $i++) {
    echo '<li>'.$polje[$i]."</li>";
} 
echo '</ol>';

// tockana lista
echo '<ul>';
for ($i = 0; $i < count($polje); $i++) {
    echo '<li>'.$polje[$i]."</li>";
} 
echo '</ul>';

//pomocu petlje for svaki drugi paran
for ($i = 0; $i < count($polje); $i+=2) {
    echo $polje[$i]." ";
} 
echo '<br>';

//pomocu petlje svaki drugi neparan
for ($i = 1; $i < count($polje); $i+=2) {
    echo $polje[$i]." ";
} 



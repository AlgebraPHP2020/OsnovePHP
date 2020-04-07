<?php
/*
function sum ($a,$b) {
    return $a+$b;
}
function raz ($a,$b) {
    return $a-$b;
}
function mnoz ($a,$b) {
    return $a*$b;
}
function kol ($a,$b) {
    return $a/$b;
}

function sve ($a,$b) {
    echo 'Suma 3 + 6 ='. sum($a, $b);
    echo '<br>Razlika 3 - 6 ='. raz($a, $b);
    echo '<br>Umnožak 3 * 6 ='. mnoz($a, $b);
    echo '<br>Količnik 3 / 6 ='. kol($a, $b);
}

$prvi = 3;
$drugi = 6;

sve ($prvi,$drugi);
*/



$polje_brojeva = array(1,2,3,5);

// NA OVAJ NACIN IZBJEGAVAMO KORISTITI GLOBAL
function potencija(&$val){
    $val= $val*$val;
}

$broj=3;
potencija($broj);
echo "<br>".$broj;

function sum() {
    print_r(func_get_args());
    $rez=0;
    foreach (func_get_args() as $key => $value) {
       $rez+=$value; 
    }
    return $rez;
}
echo sum(2,3);
echo '<hr>';
echo sum(2,3,4);
echo '<hr>';
echo sum(4,4,4,8);


function raz() {
    $rez=0;
    foreach (func_get_args() as $value) {
       $rez-=$value; 
    }
    return $rez;
}

function umn() {
    $rez=NULL;
    foreach (func_get_args() as $value) {
       $rez*=$value; 
    }
    return $rez;
}

function kol() {
    $rez=NULL;
    foreach (func_get_args() as $value) {
       $rez/=$value; 
    }
    return $rez;
}

/*function sve ($polje_brojeva) {
    echo 'Suma svih brojeva ='. sum($rez);
    echo '<br>Razlika svih brojeva ='. raz($rez);
    echo '<br>Umnožak svih brojeva ='. umn($rez);
    echo '<br>Količnik svih brojeva ='. kol($rez);
}
*/
//$polje_brojeva = array(1,2,3,5);

//sve ($polje_brojeva);

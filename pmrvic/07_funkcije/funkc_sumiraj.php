<?php

/**
 * 
 * @param int $a
 * @param int $b
 * @return double
 */
function sumiraj($a,$b) {
    return $a+$b;
} 


$broj1=5;
$broj2=55.5;

echo "Zbroj 5 i 55 je = ".sumiraj($broj2, $broj1);


////////////////////
/**
 * Djelokrug varijabli
 * kljucna rijec #
 * global
 */

$a=2;
function inc_a() {
   global $a;  // global is evil !!!
    $a++;
    echo "Var a unutar f-cije: ".$a."<br>";
}

inc_a();
inc_a();
echo "Var a van f-cije: ".$a."<br>";











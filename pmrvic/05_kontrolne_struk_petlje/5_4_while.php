<?php


$kreni=true;
$a=1;
$kraj=1000000;

//while (true) {  // OPREZNO, BESKONACNA PETLJA !!!
while ($kreni){
    $a *= 3;  // a=a*2
    echo " ".$a;
    if($a>=$kraj){
        $kreni=false;
        echo "<br>";
    }
}
echo "najveci broj a je ".($a/3);

$i=1;
$zbroj =0;
while ($i<=100) {
    $zbroj += $i;
    $i++;  
    if($zbroj>=80){
        break;
    }
}
echo "<hr>$zbroj smo dostigli nakon $i iteracija" ;
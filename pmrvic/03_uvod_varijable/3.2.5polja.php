<?php

/* 
 *php polja
 */

$polje= array("jabuka","kriuska","avokado");

 echo "<hr>ispis naprijed:<br>";
for ($i=0;$i<count($polje);$i++){
    echo $polje[$i]."<br>";
}
 echo "<hr>ispis unatrag:<br>";
for ($i=count($polje)-1;$i>=0;$i--){
    echo $polje[$i]."<br>";
}
$polje[]="mango";
 echo "<hr>ispis naprijed:<br>";
for ($i=0;$i<count($polje);$i++){
    echo $polje[$i]."<br>";
}
$polje[]="kivi";
 echo "<hr>ispis unatrag:<br>";
for ($i=count($polje)-1;$i>=0;$i--){
    echo $polje[$i]."<br>";
}

 echo "<hr>ispis svakidrugi unatrag:<br>";
for ($i=count($polje)-1;$i>=0;$i-=2){
    echo $polje[$i]."<br>";
}

echo "<ul style='list-style-type: circle;'>";
foreach ($polje as $value) {
     printf("<li>Ovo je voće: <span style='color:red'>%s</span></li>", ucfirst($value));
}
echo "</ul>";

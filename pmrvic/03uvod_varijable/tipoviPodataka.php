<?php

// cjelobrojni -- int
// s pokretnim tazezom -- float, double

// int ide od -2 milijarde do +2 milijarde

//  float decimalni 1,7*10^308 ovoima 308 nula!!!!

$brooj=3.14;
if(is_float($brooj)){
    echo "varijabla je float";
}
else{
   echo "varijabla nije float"; 
}

$text="Marko";

echo "pozdrav $text";
echo 'pozdrav $text'."<br>";
printf("Moje ime je %s, a omiljeni broj mi je %.1f",$text,$brooj);


echo "<br>";

$imamlove=NULL;  // boolean true, false ili 0-1, NULL je isto false
if($imamlove){
    echo "Party!";
}
else{
    echo "sjedi kući";
}


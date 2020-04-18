<?php

$var='Vrijednost';
var_dump($var);
echo '<br>';

$nekicijelibroj=26;
echo $nekicijelibroj;
echo '<br>';
var_dump($nekicijelibroj);
echo '<br>';
print_r($nekicijelibroj);
echo '<hr>';
echo gettype($nekicijelibroj);
echo '<br>';
echo gettype($var);
echo '<br>';

printf("Vrijednost varijable <b>var</b> je %s, a vrijednost varijable <b>nekicijelibroj</b> je %.0f",$var,$nekicijelibroj);
echo '<br>';
echo "Vrijednost varijable <b>var</b> je " .$var. ", a vrijednost varijable <b>nekicijelibroj</b> je " .$nekicijelibroj;

echo '<br>';

$imamlove1=false;
if($imamlove1){
    echo "Party";
}
else {
    echo "sjedi doma";
}

echo '<br>';

$imamlove2=true;
if($imamlove2){
    echo "Party";
}
else {
    echo "sjedi doma";
}

echo '<br>';

$imamlove3=0;
if($imamlove3){
    echo "Party";
}
else {
    echo "sjedi doma";
}

echo '<br>';

$imamlove4=7;
if($imamlove4){
    echo "Party";
}
else {
    echo "sjedi doma";
}
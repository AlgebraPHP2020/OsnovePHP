<?php

echo '<strong>1. Koristeći se operatorima usporedbe &nbsp < &nbsp i &nbsp >&nbsp , te iskazom if-else <br>'
. 'provjeri odnos varijabli &nbsp $a = 4 i &nbsp $b = 2 i ispiši poruku.</strong><br><br>';

$a = 7;
$b = 4;

if ($a>$b){
    echo 'Varijabla $a = '.$a.' i veća je od varijable $b = '.$b;
} else if ($a<$b){
    echo 'Varijabla $a = '.$a.' i manja je od varijable $b = '.$b;
} else {
    echo 'Varijabla $a = '.$a.' jednaka je varijabli $b = '.$b;
}

echo '<br><br><strong>2. Napiši program koji rabi dvije varijable $a i $b. Ako je $a veće od $b <br>'
. 'uvećaj $a za 1, a ako je veći $b onda ga umanji za 1. Na kraju ispiši vrijednost varijabli.</strong><br><br>';

$a = 17;
$b = 4;

    echo ' $a = ' . $a . ' $b = ' . $b .'<br><br>';

if ($a>$b){
    
    $a++;
    echo ' $a je veći od $b pa je uvećan za jedan i sad iznosi ' . $a;
    
} else if ($a<$b) {
    
    $b--;
    echo ' $b je veći od $a pa je umanjen za jedan i sad iznosi ' . $b;
    
} else {
    
    echo '$a i $b su jednaki';
    
}


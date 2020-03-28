<?php

echo '<strong>1. Koristeći se operatorima usporedbe &nbsp < &nbsp i &nbsp >&nbsp , te iskazom if-else <br>'
. 'provjeri odnos varijabli &nbsp $a = 4 i &nbsp $b = 2 i ispiši poruku.</strong><br><br>';

$a = 4;
$b = 4;

if ($a>$b){
    echo 'Varijabla $a = '.$a.' i veća je od varijable $b = '.$b;
} else if ($a<$b){
    echo 'Varijabla $a = '.$a.' i manja je od varijable $b = '.$b;
} else {
    echo 'Varijabla $a = '.$a.' jednaka je varijabli $b = '.$b;
}

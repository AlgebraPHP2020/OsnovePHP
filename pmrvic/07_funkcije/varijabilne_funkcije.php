<?php

/* 
 * funkcija moze imati promjenjivo ime
 */

// Definicije funkcija sum() i avg()
function sum()
{
    echo '<br>pokreni sum()<br>';
}
function avg()
{
    echo '<br>pokreni avg()<br>';
}

$func_name = 'sum';
$func_name();

$func_name = 'avg';
$func_name();

//$func_name='nestotrece';
//$func_name();
/*
switch($func_name){
case 'sum':
sum();
break;
case 'avg()':
avg();
break;
}*/

//$func_name();


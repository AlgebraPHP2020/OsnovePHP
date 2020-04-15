<?php

$imena=array('Josipa','Ivan','Matej','Dinko','Matilda');

ksort($imena);

foreach ($imena as $key => $ime) {
    echo $key. '=>' .$ime. '<br/>';    
}

echo '<br>';
echo 'Broj polja jednak je broju ' .count($imena);
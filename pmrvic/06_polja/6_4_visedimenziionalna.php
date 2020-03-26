<?php

$elem1=array(1,5,7);
$elem2=array(4,8,9);
$elem3=array(2,3,6);

$visedimpolje= array($elem1,$elem2,$elem3);

echo "<pre>";
print_r($visedimpolje);
echo "</pre>";

foreach ($visedimpolje as $value) {
    foreach ($value as $key => $val) {
        echo "$val * 2 =".($val * 2)."  | ";
    }  
    echo "<br>";
}

<?php

/* 


Array
(
    [0] => 2
    [1] => 3
)
Array
(
    [0] => 2
    [1] => 3
    [2] => 4
)

 */

function sum() {
    print_r(func_get_args());
    $rez=0;
    foreach (func_get_args() as $key => $value) {
       $rez+=$value; 
    }
    return $rez;
}
echo sum(2,3);
echo '<hr>';
echo sum(2,3,4);
echo '<hr>';
echo sum(4,4,4,8);
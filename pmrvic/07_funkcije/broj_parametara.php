<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function sum() {
    //print_r(func_get_args());
    $rez=0;
    foreach (func_get_args() as $key => $value) {
       $rez+=$value; 
    }
    echo '<b> Broj parametara:'. func_num_args() ." </b>";
    return $rez;
    
}
echo sum(2,3);
echo '<hr>';
echo sum(2,3,4);
echo '<hr>';
echo sum(4,4,4,8);

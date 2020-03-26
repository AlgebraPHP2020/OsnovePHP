<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$naziv=7;
switch ($naziv) {
    case 'algebra': echo "Naziv je algebra"; break;
    case 'macka': echo "Naziv je cat"; break;
    case 'pas': echo "Naziv je dogi"; break;
    case 7: echo "Naziv je broj sedam"; break;
    default: echo "Naziv nije nista od ponudjenog!";
        break;
}

// propadanje
$naziv="mackas";
switch ($naziv) {
    case 'algebra': echo "Naziv je algebra"; break;
    case 'macka':
    case 'pas': 
    case 'zec': echo "Naziv je kucni ljubimmamac"; break;
    case 7: echo "Naziv je broj sedam"; break;
    default: echo "Naziv nije nista od ponudjenog!";
        break;
}
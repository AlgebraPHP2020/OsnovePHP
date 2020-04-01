<?php

/* 
 * ZADANI parametri
 * ili DEFAULTNI PARAM
 */

function show_naslov($param='No title') {
    echo $param;
}

show_naslov("Robocop");
show_naslov();


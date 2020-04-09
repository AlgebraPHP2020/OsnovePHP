<?php

/**
 * Fiat nasljedjuje klasu Auto i dopunjuje ju fiatizmima
 *
 * @author Algebra
 */
class Fiat extends Auto {
    function __construct() {
        parent::__construct("Fiat","white", 147 );
    }
}
    


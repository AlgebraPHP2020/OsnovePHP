<?php

/**
 * Fiat nasljedjuje klasu Auto i dopunjuje ju fiatizmima
 *
 * @author Algebra
 */
class Fiat extends Automobil {
    public $model="Uno";
    function __construct() {
        parent::__construct("Fiat","white", 147 );
    }
    public function __toString() {
       // parent::__toString();
             return '<ul class="nav nav-pills" role="tablist">'
                . '<li role="presentation" class="active"><a href="#">'
                . '<i class="fas fa-car-side" style="color:'.$this->boja.'"></i>&nbsp;&nbsp;'
                . $this->marka
                . '&nbsp;<span class="badge" style="width: '.$this->snaga.'px;">'
                . $this->model
                . '</span>'
                . '<span class="badge">'
                . $this->getBrzina()
                . '</span></a></li></ul>';
    }



}
    


<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Toyota
 *
 * @author Algebra
 */
class Toyota extends Fiat implements JeepInterface{
    //put your code here
    public function getSlepani() {
         return $this->uslepu;
    }

    public function shlep($a) {
        $this->uslepu=$a;
        $this->setMaxBrzina(45);
        $this->ubrzaj();
        // upali sva 4
        // postavi potrosnju goriva x 2
        // i tako dalje....
        // postavljam istu max brzinu i na slepani auto
        $this->uslepu->setMaxBrzina(45); // postavi i slepani 
        $this->uslepu->ubrzaj();  // resetiraj brzinu na nulu 
    }

    public function upaliSva4() {
        
    }

    public function dugaSvjetla() {
        
    }

}

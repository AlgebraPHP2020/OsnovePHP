<?php

/**
 * Ovo je nasa prva klasa Auto
 *
 * @author Algebra
 */
abstract class Automobil {  // blueprint ili opis auta

    private $trenutnaBrzina=0;
    private $maxBrzina=100;   //  km/h?
    public $boja;  //svojstvo
    public $marka;
    public $snaga;

    /**
     * Kreiraj novi auto, ako ne zadas nista model je BMW, boja crna
     * 
     * @param string $model
     * @param string $boja
     */
    public function __construct(string $marka="BMW",string $boja="black", int $snaga=100 )
    {
        $this->boja = $boja;
        $this->marka = $marka;
        $this->snaga = $snaga;
    }
    public function getBrzina() {
     return sprintf ("%.2f kmh",$this->trenutnaBrzina);    
    }
    public function setMaxBrzina(int $speed) {
     $this->maxBrzina=$speed;    
    }
    /**
     * Unesi novu boju u obliku red, blue ili html colors
     * 
     * @param string $novaboja
     */
    public function promjeniBoju(string $novaboja) {
        $this->boja = $novaboja;
    }
    public function promjeniSnagu(int $novasnaga) {
        $this->snaga = $novasnaga;
    }
    public function ubrzaj(int $razina=1, int $sekundi=0){  // 1-5 pet je papucica do daske!
        $this->trenutnaBrzina= $this->maxBrzina*atan($sekundi*$razina*0.2)/(pi()/2); // ovaj atan vraca od 0-1
    }

    public function __toString() {
        return '<ul class="nav nav-pills" role="tablist">'
                . '<li role="presentation" class="active"><a href="#">'
                . '<i class="fas fa-car-side" style="color:'.$this->boja.'"></i>&nbsp;&nbsp;'
                . $this->marka
                . '&nbsp;<span class="badge" style="width: '.$this->snaga.'px;">'
                . $this->boja
                . '</span><span class="badge">'
                . $this->trenutnaBrzina
                . '</span></a></li></ul>';
    }

}

/*
 // samo primjer kako radi klasa
$a=new Auto();  // instanca klase Auto, fizicka manifestacija

echo "<br>Boja ovog automobila je ".$a->boja;

$a->promjeniBoju("red");

echo "<br>Boja ovog automobila je ".$a->boja;

echo $a;
 
 */
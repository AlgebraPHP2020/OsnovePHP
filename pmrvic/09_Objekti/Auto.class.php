<?php

/**
 * Ovo je nasa prva klasa Auto
 *
 * @author Algebra
 */
class Auto {  // blueprint ili opis auta

    public $boja;  //svojstvo
    public $model;
    public $snaga;

    /**
     * Kreiraj novi auto, ako ne zadas nista model je BMW, boja crna
     * 
     * @param string $model
     * @param string $boja
     */
    public function __construct(string $model="BMW",string $boja="black", int $snaga=100 )
    {
        $this->boja = $boja;
        $this->model = $model;
        $this->snaga = $snaga;
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

    public function __toString() {
        return '<ul class="nav nav-pills" role="tablist">'
                . '<li role="presentation" class="active"><a href="#">'
                . '<i class="fas fa-car-side" style="color:'.$this->boja.'"></i>&nbsp;&nbsp;'
                . $this->model
                . '&nbsp;<span class="badge" style="width: '.$this->snaga.'px;">'
                . $this->boja
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
<?php

class covjek
{
    public $ime;
    
    function __construct($novo_ime)
    {
        $this->ime=$novo_ime;
    }
    
function get_ime()
{
    return $this->ime;
    
}
}

$kupac=new covjek('Ivan');
echo $kupac->ime;

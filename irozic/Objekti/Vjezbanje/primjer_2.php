<?php

class covjek
{
    public $ime;
    
    function set_ime($novo_ime)
    {
        $this->ime=$novo_ime;
    }
    
function get_ime()
{
    return $this->ime;
    
}
}

//primjer 1.
$kupac=new covjek;
$kupac->set_ime('Ivan');
echo $kupac->get_ime();

echo "<br>";
//primjer 2.
echo $kupac->ime;


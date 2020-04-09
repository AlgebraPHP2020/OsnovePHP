<?php

echo "<b>Primjer 1 str. 95</b>"; //Definiranje klase i izrada objekta
echo "<br>";

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
$kupac= new covjek;
$kupac->set_ime('Igor');

echo $kupac ->get_ime ();
echo "<br>";
echo $kupac->ime;
echo "<br>";

echo "<b>Primjer 2 str. 96</b>"; //Konstruktor
echo "<br>";

class covjek1
{
    public $ime1;
    function __construct($novo_ime1)
    {
     $this->ime1=$novo_ime1;   
}
function get_ime1 ()
{
    return $this->ime1;
}
}
$kupac1=new covjek1('Branko');
echo $kupac1->ime1;
echo "<br>";

echo "<b>Primjer 3 str. 96</b>"; //Destruktor
echo "<br>";

class zgrada
{
    public $naziv;
    
    function __construct($naziv) {
    $this->naziv = $naziv;
  }
    function __destruct()
    {
    echo 'zgrada je unistena';
    }  
}
$bolnica=new zgrada('bolnica');

    

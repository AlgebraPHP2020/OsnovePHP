<?php
$polje=array('Tesla','Edison','Bell','Einstein','Aristotel','Faraday','Curie','Newton');

for($i=0; $i<=7; $i++)
{
    echo $polje[$i]."<br/>";
}

echo "<br>";
// prikaz uz pomoć funkcije count

$polje1=array('Tesla','Edison','Bell','Einstein','Aristotel','Faraday','Curie','Newton');

for($d=0; $d<count($polje1); $d++)
{
    echo $polje1[$d]."<br/>";
}

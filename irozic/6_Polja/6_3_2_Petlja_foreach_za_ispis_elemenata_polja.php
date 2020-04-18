<?php
$polje=array('Tesla','Edison','Bell');

foreach ($polje as $key =>$ime)
{
    echo 'Element broj ' .$key. ' ima vrijednost ' .$ime. "<br/>";
}

echo '<hr>';
// primjer kada ključevi nisu brojevi već tekst. vrijednosti
$ucenici=array('1'=>array('ime'=>'Ivan','prezime'=>'Ivić'),
              '2'=>array('ime'=>'Mate','prezime'=>'Matić'),
              '3'=>array('ime'=>'Ante','prezime'=>'Antić'));

foreach($ucenici as $br_ucenika => $podaci)
{
    foreach($podaci as $naziv_podataka=>$vrijednost_podataka)
    {
        echo 'ucenik br. '.$br_ucenika.' - '.$naziv_podataka.': '.$vrijednost_podataka. '<br/>';
    }
}




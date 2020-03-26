<?php

$polje=array('Tesla','Edison','Bell');


//      <ime polja> kljuc=>vrijednost
foreach ($polje as $key => $value) {
    echo "pod kljucem $key se nalazi vrijednost $value <br>";
}


// multiarray ili visedimenzionalno polje
$ucenici=array(
    '1'=>array(
        'ime'=>'Ivan',
        'prezime'=>'Ivanic'
    ),
    '2'=>array(
        'ime'=>'Mate',
        'prezime'=>'Matic'
    ),
    '3'=>array(
        'ime'=>'Ante',
        'prezime'=>'Antic'
    )
//    ,'4'=>array(
//        'ime'=>'Mara',
//        'prezime'=>'Maric')     
);

print_r($ucenici);

foreach ($ucenici as $key => $value) {
    echo "<hr>Ucenik pod brojem $key:<br>";
    foreach ($value as $naziv => $vrijednost) {
            echo "$naziv:<span style='font-weight: bold;'>$vrijednost </span>";    
    }
}

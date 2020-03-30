<?php
/**
 *  Broj elementa u polju
 */

$fruits=array(0=>'limun','b'=>'naranca',1=>'banana','a'=>'jabuka');

$broj_elem=0;

foreach ($fruits as $komad_voca_iz_polja_fruits) {
    $broj_elem++;
}

Echo "Ukupno ima $broj_elem elemenata polja!<br>";

// pomocu funkcije count()
printf("Ukupno ima %s elemenata polja!",count($fruits));




Echo "<hr>";
/**
 *  Zadnji element u polju
 */
foreach ($fruits as $komad_voca_iz_polja_fruits) {
}
echo "zadnji element je: ".$komad_voca_iz_polja_fruits."<br>";

// pomocu funkcije end()
printf("zadnji element je: %s", end($fruits));


Echo "<hr>";
/**
 *  Pretrazivanje polja
 */

foreach ($fruits as $kljuc=>$value) {
    if($value=='banana'){  // ako ne nadje pojam dati ce nam zadnji kljuc
        break;
    }
}
echo "trazeni pojam se nalazi pod kljucem ".$kljuc."<br>";

Echo "<hr>";
/**
 *  Pretrazivanje polja pomoicu funkcije array_search():mixed ili FALSE
 */
$key= array_search('bannana', $fruits);
if($key != FALSE){
echo "trazeni pojam se nalazi pod kljucem ".$key."<br>";
}
else{
    echo "trazeni pojam nije pronadjen";
}

Echo "<hr>";
/**
 *  Pretrazivanje polja pomoicu funkcije in_array():bool
 */
if(in_array('banana', $fruits)){
echo "trazeni pojam je pronadjen<br>";
}
else{
    echo "trazeni pojam nije pronadjen";
}
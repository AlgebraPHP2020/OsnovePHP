<?php

// primjer indeksnog višedimenzionalnog polja
$elem1=array(1,5,7);
$elem2=array(4,8,9);
$elem3=array(2,3,6);

$multi_array=array($elem1,$elem2,$elem3);

echo '<pre>';
print_r($multi_array);
echo '</pre>';

echo '<br>';
echo $multi_array[1][2];

echo '<br>';
foreach ($multi_array as $elem)
{
    foreach ($elem as $val) {
        
       echo $val;
    }
}

// primjer asocijativnog višedimenzionalnog polja
$polje1=array('ime'=>'Petar','prezime'=>'Petrić','MB'=>'123');
$polje2=array('ime'=>'Ante','prezime'=>'Antić','MB'=>'234');
$polje3=array('ime'=>'Mate','prezime'=>'Matić','MB'=>'567');

$multi_array1=array('ucenik1'=>$polje1,'ucenik2'=>$polje2,'ucenik3'=>$polje3);

echo '<pre>';
print_r($multi_array1);
echo '</pre>';

echo '<br>';
echo $multi_array1['ucenik3']['MB'];

<?php

echo '<h4>1.Zadatak</h4>';

$imena=[
    'Branka','Ivan','Jakov','Mario','Marko'
];
foreach ($imena as $key => $value) {
    echo $value."<br>";
}

echo '<h4>2.Zadatak</h4>';

//$imena2=array();
$broj=5;
foreach ($imena as $key => $value) {
    $imena2['ime'.$broj]=$value;
    $broj--;
}
echo "<pre>";
print_r($imena2);
echo "</pre>";

echo '<h4>3.Zadatak</h4>';

asort($imena2);

for ($i=0;$i<count($imena2);$i++) {
    
}
print_r($imena2);

echo '<h4>4.Zadatak</h4>';

ksort ($imena2);

foreach ($imena2 as $key => $value) {
    echo $key ."=> ". $value . "<br>";
}

echo '<h4>5.Zadatak</h4>';

$polje = array();

for ($i=1;$i<=100;$i++) {
    $polje[]=$i;
}

foreach($polje as $value) {
    echo $value."," ;
};
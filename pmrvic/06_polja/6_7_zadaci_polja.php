<?php
// 1.
$imena=[
    'marko','janko','kiki','lida','sanja'
];
foreach ($imena as $key => $value) {
    echo $value." ";
}


//2. 
$imena=[
    'marko','janko','kiki','lida','sanja'
];
echo "<hr>";
unset($imena[1]);
unset($imena[2]);
array_splice( $imena, 1, 0, [['ime5'=>'Fredy'],TRUE]);
array_splice( $imena, 2, 0, [['ime4'=>'Reba'],TRUE]);
print_r($imena);

// drugi nacin
$imena=[
    'marko','janko','kiki','lida','sanja'
];

$imena2=array();
$broj=5;
foreach ($imena as $key => $value) {
    $imena2['ime'.$broj]=$value;
    $broj--;
}
echo "<pre>";
print_r($imena2);
echo "</pre>";

// Z3

asort($imena2);

foreach ($imena2 as $key => $value) {
    echo "Ime: $value a njegov kljuc je [$key] <br>";
}

echo "<hr>";
// Z4
ksort($imena2);

foreach ($imena2 as $key => $value) {
    echo "Ime: $value a njegov kljuc je [$key] <br>";
}


// for i foreeach

$brojovi=array();
for ($i = 1; $i <= 100; $i++) {
    $brojovi[]=$i;
}
foreach ($brojovi as $value) {
    echo $value.", ";
}

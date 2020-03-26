<?php

echo "<i><ins>Ovo je moja zadaca broj 2 (str.54)</ins></i>";
    echo "<br><br>";
    
echo "<b>Zadatak broj 1</b>";
echo "<br>";

$a=4;
$b=2;
if($a>$b):
    echo "Varijabla a je veca od varijable b.";
else: 
    echo "Varijabla a je manja ili jednaka od varijable b.";
endif;
echo "<br><br>";

echo "<b>Zadatak broj 1 - alternativno rjesenje</b>";
echo "<br>";

$a=4;
$b=2;
if($a>$b){
    echo "Varijabla a je veca od varijable b.";
}
else{
    echo "Varijabla a je manja ili jednaka od varijable b.";
}

  echo "<br><br>";
    
echo "<b>Zadatak broj 2</b>";
echo "<br>";

$a=4;
$b=4;

if ($a>$b){
    $a++;
}        
elseif ($a<$b){
    $a--;
}
else {
    echo "Varijable a i b su jednake.<br>";
}
echo "Varijabla a = $a.<br>";
echo "Varijabla b = $b.<br>";

echo "<br><br>";

echo "<b>Zadatak broj 3</b>";
echo "<br>";

$a=1;
$kraj=50;
while ($a<=$kraj){
    echo $a."<br>";
    $a++;    
}

echo "<br><br>";

echo "<b>Zadatak broj 4</b>";
echo "<br>";
 
$a=20;
for ($i=20; $i<30; $i++){
    echo "a= ".$a." + ".($i+1)."<br>";
    $a=$a+$i+1; 
}
echo "Varijabla a iznosi ".$a.".";

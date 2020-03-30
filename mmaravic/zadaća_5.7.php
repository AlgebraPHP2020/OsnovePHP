<?php

$a=4;
$b=2;

if ($a>$b) {
    echo "varijabla a je veća od varijable b";
}

if ($b>$a) {
    echo "varijabla b je veća od varijable a";
}



$a=47;
$b=29;


echo "<br>";


if($a>$b) {
    $a++;
    echo "varijabla a je veća od varijable b";
} 

else {
    $b--;
    "varijabla b je veća od avarijable a";
}


echo "<br>";



$i=0;

while ($i<50){
    $i++; 
    echo "$i <hb>";
            
}


echo "<br>";


$zbroj=0;
for ($i = 20; $i <= 30; $i++) {
    $zbroj += $i;
  
}

echo $zbroj;

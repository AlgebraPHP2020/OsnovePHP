<?php

// Primjer 1.
$i=1;
$zbroj=0;

while($i<=100)
{
    $zbroj=$zbroj+$i;
    $i++;
    
if($zbroj>=80)
    break; // izlaz iz petlje
}

echo $i;
echo "<br>";
echo $zbroj;

echo "<hr>";
// Primjer 2.
$x=0;
$y=0;

while($x<=10)
{
    while($y<=10)
    {
        echo 'kordinata x='.$x.', y='.$y;
        $y++;
    }
    
    $y=0;
    $x++;
}

echo "<hr>";
// Primjer 3.
$x1=0;
$y1=0;
$counter = 1;

while($x1<=10)
{
    while($y1<=10)
    {
        echo 'kordinata x='.$x1.', y='.$y1;
    $y1++;
    $counter++;
    
    if($counter > 110)
        break 2;
        
    }
    
    $y1=0;
    $x1++;
    $counter++;
}
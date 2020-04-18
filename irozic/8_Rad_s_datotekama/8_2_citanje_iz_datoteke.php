<?php

echo'Primjer 1.';
echo "<br>";

$filename = 'ucenici.txt';

$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);

echo $contents;

echo "<br>";
echo "<br>";

echo'Primjer 1.1.';
echo "<br>";
$filename="ucenici.txt";
$mode='r';

$handle=fopen($filename, $mode);
$contents= fread($handle, 20); 
echo filesize($filename);

if(feof ($handle )){
    echo "<br>dosao sam do kraja file";
}
else{
    echo "<br>jos ima texta za citanje";
}
echo '<hr>';


echo'Primjer 2.';
echo "<br>";
$filename='ucenici.txt';

$datoteka=file($filename);

foreach ($datoteka as $line_num => $line)
{
echo 'Linija #<b>'.$line_num.'</b> :'.$line.'<br/>';    
}


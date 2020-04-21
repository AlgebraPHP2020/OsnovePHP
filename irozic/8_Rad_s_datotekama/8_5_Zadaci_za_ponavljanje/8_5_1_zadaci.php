<?php

echo '1. Napišite program koji čita sadržaj iz neke tekstualne datoteke.';
echo '<br>';
echo '<br>';
echo 'Rješenje:';
echo '<br>';
echo '<br>';
$filename='ucenici.txt';

$datoteka=file($filename);

foreach ($datoteka as $line_num => $line)
{
echo 'Linija #<b>'.$line_num.'</b> :'.$line.'<br/>';    
}


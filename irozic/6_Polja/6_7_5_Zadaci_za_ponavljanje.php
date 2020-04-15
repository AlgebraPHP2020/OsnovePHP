<?php

$polje=array();

for($i=1; $i<=100; $i++)
{
    $polje[]=$i;
}

foreach ($polje as $broj) {
    echo $broj."<br/>";
}

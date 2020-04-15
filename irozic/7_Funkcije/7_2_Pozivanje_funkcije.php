<?php

$polje=array('tesla','edison','bell');

if(is_array($polje))
{
    foreach($polje as $ime)
    {
        echo $ime.'<br/>';
    }
}
else
{
    echo 'nije polje';
}

echo 'Danas je mjesec: ' .date('F').', a datum je ' .date('d.m.y');

echo '<br>';

echo str_repeat('= ', 10);


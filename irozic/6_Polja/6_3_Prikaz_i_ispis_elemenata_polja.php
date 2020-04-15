<?php
$polje=array('Tesla','Edison','Bell');

// prvi način ispisa polja preko ključa
echo $polje[1];
echo "<br>";
echo "<br>";
// drugi način ispisa polja preko petlje for
for($i=0; $i<=2; $i++)
{
    echo $polje[$i] ."<br/>";
}

echo "<br>";
// treći način ispisa polja preko petlje foreach
foreach($polje as $ime)
{
    echo $ime ."<br/>";
}

echo "<br>";
// četvrti način ispisa polja preko funkcije print_r
$polje1=array('Tesla','ime'=>'Edison','Bell');

echo '<pre>';
print_r($polje1);
echo '</pre>';

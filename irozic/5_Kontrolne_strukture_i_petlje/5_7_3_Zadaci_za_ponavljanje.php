<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>5.7 Zadaci za ponavljanje</title>
    <p>3. S pomoću petlje while ispišite brojeve od 1 do 50 na ekran, jedan ispod drugog.</p>
</head>
<body>
    <p><b>Rješenje kako napisati:</b></p>
    $a=1;<br>
<br>
while($a<50)<br>
{<br>
        echo $a.'<br/>';<br>
        $a++;<br>
}<br>
<br>
echo $a;<br>
    <p><b>Rezultat PHP-a:</b></p>
</body>
</html>

<?php
$a=1;

while($a<50)
{
        echo $a.'<br/>';
        $a++;
}

echo $a;
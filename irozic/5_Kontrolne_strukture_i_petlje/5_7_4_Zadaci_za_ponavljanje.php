<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>5.7 Zadaci za ponavljanje</title>
    <p>4. S pomoću petlje for zbrojite brojeve od 20 do 30 te zbroj ispišite na ekran.</p>
</head>
<body>
    <p><b>Rješenje kako napisati:</b></p>
    $zbroj=0;<br>
<br>
for($i=20; $i<=30; $i++)<br>
{<br>
    $zbroj+=$i;<br>
}<br>
<br>
echo $zbroj;<br>
    <p><b>Rezultat PHP-a:</b></p>
</body>
</html>

<?php
$zbroj=0;

for($i=20; $i<=30; $i++)
{
    $zbroj+=$i;
}

echo $zbroj;
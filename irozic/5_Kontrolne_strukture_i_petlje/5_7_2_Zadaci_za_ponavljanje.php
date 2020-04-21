<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>5.7 Zadaci za ponavljanje</title>
    <p>2. Napišite program koji rabi dvije varijable $a i $b. Definirajte im proizvoljne brojčane vrijednosti. Ako je $a veće od $b, onda uvećajte...</p>
</head>
<body>
    <p><b>Rješenje kako napisati:</b></p>
    $a=4;<br>
    $b=2;<br>
<br>
if($a>$b)<br>
{<br>
    echo 'Varijabla a je veća od b';<br>
    $a++;<br>
}<br>
else {<br>
    echo 'Varijabla a nije veća od b';<br>
    $a--;<br>
}<br>
    <p><b>Rezultat PHP-a:</b></p>
</body>
</html>

<?php
$a=4;
$b=2;

if($a>$b)
{
    echo 'Varijabla a je veća od b';
    $a++;
}
else {
    echo 'Varijabla a nije veća od b';
    $a--;
}

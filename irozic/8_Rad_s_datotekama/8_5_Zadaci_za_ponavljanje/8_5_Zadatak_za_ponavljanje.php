<!DOCTYPE html>
<html lang="hr">

    <head>
        <meta charset="UTF-8">
        <title>8.5 Obrazac</title>
    </head>
    <body style="background-color:DodgerBlue;">
        <h2 style="color:yellow"><b>Evidencijska lista studenata:</b></h2>
    </body>
</html>

<?php
$filename = 'studenti.txt';

$datoteka = file($filename);

foreach ($datoteka as $line_num => $line) {
    echo '<font color="red"> '.$line.' </font><br/>';
}

echo "<br>";

if(isset($_POST["btn"]))
{
    $filename='studenti.txt';

    $handle=fopen($filename, 'w');
    
    fwrite($handle, $_POST["txt"]);
    
    fclose($handle);
}

$filename='studenti.txt';

echo '
<form method="POST" action="">
Dodajte na listu sljedeći redni broj te Vaše ime i prezime:<br><br>
<textarea cols="30" rows="15" name="txt">';

$datoteka=file($filename);

foreach ($datoteka as $line_num => $line)
{
    echo $line;
}

echo '</textarea>
<br />
<input type="submit" name="btn" value="Spremi unos" />
</form>';
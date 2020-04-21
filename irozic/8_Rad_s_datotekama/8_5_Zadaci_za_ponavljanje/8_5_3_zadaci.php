<?php
if(isset($_POST["btn"]))
{
    $filename='ucenici.txt';

    $handle=fopen($filename, 'w+');
    
    fwrite($handle, $_POST["txt"]);
    
    fclose($handle);
}

echo '<b>3. Napišite program preko kojeg korisnik dohvaća sadržaj...</b>';
echo '<br>';
echo '<br>';
echo 'Rješenje:';
echo '<br>';
echo '<br>';

$filename='ucenici.txt';

echo '
<form method="POST" action="">
Upišite Vaše ime i prezime:
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



?>

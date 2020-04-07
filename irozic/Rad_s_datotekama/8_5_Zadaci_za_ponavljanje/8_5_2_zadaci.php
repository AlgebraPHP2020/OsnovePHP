<?php

echo '<b>2. Pripremite obrazac (formu) u koji korisnik upisuje neki tekst...</b>';
echo '<br>';
echo '<br>';
echo 'Rješenje:';
echo '<br>';
echo '<br>';

echo '
<form method="POST" action="">
Upišite Vaše ime i prezime: <input type="text" name="txt" value=""/><br/>
<input type="submit" name="btn" value="Spremi unos"/>
</form>';

if(isset($_POST["btn"]))
{
    $filename='ucenici.txt';

    $handle=fopen($filename, 'a+');
    
    fwrite($handle, $_POST["txt"]);
    
    fclose($handle);
}

?>

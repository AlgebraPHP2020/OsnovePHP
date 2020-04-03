<?php
$filename = "ucenici.txt";

$datoteka = file($filename);

print_r($datoteka);

echo "Molim neka je javi: " . $datoteka[2];
echo "<dl>";
foreach ($datoteka as $key => $value) {
    echo "<dt>" . "<b>LINIJA TEXTA: </b>" . "</dt>";
    echo "<dd>" . $value . "</dd>";
}
echo "</dl>";
?>
<div style="color: indianred; font-family: fantasy; font-size: large">
    <pre>
        <?php
        echo file_get_contents($filename);
        ?>    
    </pre>
</div>
<div style="color: indianred; font-family: fantasy; font-size: large">
    <?php
    // Procitaj mi file 14 znakova pocevsi od 20-tog
    echo file_get_contents($filename, FALSE, NULL, 20, 14);
    ?>  
</div>





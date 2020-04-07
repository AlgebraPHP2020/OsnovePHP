<?php

if(isset($_POST['dodaj'])){  // netko je pritisnio dugme "dodaj txt"
   $filename= 'Omeni.txt';
$handle= fopen($filename, 'w');
fwrite ($handle, $_POST['nastext']);
fclose ($handle); 
}



echo "<i><ins>Ovo je moja zadaca broj 3 (str.91)</ins></i>";
    echo "<br><br>";
    
echo "<b>Zadatak broj 1 Citanje</b>";
echo "<br>";

$filename= 'Omeni.txt';

$handle= fopen($filename, 'r');
$contents = fread ($handle, filesize ($filename));
fclose ($handle);

echo $contents;

    echo "<br><br>";
    
echo "<b>Zadatak broj 2</b>";
echo "<br>";


if(isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = $_POST['field1'] . '-' . $_POST['field2'] . "\n";
    $filename = "podaci_forma.txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   //die('no post data to process');
}
    
echo "<br><br>";
    
echo "<b>Zadatak broj 3</b>";
echo "<br>";

$filename1='Omeni.txt';

$datoteka=file($filename1);

foreach ($datoteka as $line_num => $line) 
{
    echo 'Linija#<b>'.$line_num.'</b>:'.$line.'<br/>';
}

//$handle1=fopen($filename1, 'a');
//fwrite($handle1, 'I jos uvijek pokusavam rijesiti zadacu.');
//fclose($handle1);
$nekitext="";
foreach ($datoteka as $line_num => $line) 
{
    $nekitext.=$line;
}

?>
<h1>Izmjena texta</h1>
<form method="post" action="#">
    <textarea name="nastext" cols="50" rows="15"><?=$nekitext?></textarea><br>
    <input type="submit" name="dodaj" value="Dodaj izmjenjeni text">
</form>



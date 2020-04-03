<?php

/* 
 
Ucenici.txt (filesize=70)
1. Ivan Ivic
2. Petar Peric
3. Marko Markic
4. Ana Anic
5. Ante Antic
 */

$filename="ucenici.txt";
$mode='r';

$handle=fopen($filename, $mode);
//$contents= fread($handle, filesize($filename));
$contents= fread($handle, 35); 
echo filesize($filename);
if(feof ($handle )){
    echo "<br>dosao sam do kraja file";
}
else{
    echo "<br>jos ima texta za citanje";
}
echo '<hr>';
echo $contents;
$contents= fread($handle, 36); // premda je filesize 70, tek kod 35+36 je kraj
echo $contents;

if(feof ($handle )){
    echo "<br>dosao sam do kraja file";
}
else{
    echo "<br>jos ima texta za citanje";
}


echo "<hr>manualni pomak pokazivaca<br>";
fseek ( $handle , 10 );

$contents= fread($handle, 10); 
echo $contents;
if(feof ($handle )){
    echo "<br>dosao sam do kraja file";
}
else{
    echo "<br>jos ima texta za citanje";
}
echo "<br> Trenutno se nalazim na lokaciji ".ftell ($handle );
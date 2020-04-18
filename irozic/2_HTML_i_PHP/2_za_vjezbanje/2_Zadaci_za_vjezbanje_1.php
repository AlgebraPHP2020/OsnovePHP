<?php
// ovo je php komentar
# ovo je linijski komentar
/* 
    a ovo je blok komentar,
    ima više linija
 */

echo 'Ovo ispisuje tekst';

$polje=['jabuka', 'višnja', 'kruska', 'orah'];
echo "<u1>";
foreach ($polje as $key => $value) {
    
    echo "<li>".$value." se nalazi pod ključem:".$key."</li>";
}
echo "</u1>";

echo "Kruškovača se pravi od ".$polje[2];



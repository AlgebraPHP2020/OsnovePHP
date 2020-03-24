<?php

// for ( START ; STOP ; STEP){ body }
// brojevi 0-9
echo "<hr><h3>brojevi 0-9</h3>";
for ($i = 0; $i < 10; $i++) {
    echo "$i ";
}
echo "<hr><h3>brojevi 0-9 po 2</h3>";
// brojevi 0-9 po 2
for ($i = 0; $i < 10; $i+=2) {
    echo "$i ";
}
echo "<hr><h3>brojevi 0-9 po 3</h3>";
for ($i = 0; $i < 10; $i+=3) {
    echo "$i ";
}

echo "<hr><h3>brojevi 7-17 po 2</h3>";
for ($i = 7; $i <= 17; $i+=2) {
    echo "$i ";
}

echo "<hr><h3>brojevi 77-17 po -1</h3>";
for ($i = 77; $i >= 17; $i--) {
    echo "$i ";
}

echo "<hr><h3>brojevi 77-17 po -7</h3>";
for ($i = 77; $i >= 17; $i-=7) {
    echo "$i ";
}


echo "<hr><h3>brojevi od 853 do 127 djeljivi sa 7 i sa 4</h3>";
for ($i = 853; $i >= 127; $i--) {
    if($i%7==0 && $i%4==0){
      echo "$i ";  
    }   
}
echo "<hr><h3>brojevi od 853 do 127 samo ne djeljivi sa 7 i sa 4</h3>";
for ($i = 853; $i >= 127; $i--) {
    if($i%7==0 && $i%4==0){
      continue;
    }   
    echo "$i ";  
}
echo "<hr><h3>brojevi od 853 do 127 samo ne djeljivi sa 7 i sa 4</h3>";
for ($i = 853; $i >= 127; $i--) {
    if($i%7==0 && $i%4==0){
      echo "<span style='color:red'>$i </span>"; 
      continue;
    }   
    echo "$i ";  
}
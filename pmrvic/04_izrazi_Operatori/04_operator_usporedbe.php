<?php

$a=4;  //int
$b=4.0;  //float

// jednako
if($a == $b){
    echo "a i be su jednaki";
}
else{
    echo "nisu jednaki";
}

echo "<br>";
// identično
if($a === $b){
    echo "a i be su identični";
}
else{
    echo "nisu identični<br>";
    var_dump($b);
    var_dump($a);
}
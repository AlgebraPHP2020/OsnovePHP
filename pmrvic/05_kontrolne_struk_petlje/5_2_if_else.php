<?php

//41 stranica, zadatak 5.2 if else

$a=2;

if($a==1){ //samo boolean TRUE/FALSE
echo "varijabla a jednaka jedan";
}
else{
echo "varijabla a jednaka dva";
}


//42 stranica, drugi sivi okvir

$a=55;

if($a<=2){ //samo boolean TRUE/FALSE
echo "varijabla a je manja ili jednaka 2, uvećavam ju";
$a++;
}
else {
    echo "varijabla a je veca od broja dva";
$a=1;
}
echo "<br>varijabla a je sada:".$a;


//-------------
// ispitaj duljinu naslova i prema tome granaj program

$naziv="Al";
if(strlen($naziv)>10){
    echo "<br>naziv je predugacak, skrati";
}
else if ((strlen($naziv)>=5) && (strlen($naziv)<=10)){
    echo "<br>naziv je u dozvoljenom rasponu duljine";
}
else{
    echo '<br>naziv je prekratak: $naziv';
}
echo "<br>";
var_dump($naziv);
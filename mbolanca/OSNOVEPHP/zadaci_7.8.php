<?php

echo '<h4>1.Zadatak</h4>';

function hr_naziv (){
    switch (date('n')){
        case '1':$mjesec='Siječanj'; break;
        case '2':$mjesec='Veljača'; break;
        case '3':$mjesec='Ožujak'; break;
        case '4':$mjesec='Travanj'; break;
        case '5':$mjesec='Svibanj'; break;
        case '6':$mjesec='Lipanj'; break;
        case '7':$mjesec='Srpanj'; break;
        case '8':$mjesec='Kolovoz'; break;
        case '9':$mjesec='Rujan'; break;
        case '10':$mjesec='Listopad'; break;
        case '11':$mjesec='Studeni'; break;
        default :$mjesec='Prosinac'; 
    }
    return $mjesec;
}

echo "Ovo je mjesec ".hr_naziv().".";

echo '<h4>2.Zadatak</h4>';

$ucenici = [
         ['Branka','Bračko']
        ,['Ivan','Rozić']
        ,['Jakov','Sinovčić Perković']
        ,['Mario','Škegro']
        ,['Marko','Maravić']
    ];

function table($ucenici) {
    echo "  <table border='1'>";
    echo "<tr><th>Ime</th><th>Prezime</th></tr>";
    foreach ($ucenici as $key => $ime) {
        echo "<tr>";
        foreach ($ime as $key => $value) {
          echo  "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

table($ucenici);

echo '<h4>3.Zadatak</h4>';

function sum ($a,$b) {
    return $a+$b;
}
function raz ($a,$b) {
    return $a-$b;
}
function mnoz ($a,$b) {
    return $a*$b;
}
function kol ($a,$b) {
    return $a/$b;
}

function sve ($a,$b) {
    echo 'Suma 3 + 6 ='. sum($a, $b);
    echo '<br>Razlika 3 - 6 ='. raz($a, $b);
    echo '<br>Umnožak 3 * 6 ='. mnoz($a, $b);
    echo '<br>Količnik 3 / 6 ='. kol($a, $b);
}

$prvi = 3;
$drugi = 6;

sve ($prvi,$drugi);

echo '<h4>4.Zadatak</h4>';

function param ()
{
    $parametri = func_get_args();
    
    foreach ($parametri as $param) 
    {
        if (is_int($param))
        
        {
            echo $param." je broj.<br>";
        }
    
        else 
        
        {
            echo $param." je string.<br>";
        }
    } 
}

echo param("Đini",7,0,'Dejv');
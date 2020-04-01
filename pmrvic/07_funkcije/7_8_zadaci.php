<?php

//1 funkcija vraca naziv trenutnog mjeseca

function trenutnimjesec() {
    //DATE_RFC3339
    //return date(DATE_RFC3339);
    return date("F");
}

echo trenutnimjesec();

//1 funkcija html tablica

$imena = [//ime,prezime
    ['Marko', 'Markovic']
    , ['Anicxa', 'Anicic']
    , ['Barica', 'Baricic']
        , ['ddAnicxa', 'Anicidc']
    , ['12Barica', 'Baricdic']
];

function tejblica($imena) {

    echo "  <table border='1'>";
    foreach ($imena as $key => $cijeloime) {
        echo "<tr>";
        foreach ($cijeloime as $key => $value) {
          echo  "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo " </table>";
}

tejblica($imena);


// func +-*/ i ona koja poziva sve, ring to rule them all
function sum() {
    return func_get_arg(0)+func_get_arg(1);
}
function raz() {
    return func_get_arg(0)-func_get_arg(1);
}
function umn() {
    return func_get_arg(0)*func_get_arg(1);
}
function kvoc() {
    return func_get_arg(0)/func_get_arg(1);
}

echo "<br>Suma 3 + 7 = ".sum(3,7);
echo "<br>Razlika 3 - 7 = ".raz(3,7);
echo "<br>Umnozak 3 * 7 = ".umn(3,7);
echo "<br>Kvocijent 3 / 7 = ".kvoc(3,7);

function ring() {
echo "<br>Suma 3 + 7 = ".sum(3,7);
echo "<br>Razlika 3 - 7 = ".raz(3,7);
echo "<br>Umnozak 3 * 7 = ".umn(3,7);
echo "<br>Kvocijent 3 / 7 = ".kvoc(3,7);
}
echo "<hr>";
ring();

echo "<hr>";
echo "<h3>Varijabilana funkcija sa tipovima varijabi</h3>";
// func var broj param, za svaki ispisite tip , broj, string....

function davajparame() {
    foreach (func_get_args() as $key => $value) {
        if(is_array($value)){
            print_r(func_get_arg($key));
            echo " je tipa ". gettype($value)." <br>";
        }
        else{
           echo func_get_arg($key)." je tipa ". gettype($value)." <br>"; 
        }
    }
}

davajparame(5,"Korona",3.14,new ArgumentCountError(),FALSE,$imena,55); 
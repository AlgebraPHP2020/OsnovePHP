<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadaće 6.7 i 7.8</title>
    </head>
    <body>
        <h2>Zadaća 6.7</h2>
        <p>1. Napišite program koji upisuje pet imena u polje $imena i ispisuje ih pomoću petlje <i>foreach</i>.</p>
        <?php
        
        $imena = array('Jerry', 'Cosmo', 'Elaine', 'George', 'Newman');
        
        foreach ( $imena as $ime ) {
            echo $ime . "<br>";
        }
        
        ?>
        
        <p>2. Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 1 piše ime5, umjesto ključa 2 ime4 itd.</p>
        
        <?php
        
        $imena = array('ime5'=>'Jerry', 'ime4'=>'Cosmo', 'ime3'=>'Elaine', 'ime2'=>'George', 'ime1'=>'Newman');
        
        foreach ( $imena as $key => $ime ) {
            echo $key . " => " . $ime;
            echo "<br>";
        }
        
        ?>
        
        <p>3. Posložite imena u polju iz prvog zadatka abecednim redom i ispišite vrijednosti elemenata uz pomoć petlje <i>for</i>.</p>
        
        <?php
        
        $imena = array('Jerry', 'Cosmo', 'Elaine', 'George', 'Newman');
        sort($imena);
        
        for ( $i= 0; $i<count($imena); $i++) {
            echo $imena[$i];
            echo "<br>";
        }
        
        ?>
        
        <p>4. Posložite ključeve u polju abecednim redom i ispišite vrijednosti elemenata zajedno s pripadajućim ključevima pomoću petlje <i>foreach</i>.</p>
        
        <?php
        
        $imena = array('ime5'=>'Jerry', 'ime4'=>'Cosmo', 'ime3'=>'Elaine', 'ime2'=>'George', 'ime1'=>'Newman');
        ksort($imena);  
        
        foreach ( $imena as $key => $ime ) {
            echo $key . " => " . $ime;
            echo "<br>";
        }

        ?>
        <p>5. Napišite program koji će pomoću petlje <i>for</i> automatski stvoriti polje brojeva od 1 do 100 te s petljom <i>foreach</i> ispisati sadržaj polja.</p>
        <?php
        
        $brojevi=array();
        for ( $i = 1; $i <= 100; $i++ ) {
            $brojevi[]=$i;
        }
        foreach ($brojevi as $broj) {
            echo $broj . " ";
        }
        
        ?>
        
        <h2>Zadaća 7.8</h2>
        
        <p>1. Napišite funkciju koja vraća hrvatski naziv za trenutni mjesec. Parametar koji prosljeđujete funkciji je rezultat funkcije <i>date('n')</i>.</p>
        
        <?php
        
      function mjesec_na_hrvatskom($mjesec) {
        $popis_mjeseci = array("1"=>"Siječanj", "2"=>"Veljača", "3"=>"Ožujak", "4"=>"Travanj", "5"=>"Svibanj", "6"=>"Lipanj", "7"=>"Srpanj", "8"=>"Kolovoz", "9"=>"Rujan", "10"=>"Listopad", "11"=>"Studeni", "12"=>"Prosinac");
        return $popis_mjeseci[$mjesec];
        }
        
        $mjesec = date('n');
        echo mjesec_na_hrvatskom($mjesec);
            
        ?>
        
        <p>2. Napišite funkciju koja ispisuje HTML tablicu imena i prezimena učenika. Kao parametar joj se prosljeđuje polje s imenima i prezimenima.</p>

        <?php

        function tablica_imena($imena) {
            echo '
            <table border="1">
                    <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    </tr>';
            
            foreach ( $imena as $key => $ucenik ) {
                echo '
                <tr>
                    <td>'.$ucenik["ime"].'</td>
                    <td>'.$ucenik["prezime"].'</td>
                </tr>';
               
            }
            
            echo '</table>';
        }
            $ucenici = array();
            $ucenici[1]["ime"] = "Mladen";
            $ucenici[1]["prezime"] = "Horvat";
            
            $ucenici[2]["ime"] = "Zlatan";
            $ucenici[2]["prezime"] = "Zuhrić";
            
            $ucenici[3]["ime"] = "Đuro";
            $ucenici[3]["prezime"] = "Utješanović";
            
            tablica_imena($ucenici);
        

        ?>  
        
        <p>3. Napišite funkcije za zbrajanje, razliku, umnožak i dijeljenje dva broja. Zatim napišite funkciju koja će pozivati sve te funkcije odjednom.</p>
        
        <?php
        
        function zbroj($a,$b) {
            return $a + $b;
        }
        
        function razlika($a,$b) {
            return $a - $b;
        }
        
        function umnozak($a,$b) {
            return $a * $b;
        }
        
        function kvocijent($a,$b) {
            return $a / $b;
        }
        
        function sve($a,$b) {
            echo zbroj($a,$b);
            echo razlika($a,$b);
            echo umnozak($a,$b);
            echo kvocijent($a,$b);
        }
        
        $d = 4;
        $e = 2;
        sve($d,$e);
        
        ?>
        
        <p>4. Napišite funkciju koja prima varijabilni broj parametara. Parametri su kombinirani brojevi i stringovi. Za svaki parametar ispišite kojeg je tipa.</p>
        
        <?php
        
        function parameters() {
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

parameters("Fiat",12.5,"365",TRUE,$bla,555); 
        ?>
        
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>1. Koristeći se operatorima usporedbe veće od i manje od i iskazom <i>if-else</i> provjerite odnost varijabli $a = 4 i $b = 2 i ispišite prikladnu poruku.</p>
        
        <?php
        $a = 4;
        $b = 2;

        if($a > $b) {
           echo '$a je veće od $b';
        } else {
           echo '$a je manje od $b';
        }
        ?>
        
        <p>2. Napišite program koji radi dvije varijable...</p>
        
        <?php
        $a = 23;
        $b = 12;
        
        if ($a > $b) {
            $a++;
            echo '$a je veće';
        } else {
            $b--;
            echo '$b je veće'; 
        }
        ?>
        
        <p>3. Pomoću petlje <i>while</i> ispišite brojeve od 1 do 50 na ekran, jedan ispod drugoga.</p>
        
        <?php
        $i = 1;

        while($i <= 50) {
              echo "$i <br>";
              $i++;
        }
        ?>
        
        <p>4. Pomoću petlje <i>for</i> zbrojite brojeve od 20 do 30 te zbroj ispišite na ekran.</p>
        
        <?php
        for ($i = 20; $i <= 30; $i++) {
             $zbroj += $i;
        }
        echo $zbroj;
        ?>
    </body>
</html>

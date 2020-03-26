<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadaci za ponavljanje</title>
    </head>
    <body>
    <h2>4.3 Zadaci za ponavljanje</h2>
        <br>        
        <h4>1. Koji je od navedenih operatora aritmetički operator?</h4>
        <ol type="a">
  <li>%</li>
  <li>&&</li>
  <li>.</li>
</ol>
        <b>Rješenje:</b> Odgovor a, modul (%).
        <br><br>
        <h4>2. Definirajte dvije varijable, $ime i $prezime, u kojoj ćete upisati vaše ime i prezime. Ispišite te dvije varijable koristeći se operatorom za nastavljanje nizova.</h4>
        <b><u>Rješenje:</u></b><br><br>
         $ime="Ivan";<br>
         $prezime="Rozić";<br><br>
        
         echo "Moje ime je ".$ime." $prezime.";<br><br>
    
        <?php
         $ime="Ivan";
         $prezime="Rozić";
        
        echo "Moje ime je ".$ime." $prezime.";
        ?>
        <br><br>
        <h4>3. Postavite vrijednost varijable $a na 5. Korištenjem operatora automatskog povećavanja i smanjivanja najprije povećajte vrijednost varijable $a te ispišite, a nakon toga smanjite vrijednost i ispišite</h4>
        <b><u>Rješenje:</u></b>
        <br>_________________________<br>
        $a=5;<br>
         var++;<br><br>
        
         echo "a=$a;<br><br>
         <?php
         $a=5;
         $b=$a++;
         
        echo "a=$a";
        
        ?>
         <br>_________________________<br>
        $a=5;<br>
         var--;<br><br>
        
         echo "a=$a;<br><br>
         <?php
         $a=5;
         $b=$a--;
         
        echo "a=$a";
        
        ?>
         <br><br>
        <h4>4. Varijablu $a iz prethodnog zadatka operatorom pretvrobe pretvorite u broj s pomičnim zarezom (float) i ispišite na ekran</h4>
        <b><u>Rješenje:</u></b><br><br>
        $a=5;<br>
        
        printf(%.2f"$a);<br><br>
         <?php
         $a=5;
         printf("%.2f",$a);         
               
        ?>
        <br><br>
        <h4>5. Varijablu $a iz prethodnog zadataka operatorom dodjeljivanja s operacijom uvećajte za 5.</h4>
        <b><u>Rješenje:</u></b><br><br>
        $a+=5;<br>
        
        <br>
         <?php
         $a+=5;
         
         echo $a;
               
        ?>       
        <br><br>
        <h4>6. Napravite PHP stranicu s dvije varijable $a=7 i $b=3. Zatim na ekranu ispišite rezultate aritmetičkih operacija na sljedeći način:</h4>
        <ol type="a">
  <li>7 + 3 = 10</li>
  <li>7 - 3 = 4</li>
  <li>7 * 3 = 21</li>
  <li>7 / 3 = 2,333333</li>
  <li>7 % 3 = 1</li>
</ol>
        <b><u>Rješenje:</u></b><br><br>
        $a=7;<br>
        $b=3;<br>
        <br>
        echo $a." + ".$b."=".($a+$b).;<br>
        echo $a." - ".$b."=".($a-$b).;<br>
        echo $a." * ".$b."=".($a*$b).;<br>
        echo $a." / ".$b."=".($a/$b).;<br>
        echo $a." % ".$b."=".($a%$b).;
        <br><br>
         <?php
         $a=7;
         $b=3;
         
         echo $a." + ".$b."=".($a+$b)."<br/>";
         echo $a." - ".$b."=".($a-$b)."<br/>";
         echo $a." * ".$b."=".($a*$b)."<br/>";
         echo $a." / ".$b."=".($a/$b)."<br/>";
         echo $a." % ".$b."=".($a%$b)."<br/>";
               
        ?>
        <br>
        <h4>7. Postavite sada vrijednost varijabla $a i $b iz prethodnog zadatka na vrijednost 4 i i ponovno učitajte stranicu:</h4>
 
        <b><u>Rješenje:</u></b><br><br>
        $a=4;<br>
        $b=2;<br>
        <br>
        echo $a." + ".$b."=".($a+$b).;<br>
        echo $a." - ".$b."=".($a-$b).;<br>
        echo $a." * ".$b."=".($a*$b).;<br>
        echo $a." / ".$b."=".($a/$b).;<br>
        echo $a." % ".$b."=".($a%$b).;
        <br><br>
         <?php
         $a=4;
         $b=2;
         
         echo $a." + ".$b."=".($a+$b)."<br/>";
         echo $a." - ".$b."=".($a-$b)."<br/>";
         echo $a." * ".$b."=".($a*$b)."<br/>";
         echo $a." / ".$b."=".($a/$b)."<br/>";
         echo $a." % ".$b."=".($a%$b)."<br/>";
               
        ?> 
    </body>
</html>

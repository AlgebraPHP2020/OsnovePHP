<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3><strong>Zadaci 4.3</strong></h3>
        <ol>
            <li>
                <p><b>Koji je od navedenih operatora aritmetički operator?</b></p>
                <ol style="list-style-type: lower-alpha;">
                    <li>&nbsp%</li>
                    <li>&nbsp&&</li>
                    <li>&nbsp.</li>
                </ol>
                <p>&nbspOd navedenih operatora, jedino je % (modulo) aritmetički operator.</p>
            </li>
            <br>
            <li>
                <p><b>
                    Definirajte dvije varijable, $ime i $prezime, u koje ćete upisati vaše ime i prezime.
                    Ispišite <br> te dvije varijable koristeći se operatorom za nastavljanje nizova
                    </b></p>
                
                    <?php
                
                $ime="Martin";
                $prezime="Bolanča"; 
                
                echo "&nbspMoje ime je ".$ime." ".$prezime;
                
                ?>
                
            </li>
            <br>
            <li>
                <p><b>
                    Postavite vrijednost varijable $a na 5. Korištenjem operatora automatskog povećavanja <br>
                    i smanjivanja najprije povećajte vrijednost varijable $a te ispišite, a nakon toga smanjite <br>
                    vrijednost i ispišite.
                    </b></p>
                  
                    <?php
                    
                $a=5;   
                echo "&nbspVarijabla a = ".$a."<br>";
                $a++;
                echo "&nbspNakon povećanja a = ".$a."<br>";
                $a--;
                echo "&nbspNakon smanjivanja a = ".$a."<br>";
                    
                ?>
                
            </li>
            <br>
            <li>
                <p><b>
                    Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj s pomičnim<br>
                    zarezom (float) i ispišite na ekran.
                    </b></p>
                <?php
                
                $b=(float)$a;
                printf("&nbspPromjena broja %s u decimalni %.1f",$a,$b);
                
                ?>
            </li>
            <br>
            <li>
                <p><b>
                    Varijablu $a iz prethodnog zadatka operatorom dodjeljivanja s operacijom <br>
                    uvećajte za 5.
                    </b></p>
                <?php
                
                $a+=5;
                echo '&nbspVarijabla $a sada je ='.$a;
                
                ?>
            </li>
            <br>
            <li>
                <p><b>
                    Napravite PHP stranicu s dvije varijable $a=7 i $b=3. <br>
                    Zatim na ekranu ispišite rezultate aritmetičkih operacija na sljedeći način:
                    </b></p>
                
                    <ol style="list-style-type: lower-alpha;">
                    <li>&nbsp7 + 3 = 10</li>
                    <li>&nbsp7 - 3 = 4</li>
                    <li>&nbsp7 * 3 = 21</li>
                    <li>&nbsp7 / 3 = 2,333333</li>
                    <li>&nbsp7 % 3 = 1</li>
                </ol>
                <br>
                <?php
                
                $a=7;
                $b=3;
                
                echo "<br>&nbsp".$a." + ".$b." = ".($a+$b);
                echo "<br>&nbsp".$a." - ".$b." = ".($a-$b);
                echo "<br>&nbsp".$a." * ".$b." = ".($a*$b);
                echo "<br>&nbsp".$a." / ".$b." = ".($a/$b);
                echo "<br>&nbsp".$a." % ".$b." = ".($a%$b);
                
                ?>
            </li>
            <br>
            <li>
                <p><b>
                    Postavite sada vrijednosti varijabla $a i $b iz prethodnog zadatka <br>
                    na vrijednosti 4 i 2 i ponovite postupak.
                    </b></p>
                 <?php
                
                $a=4;
                $b=2;
                
                echo "<br>&nbsp".$a." + ".$b." = ".($a+$b);
                echo "<br>&nbsp".$a." - ".$b." = ".($a-$b);
                echo "<br>&nbsp".$a." * ".$b." = ".($a*$b);
                echo "<br>&nbsp".$a." / ".$b." = ".($a/$b);
                echo "<br>&nbsp".$a." % ".$b." = ".($a%$b);
                
                ?>
            </li>
        </ol>
    </body>
</html>

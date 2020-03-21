<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Zadaci 4.3</h3>
        <ol>
            <li>
                <p>Koji je od navedenih operatora aritmetički operator?</p><br>
                <ol style="list-style-type: lower-alpha;">
                    <li>&nbsp%</li>
                    <li>&nbsp&&</li>
                    <li>&nbsp.</li>
                </ol>
                <p>&nbspOd navedenih operatora, jedino je % (modulo) aritmetički operator.</p>
            </li>
            <br>
            <li>
                <p>
                    Definirajte dvije varijable, $ime i $prezime, u koje ćete upisati vaše ime i prezime.
                    Ispišite <br> te dvije varijable koristeći se operatorom za nastavljanje nizova
                </p>
                <br>
                
                    <?php
                
                $ime="Martin";
                $prezime="Bolanča"; 
                
                echo"&nbspMoje ime je ".$ime." ".$prezime;
                
                ?>
                
            </li>
            <br>
            <li>
                <p>
                    Postavite vrijednost varijable $a na 5. Korištenjem operatora automatskog povećavanja <br>
                    i smanjivanja najprije povećajte vrijednost varijable $a te ispišite, a nakon toga smanjite <br>
                    vrijednost i ispišite.
                </p>
                <br>
                  
                    <?php
                    
                $a=5;   
                echo"&nbspVarijabla a = ".$a."<br>";
                $a++;
                echo"&nbspNakon povećanja a = ".$a."<br>";
                $a--;
                echo"&nbspNakon smanjivanja a = ".$a."<br>";
                    
                ?>
                
            </li>
            <br>
            <li>
                <p>
                    Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj s pomičnim<br>
                    zarezom (float) i ispišite na ekran.
                </p>
            </li>
        </ol>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>

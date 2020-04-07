<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadaća 5 - Rad s datotekama</title>
        
        <style>
            * {
                background-color: lightblue;
                font-family: "Courier new";
            }
            
            input {
                background-color: white;
            }
            
            input-button {
                color: red;
            }
            
            p {
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>
        
            <p>1. Napišite program koji čita sadržaj iz neke tekstualne datoteke.</p>

            Popis za kupovinu: 
                <?php

                 $filename = 'popis.txt';
                 $handle = fopen($filename, 'r');
                 $contents = fread($handle, filesize($filename));
                 fclose($handle);

                 echo $contents;

                 ?>

<!--    Bonus pitanje: zašto bilo kakav kod koji uključuje "<br>" ubacuje hrpu suvišnih <br>-ova i nepotrebno povećava visinu elementa? Npr. ovaj:
    <?php
        $content = file("file.txt");
        $data = implode("<br>",$content);
        echo $data;
        ?> -->
    
        <p>2. Pripremite obrazac u koji korisnik upisuje neki tekst i nakon predavanja podataka tog obrasca zapišite tekst u neku datoteku. Ako datoteka ne postoji, napravite ju.</p>
        
        <form method="post" action="">
          Tekst: <input type="text" name="txt">
          <input type="submit" name="button" value="Spremi">
        </form>
        
            <?php 

            if(isset($_POST["button"])) {
                $citati = 'citati.txt';
                $handle = fopen($citati, 'a+');

                fwrite($handle, $_POST["txt"]);
                fclose($handle);      
            }
                
            ?>
        
        <p>3. Napišite program preko kojeg korisnik dohvaća sadržaj neke tekstualne datoteke, uređuje ga i ponovo sprema u istu datoteku.</p>
        

    <form method="post" action="">
        Riba: <input type="text" name="txt">
        <input type="submit" name="button" value="Spremi">
    </form>  
        
        <?php
        
        if(isset($_POST['txt'])) {
            $data = $_POST['txt'];
            $ribe = fopen('ribe.txt', 'a+');
            fwrite($ribe, $data);
            fclose($ribe);
        }

        ?>
</body>
    
</html>

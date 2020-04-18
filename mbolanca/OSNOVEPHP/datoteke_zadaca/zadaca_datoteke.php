<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadaci rad s datotekama</title>
    </head>
    <body>
        <ol>
            <li>
                <h4>Napišite program koji čita sadržaj iz neke tekstualne datoteke.</h4>

                <?php
                $filename = "tekst.txt";
                $mode = 'r';

                $handle = fopen($filename, $mode);
                $contents = fread($handle, filesize($filename));

                echo "<pre>".$contents."</pre>";
                fclose($handle);
                ?>

            </li>
            <li>
                <h4>Pripremite obrazac (formu) u koji korisnik upisuje neki tekst i 
                    nakon <br> predavanja podataka tog obrasca zapišite tekst u neku datoteku. 
                    Ako datoteka ne postoji, napravite ju.</h4>

                <form method="post" action="">
                    <input type ="text" name="tekst" value=""/><br>
                    <input type="submit" name="button" value="Spremi tekst"/>
                </form>

                <?php
                if (isset($_POST["button"])) {
                    $file = "tekst.txt";
                    $handle = fopen($file, 'a+');
                    fwrite($handle, $_POST["tekst"]."\n");
                    fclose($handle);
                    }
                ?>
            </li>
            <li>
                <h4>Napišite program preko kojeg korisnik dohvaća sadržaj neke tekstualne datoteke, 
                    uređuje ga i ponovo sprema u istu datoteku.</h4>
                                
                <?php
                

                
                $voce = "voce.txt";
                $data = file($voce);
                $handle = fopen($voce,'r');
                
                echo "<ul>";
                foreach ($data as $key => $value)
                {
                echo "<li>".$value."</li>";
                }
                echo "</ul>";
                fclose($handle);
                
                //$mode = 'a+';
                //$handle = fopen($voce, $mode);
                //$data = fread($handle, filesize($voce));
                //echo "<pre>".$data."</pre>";
                //fclose($handle);        
                
                ?>
                
                <form method ="post" action ="">
                    <input type ="text" name ="voce" value =""/><br>
                    <input type ="submit" name="button2" value="Spremi tekst"/>
                </form>
                
                <?php
                
                if (isset($_POST["button2"])) {
                    $novovoce = ($_POST["voce"]."\n");
                    $podaci = fopen("voce.txt",'a+');
                    fwrite($podaci,$novovoce);
                    fclose($podaci);
                }
                
                ?>
            </li>
        </ol>
    </body>
</html>
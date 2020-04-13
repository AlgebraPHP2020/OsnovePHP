<html>
    <meta charset="UTF-8">
    <title>3.3 Zadaci za ponavljanje</title>
    <p>1. Definirajte nekoliko različitih brojčanih varijabli i ispišite ih.</p>

    <body>
        <?php
        $a = 5;
        $b = 10;
        $c = 15;

        echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
        ?>



        <p>2. Definirajte varijablu $a s vrijednošću 3 i varijablu $b s vrijednošću 5. Korištenjem pomoćne varijable $pom zamijenite njihove sadržaje.</p>

        <?php
        $a = 3;
        $b = 5;
        $pom = $b . $a;

        echo $pom;
        ?>

        <p>3. Kreirajte varijablu s tekstualnom vrijednošću. Dodijelite joj vrijednost vašeg imena i prezimena. Ispišite vrijednost tih varijabli.</p>

<?php
$ime = 'Ivan';
$prezime = 'Rozić';

echo "$ime $prezime";
?>  
    </body>
</html>





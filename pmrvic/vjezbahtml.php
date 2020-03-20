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
        <style>
            table{
                border: 1px solid black;
                width: 150px;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }

        </style>
    </head>
    <body>
        <!-- Ovo je komentar -->
        <?php
        // php komentar
        #jos jedan

        /*
          Ovo je blok komentar
         * 
         * 
         *          */

        /**
         * Ovo je phpdoc komentar i služi samo za dokumentaciju
         */
        ?>
        <table>
            <thead>
                <tr><th>Država</th><th>Broj</th></tr>  

            </thead>
            <tbody >
                <tr><td>Hrvatska</td><td>116</td></tr>
                <tr><td>Slovenija</td><td>516</td></tr>
            </tbody>

        </table>
        <br>
        <table >
            <thead>
                <tr><th>Država</th><th>Broj</th></tr>  

            </thead>
            <tbody >
                <tr><td>Hrvatska</td><td>116</td></tr>
                <tr><td>Slovenija</td><td>516</td></tr>
            </tbody>

        </table>   
        <br>
        <h3>Liste</h3>
        <ul style="list-style-type: lower-roman;color: blueviolet;">
            <li>prvi</li>
            <li>drugi</li>
            <li>ostalu</li>
        </ul>
        
        <ol start="99">
            <li>prvi</li>
            <li>drugi</li>
            <li>ostalu</li>
        </ol>

        <a href="http://www.google.hr">vodi me na google</a><br>
        
        <a href="http://www.algebra.hr">
        <img style="border-radius: 50%;" src="hard.png" width="280" alt="Programiranje nije teskos" title="Tip za kompjuterom"/>
        </a><br>
        <?php
        //otvoreni php marker
        
        echo "lallala".PHP_EOL."<br>";
        EChO "ollallla".PHP_EOL;
        
        
        // zatvreni php marker
        ?>
        
    </body>
</html>

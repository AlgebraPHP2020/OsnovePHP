<html>
    
    <head>
        <style>
            table.rosyBrownTable {
  border: 4px solid #BA8697;
  background-color: #555555;
  width: 400px;
  text-align: center;
  border-collapse: collapse;
}
table.rosyBrownTable td, table.rosyBrownTable th {
  border: 1px solid #555555;
  padding: 4px 4px;
}
table.rosyBrownTable tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
}
table.rosyBrownTable tr:nth-child(even) {
  background: #BA8697;
}
table.rosyBrownTable td:nth-child(even) {
  background: #BA8697;
}
table.rosyBrownTable tfoot {
  font-weight: bold;
  background: #BA8697;
  border-top: 1px solid #444444;
}
table.rosyBrownTable tfoot .links {
  text-align: right;
}
table.rosyBrownTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #BA8697;
  padding: 2px 8px;
  border-radius: 5px;
}
table.greyGridTable {
  border: 2px solid #FFFFFF;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.greyGridTable td, table.greyGridTable th {
  border: 1px solid #FFFFFF;
  padding: 3px 4px;
}
table.greyGridTable tbody td {
  font-size: 13px;
}
table.greyGridTable td:nth-child(even) {
  background: #EBEBEB;
}
table.greyGridTable thead {
  background: #FFFFFF;
  border-bottom: 4px solid #333333;
}
table.greyGridTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #333333;
  text-align: center;
  border-left: 2px solid #333333;
}
table.greyGridTable thead th:first-child {
  border-left: none;
}

table.greyGridTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #333333;
  border-top: 4px solid #333333;
}
table.greyGridTable tfoot td {
  font-size: 14px;
}
        </style>
    </head>
    <body>
        
<?php

$x = 1;
$y = 1;

while ($x <= 10) {
    while ($y <= 10) {
        echo " ".$x*$y;
        $y++;
    }
    echo "<br>";
    $y=1;
    $x++; 
}

$x = 1;
$y = 1;

echo '<table class="greyGridTable">';

while ($x <= 65) {
    echo "<tr>";
    while ($y <= 17) {
        echo "<td>".$x*$y."</td>";
        $y++;
    }
    echo "</tr>";
    $y=1;
    $x++; 
}
echo "</table>";

?>
        
    </body>
    
</html>

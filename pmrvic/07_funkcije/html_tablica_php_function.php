<?php
/**
 * 
 * @param array $polje
 * @return void
 */
function htmltable($polje):void{
    printf(" <table>");
    printf(" <tr>");
    printf(" <th>No.</th>");
    foreach ($polje as $key => $value) {
        printf(" <th>%s</th>",$key);
    }
    printf(" </tr>");
    
    foreach ($polje['Company'] as $key => $value) {
        printf(" <tr>");
        printf(" <td>%d</td><td>%s</td><td>%s</td><td>%s</td>",$key,$polje['Company'][$key],$polje['Contact'][$key],$polje['Country'][$key]);
    printf(" </tr>");
        
    }
    printf(" </table>");
}

$imena=array('Company'=>['Alfreds Futterkiste',
'Centro comercial Moctezuma',
'Ernst Handel',
'Island Trading',
'Laughing Bacchus Winecellars',
'Magazzini Alimentari Riuniti'
],
   'Contact'=>['Maria Anders',
'Francisco Chang',
'Roland Mendel',
'Helen Bennett',
'Yoshi Tannamuri',
'Giovanni Rovelli'
] ,
    'Country'=>['Germany',
'Mexico',
'Austria',
'UK',
'Canada',
'Italy'
]);
print_r($imena);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <h2>Nasa HTML Table</h2>
    <?php
    htmltable($imena);
    ?>
    
    
<h2>HTML Table</h2>



<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</body>
</html>

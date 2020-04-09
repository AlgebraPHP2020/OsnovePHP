<?php
class Zivotinja {

public $name;
public $glasanje;

function set_name($name) {
    $this->name = $name;
}
function get_name() {
    return $this->name;
}
function set_glasanje($glasanje) {
    $this->glasanje=$glasanje;
}
function get_glasanje() {
    return $this->glasanje;
}
}

$macka = new Zivotinja();
$macka->set_name('Macka');
$macka->set_glasanje('mijau');

$pas = new Zivotinja();
$pas->set_name('Pas');
$pas->set_glasanje('vau');

echo "Ime: ".$macka->get_name();
echo "<br>";
echo "Glasanje: ".$macka->get_glasanje();
echo "<br>";
echo "<br>";
echo "Ime: ".$pas->get_name();
echo "<br>";
echo "Glasanje: ".$pas->get_glasanje();
      
?>


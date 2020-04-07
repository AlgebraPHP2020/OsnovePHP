<?php
require_once './Autoload.php';
require_once('./Template.php');
?>
<h1 class = "">Ovo je neki fancy naslov</h1>
<?php
$a1 = new Auto();
$a1->promjeniBoju("#66c2ff");

$a2 = new Auto();
$a2->promjeniBoju("Maroon");

$a3 = new Auto();  //bmw, crni

$a4 = new Auto("Ford", "red");
$a4->promjeniBoju("Yellow");
$a4->promjeniSnagu(200);
?>


<div> <?= $a1 ?></div>
<div> <?= $a2 ?></div>
<div> <?= $a3 ?></div>
<div> <?= $a4 ?></div>


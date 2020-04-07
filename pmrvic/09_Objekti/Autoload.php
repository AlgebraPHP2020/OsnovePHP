<?php

// function __autoload($class) {
//     include 'classes/' . $class . '.class.php';
// }

function my_autoloader($class) {
    include './' . $class . '.class.php';
}

spl_autoload_register('my_autoloader');

// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    include './' . $class . '.class.php';
});

?>

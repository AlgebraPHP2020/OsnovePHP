<?php
class zgrada
{
    public $ime;
    
    function __destruct()
    {
        echo 'zgrada je unistena';
    }
}

$neboder=new zgrada('neboder');


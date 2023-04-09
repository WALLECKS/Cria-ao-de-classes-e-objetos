<?php 
class Conta
{
    static $Nome;

    function __construct($Nome)
    {  
       self::$Nome = $Nome; 
    }
}

$artur= new Conta('guilherme alencar');

echo 'o nome e: '.Conta::$Nome;

?>
<?php

use Conta as GlobalConta;

class Conta
{
    private $Saldo;
    private $Nome;

    public function __call($Saldo, $arguments)
    {
        var_dump($Saldo);
    }

    public static function __callStatic(string $Nome, $arguments)
    {
        var_dump($Nome);
    }

    /* OBS: >> tanto o metodo __call quanto o metodo __callStatic seguem os mesmos parametros, diferente do metodo set e get, nesse metodo eu nao 
    preciso manipular os dados dos set e get*/


}

$saldo = new Conta('');
$saldo->setSaldo(1500);
$saldo->setNome('joao guilherme');

/* */


?>


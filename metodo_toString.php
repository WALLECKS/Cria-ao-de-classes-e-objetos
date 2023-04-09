<?php

class Conta
{
    private $Nome;
    private $Saldo;

    public function __construct($Nome)
    {   
        $this->Nome = $Nome;
        
    }

    public function __toString()
    {
        return $this->Nome;
        
        // por meio desse comando o console de depuraçao nao exibira o id identificador do objeto
    }

}
// instaciando a classe conta
$nome = new Conta('pedro henrique');

echo $nome;






?>
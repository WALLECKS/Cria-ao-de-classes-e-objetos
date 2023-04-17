<?php
class Produto
{// o metodo get e utilizado para retornar valores calculado
    var $Nome;
    var $Codigo;
    var $Preco;
    const taxa = 10;

// metodo construtor de um produto
    function __construct($nome, $codigo, $Preco)
    {
        $this->Nome = $nome;
        $this->Codigo = $codigo;
        $this->Preco = $Preco;
    }
    
}




?>
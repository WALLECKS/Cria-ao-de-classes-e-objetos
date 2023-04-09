<?php
class Produto
{
    // atibutos
    private $Preço;
    public $Nome;
    
    var $Codigo;
// manipulando os metodos da classe

    public function Nome()
    {
        $this->Nome;
    }

    function Codigo()
    {
        $this->Codigo;
    }
    
    
    function setPreço(int $Preço, int $taxa2 = 2)
    {
        
        return ($this->Preço = $Preço * $taxa2);
    }

    function getPreço()
    {
        return $this->Preço;
    }

}

// instacia a classe
$tv= new Produto;

// atribuir os valores dos atributos da classe
$tv->Nome = 'LG';
$tv->Codigo = 89;
$tv->setPreço(500);


// mostrar os valores atribuidos da classe
print '=================================== area de compra ============================'."\n";
echo 'Nome do Produto : '.$tv->Nome."\n";
echo 'Codigo do Produto : '.$tv->Codigo."\n";
echo "valor do produto : {$tv->getPreço()}\n";
?>
<?php
#incluir a classe produto
include_once 'classe produto.php';

#criar novo produto com o preço de 345,67
$produto = new Produto('s',45,345,345,67);
#imprimir o valor ja calculado 

echo $produto->Preco;
?>
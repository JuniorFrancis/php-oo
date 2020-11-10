<?php

require_once "src/classes/produto.php";

$produto1 = new Produto;
$produto1->titulo = "Skol";
$produto1->preco = 2.50;
$produto1->desconto = 0.1; //Propriedade em tempo de execução

$produto1->defineCodigoBarras('000012');

 var_dump($produto1);

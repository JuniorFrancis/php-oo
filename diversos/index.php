<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Clientes.php";

$produto1 = new Produto;
$produto1->titulo = "Skol";
$produto1->preco = 2.50;

$produto2 = new Produto;
$produto2->titulo = "Itaipava";
$produto2->preco = 1.90;

var_dump($produto2);
var_dump($produto1);

$cli = new Cliente;
$cli->nome = "Antonio";
$cli->idade = 30;
$cli->endereco = "Andaraí";
$cli->telefone = "(11) XXXX-XXXX";

$cli->Comprar();
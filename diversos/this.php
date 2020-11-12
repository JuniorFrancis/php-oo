<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Clientes.php";

$cli = new Cliente;
$cli->nome = "Antonio";
$cli->idade = 30;
$cli->endereco = "Andaraí";
$cli->telefone = "(11) XXXX-XXXX";

$cli->Comprar();

$cli2 = new Cliente;
$cli2->nome = "José";
$cli2->idade = 30;
$cli2->endereco = "Andaraí";
$cli2->telefone = "(11) XXXX-XXXX";

$cli2->Comprar();
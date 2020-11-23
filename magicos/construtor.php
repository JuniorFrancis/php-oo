<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Clientes("Junior", "11955807069", 30);
$cli->cpf = "777.777.777.77";
$cli->rg = "11.111.111.1";

//echo $cli->cidade;

$cli->alterar('Junior Francis', 20);

var_dump($cli);

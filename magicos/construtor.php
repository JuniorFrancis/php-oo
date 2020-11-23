<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Clientes("Junior", "11955807069", 30);
$cli->cpf = "777.777.777.77";
$cli->rg = "11.111.111.1";

//echo $cli->cidade;

$cli->alterar('Junior Francis', 20);
$cliSerializado = serialize($cli);

echo "<br>" . $cliSerializado;

echo "<br>" . $cli;

$cli2 = unserialize($cliSerializado);

var_dump($cli, $cli2);

<?php 

require_once "../autoload/autoload-psr4.php";
// require_once "../src/Email/Envio.php";
// require_once "../src/Classes/Clientes.php";
// //require_once "../src/Classes/Transporte.php";
// require_once "../src/Email/Adaptadores/Mailgun/Adaptador.php";

$email = new \App\Email\Envio;

$email->enviar();
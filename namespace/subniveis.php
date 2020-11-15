<?php 

/*Indicando novamente um NAMESPACE, podemos utilizar os 'NamesSpace's relativos', onde quando formos
instanciar novas coisas baseadas nesse mesmo NAMESPACE, basta colocar o caminho à partir do indicado*/
namespace Email\Adaptadores;

require_once "..\src\Email\Adaptadores\Mailgun\Adaptador.php";
require_once "..\src\Email\Adaptadores\SES\Adaptador.php";

//Utilizando NamesSpace's relativos
$mailgun = new Mailgun\Adaptador;
$SES = new SES\Adaptador;

var_dump($mailgun, $SES);
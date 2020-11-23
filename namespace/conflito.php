<?php 


require_once "..\src\Email\Envio.php";
require_once "..\src\SMS\Envio.php";

$email = new Email_Envio;
$SMS = new SMS_Envio;

var_dump($email, $SMS);
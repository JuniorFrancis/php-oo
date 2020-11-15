<?php 


require_once "..\src\Email\Envio.php";
require_once "..\src\SMS\Envio.php";

$email = new Email;
$SMS = new sms;

var_dump($email, $SMS);
<?php 

$generica = new stdClass;

$generica->nome = "Cleiton";
$generica->curso = "PHPOO";

//var_dump($generica);

$array = [
    
    "nome" => "TreinaWeb",
    "curso" => "PHP - OO"
 
];

$objeto = (object) $array;

var_dump($objeto);
var_dump($array);
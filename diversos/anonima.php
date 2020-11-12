<?php

require_once "src/Classes/Fornecedor.php";



$fornecedor = new Fornecedor;

$fornecedor->autorizar(new Class {
    public $nome = "joao";
    public $senha = "123456";
});


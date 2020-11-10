<?php 

require_once "src/Classes/Produto.php";

$produto1 = new Produto;
$produto1->titulo = "Skol";
$produto1->descricao = "Cerveja Pilsen";
$produto1->preco = 2.50;

foreach ($produto1 as $nome => $valor) {
    echo "$nome: $valor";
    echo "<br>";
}
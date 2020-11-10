<?php

class Produto 
{
    public const NORMA = "1050";

    public $titulo;
    public $descricao = "Cerveja Brasileira";
    public $preco;

       //Propriedade em tempo de execução 
   /* -- Quando adicionamos uma propriedade no meio da execução,
   diferentemente de adicionarmos esta propriedade da declaração da classe*/
   public function defineCodigoBarras($codigo){
    $this->codigoBarras = $codigo;
 }
}
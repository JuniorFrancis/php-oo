<?php 

class Cliente 
{
   public $nome;
   public $idade;
   public $endereco;
   public $telefone;

   public function Comprar()
   {
      echo "O {$this->nome} realizou uma compra!<br>";
   }
   
}


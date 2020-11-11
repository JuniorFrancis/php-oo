<?php 

class Cliente 
{
   public string $nome;
   public int $idade;
   public string $endereco;
   public string $telefone;

   public function Comprar(): void
   {
      echo "O {$this->nome} realizou uma compra!<br>";
   }

   public function definirNome(string $nome): void
   {
      $this->nome = $nome;
   }
   




}


<?php 

namespace App\Classes;

class Clientes 
{
   public string $nome;
   public int $idade;
   public string $endereco;
   public string $telefone;

   public function __construct(string $nome, string $telefone, int $idade)
   {
      $this->nome = $nome;
      $this->telefone = $telefone;
      $this->idade = $idade;

  
   }

   public function Comprar(): void
   {
      echo "O {$this->nome} realizou uma compra!<br>";
   }

   public function definirNome(string $nome): void
   {
      $this->nome = $nome;
   }
   




}


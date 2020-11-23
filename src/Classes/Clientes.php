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
   /*A função GET__ é utlizada como tratamento para quando chamamos alguma propriedade
   em que ainda não foi instanciada*/
   public function __get(string $nomePropriedade)
   {
      return "A propriedade não existe";
   }

   /*O Método "__SET" nos permite criar propriedades de cclasses dinamicamente, e as mesmas só 
   aparecerão caso frem tratadas (if, else).*/
   public function __set(string $nomePropriedade, $valorPropriedade)
   {
      if ($nomePropriedade === 'cpf')
      {
         $this->cpf = \str_replace('.', '', $valorPropriedade);
      }
      else
      {
         $this->$nomePropriedade = $valorPropriedade;
      } 

   }

   public function __call(string $nomeMetodo, array $argumentoMetodo)
   {
      if ($nomeMetodo === 'alterar')
      {
         $this->nome = $argumentoMetodo[0];
         $this->idade = $argumentoMetodo[1];
      }
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


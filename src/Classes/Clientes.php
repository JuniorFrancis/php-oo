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
   public function __get(string $nomePropriedade): string
   {
      return "A propriedade não existe";
   }

   /*O Método "__SET" nos permite criar propriedades de cclasses dinamicamente, e as mesmas só 
   aparecerão caso frem tratadas (if, else).*/
   public function __set(string $nomePropriedade, $valorPropriedade): void
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

   /*O Função "__CALL" é utilizada quando usandos um método não instanciado normalmente. 
   Mais precisamente, é quando utlizando ele de forma "DINÂMICA" (criado diretamente 
   no instanciamento da classe)*/
   public function __call(string $nomeMetodo, array $argumentoMetodo): void
   {
      if ($nomeMetodo === 'alterar')
      {
         $this->nome = $argumentoMetodo[0];
         $this->idade = $argumentoMetodo[1];
      }
   }

   /*Função que me permite selecionar o que virá da "SERIALIZAÇÃO" do objeto*/
   public function __sleep() : array
   {
      return ["nome", "idade"];
   }

   public function __wakeup() : void
   {
      $this->tipo = "serializado";
   }

   public function __tostring() : string 
   {
      return $this->nome . ", " . $this->idade;
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


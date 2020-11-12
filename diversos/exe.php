<?php

declare(strict_types=1);

class Aluno
{
    private string $nome;
    private float $nota;
    
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function setNota(float $nota): void
    {
        $this->nota = $nota;
    }
    
    public function getNota(): float
    {
        return $this->nota;
    }
}
    
$aluno = new Aluno;

// $nome = "Maria";
// $nota = 9.4;

$aluno->setNome("Maria");
$aluno->setNota(9.4);


echo $aluno->getNome();
echo $aluno->getNota();
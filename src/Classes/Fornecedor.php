<?php

namespace App\Classes;

class Fornecedor
{
    //Constantes não se usa o "$" para se iniciar
    public const PAIS = "Brasil";

    public string $razaoSocial;
    public string $nomeFantasia;
    public string $cnpj;

    function autorizar(object $usuario): void
    {
        if($usuario->nome == "joao" && $usuario->senha == "123456"){
            echo "Login autorizado";
        } else{
            echo "Login recusado: Usuario ou senha incorretos";
        }
    }
}
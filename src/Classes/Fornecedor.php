<?php

class Fornecedor
{
    //Constantes não se usa o "$" para se iniciar
    public const PAIS = "Brasil";

    public $razaoSocial;
    public $nomeFantasia;
    public $cnpj;

    function autorizar($usuario)
    {
        if($usuario->nome == "joao" && $usuario->senha == "123456"){
            echo "Login autorizado";
        } else{
            echo "Login recusado: Usuario ou senha incorretos";
        }
    }
}
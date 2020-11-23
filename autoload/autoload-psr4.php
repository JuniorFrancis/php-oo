<?php

function carregar(string $nomeCompleto)
{
    //Pegando nameSpace raiz para definir padrão de caminho
    $nsRaiz = "App\\";
    $diretorioBase = __DIR__ . "/../src/";
    
    //Pegando o tamanho do nameSpace raiz para comparação
    $tamanhoNsRaiz = strlen($nsRaiz);

    //Comparando se o SRC recebido é igual ao padrão definido acima
    $nsRaizRecebido = substr($nomeCompleto, 0, $tamanhoNsRaiz);
    if($nsRaiz !== $nsRaizRecebido)
    {
        return;
    }


    //Setando o caminho sem o nameSpace RAIZ
    $caminhoRelativo = substr($nomeCompleto, $tamanhoNsRaiz);


    //Setando caminho final
    $caminhoArquivo = $diretorioBase . str_replace('\\' , '/' , $caminhoRelativo) . ".php";
    
    //Verificando se o arquivo existe, se sim, execute o "Require once"
    if (file_exists($caminhoArquivo))
    {
        require_once $caminhoArquivo;
        
    }

}

spl_autoload_register("carregar");
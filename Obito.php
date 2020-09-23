<?php

final Class Obito extends Certidao implements Registravel
{
    public function __construct($nomePessoaObjeto,$nomeDeclarante,$tipoCertidao,$dataEmissao,$nomeTabeliao, $nomeCartorio)
    {
        parent::__construct($nomePessoaObjeto,$nomeDeclarante,$tipoCertidao,$dataEmissao,$nomeTabeliao, $nomeCartorio);
    }

    public function registra()
    {
        echo 'Ja não esta entra nós<br>';
    }
}
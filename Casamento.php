<?php

final class Casamento extends Certidao implements Registravel
{
    public function __construct($nomePessoaObjeto,$nomeDeclarante,$tipoCertidao,$dataEmissao,$nomeTabeliao, $nomeCartorio)
    {
        parent::__construct($nomePessoaObjeto,$nomeDeclarante,$tipoCertidao,$dataEmissao,$nomeTabeliao, $nomeCartorio);
    }

    public function registra()
    {
        echo 'Casamento registrando<br>';
    }
}
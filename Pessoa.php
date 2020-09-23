<?php

abstract class Pessoa
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome  = $nome;
    }
}
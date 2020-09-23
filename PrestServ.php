<?php

final class PrestServ extends Contrato implements Registravel
{
    public function __construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
    {
        parent::__construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
    }

    public function registra()
    {
        echo 'servico prestado';
    }
}
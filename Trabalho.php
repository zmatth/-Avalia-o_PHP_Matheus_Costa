<?php

final class Trabalho extends Contrato implements Registravel
{
    public function __construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
    {
        parent::__construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
    }

    public function registra()
    {
        echo 'Certificado de trabalho feito';
    }
}
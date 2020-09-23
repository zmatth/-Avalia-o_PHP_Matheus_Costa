<?php

final class CompraVenda extends Contrato implements Registravel
{
    public function __construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
    {
        parent::__construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
    }

    public function registra()
    {
        echo 'Comprado ou vendido';
    }
}
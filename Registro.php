<?php

final Class Registro
{
    private $listaRegistro;



    public function adicionarRegistro(Registravel $registro)
    {
        $this->listaRegistro[] = array($registro);
    }
    public function mostrarRegistros()
    {
        foreach($this->listaRegistro as $registro)
        {
            $registro[0]->registra();
        }
    }
}
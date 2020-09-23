<?php

abstract class Contrato
{
	private static $contador;
    private $numeroRegistro;
    private $nomePartes;
    private $testemunhas;
    private $tipoContrato;
    private $dataEmissao;
    private $dataRegistro;
    private $nomeTabeliao;
    private $nomeCartorio;

    public function __construct($nomePartes, $testemunhas, $tipoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
    {
	self::$contador++;
    $this->numeroRegistro = self::$contador;
    $this->nomePartes = $nomePartes;
    $this->testemunhas = $testemunhas;
    $this->tipoContrato = $tipoContrato;
    $this->dataEmissao = $dataEmissao;
    $this->dataRegistro = $dataRegistro;
    $this->nomeTabeliao = $nomeTabeliao;
    $this->nomeCartorio = $nomeCartorio; 
    }

    public function getNumeroRegistro(){
		return $this->numeroRegistro;
	}

	public function setNumeroRegistro($numeroRegistro){
		$this->numeroRegistro = $numeroRegistro;
	}

	public function getNomePartes(){
		return $this->nomePartes;
	}

	public function setNomePartes($nomePartes){
		$this->nomePartes = $nomePartes;
	}

	public function getTestemunhas(){
		return $this->testemunhas;
	}

	public function setTestemunhas($testemunhas){
		$this->testemunhas = $testemunhas;
	}

	public function getTipoContrato(){
		return $this->tipoContrato;
	}

	public function setTipoContrato($tipoContrato){
		$this->tipoContrato = $tipoContrato;
	}

	public function getDataEmissao(){
		return $this->dataEmissao;
	}

	public function setDataEmissao($dataEmissao){
		$this->dataEmissao = $dataEmissao;
	}

	public function getDataRegistro(){
		return $this->dataRegistro;
	}

	public function setDataRegistro($dataRegistro){
		$this->dataRegistro = $dataRegistro;
	}

	public function getNomeTabeliao(){
		return $this->nomeTabeliao;
	}

	public function setNomeTabeliao($nomeTabeliao){
		$this->nomeTabeliao = $nomeTabeliao;
	}

	public function getNomeCartorio(){
		return $this->nomeCartorio;
	}

	public function setNomeCartorio($nomeCartorio){
		$this->nomeCartorio = $nomeCartorio;
	}
}
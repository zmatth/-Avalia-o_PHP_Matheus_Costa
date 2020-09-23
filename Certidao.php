<?php

abstract class Certidao
{
	private static $contador;
    private $numeroRegistro;
    private $nomePessoaObjeto;
    private $nomeDeclarante;
    private $tipoCertidao;
    private $dataEmissao;
    private $nomeTabeliao;
    private $nomeCartorio;

    public function __construct($nomePessoaObjeto, $nomeDeclarante, $tipoCertidao, $dataEmissao, $nomeTabeliao, $nomeCartorio)
    {
		self::$contador++;
		$this->numeroRegistro = self::$contador;
    $this->nomePessoaObjeto = $nomePessoaObjeto;
    $this->nomeDeclarante = $nomeDeclarante;
    $this->tipoCertidao = $tipoCertidao;
    $this->dataEmissao = $dataEmissao;
    $this->nomeTabeliao = $nomeTabeliao;
    $this->nomeCartorio = $nomeCartorio;        
    }

    
    public function getNumeroRegistro(){
		return $this->numeroRegistro;
	}

	public function setNumeroRegistro($numeroRegistro){
		$this->numeroRegistro = $numeroRegistro;
	}

	public function getNomePessoaObjeto(){
		return $this->nomePessoaObjeto;
	}

	public function setNomePessoaObjeto($nomePessoaObjeto){
		$this->nomePessoaObjeto = $nomePessoaObjeto;
	}

	public function getNomeDeclarante(){
		return $this->nomeDeclarante;
	}

	public function setNomeDeclarante($nomeDeclarante){
		$this->nomeDeclarante = $nomeDeclarante;
	}

	public function getTipoCertidao(){
		return $this->tipoCertidao;
	}

	public function setTipoCertidao($tipoCertidao){
		$this->tipoCertidao = $tipoCertidao;
	}

	public function getDataEmissao(){
		return $this->dataEmissao;
	}

	public function setDataEmissao($dataEmissao){
		$this->dataEmissao = $dataEmissao;
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


<?php
require_once('Registravel.php');
require_once('Registro.php');
require_once('Certidao.php');
require_once('Casamento.php');
require_once('Nascimento.php');
require_once('Obito.php');
require_once('Propriedade.php');

$nsc1 = new Nascimento('bartolomeu','mae','nascimento','01-01-01','tabeliao1','cart1');
$csm1 = new Casamento('barto','mae','casamento','3-3-3','tabeliao2','cart3');
$csm2 = new Casamento('barto','mae','casamento','3-3-3','tabeliao2','cart3');
$obito1 = new Obito(3,'Ruppert','Filho','obito','7-7-7','tabeliao8','cart4');


$registroGeral = new Registro();

$registroGeral->adicionarRegistro($nsc1);
$registroGeral->adicionarRegistro($csm1);
$registroGeral->adicionarRegistro($obito1);
$registroGeral->mostrarRegistros();
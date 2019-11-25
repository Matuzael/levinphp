<?php

session_start();

require_once "../../vendor/autoload.php";

$metodoPagamento = new \App\Model\metodoPagamento();

$tipo= $_POST['tipo'];
$nomeCartao = $_POST['nomeCartao'];
$validade = $_POST['validade'];
$numCartao = $_POST['numCartao'];
$codCartao = $_POST['codCartao'];

$metodoPagamento->setTipo($tipo);
$metodoPagamento->setNomeCartao($nomeCartao);
$metodoPagamento->setValidade($validade);
$metodoPagamento->setNumCartao($numCartao);
$metodoPagamento->setCodSeguranca($codCartao);
$metodoPagamento->setIdUsuario($_SESSION['id']);

$metodoPagamentoDao = new \App\Model\metodoPagamentoDao();
$metodoPagamentoDao->create($metodoPagamento);


header("Location: ../perfil.php");







?>
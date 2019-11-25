<?php
namespace App\Model;
session_start();

require_once "../../vendor/autoload.php";

//Salvando método de pagamento
$metodoPagamento = new \App\Model\metodoPagamento();
$metodoPagamentoDao = new \App\Model\metodoPagamentoDao();

$tipo = $_POST['tipo'];
$nomeCartao = $_POST['nomeCartao'];
$numCartao = $_POST['numCartao'];
$validade = $_POST['validade'];
$codSeguranca = $_POST['codCartao'];

$metodoPagamentoDao->create();
var_dump($metodoPagamento->ultimoPagamento());;

//Salvando endereco
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];




$pedido = new \App\Model\Pedido();
$pedidoDao = new \App\Model\pedidoDao();

$idUsuario = $_SESSION['id'];






?>
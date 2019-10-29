<?php
require_once '../vendor/autoload.php';

$usuario = \App\Model\usuario();

$nome = $_POST['nome'];
$sobrenme = $_POST['sobrenome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$usuario->setNome($nome);
$usuario->setSobrenome($sobrenome);
$usuario->setEmail($email);
$usuario->setEndereco($endereco);
$usuario->setCidade($cidade);
$usuario->setEstado($estado);
$usuario->setCep($cep);


?>
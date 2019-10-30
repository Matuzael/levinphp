<?php

require_once "../../vendor/autoload.php";

$usuario = new \App\Model\Usuario();

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$usuario->setNome($nome);
$usuario->setSobrenome($sobrenome);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setEndereco($endereco);
$usuario->setCidade($cidade);
$usuario->setEstado($estado);
$usuario->setCep($cep);

$usuarioDao = new \App\Model\UsuarioDao();
$usuarioDao->create($usuario);


header("Location: ../login.php?sucesso");






?>
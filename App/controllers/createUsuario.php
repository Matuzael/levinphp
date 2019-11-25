<?php

require_once "../../vendor/autoload.php";

$usuario = new \App\Model\Usuario();

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario->setNome($nome);
$usuario->setSobrenome($sobrenome);
$usuario->setEmail($email);
$usuario->setSenha($senha);


$usuarioDao = new \App\Model\UsuarioDao();
$usuarioDao->create($usuario);


header("Location: ../login.php?sucesso");






?>
<?php 
session_start();
require_once '../../vendor/autoload.php';

$UsuarioDao = new \App\Model\UsuarioDao();
$usuario = new \App\Model\Usuario();

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha =$_POST['senha'];
$email = $_POST['email'];

$usuario->setNome($nome);
$usuario->setSobrenome($sobrenome);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setId($_POST['idUsuario']);


$UsuarioDao->update($usuario);

header('Location: ../listaUsuarios.php');



?>
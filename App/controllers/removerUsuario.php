<?php 

require_once "../../vendor/autoload.php";
$usuarioDao = new \App\Model\UsuarioDao();
$id = $_GET['id'];

$usuarioDao->delete($id);

header('Location: ../lista.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>
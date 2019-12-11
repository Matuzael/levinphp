<?php 

require_once "../../vendor/autoload.php";
$CarrinhoDao = new \App\Model\CarrinhoDao();
$id = $_GET['id'];

$CarrinhoDao->delete($id);

header('Location: ../checkout.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>
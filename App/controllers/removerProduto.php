<?php 

require_once "../../vendor/autoload.php";
$produtoDao = new \App\Model\ProdutoDao();
$id = $_GET['id'];

$produtoDao->delete($id);

header('Location: ../listaProdutos.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>
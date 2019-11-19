<?php

session_start();

require_once "../../vendor/autoload.php";

$carrinho = new \App\Model\Carrinho();
$carrinhoDao = new \App\Model\CarrinhoDao();

$nomeProduto = $_POST['nomeProduto'];
$valorProduto = $_POST['valorProduto'];
$tipoProduto = $_POST['tipoProduto'];
$fotoProduto = $_POST['fotoProduto'];

echo $nomeProduto;

$carrinho->setNomeProduto($nomeProduto);
$carrinho->setValorProduto($valorProduto);
$carrinho->setTipoProduto($tipoProduto);
$carrinho->setFotoProduto($fotoProduto);

$carrinho->setIdUsuario($_SESSION['id']);

$carrinhoDao->create($carrinho);






?>
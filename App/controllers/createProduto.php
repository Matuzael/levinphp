<?php

require_once "../../vendor/autoload.php";

$produto = new \App\Model\Produto();
$produtoDao = new \App\Model\ProdutoDao();

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$foto = $_POST['foto'];

$produto->setNome($nome);
$produto->setTipo($tipo);
$produto->setValor($valor);
$produto->setFoto($foto);

$produtoDao->create($produto);

header("Location: ../perfil.php");
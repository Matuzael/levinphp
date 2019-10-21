<?php
	require_once '../vendor/autoload.php';

	$produto = new \App\Model\produto();
	$produto->setNome("Microfone bom");
	$produto->setValor("R$ 200,00");
	$produto->setFoto("foto");
	//echo '<pre>' ,var_dump($produto) ,'</pre>';

	$produtoDao = new \App\Model\produtoDao();
	$produtoDao->create($produto);
?>




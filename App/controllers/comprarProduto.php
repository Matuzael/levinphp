<?php
namespace App\Model;
session_start();

require_once "../../vendor/autoload.php";

//Salvando método de pagamento
$metodoPagamento = new \App\Model\metodoPagamento();
$metodoPagamentoDao = new \App\Model\metodoPagamentoDao();

$tipo = $_POST['tipo'];
$nomeCartao = $_POST['nomeCartao'];
$numCartao = $_POST['numCartao'];
$validade = $_POST['validade'];
$codSeguranca = $_POST['codCartao'];

$metodoPagamento->setTipo($tipo);
$metodoPagamento->setNomeCartao($nomeCartao);
$metodoPagamento->setNumCartao($numCartao);
$metodoPagamento->setValidade($validade);
$metodoPagamento->setCodSeguranca($codSeguranca);

$metodoPagamentoDao->create($metodoPagamento);
$metodoAdicionado = $metodoPagamentoDao->ultimoPagamento();

/*echo '<pre>'.var_dump($metodoAdicionado).'</pre>';
echo $metodoAdicionado[0]['idPag']; */



//Salvando endereco
$endereco = new \App\Model\Endereco();
$enderecoDao = new \App\Model\EnderecoDao();

$endereco1 = $_POST['endereco'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$endereco->setEndereco($endereco1);
$endereco->setNumero($numero);
$endereco->setCidade($cidade);
$endereco->setEstado($estado);
$endereco->setCep($cep);

$enderecoDao->create($endereco);
$enderecoAdicionado = $enderecoDao->ultimoEndereco();

//echo '<pre>'.var_dump($enderecoAdicionado).'</pre>';


//Salvando Pedido
$pedido = new \App\Model\Pedido();
$pedidoDao = new \App\Model\pedidoDao();

//Setando id (chaves estrangeiras)
$pedido->setIdUsuario($_SESSION['id']);
$pedido->setEndereco($enderecoAdicionado[0]['idEnd']);
$pedido->setPagamento($metodoAdicionado[0]['idPag']);

$pedidoDao->create($pedido);
$pedidoAdicionado = $pedidoDao->ultimoPedido();


//Salvando Produtos Vendidos
$carrinhoDao = new \App\Model\CarrinhoDao();
$produtosCarrinho = $carrinhoDao->read($_SESSION['id']);

$produtoVendido = new \App\Model\ProdutoVendido();
$produtoVendidoDao = new \App\Model\ProdutoVendidoDao();

foreach($produtosCarrinho as $produto):
    $produtoVendido->setProduto($produto['nomeProduto']);
    $produtoVendido->setIdPedido($pedidoAdicionado[0]['idPedido']);
    $produtoVendidoDao->create($produtoVendido);
endforeach;

//Limpar carrinho
$carrinhoDao->deleteAll($_SESSION['id']);


header("Location: ../Perfil.php");

?>
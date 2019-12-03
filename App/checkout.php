<?php 
if(isset($_SESSION['logado'])):
  header("Location: login.php");
endif;

session_start();

require_once "../vendor/autoload.php";
$carrinhoDao = new \App\Model\CarrinhoDao();
$produtosCarrinho = $carrinhoDao->read($_SESSION['id']);

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Carrinho - Le vin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>

  

  <body class="bg-light">
    <div class="container">

       <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-family=Impact,Charcoal,sans-serif" > <img src="imgs/wine.png" width="40px;"> Le Vin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"> <img src="imgs/homepage.png"> Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkout.php"> <img src="imgs/checkout.png" />Carrinho </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php"> <img src="imgs/perfil.png" /> Perfil  </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


      <div class="py-5 text-center" style="margin-top:50px">
        <img class="d-block mx-auto mb-4" src="imgs/wine.png" alt="" width="72" height="72">
        <h2>Finalizar Compra</h2>
      </div>


      <!-- Carrinho -->

            <div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Seu carrinho</span>
          
                <?php echo  '<span class="badge badge-secondary badge-pill">'.sizeof($produtosCarrinho).'</span>' ?>
                </h4>

                <ul class="list-group mb-3">

            <?php              
              $valorTotal=0;
              foreach($produtosCarrinho as $credenciais):
                echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">'.$credenciais['nomeProduto'].'</h6>';

                  if($credenciais['tipoProduto'] == "Vinho"):
                    echo ' <small class="text badge badge-danger text-wrap">'.$credenciais['tipoProduto'].'</small>';
                  elseif($credenciais['tipoProduto'] == "Cerveja"):
                    echo ' <small class="text badge badge-warning text-wrap">'.$credenciais['tipoProduto'].'</small>';
                    elseif($credenciais['tipoProduto'] == "Cachaça"):
                      echo ' <small class="text badge badge-success text-wrap">'.$credenciais['tipoProduto'].'</small>';
                  endif;
                  
                    
                

                echo '</div>
                <span class="text-muted">R$'.$credenciais['valorProduto'].'</span>
              </li>';
              $valorTotal += $credenciais['valorProduto'];
              endforeach;
          
            echo '<li class="list-group-item d-flex justify-content-between">
              <span>Total (R$)</span>
              <strong>'.$valorTotal.'</strong>
            </li>';
            ?>

          </ul>

          <!-- Fim carrinho-->



              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Informe o Endereço de Envio</h4>


              <form action="controllers/comprarProduto.php" method="POST"> 
        
    
          <div class="form-row"> 
              <div class="form-group col-md-10">
    <label for="input-endereco">Endereço</label>
    <input name="endereco" type="text" class="form-control" id="input-endereco" placeholder="Rua dos Bobos, nº 0
    ">
  </div>

  <div class="form-group col-md-2">
    <label for="input-endereco">Número</label>
    <input name="numero" type="text" class="form-control" id="input-endereco" placeholder="Rua dos Bobos, nº 0
    ">
  </div>

  </div>

  
  <div class="form-row" id="op2">
  
  <div class="form-group col-md-5">
      <label for="input-foto">Cidade</label>
      <input name="cidade" type="text" class="form-control" id="input-foto" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="input-foto">Estado</label>
      <input name="estado" type="text" class="form-control" id="input-foto" placeholder="">
    </div>

    <div class="form-group col-md-3">
      <label for="input-foto">CEP</label>
      <input name="cep" type="text" class="form-control" id="input-foto" placeholder="">
    </div>

   <p> <h4 class="mb-3">Informações de Cobrança</h4> </p>
  
  </div>       
      <div class="form-row">
      
      <div class="form-group col-md-12">
          <label for="input-tipo">Método de Pagamento</label>
          <select name="tipo" id="input-tipo" class="form-control">
          <?php 
          
          ?>
            <option  selected >Escolha</option>
            <option value="credito">Boleto</option>
            <option value="debito">Cartão de Débito</option>
            <option value="boleto">Cartão de Débito</option>

          </select>
        </div>   
      </div>

      
  <div class="form-row" id="op1">
  <div class="form-group col-md-8">
      <label for="input-foto">Nome no Cartão</label>
      <input name="nomeCartao" type="text" class="form-control" id="input-foto" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="input-foto">Validade</label>
      <input name="validade" type="text" class="form-control" id="input-foto" placeholder="">
    </div>    
  </div>   

  <div class="form-row" id="op2">
  
  <div class="form-group col-md-8">
      <label for="input-foto">Numero do Cartão</label>
      <input name="numCartao" type="text" class="form-control" id="input-foto" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="input-foto">Código de Segurança</label>
      <input name="codCartao" type="text" class="form-control" id="input-foto" placeholder="">
    </div>
  
  </div>

      



          <div class="checkbox mb-3">
          
        
          </div>
          <button class="btn btn-lg btn-danger btn-block" type="submit" name="cadastrar">Comprar</button>
         
        </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019-2020 Le Vin</p>

      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>

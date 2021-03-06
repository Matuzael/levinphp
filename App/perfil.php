<!doctype html>
<html lang="en">
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

          <li class="nav-item active">
            <?php 
            session_start();
            if (isset($_SESSION['logado'])):
              if($_SESSION['logado']=='admin'):
              
              else:
                echo '<a class="nav-link " href="checkout.php"> <img src="imgs/checkout.png" />Carrinho </a>';
              endif;
              
            else:
              
              echo '<a class="nav-link " href="login.php"> <img src="imgs/checkout.png" />Carrinho </a>';
            endif;
            ?>
          </li>

          <li class="nav-item active">
            <?php 
              if (isset($_SESSION['logado'])):
                echo '<a class="nav-link" href="perfil.php"> <img src="imgs/perfil.png" /> Perfil</a>';
              else:
                echo '<a class="nav-link" href="login.php"> <img src="imgs/perfil.png"/> Login</a>';
              endif;
            ?>
          </li>

        </ul>
      </div>
    </div>
  </nav>

      <div class="py-5 text-center" style="margin-top:50px">
        <img class="d-block mx-auto mb-4" src="imgs/wine.png" alt="" width="72" height="72">
        <?php echo '<h2>Olá, '.$_SESSION['logado'].'</h2>'; ?>

      </div>

            <div class="row">

                        
      <?php
      //Visão ADMIN
        if($_SESSION['id']==1):
         echo '<div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Usuários</h5>
              <p class="card-text">Remover e/ou atualizar usuários</p>
              <a href="listaUsuarios.php" class="card-link">Listar Usuários</a>
            </div>
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Produtos</h5>
              <p class="card-text">Cadastrar, atualizar e/ou excluir produtos</p>
              <a href="cadastroProduto.php" class="card-link">Cadastrar </a>
              <a href="listaProdutos.php" class="card-link">Listar </a>
            </div>
          </div>
          </div>
          
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> Encerrar Sessão </h5>
              <a href="./controllers/logout.php" class="card-link"> Sair </a>
            

            </div>
          </div>
          </div>';

        else: 
          //Visão Usuário normal
          echo
          '<div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Seus Pedidos</h5>
              <p class="card-text">Verifique seus pedidos</p>
              <a href="#" style="color:red" class="card-link">Listar pedidos</a>
       
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Segurança</h5>
              <p class="card-text">Altere informações de sua conta</p>
              <a href="dadosUsuario.php"  style="color:red" class="card-link">Ver seus dados</a>
            </div>
          </div>
          </div>

    
          
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> Encerrar Sessão </h5>
              <a href="./controllers/logout.php" class="card-link"  style="color:red"> Sair </a>
            

            </div>
          </div>
          </div>';
                 
          
        endif;

      ?>
            

              
                     
           
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

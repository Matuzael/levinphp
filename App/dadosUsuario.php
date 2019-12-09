<?php
require_once "../vendor/autoload.php";
$usuarioDao = new \App\Model\UsuarioDao();
$usuarios = $usuarioDao->read();
?>

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
            session_start();
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
        <h2>Seus Dados</h2>
      </div>

            <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-size:30px;"><strong>Dados</strong></h5>
        <p class="card-text"><strong>ID:</strong> <?php echo $_SESSION['id'];?></h5>
        <p class="card-text"><strong>Nome:</strong> <?php echo $_SESSION['logado']?></p>
        <p class="card-text"><strong>Sobrenome: </strong><?php echo $_SESSION['sobrenome']?></p>
        <p class="card-text"><strong>Email: </strong> <?php echo $_SESSION['email']?></p>
        <p class="card-text"><strong>Senha: </strong><?php echo $_SESSION['senha']?></p>

        <a href="modificarUsuario.php" class="btn btn-danger">Modificar Dados</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-size:30px;"><strong>Informações Adicionais</strong></h5>
        <p class="card-text">Total de pedidos: </p>
      </div>
    </div>
  </div>
</div>
            


                        
     
            

              
                     
           
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Le Vin</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
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

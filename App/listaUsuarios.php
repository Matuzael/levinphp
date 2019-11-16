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
        <h2>Sua Conta</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>

            <div class="row">
            

<table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Endereco</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">CEP</th>
      <th scop="col">Ações</th>
    </tr>
  </thead>

  <tbody>
<?php 
foreach($usuarios as $credenciais):
    echo '<tr>
      <th scope="row">'.$credenciais["idUsuario"].'</th>
      <td scope="row">'. $credenciais["nome"].'</td>
      <td scope="row">'. $credenciais["sobrenome"].'</td>
      <td scope="row">'. $credenciais["email"].'</td>
      <td scope="row">'. $credenciais["senha"].'</td>
      <td scope="row">'. $credenciais["endereco"].'</td>
      <td scope="row">'. $credenciais["cidade"].'</td>
      <td scope="row">'. $credenciais["estado"].'</td>
      <td scope="row">'. $credenciais["cep"].'</td>
      <td scope="row"> <a href=controllers/removerUsuario.php?id=';
        echo $credenciais['idUsuario'];
      echo'> <img src="imgs/remover2.png"/></a> <img src="imgs/atualizar.png"/> </td>
    </tr>';

 
    
endforeach;
?>

    
 
  </tbody>
</table>

                        
     
            

              
                     
           
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

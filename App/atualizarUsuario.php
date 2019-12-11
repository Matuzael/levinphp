<?php 
require_once '../vendor/autoload.php';
$id = $_GET['id'];
$UsuarioDao = new \App\Model\UsuarioDao();
$usuarios =  $UsuarioDao->readOne($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cadastro - Le Vin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap//css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="container text-center">
  
    <form action="controllers/updateUsuario.php" method="POST"> 
    
    <a href="index.php" style="color:black">
    <img class="mb-4" src="imgs/wine.png" alt="" width="72" height="72"/>
     <h5><strong>Le Vin</strong></h5> </a>
    <h1  style="padding:30px;" class="h1 mb-3 font-weight-bold">Cadastro</h1>  
     
  <div class="form-row">

  <div class="form-group col-md-6">
      <label for="input-nome">Nome</label>
      <input <?php echo 'value="'.$usuarios[0]['nome'].'"';?> name="nome" type="text" class="form-control" id="input-nome" placeholder="Nome">
    </div>
  <div class="form-group col-md-6">
      <label for="input-sobrenome">Sobrenome</label>
      <input <?php echo 'value="'.$usuarios[0]['sobrenome'].'"';?> name="sobrenome" type="text" class="form-control" id="input-sobrenome" placeholder="Sobrenome">
   </div>

  <div class="form-group col-md-6">
      <label for="input-nome">Senha</label>
      <input <?php echo 'value="'.$usuarios[0]['senha'].'"';?> name="senha" type="text" class="form-control" id="input-nome" placeholder="Senha">
    </div>
  <div class="form-group col-md-6">
      <label for="input-sobrenome">Confirmar Senha</label>
      <input <?php echo 'value="'.$usuarios[0]['senha'].'"';?> name="confirmar-senha" type="text" class="form-control" id="input-sobrenome" placeholder="Digite sua senha novamente">
   </div>

    <div class="form-group col-md-12">
      <label for="input-email">Email</label>
      <input <?php echo 'value="'.$usuarios[0]['email'].'"';?> name="email" type="email" class="form-control" id="input-email" placeholder="Email">
    </div>

    <input name="idUsuario" type='hidden' <?php echo 'value="'.$id.'"';?>>
    
  </div>
  
  <div class="form-group">
    
  </div>      
      <div class="checkbox mb-3">
       
      
      </div>
      <button class="btn btn-lg btn-danger btn-block" type="submit" name="cadastrar">Atualizar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>
  </body>
</html>

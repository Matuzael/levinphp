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
  
    <form action="controllers/create-usuario.php" method="POST"> 
    
    <a href="index.php" style="color:black">
    <img class="mb-4" src="imgs/wine.png" alt="" width="72" height="72"/>
     <h5><strong>Le Vin</strong></h5> </a>
    <h1  style="padding:30px;" class="h1 mb-3 font-weight-bold">Cadastro</h1>  
     
  <div class="form-row">

  <div class="form-group col-md-6">
      <label for="input-nome">Nome</label>
      <input name="nome" type="text" class="form-control" id="input-nome" placeholder="Nome">
    </div>
  <div class="form-group col-md-6">
      <label for="input-sobrenome">Sobrenome</label>
      <input name="sobrenome" type="email" class="form-control" id="input-sobrenome" placeholder="Sobrenome">
   </div>
    

    <div class="form-group col-md-12">
      <label for="input-email">Email</label>
      <input name="email" type="email" class="form-control" id="input-email" placeholder="Email">
    </div>
    
  </div>
  <div class="form-group">
    <label for="input-endereco">Endereço</label>
    <input name="endereco" type="text" class="form-control" id="input-endereco" placeholder="Rua dos Bobos, nº 0
    ">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input-cidade">Cidade</label>
      <input name="cidade" type="text" class="form-control" id="input-cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="input-estado">Estado</label>
      <select name="estado" id="input-estado" class="form-control">
        <option  selected>Escolha</option>
        <option>RN</option>
        <option>SP</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="input-cep">CEP</label>
      <input name="cep" type="text" class="form-control" id="input-cep">
    </div>
  </div>
  <div class="form-group">
    
  </div>


      
      <div class="checkbox mb-3">
       
        <label >Já possui uma conta? <a href="login.php" style="color:red"> Faça login!</a></label>
      </div>
      <button class="btn btn-lg btn-danger btn-block" type="submit" name="cadastrar">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>

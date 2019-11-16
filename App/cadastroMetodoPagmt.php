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
  
    <form action="controllers/createMetodoPagmt.php" method="POST"> 
    
    <a href="index.php" style="color:black">
    <img class="mb-4" src="imgs/wine.png" alt="" width="72" height="72"/>
     <h5><strong>Le Vin</strong></h5> </a>
    <h1  style="padding:30px;" class="h1 mb-3 font-weight-bold">Cadastrar Modo de Pagamento</h1>  
      
  <div class="form-row">
  
  <div class="form-group col-md-12">
      <label for="input-tipo">Tipo</label>
      <select name="tipo" id="input-tipo" class="form-control">
        <option  selected >Escolha</option>
        <option value="credito">Cartão de Crédito</option>
        <option value="debito">Cartão de Débito</option>
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
       
        <label >Já possui uma conta? <a href="login.php" style="color:red"> Faça login!</a></label>
      </div>
      <button class="btn btn-lg btn-danger btn-block" type="submit" name="cadastrar">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>


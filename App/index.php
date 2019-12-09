<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Le Vin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Bebidas</h1>
        <div class="list-group">
        <strong>
          <a href="#" class="list-group-item active"> Todos </a>
          <a href="#" class="list-group-item ">Vinhos</a>
          <a href="#" class="list-group-item" >Cervejas</a>
          <a href="#" class="list-group-item" >xxxxxxx</a>
        </strong>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid"  width="900" height="350" src="imgs/vinhos3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" width="900" height="350" src="imgs/vinho2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" width="900" height="" src="imgs/vinhos5.jpg"  alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row" href="#a">
              
              <?php 
                
                require_once "../vendor/autoload.php";
                $produtoDao = new \App\Model\ProdutoDao();

              $produtos = $produtoDao->read();

        foreach($produtos as $produto):
          echo '
          <div class="col-lg-4 col-md-6 mb-4">
          <form method="POST" action="controllers/adicionarCarrinho.php">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" width="60" weight="30" src=imgs/'.$produto['foto'].' alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" style="color:red;">'.$produto['nome'].'</a>
                </h4>';

                if($produto['tipo'] == "Vinho"):
                  echo ' <small class="text badge badge-danger text-wrap">'.$produto['tipo'].'</small>';
                elseif($produto['tipo'] == "Cerveja"):
                  echo ' <small class="text badge badge-warning text-wrap">'.$produto['tipo'].'</small>';
                  elseif($produto['tipo'] == "Cachaça"):
                    echo ' <small class="text badge badge-success text-wrap">'.$produto['tipo'].'</small>';
                endif;

           




              echo '<h5>R$'.$produto['valor'].'</h5>
            </div>';
            
           
              echo '<button type="submit">Adicionar ao Carrinho </button>';
          
            
            echo '
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>';

          echo '<input name="nomeProduto" type="hidden" value="'.$produto['nome'].'"/>';
          echo '<input name="valorProduto" type="hidden" value="'.$produto['valor'].'">';
          echo '<input name="tipoProduto" type="hidden" value="'.$produto['tipo'].'"/>';
          echo '<input name="fotoProduto" type="hidden" value="'.$produto['foto'].'"/>
          </form>
        </div>';
            endforeach;
          ?>

       
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

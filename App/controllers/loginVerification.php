<?php 
require_once "../../vendor/autoload.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuarioDao = new \App\Model\UsuarioDao();
$resultado = $usuarioDao->read();

$contador = 0;


foreach($resultado as $credenciais):
    if($credenciais['email'] == $email && $credenciais['senha']==$senha):

       
        session_start();
        $_SESSION['logado'] = $credenciais['nome'].$credenciais['id'];
        header("Location: ../index.php?sucesso"); 
    else:

    endif;
endforeach;






//if($email == $resultado['email'] and $senha==$resultado['senha']):
  //  header("Location: index.php?sucesso");
//endif;




?>
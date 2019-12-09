<?php
   
namespace App\Model; 
   
class Conexao{
    private static $instance;
    
    public static function getConn(){

        //Se não existir instância, crie uma
        if(!isset(self::$instance)):
            //self::$instance = new \PDO('mysql:host=localhost;dbname=levin;charset=utf8','root','');
            self::$instance = new \PDO('mysql:host=remotemysql.com;dbname=RFHFVQykai;charset=utf8','RFHFVQykai','Mz5w2GA7Z2');
        
        endif;

        return self::$instance;
    }
}
?>
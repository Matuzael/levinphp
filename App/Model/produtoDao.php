<?php

namespace App\Model; 

class ProdutoDAO{

    public function create(Produto $p){

        echo "<pre>" ,var_dump($p), "</pre>";
        
    
        echo '<pre>' , var_dump($p->getFoto()) , "</pre>";

        $sql = 'INSERT INTO produtos(foto,nome,valor) VALUES (?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getFoto());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getValor());

        $stmt->execute();

    }

    public function read(){

    }

    public function update(Produto $p){

    }

    public function delete($id){

    }

}
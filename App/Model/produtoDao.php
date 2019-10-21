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

        $sql = 'SELECT * FROM produtos';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->execute();

        if($stmt->rowCount()> 0):
            //Tendo registros no banco, ele retorna um array para $resultados;
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        
        else:
            return [];
        endif;

    }

    public function update(Produto $p){
        $sql = 'UPDATE produtos set foto=?, nome=?, valor=? WHERE id = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getFoto());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getValor());
        $stmt->bindValue(4, $p->getId());

        $stmt->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM produtos WHERE id=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);

        $stmt->execute();

    }

}
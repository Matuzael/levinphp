<?php

namespace App\Model; 

class CarrinhoDao{

    public function create(Carrinho $c){

        $sql = 'INSERT INTO carrinho(idUsuario,nomeProduto,valorProduto,tipoProduto,fotoProduto) VALUES (?,?,?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$c->getIdUsuario());
        $stmt->bindValue(2, $c->getNomeProduto());
        $stmt->bindValue(3, $c->getValorProduto());
        $stmt->bindValue(4, $c->getTipoProduto());
        $stmt->bindValue(5, $c->getfotoProduto());

        $stmt->execute();

    }

    public function read($id){

        $sql = 'SELECT * FROM carrinho WHERE idUsuario=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        if($stmt->rowCount()> 0):
            //Tendo registros no banco, ele retorna um array para $resultados;
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        
        else:
            return [];
        endif;

    }

    public function update(Carrinho $c){
        $sql = 'UPDATE carrinho set nomeProduto=?, valorProduto=?,tipoProduto=?,fotoProduto=? WHERE idProduto = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getFoto());
        $stmt->bindValue(3, $c->getTipo());
        $stmt->bindValue(4, $c->getValor());
        $stmt->bindVaue(5, $c->getIdProduto());

        $stmt->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM carrinho WHERE id=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);

        $stmt->execute();

    }

}
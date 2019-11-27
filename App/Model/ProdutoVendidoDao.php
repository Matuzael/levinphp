<?php

namespace App\Model; 

class ProdutoVendidoDao{

    public function create(ProdutoVendido $pv){

        $sql = 'INSERT INTO produtosVendidos(idPedido,produto) VALUES (?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $pv->getIdPedido());
        $stmt->bindValue(2, $pv->getProduto());

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM produtosVendidos';

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

    public function update(ProdutoVendido $pv){
        $sql = 'UPDATE produtosVendidos set idPedido=?, produto=? WHERE idPVendido=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $pv->getIdPedido());
        $stmt->bindValue(2, $pv->getProduto());
        $stmt->bindValue(3, $pv->getIdPVendido());
        $stmt->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM produtosVendidos WHERE id=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);

        $stmt->execute();

    }

}
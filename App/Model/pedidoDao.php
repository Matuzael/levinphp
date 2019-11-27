<?php

namespace App\Model; 

class PedidoDao{

    public function create(Pedido $p){

        $sql = 'INSERT INTO pedidos(idUsuario,endereco,pagamento) VALUES (?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getIdUsuario());
        $stmt->bindValue(2, $p->getEndereco());
        $stmt->bindValue(3, $p->getPagamento());

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM pedidos';

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

    public function update(Pedido $p){
        $sql = 'UPDATE pedidos set idUsuario=?, endereco=?, pagamento=? WHERE idPedido=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getIdUsuario());
        $stmt->bindValue(2, $p->getEndereco());
        $stmt->bindValue(3, $p->getPagamento());
        $stmt->bindValue(4, $p->getIdPedido());
        $stmt->execute();
    }

    public function delete($idPedido){

        $sql = 'DELETE FROM pedido WHERE idPedido=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$idPedido);

        $stmt->execute();

    }

    public function ultimoPedido(){

        $sql = 'SELECT idPedido from pedidos order by idPedido desc limit 1';

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

}
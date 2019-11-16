<?php

namespace App\Model; 

class metodoPagamentoDao{

    public function create(metodoPagamento $mp){

        $sql = 'INSERT INTO metodopagamento(idUsuario, tipo, nomeCartao, numCartao, validade, codSeguranca) VALUES (?,?,?,?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $mp->getIdUsuario());
        $stmt->bindValue(2, $mp->getTipo());
        $stmt->bindValue(3, $mp->getNomeCartao());
        $stmt->bindValue(4, $mp->getNumCartao());
        $stmt->bindValue(5, $mp->getValidade());
        $stmt->bindValue(6, $mp->getCodSeguranca());

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM metodopagamento';

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

    public function update(metodoPagamento $mp){
        $sql = 'UPDATE metodopagamento set idUsuario=?, tipo=?, nomeCartao=?, numCartao=?, validade=?, codSeguranca=? WHERE idPag=?';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $mp->getIdUsuario());
        $stmt->bindValue(2, $mp->getTipo());
        $stmt->bindValue(3, $mp->getNomeCartao());
        $stmt->bindValue(4, $mp->getNumCartao());
        $stmt->bindValue(5, $mp->getValidade());
        $stmt->bindValue(6, $mp->getCodSeguranca());
        $stmt->bindValue(7,$mp->getIdPag());

        $stmt->execute();
    }

    public function delete($idPag){

        $sql = 'DELETE FROM metodopagamento WHERE idPag=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$idPag);

        $stmt->execute();

    }

}
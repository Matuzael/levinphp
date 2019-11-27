<?php

namespace App\Model; 

class EnderecoDao{

    public function create(Endereco $e){

        $sql = 'INSERT INTO endereco(endereco,numero,cidade,estado,cep) VALUES (?,?,?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$e->getEndereco());
        $stmt->bindValue(2, $e->getNumero());
        $stmt->bindValue(3, $e->getCidade());
        $stmt->bindValue(4, $e->getEstado());
        $stmt->bindValue(5, $e->getCep());

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM endereco';

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

    public function update(Endereco $e){
        $sql = 'UPDATE endereco set endereco=?, numero=?,cidade=?,estado=?,cep=? WHERE idEnd = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $e->getEndereco());
        $stmt->bindValue(2, $e->getNumero());
        $stmt->bindValue(3, $e->getCidade());
        $stmt->bindValue(4, $e->getEstado());
        $stmt->bindVaue(5, $e->getCep());
        $stmt->bindValue(6,$e->idEnd());

        $stmt->execute();
    }

    public function delete($idEnd){

        $sql = 'DELETE FROM endereco WHERE idEnd=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$idEnd);

        $stmt->execute();

    }

    public function ultimoEndereco(){

        $sql = 'SELECT idEnd from endereco order by idEnd desc limit 1';

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


<?php

namespace App\Model; 

class UsuarioDao{

    public function create(Usuario $u){

        $sql = 'INSERT INTO usuarios(nome,sobrenome,email,senha, endereco,cidade,estado,cep) VALUES (?,?,?,?,?,?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getNome());
        $stmt->bindValue(2, $u->getSobrenome());
        $stmt->bindValue(3, $u->getEmail());
        $stmt->bindValue(4, $u->getSenha());
        $stmt->bindValue(5, $u->getEndereco());
        $stmt->bindValue(6, $u->getCidade());
        $stmt->bindValue(7, $u->getEstado());
        $stmt->bindValue(8, $u->getCep());

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM usuarios';

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

    public function update(Usuario $u){
        $sql = 'UPDATE usuarios set nome=?, sobrenome=?, email=?, senha=?, endereco=?, cidade=?, estado=?, cep=? WHERE idUsuario=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getNome());
        $stmt->bindValue(2, $u->getSobrenome());
        $stmt->bindValue(3, $u->getEmail());
        $stmt->bindValue(4, $u->getSenha());
        $stmt->bindValue(5, $u->getEndereco());
        $stmt->bindValue(6, $u->getCidade());
        $stmt->bindValue(7, $u->getEstado());
        $stmt->bindValue(8, $u->getCep());
        $stmt->bindValue(9,$u->getidUsuario());
        $stmt->execute();
    }

    public function delete($idUsuario){

        $sql = 'DELETE FROM usuarios WHERE idUsuario=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$idUsuario);

        $stmt->execute();

    }

}
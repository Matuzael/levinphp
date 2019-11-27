<?php 

namespace App\Model;

class Endereco{
    private $idEnd, $endereco, $numero, $cidade, $estado, $cep;

    public function getIdEnd(){
        return $idEnd;
    }

    public function setIdEnd($idEnd){
        $this->idEnd = $idEnd;
    }
    
    
    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
    
    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }


    


}

?>
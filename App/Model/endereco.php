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
        return $endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getNumero(){
        return $numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getCidade(){
        return $cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }



    


}

?>
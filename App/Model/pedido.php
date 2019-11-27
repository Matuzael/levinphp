<?php

namespace App\Model; 

class Pedido{
    
    private $idPedido, $idUsuario, $endereco, $pagamento;

    public function getIdPedido(){
        return $this->idPedido;
    }
    
    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }

    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    
    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    
    public function getPagamento(){
        return $this->pagamento;
    }
    
    public function setPagamento($pagamento){
        $this->pagamento = $pagamento;
    }

}
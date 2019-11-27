<?php

namespace App\Model; 

class ProdutoVendido{
    
    private $idPVendido, $idPedido, $produto;

    public function getIdPVendido(){
        return $this->getIdPVendido;
    }

    public function setIDPVendido($idPVendido){
        $this->getIdPVendido = $idPVendido;
    }

    public function getIdPedido(){
        return $this->idPedido;
    }
    
    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }


    public function getProduto(){
        return $this->produto;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }

}
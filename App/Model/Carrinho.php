<?php

namespace App\Model; 

class Carrinho{
    
    private $idCarrinho, $idUsuario, $nomeProduto, $valorProduto, $tipoProduto, $fotoProduto;

    public function getIdCarrinho(){
        return $this->idCarrinho;

    }

    public function setIdCarrinho($idCarrinho){
        $this->idCarrinho = $idCarrinho;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getNomeProduto(){
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto){
        $this->nomeProduto = $nomeProduto;
    }

    public function getValorProduto(){
        return $this->valorProduto;
    }

    public function setValorProduto($valorProduto){
        $this->valorProduto = $valorProduto;
    }

    
    public function getTipoProduto(){
        return $this->tipoProduto;
    }

    public function setTipoProduto($tipoProduto){
        $this->tipoProduto = $tipoProduto;
    }

    
    public function getFotoProduto(){
        return $this->fotoProduto;
    }

    public function setFotoProduto($fotoProduto){
        $this->fotoProduto = $fotoProduto;
    }
    
}

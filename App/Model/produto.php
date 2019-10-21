<?php

namespace App\Model; 

class Produto{
    
    private $id, $nome, $foto, $valor;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
}
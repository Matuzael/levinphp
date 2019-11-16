<?php

namespace App\Model; 

class metodoPagamento{
    
    private $idPag, $idUsuario, $tipo, $nomeCartao, $numCartao, $validade, $codSeguranca;

    public function getIdPag(){
        return $this->$idPag;
    }

    public function setIdPag($idPag){
        $this->idPag = $idPag;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getNomeCartao(){
        return $this->nomeCartao;
    }

    public function setNomeCartao($nomeCartao){
        $this->nomeCartao = $nomeCartao;
    }

    public function getNumCartao(){
        return $this->numCartao;
    }

    public function setNumCartao($numCartao){
        $this->numCartao = $numCartao;
    }

    public function getValidade(){
        return $this->validade;
    }

    public function setValidade($validade){
        $this->validade = $validade;
    }

    public function getCodSeguranca(){
        return $this->codSeguranca;
    }

    public function setCodSeguranca($codSeguranca){
        $this->codSeguranca = $codSeguranca;
    }

}
<?php 
namespace App\Model; 

class Usuario{
    private $id, $nome, $sobrenome, $email, $senha, $endereco, $cidade, $estado, $cep;

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

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
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
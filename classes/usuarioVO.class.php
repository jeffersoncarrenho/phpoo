<?php
class usuarioVO{
    //propriedades
    private $idusuario      = NULL;
    private $nome           = NULL;
    private $login          = NULL;
    private $email          = NULL;
    private $senha          = NULL;
    
    //métodos
    
    public function getidusuario(){
        return $this->idusuario;
    }//getidusuario
    
    public function getnome(){
        return $this->nome;
    }//getnome
    
    public function getlogin(){
        return $this->login;
    }//getlogin
    
    public function getemail(){
        return $this->email;
    }//getemail
    
    public function getsenha(){
        return $this->senha;
    }//getsenha
    
    public function setidusuario($idusuario){
        return $this->idusuario = $idusuario;
    }//setidusuario
    
    public function setnome($nome){
        return $this->nome = $nome;
    }//setnome
    
    public function setlogin($login){
        return $this->login = $login;
    }//setlogin
    
    public function setemail($email){
        return $this->email = $email;
    }//setemail
    
    public function setsenha($senha){
        return $this->senha = $senha;
    }//setsenha
}//usuarioVO
?>
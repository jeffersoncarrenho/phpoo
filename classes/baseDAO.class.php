<?php

abstract class baseDAO{
    //propriedades
    protected $servidor           = "";
    protected $usuario            = "";
    protected $senha              ="";
    protected $nomebanco          = "";
    protected $conexao            = null;
    protected $linhasafetadas     = 0;
    protected $autocommit         = 0; //controle de transações | autocommit
    
    public function __construct(){
        
    }//construct
    
    public function __destruct(){
        
    }//destruct
    
    public function conecta(){
    
    }//conecta
    
    public function start(){
    
    }//start
    
    public function commit(){
    
    }//commit
    
    public function rollback(){
    
    }//rollback

    public function INSERT(){
    
    }//insert
    
    public function UPDATE(){
    
    }//update
    
    public function DELETE(){
    
    }//delete
    
    public function SELECT(){
    
    }//select
    
    public function setLinhasAfetadas(){
    
    }//setLinhasAfetadas
    
    public function getLinhasAfetadas(){
    
    }//getLinhasAfetadas
    
    public function trataerro(){
    
    }//trataerro

}//baseDAO

?>
<?php

abstract class baseDAO{
    //propriedades
    protected $servidor           = "localhost";
    protected $usuario            = "root";
    protected $senha              = "";
    protected $nomebanco          = "phpoobd";
    protected $conexao            = null;
    protected $linhasafetadas     = 0;
    protected $autocommit         = 1; //controle de transações | autocommit
    
    public function __construct(){
        $this->conecta();    
    }//construct
    
    public function __destruct(){
        if($this->conexao != null) mysql_close($this->conexao);
    }//destruct
    
    public function conecta(){
        $this->conexao = mysql_connect($this->servidor, $this->usuario, $this->senha) or die ($this->trataerro(__FILE__, __FUNCTION__, mysql_errno(), mysql_error(), true));
        mysql_select_db($this->nomebanco) or die ($this->trataerro(__FILE__, __FUNCTION__, mysql_errno(), mysql_error(), true));
        if($this->autocommit == 0):
            mysql_query("SET AUTOCOMMIT=0");
        else:    
            mysql_query("SET AUTOCOMMIT=1");
        endif;
        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET character_set_connection=utf8");
        mysql_query("SET character_set_client=utf8");
        mysql_query("SET character_set_results=utf8");
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
    
    public function trataerro($arquivo=null,$rotina=null, $numerro=null, $msgerro=null, $geraexcept = false){
        if($arquivo == null) $arquivo = "Não informado";
        if($rotina == null) $rotina = "Não informado";
        if($numerro == null) $numerro = mysql_errno($this->conexao);
        if($msgerro == null) $msgerro = mysql_error($this->conexao);
        
        $result = 'Ocorreu um erro com os seguintes detalhes:
                    <strong>Arquivo: </strong>'. $arquivo .'<br/>
                    <strong>Rotina: </strong>'. $rotina .'<br/>
                    <strong>Codigo: </strong>'. $numerro .'<br/>
                    <strong>Mensagem: </strong>'. $msgerro;
        if($geraexcept == false):
            echo $result;
        else:
            throw new Exception($result);
        endif;
    }//trataerro
}//baseDAO

?>
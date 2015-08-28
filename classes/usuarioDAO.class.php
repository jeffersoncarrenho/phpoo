<?php
require_once("baseDAO.class.php");
require_once("usuarioVO.class.php");

class usuarioDAO extends baseDAO{

    //métodos
    public function inserir(usuarioVO $objVO){
        $sql = sprintf('INSERT INTO usuarios(nome, login, email, senha) Values("%s","%s","%s","%s");',
                        addslashes($objVO->getnome()),
                        addslashes($objVO->getlogin()),
                        addslashes($objVO->getemail()),
                        addslashes($objVO->getsenha())
        );
            
        $this->INSERT($sql);
        if($this->getLinhasAfetadas() == 1):
            $objVO->setidusuario(mysql_insert_id($this->conexao));
            $this->commit();
            return $objVO;
        else:
            $this->rollback();
            $this->trataerro(__FILE__, __FUNCTION__, NULL, "quantidade de linhas inseridas diferente de 1, verifique", true);
        endif;
            
        
    }//inserir
    
    public function atualizar(){
    
    }//atualizar
    
    public function deletar(){
    
    }//deletar
    
    public function selecionar(){
    
    }//selecionar
    
    public function getALL(){
    
    }//getALL
    
    public function getbYID(){
    
    }//getByID

}//usuarioDAO



?>
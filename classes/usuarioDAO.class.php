<?php
require_once("baseDAO.class.php");
require_once("usuarioVO.class.php");

class usuarioDAO extends baseDAO{

    //métodos
    public function inserir(usuarioVO $objVO){
        $sql = sprintf('INSERT INTO usuarios(nome, email, login, senha) Values("%s","%s","%s","%s");',
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
            $this->trataerro(__FILE__, __FUNCTION__, NULL, "Quantidade de linhas inseridas diferente de 1, verifique", true);
        endif;
            
        
    }//inserir
    
    public function atualizar(usuarioVO $objVO){
        if($objVO->getidusuario() == null):
            $this->trataerro(__FILE__, __FUNCTION__, NULL, 'Chave primaria nao definida ou invalida, verifique.', TRUE);
        else:
            $sql = sprintf('UPDATE usuarios SET nome="%s", email="%s", login="%s", senha="%s" where id="%s";',
                            addslashes($objVO->getnome()),
                            addslashes($objVO->getlogin()),
                            addslashes($objVO->getemail()),
                            addslashes($objVO->getsenha()),
                            addslashes($objVO->getidusuario())
                          );
            $this->UPDATE($sql);
            if($this->getLinhasAfetadas() == 1):
                $this->commit();
                return $objVO;
            else:
                $this->rolback();
                $this->trataerro(__FILE__, __FUNCTION__, NULL, 'Quantidade de linhas afetadas diferente de 1, verifique.',true);
            endif;
        endif;
    }//atualizar
    
    public function deletar(usuarioVO $objVO){
        if($objVO->getidusuario() == null):
                $this->trataerro(__FILE__, __FUNCTION__, NULL, 'Chave primaria nao definida ou invalida, verifique.', TRUE);
            else:
                $sql = sprintf('DELETE FROM usuarios where id="%s";',
                                addslashes($objVO->getidusuario())
                              );
                $this->UPDATE($sql);
                if($this->getLinhasAfetadas() == 1):
                    $this->commit();
                    return $objVO;
                else:
                    $this->rolback();
                    $this->trataerro(__FILE__, __FUNCTION__, NULL, 'Quantidade de linhas afetadas diferente de 1, verifique.',true);
                endif;
            endif;
    }//deletar
    
    public function selecionar(){
        
    }//selecionar
    
    public function getALL(){
    
    }//getALL
    
    public function getbYID(){
    
    }//getByID

}//usuarioDAO



?>
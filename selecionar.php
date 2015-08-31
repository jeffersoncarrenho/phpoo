
<?php
require_once("classes/usuarioVO.class.php");
require_once("classes/usuarioDAO.class.php");

$teste1 = new usuarioDAO();
//$listausuarios = $teste1->selecionar();
//$listausuarios = $teste1->getALL();
//$listausuarios = $teste1->getByID(5);
$listausuarios = $teste1->selecionar(NULL, 'id <= 6');

if(sizeof($listausuarios)>0):
    foreach($listausuarios as $objVO):
        printf('ID: %s <br/>', $objVO->getidusuario());
        printf('Nome: %s <br/>', $objVO->getnome());
        printf('Email: %s <br/>', $objVO->getemail());
        printf('Login: %s <br/>', $objVO->getlogin());
        printf('Senha: %s <br/>', $objVO->getsenha());
        echo '<hr>';
    endforeach;
endif;
?>

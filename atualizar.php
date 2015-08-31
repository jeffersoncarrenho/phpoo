<?php
require_once("classes/usuarioVO.class.php");
require_once("classes/usuarioDAO.class.php");

$user1 = new usuarioVO();
$user1->setidusuario('1');
$user1->setnome('Jao silva');
$user1->setemail('jao@teste.com.br');
$user1->setlogin('jao');
$user1->setsenha('7894613');

$teste1 = new usuarioDAO();
$atualizado = $teste1->atualizar($user1);

?>
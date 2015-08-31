<?php
require_once("classes/usuarioVO.class.php");
require_once("classes/usuarioDAO.class.php");

$user1 = new usuarioVO();
$user1->setnome('Jefferson Lima');
$user1->setemail('jefferson@teste.com.br');
$user1->setlogin('jeff');
$user1->setsenha('12345555');

$teste1 = new usuarioDAO();
$inserido = $teste1->inserir($user1);
echo ($inserido->getidusuario());
?>
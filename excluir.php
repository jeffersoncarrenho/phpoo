<?php
require_once("classes/usuarioVO.class.php");
require_once("classes/usuarioDAO.class.php");

$user1 = new usuarioVO();
$user1->setidusuario('1');

$teste1 = new usuarioDAO();
$excuido = $teste1->deletar($user1);

?>
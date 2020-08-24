<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql-> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
$root = new Usuario();
$root->loadbyId(3);
echo $root;
*/

/* getList é statico, então nem precisa instanciar o objeto usuario...
// chama direto a função.
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* search é statico, então nem precisa instanciar o objeto usuario...
// chama direto a função.
$search = Usuario::search("ser");
echo json_encode($search);
*/

// carrega um usuario usando o login e a senha

$usuario = new Usuario();
$usuario->login("user","12345");
echo $usuario;

?>




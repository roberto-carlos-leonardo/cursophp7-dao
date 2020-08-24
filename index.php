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

/* carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("user","12345");
echo $usuario;
*/

/* chamando insert sem a função contrutor 
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("aluno");
$aluno->insert();
echo $aluno;
*/
/* chamando insert com a função contrutor 
$aluno = new Usuario("aaaa","bbbb");
$aluno->insert();
echo $aluno;
*/


$usuario = new Usuario();
$usuario->loadbyId(12);
$usuario->update("teste","testado");
echo $usuario;

?>

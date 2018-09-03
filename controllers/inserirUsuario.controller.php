<?php

$email = $_POST['email'];
$pass = $_POST['pass'];
$passConfirmacao = $_POST['passConfirmacao'];
$perfil = $_POST['perfil'];
$nome = $_POST['nome'];
$unidadePolicial_id = $_POST['unidadePolicial_id'];


require_once '../classes/usuario.php';
use App\classes\usuario\Usuario as Usuario;

$usuario = new Usuario;

$usuario->inserirUsuario($email, $pass, $perfil, $nome, $unidadePolicial_id);



echo '<b>Usuario criado com sucesso.</b><br />';
echo "Email: ".$email."<br />";
echo "Pass: ".$pass."<br />";
echo "Confirmação: ".$passConfirmacao."<br />";
echo "Perfil: ".$perfil."<br />";
echo "Nome: ".$nome."<br />";
echo "Unidade Policial: ".$unidadePolicial_id."<br />";

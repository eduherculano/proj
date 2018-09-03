<?php

$categoria = $_POST['categoria'];

require_once '../classes/perfil.php';
use App\classes\perfil\Perfil as Perfil;


$perfil = new Perfil;

$perfil->inserirPerfil($categoria);


echo '<b>Categoria criada com sucesso.</b><br />';
echo "Categoria: ".$categoria."<br />";

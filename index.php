<pre>
<?php

require_once "controllers/usuario.php";
require_once "controllers/pessoa.php";
require_once "controllers/operacao.php";
require_once "controllers/local.php";

use App\controllers\usuario\Usuario as Usuario;
use App\controllers\pessoa\Pessoa as Pessoa;
use App\controllers\operacao\Operacao as Operacao;
use App\controllers\local\Local as Local;

require_once "models/conexao.php";

use App\models\conexao\Conexao as Conexao;


$usuario = new Usuario;
$pessoa = new Pessoa;
$operacao = new Operacao;
$local = new Local;
$pesquisar = new Conexao;

//print_r($pesquisar->pesquisarTodosUsuarios());


$email = 'janio.junior2@policiacivil.sp.gov.br';
$pass = '1234554321';
$acesso = 'analista';
$nome = 'Jânio Konno Júnior';
$unidadePolicial_id = 1;

//$pesquisar->inserirUsuario($email, $pass, $acesso, $nome, $unidadePolicial_id);

$buscar = 'jânio';

print_r($pesquisar->pesquisarUsuariosPorNome($buscar));








/*
print_r($usuario);
echo "<hr />";
print_r($pessoa);
echo "<hr />";
print_r($operacao);
echo "<hr />";
print_r($local);
echo "<br /><br />";
echo "<hr />";
echo "<br /><br />";
var_dump($usuario);
echo "<hr />";
var_dump($pessoa);
echo "<hr />";
var_dump($operacao);
echo "<hr />";
var_dump($local);
 */
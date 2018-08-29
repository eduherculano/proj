<pre>
<?php

require_once "models/usuario.php";
require_once "models/pessoa.php";
require_once "models/operacao.php";
require_once "models/local.php";

use App\models\usuario\Usuario as Usuario;
use App\models\pessoa\Pessoa as Pessoa;
use App\models\operacao\Operacao as Operacao;
use App\models\local\Local as Local;

require_once "controllers/conexao.php";

use App\controllers\conexao\Conexao as Conexao;


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
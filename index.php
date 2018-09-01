<pre>
<?php

require_once 'controllers/usuario.php';
require_once 'controllers/pessoa.php';
require_once 'controllers/operacao.php';
require_once 'controllers/local.php';

use App\controllers\usuario\Usuario as ControlarUsuario;
use App\controllers\pessoa\Pessoa as Pessoa;
use App\controllers\operacao\Operacao as Operacao;
use App\controllers\local\Local as Local;

$usuario = new ControlarUsuario;
$pessoa = new Pessoa;
$operacao = new Operacao;
$local = new Local;



require_once 'models/usuario.php';
require_once 'models/unidadePolicial.php';

use App\models\usuario\Usuario as PesquisarUsuario;
use App\models\unidadePolicial\UnidadePolicial as PesquisarUnidadePolicial;




$usuario = new PesquisarUsuario;

print_r($usuario->retornarTodosUsuarios());
//$unidadePolicial_id = 1;
$email = 'eduardo.silva13@policiacivil.sp.gov.br';
$pass = '1234554321';
$acesso = 'administrador';
$nome = 'Eduardo Herculano da Silva';
$unidadePolicial_id = 1;
//$usuario->inserirUsuario($email, $pass, $acesso, $nome, $unidadePolicial_id);
//$buscar = 'eduardo';
//print_r($pesquisar->pesquisarUsuariosPorNome($buscar));


echo '<br /><br />';

$unidadePolicial = new PesquisarUnidadePolicial;

$unidade = 'PLANTÃO POLICIAL';
$local_id = 5;
$telefone_id = 7;
$email_id = '21x';
//$unidadePolicial->inserirUnidadePolicial($unidade, $local_id, $telefone_id, $email_id);
print_r($unidadePolicial->retornarTodasUnidadesPoliciais());




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
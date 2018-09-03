<pre>
<?php

require_once 'classes/usuario.php';
require_once 'classes/operacao.php';
require_once 'classes/unidadePolicial.php';
require_once 'classes/pessoa.php';
require_once 'classes/local.php';


use App\classes\usuario\Usuario as Usuario;
use App\classes\operacao\Operacao as Operacao;
use App\classes\unidadePolicial\UnidadePolicial as UnidadePolicial;
use App\classes\pessoa\Pessoa as Pessoa;
use App\classes\local\Local as Local;



// ------------------------------ MANIPULAÇÃO DA CLASSE USUÁRIO ------------------------------
echo '<br /><br />';
$usuario = new Usuario;


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



// ------------------------------ MANIPULAÇÃO DA CLASSE OPERAÇÃO ------------------------------
echo '<br /><br />';
$operacao = new Operacao;


$operacao->adicionarPessoa('Pessoa 1');
$operacao->adicionarPessoa('Pessoa 3');
$operacao->adicionarPessoa('Pessoa 3');
var_dump($operacao->getPessoa());




// ------------------------------ MANIPULAÇÃO DA CLASSE UNIDADEPOLICIAL ------------------------------
echo '<br /><br />';
$unidadePolicial = new UnidadePolicial;


$unidade = 'PLANTÃO POLICIAL';
$local_id = 5;
$telefone_id = 7;
$email_id = '21x';
//$unidadePolicial->inserirUnidadePolicial($unidade, $local_id, $telefone_id, $email_id);
print_r($unidadePolicial->retornarTodasUnidadesPoliciais());
print_r($unidadePolicial->pesquisarUnidadesPoliciaisPorUnidade("cad"));


// ------------------------------ MANIPULAÇÃO DA CLASSE PESSOA ------------------------------
echo '<br /><br />';
$pessoa = new Pessoa;




// ------------------------------ MANIPULAÇÃO DA CLASSE LOCAL ------------------------------
echo '<br /><br />';
$local = new Local;





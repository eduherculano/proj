<pre>
<?php

require_once "models/usuario.php";
require_once "models/pessoa.php";
require_once "models/operacao.php";
require_once "models/local.php";

use App\usuario\Usuario as Usuario;
use App\pessoa\Pessoa as Pessoa;
use App\operacao\Operacao as Operacao;
use App\local\Local as Local;

$usuario = new Usuario;
$pessoa = new Pessoa;
$operacao = new Operacao;
$local = new Local;

var_dump($usuario);
echo "<br /><br />";
var_dump($pessoa);
echo "<br /><br />";
var_dump($operacao);
echo "<br /><br />";
var_dump($local);



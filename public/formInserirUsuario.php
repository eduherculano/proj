<?php
setcookie('cookie');

$email = $_COOKIE['email'];
$nome = $_COOKIE['nome'];
$unidadePolicial_id = $_COOKIE['unidadePolicial_id'];
        
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Cadastro de Usuário</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Cadastro de Usuário</h1>
        <form method="POST" action="../controllers/inserirUsuario.controller.php">
            <input type="email" name="email" placeholder="E-mail" size="50" value="<?php print($email); ?>">
            <br /><br />
            <input type="text" name="pass" placeholder="Senha" size="50">
            <input type="text" name="passConfirmacao" placeholder="Confirmação da Senha" size="50">
            <br /><br />
            <select name="perfil">
                
                <option value="agente">Agente</option>
                <option value="analista">Analista</option>
                <option value="administrador">Administrador</option>
                
            </select>
            <br /><br />
            <input type="text" name="nome" placeholder="Nome" size="50" value="<?php print($nome); ?>">
            <br /><br />
            <input type="text" placeholder="Unidade Policial" name="unidadePolicial_id" size="50" value="<?php print($unidadePolicial_id); ?>">
            <br /><br />
            <input type="submit" name="enviar" value="Enviar">
            <br /><br />
            
            
        </form>
    </body>
</html>

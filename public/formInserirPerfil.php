<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Cadastro de Categoria</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Cadastro de Categoria</h1>
        <form method="POST" action="../controllers/inserirPerfil.controller.php">
            <input type="text" name="categoria" placeholder="Categoria" size="50">
            <br /><br />
            <input type="submit" name="enviar" value="Enviar">
            <br /><br />
        </form>
    </body>
</html>
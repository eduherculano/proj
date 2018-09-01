<?php

namespace App\models\conexao;

use \PDO as PDO;


class Conexao
{  
    protected $pdo;
    protected $resultado;
    
    
    public function __construct()
    {
        $host = 'localhost';
        $db = 'herculano';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';
        $fetchMode = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
        
        try
        {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $fetchMode);   
        }
        catch (PDOException $erro)
        {
            echo "Não foi possível conectar ao banco de dados. Caso o problema persista, entre encontato com o desenvolvedor. Erro: $erro";
        }

    }
     
}

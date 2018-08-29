<?php

namespace App\controllers\conexao;

class Conexao
{  
    protected $pdo;
    protected $resultado;
    
    public function __construct()
    {
        include 'base.php';
        
        try
        {
            $this->pdo = new \PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $fetchMode);   
        }
        catch (Exception $ex)
        {
            echo "Não foi possível conectar ao banco de dados. Caso o problema persista, entre encontato com o desenvolvedor.";
        }

    }
  
    
    public function pesquisarTodosUsuarios()
    {
        $this->resultado = $this->pdo->query("SELECT * FROM usuarios");
        return $this->resultado->fetchAll();       
    }
    
    public function inserirUsuario($ema, $pas, $ace, $nom, $uni) {
        $this->resultado = $this->pdo->prepare("INSERT INTO usuarios (email, pass, acesso, nome, unidadePolicial_id) VALUES (:email, :pass, :acesso, :nome, :unidadePolicial_id)");
        $this->resultado->bindParam(':email',$ema);
        $this->resultado->bindParam(':pass',$pas);
        $this->resultado->bindParam(':acesso',$ace);
        $this->resultado->bindParam(':nome',$nom);
        $this->resultado->bindParam(':unidadePolicial_id',$uni);
        
        try
        {
            $this->resultado->execute();
            echo "Cadastrado com Sucesso";
        }
        catch (PDOException $erro)
        {
            echo "Não foi possível cadastrar um novo usuário.";
        }
        
        
    }
    
    
}

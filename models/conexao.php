<?php

namespace App\models\conexao;

require_once 'base.php';

use \PDO as PDO;
use App\models\conexao\Base as Base;


class Conexao extends Base
{  
    protected $pdo;
    public $resultado;
    
    
    public function __construct()
    {
        parent::__construct();
        $host = $this->host;
        $db = $this->db;
        $user = $this->user;
        $pass = $this->pass;
        $charset = $this->charset;
        $fetchMode = $this->fetchMode;
        
        try
        {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $fetchMode);   
        }
        catch (Exception $ex)
        {
            echo "Não foi possível conectar ao banco de dados. Caso o problema persista, entre encontato com o desenvolvedor.";
        }

    }
  
    
    public function pesquisarTodosUsuarios()
    {
        $sql = 'SELECT * FROM usuarios';
        $this->resultado = $this->pdo->query($sql);
        return $this->resultado->fetchAll();       
    }
    
    
    public function pesquisarUsuariosPorNome($nom)
    {
        $this->resultado = $this->pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE :nome");
        $this->resultado->bindValue(':nome', "%$nom%");
                
        try
        {
            $this->resultado->execute();
            print_r($this->resultado->fetchAll());
        }
        catch (PDOException $erro)
        {
            echo "Erro ao pesquisar. Tente novamente";
        }
        
    }
    
    
    public function inserirUsuario($ema, $pas, $ace, $nom, $uni)
    {
        $sql = 'INSERT INTO usuarios (email, pass, acesso, nome, unidadePolicial_id) VALUES (:email, :pass, :acesso, :nome, :unidadePolicial_id)';
        $this->resultado = $this->pdo->prepare($sql);
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

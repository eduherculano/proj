<?php

namespace App\models\usuario;

require_once 'conexao.php';


use App\models\conexao\Conexao as Conexao;

class Usuario extends Conexao
{
    
    public function __construct() {
        
        parent::__construct();
        //protected $pdo;
        //protected $resultado;
        
    }
    
    
    public function inserirUsuario($email, $pass, $acesso, $nome, $unidade_id)
    {
        $sql = 'INSERT INTO usuarios (email, pass, acesso, nome, unidadePolicial_id) VALUES (:email, :pass, :acesso, :nome, :unidadePolicial_id)';
        $this->resultado = $this->pdo->prepare($sql);
        $this->resultado->bindParam(':email',$email);
        $this->resultado->bindParam(':pass',$pass);
        $this->resultado->bindParam(':acesso',$acesso);
        $this->resultado->bindParam(':nome',$nome);
        $this->resultado->bindParam(':unidadePolicial_id',$unidade_id);
        
        try
        {
            $this->resultado->execute();
        }
        catch (PDOException $erro)
        {
            echo "Não foi possível cadastrar um novo usuário. Erro: $erro";
        }  
    }

        
    public function retornarTodosUsuarios()
    {
        $sql = 'SELECT * FROM usuarios';
        $this->resultado = $this->pdo->query($sql);
        return $this->resultado->fetchAll();       
    }
    
    
     public function pesquisarUsuariosPorNome($nome)
    {
        $this->resultado = $this->pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE :nome");
        $this->resultado->bindValue(':nome', "%$nome%");
                
        try
        {
            $this->resultado->execute();
            print_r($this->resultado->fetchAll());
        }
        catch (PDOException $erro)
        {
            echo "Erro ao pesquisar. Tente novamente. Erro: $erro";
        }
        
    }
    

}

<?php

namespace App\classes\usuario;

require_once 'conexao.php';
use App\classes\conexao\Conexao as Conexao;

class Usuario extends Conexao 
{
    
    // ---------- ATRIBUTOS DA CLASSE ----------
    
    private $email;
    private $pass;
    private $perfil_id;
    private $nome;
    private $unidadePolicial; // objeto
    private $dataDoCadastro;
    private $ultimaAtualizacao;
    
    
    // ---------- MÉTODO ESPECIAL CONSTRUCT ----------
    
    
    public function __construct()
    {
        
        parent::__construct();
        //protected $pdo;
        //protected $resultado;
        
    }
    
    
    // ---------- MÉTODOS ESPECIAIS GETTERS E SETTERS ----------
    
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($ema)
    {
        $this->email = $ema;
    }
    
    private function getPass()
    {
        return $this->pass;
    }
    
    private function setPass($pas)
    {
        $this->pass = $pas;
    }
    
    private function getPerfil_id()
    {
        return $this->perfil_id;
    }
    
    private function setPerfil_id($perfil_id)
    {
        $this->perfil_id = $perfil_id;
    }
    
    private function getNome()
    {
        return $this->nome;
    }
    
    private function setNome($nom)
    {
        $this->nome = $nom;
    }
    
    private function getUnidadePolicial()
    {
        return $this->unidadePolicial;
    }
    
    private function setUnidadePolicial($uni)
    {
        $this->unidadePolicial = $uni;
    }
    
    private function getDataDoCadastro()
    {
        return $this->dataDoCadastro;
    }
    
    private function setDataDoCadastro($dat)
    {
        $this->dataDoCadastro = $dat;
    }
    
    public function getUltimaAtualizacao()
    {
        return $this->ultimaAtualizacao;
    }
    
    public function setUltimaAtualizacao($ult)
    {
        $this->ultimaAtualizacao = $ult;
    }
    
    
    // ---------- MÉTODOS DA CLASSE ----------
    
    
    public function inserirUsuario($email, $pass, $perfil_id, $nome, $unidadePolicial_id)
    {
        $sql = 'INSERT INTO usuarios (email, pass, perfil_id, nome, unidadePolicial_id) VALUES (:email, :pass, :perfil_id, :nome, :unidadePolicial_id)';
        $this->resultado = $this->pdo->prepare($sql);
        $this->resultado->bindParam(':email',$email);
        $this->resultado->bindParam(':pass',$pass);
        $this->resultado->bindParam(':perfil_id',$perfil_id);
        $this->resultado->bindParam(':nome',$nome);
        $this->resultado->bindParam(':unidadePolicial_id',$unidadePolicial_id);
        
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
            echo "Erro ao pesquisar. Erro: $erro";
        }

    }
    
    
}

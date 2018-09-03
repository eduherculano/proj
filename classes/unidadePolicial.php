<?php

namespace App\classes\unidadePolicial;

require_once 'conexao.php';
use App\classes\conexao\Conexao as Conexao;

class UnidadePolicial extends Conexao
{
    
    // ---------- ATRIBUTOS DA CLASSE ----------
    
    
    // ---------- MÉTODO ESPECIAL CONSTRUCT ----------
    
    
    public function __construct() 
    {   
        parent::__construct();
        //protected $pdo;
        //protected $resultado;
    }
    
    
    // ---------- MÉTODOS ESPECIAIS GETTERS E SETTERS ----------
    
    
    // ---------- MÉTODOS DA CLASSE ----------
    
    
    public function inserirUnidadePolicial($unidade, $local_id, $telefone_id, $email_id)
    {
        $sql = 'INSERT INTO unidades_policiais (unidade, local_id, telefone_id, email_id) VALUES (:unidade, :local_id, :telefone_id, :email_id)';
        $this->resultado = $this->pdo->prepare($sql);
        $this->resultado->bindParam(':unidade', $unidade);
        $this->resultado->bindParam(':local_id', $local_id);
        $this->resultado->bindParam(':telefone_id', $telefone_id);
        $this->resultado->bindParam(':email_id', $email_id);
        
        try
        {
            $this->resultado->execute();
        }
        catch (PDOException $erro)
        {
            echo "Não foi possível cadastrar uma nova Unidade Policial. Erro: $erro";
        }
        
    }
    
    
    public function retornarTodasUnidadesPoliciais()
    {
        $sql = 'SELECT * FROM unidades_policiais';
        $this->resultado = $this->pdo->query($sql);
        return $this->resultado->fetchAll();  
    }
    
    
    public function pesquisarUnidadesPoliciaisPorUnidade($unidade)
    {
        $sql = 'SELECT * FROM unidades_policiais WHERE unidade LIKE :unidade';
        $this->resultado = $this->pdo->prepare($sql);
        $this->resultado->bindValue(':unidade',"%$unidade%");
        
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


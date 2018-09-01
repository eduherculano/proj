<?php

namespace App\models\unidadePolicial;

require_once 'conexao.php';


use App\models\conexao\Conexao as Conexao;

class UnidadePolicial extends Conexao
{
    
    public function __construct() {
        
        parent::__construct();
        //protected $pdo;
        //protected $resultado;
        
    }
    
    
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
    
    
    
}


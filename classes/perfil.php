<?php

namespace App\classes\perfil;

require_once 'conexao.php';
use App\classes\conexao\Conexao;

class Perfil extends Conexao
{
    
// ---------- ATRIBUTOS DA CLASSE ----------
    
    protected $categoria;
    
    
    // ---------- MÉTODO ESPECIAL CONSTRUCT ----------
    
    
    public function __construct()
    {
        parent::__construct();
        //protected $pdo;
        //protected $resultado;
    }
    
    
    // ---------- MÉTODOS ESPECIAIS GETTERS E SETTERS ----------
    
    
    public function getCategoria()
    {
        return $this->categoria;
    }
    
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    
    
    // ---------- MÉTODOS DA CLASSE ----------
    
    
    public function inserirPerfil($categoria)
    {
        $sql = 'INSERT INTO perfils (categoria) VALUES (:categoria)';
        $this->resultado = $this->pdo->prepare($sql);
        $this->resultado->bindParam(':categoria', $categoria);
        
        try
        {
            $this->resultado->execute();
        }
        catch (PDOException $erro)
        {
            echo "Não foi possível cadastrar um novo Perfil. Erro: $erro";
        }
        
    }
    
    
    public function retornaPerfils()
    {
        $sql = 'SELECT * FROM perfils';
        $this->resultado = $this->pdo->query($sql);
        return $this->resultado->fetchAll();  
    }
    
    
    public function retornaPerfilPorCategoria()
    {
        $sql = 'SELECT (categoria) FROM perfils';
        $this->resultado = $this->pdo->query($sql);
        return $this->resultado->fetchAll();  
    }
    
    
}

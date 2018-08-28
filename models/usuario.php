<?php

namespace App\usuario;

class Usuario {
    
    private $email;
    private $pass;
    private $acesso;
    private $nome;
    private $unidadePolicial;
    private $dataDoCadastro;
    private $ultimaAtualizacao;
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($ema)
    {
        $this->email = $ema;
    }
    
    
    
    
    
}

<?php

namespace App\controllers\usuario;

class Usuario {
    
    private $email;
    private $pass;
    private $acesso;
    private $nome;
    private $unidadePolicial; // objeto
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
    
    private function getPass()
    {
        return $this->pass;
    }
    
    private function setPass($pas)
    {
        $this->pass = $pas;
    }
    
    private function getAcesso()
    {
        return $this->acesso;
    }
    
    private function setAcesso($ace)
    {
        $this->acesso = $ace;
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
    
    
}

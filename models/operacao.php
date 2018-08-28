<?php

namespace App\models\operacao;

class Operacao {
    
    protected $nome;
    protected $ip;
    protected $processo;
    protected $pessoa;
    protected $local;
    protected $unidadePolicial;
    protected $dataDoCadastro;
    protected $ultimaAtualizacao;
    
    public function getNome()
    {
        return $this->nome; 
    }
    
    public function setNome($nom)
    {
        $this->nome = $nom;
    }
    
    public function getIp()
    {
        return $this->ip;
    }
    
    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    
    public function getProcesso()
    {
        return $this->processo;
    }
    
    public function setProcesso($pro)
    {
        $this->processo = $pro;
    }
    
    public function getPessoa()
    {
        return $this->pessoa;
    }
    
    public function setPessoa($pes)
    {
        $this->pessoa = $pes;
    }
    
    public function getLocal()
    {
        return $this->local;
    }
    
    public function setLocal($loc)
    {
        $this->local = $loc;
    }
    
    public function getUnidadePolicial()
    {
        return $this->unidadePolicial;
    }
    
    public function setUnidadePolicial($uni)
    {
        $this->unidadePolicial = $uni;
    }
    
    public function getDataDoCadastro()
    {
        return $this->dataDoCadastro;
    }
    
    public function setDataDoCadastro()
    {
        $this->unidadePolicialDeOrigem = date("Y-m-d H:i:s");
    }
    
    public function getUltimaAtualizacao()
    {
        return $this->ultimaAtualizacao;
    }
    
    public function setUltimaAtualizacao()
    {
        $this->ultimaAtualizacao = date("Y-m-d H:i:s");
    }


    
}

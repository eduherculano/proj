<?php

namespace App\models\local;

class Local {
    
    protected $tipo;
    protected $logradouro;
    protected $bairro;
    protected $cidade;
    protected $uf;
    protected $pais;
    protected $complemento; // array
    protected $latitude;
    protected $longitude;
    protected $imagem;  // objeto
    protected $dataDoCadastro;
    protected $ultimaAtualizacao;
    
    public function getTipo()
    {
        return $this->tipo;
    }
    
    public function setTipo($tip)
    {
        $this->tipo = $tip;
    }
    
    public function getLogradouro()
    {
        return $this->logradouro;
    }
    
    public function setLogradouro($log)
    {
        $this->logradouro = $log;
    }
    
    public function getBairro()
    {
        return $this->bairro;
    }
    
    public function setBairro($bai)
    {
        $this->bairro = $bai;
    }
    
    public function getCidade()
    {
        return $this->cidade;
    }
    
    public function setCidade($cid)
    {
        $this->cidade = $cid;
    }
    
    public function getUf()
    {
        return $this->uf;
    }
    
    public function setUf($uf)
    {
        $this->uf = $uf;
    }
    
    public function getPais()
    {
        return $this->pais;
    }
    
    public function setPais($pai)
    {
        $this->pais = $pai;
    }
    
    public function getComplemento()
    {
        return $this->complemento;
    }
    
    public function setComplemento($com)
    {
        $this->complemento = $com;
    }
    
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    public function setLatitude($lat)
    {
        $this->latitude = $lat;
    }
    
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    public function setLongitude($lon)
    {
        $this->longitude = $lon;
    }
    
    public function getImagem()
    {
        return $this->longitude;
    }
    
    public function setImagem($ima)
    {
        $this->imagem - $ima;
    }
    
    public function getDataDoCadastro()
    {
        return $this->dataDoCadastro;
    }
    
    public function setDataDoCadastro($dat)
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

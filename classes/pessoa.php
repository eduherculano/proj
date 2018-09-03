<?php

namespace App\classes\pessoa;

require_once 'conexao.php';
Use App\classes\conexao\Conexao as Conexao;

class Pessoa extends Conexao
{
    
    // ---------- ATRIBUTOS DA CLASSE ----------
    
    protected $classificacao;  // array [alvo, autor, vitima, testemunha, parte]
    protected $nome;  // string
    protected $vulgo;  // array
    protected $mae;  // string
    protected $pai;  // string
    protected $cpf;  // array
    protected $rg;  // array
    protected $sexo;  // string
    protected $dataDeNascimento;  // string
    protected $naturalidade;  // string
    protected $tatuagem;  // objeto
    protected $caracteristicaFisica; // objeto
    protected $historico;  // objeto
    protected $unidadePolicialDeCadastro; // objeto
    protected $local; // objeto
    protected $crime; // objeto
    protected $comparsa; // objeto
    protected $cargo;  // objeto
    protected $imagem;  // objeto
    protected $dataDoCadastro;  // string
    protected $atualizacaoDoCadastro;   // string
    
    
    // ---------- MÉTODO ESPECIAL CONSTRUCT ----------
    
    
    // ---------- MÉTODOS ESPECIAIS GETTERS E SETTERS ----------
    
    
    public function getClassificacao()
    {
        return $this->classidicacao;
    }
    
    public function setClassificacao($cla)
    {
        $this->classificacao = $cla;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nom)
    {
        $this->nome = $nom;
    }
    
    public function getVulgo()
    {
        return $this->vulgo;
    }
    
    public function setVulgo($vul)
    {
        $this->vulgo = $vul;
    }
    
    public function getMae() 
    {
        return $this->mae;
    }
    
    public function setMae($mae)
    {
        $this->mae = $mae;
    }
    
    public function getPai()
    {
        return $this->pai;
    }
    
    public function setPai($pai)
    {
        $this->pai = $pai;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }
    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    
    public function getRg()
    {
        return $this->rg;
    }
    
    public function setRg($rg)
    {
        $this->rg = $$rg;
    }
    
    public function getSexo()
    {
        return $this->sexo;
    }
    
    public function setSexo($sex)
    {
        $this->sexo = $sex;
    }
    
    public function getDataDeNascimento()
    {
        return $this->dataDeNascimento;
    }
    
    public function setDataDeNascimento($dat)
    {
        $this->dataDeNascimento = $dat;
    }
    
    public function getNaturalidade()
    {
        return $this->getNaturalidade;
    }
    
    public function setNaturalidade($nat)
    {
        $this->naturalidade= $nat;
    }
    
    public function getTatuagem()
    {
        return $this->tatuagem;
    }
    
    public function setTatuagem($tat)
    {
        $this->tatuagem = $tat;
    }
    
    public function getCaracteristicaFisica()
    {
        return $this->caracteristicaFisica;
    }
    
    public function setCaracteristicaFisica($car)
    {
        $this->caracteristicaFisica = $car;
    }
    
    public function getHistorico()
    {
        return $this->historico;
    }
    
    public function setHistorico($his)
    {
        $this->historico = $his;
    }
    
    public function getUnidadePolicialDeCadastro()
    {
        return $this->unidadePolicialDeCadastro;
    }
    
    public function setUnidadePolicialDeCadastro($uni)
    {
        $this->unidadePolicialDeCadastro = $uni;
    }
    
    public function getLocal()
    {
       return $this->local;
    }
    
    public function setLocal($loc)
    {
        $this->local = $loc;
    }
    
    public function getCrime()
    {
        return $this->crime;
    }
    
    public function setCrime($cri)
    {
        $this->crime = $cri;
    }
    
    public function getComparsa()
    {
        return $this->comparsa;
    }
    
    public function setComparsa($con)
    {
        $this->comparsa = $con;
    }
    
    public function getCargo()
    {
        return $this->cargo;
    }
    
    public function setCargo($car)
    {
        $this->cargo = $car;
    }
    
    public function getImagem()
    {
        return $this->imagem;
    }
    
    public function setImagem($ima)
    {
        $this->imagem = $ima;
    }
    
    public function getDataDoCadastro()
    {
        return $this->dataDoCadastro;
    }
    
    public function setDataDoCadastro()
    {
        $this->dataDoCadastro = date("Y-m-d H:i:s");
    }
    
    public function getAtualizacaoDoCadastro()
    {
        return $this->atualizacaoDoCadastro;
    }
    
    public function setAtualizacaoDoCadastro()
    {
        $this->atualizacaoDoCadastro = date("Y-m-d H:i:s");
    }
    
    
    // ---------- MÉTODOS DA CLASSE ----------






    }

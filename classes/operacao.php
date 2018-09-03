<?php

namespace App\classes\operacao;

require_once 'conexao.php';
use App\classes\conexao\Conexao as Conexao;

class Operacao extends Conexao 
{
    
    // ---------- ATRIBUTOS DA CLASSE ----------
    
    protected $permissaoDeAcesso;
    protected $nome;
    protected $inquerito;
    protected $processo;
    protected $pessoa;
    protected $local;
    protected $unidadePolicial;
    protected $dataDoCadastro;
    protected $ultimaAtualizacao;
    
    
    // ---------- MÉTODO ESPECIAL CONSTRUCT ----------
    
    
    public function __contruct()
    {
        parent::construct();
        //protected $pdo;
        //protected $resultado;
    }
    
    
    // ---------- MÉTODOS ESPECIAIS GETTERS E SETTERS ----------
    
    
    public function getPermissaoDeAcesso()
    {
        return $this->permissaoDeAcesso;
    }
    
    public function setPermissaoDeAcesso($permissao)
    {
        $this->permissaoDeAcesso = $permissao;
    }
    
    public function getNome()
    {
        return $this->nome; 
    }
    
    public function setNome($nom)
    {
        $this->nome = $nom;
    }
    
    public function getInquerito()
    {
        return $this->inquerito;
    }
    
    public function setInquerito($inquerito)
    {
        $this->inquerito = $inquerito;
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
    
    public function setPessoa($pessoa)
    {
        $this->pessoa[] = $pessoa;
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
    
    
    // ---------- MÉTODOS DA CLASSE ----------
    
    
    public function adicionarPessoa($pessoa)
    {
        $this->setPessoa($pessoa);
        $this->getPessoa();

    }


    
}

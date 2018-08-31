<?php

namespace App\models\conexao;

use \PDO as PDO;

class Base
{
    protected $host;
    protected $db;
    protected $user;
    protected $pass;
    protected $charset;
    protected $fetchMode;
    
    protected function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'herculano';
        $this->user = 'root';
        $this->pass = '';
        $this->charset = 'utf8';
        $this->fetchMode = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    }
}
<?php

namespace App\DAO;

use App\Conexao;

class Teste {

    public static function myTeste(){
        return Conexao::pdo();
    }
    
}
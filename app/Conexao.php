<?php

namespace App;

class Conexao {
    public static function pdo() {

        try{

            $db = new \PDO('mysql:host='.HOST. ';dbname=' . DATABASE . ';charset=utf8', USER, PASSWORD);
            return $db;

        }catch(\PDOException $e){
            echo "Mensagem: " . $e->getMessage()."<hr>";
            echo "Arquivo: " . $e->getFile() . "<hr>";
            echo "Linha: " . $e->getLine() . "<hr>";
        }


    }
}
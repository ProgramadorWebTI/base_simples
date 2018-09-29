<?php

namespace App\Controller;

use App\DAO\Teste;

class TesteController {

    public static function index() {
        print_r(Teste::myTeste());
    }

}
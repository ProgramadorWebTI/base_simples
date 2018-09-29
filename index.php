<?php
// NOME DA PASTA DO PROJETO;
$nome_pasta_projeto = "/sisFlash/";
define("PATH_ROOT", $_SERVER['DOCUMENT_ROOT'] . $nome_pasta_projeto);
include_once PATH_ROOT ."vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sisFlash</title>
</head>
<body>

<div class="h-container">
    <?php
        
        $pag=''; 
        ( !isset($_GET['p']) ) ? $pag = 'inicio' : $pag = $_GET['p'];
        if(!is_file(PATH_ROOT . 'views/' . $pag . '.php')){
            include_once PATH_ROOT . 'views/error/404.php';
        }else{
            include_once PATH_ROOT.'views/'.$pag.'.php';
        }
    
    ?>
</div>
    
</body>
</html>

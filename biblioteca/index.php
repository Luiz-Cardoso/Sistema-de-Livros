<?php
require_once'controllers/livro.controller.php';

$controller = new LivroController();

$action = $_GET['action'] ?? 'index';

switch($action){
    
    case 'index':
        $controller->index();
        break;

    case 'cadastrar':
        $controller->cadastrar();
        break;

    case 'excluir':
        $controller->excluir();
        break;

    default:
        echo "Ação não reconhecida!";
        break;
}
?>
<?php
require_once'./model/livro.model.php';

class LivroController{

    public function index(){
        $livros = Livro::listar();
        require 'views/listagem.view.php';
    }
    public function cadastrar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $ano = $_POST['ano'];
            $genero = $_POST['genero'];

            $livro = new Livro($titulo, $autor, $ano, $genero);
            Livro::adicionar($livro);

            header('Location: index.php');
            exit;
        }
        require'views/cadastro.view.php';
    }

    public function excluir(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            Livro::remover($id);

            header('Location: index.php');
            exit;
        }
    }
}
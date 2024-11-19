<?php
require_once'conexao.php';
class Livro{
    public $id;
    public $titulo;
    public $autor;
    public $ano;
    public $genero;

    public function __construct($titulo, $autor, $ano, $genero, $id = null){

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->genero = $genero;
        $this->id = $id;
    }

    public static function listar(){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->query("SELECT *FROM livros");
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $livros = [];
        foreach($resultados as $row){
            $livros[] = new Livro($row['titulo'], $row['autor'], $row['ano'], $row['genero'], $row['id']);
        }
        return $livros;
    }

    public static function adicionar(Livro $livro){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("INSERT INTO livros (titulo, autor, ano, genero) VALUES (:titulo, :autor, :ano, :genero)");
        $stmt->execute([
            ':titulo' => $livro->titulo,
            ':autor' => $livro->autor,
            ':ano' => $livro->ano,
            ':genero' => $livro->genero
        ]);
    }

    public static function remover($id){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastrar  Livro</h1>
    <form method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label>Autor:</label>
        <input type="text" name="autor" id="autor" required>
        
        <label>Ano:</label>
        <input type="number" name="ano" id="ano" required>
        
        <label>Genero:</label>
        <input type="text" name="genero" id="genero" required>
        
        <button type="submit">Salvar</button>
    </form>
    <div class="container">
        <a href="index.php">Voltar para listagem</a>
    </div>
</body>
</html>
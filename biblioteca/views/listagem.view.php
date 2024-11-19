<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Livros</h1>
    <div class="container">
        <a href="index.php?action=cadastrar">Cadastrar novo livro</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>Genero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($livros as $indice => $livro): ?>
            
            <tr>
                <td><?= htmlspecialchars($livro->titulo); ?></td>
                <td><?= htmlspecialchars($livro->autor); ?></td>
                <td><?= htmlspecialchars($livro->ano); ?></td>
                <td><?= htmlspecialchars($livro->genero); ?></td>
                <td>
                    <a href="index.php?action=excluir&id=<?= $livro->id; ?>" onclick="return confirm('Tem Certeza?')">Excluir</a>
                </td>
            </tr>
    
            <?php endforeach; ?>

        </tbody>

    </table>
</body>
</html>
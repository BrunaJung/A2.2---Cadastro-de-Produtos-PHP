<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática Avaliativa 02 - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">

    <h1>Atividade Prática Avaliativa 02 - Home</h1>
    
     <p>
        <a href="index.php">Home </a>|
        <a href="listar.php">Produtos Cadastrados</a>
    </p>

    <h3>Cadatrar Produtos</h3>

    <form action="salvar.php" method="post" class="container-fluid">

        <p>
            <label for="nome">Nome do Produto:</label><br>
            <input type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="preco">Preço do Produto:</label><br>
            <input type="number" name="preco" id="preco" step="0.01">
        </p>

        <p>
            <label for="quantidade">Quantidade em estoque:</label><br>
            <input type="number" name="quantidade" id="quantidade">
        </p>

        <p>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </p>
    </form>
    
</body>
</html>
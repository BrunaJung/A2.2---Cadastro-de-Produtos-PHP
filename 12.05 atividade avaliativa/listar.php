<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática Avaliativa 02 - Produtos Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1>Atividade Prática Avaliativa 02 - Produtos Cadastrados</h1>

    <p>
        <a href="index.php">Home </a>|
        <a href="listar.php">Produtos Cadastrados</a>
    </p>

    <?php
        require_once 'conexao.php';

        $conn = conectar_banco();

        $query = 'SELECT * FROM produtos';

        $resultado = mysqli_query($conn, $query);

        if(!mysqli_num_rows($resultado)){
            exit('<h3 class="alert alert-warning">Não há produtos cadastrados!</h3>');
        }

        echo "<h3>Lista de produtos cadastrados:</h3>";

        echo '<table class="table table-hover">';
        echo '<tr class="table-success">';
        echo "<th>ID#</th>";
        echo "<th>Nome</th>";
        echo "<th>Preço</th>";
        echo "<th>Quantidade</th>";
        echo "</tr>";

        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['preco'] . "</td>";
            echo "<td>" . $linha['quantidade'] . "</td>";
            echo "</tr>";
        } 

        echo "</table>";

        mysqli_close( $conn );
    ?>
    
</body>
</html>
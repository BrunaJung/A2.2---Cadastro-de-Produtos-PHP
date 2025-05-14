<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática Avaliativa 02 - Salvar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">
    
    <h1>Atividade Prática Avaliativa 02 - Salvar Produtos</h1>

    <p>
        <a href="index.php">Home </a>|
        <a href="listar.php">Produtos Cadastrados</a>
    </p>

    <?php
        require_once 'validacao.php';

        //função da validação.php
        form_nao_enviado("Por favor, retorne à home e preencha o formulário!");

        //função da validação.php
        ha_campos_em_branco($_POST, "Por favor, prencha todos os campos do formulário.");

        require_once 'conexao.php';

        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        $conn = conectar_banco();

        $sql = "INSERT INTO produtos (nome, preco, quantidade)
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        //função da validação.php
        stmt_error($stmt, "Erro na preparação da consulta!");

        mysqli_stmt_bind_param($stmt, 'sdi', $nome, $preco, $quantidade);

        $bind = mysqli_stmt_execute($stmt);

        //função da validação.php
        bind_error($bind, $stmt);

        echo '<h3 class="alert alert-success">Produto cadastrado com sucesso!</h3>';

        mysqli_close($conn);
    ?>

</body>
</html>
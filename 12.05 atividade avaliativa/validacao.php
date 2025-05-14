<?php
    function form_nao_enviado($msg){
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            exit('<h3 class="alert alert-warning">' .$msg . '</h3>');
        }
    }

    function ha_campos_em_branco($dados, $msg){
        if(empty($dados['nome']) || empty($dados['preco']) || empty($dados['quantidade'])){
            exit('<h3 class="alert alert-warning">' . $msg . '</h3>');
        }
    }

    function stmt_error($stmt, $msg){
        if(!$stmt){
            exit('<h3 class="alert alert-danger">' . $msg . '</h3>');
        }
    }

    function bind_error($bind, $stmt){
        if(!$bind){
            exit('<h3 class="alert alert-danger">Erro ao salvar: ' . mysqli_stmt_error($stmt) . '</h3>');
        }
    }
?>
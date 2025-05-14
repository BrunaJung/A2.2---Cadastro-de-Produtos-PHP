<?php
    function conectar_banco(){
        $host = 'localhost: 3306';
        $user = 'root';
        $password = '';
        $base = 'bd_estoque';

        $conn = mysqli_connect($host, $user, $password, $base);

        if(!$conn){
            exit('<h3 class="alert alert-danger">Erro na conexão:' . mysqli_connect_error() . '</h3>');
        }

        return $conn;
    }

?>
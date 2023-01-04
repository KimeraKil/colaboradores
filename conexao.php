<?php

    header("Content-type: text/html;charset=utf8");

    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $bancoDados = 'cardapios';

    $conn = mysqli_connect($servidor, $login, $senha, $bancoDados);

    /*if ($conn) {
        echo ("Conectou ao Servidor");
    } else {
        echo ("Não Conectou");
    }*/

?>
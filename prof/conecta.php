<?php
    $serv = "localhost";
    $user = "root";
    $pass = "";
    $bd = "bd_professor";

    $conexao = mysqli_connect($serv, $user, $pass, $bd);

    if (!$conexao)
        die("Falha na conexão");
?> 
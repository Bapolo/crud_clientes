<?php

    $severname = "localhost";
    $username = "root";
    $senha = "";
    $db_name = "crud";

    $connect = mysqli_connect($severname, $username, $senha, $db_name);

    //definir a codificação do banco de dados
    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()):
        echo "Erro ao se conectar ao banco ". $db_name. " ".mysqli_connect_error();
    endif;
<?php
    session_start();
    require_once "db_connect.php";

    function clear($input)
    {
        global $connect;

        //tratamento de sql injection
        $var = mysqli_escape_string($connect, $input);

        $var = htmlspecialchars($var);

        return $var; 

    }

    if (isset($_POST['btn-cadastrar'])):
        $nome = clear( $_POST['nome']);
        $sobrenome = clear(  $_POST['sobrenome']);
        $email = clear(  $_POST['email']);
        $idade = clear(  $_POST['idade']);

        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
        $resultado = mysqli_query($connect, $sql);

        if ($resultado):
            $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar";
            header('Location: ../index.php');
        endif;
    endif;
<?php
    session_start();
    require_once "db_connect.php";

    if (isset($_POST['btn-deletar'])):
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "DELETE FROM clientes WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);

        if ($resultado):
            $_SESSION['mensagem'] = "Cliente deletado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao deletar";
            header('Location: ../index.php');
        endif;
    endif;
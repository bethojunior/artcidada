<?php
    require_once "../service/conexao.php";

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = mysqli_query ($conexao  , "SELECT * FROM  usuarios WHERE login = '$login' and senha = '$senha'") or die (mysqli_error($conexao));
    $row = mysqli_num_rows($sql);

    if($row > 0 ){
        session_start();
        $_SESSION ['login'] = $_POST ['login'];
        $_SESSION ['senha'] = $_POST ['senha'];

        header('Location: ../../adm.php');
    } else {
        session_abort();
        echo "Desculpe, houve um erro";
        header('Location: ../../../index.php');
    }

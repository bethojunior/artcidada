<?php
    require ("conexao.php");

    $id = $_POST['id'];

    $dados = mysqli_query($conexao , "SELECT * FROM cards WHERE id = '$id'");

    $result = mysqli_fetch_array($dados);

    echo json_encode($result);




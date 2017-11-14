<?php
    require ("conexao.php");

    $dados = mysqli_query($conexao , "SELECT * FROM cards");

    $result = mysqli_fetch_array($dados);

?>
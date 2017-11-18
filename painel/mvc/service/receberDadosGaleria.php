<?php
    require ("conexao.php");

    $dados = mysqli_query($conexao , "SELECT * FROM galeria");

    $result = mysqli_fetch_array($dados);

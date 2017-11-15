<?php
    require ("conexao.php");

    $dados  = mysqli_query($conexao , "SELECT * FROM carousel");

    $result = mysqli_fetch_array($dados);
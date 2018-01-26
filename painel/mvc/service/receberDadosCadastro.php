<?php

    require ("conexao.php");

    $dados = mysqli_query($conexao , "SELECT * FROM cadastroUser");

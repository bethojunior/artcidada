
    <?php
        require "php/mvc/service/conexao.php";
        $busca = mysqli_query($conexao , "SELECT * FROM `video` where video != '' order by id desc limit 1");
        $imagem = mysqli_fetch_array($busca);

        echo $imagem['video'];

    ?>


<?php
require("../php/mvc/dao/receberImagensGaleria.php");
    echo "<div class='col l12 col s4'>";
        $i = 1;
        while ($result = mysqli_fetch_array($dados)){
            echo "<input type='hidden' value='".$result['id']."' >";
            echo "<img class='listaImagem' id='idSlide$i' src='../uploadsGaleriaFotos/medium/".$result['imagem']."'>";
            $i++;
        }
    echo "</div>";

?>
<?php
    require("../php/mvc/dao/receberImagensGaleria.php");

    //echo "<i onclick='trocarDireita()' class='material-icons'>arrow_forward</i>";
    echo "<input type='hidden' id='imagemSobe' value='".$result['id']."' >";

    //echo "<i onclick='trocarImagemEsquerda()' class='large material-icons'>arrow_back</i>";

    echo "<img class='imagemCentral' id='imagemCentral' src='../uploadsGaleriaFotos/".$result['imagem']."'>";

    echo "<i onclick='trocarImagemDireita()' class='large material-icons seta'>arrow_forward</i>";




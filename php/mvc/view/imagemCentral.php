<?php
    require("../php/mvc/dao/receberImagensGaleria.php");

    //echo "<i onclick='trocarDireita()' class='material-icons'>arrow_forward</i>";
    echo "<input type='hidden' id='imagemSobe' value='".$result['id']."' >";
    echo "<img class='imagemCentral' id='imagemCentral' src='../uploadsGaleriaFotos/".$result['imagem']."'>";

    echo "<i onclick='trocarImagem1()' class='material-icons'>arrow_forward</i>";




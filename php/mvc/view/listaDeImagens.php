<?php
require("../php/mvc/dao/receberImagensGaleria.php");
    echo "<div class='col l12 col s4'>";

        while ($result = mysqli_fetch_array($dados)){
            echo "<input type='hidden' value='".$result['id']."' >";
            echo "<img  id='idSlide' src='../uploadsGaleriaFotos/medium/".$result['imagem']."'>";
        }
    echo "</div>";

?>
<?php
include("mvc/service/receberDadosGaleria.php");

while($result = mysqli_fetch_array($dados)) {

    echo "<input type='hidden' id='idSlide' name='idSlide' value='" . $result['id'] . "'>";

    echo "<tr>";

        echo "<td>";
            echo $result['titulo'];
        echo "</td>";

        echo "<td>";
            echo "<img src='../uploadsGaleriaFotos/small/" . $result['imagem'] . "'>";
        echo "</td>";

        echo "<td>";
            echo "<i onClick='modalDeleteGaleria(id)' id='" . $result['id'] . "'  class='material-icons '>clear</i>";
        echo "</td>";

    echo "</tr>";
}

?>
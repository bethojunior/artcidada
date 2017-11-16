<?php
    include "mvc/service/receberDadosCards.php";

    while ($result = mysqli_fetch_array($dados)){
        echo "<input type='hidden' id='idCard1' name='idCard1' value='".$result['id']."' >";

        echo "<tr>";

            echo "<td>";
                echo "<img src='../uploadCards/small/".$result['imagem']."'>";
            echo "</td>";

            echo "<td>";
                echo $result['titulo'];
            echo "</td>";

            echo "<td>";
                echo substr($result['texto'],0,50);
            echo "</td>";

            echo "<td>";
                echo "<i onClick='alterarCards(id)' id='".$result['id']."' class='material-icons '>mode_edit</i>";
            echo "</td>";

            echo "<td>";
                echo "<i onClick='modalDeleteCard(id)' id='".$result['id']."'  class='material-icons '>clear</i>";
            echo "</td>";

        echo "</tr>";
    }

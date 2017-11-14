<?php
    require "php/mvc/service/conexao.php";

    $busca = mysqli_query($conexao , "SELECT * FROM cards order by id desc limit 3");
    $i = 1;
    echo'<div class="row cardsHeader" id="home">';
    echo'<div class="col l3 s12"></div>';

    while ($imagem = mysqli_fetch_array($busca)) {
        ?>

        <div class="col l3 s12 ">
            <div class="card <?php echo $i; ?>" onClick="modal2(id)" id='<?php echo json_encode($imagem);?>'  >
                <div class="card-image">

                    <?php
                        echo "<img class='imgCard' src='uploadCards/".$imagem['imagem']."'>";
                        echo "<span class='card-title tituloCard'>".$imagem['titulo']."</span>";
                    ?>
                </div>
                <div class="card-content">
                    <?php
                        //echo "<p class='textoCard'>".$imagem['texto']."</p>";
                        echo "<a href='#'>Click here ...</a><i class='material-icons right'>bookmark_border</i>";
                    ?>
                </div>
            </div>
        </div>

        <?php
        $i++;
    }
?>
<?php echo "</div>";
    include("view/modal.php");
?>






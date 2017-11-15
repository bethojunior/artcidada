<div class="divGaleria col l12">
    <span class="tituloDivFotos" id="galeriaFotos">
        <h1>Galeria de fotos</h1>
    </span>

    <div class="row col l12 hiddenMobile">

        <?php
            require "php/mvc/service/conexao.php";
            $busca = mysqli_query($conexao , "SELECT * FROM galeria order by id desc limit 4");
            while($imagem = mysqli_fetch_array($busca)) {
                echo "<div class='col l3 s12'><img class='imgGaleria' src='uploadsGaleriaFotos/" . $imagem['imagem'] . "'></div>";
        }
        ?>
        
    </div>
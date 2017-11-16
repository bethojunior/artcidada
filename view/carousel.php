<div class="row col l12 s12 divCarousel">
    <div id="quemSomos">
        <?php
            require "php/mvc/service/conexao.php";
            $busca = mysqli_query($conexao , "SELECT * FROM carousel order by id desc limit 3");
            $i = 1;
            while ($imagem = mysqli_fetch_array($busca)) {
                if ($i == 1) {
                    echo "<div class='divBody1'>";
                    echo "<div class='col l8 carousel divCarousel'>";
                }
                echo "<a class='carousel-item imagemCarousel' ><img src='uploadCarousel/".$imagem['imagem']."'></a>";
                ?>

                <?php
                $i++;
            }
        ?>

    </div>

    <div class="col l4 s12 video">
        <?php
            include ("video.php");
        ?>
    </div>
</div>
<script src="../js/functions.js"></script>
<link href="../css/loader.css" rel="stylesheet" />

<?php
    include "mvc/service/receberDadosSlide.php";
?>

<div class="row">
    <table class="col l12 s12 striped highlight bordered " border="1">

        <thead>
            <tr>
                <th>Titulo</th>
                <th>Imagem</th>
                <th>Opcoes</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include "mvc/dao/showSlides.php";
            ?>
        </tbody>
    </table>
</div>

<script src="../js/functions.js"></script>
<link href="../css/loader.css" rel="stylesheet" />

<?php
    include "mvc/service/receberDadosGaleria.php";
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
            include "mvc/dao/showGaleria.php";
        ?>
        </tbody>
    </table>
</div>

<div id="modalDeleteGaleria" class="modal">
    <p><h4>Tem certeza que deseja apagar?</h4></p>

    <div class="modal-footer">
        <?php
            include "mvc/service/receberDadosGaleria.php";
            $result = mysqli_fetch_array($dados);
            //echo "<input type='hidden' id='idDelete' name='idDelete' value='".$result['id']."' >";
            echo "<a href='mvc/dao/apagarGaleria.php?id=".$result['id']."' class='btn large'>Apagar</a>";
        ?>
    </div>
</div>

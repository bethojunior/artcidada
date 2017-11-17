<div class="col l12">
    <div class="col l12 row">
        <ul class="tabs">
            <li class="tab liOption col s2"><a class="active option" href="#test6">Enviar imagem</a></li>
            <li class="tab liOption col s2"><a class="option" href="#video">Enviar Video</a></li>
            <li class="tab liOption col s2"><a class="option" href="#test7">Opções</a></li>
        </ul>
    </div>
</div>

<div class="row" id="test6" >
    <form method="POST" action="mvc/dao/uploadSlides.php" enctype="multipart/form-data" class=" col l12 s12">
        <div class="file-field input-field">
            <span class="file">Procurar arquivo</span>
            <input class="file" type="file" name="imagem" multiple="" required>
            <br><br>
        </div>
        <span id="numbSlide">20</span><span>/20</span>
        <input id="titleSlide"  type="text" name="titulo" placeholder="Insira o titulo" required><br><br>
        <div>
            <input type="submit" class="btn right" value="Enviar">
        </div>
    </form>

</div>

<div class="row" id="video">
    <form method="POST" action="mvc/dao/uploadVideo.php" class="col l12 s12">
        <input autofocus required name="video" placeholder="Insira o IFRAME do seu video"><br>
        <input class="btn right" type="submit" value="Enviar">
    </form>
</div>

<div id="test7" class="row">
    <?php
        include("optionSlide.php");
    ?>
</div>

<div id="modalDeleteSlide" class="modal">
    <p><h4>Tem certeza que deseja apagar?</h4></p>

    <div class="modal-footer">
        <?php
        include "mvc/service/receberDadosSlide.php";
        $result = mysqli_fetch_array($dados);
        //echo "<input type='hidden' id='idDelete' name='idDelete' value='".$result['id']."' >";
        echo "<a href='mvc/dao/apagarSlide.php?id=".$result['id']."' class='btn large'>Apagar</a>";
        ?>
    </div>
</div>


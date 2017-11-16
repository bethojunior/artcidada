
<div class="col l12">
    <div class="col l12 row">
        <ul class="tabs">
            <li class="tab liOption col s2"><a class="active option" href="#test4">Enviar arquivos</a></li>
            <li class="tab liOption col s2"><a class="option" href="#test5">Opções</a></li>
        </ul>
    </div>
</div>
    
<div class="row" id="test4">
<form method="POST" action="mvc/dao/uploadGaleria.php" enctype="multipart/form-data" class=" col l12 s12">
    <div class="file-field input-field">
        <span class="file">Procurar arquivo</span>
        <input required class="file" type="file" name="imagem" multiple=""><br><br>
    </div>
    <span id="numbTituloGaleria">20</span><span>/20</span>
    <input id="tituloGaleria" required type="text" name="titulo" placeholder="Insira o titulo"><br>
    <div>
        <input type="submit" class="btn" value="Enviar">
    </div>
</form>
</div>


<div id="test5" class="col s12 l12">
    <?php 
        include("optionGaleria.php");
    ?>
</div>




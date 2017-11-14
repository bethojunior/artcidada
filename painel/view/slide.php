<div class="col l12">
    <div class="col l12 row">
        <ul class="tabs">
            <li class="tab liOption col s2"><a class="active option" href="#test6">Enviar arquivos</a></li>
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
        <input name="video" placeholder="Insira o IFRAME do seu video">
        <div>
            <input type="submit" class="btn" value="Enviar">
        </div>
    </form>
</div>

<div id="test7">
    oi
</div>



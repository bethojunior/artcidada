<div class="col l12">
    <div class="col l12 row">
        <ul class="tabs">
            <li class="tab liOption col s2"><a class="active option" href="#test8">Enviar arquivos</a></li>
            <li class="tab liOption col s2"><a class="option" href="#test9">Opções</a></li>
        </ul>
    </div>
</div>


<div class="row" id="test8" >
    <form method="POST" action="mvc/dao/uploadCards.php" enctype="multipart/form-data" class=" col l12 s12">
        <div class="file-field input-field">
            <span class="file">Procurar arquivo</span>
            <input required class="file" type="file" name="imagem" multiple=""><br><br>
        </div>
        <span id="numbTitulo">20</span><span>/20</span>
        <input id="titulo" required type="text" name="titulo" placeholder="Insira o titulo"><br>
        <span id="numb">500</span><span>/500</span><br>
        <textarea id="texto" required type="text" name="texto" placeholder="Insira o texto"></textarea><br><br>
        <div>
            <input type="submit" class="btn right" value="Enviar">
        </div>
    </form>
</div>

<div id="test9">
    <?php 
        include("optionCards.php");
    ?>
</div>





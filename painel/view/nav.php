
<div class="divHeader l12">
    <div class="col l12 row">
        <ul class="tabs">
            <li class="tab col s2"><a class="active option" href="#test0">Pagina inicial</a></li>
            <li class="tab col s2"><a class="option" href="#test1">Galeria de fotos</a></li>
            <li class="tab col s2"><a href="#test2" class="option" >Imagens Slide</a></li>
            <li class="tab col s2"><a href="#test3" class="option" >Cards</a></li>
            <li class="tab col s4"><a href="../../index.php" class="option" >Sair</a></li>
        </ul>
    </div>
</div>
    
<div id="test0" class="col s12 l12">
    <img src="../imagens/logoExt.png" class="logo">
</div>

<div id="test1" class="col s12 l12">
    <?php 
        include("galeriaFotos.php");
    ?>
</div>

<div id="test2" class="col s12 l12">
    <?php
        include("slide.php");
    ?>
</div>

<div id="test3" class="col s12 l12">
    <?php
        include("cards.php");
    ?>
</div>

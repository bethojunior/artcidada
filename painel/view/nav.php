<div class="">
    <div class="divHeader l12 s12">
        <div class="col l12 s12 row">
            <ul class="tabs">
                <li class="tab col l2 s2"><a href="#test4" class="active option">Cadastro</a></li>
                <li class="tab col l2 s2"><a class="option" href="#test1">Galeria</a></li>
                <li class="tab col l2 s2"><a href="#test2" class="option" >Slide/Video</a></li>
                <li class="tab col l2 s2"><a href="#test3" class="option" >Cards</a></li>
                <li class="tab col l4 s1"><a href="#sair" onClick="sairAdm()" >Sair</a></li>
            </ul>
        </div>
    </div>

    <div id="test4" class="col s12 l12">
        <?php
            include "cadastroUser.php";
        ?>
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
    
    <div id="sair" class="col s12 l12">
        
    </div>
</div>

<div id="sairPainel" class="modal">
    <h4><p>Tem certeza que deseja apagar?</p></h4>

    <div class="modal-footer">
        
    </div>
</div>
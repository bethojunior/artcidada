<!-- MENU WEB -->

<div class="row menuWeb">          
    <nav class="col l12 s12 navHeader">
        <ul>
            <li class="liFirstChild"><img class="logoHeader" src="imagens/logo.png"></li>
            <li><a class="" href="#home">Home</a></li>
            <li><a class="" href="view/quemSomos.php">Quem somos</a></li>
            <li><a class="" href="#">Nossas ações</a></li>
            <li><a class="" href="view/galeriaDeFotos.php">Galeria de fotos</a></li>
            <li><a class="" href="#footer">Contato</a></li>
            <!-- <li><a class="bordaDireita" href="#">Painel de administração</a></li> -->
            <li>
                <a onClick="modal1()" class="liPainel">Entrar</a>
            </li>
        </ul>
    </nav>
</div>

<!--MENU MOBILE -->

<nav class="menuMobile">
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
            </div>
        </li>
        <li>
            <a href="#">Art Cidadã</a>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a class="" href="view/quemSomos.php">Quem somos</a>
        </li>	
        <li>
            <a href="view/galeriaDeFotos.php">Galeria de fotos</a>
        </li>				   	
        <li>
            <a href="#">Contato</a>
        </li>				    
        <li>
            <a onClick="modal1()" class="liPainel">Entrar</a>
        </li>
    </ul>
    <span class="nomeMenuMobile">Art Cidadã</span>
    <!-- <img class="logoMobile" src="imagens/logo.png"> -->
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
    
    
</nav>


<?php
    include("modal.php");
?>


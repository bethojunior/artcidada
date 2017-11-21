
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="../imagens/logoSemFundo.png" rel="icon" />
        <link href="../Materialize/css/materialize.css" rel="stylesheet" />
        <link href="../css/index.css" rel="stylesheet" />
        <link href="../css/quemSomos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Source+Sans+Pro|Ubuntu|Roboto|Raleway" rel="stylesheet">
    </head>
    <body>
        <!-- MENU WEB -->

<!--    <div class="row menuWeb">          -->
<!--        <nav class="col l12 s12 navHeader">-->
<!--            <ul>-->
<!--                <li class="liFirstChild"><img class="logoHeader" src="../imagens/logo.png"></li>-->
<!--                <li><a class="liMenuMobile" href="../index.php">Home</a></li>-->
<!--                <li><a class="liMenuMobile" href="quemSomos.php">Quem Somos</a></li>-->
<!--                <li><a class="liMenuMobile" href="#footer">Contato</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </div>-->
<!---->
<!--    <!--MENU MOBILE -->-->
<!---->
<!--    <nav class="menuMobile">-->
<!--        <ul id="slide-out" class="side-nav">-->
<!--            <li>-->
<!--                <div class="user-view">-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">Art Cidadã</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="divider"></div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="../index.php">Home</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="liMenuMobile" href="quemSomos.php">Quem Somos</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">Contato</a>-->
<!--            </li>				    -->
<!--        </ul>-->
<!--        <span class="nomeMenuMobile">Art Cidadã</span>-->
<!--        <!-- <img class="logoMobile" src="imagens/logo.png"> -->-->
<!--        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>-->
<!---->
<!--    </nav>-->
<!--    <hr><br><br>-->

    <div>
        <?php
            include("../php/mvc/view/imagemCentral.php");
            echo"<br><br><hr><br>";
        ?>
        <div class=" col l4 s4">
            <?php
                include("../php/mvc/view/listaDeImagens.php");
            ?>
        </div>
    </div>
    <div class="row col l12 footer" id="footer">
        <div class="col l2 s12 row">
        <span class="spanFooter">Redes sociais</span>
        <br><br>

            <div class="divIcon col l12 s4">
                <a href="https://www.facebook.com/artcidadacariri/"  target="_blank">
                <img class="iconSocial" src="../imagens/face.png" ></a><br><br>
            </div>

            <div class="divIcon col l12 s4">
                <a href="https://www.instagram.com/artcidada/?hl=pt-br" target="_blank">
                    <img class="iconSocial" src="../imagens/insta.png"><br><br></a>
            </div>

            <div class="divIcon col l12 s4">
                <a href="tel:88988850617">
                    <img class="iconSocial" src="../imagens/tel.png" ><br></a><br>
            </div>
        </div>
        <div class="row col l6 s12">
            <span class="spanFooter">Entre em contato: </span>
            <form method="POST" action="../php/mail.php">
                <input type="text" placeholder="Seu nome" name="nome" required>
                <input type="text" placeholder="Seu contato (email ou telefone)" name="contato" required>
                <textarea placeholder="Digite aqui" name="mensagem" required></textarea><br><br>
                <input class="btn right " type="submit" value="Enviar">
            </form><br><br>
        </div>
        <div class="col l4 s12">
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4442.971367777788!2d-39.275053640749974!3d-7.21377029564017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a1792bf77e2785%3A0xc7c96f6a2ee01e75!2sR.+Min.+Colombo+de+Sousa%2C+Juazeiro+do+Norte+-+CE!5e0!3m2!1spt-BR!2sbr!4v1511028710858" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

       

        <script src="../js/jquery.js"></script>
        <script src="../js/functions.js"></script>
        <script src="../Materialize/js/materialize.js">
        </script>
        <!-- BOTÃO MOBILE<-->
        <script type="text/javascript">
            $(".button-collapse").sideNav();
        </script>
        <script type="text/javascript">
            $('.carousel.carousel-slider').carousel({fullWidth: true});
        </script>
    </body>
</html>
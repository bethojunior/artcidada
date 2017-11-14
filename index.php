
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Art Cidadã</title>
        <link href="imagens/logoSemFundo.png" rel="icon" />
        <link href="Materialize/css/materialize.css" rel="stylesheet" />
        <link href="css/index.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Source+Sans+Pro|Ubuntu|Roboto|Raleway" rel="stylesheet">
        
    </head>
    <body>
        
        <?php
            include("view/nav.php");
            include("view/cards.php");
            include ("view/carousel.php");
            include("view/galeria.php");
            include("view/footer.php");
        ?>

        <script src="js/functions.js"></script>
        <script src="js/jquery.js"></script>

        <!--MODAL -->
        <script src="Materialize/js/materialize.js">
            $(document).ready(function(){
                $('.modal').modal();
              });
        </script>
        <!-- BOTÃO MOBILE<-->
        <script type="text/javascript">
            $(".button-collapse").sideNav();
        </script>
        
        <!-- CAROUSEL  -->
        <script>
            $(document).ready(function(){
                $('.carousel').carousel();
            });
        </script>

    </body>
</html>
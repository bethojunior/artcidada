<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>TESTE</title>
        <link href="Materialize/css/materialize.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet" />
    </head>
    <body>
        <?php 
            include("view/nav.php");
        ?>
        
        <script src="js/jquery.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/ajax.js"></script>
        <script src="Materialize/js/materialize.js"></script>
        <script>
            $(document).ready(function(){
            $('ul.tabs').tabs();
            });


        </script>        
    </body>
</html>
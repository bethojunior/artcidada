<script src="../../js/functions.js"></script>
<link href="../../css/loader.css" rel="stylesheet">
<?php
    require ("../service/conexao.php");
    $video = $_POST['video'];

    if($video != ""){
        $sql = "INSERT INTO video (video) VALUES ('$video')";
        $exc = mysqli_query($conexao , $sql);
        echo "<div class='loader'></div>";
        echo "<script>Success()</script>";
        //echo "ok";

    } else {
        echo "Você precisa colocar o IFRAME do video";
        echo "<script>Failed()</script>";
    }


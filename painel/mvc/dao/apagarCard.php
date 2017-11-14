<script src="../../js/functions.js"></script>
<link href="../../css/loader.css" rel="stylesheet">
<?php
    require "../service/conexao.php";
    $id = $_GET['id'];
    $sql = mysqli_query($conexao , "DELETE FROM cards WHERE id = '$id'");

    if($sql == true){
        echo "<div class='loader'></div>";
        echo "<script>Success()</script>";
    }else {
        echo "<h1><center>DESCULPE, HOUVE UM ERRO NO PROCESSO</center></h1>";
        echo "<script>Failed</script>";
    };

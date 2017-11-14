<script src="../../js/functions.js"></script>
<?php
    include "../service/conexao.php";
    $id     =  $_POST['idCard'];
    $titulo =  $_POST['modalTitleCard'];
    $texto  =  $_POST['modalTextCard'];

    $sql = mysqli_query($conexao , "UPDATE cards SET titulo = '$titulo' , texto = '$texto' WHERE id = '$id'");

    if($sql == true){
        echo "<script>Success()</script>";
    } else {
        echo "<script>Failed()</script>";
    };
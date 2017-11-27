<link href="../css/loader.css" rel="stylesheet">
<script src="../js/functions.js"></script>
<?php
    $destino = "regcosta2@hotmail.com";
    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $mensagem = $_POST['mensagem'];
    //$headers = "MIME-Version: 1.1\n";
    //$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
    //$headers .= "From: " . $destino . "\n";
    $headers = "Enviado por : " . $nome . "\n";
    $mensagem = "Retornar pelo contato ". $contato . "\n". $mensagem;

    if(mail($destino, $headers , $mensagem)){
        echo "<script>mailSuccess()</script>";
        echo "<div class='loader'></div>";
        //echo "ok";
    }else{
        echo "<script>mailFailed()</script>";
        echo "<h1><center>Desculpe, algo deu errado..<center></h1>";
    }
?>



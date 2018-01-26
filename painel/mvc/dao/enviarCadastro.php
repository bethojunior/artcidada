<script src="../../js/functions.js"></script>
<?php
    include "../service/conexao.php";

    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $filho1 = $_POST['filho1'];
    $filho2 = $_POST['filho2'];
    $filho3 = $_POST['filho3'];

    $sql ="INSERT INTO cadastroUser (nome , cidade , bairro , endereco , numero , telefone , rg , cpf , filho1 , filho2 , filho3) 
    VALUES ('$nome' , '$cidade' , '$bairro' , '$endereco' , '$numero' , '$telefone' , '$rg' , '$cpf' , '$filho1' , '$filho2' , '$filho3') ";

    $exc = mysqli_query($conexao , $sql);

    if($exc == TRUE){
        echo "<script src='../../js/functions.js'>comeBack()</script>";
    } else {
        echo "<script src='../../js/functions.js'>comeBack()</script>";
    }
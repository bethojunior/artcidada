<?php
    include("../service/conexao.php");

    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $tel = $_POST['telefone'];
    $conta = $_POST['numeroConta'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numeroCasa'];
    $cep = $_POST['cep'];
    $valor = $_POST['valor'];   
    $confirme = $_POST['confirme'];

    if($confirme === 's'){
        
    }else{
        echo "<script>alert('Deseja cancelar doação?');</script>";
    }

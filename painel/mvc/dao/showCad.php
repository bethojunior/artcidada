<?php
    include("mvc/service/receberDadosCadastro.php");

    while($result = mysqli_fetch_array($dados)){

        echo "<tr>";
            echo "<td>".$result['nome']."</td>";
            echo "<td>".$result['cidade']."</td>";
            echo "<td>".$result['bairro']."</td>";
            echo "<td>".$result['endereco']."</td>";
            echo "<td>".$result['numero']."</td>";
            echo "<td>".$result['telefone']."</td>";
            echo "<td>".$result['rg']."</td>";
            echo "<td>".$result['cpf']."</td>";
            echo "<td>".$result['filho1']."</td>";
            echo "<td>".$result['filho2']."</td>";
            echo "<td>".$result['filho3']."</td>";
        echo "</tr>";

    }
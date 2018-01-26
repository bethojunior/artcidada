    <div class="divCadastro">
        <form method="POST" action="mvc/dao/enviarCadastro.php">
            <div class="row">
                <div class="col l3">
                    <input required placeholder="Nome" type="text" name="nome">
                    <input required placeholder="Cidade" type="text" name="cidade">
                    <input required placeholder="Bairro" type="text" name="bairro">
                </div>

                <div class="col l3">
                    <input require placeholder="Endereço" type="text" name="endereco">
                    <input required placeholder="N°" type="text" name="numero">
                    <input required placeholder="Tel" type="text" name="telefone">
                    
                </div>

                <div class="col l3">
                    <input required placeholder="RG" type="text" name="rg">
                    <input required placeholder="CPF" type="text" name="cpf">
                    <input placeholder="Filho 1" type="text" name="filho1">
                    
                </div>

                <div class="col l3">
                    <input  placeholder="Filho 2" type="text" name="filho2">
                    <input  type="text" placeholder="Filho 3" name="filho3">
                    <input  type="submit" class="btn" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col l12 m12">
            <table class="bordered striped highlight">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Endereço</th>
                        <th>N°</th>
                        <th>Tel</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Filho 1</th>
                        <th>Filho 2 </th>
                        <th>Filho 3</th>
                    </tr>   
                </thead>

                <tbody>
                    <?php 
                         include "mvc/dao/showCad.php";

                    ?>
                </tbody>
            </table>
        </div>
    </div>


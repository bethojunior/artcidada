<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="../imagens/logoSemFundo.png" rel="icon" />
        <link href="../Materialize/css/materialize.css" rel="stylesheet" />
        <link href="../css/index.css" rel="stylesheet" />
        <link href="../css/quemSomos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Source+Sans+Pro|Ubuntu|Roboto|Raleway" rel="stylesheet">
    </head>
    
    <body onload="">
        <div class="row menuWeb">          
            <nav class="col l12 s12 m12 navHeader">
                <ul>
                    
                    <li><a class="liMenuMobile" href="../index.php">Home</a></li>
                    <li><a class="liMenuMobile" href="galeriaDeFotos.php">Galeria de fotos</a></li>
                    <li><a class="liMenuMobile" href="#footer">Contato</a></li>
                    <!--li class="liFirstChild"><img class="logoHeader" src="../imagens/logo.png"></li-->
                </ul>
            </nav>
        </div>

        <div class="row divForm">
            <form class="row" action="/art/painel/mvc/dao/enviarDoacoes.php" method="POST">

                <div class="col l3 m6 s12">
                    <input class="inputForm" placeholder="Nome completo *" name="nome" id="nomeCompleto"><br>
                    <input class="inputForm" placeholder="RG" name="rg" id="rg"><br>
                    <input class="inputForm" placeholder="CPF *" name="cpf" id="cpf"><br>
                    <input class="inputForm" placeholder="Telefone de contato *" id="telefone" name="telefone">
                    <input class="inputForm" placeholder="Numero da conta *" id="numeroConta" name="numeroConta"><br>
                </div>

                <div class="col l3 m6 s12">
                    <input class="inputForm" placeholder="Cidade*" id="cidade" name="cidade"><br>
                    <input class="inputForm" placeholder="Bairro" id="bairro" name="bairro"><br>
                    <input class="inputForm" placeholder="Nome da rua" id="rua" name="rua"><br>
                    <input class="inputForm" placeholder="Numero" id="numeroCasa" name="numeroCasa"><br>
                    <input class="inputForm" placeholder="CEP" id="cep" name="cep"><br>
                </div>

                <ul class="row col l12 m12 s12">
                    <span>Valor da doação</span>
                    <li>
                        <input name="valor" type="radio" id="2" value="2" />
                        <label for="2">R$2,00</label>
                    </li>
                    
                    <li>
                        <input name="valor" type="radio" id="3" value="3" />
                        <label for="3">R$3,00</label>
                    </li>
                    
                </ul>

                <ul class="row col l12 m12 s12">
                    <li>
                        <input name="confirme" type="radio" id="4" value="s" />
                        <label for="4">Sim</label>
                    </li>
                    
                    <li>
                        <input name="confirme" type="radio" id="5" value="n" />
                        <label for="5">Não</label>
                    </li>
                </ul>
                
                <input type="submit" class="btn" value="Enviar" />
            </form>

            <div class="divFormPreenchido row col l5 m6 s12">
                <div class="textJustify">
                    Eu, <b><span id="formNomeCliente"></span></b> <br> 
                    RG°: <span id="formRg"></span>,<br> 
                    Cpf: <span id="formCpf"></span> , <br>
                    Telefone: <span id="formTelefone"></span> , <br>
                    Residente na rua: <span id="formRua"></span>, <br>  
                    N°: <span id="formNumeroCasa"></span>, <br>  
                    Bairro: <span id="formBairro"></span>,<br> 
                    Cep: <span id="formCep"></span>, <br> 
                    Cidade: <span id="formCidade"></span>, <br> 
                    Titular da conta n°: <span id="formNumeroConta"></span>, <br>
                    <b>Concordo em DOAR <span></span> mensalmente e por tempo inderteminado, 
                    a quantia de R$<span id="formValorDoacao"></span>.
                    </b>
                </div>
            </div>
        </div>


        <br>
        <!-- FOOTER -->

        <div class="row col l12 footer" id="footer">
        <div class="col l2 s12 row">
        <span class="spanFooter">Redes sociais</span>
        <br><br>
           
            <div class="divIcon col l12 s4">
                <a href="https://www.facebook.com/artcidadacariri/"  target="_blank">
                <img class="iconSocial" src="../imagens/face.png" ></a><br><br>
            </div>
            
            <div class="divIcon col l12 s4">
                <a href="https://www.instagram.com/artcidada/?hl=pt-br" target="_blank">
                    <img class="iconSocial" src="../imagens/insta.png"><br><br></a>
            </div>
            
            <div class="divIcon col l12 s4">
                <a href="tel:88988850617">
                    <img class="iconSocial" src="../imagens/tel.png" ><br></a><br>
            </div>            
        </div>
        <div class="row col l6 s12">
            <span class="spanFooter">Entre em contato: </span>
            <form method="POST" action="../php/mail.php">
                <input type="text" placeholder="Seu nome" name="nome" required>
                <input type="text" placeholder="Seu contato (email ou telefone)" name="contato" required>
                <textarea placeholder="Digite aqui" name="mensagem" required></textarea><br><br>
                <input class="btn right " type="submit" value="Enviar">
            </form><br><br>
        </div>
        <div class="col l4 s12">
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4442.971367777788!2d-39.275053640749974!3d-7.21377029564017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a1792bf77e2785%3A0xc7c96f6a2ee01e75!2sR.+Min.+Colombo+de+Sousa%2C+Juazeiro+do+Norte+-+CE!5e0!3m2!1spt-BR!2sbr!4v1511028710858" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <script src="../js/functions.js"></script>
    <script src="../js/doacao.js"></script>
    </body>
</html>
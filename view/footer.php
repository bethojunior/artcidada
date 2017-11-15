<div class="row col l12 footer" id="footer">
<!--     <div class="col l2">
        <span class="spanFooter">Redes sociais</span>
        <br><br>
        <ul class="ulIcons">
            <li class="liIcons">
                <a href="https://www.facebook.com/artcidadacariri/"  target="_blank"><img class="iconFace" src="imagens/face.png" ></a>
            </li>
            <li class="liIcons">
                <img class="iconInsta" src="imagens/insta.png">
            </li>
            <li class="liIcons">
                <img class="iconSocial" src="imagens/tel.png" >
            </li>
            
        </ul>
    </div> -->
    <?php 
        include("icons.php");
    ?>
    <div class="row col l6 s12">
        <span class="spanFooter">Entre em contato: </span>
        <form method="POST" action="php/mail.php">
            <input type="text" placeholder="Seu nome" name="nome" required>
            <input type="text" placeholder="Seu contato (email ou telefone)" name="contato" required>
            <textarea placeholder="Digite aqui" name="mensagem" required></textarea><br><br>
            <input class="btn right " type="submit" value="Enviar">
        </form><br><br>
    </div>
    <div class="col l4 s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.381939861688!2d-38.52806888524105!3d-3.726625097288669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74852a6a67793%3A0x7626efa506620e6b!2sRua+S%C3%A3o+Paulo%2C+1+-+Centro%2C+Fortaleza+-+CE%2C+60310-330!5e0!3m2!1spt-BR!2sbr!4v1510335503852" class="mapa" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<!-- <div class="row col l12 endFooter">
    &copy;
</div> -->
<div class="row col l12 footer" id="footer">
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
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4442.971367777788!2d-39.275053640749974!3d-7.21377029564017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a1792bf77e2785%3A0xc7c96f6a2ee01e75!2sR.+Min.+Colombo+de+Sousa%2C+Juazeiro+do+Norte+-+CE!5e0!3m2!1spt-BR!2sbr!4v1511028710858" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

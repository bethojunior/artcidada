<script src="../js/jquery.js"></script>
<script src="../js/ajax.js"></script>
<?php
    include "mvc/service/receberDadosCards.php";
?>
<div class="row">
    <table class="col l12 s12 striped highlight " border="1">

        <thead>
            <tr>
                <th>Imagem</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Opcoes</th>
            </tr>
        </thead>

        <tbody>
            <?php
               include "mvc/dao/showCards.php";
            ?>
        </tbody>
    </table>
</div>


<!-- MODAL 2 -->
<div id="modalCard" class="modal">
    <form method="POST" action="mvc/service/updateCards.php" class="modal-content">
        <input type="text" id="modalTitleCard" name="modalTitleCard" placeholder="Digite aqui o titulo"><br>
        <input id="idCard" name="idCard"  style="display: none;" >
        <textarea class="textareaAll" type="text" id="modalTextCard" name="modalTextCard" placeholder="Digite aqui o texto"></textarea><br><br>
        <input  type="submit" class="btn right" value="Enviar">
    </form>
    </div>

    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
</div>


<div id="modalDeleteCard" class="modal">
    <p><h4>Tem certeza que deseja apagar?</h4></p>

    <div class="modal-footer">
        <?php
            include "mvc/service/receberDadosCards.php";
            $result = mysqli_fetch_array($dados);
            //echo "<input type='hidden' id='idDelete' name='idDelete' value='".$result['id']."' >";
            echo "<a href='mvc/dao/apagarCard.php?id=".$result['id']."' class='btn large'>Apagar</a>";
        ?>
    </div>
</div>




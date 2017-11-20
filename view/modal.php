<!-- MODAL 2 -->
<div id="modal2" class="modal">
    
    <a href="#!" class="modal-action modal-close btn-flat right">Fechar</a>
    <div class="modal-content">
        <h3 id="tituloModal"></h3><hr>
        <div class="">
            <div class="col l6 s12 divModal">
                <img id="imagemModal">
            </div>
            <div class="col l6 s12">
                <h5 id="textoModal"></h5>
            </div>
        </div>
    </div>

</div>


  <!-- Modal 1 -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <form class="container" method="POST" action="painel/mvc/controller/users.php" >
            <input placeholder="Login" id="login" name="login" required autofocus>
            <div class="" id="divSenha">
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
                <a onmousedown="mostrarSenha()" onmouseup="ocultarSenha()">Mostrar senha</a>
                <br>
                <input type="submit" value="Entrar" class="btn" >
            </div>
        </form>
    </div>
</div>
  
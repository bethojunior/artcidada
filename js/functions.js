function mailSuccess(){
    setTimeout("window.location='../index.php'", 900);
}
function mailFailed(){
    setTimeout("window.location='../index.php'",2000);
}
function mostrarSenha() {
    document.getElementById("senha").type = "text";
}

function ocultarSenha() {
    document.getElementById("senha").type = "password";
}

////////////////////////////////////*MODAIS CARDS */
function modal1() {
    $('#modal1').modal('open');
}

function modal2(imagem) {
    var object = JSON.parse(imagem);
    var img = document.getElementById("imagemModal");
    $('#modal2').modal('open');
    document.getElementById("tituloModal").innerHTML = object.titulo;
    img.src= 'uploadCards/medium/' + object.imagem;
    document.getElementById("textoModal").innerHTML = object.texto;

}

function trocarImagem(){

    var idSlide = document.getElementById("idSlide").value;
    var caminhoImagem = document.getElementById("idSlide").src;

    document.getElementById("imagemCentral").src= caminhoImagem;

}




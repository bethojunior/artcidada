var codigoImage = 1;
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

function trocarImagemDireita(){
    if(document.getElementById("idSlide"+codigoImage) != null) {
        var idSlide = document.getElementById("idSlide" + codigoImage).value;
        var caminhoImagem = document.getElementById("idSlide" + codigoImage).src;
        codigoImage++;
        document.getElementById("imagemCentral").src = caminhoImagem;
    }
}

function trocarImagemEsquerda(){
    if(document.getElementById("imagemCentral"+codigoImage) != null) {
        var idSlide = document.getElementById("caminhoImagem" + codigoImage).value;
        var caminhoImagem = document.getElementById("caminhoImagem" + codigoImage).src;
        codigoImage++;
        document.getElementById("idSlide").src = caminhoImagem;
    }
}


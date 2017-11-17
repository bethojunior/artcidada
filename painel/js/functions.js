///SAIR
function sairPainel(){
    $('#modalsairPainel').modal('open');
}

///////////////MODAL
function modalDeleteCard(id){
    $('#modalDeleteCard').modal('open');
}

/////DELETAR SLIDE
function modalDeleteSlide(id){
    $('#modalDeleteSlide').modal('open');
}
/////MODAL DELETAR GALERIA
function modalDeleteGaleria(id){
    $('#modalDeleteGaleria').modal('open');
}

////////////// LIBERAR  AO ENVIAR ARQUIVOS
function Success() {
    setTimeout("window.location='../../adm.php'",1000);
}

function Failed() {
    setTimeout("window.location='../../adm.php'",2000);
    document.write("ERROR");
}


/// ABRIR PÁGINA EM UPLOAD DE IMAGENS DO CARD
function updateCardsSuccess(){
    setTimeout("window.location= '../../adm.php'",1000);
}

function updateCardsFailed() {
    setTimeout("window.location= '../../adm.php'",4000);
}
/// ABRIR PÁGINA EM UPLOAD DE VIDEOS E IMAGEM DA PÁGINA SLIDE
function updateSlideSuccess(){
    setTimeout("window.location= '../../adm.php'",1000);
}

function updateSlideFailed() {
    setTimeout("window.location= '../../adm.php'",4000);
}

////// ABRIR PÁGINA EM UPLOAD DE GALERIA DE FOTOS
function updateGaleriaSuccess(){
    setTimeout("window.location='../../adm.php'",2000);
}
function updateGaleriaFailed(){
    setTimeout("window.location='../../adm.php'",4000);
}

///////////////////////////CONTAGEM CARACTERES ////////////-------/


if(document.getElementById('texto')!= null){
    document.getElementById('texto').addEventListener("keydown" , function(){
        var quantidade = 250;
        var contagem = document.getElementById('texto').value.length;

        document.getElementById('numb').innerHTML= quantidade - contagem;

    });
}

if(document.getElementById('titulo')!= null){
    document.getElementById('titulo').addEventListener("keydown" , function(){
        var quantidade = 20;
        var contagem = document.getElementById('titulo').value.length;

        document.getElementById('numbTitulo').innerHTML= quantidade - contagem;

    });
}

// ///////////////SLIDES -- CAROUSEL ------------////////
if(document.getElementById('titleSlide')!= null){
    document.getElementById('titleSlide').addEventListener("keydown" , function(){
        var quantidade = 20;
        var contagem = document.getElementById('titleSlide').value.length;

        document.getElementById('numbSlide').innerHTML= quantidade - contagem;

    });
}

/////////////////////////////////////GALERIA //////////
if(document.getElementById('tituloGaleria')!= null){
    document.getElementById('tituloGaleria').addEventListener("keydown" , function(){
        var quantidade = 20;
        var contagem = document.getElementById('tituloGaleria').value.length;

        document.getElementById('numbTituloGaleria').innerHTML= quantidade - contagem;

    });
}















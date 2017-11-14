function alterarCards(id){
    $.ajax({
       url  :"mvc/service/jsonReceberDadosCards.php",
       type : "POST",
       data : {"id" : id},
       success : function(response){
           var cards = JSON.parse(response);
           console.log(response);
           document.getElementById("idCard").value = cards.id;
           document.getElementById("modalTitleCard").value = cards.titulo;
           document.getElementById("modalTextCard").value = cards.texto;
           $('#modalCard').modal('open');
       }
    });
}








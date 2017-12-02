
var nomeDoCliente   = document.getElementById("nomeCompleto").value;
var rgCliente       = document.getElementById("rg").value;
var cpfCliente      = document.getElementById("cpf").value;
var telefoneCliente = document.getElementById("telefone").value;
var numeroCliente   = document.getElementById("numeroConta").value;

document.getElementById("nomeCompleto").addEventListener("input" ,function(){
    document.getElementById("formNomeCliente").innerHTML = this.value;
});

document.getElementById("rg").addEventListener("input" , function(){
    document.getElementById("formRg").innerHTML = this.value;
});

document.getElementById("cpf").addEventListener("input" , function(){
    document.getElementById("formCpf").innerHTML = this.value;
});

document.getElementById("telefone").addEventListener("input" , function(){
    document.getElementById("formTelefone").innerHTML = this.value;
});

document.getElementById("numeroConta").addEventListener("input" , function(){
    document.getElementById("formNumeroConta").innerHTML = this.value;
});

document.getElementById("cidade").addEventListener("input" , function(){
    document.getElementById("formCidade").innerHTML = this.value;
});

document.getElementById("bairro").addEventListener("input" , function(){
    document.getElementById("formBairro").innerHTML = this.value;
});

document.getElementById("rua").addEventListener("input" , function(){
    document.getElementById("formRua").innerHTML = this.value;
});

document.getElementById("numeroCasa").addEventListener("input" , function(){
    document.getElementById("formNumeroCasa").innerHTML = this.value;
});

document.getElementById("cep").addEventListener("input" , function(){
    document.getElementById("formCep").innerHTML = this.value;
});

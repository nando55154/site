<?php
function visualizar(){
    $produtos = array();
    $produtos["Produto"] = "Celular";
    $produtos["Descrição"] = "Samsung Galaxy S10";
    $produtos["Preço"] = "R$30,00";
    
    exibir("produto/visualizar", $produtos);
}

function adicionar(){
    if (ehPost()){
        $produto= $_POST["Produto"];
        $descricao= $_POST["Descição"];
        $preco=$_POST["Preço"];
       
        if(strlen(trim($_POST['Produto']))==0){
   $errors[]="Você deve inserir um produto.";
}

if(strlen(trim($_POST['Descrição']))==0){
   $errors[]="Você deve inserir uma descrição.";
}

if(strlen(trim($_POST['Preço']))==0){
   $errors[]="Você deve inserir um preço.";
        
        redirecionar("produto/visualizar");
    } else {
        exibir("produto/formulario");
    }
}

if(strlen(trim($_POST['Produto']))==0){
   $errors[]="Você deve inserir um produto.";
}

if(strlen(trim($_POST['Descrição']))==0){
   $errors[]="Você deve inserir uma descrição.";
}

if(strlen(trim($_POST['Preço']))==0){
   $errors[]="Você deve inserir um preço.";
}
}
?>
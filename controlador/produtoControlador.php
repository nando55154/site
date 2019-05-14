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
       
        
        
        redirecionar("produto/visualizar");
    } else {
        exibir("produto/formulario");
    }
}
?>
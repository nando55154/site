<?php
function visualizar(){
    $produtos = array();
    $produtos["Produto"] = "Celular";
    $produtos["Descrição"] = "Samsung Galaxy S10";
    $produtos["Preço"] = "R$30,00";
    
    exibir("produto/visulizar");
}

?>
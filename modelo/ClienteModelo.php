<?php

function pegarTodosClientes() {
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $linha;
    }
    return $clientes;
}

function pegarClientePorId($id) {
    $sql = "SELECT * FROM cliente WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function adicionarCliente($nome, $email, $senha) {
    $sql = "INSERT INTO cliente (nome, email, senha) 
			VALUES ('$nome', '$email', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cliente' . mysqli_error($cnx)); }
    return 'Cliente cadastrado com sucesso!';
}

function editarCliente($id, $nome, $email) {
    $sql = "UPDATE cliente SET nome = '$nome', email = '$email' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar dados' . mysqli_error($cnx)); }
    return 'Dados alterados com sucesso!';
}

function deletarCliente ($id) {
    $sql = "DELETE FROM cliente WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cliente' . mysqli_error($cnx)); }
    return 'Cliente deletado com sucesso!';
            
}

function pegarClientePorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM cliente WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}
<?php

require_once "modelo/ClienteModelo.php";

function index() {
    $dados["clientes"] = pegarTodosClientes();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["cliente"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        alert(adicionarCliente($nome, $email, $senha));
        redirecionar("usuario/index");
        
        $msg= adicionarCliente($nome, $email, $senha);
        echo $msg;
        
    }else{
            
        }exibir("usuario/formulario");
    }


    function deletar($id) {
        alert(deletarCliente($id));
        redirecionar("usuario/index");
    }

    function editar($id) {
        if (ehPost()) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            alert(editarCliente($id, $nome, $email));
            redirecionar("usuario/index");
            
            if (strlen(trim($_POST['usuario'])) == 0) {
            $errors[] = "Você deve inserir seu nome.";
        }
        $input['email'] = filter_var(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($input['email'] == FALSE) {
            $errors[] = "Você deve inserir um e-mail.";
        }
        } else {
            $dados["usuario"] = pegarClientePorIdPorId($id);
            exibir("usuario/formulario", $dados);
        }
    }

    function visualizar($id) {
        $dados["usuario"] = pegarClientePorIdPorId($id);
        exibir("usuario/visualizar", $dados);
    }

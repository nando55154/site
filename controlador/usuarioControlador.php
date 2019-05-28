<?php

require_once "modelo/usuarioModelo.php";

function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        alert(adicionarUsuario($nome, $email, $senha));
        redirecionar("usuario/index");

        if (strlen(trim($_POST['usuario'])) == 0) {
            $errors[] = "Você deve inserir seu nome.";
        }
        $input['email'] = filter_var(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($input['email'] == FALSE) {
            $errors[] = "Você deve inserir um e-mail.";
        }

        if (strlen(trim($_POST['senha'])) == 0) {
            $errors[] = "Você deve inserir uma senha.";
        } else {
            exibir("usuario/formulario");
        }
    }
}

    function deletar($id) {
        alert(deletarUsuario($id));
        redirecionar("usuario/index");
    }

    function editar($id) {
        if (ehPost()) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            alert(editarUsuario($id, $nome, $email));
            redirecionar("usuario/index");
            
            if (strlen(trim($_POST['usuario'])) == 0) {
            $errors[] = "Você deve inserir seu nome.";
        }
        $input['email'] = filter_var(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($input['email'] == FALSE) {
            $errors[] = "Você deve inserir um e-mail.";
        }
        } else {
            $dados["usuario"] = pegarUsuarioPorId($id);
            exibir("usuario/formulario", $dados);
        }
    }

    function visualizar($id) {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/visualizar", $dados);
    }

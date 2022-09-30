<?php
// Inicia a sessão
session_start();

// Verificando se ocorreu a requisição POST a este pagina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Verificando se houve o set do botão do formulario
    if (isset($_POST['btn-editar'])) {
        
        // Verificando a presença de tags HTML indesejadas
        if (validaFormulario($_POST)) {
            // Redireciona para pagina que enviou o formulario
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } 
        $dados = sanitizaFormulario($_POST);

        $id = $dados['id'];

        $nome = $dados['nome'];
        $custo = $dados['custo'];
        $data = $dados['data'];

        if (verificaNome($nome)) {

            atualizarDadosTarefa($id, $nome, $custo, $data);
        }
    }
}
?>
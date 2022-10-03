<?php
// Inicia a sessão
session_start();

// Incluindo funções
require_once '../includes/connect.php';
include_once '../includes/sanitize.php';
include_once '../functions/tarefa.php';
include_once '../functions/verifica.php';

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
        // Sanitiza os dados recebidos no formulario
        $dados = sanitizaFormulario($_POST);

        // Atribuindo os campos input a variaveis
        $id = $dados['id'];
        $nome = $dados['nome'];
        $custo = $dados['custo'];
        $data = $dados['data'];
        $ordem = $dados['ordem'];

        // Valida a disponibilidade do nome
        if (verificaNome($id, $nome)) {
            // Invoca a função de Update
            atualizarDadosTarefa($id, $nome, $custo, $data, $ordem);
        }
    }
}
// Encerrando a conexão
pg_close(CONNECT);
?>
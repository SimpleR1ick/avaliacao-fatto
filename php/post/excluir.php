<?php
// Inicia o array da sessão
session_start();

// Incluindo funções
require_once '../includes/connect.php';
include_once '../includes/sanitize.php';
include_once '../functions/tarefa.php';
include_once '../functions/verifica.php';

// Verificando se ocorreu a requisição POST a este pagina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Verificando se houve o set do botão do formulario
    if (isset($_POST['btn-deletar'])) {
        
        // Verificando a presença de tags HTML indesejadas
        if (validaFormulario($_POST)) {
            // Redireciona para pagina que enviou o formulario
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } 
        // Invocando a função de sanitização do formulario
        $dados = sanitizaFormulario($_POST, $conn);

        // Atribuindo o id a uma variavel
        $id = $dados['delete_id'];

        // Invoca a função de exclusão
        excluirTarefa($conn, $id);
    }
}
mysqli_close($conn);
?>
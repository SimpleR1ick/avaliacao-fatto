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
    if (isset($_POST['btn-cadastrar'])) {

        // Verificando a presença de tags HTML indesejadas
        if (validaFormulario($_POST)) {
            // Redireciona para pagina que enviou o formulario
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } 
        // Invocando função para sanitizar o formulario
        $dados = sanitizaFormulario($_POST, $conn);

        // Atribuindo os campos input a variaveis
        $nome = $dados['nome'];
        $valor = $dados['custo'];
        $data = $dados['data'];
        $ordem = $dados['ordem'];
        
        // Valida a disponibilidade do nome
        if (disponivelNome($conn, $nome)) {
            // Invoca a função de Registro
            cadastrarTarefa($conn, $nome, $valor, $data, $ordem);
        }    
    }   
}
// Encerrando a conexão
mysqli_close($conn);
?>
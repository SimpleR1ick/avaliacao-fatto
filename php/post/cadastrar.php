<?php 
session_start();

require_once '../includes/connect.php';

include_once '../includes/sanitize.php';

// Abrindo conexão como constante global
define('CONNECT', db_connect());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['btn-cadastrar'])) {

        if (validaFormulario($_POST)) {

            $dados = sanitizaFormulario($_POST);

            $nome = $dados['nome'];
            $valor = $dados['custo'];
            $data = $dados['data'];
            $ordem = $dados['ordem'];

            cadastrarTarefa($nome, $valor, $data, $ordem);
        }    
    }   
}
// Encerrando a conexão
mysqli_close(CONNECT);
?>
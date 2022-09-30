<?php
// Inicia o array da sessão
session_start();

// Incluindo funções
require_once '../includes/connect.php';

// Abrindo conexão como constante global
define('CONNECT', db_connect());

// Verificando se ocorreu a requisição POST a este pagina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Verificando se houve o set do botão do formulario
    if (isset($_POST['btn-deletar'])) {

    }
}
?>
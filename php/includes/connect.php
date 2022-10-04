<?php
try {
    // Criando um link de conexão com o banco
    $conn = mysqli_connect("localhost", "root", 'usbw', "fatto");

    // Verifica se a conexão foi aberta
    if (!$conn) {
        throw new Exception('Falha na conexão:');
    }
}
catch (Exception $e) {
    // Adiciona uma mensagem de erro
    die($e->getMessage());
}
?>
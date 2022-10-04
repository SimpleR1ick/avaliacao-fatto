<?php

try {
    $conn = mysqli_connect("localhost", "root", 'usbw', "fatto");

    // Verifica se a conexão foi aberta
    if (!$conn) {
        throw new Exception('Falha na conexão:');
    }
}
catch (Exception $e) {
    // Adiciona uma mensagem a sessâo
    echo $e->getMessage();
}
?>
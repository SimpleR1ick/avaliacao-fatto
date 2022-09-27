<?php
/**
 * 
 * 
 * 
 * 
 * 
 */
function db_connect(): mixed {
    // Conexão com banco de dados
    $hostname = "localhost"; //endereço do servidor
    $username="root";
    $password="";
    $database="fatto";

    // Link de conexão
    $connect = mysqli_connect($hostname, $username, $password, $database);

    //codifica com o caracteres ao manipular dados do banco de dados
    mysqli_set_charset($connect, "utf8");

    if (!$connect) {
        die ("Falha na conexão: ". mysqli_connect_error());
    }

    return $connect;
}
?>
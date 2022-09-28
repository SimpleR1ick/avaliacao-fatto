<?php
/**
 * Função para abrir uma conexão com a base de dados
 * 
 * @return mysqli $connect link da conexão
 * 
 * @author Henrique Dalmagro
 */
function db_connect(): mixed {
    // Conexão com banco de dados
    $hostname = "localhost"; //endereço do servidor
    $username="root";
    $password="";
    $database="fatto";

    try {
        // Link de conexão
        $connect = mysqli_connect($hostname, $username, $password, $database);

        // Verifica se a conexão foi aberta
        if (!$connect) {
            throw new Exception('Falha na conexão:');
        }
        // Codifica com o caracteres ao manipular dados do banco de dados
        mysqli_set_charset($connect, "utf8");

        // Retorno da função
        return $connect;
    } 
    catch (Exception $e) {
        // Adiciona uma mensagem a sessâo
        $_SESSION['msg'] = $e->getMessage();

        // Exibe o erro
        die(mysqli_connect_error());
    }
}
?>
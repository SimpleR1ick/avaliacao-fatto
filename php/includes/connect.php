<?php
// Conexão com banco de dados
$host="	babar.db.elephantsql.com"; //endereço do servidor
$db="wzrbejao";
$user="wzrbejao";
$pass="uxwM-TwRLgW0MKjaPC0sDCrNPFAQe8VU";

$connect = null;

try {
    $connect = pg_connect("host=$host dbname=$db user=$user password=$pass");

    // Verifica se a conexão foi aberta
    if (!$connect) {
        throw new Exception('Falha na conexão:');
    }
}
catch (Exception $e) {
    // Adiciona uma mensagem a sessâo
    $_SESSION['msg'] = $e->getMessage();
}

define("CONNECT", $connect);
?>
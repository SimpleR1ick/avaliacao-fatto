<?php 
// Importando o banco de dados
require_once 'php/includes/connect.php';

// Verifica se o ID existe no header
if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    // Verifica se o ID esta vazio
    if (!empty($id)) {
        // Preparando uma consulta ao banco de dados
        $sql = "SELECT * FROM tarefas WHERE id = $id LIMIT 1";
        $query = mysqli_query($conn, $sql);
        
        // Transforma o resultado em um array assossiativo
        $result = mysqli_fetch_assoc($query);

        // Armazena na variavel o resultado com a chave dados
        $retorna = ['dados'=>$result];

        // Imprime o resultado na pagina em forma de json
        echo json_encode($retorna);
    }
}
?>
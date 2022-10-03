<?php 
require_once 'php/includes/connect.php';

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    if (!empty($id)) {
        $sql = "SELECT * FROM tarefas WHERE id = $id LIMIT 1";
        $query = pg_query(CONNECT, $sql);
        
        $result = pg_fetch_array($query);

        $retorna = ['dados'=>$result];

        echo json_encode($retorna);
    }
}
?>
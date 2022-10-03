<?php 
require_once 'php/includes/connect.php';

if ($_SERVER['REQUEST_METHOD']) {

    if (isset($_GET['id'])) {
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

        if (!empty($id)) {
            $sql = "SELECT * FROM tarefas WHERE id = $id LIMIT 1";
            $query = mysqli_query($conn, $sql);
            
            $result = mysqli_fetch_assoc($query);

            $retorna = ['dados'=>$result];

            echo json_encode($retorna);
        }
    }
}
?>
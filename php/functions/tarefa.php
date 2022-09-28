<?php 
function cadastrarTarefa($nome, $custo, $data, $ordem): void {
    $sql = "INSERT INTO tarefas (nom_tarefa, custo, data_limite, ordem) 
            VALUES ($nome, $custo, $data, $ordem)";
    try {
        $query = mysqli_query(CONNECT, $sql);

        if (!$query) {
            throw new Exception('Erro, tarefa não inserida!');
        }
        // Adciona a sessão uma mensagem sucesso
        $_SESSION['msg'] = 'Uhul, tarefa cadastrada!';
    } 
    catch (Exception $erro) {
        // Adciona a sessão uma mensagem de erro
        $_SESSION['msg'] = $erro->getMessage();
    } 
    finally {
        header('Location: ../../index.php');
    }
}
?>
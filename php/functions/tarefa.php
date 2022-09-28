<?php 
/**
 * Função para cadastrar uma tarefa no banco de dados
 * 
 * @param string $nome da tarefa
 * @param float  $custo de realização
 * @param date   $data formato (yyyy-mm-dd)
 * @param int    $ordem prioridade da tarefa
 * 
 * @author Henrique Dalmagro
 */
function cadastrarTarefa($nome, $custo, $data, $ordem): void {
    $sql = "INSERT INTO tarefas (nom_tarefa, custo, data_limite, ordem) 
            VALUES ('$nome', $custo, '$data', $ordem)";

    var_dump($custo);
    
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
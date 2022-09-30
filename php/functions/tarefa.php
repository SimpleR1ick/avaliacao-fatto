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

/**
 * 
 * 
 * 
 * 
 */
function atualizarDadosTarefa($id, $nome, $custo, $data): void {
    
    $sql = "UPDATE tarefas SET (nom_tarefa = $nome, custo = $custo, data_limite = $data) 
            WHERE id = $id";

    $query = mysqli_query(CONNECT, $sql);

}

/**
 * 
 * 
 * 
 */
function AtualizarOrdemTarefa($id, $ordem): void {

}

/**
 * Função excluir um usúario do banco de dados
 * 
 * @author Henrique Dalmagro
 */
function excluirTarefa(): void {
    $id = mysqli_escape_string(CONNECT, $_POST['id']);
	
	$sql = "DELETE FROM clientes WHERE id = $id";
	
	if (mysqli_query(CONNECT, $sql)) {
		$_SESSION['mensagem'] = "Excluido com sucesso!";
		header('Location: ../crud_index.php');

	} else {
		$_SESSION['mensagem'] = "Erro ao excluir!";
		header('Location: ../crud_index.php');
	}
}
?>
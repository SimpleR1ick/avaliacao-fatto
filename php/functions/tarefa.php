<?php 
/**
 * Função para cadastrar uma tarefa no banco de dados
 * 
 * @param mysqli $conn conexão aberta
 * @param string $nome da tarefa
 * @param float  $custo de realização
 * @param string   $data formato (yyyy-mm-dd)
 * @param int    $ordem prioridade da tarefa
 * 
 * @author Henrique Dalmagro
 */
function cadastrarTarefa($conn, $nome, $custo, $data, $ordem): void {
    $sql = "INSERT INTO tarefas (nom_tarefa, custo, data_limite, ordem) 
            VALUES ('$nome', $custo, '$data', $ordem)";

    try {
        $query = mysqli_query($conn, $sql);

        if (!$query) {
            throw new Exception('Erro, tarefa não inserida!');
        }
        // Adciona a sessão uma mensagem sucesso
        $_SESSION['msg'] = 'Tarefa cadastrada!';
    } 
    catch (Exception $e) {
        // Adciona a sessão uma mensagem de erro
        $_SESSION['msg'] = $e->getMessage();
    } 
    finally {
        // Redireciona pra pagina principal
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}

/**
 * Função para atualizar os dados de uma tarefa
 * 
 * @param mysqli $conn conexão aberta
 * @param int    $id
 * @param string $nome
 * @param float  $custo
 * @param string $data
 * @param int    $ordem
 * 
 * @author Henrique Dalmagro
 */
function atualizarDadosTarefa($conn, $id, $nome, $custo, $data, $ordem): void {
    
    $sql = "UPDATE tarefas SET nom_tarefa = '$nome', custo = $custo, data_limite = '$data', ordem = $ordem WHERE id = $id";

    try {
        $query = mysqli_query($conn, $sql);

        if (!$query) {
            throw new Exception('Erro, ao editar!');
        }
        // Adciona a sessão uma mensagem sucesso
        $_SESSION['msg'] = 'Tarefa atualizada!';
    }
    catch (Exception $e) {
        // Adciona a sessão uma mensagem de erro
        $_SESSION['msg'] = $e->getMessage();
    } 
    finally {
        // Redireciona pra pagina principal
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}

/**
 * Função excluir um usúario do banco de dados
 * 
 * @param mysqli $conn conexão aberta
 * @param int $id da tarefa
 * 
 * @author Henrique Dalmagro
 */
function excluirTarefa($conn, $id): void {
	$sql = "DELETE FROM tarefas WHERE id = '$id'";

    try {
        $query = mysqli_query($conn, $sql);

        if (!$query) {
            throw new Exception("Erro ao excluir!");
        }
        // Adiciona uma mensagem de sucesso a sessão
        $_SESSION['msg'] = "Excluido com sucesso!";
    }
    catch (Exception $e) {
        // Adiciona uma mensagem de erro a sessão
        $_SESSION['msg'] = $e->getMessage();
    }
    finally {
        // Redireciona pra pagina principal
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}
?>
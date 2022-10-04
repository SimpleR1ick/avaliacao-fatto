<?php 
/**
 * Função para cadastrar uma tarefa no banco de dados
 * 
 * @param string $nome da tarefa
 * @param float  $custo de realização
 * @param string   $data formato (yyyy-mm-dd)
 * @param int    $ordem prioridade da tarefa
 * 
 * @author Henrique Dalmagro
 */
function cadastrarTarefa($nome, $custo, $data, $ordem, $conn): void {
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
        header('Location: ../../index.php');
    }
}

/**
 * Função para atualizar os dados de uma tarefa
 * 
 * @param int    $id
 * @param string $nome
 * @param float  $custo
 * @param string $data
 * @param int    $ordem
 * 
 * @author Henrique Dalmagro
 */
function atualizarDadosTarefa($id, $nome, $custo, $data, $ordem, $conn): void {
    
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
        header('Location: ../../index.php');
    }
}

/**
 * Função excluir um usúario do banco de dados
 * 
 * @param int $id da tarefa
 * 
 * @author Henrique Dalmagro
 */
function excluirTarefa($id, $conn): void {
	$sql = "DELETE FROM tarefas WHERE id = '$id'";

    try {
        $query = mysqli_query($conn, $sql);

        if (!$query) {
            throw new Exception("Erro ao excluir!");
        }

        $_SESSION['msg'] = "Excluido com sucesso!";
    }
    catch (Exception $e) {
        
        $_SESSION['msg'] = $e->getMessage();
    }
    finally {
        header('Location: ../../index.php');
    }
}
?>
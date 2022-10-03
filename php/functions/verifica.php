<?php
/**
 * Função para verificar se um nome esta disponivel para uso
 * 
 * @param int    $id
 * @param string $nome
 * 
 * @author Henrique Dalmagro
 */
function verificaNome($id, $nome): bool {
    $sql = "SELECT id, nom_tarefa FROM tarefas WHERE nom_tarefa = '$nome' ";
    $query = pg_query(CONNECT, $sql);

    if (pg_num_rows($query) > 0) {
        $result = pg_fetch_row($query);

        if ($result[0] != $id) {
            $_SESSION['msg'] = 'Erro! nome da tarefa em uso!';

            header("Location: {$_SERVER['HTTP_REFERER']}"); 
            return false;
        }  
    }
    return true;
}

/**
 * Função para verificar se um nome existe
 * 
 * @param string $nome
 * 
 * @author Henrique Dalmagro
 */
function disponivelNome($nome): bool {
    $sql = "SELECT nom_tarefa FROM tarefas WHERE nom_tarefa = '$nome'";
    $result = pg_query(CONNECT, $sql);

    if (pg_num_rows($result) > 0) {
        $_SESSION['msg'] = 'Erro! nome da tarefa em uso!';

        header("Location: {$_SERVER['HTTP_REFERER']}"); 
        return false;
    }  
    return true;    
}
?>
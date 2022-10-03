<?php
require_once 'php/includes/connect.php';

// Preprando uma consulta para obter todos os dados da tabela tarefas
$sql = "SELECT * FROM tarefas ORDER BY ordem";
$query = mysqli_query($conn, $sql);

$dados = "
        <table class='striped'>
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Custo:</th>
                    <th>Data:</th>
                </tr>
            </thead>

            <tbody>";

while ($row = $result = mysqli_fetch_array($query)) :
    extract($row);

    $c = '';

    if ($custo >= 1000) {
        $c = 'class=amber lighten-5';
    }
    $dados .= "
                <tr $c>
                    <td>$nom_tarefa</td>
                    <td>$custo</td>
                    <td>$data_limite</td>
                    <td><a id='$id' data-target='editTarefaModal' onclick='editarTarefa($id)' class='btn modal-trigger btn-floating amber waves-effect waves-light'><i class='material-icons'>edit</i></a></td>
                    <td><a id='$id' data-target='excluirTarefaModal' onclick='excluirTarefa($id)' class='btn modal-trigger btn-floating red modal-trigger'><i class='material-icons'>delete</i></a></td>
                </tr>";
endwhile;

$dados .= "
            </tbody>
        </table>";

echo $dados;

// Encerrando a conexão
mysqli_close($conn);
?>
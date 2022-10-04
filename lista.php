<?php
// Importando o banco de dados
require_once 'php/includes/connect.php';

// Preprando uma consulta para obter todos os dados da tabela tarefas
$sql = "SELECT * FROM tarefas ORDER BY ordem";
$query = mysqli_query($conn, $sql);

// Iniciando uma string contendo o HTML
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
// Percorre o resultado, transforma em um array e imprime cada linha
while ($row = $result = mysqli_fetch_array($query)):
    // Inicia a verivel 
    $c = '';

    // Extrai as informações do array em variaveis
    extract($row);

    // Verifica se o campo custo e maior que mil
    if ($custo >= 1000) {
        $c = 'class=amber lighten-5'; // Adiciona uma classe de cor
    }
    // Concatenando a uma linha na tabela
    $dados .= "
                <tr $c>
                    <td>$nom_tarefa</td>
                    <td>$custo</td>
                    <td>$data_limite</td>
                    <td><a id='$id' data-target='editTarefaModal' onclick='editarTarefa($id)' class='btn modal-trigger btn-floating amber waves-effect waves-light'><i class='material-icons'>edit</i></a></td>
                    <td><a id='$id' data-target='excluirTarefaModal' onclick='excluirTarefa($id)' class='btn modal-trigger btn-floating red modal-trigger'><i class='material-icons'>delete</i></a></td>
                </tr>";
endwhile;

// Concatenando o fim da tabela
$dados .= "
            </tbody>
        </table>";

// Imprimindo o resultado na pagina
echo $dados;

// Encerrando a conexão
mysqli_close($conn);
?>
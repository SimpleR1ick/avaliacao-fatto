// Retorna o primeiro elemento body que encontrar
const tbody = document.querySelector('.listar-tarefas');

/**
 * Função para gerar a tabela do crud
 * 
 *@author Henrique Dalmagro
 */
const listarTarefas = async () => {
    const dados = await fetch("./lista.php"); // Aguardando o processamento
    const resposta = await dados.text(); // Arguarda o recebimento da view com json
    tbody.innerHTML = resposta;
}
// Invocando a função
listarTarefas();

/**
 * Função receber e escrever os dados de uma tarefa nos campos do formulario
 * 
 * @param {int} id da tarefa
 * 
 * @author Henrique Dalmagro
 */
async function editarTarefa(id) {
    const dados = await fetch('./visualizar.php?id=' + id); // Aguardando o processamento
    const resposta = await dados.json();

    // Obtendo os id dos inputs e adicionando os dados recebidos a eles
    document.getElementById('edit_id').value = resposta['dados'].id;
    document.getElementById('edit_nome').value = resposta['dados'].nom_tarefa;
    document.getElementById('edit_custo').value = resposta['dados'].custo;
    document.getElementById('edit_data').value = resposta['dados'].data_limite;
    document.getElementById('edit_ordem').value = resposta['dados'].ordem;
}

/**
 * Função para receber o id da tarefa a ser excluida
 * 
 * @param {int} id 
 */
async function excluirTarefa(id) {
    const dados = await fetch('./visualizar.php?id=' + id); // Aguardando o processamento
    const resposta = await dados.json(); // Arguarda o recebimento da view com json

    // Obtendo o id do hidden input com o id da tarefa
    document.getElementById('delete_id').value = resposta['dados'].id;
}

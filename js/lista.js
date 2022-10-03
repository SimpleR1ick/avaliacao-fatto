const tbody = document.querySelector('.listar-tarefas');

const listarTarefas = async () => {
    const dados = await fetch("./lista.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarTarefas();

async function editarTarefa(id) {
    const dados = await fetch('./visualizar.php?id=' + id);
    const resposta = await dados.json();

    document.getElementById('edit_id').value = resposta['dados'].id;
    document.getElementById('edit_nome').value = resposta['dados'].nom_tarefa;
    document.getElementById('edit_custo').value = resposta['dados'].custo;
    document.getElementById('edit_data').value = resposta['dados'].data_limite;
    document.getElementById('edit_ordem').value = resposta['dados'].ordem;
}

async function excluirTarefa(id) {
    const dados = await fetch('./visualizar.php?id=' + id);
    const resposta = await dados.json();

    document.getElementById('delete_id').value = resposta['dados'].id;
}

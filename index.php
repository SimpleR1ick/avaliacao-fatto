<?php include_once 'php/includes/mensagem.php'; ?>

<!-- Header -->
<?php include_once 'header.php'; ?>

<!-- Body -->
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="light center-align">Tarefas</h3>

                <spam class="listar-tarefas"></spam>

                <script src="js/lista.js"></script>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="editTarefaModal" class="modal">
        <div class="modal-content">
            <div class="row">
                <h4 class="center-align">Editar tarefa</h4>
                <form action="php/post/editar.php" method="POST">
                    <input type="hidden" name="id" id="edit_id">

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">title</i>
                            <input name="nome" id="edit_nome" type="text" class="validate">
                            <span class="helper-text">Nome</span>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">attach_money</i>
                            <input name="custo" id="edit_custo" type="text" class="validate">
                            <span class="helper-text">Custo</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">event</i>
                            <input name="data" id="edit_data" type="text" class="datepicker">
                            <span class="helper-text">Data</span>
                        </div>
                        <div class="input-field col s6 center-align">
                            Ordem
                            <div class="input-field inline">
                                <input name="ordem" id="edit_ordem" type="number" class="validate">
                                <span class="helper-text">Prioridade</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="center-align">
                            <button class="btn light-blue" type="submit" name="btn-editar">Atualizar</button>
                            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="excluirTarefaModal" class="modal">
        <div class="modal-content">
            <h4>Atenção!</h4>
            <p>Deseja excluir essa tarefa?</p>
        </div>
        <div class="modal-footer">

            <form action="php/post/excluir.php" method="POST">
                <input type="hidden" name="delete_id" id="delete_id">
                <button class="btn red" type="submit" name="btn-deletar">Sim, excluir</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </form>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
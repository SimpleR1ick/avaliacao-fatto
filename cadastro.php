<!-- Header -->
<?php include_once 'header.php'; ?>

<!-- Body -->
<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="nome_tarefa" type="text" class="validate">
                <label for="nome_tarefa">Nome</label>
            </div>
            <div class="input-field col s6">
                <input id="custo" type="text" class="validate">
                <label for="custo">Custo</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="data" type="text" class="datepicker">
                <label for="data">Data limite</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                Ordem de apresentação:
                <div class="input-field inline">
                    <input id="ordem" type="number" class="validate">
                    <span class="helper-text">Prioridade</span>
                </div>
            </div>
        </div>

        <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
<!-- Header -->
<?php include_once 'header.php'; ?>

<!-- Body -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Definindo o formato de data
        var options = {
            autoClose: true,
            format: 'dd/mm/yyyy',
        };

        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, options);
    });
</script>

<main>
    <div class="container">
        <div class="row">
            <form class="col s12 m6 push-m3">
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
    </div>
</main>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
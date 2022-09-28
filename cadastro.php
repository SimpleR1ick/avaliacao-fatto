<!-- Header -->
<?php include_once 'header.php'; ?>

<!-- Body -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Definindo o formato de data
        var options = {
            autoClose: true,
            format: 'yyyy-mm-dd',
        };

        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, options);
    });
</script>

<main>
    <div class="container">
        <div class="row">
            <form class="col s12 m6 push-m3" action="php/post/cadastrar.php" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="nome" id="nome" type="text" class="validate" required>
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="custo" id="custo" type="text" class="validate" required>
                        <label for="custo">Custo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="data" id="data" type="text" class="datepicker" required>
                        <label for="data">Data limite</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        Ordem de apresentação:
                        <div class="input-field inline">
                            <input name="ordem" id="ordem" type="number" class="validate" required>
                            <span class="helper-text">Prioridade</span>
                        </div>
                    </div>
                </div>

                <div class="center-align">
                    <button class="btn waves-effect waves-light" type="submit" name="btn-cadastrar">Salvar
                        <i class="material-icons right">description</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
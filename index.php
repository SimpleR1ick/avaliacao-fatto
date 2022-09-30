<?php require_once 'php/includes/connect.php'; ?>

<!-- Header -->
<?php include_once 'header.php'; ?>

<!-- Body -->
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="light"> Tarefas </h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Custo:</th>
                            <th>Data:</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php
                            $conn = db_connect();

                            $sql = "SELECT * FROM tarefas";
                            $query = mysqli_query($conn, $sql);

                            mysqli_close($conn);

                            if (mysqli_num_rows($query) == 0) : ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php else :
                                while ($dados = mysqli_fetch_array($query)) : ?>
                            <td><?php echo ($dados['nom_tarefa']); ?></td>
                            <td><?php echo ($dados['custo']); ?></td>
                            <td><?php echo ($dados['data_limite']); ?></td>
                            <!-- Edit modal Trigerr -->
                            <td><a href="#modal_editar<?php print($dados['id']); ?>" class="btn-floating amber waves-effect waves-light modal-trigger"><i class="material-icons">edit</i></a></td>

                            <!-- Delete modal Trigger -->
                            <td><a href="#modal_excluir<?php print($dados['id']); ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                            <!-- Modal Structure -->
                            <div id="modal_editar<?php echo ($dados['id']); ?>" class="modal">
                                <div class="modal-content">
                                    <div class="row">
                                        <h4>Editar tarefa</h4>
                                        <form action="php/post/editar.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">title</i>
                                                    <input id="nome" type="text" class="validate">
                                                    <label for="nome">Nome tarefa</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">attach_money</i>
                                                    <input id="custo" type="text" class="validate">
                                                    <label for="custo">Custo</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">event</i>
                                                    <input name="data" id="data" type="text" class="datepicker" required>
                                                    <span class="helper-text">Data</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn light-blue" type="submit" name="btn-editar">Atualizar</button>
                                    <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                </div>

                            </div>

                            <!-- Modal Structure -->
                            <div id="modal_excluir<?php echo ($dados['id']); ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Atenção!</h4>
                                    <p>Deseja excluir essa tarefa?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php/post/excluir.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button class="btn red" type="submit" name="btn-deletar">Sim, excluir</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>
                    <?php
                                endwhile;
                            endif;
                    ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
<?php require_once 'connect.php'; ?>

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
                            <td><?php echo('nom_tarefa');?></td>
                            <td><?php echo('custo');?></td>
                            <td><?php echo('data_limite');?></td>
                            <!-- Edit Trigers -->
                            <td><a href="editar.php?<?php print('id='.'1')?>" class="btn-floating waves-effect waves-light amber"><i class="material-icons">edit</i></a></td>
                            <!-- Modal Trigger -->
                            <td><a href="#modal<?php echo('id');?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                            <!-- Modal Structure -->
                            <div id="modal<?php echo('id');?>" class="modal">
                                <div class="modal-content">
                                    <h4>Modal Header</h4>
                                    <p>A bunch of text</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-red btn-flat">Agree</a>
                                </div>
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
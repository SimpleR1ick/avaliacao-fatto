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
                    
                        if (mysqli_num_rows($query) == 0): ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        <?php else:
                            while ($dados = mysqli_fetch_array($query)) : ?>
                                <td><?php echo($dados['nom_tarefa']);?></td>
                                <td><?php echo($dados['custo']);?></td>
                                <td><?php echo($dados['data_limite']);?></td>
                                <!-- Edit Trigers -->
                                <td><a href="editar.php?<?php print($dados['id'])?>" class="btn-floating waves-effect waves-light amber"><i class="material-icons">edit</i></a></td>
                                <!-- Modal Trigger -->
                                <td><a href="#modal<?php echo($dados['id']);?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                                <!-- Modal Structure -->
                                <div id="modal<?php echo($dados['id']);?>" class="modal">
                                    <div class="modal-content">
                                        <h4>Modal Header</h4>
                                        <p>A bunch of text</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Agree</a>
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
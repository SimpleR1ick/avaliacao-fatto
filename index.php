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
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td><a class="btn-floating waves-effect waves-light amber"><i class="material-icons">edit</i></a>
                            <td>
                            <td><a href="" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include_once 'footer.php'; ?>
<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($rotas['0']->CurDateTime); ?>



<div id="standbyRota" class="bhnft-margin-left-space">
    <div>
        <h1 class="d-flex justify-content-center">Info Team Rota</h1>
        <p class="d-flex justify-content-center">last updated: <strong><?= $lastUpdate->format('d/m/Y H:i:s');  ?></strong> </p>
    </div>

    <div class="card-wrapper d-flex flex-wrap ">

        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Date</th>
                        <th scope="col">Role</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rotas as $rota) : ?>
                        <tr>

                            <td rowspan="2"><?= $rota->RDate; ?></td>
                            <td>On Call</td>
                            <td><?= $rota->FirstLine; ?></td>
                        </tr>
                        <tr>


                            <td>Stand by</td>
                            <td><?= $rota->SecondLine; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php require('./views/partials/footer.php'); ?>
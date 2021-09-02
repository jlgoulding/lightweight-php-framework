<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($rotas['0']->CurDateTime);
?>



<div id="standbyRota" class="bhnft-margin-left-space">
    <div>
        <h1 class="d-flex justify-content-center">Executive Rota</h1>
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

                            <td rowspan="6"><?= $rota->CallDate; ?></td>
                            <td>Bronze</td>
                            <td><?= $rota->Bronze; ?></td>
                        </tr>
                        <tr>
                            <td>Sivler</td>
                            <td><?= $rota->Silver; ?></td>
                        </tr>
                        <tr>
                            <td>Gold</td>
                            <td><?= $rota->Gold; ?></td>
                        </tr>
                        <tr>
                            <td>Site Matron</td>
                            <td><?= $rota->SiteMatron; ?></td>
                        </tr>
                        <tr>
                            <td>Matron 212</td>
                            <td><?= $rota->Matron212; ?></td>
                        </tr>
                        <tr>
                            <td>Lead Nurse 212</td>
                            <td><?= $rota->LeadNurse212; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php require('./views/partials/footer.php'); ?>
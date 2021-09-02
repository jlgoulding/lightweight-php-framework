<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($statuses['0']->CurDateTime); ?>

<div id="status" class="bhnft-margin-left-space">
    <div>
        <h1 class="d-flex justify-content-center">Routine Tasks Status</h1>
        <p class="d-flex justify-content-center">last updated: <strong><?= $lastUpdate->format('d/m/Y H:i:s');  ?></strong> </p>
    </div>

    <div id="ramStatus" class="card-wrapper d-flex flex-wrap ">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Routine Tasks</th>
                    <th scope="col">Run Frequency</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statuses as $status) : ?>
                    <tr>
                        <td><?= $status->RoutineJobs; ?></td>
                        <td><?= $status->Frequency; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>


<?php require('./views/partials/footer.php'); ?>
<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($schemas['0']->CurDateTime); ?>


<div id="schemaload" class="bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Schema load status</h1>
        <p class="d-flex justify-content-center"> last update : <?= $lastUpdate->format('d/m/Y H:i:s');  ?></p>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">Job Name</th>
                <th scope="col">Started at</th>
                <th scope="col">Finished at</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            <tr>
                <td><?= $schemasRoutineJobsJ01; ?></td>
                <td><?= $schema->Frequency; ?></td>
                <td><?= $schema->Frequency; ?></td>
            </tr>

            <td>SV-SHAREDB10</td>
            <td>99.19 %</td>
            <td>4624 MB</td>
            </tr>
            <tr>

                <td>SV-SHAREDB10</td>
                <td>99.19 %</td>
                <td>4624 MB</td>
            </tr>
            <tr>

                <td>SV-SHAREDB10</td>
                <td>99.19 %</td>
                <td>4624 MB</td>
            </tr>
        </tbody>
    </table>



    <?php foreach ($schemas as $cardSchema) : ?>
        <div class="card">
            <div class="card-head d-flex justify-content-center">
                <h5 class="card-title"><?= $cardSchema->JobName; ?></h5>
            </div>
            <div class="card-body">
                <ul>
                    <li>Step <?= $cardSchema->StepID; ?> - <?= $cardSchema->StepName; ?></li>
                    <li>Started at <strong><?= $cardSchema->RunStartTime; ?></strong> and ran for <strong><?= $cardSchema->RunDuration; ?></strong></li>
                    <li>Last run duration was <strong><?= $cardSchema->LRunDuration; ?></strong></li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php require('./views/partials/footer.php'); ?>
<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($messages['0']->CurDateTime); ?>


<div>
    <h1 class="d-flex justify-content-center">Volume Status</h1>
    <p class="d-flex justify-content-center">Dashboard last updated: <strong><?= $lastUpdate->format('d/m/Y H:i:s');  ?></strong> </p>
</div>

<div id="volumeStatus" class="card-wrapper d-flex flex-wrap test">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Servers</th>
                <th scope="col">Drive</th>
                <th scope="col">Volume Used</th>
                <th scope="col">Space Left</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($messages as $message) : ?>
                    <td><?= $message->Server ?></td>
                    <td><?= $message->Drive; ?></td>
                    <td><?= $message->VolumeUsed; ?></td>
                    <td><?= $message->SpaceLeft; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php require('./views/partials/footer.php'); ?>
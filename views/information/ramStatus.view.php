<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($messages['0']->CurDateTime); ?>

<div id="ramStatus" class="bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Server Ram Status</h1>
        <p class="d-flex justify-content-center"> last updated : <?= $lastUpdate->format('d/m/Y H:i:s');  ?></p>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">Servers</th>
                <th scope="col">Utilized</th>
                <th scope="col">Last Sync</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($messages as $message) : ?>
                    <td><?= $message->Server; ?></td>
                    <td><?= $message->RAMUsed; ?></td>
                    <td><?= $message->LastSyncDateTime; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require('./views/partials/footer.php'); ?>
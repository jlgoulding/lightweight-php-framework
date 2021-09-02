<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($messages['0']->CurDateTime); ?>


<div id="jobs" class="bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">HL7 Messages</h1>
        <p class="d-flex justify-content-center"> last update : <?= $lastUpdate->format('d/m/Y H:i:s');  ?></p>
    </div>

    <?php foreach ($messages as $message) : ?>
        <div class="card">
            <div class="card-head d-flex justify-content-center">
                <h3><?= $message->Segment; ?></h3>
            </div>
            <div class="card-body">
                <ul>
                    <li>Messages count <strong><?= $message->Total; ?></strong></li>
                    <li>Last Message ID is <strong><?= $message->LastMessageID; ?></strong></li>
                    <li>Last message received <strong><?= $message->MinsSinceLastMessageRecieved; ?></strong></li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?php require('./views/partials/footer.php'); ?>
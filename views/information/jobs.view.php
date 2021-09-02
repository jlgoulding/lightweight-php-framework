<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($jobs['0']->CurDateTime); ?>


<div id="jobs" class=" bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Failed Jobs</h1>
        <p class="d-flex justify-content-center"> last update : <?= $lastUpdate->format('d/m/Y H:i:s');  ?></p>
    </div>
    <?php foreach ($jobs as $job) :
        $lastRun = new DateTime($job->LastRun);
        $nextRun = new DateTime($job->NextRun);
    ?>
        <div class="card">
            <div class="card-head d-flex justify-content-center">
                <h5 class="card-title"><?= $job->ServerName; ?></h5>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 warning"><?= $job->JobName; ?></h6>
                <ul>
                    <li>Job failed at <strong><?= $job->StepID; ?></strong></li>
                    <li>Job Owner <strong><?= $job->JobOwner; ?></strong></li>
                    <li>Last ran at <strong><?= $lastRun->format('d/m/Y H:i:s'); ?></strong></li>
                    <li>Runs next at <strong><?= $nextRun->format('d/m/Y H:i:s'); ?></strong></li>
                </ul>

            </div>
        </div>
    <?php endforeach; ?>




</div>


<?php require('./views/partials/footer.php'); ?>
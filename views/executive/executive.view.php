<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($rotas['0']->CurDateTime);
?>

<div id="information" class=" bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Executive Dashboard</h1>
        <p class="d-flex justify-content-center"> last update : <?= $lastUpdate->format('d/m/Y H:i:s');  ?></p>
    </div>
    <div class="accordion" id="accordionExec">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        SMT Rota
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <?php foreach (array_slice($rotas, 0, 1) as $rota) : ?>
                        <h4>On call this weekend (<?= $rota->CallDate; ?>)</h4>
                        <ul>
                            <li> Bronze<?= $rota->Bronze; ?> </li>
                            <li> Silver<?= $rota->Silver; ?> </li>
                            <li> Gold<?= $rota->Gold; ?> </li>
                            <li> Site Matron<?= $rota->SiteMatron; ?> </li>
                            <li> Matron 212<?= $rota->Matron212; ?> </li>
                            <li> Lead Nurse 212<?= $rota->LeadNurse212; ?> </li>
                        </ul>
                    <?php endforeach; ?>


                </div>
                <a href="/Information/oncall/executive/smtRota" class="btn bhnft-btn-outline float-right m-3">Full Rota</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Scorecards
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    See the latest statistics and information for the hospital.
                </div>
                <a href="/Information/oncall/executive/smtScorecard" class="btn bhnft-btn-outline float-right m-3">Read more</a>
            </div>
        </div>
    </div>

</div>




<?php require('./views/partials/footer.php'); ?>
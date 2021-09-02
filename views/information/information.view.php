<?php require('./views/partials/head.php');
$lastUpdate = new DateTime($jobs['0']->CurDateTime); ?>

<div id="information" class=" bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Information Dashboard</h1>
        <p class="d-flex justify-content-center"> last update : <?= $lastUpdate->format('d/m/Y H:i:s');  ?></p>
    </div>
    <div class="accordion" id="accordionInformation">
        <div class="card">
            <div class="card-header" id="headingOne" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(
      120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Dev Server Failed Jobs
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p>There are <strong><?php echo (count($jobs)); ?></strong> jobs that have failed currently.</p>
                    <ul>
                        <?php foreach (array_slice($jobs, 0, 6) as $test) : ?>
                            <li><strong><?= $test->JobName; ?></strong> - <?= $test->ServerName; ?> </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="/information/jobs" class="btn bhnft-btn-outline float-right m-3">more details</a>

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
                    See the latest information and statistics throughout the hospital.
                </div>
                <a href="/information/scorecards" class="btn bhnft-btn-outline float-right m-3 ">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree" <?php if ($days >= 5) : ?> style="background: linear-gradient(
      120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        HL7 Messages Status
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <?php
                    if ($days >= 5) {
                        echo 'The data from tbl_bhnfthl7messages_app is older then 5 minutes and may have failed to run the job.';
                    } else {
                        echo 'The data from tbl_bhnfthl7messages_app had refreshed within 5 minutes and is running as expected.';
                    }

                    ?>
                </div>
                <a href="/information/hl7messages" class="btn bhnft-btn-outline float-right m-3">Read more</a>

            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        Server Ram Util
                    </button>
                </h2>
            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionInformation">
                <div class="card-body">
                    This will display the RAM utilization of the servers we use.
                </div>
                <a href="/information/ramStatus" class="btn bhnft-btn-outline float-right m-3">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Server Volume Util
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionInformation">
                <div class="card-body">
                    This displayed any drives that are close to being full and will need some maintenance.
                </div>
                <a href="/information/volumestatus" class="btn bhnft-btn-outline float-right m-3">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSix">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Schema Load Jobs Status
                    </button>
                </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionInformation">
                <div class="card-body">
                    Not a clue what this is really displaying, any information would be great.
                </div>
                <a href="/information/schemaload" class="btn bhnft-btn-outline float-right m-3">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Routine Tasks Status
                    </button>
                </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionInformation">
                <div class="card-body">
                    Displays Routine tasks that are carried out.
                    Display warning if tasks have not been run?
                </div>
                <a href="/information/status" class="btn bhnft-btn-outline float-right m-3">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingEight">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Info Team Standby Rota
                    </button>
                </h2>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionInformation">
                <div class="card-body">
                    <?php foreach (array_slice($rotas, 0, 1) as $rota) :  $dateFormat = new DateTime($rotas['0']->CurDateTime); ?>
                        <h4>On call this weekend (<?= $lastUpdate->format('d/m/Y') ?>;)</h4>
                        <p>
                            This weekend <strong><?= $rota->FirstLine; ?></strong> is on Call and <strong><?= $rota->SecondLine; ?></strong>
                            is on standby.
                        <?php endforeach; ?></p>
                </div>
                <a href="/information/standbyrota" class="btn bhnft-btn-outline float-right m-3">Read more</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="album py-5 bg-light">


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(
      120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Dev Server Failed Jobs
                    </div>
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(
      120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Scorecards
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        HL7 Messages Status
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Server Ram Util
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Server Volume Util
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Schema Load Jobs Status
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Routine Tasks Status
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Info Team Standby Rota
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" <?php if (!empty($jobs)) : ?> style="background: linear-gradient(120deg, #ff7300 0%, #ec0854 100%);" <?php endif; ?>>
                        Dev Server Failed Jobs
                    </div>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php require('./views/partials/footer.php'); ?>
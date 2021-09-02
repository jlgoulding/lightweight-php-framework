<?php require('./views/partials/head.php');
 ?>

<div id="scoreCard" class="bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Score Cards</h1>
        <p class="d-flex justify-content-center"> last update : <?= $jobs['0']->CurDateTime ?></p>
    </div>
    <div class="card ">
        <div class="card-head d-flex justify-content-center">
            <h5 class="card-title ">Emergency Department</h5>
        </div>
        <div class="card-body">


            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Attendances</td>
                        <td> <?php echo $jobs['0']->Attendances; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Expected (variance)</td>
                        <td><?php echo $jobs['0']->ExpectedAttendances; ?> (<?php echo $jobs['0']->AttendanceVariance; ?>)</td>
                    </tr>
                    <tr>
                        <td>GP Streamed</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?></td>
                    </tr>
                    <tr>
                        <td>Breaches</td>
                        <td><?php echo $jobs['0']->Breaches; ?></td>
                    </tr>
                    <tr>
                        <td>4 hour performance</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?></td>
                    </tr>
                    <tr>
                        <td>Current Patients</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?></td>
                    </tr>
                    <tr>
                        <td>Triage Waiting Time</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?></td>
                    </tr>
                    <tr>
                        <td>CDM Waiting Time</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?></td>
                    </tr>
                    <tr>
                        <td>Awaiting Bed</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-head d-flex justify-content-center">
            <h5 class="card-title primary">Acute Medical Unit</h5>
        </div>
        <div class="card-body">


            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Occupancy</td>
                        <td><?php echo $jobs['0']->GPStreamed; ?> (<?php echo $jobs['0']->GPStreamed; ?>)</td>
                    </tr>
                    <tr>
                        <td>To be Clerked</td>
                        <td><?php echo $jobs['0']->ToBeClerked; ?></td>
                    </tr>
                    <tr>
                        <td>VTE Recorded</td>
                        <td><?php echo $jobs['0']->VTERecordPercentage; ?> in last 24 hrs</td>
                    </tr>
                    <tr>
                        <td>Discharge Rate</td>
                        <td><?php echo $jobs['0']->DischargePercentage; ?>% in last 24 hrs</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="card">
        <div class="card-head d-flex justify-content-center">
            <h5 class="card-title primary">Site Management Team</h5>
        </div>
        <div class="card-body">


            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Site Matron</td>
                        <td><?php echo $jobs['0']->SiteMatron; ?></td>
                    </tr>
                    <tr>
                        <td>Bronze</td>
                        <td><?php echo $jobs['0']->Bronze; ?></td>
                    </tr>
                    <tr>
                        <td>Silver</td>
                        <td><?php echo $jobs['0']->Silver; ?></td>
                    </tr>
                    <tr>
                        <td>Gold</td>
                        <td><?php echo $jobs['0']->Gold; ?></td>
                    </tr>
                    <tr>
                        <td>Matron 2124 hour performance</td>
                        <td><?php echo $jobs['0']->Matron; ?></td>
                    </tr>
                    <tr>
                        <td>Lead Nurse 212</td>
                        <td><?php echo $jobs['0']->LeadNurse; ?></td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>


</div>


</div>


<?php require('./views/partials/footer.php'); ?>
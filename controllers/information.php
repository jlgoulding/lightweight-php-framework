<?php

$jobs = $app['database']->selectAll('tbl_BHNFTJobs_App');
// die(var_dump($jobs));
$rotas = $app['database']->selectAll('tbl_BHNFTStandbyRota_App');



$messages = $app['database']->selectAll('tbl_BHNFTHL7Messages_App');


$datetime1 = date_create();
$datetime2 = date_create($messages[0]->CurDateTime);
$interval = date_diff($datetime1, $datetime2);
$days = $interval->format('%I ');



require 'views/information/information.view.php';

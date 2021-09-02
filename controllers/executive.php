<?php
$jobs = $app['database']->selectAll('tbl_BHNFTScorecard_App');
$rotas = $app['database']->selectAll('tbl_BHNFTScorecardSMT_App');
// die(var_dump($jobs));
require 'views/executive/executive.view.php';

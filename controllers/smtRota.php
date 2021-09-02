<?php
$rotas = $app['database']->selectAll('tbl_BHNFTScorecardSMT_App');

// die(var_dump($jobs));
require 'views/executive/smtRota.view.php';

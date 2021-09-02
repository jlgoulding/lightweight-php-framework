<?php
// $names = $app['database']->selectAll('employee');
$jobs = $app['database']->selectAll('tbl_BHNFTScorecard_App');
// die(var_dump($jobs));
// die(var_dump($names));
require 'views/home.view.php';

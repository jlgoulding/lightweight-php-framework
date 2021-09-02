<?php

$jobs = $app['database']->selectAll('tbl_BHNFTScorecard_App');
//  var_dump($jobs);
require 'views/executive/smtScorecard.view.php';

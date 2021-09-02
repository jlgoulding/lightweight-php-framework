<?php
$jobs = $app['database']->selectAll('tbl_BHNFTJobs_App');
require 'views/information/jobs.view.php';

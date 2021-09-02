<?php
$jobs = $app['database']->selectAll('tbl_bhnftjobs_app');
// die(var_dump($jobs));
require 'views/home.view.php';

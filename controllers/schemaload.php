<?php
$schemas = $app['database']->selectAll('tbl_BHNFTLoadJobs_App');
// die(var_dump($schemas));
require 'views/information/schemaload.view.php';

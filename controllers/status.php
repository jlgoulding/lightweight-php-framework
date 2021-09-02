<?php
$statuses = $app['database']->selectAll('tbl_BHNFTStatus_App');
require 'views/information/status.view.php';

<?php

$messages = $app['database']->selectAll('tbl_BHNFTServersRAMStatus_App');
// die(var_dump($messages));
require 'views/information/ramStatus.view.php';

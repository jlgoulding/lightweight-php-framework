<?php

$messages = $app['database']->selectAll('tbl_BHNFTServersVolumeStatus_App');
// die(var_dump($messages));
require 'views/information/volumestatus.view.php';
